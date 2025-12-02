<?php
/**
 * Exemplo de uso do EmailService para processar formulário de contato
 */

// Inclui o EmailService
require_once __DIR__ . '/../includes/EmailService.php';

// Verifica se é uma requisição POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Validação básica dos campos
    $errors = [];
    
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');
    $empresa = trim($_POST['empresa'] ?? '');
    $assunto = trim($_POST['assunto'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');
    
    // Validações
    if (empty($nome)) {
        $errors[] = 'Nome é obrigatório';
    }
    
    if (empty($email)) {
        $errors[] = 'Email é obrigatório';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email inválido';
    }
    
    if (empty($mensagem)) {
        $errors[] = 'Mensagem é obrigatória';
    }
    
    // Se não houver erros, envia o email
    if (empty($errors)) {
        
        // Prepara os dados para envio
        $dados = [
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'empresa' => $empresa,
            'assunto' => $assunto,
            'mensagem' => $mensagem,
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'N/A',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'N/A'
        ];
        
        // Instancia o serviço de email e envia
        $emailService = new EmailService();
        $resultado = $emailService->sendContactForm($dados);
        
        // Retorna resposta em JSON
        header('Content-Type: application/json');
        echo json_encode($resultado);
        
        // Log do envio (opcional)
        if ($resultado['success']) {
            error_log("Email de contato enviado com sucesso de: " . $email);
        } else {
            error_log("Falha ao enviar email de contato de: " . $email);
        }
        
    } else {
        // Retorna erros de validação
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Erro de validação',
            'errors' => $errors
        ]);
    }
    
    exit;
}

// Se não for POST, retorna erro
header('Content-Type: application/json');
http_response_code(405);
echo json_encode([
    'success' => false,
    'message' => 'Método não permitido'
]);

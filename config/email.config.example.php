<?php
/**
 * Configurações de Email - PHPMailer
 * 
 * IMPORTANTE: Copie este arquivo para email.config.php e preencha com suas credenciais reais
 * O arquivo email.config.php está no .gitignore e NÃO será enviado ao GitHub
 */

// Configurações SMTP
define('SMTP_HOST', 'mail.seudominio.com.br'); // Seu servidor SMTP
define('SMTP_PORT', 587); // 587 para TLS, 465 para SSL
define('SMTP_SECURE', 'tls'); // 'tls' ou 'ssl'
define('SMTP_USERNAME', 'seu-email@dominio.com'); // Seu email
define('SMTP_PASSWORD', 'sua-senha-aqui'); // Senha do email

// Configurações do remetente
define('EMAIL_FROM', 'seu-email@dominio.com'); // Email remetente (mesmo do SMTP_USERNAME)
define('EMAIL_FROM_NAME', 'Sua Empresa'); // Nome do remetente

// Email(s) destinatário(s) para receber os formulários de contato
define('EMAIL_TO', 'contato@seudominio.com'); // Email que receberá os formulários
define('EMAIL_TO_NAME', 'Equipe Suporte'); // Nome do destinatário

// Configurações gerais
define('EMAIL_CHARSET', 'UTF-8');
define('EMAIL_DEBUG', 0); // 0 = desligado, 1 = mensagens do cliente, 2 = mensagens cliente e servidor

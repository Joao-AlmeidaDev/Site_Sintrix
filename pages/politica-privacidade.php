<?php
$base = (strpos($_SERVER['REQUEST_URI'], '/pages/') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . '/../includes/google-analytics.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade - Sintrix</title>
    <link rel="stylesheet" href="<?php echo $base; ?>public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .legal-page {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.9), rgba(15, 52, 96, 0.8));
            min-height: 100vh;
            padding: 120px 0 80px;
        }
        
        .legal-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .legal-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .legal-header h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #ffffff, var(--primary-color));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .legal-header .last-update {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.95rem;
        }
        
        .legal-content {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.9), rgba(15, 52, 96, 0.7));
            border: 1px solid rgba(0, 212, 255, 0.2);
            border-radius: 25px;
            padding: 50px;
        }
        
        .legal-content h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-top: 40px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .legal-content h2:first-child {
            margin-top: 0;
        }
        
        .legal-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #ffffff;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        
        .legal-content p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
            margin-bottom: 15px;
        }
        
        .legal-content ul {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
            margin-bottom: 20px;
            padding-left: 30px;
        }
        
        .legal-content li {
            margin-bottom: 10px;
        }
        
        .legal-content strong {
            color: #ffffff;
        }
        
        .highlight-box {
            background: rgba(0, 212, 255, 0.1);
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .back-button:hover {
            background: rgba(0, 212, 255, 0.2);
            transform: translateX(-5px);
        }
        
        @media (max-width: 768px) {
            .legal-page {
                padding: 100px 0 60px;
            }
            
            .legal-header h1 {
                font-size: 2rem;
            }
            
            .legal-content {
                padding: 30px 20px;
            }
            
            .legal-content h2 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    
    <section class="legal-page">
        <div class="legal-container">
            <a href="<?php echo $base; ?>index.php" class="back-button">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar para o Site</span>
            </a>
            
            <div class="legal-header">
                <h1><i class="fas fa-shield-alt"></i> Política de Privacidade</h1>
                <p class="last-update">Última atualização: 01 de dezembro de 2025</p>
            </div>
            
            <div class="legal-content">
                <div class="highlight-box">
                    <p><strong>Resumo:</strong> A Sintrix está comprometida com a proteção da sua privacidade e dos seus dados pessoais. Esta política explica como coletamos, usamos e protegemos suas informações de acordo com a LGPD (Lei Geral de Proteção de Dados).</p>
                </div>
                
                <h2><i class="fas fa-info-circle"></i> 1. Informações que Coletamos</h2>
                <p>Coletamos diferentes tipos de informações para fornecer e melhorar nossos serviços:</p>
                
                <h3>1.1 Informações Fornecidas por Você</h3>
                <ul>
                    <li><strong>Dados de Cadastro:</strong> Nome, e-mail, telefone, empresa e cargo quando você solicita contato ou proposta</li>
                    <li><strong>Dados de Comunicação:</strong> Informações que você fornece ao entrar em contato conosco</li>
                    <li><strong>Dados de Serviço:</strong> Informações relacionadas à contratação e uso de nossos serviços</li>
                </ul>
                
                <h3>1.2 Informações Coletadas Automaticamente</h3>
                <ul>
                    <li><strong>Dados de Navegação:</strong> Endereço IP, tipo de navegador, páginas visitadas e tempo de permanência</li>
                    <li><strong>Cookies:</strong> Pequenos arquivos armazenados no seu dispositivo (veja nossa <a href="politica-cookies.php" style="color: var(--primary-color);">Política de Cookies</a>)</li>
                    <li><strong>Dados de Dispositivo:</strong> Tipo de dispositivo, sistema operacional e resolução de tela</li>
                </ul>
                
                <h2><i class="fas fa-bullseye"></i> 2. Como Usamos suas Informações</h2>
                <p>Utilizamos suas informações pessoais para os seguintes propósitos:</p>
                <ul>
                    <li><strong>Fornecer Serviços:</strong> Processar solicitações, fornecer suporte técnico e entregar nossos serviços</li>
                    <li><strong>Comunicação:</strong> Responder suas dúvidas, enviar propostas comerciais e atualizações importantes</li>
                    <li><strong>Melhorar Serviços:</strong> Analisar o uso do site para melhorar funcionalidades e experiência do usuário</li>
                    <li><strong>Segurança:</strong> Proteger contra fraudes, abusos e atividades ilegais</li>
                    <li><strong>Conformidade Legal:</strong> Cumprir obrigações legais e regulatórias</li>
                </ul>
                
                <h2><i class="fas fa-share-alt"></i> 3. Compartilhamento de Informações</h2>
                <p>A Sintrix não vende, aluga ou compartilha suas informações pessoais com terceiros, exceto nas seguintes situações:</p>
                <ul>
                    <li><strong>Prestadores de Serviço:</strong> Com parceiros que nos ajudam a fornecer nossos serviços (hospedagem, análise de dados)</li>
                    <li><strong>Requisitos Legais:</strong> Quando exigido por lei, ordem judicial ou autoridade competente</li>
                    <li><strong>Proteção de Direitos:</strong> Para proteger nossos direitos, propriedade ou segurança</li>
                    <li><strong>Com seu Consentimento:</strong> Quando você autoriza explicitamente o compartilhamento</li>
                </ul>
                
                <h2><i class="fas fa-lock"></i> 4. Segurança dos Dados</h2>
                <p>Implementamos medidas técnicas e organizacionais para proteger suas informações:</p>
                <ul>
                    <li><strong>Criptografia:</strong> Uso de SSL/TLS para proteger dados em trânsito</li>
                    <li><strong>Controle de Acesso:</strong> Acesso restrito apenas a funcionários autorizados</li>
                    <li><strong>Monitoramento:</strong> Sistemas de detecção e prevenção de ameaças 24/7</li>
                    <li><strong>Backups:</strong> Backups regulares para prevenir perda de dados</li>
                    <li><strong>Auditorias:</strong> Revisões periódicas de segurança e conformidade</li>
                </ul>
                
                <h2><i class="fas fa-user-check"></i> 5. Seus Direitos (LGPD)</h2>
                <p>Conforme a Lei Geral de Proteção de Dados, você tem os seguintes direitos:</p>
                <ul>
                    <li><strong>Acesso:</strong> Confirmar se tratamos seus dados e solicitar uma cópia</li>
                    <li><strong>Correção:</strong> Corrigir dados incompletos, inexatos ou desatualizados</li>
                    <li><strong>Exclusão:</strong> Solicitar a exclusão de dados desnecessários ou tratados com seu consentimento</li>
                    <li><strong>Portabilidade:</strong> Receber seus dados em formato estruturado e legível</li>
                    <li><strong>Revogação:</strong> Revogar o consentimento a qualquer momento</li>
                    <li><strong>Oposição:</strong> Opor-se ao tratamento de dados em determinadas situações</li>
                </ul>
                
                <div class="highlight-box">
                    <p><strong>Para exercer seus direitos, entre em contato:</strong></p>
                    <p>📧 E-mail: privacidade@sintrix.com.br</p>
                    <p>📱 Telefone: (11) 97377-4109</p>
                </div>
                
                <h2><i class="fas fa-clock"></i> 6. Retenção de Dados</h2>
                <p>Mantemos suas informações pessoais apenas pelo tempo necessário para:</p>
                <ul>
                    <li>Cumprir os propósitos descritos nesta política</li>
                    <li>Atender requisitos legais e regulatórios</li>
                    <li>Resolver disputas e fazer cumprir nossos acordos</li>
                </ul>
                <p>Após esse período, seus dados são excluídos ou anonimizados de forma segura.</p>
                
                <h2><i class="fas fa-child"></i> 7. Proteção de Menores</h2>
                <p>Nossos serviços não são direcionados a menores de 18 anos. Não coletamos intencionalmente informações de crianças ou adolescentes. Se descobrirmos que coletamos dados de menores, tomaremos medidas para excluí-los imediatamente.</p>
                
                <h2><i class="fas fa-edit"></i> 8. Alterações nesta Política</h2>
                <p>Podemos atualizar esta Política de Privacidade periodicamente. Notificaremos sobre mudanças significativas através de:</p>
                <ul>
                    <li>Aviso em nosso site</li>
                    <li>E-mail para usuários registrados</li>
                    <li>Atualização da data "Última atualização" no topo desta página</li>
                </ul>
                <p>Recomendamos que você revise esta política regularmente.</p>
                
                <h2><i class="fas fa-envelope"></i> 9. Entre em Contato</h2>
                <p>Se você tiver dúvidas, preocupações ou solicitações relacionadas à privacidade:</p>
                
                <div class="highlight-box">
                    <p><strong>Sintrix Soluções Tecnológicas</strong></p>
                    <p>📧 E-mail: privacidade@sintrix.com.br</p>
                    <p>📱 Telefone: (11) 97377-4109</p>
                    <p>🌐 Site: www.sintrix.com.br</p>
                    <p><strong>Encarregado de Dados (DPO):</strong> disponível através dos contatos acima</p>
                </div>
                
                <h2><i class="fas fa-gavel"></i> 10. Base Legal</h2>
                <p>O tratamento de dados pessoais pela Sintrix é realizado com base nas seguintes hipóteses legais da LGPD:</p>
                <ul>
                    <li><strong>Consentimento:</strong> Quando você autoriza expressamente o tratamento</li>
                    <li><strong>Execução de Contrato:</strong> Para fornecer os serviços contratados</li>
                    <li><strong>Legítimo Interesse:</strong> Para melhorar nossos serviços e prevenir fraudes</li>
                    <li><strong>Obrigação Legal:</strong> Para cumprir requisitos legais e regulatórios</li>
                </ul>
            </div>
        </div>
    </section>
    
    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <?php include __DIR__ . '/../includes/cookie-banner.php'; ?>
    <?php include __DIR__ . '/../includes/analytics-tracking.php'; ?>
    <script src="<?php echo $base; ?>public/js/script.js"></script>
</body>
</html>

<?php
/**
 * Classe para envio de emails usando PHPMailer
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailService {
    private $mailer;

    public function __construct() {
        require_once __DIR__ . '/../vendor/autoload.php';
        require_once __DIR__ . '/../config/email.config.php';

        $this->mailer = new PHPMailer(true);
        $this->configureSMTP();
    }

    private function configureSMTP() {
        try {
            // Configurações do servidor SMTP
            $this->mailer->isSMTP();
            $this->mailer->Host = SMTP_HOST;
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = SMTP_USERNAME;
            $this->mailer->Password = SMTP_PASSWORD;
            $this->mailer->SMTPSecure = SMTP_SECURE;
            $this->mailer->Port = SMTP_PORT;
            $this->mailer->CharSet = EMAIL_CHARSET;
            $this->mailer->SMTPDebug = EMAIL_DEBUG;

            // Configurações do remetente padrão
            $this->mailer->setFrom(EMAIL_FROM, EMAIL_FROM_NAME);
        } catch (Exception $e) {
            error_log("Erro ao configurar SMTP: " . $e->getMessage());
        }
    }

    /**
     * Envia email de formulário de contato
     * 
     * @param array $data Array com os dados do formulário (nome, email, telefone, mensagem, etc)
     * @return array Array com 'success' (bool) e 'message' (string)
     */
    public function sendContactForm($data) {
        try {
            // Limpa configurações anteriores
            $this->mailer->clearAddresses();
            $this->mailer->clearAttachments();

            // Destinatário
            $this->mailer->addAddress(EMAIL_TO, EMAIL_TO_NAME);

            // Reply-To (responder para o cliente)
            if (isset($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->mailer->addReplyTo($data['email'], $data['nome'] ?? '');
            }

            // Assunto
            $subject = 'Novo contato do site - ' . ($data['assunto'] ?? 'Formulário de Contato');
            $this->mailer->Subject = $subject;

            // Corpo do email em HTML
            $this->mailer->isHTML(true);
            $this->mailer->Body = $this->buildEmailBody($data);

            // Versão em texto simples
            $this->mailer->AltBody = $this->buildTextBody($data);

            // Envia o email
            $this->mailer->send();

            return [
                'success' => true,
                'message' => 'Email enviado com sucesso!'
            ];

        } catch (Exception $e) {
            error_log("Erro ao enviar email: " . $this->mailer->ErrorInfo);
            return [
                'success' => false,
                'message' => 'Erro ao enviar email. Por favor, tente novamente mais tarde.'
            ];
        }
    }

    /**
     * Constrói o corpo do email em HTML
     */
    private function buildEmailBody($data) {
        // Tradução dos campos
        $fieldLabels = [
            'nome' => 'Nome',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'empresa' => 'Empresa',
            'assunto' => 'Serviço de Interesse',
            'mensagem' => 'Mensagem',
            'form_id' => 'Origem'
        ];

        $html = '
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                * { margin: 0; padding: 0; box-sizing: border-box; }
                body { 
                    font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
                    background: #0D0D0D;
                    padding: 40px 20px;
                    line-height: 1.6;
                }
                .email-wrapper { 
                    max-width: 600px; 
                    margin: 0 auto; 
                    background: linear-gradient(135deg, #0D0D0D 0%, #121217 100%);
                    border-radius: 20px;
                    overflow: hidden;
                    border: 1px solid rgba(255,255,255,0.06);
                    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8);
                }
                
                /* Header com gradiente roxo/ciano */
                .header { 
                    background: linear-gradient(135deg, #7B2FFF 0%, #00D9FF 100%);
                    padding: 50px 40px;
                    text-align: center;
                    position: relative;
                    overflow: hidden;
                }
                .header::before {
                    content: "";
                    position: absolute;
                    top: -50%;
                    right: -50%;
                    width: 200%;
                    height: 200%;
                    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
                    animation: pulse 4s ease-in-out infinite;
                }
                @keyframes pulse {
                    0%, 100% { transform: scale(1); opacity: 0.5; }
                    50% { transform: scale(1.1); opacity: 0.8; }
                }
                
                .logo-container {
                    position: relative;
                    z-index: 1;
                    margin-bottom: 20px;
                }
                .logo {
                    font-size: 42px;
                    font-weight: 900;
                    color: #FFFFFF;
                    letter-spacing: 4px;
                    text-shadow: 0 4px 20px rgba(0,0,0,0.3);
                    font-family: "Space Grotesk", sans-serif;
                }
                .header-subtitle {
                    position: relative;
                    z-index: 1;
                    color: rgba(255, 255, 255, 0.95);
                    font-size: 14px;
                    font-weight: 500;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                }
                
                .badge {
                    position: relative;
                    z-index: 1;
                    display: inline-block;
                    background: rgba(255, 255, 255, 0.15);
                    backdrop-filter: blur(10px);
                    color: white;
                    padding: 12px 28px;
                    border-radius: 30px;
                    font-size: 13px;
                    font-weight: 700;
                    margin-top: 20px;
                    border: 1px solid rgba(255,255,255,0.2);
                    letter-spacing: 1px;
                    text-transform: uppercase;
                }
                
                /* Conteúdo */
                .content { 
                    padding: 40px;
                    background: #121217;
                }
                
                .alert-box {
                    background: linear-gradient(135deg, rgba(123, 47, 255, 0.1) 0%, rgba(0, 217, 255, 0.1) 100%);
                    border-left: 4px solid #7B2FFF;
                    padding: 20px;
                    border-radius: 12px;
                    margin-bottom: 30px;
                    color: #E8E8E8;
                    font-size: 14px;
                }
                
                .field { 
                    margin-bottom: 24px;
                }
                .label { 
                    font-weight: 600;
                    color: #00FF88;
                    font-size: 12px;
                    margin-bottom: 8px;
                    display: block;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                }
                .value { 
                    padding: 16px 20px;
                    background: #1E1E24;
                    border-radius: 12px;
                    color: #FFFFFF;
                    font-size: 15px;
                    border: 1px solid rgba(255,255,255,0.06);
                    word-wrap: break-word;
                }
                
                .message-box {
                    background: #1E1E24;
                    border: 2px solid rgba(123, 47, 255, 0.3);
                    border-radius: 12px;
                    padding: 24px;
                    margin: 30px 0;
                }
                .message-box .label {
                    color: #FF0080;
                    font-size: 13px;
                    margin-bottom: 12px;
                }
                .message-box .value {
                    background: transparent;
                    border: none;
                    padding: 0;
                    color: #E8E8E8;
                    line-height: 1.8;
                    font-size: 15px;
                }
                
                .divider {
                    height: 1px;
                    background: linear-gradient(90deg, transparent, rgba(123, 47, 255, 0.5), transparent);
                    margin: 30px 0;
                }
                
                /* Footer */
                .footer { 
                    background: #0D0D0D;
                    padding: 30px 40px;
                    text-align: center;
                    border-top: 1px solid rgba(255,255,255,0.06);
                }
                .footer-text {
                    color: #A8B0BE;
                    font-size: 13px;
                    margin-bottom: 12px;
                }
                .timestamp {
                    color: #A8B0BE;
                    font-size: 12px;
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    padding: 10px 20px;
                    background: #1E1E24;
                    border-radius: 20px;
                    margin: 15px 0;
                    border: 1px solid rgba(255,255,255,0.06);
                }
                .company-info {
                    margin-top: 20px;
                    padding-top: 20px;
                    border-top: 1px solid rgba(255,255,255,0.06);
                }
                .company-name {
                    background: linear-gradient(135deg, #7B2FFF 0%, #00D9FF 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-clip: text;
                    font-weight: 800;
                    font-size: 16px;
                    margin-bottom: 8px;
                    letter-spacing: 2px;
                }
                .company-tagline {
                    color: #A8B0BE;
                    font-size: 12px;
                    font-weight: 500;
                }
                
                .tech-info {
                    opacity: 0.5;
                    margin-top: 30px;
                    padding-top: 20px;
                    border-top: 1px solid rgba(255,255,255,0.03);
                }
                .tech-info .field {
                    margin-bottom: 12px;
                }
                .tech-info .label {
                    color: #A8B0BE;
                    font-size: 11px;
                }
                .tech-info .value {
                    padding: 10px 14px;
                    font-size: 12px;
                    background: rgba(30, 30, 36, 0.5);
                }
                
                @media only screen and (max-width: 600px) {
                    body { padding: 20px 10px; }
                    .content, .header, .footer { padding: 30px 20px; }
                    .logo { font-size: 32px; }
                }
            </style>
        </head>
        <body>
            <div class="email-wrapper">
                <!-- Header -->
                <div class="header">
                    <div class="logo-container">
                        <div class="logo">SINTRIX</div>
                    </div>
                    <div class="header-subtitle">Technology Solutions</div>
                    <div class="badge">🎯 Novo Lead</div>
                </div>
                
                <!-- Content -->
                <div class="content">
                    <div class="alert-box">
                        ✨ <strong>Atenção!</strong> Você recebeu uma nova solicitação de contato através do site.
                    </div>';

        // Campos principais
        $mainFields = ['nome', 'email', 'telefone', 'empresa', 'assunto'];
        foreach ($mainFields as $key) {
            if (!empty($data[$key])) {
                $label = $fieldLabels[$key] ?? ucfirst($key);
                $html .= '
                    <div class="field">
                        <span class="label">' . $label . '</span>
                        <div class="value">' . htmlspecialchars($data[$key]) . '</div>
                    </div>';
            }
        }

        // Mensagem (destaque especial)
        if (!empty($data['mensagem'])) {
            $mensagemCompleta = $data['mensagem'];
            
            // Separar mensagem principal dos detalhes do serviço
            if (strpos($mensagemCompleta, '--- Detalhes do Serviço ---') !== false) {
                $partes = explode('--- Detalhes do Serviço ---', $mensagemCompleta);
                $mensagemPrincipal = trim($partes[0]);
                $detalhesServico = isset($partes[1]) ? trim($partes[1]) : '';
                
                // Exibir mensagem principal
                if ($mensagemPrincipal) {
                    $html .= '
                    <div class="divider"></div>
                    <div class="message-box">
                        <span class="label">💬 Mensagem</span>
                        <div class="value">' . nl2br(htmlspecialchars($mensagemPrincipal)) . '</div>
                    </div>';
                }
                
                // Exibir detalhes do serviço em seção separada
                if ($detalhesServico) {
                    $html .= '
                    <div class="divider"></div>
                    <div style="background: linear-gradient(135deg, rgba(0, 255, 136, 0.05) 0%, rgba(0, 217, 255, 0.05) 100%); border-left: 4px solid #00FF88; padding: 20px; border-radius: 12px; margin: 20px 0;">
                        <span class="label" style="color: #00FF88; font-size: 14px; margin-bottom: 15px; display: block;">📋 Detalhes do Serviço Solicitado</span>
                        <div style="color: #E8E8E8; font-size: 15px; line-height: 2;">
                            ' . nl2br(htmlspecialchars($detalhesServico)) . '
                        </div>
                    </div>
                    <div class="divider"></div>';
                }
            } else {
                // Mensagem simples sem detalhes
                $html .= '
                    <div class="divider"></div>
                    <div class="message-box">
                        <span class="label">💬 Mensagem</span>
                        <div class="value">' . nl2br(htmlspecialchars($mensagemCompleta)) . '</div>
                    </div>
                    <div class="divider"></div>';
            }
        }

        // Informações técnicas
        if (!empty($data['form_id']) || !empty($data['ip'])) {
            $html .= '<div class="tech-info">';
            
            if (!empty($data['form_id'])) {
                $html .= '
                    <div class="field">
                        <span class="label">Formulário</span>
                        <div class="value">' . htmlspecialchars($data['form_id']) . '</div>
                    </div>';
            }
            
            if (!empty($data['ip'])) {
                $html .= '
                    <div class="field">
                        <span class="label">IP</span>
                        <div class="value">' . htmlspecialchars($data['ip']) . '</div>
                    </div>';
            }
            
            $html .= '</div>';
        }

        $html .= '
                </div>
                
                <!-- Footer -->
                <div class="footer">
                    <div class="footer-text">Email enviado automaticamente pelo sistema</div>
                    <div class="timestamp">
                        🕐 ' . date('d/m/Y') . ' às ' . date('H:i:s') . '
                    </div>
                    <div class="company-info">
                        <div class="company-name">SINTRIX</div>
                        <div class="company-tagline">23 anos transformando negócios através da tecnologia</div>
                    </div>
                </div>
            </div>
        </body>
        </html>';

        return $html;
    }

    /**
     * Constrói o corpo do email em texto simples
     */
    private function buildTextBody($data) {
        $text = "NOVO CONTATO DO SITE\n";
        $text .= str_repeat("=", 50) . "\n\n";

        foreach ($data as $key => $value) {
            if (!empty($value)) {
                $label = ucfirst(str_replace('_', ' ', $key));
                $text .= strtoupper($label) . ":\n" . $value . "\n\n";
            }
        }

        $text .= str_repeat("=", 50) . "\n";
        $text .= "Data/Hora: " . date('d/m/Y H:i:s') . "\n";
        $text .= "Este email foi enviado através do formulário de contato do site Sintrix.";

        return $text;
    }

    /**
     * Envia email personalizado
     * 
     * @param string $to Email destinatário
     * @param string $subject Assunto
     * @param string $body Corpo do email (HTML)
     * @param string $altBody Corpo alternativo (texto simples)
     * @return array Array com 'success' (bool) e 'message' (string)
     */
    public function sendCustomEmail($to, $subject, $body, $altBody = '') {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->clearAttachments();

            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            $this->mailer->isHTML(true);
            $this->mailer->Body = $body;
            $this->mailer->AltBody = $altBody ?: strip_tags($body);

            $this->mailer->send();

            return [
                'success' => true,
                'message' => 'Email enviado com sucesso!'
            ];

        } catch (Exception $e) {
            error_log("Erro ao enviar email: " . $this->mailer->ErrorInfo);
            return [
                'success' => false,
                'message' => 'Erro ao enviar email.'
            ];
        }
    }
}

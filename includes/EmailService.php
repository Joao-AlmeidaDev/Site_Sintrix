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
        $html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #1a1a1a; color: white; padding: 20px; text-align: center; }
                .content { background-color: #f9f9f9; padding: 20px; border: 1px solid #ddd; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #555; }
                .value { margin-top: 5px; padding: 10px; background-color: white; border-left: 3px solid #1a1a1a; }
                .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #777; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Novo Contato do Site</h2>
                </div>
                <div class="content">';

        foreach ($data as $key => $value) {
            if (!empty($value)) {
                $label = ucfirst(str_replace('_', ' ', $key));
                $html .= '
                    <div class="field">
                        <div class="label">' . htmlspecialchars($label) . ':</div>
                        <div class="value">' . nl2br(htmlspecialchars($value)) . '</div>
                    </div>';
            }
        }

        $html .= '
                </div>
                <div class="footer">
                    <p>Este email foi enviado através do formulário de contato do site Sintrix.</p>
                    <p>Data/Hora: ' . date('d/m/Y H:i:s') . '</p>
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

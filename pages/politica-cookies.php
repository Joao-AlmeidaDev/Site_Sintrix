<?php
$base = (strpos($_SERVER['REQUEST_URI'], '/pages/') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . '/../includes/google-analytics.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Cookies - Sintrix</title>
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
        
        .cookie-type-card {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 212, 255, 0.2);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .cookie-type-card h3 {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 0 !important;
            margin-bottom: 15px;
        }
        
        .cookie-type-card h3 i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }
        
        .cookie-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .cookie-table th {
            background: rgba(0, 212, 255, 0.2);
            color: #ffffff;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }
        
        .cookie-table td {
            padding: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.8);
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
            
            .cookie-table {
                font-size: 0.85rem;
            }
            
            .cookie-table th,
            .cookie-table td {
                padding: 10px;
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
                <h1><i class="fas fa-cookie-bite"></i> Política de Cookies</h1>
                <p class="last-update">Última atualização: 01 de dezembro de 2025</p>
            </div>
            
            <div class="legal-content">
                <div class="highlight-box">
                    <p><strong>O que são cookies?</strong> Cookies são pequenos arquivos de texto armazenados em seu dispositivo (computador, tablet ou smartphone) quando você visita nosso site. Eles nos ajudam a melhorar sua experiência, lembrar suas preferências e entender como você usa nossos serviços.</p>
                </div>
                
                <h2><i class="fas fa-cookie"></i> 1. Como Usamos Cookies</h2>
                <p>A Sintrix utiliza cookies e tecnologias similares para diversos propósitos:</p>
                <ul>
                    <li><strong>Funcionalidade:</strong> Permitir que o site funcione corretamente</li>
                    <li><strong>Preferências:</strong> Lembrar suas escolhas e configurações</li>
                    <li><strong>Segurança:</strong> Proteger contra fraudes e acessos não autorizados</li>
                    <li><strong>Análise:</strong> Entender como você usa nosso site para melhorá-lo</li>
                    <li><strong>Marketing:</strong> Personalizar conteúdo e anúncios relevantes</li>
                </ul>
                
                <h2><i class="fas fa-list"></i> 2. Tipos de Cookies que Utilizamos</h2>
                
                <div class="cookie-type-card">
                    <h3><i class="fas fa-shield-alt"></i> Cookies Essenciais (Necessários)</h3>
                    <p>Estes cookies são fundamentais para o funcionamento do site e não podem ser desativados. Sem eles, você não conseguiria usar recursos básicos.</p>
                    <table class="cookie-table">
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Finalidade</th>
                                <th>Duração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>session_id</strong></td>
                                <td>Mantém sua sessão ativa enquanto navega</td>
                                <td>Sessão</td>
                            </tr>
                            <tr>
                                <td><strong>cookieConsent</strong></td>
                                <td>Armazena suas preferências de cookies</td>
                                <td>12 meses</td>
                            </tr>
                            <tr>
                                <td><strong>csrf_token</strong></td>
                                <td>Proteção contra ataques CSRF</td>
                                <td>Sessão</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="cookie-type-card">
                    <h3><i class="fas fa-chart-line"></i> Cookies de Análise e Performance</h3>
                    <p>Ajudam-nos a entender como os visitantes interagem com nosso site, coletando informações anônimas sobre páginas visitadas e erros encontrados.</p>
                    <table class="cookie-table">
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Finalidade</th>
                                <th>Duração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>_ga</strong></td>
                                <td>Google Analytics - Distingue usuários</td>
                                <td>2 anos</td>
                            </tr>
                            <tr>
                                <td><strong>_gid</strong></td>
                                <td>Google Analytics - Distingue usuários</td>
                                <td>24 horas</td>
                            </tr>
                            <tr>
                                <td><strong>_gat</strong></td>
                                <td>Google Analytics - Limita taxa de requisições</td>
                                <td>1 minuto</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="cookie-type-card">
                    <h3><i class="fas fa-bullhorn"></i> Cookies de Marketing e Publicidade</h3>
                    <p>Usados para rastrear visitantes em sites e exibir anúncios relevantes e personalizados. Também limitam o número de vezes que você vê um anúncio.</p>
                    <table class="cookie-table">
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Finalidade</th>
                                <th>Duração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>_fbp</strong></td>
                                <td>Facebook Pixel - Rastreamento de conversões</td>
                                <td>3 meses</td>
                            </tr>
                            <tr>
                                <td><strong>fr</strong></td>
                                <td>Facebook - Publicidade direcionada</td>
                                <td>3 meses</td>
                            </tr>
                            <tr>
                                <td><strong>IDE</strong></td>
                                <td>Google DoubleClick - Rastreamento de anúncios</td>
                                <td>13 meses</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="cookie-type-card">
                    <h3><i class="fas fa-cog"></i> Cookies de Funcionalidade</h3>
                    <p>Permitem que o site se lembre de escolhas que você faz para fornecer recursos aprimorados e personalizados.</p>
                    <table class="cookie-table">
                        <thead>
                            <tr>
                                <th>Cookie</th>
                                <th>Finalidade</th>
                                <th>Duração</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>language</strong></td>
                                <td>Armazena preferência de idioma</td>
                                <td>12 meses</td>
                            </tr>
                            <tr>
                                <td><strong>theme</strong></td>
                                <td>Lembra preferências de visualização</td>
                                <td>12 meses</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h2><i class="fas fa-clock"></i> 3. Duração dos Cookies</h2>
                
                <h3>3.1 Cookies de Sessão</h3>
                <p>São temporários e expiram quando você fecha o navegador. São usados principalmente para funcionalidades essenciais do site.</p>
                
                <h3>3.2 Cookies Persistentes</h3>
                <p>Permanecem no seu dispositivo por um período determinado (de dias a anos). São usados para lembrar suas preferências e melhorar sua experiência em visitas futuras.</p>
                
                <h2><i class="fas fa-users"></i> 4. Cookies de Terceiros</h2>
                <p>Alguns cookies são colocados por serviços de terceiros que aparecem em nosso site:</p>
                <ul>
                    <li><strong>Google Analytics:</strong> Para análise de tráfego e comportamento</li>
                    <li><strong>Google Ads:</strong> Para remarketing e medição de conversões</li>
                    <li><strong>Facebook Pixel:</strong> Para rastreamento de conversões e anúncios</li>
                    <li><strong>Hotjar:</strong> Para gravação de sessões e análise de comportamento</li>
                </ul>
                <p>Estes terceiros têm suas próprias políticas de privacidade sobre como usam essas informações.</p>
                
                <h2><i class="fas fa-sliders-h"></i> 5. Como Gerenciar Cookies</h2>
                <p>Você tem total controle sobre os cookies que aceita. Aqui estão suas opções:</p>
                
                <h3>5.1 Através do Nosso Banner de Cookies</h3>
                <ul>
                    <li>Use o banner que aparece na primeira visita para aceitar ou rejeitar cookies</li>
                    <li>Escolha "Aceitar Todos" para ativar análise e marketing</li>
                    <li>Escolha "Apenas Essenciais" para cookies básicos de funcionamento</li>
                    <li>Suas preferências são salvas por 12 meses</li>
                </ul>
                
                <h3>5.2 Através do Navegador</h3>
                <p>Todos os navegadores modernos permitem controlar cookies através das configurações:</p>
                <ul>
                    <li><strong>Chrome:</strong> Configurações > Privacidade e segurança > Cookies</li>
                    <li><strong>Firefox:</strong> Opções > Privacidade e Segurança > Cookies</li>
                    <li><strong>Safari:</strong> Preferências > Privacidade > Cookies</li>
                    <li><strong>Edge:</strong> Configurações > Cookies e permissões de site</li>
                </ul>
                
                <h3>5.3 Através de Ferramentas de Terceiros</h3>
                <ul>
                    <li><strong>Google Ads:</strong> <a href="https://adssettings.google.com" target="_blank" style="color: var(--primary-color);">Configurações de Anúncios</a></li>
                    <li><strong>Facebook:</strong> <a href="https://www.facebook.com/settings?tab=ads" target="_blank" style="color: var(--primary-color);">Preferências de Anúncios</a></li>
                    <li><strong>Network Advertising:</strong> <a href="http://optout.networkadvertising.org" target="_blank" style="color: var(--primary-color);">NAI Opt-Out</a></li>
                </ul>
                
                <div class="highlight-box" style="background: rgba(255, 193, 7, 0.1); border-left-color: #ffc107;">
                    <p><strong>⚠️ Importante:</strong> Bloquear ou deletar cookies pode afetar a funcionalidade do site. Alguns recursos podem não funcionar corretamente sem cookies essenciais.</p>
                </div>
                
                <h2><i class="fas fa-mobile-alt"></i> 6. Cookies em Dispositivos Móveis</h2>
                <p>Em dispositivos móveis, você pode gerenciar cookies através de:</p>
                <ul>
                    <li><strong>iOS (Safari):</strong> Ajustes > Safari > Bloquear Cookies</li>
                    <li><strong>Android (Chrome):</strong> Configurações > Privacidade > Limpar dados de navegação</li>
                </ul>
                
                <h2><i class="fas fa-fingerprint"></i> 7. Do Not Track (DNT)</h2>
                <p>Atualmente, não existe um padrão da indústria sobre como responder a sinais DNT. Como resultado, não reconhecemos ou respondemos automaticamente a sinais DNT dos navegadores. No entanto, você sempre pode gerenciar cookies através das opções listadas acima.</p>
                
                <h2><i class="fas fa-sync-alt"></i> 8. Atualizações desta Política</h2>
                <p>Podemos atualizar esta Política de Cookies para refletir mudanças em nosso uso de cookies ou por razões operacionais, legais ou regulatórias. Sempre verificamos a data "Última atualização" no topo desta página.</p>
                
                <h2><i class="fas fa-link"></i> 9. Links Relacionados</h2>
                <p>Para mais informações sobre como tratamos seus dados pessoais:</p>
                <ul>
                    <li><a href="politica-privacidade.php" style="color: var(--primary-color);">📜 Política de Privacidade</a></li>
                    <li><a href="termos-uso.php" style="color: var(--primary-color);">📋 Termos de Uso</a></li>
                </ul>
                
                <h2><i class="fas fa-envelope"></i> 10. Entre em Contato</h2>
                <p>Se você tiver dúvidas sobre nossa Política de Cookies ou sobre como gerenciar suas preferências:</p>
                
                <div class="highlight-box">
                    <p><strong>Sintrix Soluções Tecnológicas</strong></p>
                    <p>📧 E-mail: privacidade@sintrix.com.br</p>
                    <p>📱 Telefone: (11) 97377-4109</p>
                    <p>🌐 Site: www.sintrix.com.br</p>
                    <p><strong>Encarregado de Dados (DPO):</strong> disponível através dos contatos acima</p>
                </div>
                
                <div class="highlight-box" style="margin-top: 40px; background: rgba(0, 212, 255, 0.15); border-left-color: var(--primary-color);">
                    <p style="font-size: 0.95rem; margin: 0;">💡 <strong>Dica:</strong> Ao aceitar cookies, você nos ajuda a melhorar continuamente nossos serviços e personalizar sua experiência. Você pode mudar suas preferências a qualquer momento usando o botão "Gerenciar Preferências de Cookies" acima.</p>
                </div>
            </div>
        </div>
    </section>
    
    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <?php include __DIR__ . '/../includes/cookie-banner.php'; ?>
    <?php include __DIR__ . '/../includes/analytics-tracking.php'; ?>
    <script src="<?php echo $base; ?>public/js/script.js"></script>
</body>
</html>

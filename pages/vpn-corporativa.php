<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VPN Corporativa | Sintrix Technology</title>
    <meta name="description" content="VPN corporativa com criptografia militar para trabalho remoto seguranÃ§auro. Proteja dados da empresa com conexões VPN dedicadas da Sintrix.">
    <meta name="keywords" content="VPN corporativa, conexão segura, trabalho remoto, criptografia, rede privada">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../public/assets/favicon.svg">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/animations.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <link rel="stylesheet" href="../public/css/tailwind-utilities.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .vpn-hero {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            position: relative;
            padding: 120px 0 80px;
            overflow: hidden;
        }
        
        .vpn-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .vpn-line {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
            animation: vpnFlow 4s ease-in-out infinite;
        }
        
        .vpn-line:nth-child(1) {
            top: 20%;
            left: 0;
            width: 100%;
            animation-delay: 0s;
        }
        
        .vpn-line:nth-child(2) {
            top: 50%;
            left: 0;
            width: 100%;
            animation-delay: 1s;
        }
        
        .vpn-line:nth-child(3) {
            top: 80%;
            left: 0;
            width: 100%;
            animation-delay: 2s;
        }
        
        @keyframes vpnFlow {
            0% { opacity: 0; transform: translateX(-100%); }
            50% { opacity: 1; transform: translateX(0); }
            100% { opacity: 0; transform: translateX(100%); }
        }
        
        .vpn-demo {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 30px;
            position: relative;
        }
        
        .vpn-network {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 40px 0;
        }
        
        .network-node {
            position: relative;
            background: var(--gradient-primary);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
        }
        
        .network-node::before {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            opacity: 0.3;
            animation: pulse 2s infinite;
        }
        
        .connection-line {
            flex: 1;
            height: 3px;
            background: var(--gradient-primary);
            margin: 0 20px;
            position: relative;
            border-radius: 2px;
        }
        
        .connection-line::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 30px;
            height: 100%;
            background: white;
            border-radius: 2px;
            animation: dataFlow 2s ease-in-out infinite;
        }
        
        @keyframes dataFlow {
            0% { left: 0; opacity: 1; }
            100% { left: calc(100% - 30px); opacity: 0.3; }
        }
        
        .security-levels {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .security-level {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 15px;
            border-left: 4px solid var(--primary-color);
            position: relative;
        }
        
        .security-level::before {
            content: '';
            position: absolute;
            top: 10px;
            right: 15px;
            width: 10px;
            height: 10px;
            background: #27ca3f;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        
        .threat-comparison {
            background: linear-gradient(135deg, #2a1f3d 0%, #1a1a2e 100%);
            border-radius: 20px;
            padding: 40px;
            margin: 50px 0;
        }
        
        .threat-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 30px;
        }
        
        .threat-scenario {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            position: relative;
        }
        
        .threat-scenario.Vulnerável {
            border: 2px solid #ff4757;
        }
        
        .threat-scenario.protected {
            border: 2px solid #2ed573;
        }
        
        .threat-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .threat-icon {
            font-size: 1.5rem;
        }
        
        .threat-scenario.Vulnerável .threat-icon {
            color: #ff4757;
        }
        
        .threat-scenario.protected .threat-icon {
            color: #2ed573;
        }
        
        .connection-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .step-item {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            position: relative;
        }
        
        .step-number {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--gradient-primary);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .step-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin: 20px 0 15px;
        }
        
        @media (max-width: 768px) {
            .vpn-network {
                flex-direction: column;
                gap: 30px;
            }
            
            .connection-line {
                width: 3px;
                height: 50px;
                margin: 20px 0;
            }
            
            .connection-line::after {
                width: 100%;
                height: 10px;
                top: 0;
                left: 0;
                animation: dataFlowVertical 2s ease-in-out infinite;
            }
            
            .threat-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
        
        @keyframes dataFlowVertical {
            0% { top: 0; opacity: 1; }
            100% { top: calc(100% - 10px); opacity: 0.3; }
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="vpn-hero">
        <div class="vpn-particles">
            <div class="vpn-line"></div>
            <div class="vpn-line"></div>
            <div class="vpn-line"></div>
        </div>
        
        <div class="container px-4 md:px-8">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            <span class="gradient-text">VPN Corporativa</span><br>
                            Criptografia Militar para sua Empresa
                        </h1>
                        <p class="hero-description">
                            Proteja 100% dos dados da sua empresa com nossa VPN dedicada. 
                            Trabalho remoto seguro, conexões criptografadas e controle total 
                            sobre quem acessa o quê. <strong>Seus dados nunca mais estarão em risco!</strong>
                        </p>
                        
                        <div class="hero-features">
                            <div class="feature-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Criptografia AES-256</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-globe"></i>
                                <span>Conexões Ilimitadas</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock"></i>
                                <span>disponível 24/7</span>
                            </div>
                        </div>
                        
                        <div class="hero-actions">
                            <a href="#plans" class="btn-primary">
                                <i class="fas fa-rocket"></i>
                                <span>Ver Planos</span>
                            </a>
                            <a href="#demo" class="btn-secondary">
                                <i class="fas fa-play"></i>
                                <span>Ver Como Funciona</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="vpn-demo">
                        <h4 style="text-align: center; color: var(--light-text); margin-bottom: 30px;">
                            Conexão seguranÃ§aura Sintrix VPN
                        </h4>
                        
                        <div class="vpn-network">
                            <div class="network-node">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="connection-line"></div>
                            <div class="network-node">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="connection-line"></div>
                            <div class="network-node">
                                <i class="fas fa-server"></i>
                            </div>
                        </div>
                        
                        <div style="text-align: center; color: var(--gray-text); font-size: 0.9rem;">
                            <p><strong>Funcionário</strong> → <strong>VPN Sintrix</strong> → <strong>Servidor Empresa</strong></p>
                            <p style="color: var(--primary-color); margin-top: 10px;">
                                ?? Dados 100% Criptografados
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Section -->
    <section class="section" id="security">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Segurança Máxima</span>
                <h2 class="section-title">Proteção Militar para seus Dados</h2>
                <p class="section-description">
                    Compare a diferença entre trabalhar com e sem nossa VPN corporativa
                </p>
            </div>
            
            <div class="threat-comparison" data-aos="fade-up">
                <h3 style="text-align: center; color: var(--light-text); margin-bottom: 30px;">
                    Cenários de segurança
                </h3>
                
                <div class="threat-grid">
                    <div class="threat-scenario Vulnerável">
                        <div class="threat-title">
                            <i class="fas fa-exclamation-triangle threat-icon"></i>
                            <h4 style="color: #ff4757;">SEM VPN - VULNERÁVEL</h4>
                        </div>
                        <ul style="color: var(--gray-text); line-height: 1.8;">
                            <li>? Dados transmitidos sem criptografia</li>
                            <li>? IPs e localização expostos</li>
                            <li>? Vulnerável a interceptação</li>
                            <li>? Acesso irrestrito de qualquer lugar</li>
                            <li>? Sem controle de usuários</li>
                            <li>? Logs de atividade desprotegidos</li>
                        </ul>
                        <div style="background: rgba(255, 71, 87, 0.1); padding: 15px; border-radius: 10px; margin-top: 20px;">
                            <strong style="color: #ff4757;">RISCO ALTO:</strong> Dados da empresa expostos
                        </div>
                    </div>
                    
                    <div class="threat-scenario protected">
                        <div class="threat-title">
                            <i class="fas fa-shield-alt threat-icon"></i>
                            <h4 style="color: #2ed573;">COM VPN SINTRIX - PROTEGIDO</h4>
                        </div>
                        <ul style="color: var(--gray-text); line-height: 1.8;">
                            <li>🔒 Criptografia AES-256 militar</li>
                            <li>🎭 IPs mascarados e anônimos</li>
                            <li>🛡️ Túnel seguranÃ§auro inviolável</li>
                            <li>👮‍♂️ Acesso controlado por permissões</li>
                            <li>⚙️ Gestão centralizada de usuários</li>
                            <li>📋 Logs seguranÃ§auros e auditáveis</li>
                        </ul>
                        <div style="background: rgba(46, 213, 115, 0.1); padding: 15px; border-radius: 10px; margin-top: 20px;">
                            <strong style="color: #2ed573;">RISCO ZERO:</strong> Dados totalmente protegidos
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="security-levels" data-aos="fade-up">
                <div class="security-level">
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">
                        <i class="fas fa-key" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Criptografia avançada
                    </h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        AES-256 com chaves rotativas. Mesmo padrão usado por bancos e governos.
                    </p>
                </div>
                
                <div class="security-level">
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">
                        <i class="fas fa-user-shield" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Controle de Acesso
                    </h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Cada funcionário tem permissões específicas. Controle total do administrador.
                    </p>
                </div>
                
                <div class="security-level">
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">
                        <i class="fas fa-chart-line" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Monitoramento Real-time
                    </h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Acompanhe todas as conexões em tempo real. Alertas instantâneos de segurança.
                    </p>
                </div>
                
                <div class="security-level">
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">
                        <i class="fas fa-server" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Servidores Dedicados
                    </h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Infraestrutura exclusiva no Brasil. Sem compartilhamento, máxima velocidade.
                    </p>
                </div>
                
                <div class="security-level">
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">
                        <i class="fas fa-mobile-alt" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Multi-plataforma
                    </h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Windows, Mac, iOS, Android. Um clique para conectar em qualquer dispositivo.
                    </p>
                </div>
                
                <div class="security-level">
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">
                        <i class="fas fa-headset" style="color: var(--primary-color); margin-right: 10px;"></i>
                        Suporte Especializado
                    </h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Equipe de seguranÃ§aurança 24/7. configuração, treinamento e suporte completo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How it Works Section -->
    <section class="section" id="demo">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Como Funciona</span>
                <h2 class="section-title">Implementação Simples e Rápida</h2>
                <p class="section-description">
                    Sua VPN corporativa funcionando em menos de 48 horas
                </p>
            </div>
            
            <div class="connection-steps" data-aos="fade-up">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <i class="fas fa-handshake step-icon"></i>
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">Contrato</h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        an�lise das necessidades e assinatura do contrato personalizado
                    </p>
                </div>
                
                <div class="step-item">
                    <div class="step-number">2</div>
                    <i class="fas fa-cogs step-icon"></i>
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">configuração</h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Nossos técnicos configuram servidores e criam usuários
                    </p>
                </div>
                
                <div class="step-item">
                    <div class="step-number">3</div>
                    <i class="fas fa-download step-icon"></i>
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">Instala��o</h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Apps instalados em todos os dispositivos da equipe
                    </p>
                </div>
                
                <div class="step-item">
                    <div class="step-number">4</div>
                    <i class="fas fa-graduation-cap step-icon"></i>
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">Treinamento</h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Capacita��o da equipe para uso seguranÃ§auro e eficiente
                    </p>
                </div>
                
                <div class="step-item">
                    <div class="step-number">5</div>
                    <i class="fas fa-rocket step-icon"></i>
                    <h4 style="color: var(--light-text); margin-bottom: 10px;">Opera��o</h4>
                    <p style="color: var(--gray-text); font-size: 0.9rem;">
                        Sistema funcionando com monitoramento 24/7
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="section" id="plans">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Planos VPN</span>
                <h2 class="section-title">Escolha sua Prote��o</h2>
                <p class="section-description">
                    Planos flex�veis para empresas de todos os tamanhos
                </p>
            </div>
            
            <div class="solutions-grid">
                <div class="solution-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="solution-header">
                        <h3>básico</h3>
                        <div class="solution-price">
                            <span class="currency">R$</span>
                            <span class="amount">120</span>
                            <span class="period">/m�s</span>
                        </div>
                    </div>
                    <div class="solution-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>5 Conex�es Simult�neas</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Criptografia AES-256</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Servidor no Brasil</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Suporte técnico</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Apps para Todos OS</span>
                        </div>
                    </div>
                    <a href="#contact" class="solution-cta">
                        <span>Contratar Agora</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="solution-card featured" data-aos="zoom-in" data-aos-delay="200">
                    <div class="featured-badge">MAIS POPULAR</div>
                    <div class="solution-header">
                        <h3>Profissional</h3>
                        <div class="solution-price">
                            <span class="currency">R$</span>
                            <span class="amount">280</span>
                            <span class="period">/m�s</span>
                        </div>
                    </div>
                    <div class="solution-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>20 Conex�es Simult�neas</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Criptografia Militar</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>M�ltiplos Servidores</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Suporte prioritário 24/7</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Controle de usuários</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>relat�rios Detalhados</span>
                        </div>
                    </div>
                    <a href="#contact" class="solution-cta">
                        <span>Contratar Agora</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="solution-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="solution-header">
                        <h3>Empresarial</h3>
                        <div class="solution-price">
                            <span class="currency">R$</span>
                            <span class="amount">480</span>
                            <span class="period">/m�s</span>
                        </div>
                    </div>
                    <div class="solution-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Conex�es Ilimitadas</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Servidor Dedicado</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Load Balancing</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Gerente de Conta</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>integração AD/LDAP</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>SLA 99.9% Uptime</span>
                        </div>
                    </div>
                    <a href="#contact" class="solution-cta">
                        <span>Contratar Agora</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container px-4 md:px-8">
            <div class="cta-content" data-aos="fade-up">
                <h2>Proteja sua Empresa Hoje Mesmo!</h2>
                <p>implementa��o em 48h. Teste grátis por 15 dias. Suporte especializado inclu�do.</p>
                <div class="cta-actions">
                    <a href="#contact" class="btn-primary">
                        <i class="fas fa-shield-alt"></i>
                        <span>Ativar Prote��o</span>
                    </a>
                    <a href="tel:+5511999999999" class="btn-secondary">
                        <i class="fas fa-phone"></i>
                        <span>Falar com Especialista</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title">Configure sua VPN Corporativa</h2>
                <p class="section-description">
                    Nossa equipe de seguranÃ§aurança est� pronta para proteger sua empresa
                </p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Telefone</h4>
                            <p>+55 (11) 99999-9999</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>seguranÃ§auranca@sintrixtechnology.com.br</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-details">
                            <h4>WhatsApp</h4>
                            <p>+55 (11) 99999-9999</p>
                        </div>
                    </div>
                </div>
                
                <form class="contact-form" data-aos="fade-left">
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Corporativo</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Empresa</label>
                        <input type="text" id="company" name="company" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="employees">n�mero de Funcion�rios</label>
                        <select id="employees" name="employees" required>
                            <option value="">Selecione uma op��o</option>
                            <option value="1-10">1-10 funcion�rios - básico (R$ 120/m�s)</option>
                            <option value="11-50">11-50 funcion�rios - Profissional (R$ 280/m�s)</option>
                            <option value="50+">50+ funcion�rios - Empresarial (R$ 480/m�s)</option>
                            <option value="custom">Personalizado - Sob consulta</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="urgency">Urg�ncia</label>
                        <select id="urgency" name="urgency" required>
                            <option value="">Selecione a urg�ncia</option>
                            <option value="immediate">Imediato - J� tivemos problemas de seguranÃ§aurança</option>
                            <option value="urgent">Urgente - Dentro de 1 semana</option>
                            <option value="normal">Normal - Dentro de 1 m�s</option>
                            <option value="planning">Planejamento - Futuro pr�ximo</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Necessidades Espec�ficas</label>
                        <textarea id="message" name="message" rows="4" placeholder="Descreva suas necessidades de seguranÃ§aurança e trabalho remoto..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-shield-alt"></i>
                        <span>Solicitar implementa��o</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../public/js/script.js"></script>
    <script>
        // Inicializar AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true
        });
    </script>    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>










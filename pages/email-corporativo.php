<?php
// Carrega configurações principais (caminhos e helper includeFile)
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . '/../includes/google-analytics.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospedagem de Email Corporativo | Sintrix Technology</title>
    <meta name="description" content="Hospedagem profissional de email corporativo com suporte técnico completo. Emails e sites com gestão especializada e backup automático.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../public/assets/favicon.png?v=<?php echo time(); ?>">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/animations.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <link rel="stylesheet" href="../public/css/tailwind-utilities.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS removido -->
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Estilos específicos para Email Corporativo */
        .email-hosting-section {
            background: var(--dark-bg);
            padding: 100px 0;
        }
        
        .section-header {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .hosting-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 60px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .hosting-feature-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 35px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .hosting-feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .hosting-feature-card:hover {
            transform: translateY(-8px);
            border-color: var(--primary-color);
            box-shadow: 0 20px 60px rgba(123, 47, 255, 0.25);
        }
        
        .hosting-feature-card:hover::before {
            opacity: 1;
        }
        
        .feature-icon-large {
            width: 70px;
            height: 70px;
            background: rgba(123, 47, 255, 0.1);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }
        
        .feature-icon-large i {
            font-size: 2rem;
            color: var(--primary-color);
        }
        
        .hosting-feature-card h3 {
            font-family: var(--font-heading);
            font-size: 1.4rem;
            color: var(--light-text);
            margin: 0 0 15px 0;
            font-weight: 700;
        }
        
        .hosting-feature-card p {
            color: var(--gray-text);
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        .feature-highlights {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .feature-highlights span {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--light-text);
            font-size: 0.95rem;
        }
        
        .feature-highlights i {
            color: var(--primary-color);
            font-size: 0.9rem;
        }
        
        /* Seção de Serviços */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-top: 60px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .service-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .service-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--gradient-primary);
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .service-icon-box {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(123, 47, 255, 0.3);
        }
        
        .service-icon-box i {
            font-size: 2.2rem;
            color: white;
        }
        
        .service-card h3 {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            color: var(--light-text);
            margin: 0 0 15px 0;
            font-weight: 700;
        }
        
        .service-card p {
            color: var(--gray-text);
            line-height: 1.8;
            margin-bottom: 25px;
            font-size: 1.05rem;
        }
        
        .service-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .service-feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--light-text);
            font-size: 0.95rem;
        }
        
        .service-feature-item i {
            color: var(--primary-color);
            font-size: 0.85rem;
        }
        
        /* Seção de Suporte */
        .support-section {
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.05) 0%, transparent 100%);
            padding: 100px 0;
        }
        
        .support-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 60px;
            margin-top: 60px;
            align-items: center;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .support-content h3 {
            font-family: var(--font-heading);
            font-size: 2rem;
            color: var(--light-text);
            margin: 0 0 20px 0;
            font-weight: 700;
        }
        
        .support-content p {
            color: var(--gray-text);
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 30px;
        }
        
        .support-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .support-item {
            display: flex;
            gap: 20px;
            padding: 20px;
            background: var(--gradient-surface);
            border-radius: 15px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        
        .support-item:hover {
            border-color: var(--primary-color);
            transform: translateX(5px);
        }
        
        .support-item-icon {
            width: 55px;
            height: 55px;
            min-width: 55px;
            background: var(--gradient-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .support-item-icon i {
            font-size: 1.3rem;
            color: white;
        }
        
        .support-item-content h4 {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            color: var(--light-text);
            margin: 0 0 8px 0;
            font-weight: 600;
        }
        
        .support-item-content p {
            color: var(--gray-text);
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        .support-stats {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }
        
        .support-stat-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
        }
        
        .support-stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }
        
        .support-stat-label {
            color: var(--light-text);
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .support-stat-desc {
            color: var(--gray-text);
            font-size: 0.9rem;
            margin-top: 8px;
        }
        
        /* Responsividade */
        @media (max-width: 968px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .support-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .service-features {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 640px) {
            .hosting-features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero modern-hero">
        <div class="hero-container px-4 md:px-8" style="display: flex; justify-content: center; align-items: center;">
            <div class="hero-content" style="text-align: center; max-width: 900px; width: 100%;">
                <div class="badge" data-aos="fade-up" style="justify-content: center;">
                    <i class="fas fa-server"></i>
                    <span>Hospedagem Profissional</span>
                </div>
                
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    Hospedagem de
                    <span class="gradient-text">Email e Sites</span>
                    com Suporte Técnico
                </h1>
                
                <p class="hero-description" data-aos="fade-up" data-aos-delay="200" style="text-align: center; margin-left: auto; margin-right: auto;">
                    Solução completa de hospedagem para emails corporativos e sites. 
                    Suporte técnico especializado incluído para todas as suas necessidades.
                </p>
                
                <div class="hero-actions" data-aos="fade-up" data-aos-delay="300" style="justify-content: center;">
                    <a href="#contact" class="btn-primary">
                        <span>Contratar Agora</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#services" class="btn-secondary">
                        <i class="fas fa-info-circle"></i>
                        <span>Ver Serviços</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="hero-background">
            <div class="bg-gradient"></div>
            <div class="floating-elements">
                <div class="float-element"></div>
                <div class="float-element"></div>
                <div class="float-element"></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="email-hosting-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up" style="text-align: center;">
                <span class="section-subtitle">O Que Oferecemos</span>
                <h2 class="section-title">
                    Hospedagem Completa com
                    <span class="gradient-text">Suporte Técnico</span>
                </h2>
                <p class="section-description">
                    Representamos serviços de hospedagem profissional com gestão técnica completa
                </p>
            </div>
            
            <div class="services-grid">
                <!-- Email Hosting -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-badge">Completo</div>
                    <div class="service-icon-box">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3>Hospedagem de Email</h3>
                    <p>Email corporativo profissional com seu domínio, garantindo credibilidade e segurança para sua comunicação empresarial.</p>
                    
                    <div class="service-features">
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Domínio próprio</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Anti-spam avançado</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Backup automático</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Webmail moderno</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Sincronização total</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>SSL/TLS criptografado</span>
                        </div>
                    </div>
                </div>

                <!-- Website Hosting -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-badge">Performance</div>
                    <div class="service-icon-box">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Hospedagem de Sites</h3>
                    <p>Hospedagem profissional para seu site com alta performance, segurança e disponibilidade garantida 24/7.</p>
                    
                    <div class="service-features">
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>SSD ultra-rápido</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>SSL grátis incluído</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>CDN integrado</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>99.9% uptime</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Backup diário</span>
                        </div>
                        <div class="service-feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Firewall proteção</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="email-hosting-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up" style="text-align: center;">
                <span class="section-subtitle">Diferenciais</span>
                <h2 class="section-title">
                    Por Que Escolher
                    <span class="gradient-text">Nossa Hospedagem</span>
                </h2>
            </div>
            
            <div class="hosting-features-grid">
                <div class="hosting-feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon-large">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Segurança Máxima</h3>
                    <p>Proteção completa com anti-spam, antivírus, firewall e criptografia SSL/TLS em todas as comunicações.</p>
                    <div class="feature-highlights">
                        <span><i class="fas fa-check"></i> Filtro anti-spam inteligente</span>
                        <span><i class="fas fa-check"></i> Proteção antivírus em tempo real</span>
                        <span><i class="fas fa-check"></i> Certificado SSL incluído</span>
                    </div>
                </div>

                <div class="hosting-feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon-large">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Backup Automático</h3>
                    <p>Backups automáticos diários de emails e sites. Seus dados sempre seguros e recuperáveis.</p>
                    <div class="feature-highlights">
                        <span><i class="fas fa-check"></i> Backup diário automático</span>
                        <span><i class="fas fa-check"></i> Retenção de 30 dias</span>
                        <span><i class="fas fa-check"></i> Restauração rápida</span>
                    </div>
                </div>

                <div class="hosting-feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon-large">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Acesso em Qualquer Lugar</h3>
                    <p>Webmail moderno e sincronização com todos dispositivos. Trabalhe de onde estiver.</p>
                    <div class="feature-highlights">
                        <span><i class="fas fa-check"></i> Webmail responsivo</span>
                        <span><i class="fas fa-check"></i> Apps móveis nativos</span>
                        <span><i class="fas fa-check"></i> Sincronização em tempo real</span>
                    </div>
                </div>

                <div class="hosting-feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon-large">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Alta Performance</h3>
                    <p>Infraestrutura moderna com servidores SSD e otimização para máxima velocidade e estabilidade.</p>
                    <div class="feature-highlights">
                        <span><i class="fas fa-check"></i> Servidores SSD NVMe</span>
                        <span><i class="fas fa-check"></i> CDN global incluído</span>
                        <span><i class="fas fa-check"></i> Cache inteligente</span>
                    </div>
                </div>

                <div class="hosting-feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon-large">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Painel de Controle</h3>
                    <p>Gerencie emails, domínios e configurações através de painel administrativo intuitivo e moderno.</p>
                    <div class="feature-highlights">
                        <span><i class="fas fa-check"></i> Interface intuitiva</span>
                        <span><i class="fas fa-check"></i> Gestão completa</span>
                        <span><i class="fas fa-check"></i> Relatórios detalhados</span>
                    </div>
                </div>

                <div class="hosting-feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon-large">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Escalabilidade</h3>
                    <p>Planos que crescem com sua empresa. Adicione contas e recursos conforme necessário.</p>
                    <div class="feature-highlights">
                        <span><i class="fas fa-check"></i> Upgrades flexíveis</span>
                        <span><i class="fas fa-check"></i> Sem limite de crescimento</span>
                        <span><i class="fas fa-check"></i> Recursos sob demanda</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="support-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up" style="text-align: center;">
                <span class="section-subtitle">Sempre ao Seu Lado</span>
                <h2 class="section-title">
                    Suporte Técnico
                    <span class="gradient-text">Completo Incluído</span>
                </h2>
                <p class="section-description">
                    Nossa equipe técnica cuida de tudo para você focar no seu negócio
                </p>
            </div>
            
            <div class="support-grid">
                <div class="support-content" data-aos="fade-right">
                    <h3>Assistência Técnica Especializada</h3>
                    <p>
                        Ao contratar nossos serviços de hospedagem, você ganha acesso completo ao nosso 
                        time de suporte técnico especializado. Cuidamos de problemas com emails, 
                        configurações de site, questões de DNS, SSL e muito mais.
                    </p>
                    
                    <div class="support-list">
                        <div class="support-item">
                            <div class="support-item-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="support-item-content">
                                <h4>Suporte para Emails</h4>
                                <p>Configuração, troubleshooting, filtros de spam, problemas de envio/recebimento e migração de contas.</p>
                            </div>
                        </div>
                        
                        <div class="support-item">
                            <div class="support-item-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="support-item-content">
                                <h4>Suporte para Sites</h4>
                                <p>Performance, erros, SSL, otimizações, backups, atualizações e questões de segurança do seu site.</p>
                            </div>
                        </div>
                        
                        <div class="support-item">
                            <div class="support-item-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="support-item-content">
                                <h4>Manutenção Preventiva</h4>
                                <p>Monitoramento proativo, atualizações de segurança e otimizações constantes da infraestrutura.</p>
                            </div>
                        </div>
                        
                        <div class="support-item">
                            <div class="support-item-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="support-item-content">
                                <h4>Consultoria Técnica</h4>
                                <p>Orientações sobre melhores práticas, configurações avançadas e otimização de recursos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="support-stats" data-aos="fade-left">
                    <div class="support-stat-card">
                        <div class="support-stat-number">24/7</div>
                        <div class="support-stat-label">Disponibilidade</div>
                        <div class="support-stat-desc">Suporte sempre disponível quando você precisar</div>
                    </div>
                    
                    <div class="support-stat-card">
                        <div class="support-stat-number">&lt; 2h</div>
                        <div class="support-stat-label">Tempo de Resposta</div>
                        <div class="support-stat-desc">Respostas rápidas para suas solicitações</div>
                    </div>
                    
                    <div class="support-stat-card">
                        <div class="support-stat-number">98%</div>
                        <div class="support-stat-label">Satisfação</div>
                        <div class="support-stat-desc">Clientes satisfeitos com nosso atendimento</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section vpn-contact">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up" style="text-align: center;">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title">Comece Agora Mesmo</h2>
                <p class="section-description">
                    Contrate hospedagem profissional com suporte técnico incluído
                </p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Telefone Direto</h4>
                            <p>(11) 97377-4109</p>
                            <p>Fale com nosso time comercial</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Comercial</h4>
                            <p>vendas@sintrix.com.br</p>
                            <p>Resposta em até 2 horas úteis</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Suporte Técnico</h4>
                            <p>Disponível 24/7</p>
                            <p>Para clientes ativos</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form" data-aos="fade-left">
                    <form id="emailForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder=" " required>
                            <label for="name">Nome Completo</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder=" " required>
                            <label for="email">Email</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder=" " required>
                            <label for="phone">Telefone</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="company" name="company" placeholder=" " required>
                            <label for="company">Empresa</label>
                        </div>
                        
                        <div class="form-group">
                            <select id="service" name="service" required>
                                <option value="">Selecione o serviço</option>
                                <option value="email">Hospedagem de Email</option>
                                <option value="site">Hospedagem de Site</option>
                                <option value="ambos">Email + Site</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" 
                                placeholder="Conte-nos sobre suas necessidades..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary vpn-btn btn-hover-effect">
                            <span>Solicitar Proposta</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/cookie-banner.php'; ?>
<?php include __DIR__ . '/../includes/analytics-tracking.php'; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../public/js/script.js"></script>
    <script>
        // Animações AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });

        // Formulário de contato
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('emailForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Obrigado pelo contato! Entraremos em contato em breve.');
                    form.reset();
                });
            }
        });
    </script>
</body>
</html>

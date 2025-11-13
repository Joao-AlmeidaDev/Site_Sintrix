<?php
require_once 'config/config.php';

// Configurações específicas da página
$page_title = SITE_NAME . ' - ' . SITE_TAGLINE;
$page_description = '23 anos de excelência em serviços de TI, oferecendo soluções inovadoras e seguras para impulsionar o seu negócio no mundo digital.';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo generateMetaTags($page_title, $page_description); ?>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="public/assets/favicon.svg?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="public/assets/favicon.svg?v=<?php echo time(); ?>">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/animations.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    <link rel="stylesheet" href="public/css/tailwind-utilities.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        'xs': '475px',
                    },
                    spacing: {
                        '18': '4.5rem',
                        '88': '22rem',
                    }
                }
            }
        }
    </script>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Critical CSS for preventing horizontal scroll -->
    <style>
        html, body {
            overflow-x: hidden !important;
            max-width: 100vw !important;
            margin: 0 !important;
            padding: 0 !important;
            box-sizing: border-box !important;
        }
        
        * {
            box-sizing: border-box !important;
        }
        
        #preloader {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            max-width: 100vw !important;
            max-height: 100vh !important;
            overflow: hidden !important;
            box-sizing: border-box !important;
            z-index: 9999 !important;
        }
    </style>
</head>
<body class="loading">
    <!-- Preloader -->
    <div id="preloader" style="position: fixed !important; top: 0 !important; left: 0 !important; width: 100vw !important; height: 100vh !important; max-width: 100vw !important; overflow: hidden !important; box-sizing: border-box !important; z-index: 9999 !important;">
        <div class="loader" style="max-width: 100% !important; overflow: hidden !important;">
            <div class="scanner" style="max-width: 100% !important; overflow: hidden !important;">
                <span>Sintrix</span>
            </div>
        </div>
    </div>

    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="grid-overlay"></div>
            <div class="floating-elements">
                <div class="floating-element" data-speed="2"></div>
                <div class="floating-element" data-speed="3"></div>
                <div class="floating-element" data-speed="1.5"></div>
            </div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="hero-title">
                    <span class="title-line">Tecnologia que</span>
                    <span class="title-highlight">Transforma</span>
                    <span class="title-line">o Futuro</span>
                </h1>
                <p class="hero-subtitle">
                    23 anos de excelência em serviços de TI, oferecendo soluções inovadoras 
                    e seguras para impulsionar o seu negócio no mundo digital.
                </p>
                <div class="hero-buttons">
                    <a href="#services" class="btn-primary">
                        <span>Nossos Serviços</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="btn-secondary">
                        <span>Fale Conosco</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item">
                    <span class="stat-number" data-count="23">0</span>
                    <span class="stat-label">Anos de Experiência</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="500">0</span>
                    <span class="stat-label">Clientes Atendidos</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="24">0</span>
                    <span class="stat-label">Suporte 24/7</span>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <div class="scroll-line"></div>
            <span>Role para descobrir</span>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-container lg:flex lg:items-center lg:gap-12">
                <div class="about-content lg:w-1/2" data-aos="fade-right">
                    <span class="section-subtitle">Sobre a Sintrix</span>
                    <h2 class="section-title">23 Anos de Excelência em Tecnologia</h2>
                    <p class="about-description">
                        Desde 2002, a Sintrix Technology atua como parceira estratégica 
                        de empresas que buscam inovação e eficiência tecnológica. Nossa experiência 
                        consolidada nos permite oferecer soluções personalizadas que realmente 
                        fazem a diferença no seu negócio.
                    </p>
                </div>
                
                <div class="about-visual hidden lg:block lg:w-1/2" data-aos="fade-left">
                    <div class="about-animation-container">
                        <!-- Cards flutuantes ao redor da animação -->
                        <div class="floating-card tech-card" data-aos="zoom-in" data-aos-delay="200">
                            <i class="fas fa-server"></i>
                            <span>Infraestrutura<br>Própria</span>
                        </div>
                        <div class="floating-card innovation-card" data-aos="zoom-in" data-aos-delay="400">
                            <i class="fas fa-lightbulb"></i>
                            <span>Soluções<br>Inovadoras</span>
                        </div>
                        <div class="floating-card support-card" data-aos="zoom-in" data-aos-delay="600">
                            <i class="fas fa-headset"></i>
                            <span>Suporte<br>Especializado</span>
                        </div>
                        
                        <!-- Animação giratória centralizada -->
                        <div class="tech-graphic">
                            <div class="central-hub">
                                <i class="fas fa-microchip"></i>
                                <span>Sintrix</span>
                            </div>
                            <div class="orbit-ring">
                                <div class="orbit-item orbit-1">
                                    <i class="fas fa-cloud"></i>
                                </div>
                                <div class="orbit-item orbit-2">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="orbit-item orbit-3">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="orbit-item orbit-4">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Cards dos destaques em row na parte de baixo -->
            <div class="about-highlights-bottom grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="highlight-content">
                            <h4>Desenvolvimento Próprio</h4>
                            <p>Criamos soluções exclusivas como RHDocs, MedPlaces e sistema VoIP próprio</p>
                        </div>
                    </div>
                
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="highlight-content">
                        <h4>Infraestrutura Própria</h4>
                        <p>Servidores 24/7, cloud data e datacenter com redundância completa</p>
                    </div>
                </div>
                
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="highlight-content">
                        <h4>Equipamentos em Comodato</h4>
                        <p>Telefonia VoIP sem investimento inicial, reduzindo custos operacionais</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container px-4 md:px-8">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle">Nossos Serviços</span>
                <h2 class="section-title text-2xl md:text-3xl lg:text-4xl">Soluções Completas em TI</h2>
                <p class="section-description text-base md:text-lg max-w-3xl mx-auto">
                    Oferecemos uma gama completa de serviços especializados para 
                    atender todas as necessidades tecnológicas da sua empresa.
                </p>
            </div>
            
            <div class="services-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Helpdesk Especializado</h3>
                    <p>Suporte técnico completo com atendimento especializado para resolver 
                    rapidamente qualquer problema tecnológico da sua empresa.</p>
                    <div class="service-features">
                        <span>• Suporte 24/7</span>
                        <span>• Resolução rápida</span>
                        <span>• Equipe especializada</span>
                    </div>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Consultoria em TI</h3>
                    <p>Análise estratégica e planejamento tecnológico para otimizar 
                    processos e aumentar a eficiência do seu negócio.</p>
                    <div class="service-features">
                        <span>• Análise estratégica</span>
                        <span>• Planejamento tech</span>
                        <span>• Otimização de processos</span>
                    </div>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Gerenciamento de Servidores</h3>
                    <p>Implantação, configuração e monitoramento de servidores com 
                    máxima disponibilidade e performance.</p>
                    <div class="service-features">
                        <span>• Implantação completa</span>
                        <span>• Monitoramento 24/7</span>
                        <span>• Alta disponibilidade</span>
                    </div>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Segurança de Dados</h3>
                    <p>Proteção avançada contra ameaças digitais com backup automatizado 
                    e sistemas de segurança de última geração.</p>
                    <div class="service-features">
                        <span>• Backup automatizado</span>
                        <span>• Proteção avançada</span>
                        <span>• Monitoramento contínuo</span>
                    </div>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Manutenção de Hardware e Software</h3>
                    <p>Manutenção preventiva e corretiva de equipamentos e sistemas 
                    para garantir o máximo desempenho operacional.</p>
                    <div class="service-features">
                        <span>• Manutenção preventiva</span>
                        <span>• Reparo especializado</span>
                        <span>• Otimização de performance</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="solutions-section">
        <div class="container px-4 md:px-8">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle">Nossas Soluções</span>
                <h2 class="section-title text-2xl md:text-3xl lg:text-4xl">Sistemas Desenvolvidos pela Sintrix</h2>
                <p class="section-description text-base md:text-lg max-w-3xl mx-auto">
                    Soluções proprietárias desenvolvidas para atender necessidades 
                    específicas do mercado com inovação e qualidade.
                </p>
            </div>
            
            <!-- Principais Soluções -->
            <div class="main-solutions grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up">
                <div class="solution-compact" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <div class="solution-content">
                        <h3>RHDocs</h3>
                        <p>Gestão completa de holerites com distribuição automatizada</p>
                        <span class="solution-category">Gestão de RH</span>
                    </div>
                    <a href="https://rhdocs.com.br" class="solution-btn" target="_blank">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="solution-compact" data-aos="fade-up" data-aos-delay="200">
                    <div class="solution-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <div class="solution-content">
                        <h3>MedPlaces</h3>
                        <p>Exames em nuvem com visualizador PACS para clínicas</p>
                        <span class="solution-category">Saúde Digital</span>
                    </div>
                    <a href="https://medplaces.org" class="solution-btn" target="_blank">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="solution-compact" data-aos="fade-up" data-aos-delay="300">
                    <div class="solution-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="solution-content">
                        <h3>WhatsApp Bot</h3>
                        <p>Chatbot inteligente com automação empresarial</p>
                        <span class="solution-category">Automação</span>
                    </div>
                    <a href="pages/whatsapp-bot.php" class="solution-btn">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="solution-compact featured" data-aos="fade-up" data-aos-delay="400">
                    <div class="solution-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="solution-content">
                        <h3>Telefonia VoIP</h3>
                        <p>Sistema próprio com equipamentos em comodato</p>
                        <span class="solution-category">Comunicação</span>
                    </div>
                    <a href="pages/telefonia-voip.php" class="solution-btn">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Soluções de Infraestrutura -->
            <div class="infrastructure-solutions mt-12">
                <h3 class="subsection-title text-xl md:text-2xl text-center mb-8" data-aos="fade-up">Soluções de Infraestrutura</h3>
                <div class="infra-grid grid grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up">
                    <div class="infra-item">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <h4>Cloud Data Próprio</h4>
                        <p>Servidores próprios 24/7 com backup automatizado</p>
                        <a href="pages/cloud-data.php">Saiba mais</a>
                    </div>
                    
                    <div class="infra-item">
                        <i class="fas fa-lock"></i>
                        <h4>VPN Corporativa</h4>
                        <p>Acesso seguro e remoto com criptografia avançada</p>
                        <a href="pages/vpn-corporativa.php">Saiba mais</a>
                    </div>
                    
                    <div class="infra-item">
                        <i class="fas fa-envelope"></i>
                        <h4>Email Corporativo</h4>
                        <p>Gestão completa de emails e hospedagem segura</p>
                        <a href="pages/email-corporativo.php">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container px-4 md:px-8">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title text-2xl md:text-3xl lg:text-4xl">Vamos Conversar Sobre Seu Projeto</h2>
                <p class="section-description text-base md:text-lg max-w-3xl mx-auto">
                    Estamos prontos para transformar suas ideias em soluções tecnológicas inovadoras.
                </p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Nosso Escritório</h4>
                            <p>Rua da Tecnologia, 123<br>
                            Centro - Cidade/SP<br>
                            CEP: 12345-678</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Telefone</h4>
                            <p>(11) 99999-9999<br>
                            (11) 3333-3333</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>contato@sintrixtechnology.com.br<br>
                            comercial@sintrixtechnology.com.br</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Horário de Atendimento</h4>
                            <p>Segunda a Sexta: 8h às 18h<br>
                            Suporte 24/7 disponível</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form" data-aos="fade-left">
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Nome Completo</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" required>
                            <label for="phone">Telefone</label>
                        </div>
                        
                        <div class="form-group">
                            <select id="service" name="service" required>
                                <option value="">Selecione um serviço</option>
                                <option value="helpdesk">Helpdesk</option>
                                <option value="consultoria">Consultoria em TI</option>
                                <option value="servidores">Gerenciamento de Servidores</option>
                                <option value="seguranca">Segurança de Dados</option>
                                <option value="voip">Telefonia VoIP</option>
                                <option value="rhdocs">RHDocs</option>
                                <option value="medplaces">MedPlaces</option>
                                <option value="whatsapp">WhatsApp Bot</option>
                                <option value="outros">Outros</option>
                            </select>
                            <label for="service">Serviço de Interesse</label>
                        </div>
                        
                        <div class="form-group">
                            <textarea id="message" name="message" rows="5" required></textarea>
                            <label for="message">Mensagem</label>
                        </div>
                        
                        <button type="submit" class="btn-primary">
                            <span>Enviar Mensagem</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>
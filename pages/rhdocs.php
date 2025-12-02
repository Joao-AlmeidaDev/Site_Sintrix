<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . '/../includes/google-analytics.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RH Docs - Gestão de Recursos Humanos | Sintrix Technology</title>
    <meta name="description" content="RHDocs: Sistema completo de gestão e distribui��o de holerites com portal web, email e WhatsApp. Simplifique a gestão de RH da sua empresa.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../public/assets/favicon.png?v=<?php echo time(); ?>">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
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
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero product-hero">
        <div class="hero-background">
            <div class="grid-overlay"></div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                <div class="product-badge">
                    <i class="fas fa-file-invoice"></i>
                    <span>Sistema de gestão de RH</span>
                </div>
                <h1 class="hero-title">
                    <span class="title-line">RHDocs</span>
                    <span class="title-highlight">gestão Inteligente</span>
                    <span class="title-line">de Holerites</span>
                </h1>
                <p class="hero-subtitle">
                    Simplifique a distribui��o de holerites com nosso sistema completo. 
                    Portal web, envio por email e WhatsApp em uma �nica plataforma seguranÃ§aura e eficiente.
                </p>
                <div class="hero-buttons">
                    <a href="#demo" class="btn-primary">
                        <span>Ver Demonstra��o</span>
                        <i class="fas fa-play"></i>
                    </a>
                    <a href="#contact" class="btn-secondary">
                        <span>Solicitar Or�amento</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-visual" data-aos="fade-left" data-aos-delay="300">
                <div class="product-showcase">
                    <div class="device-mockup">
                        <div class="screen">
                            <div class="app-interface">
                                <div class="app-header">
                                    <div class="header-logo">RHDocs</div>
                                    <div class="user-profile">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                </div>
                                <div class="app-content">
                                    <div class="stat-cards">
                                        <div class="stat-card">
                                            <i class="fas fa-file-alt"></i>
                                            <span class="stat-number">1,247</span>
                                            <span class="stat-label">Holerites</span>
                                        </div>
                                        <div class="stat-card">
                                            <i class="fas fa-check-circle"></i>
                                            <span class="stat-number">98%</span>
                                            <span class="stat-label">Entregues</span>
                                        </div>
                                    </div>
                                    <div class="recent-activity">
                                        <div class="activity-item">
                                            <i class="fas fa-envelope"></i>
                                            <span>Email enviado para Jo�o Silva</span>
                                        </div>
                                        <div class="activity-item">
                                            <i class="fab fa-whatsapp"></i>
                                            <span>WhatsApp enviado para Maria Santos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Recursos Principais</span>
                <h2 class="section-title">Tr�s Formas de Entregar Holerites</h2>
                <p class="section-description">
                    O RHDocs oferece m�ltiplos canais de distribui��o para garantir que 
                    todos os funcion�rios recebam seus holerites de forma r�pida e seguranÃ§aura.
                </p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Portal Web</h3>
                    <p>Portal online seguranÃ§auro onde funcion�rios podem acessar e baixar 
                    seus holerites a qualquer momento, de qualquer dispositivo.</p>
                    <div class="feature-benefits">
                        <span>? Acesso 24/7</span>
                        <span>? Interface intuitiva</span>
                        <span>? histórico completo</span>
                        <span>? seguranÃ§aurança avançada</span>
                    </div>
                </div>
                
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Envio por Email</h3>
                    <p>Distribui��o autom�tica via email com confirmação de leitura 
                    e criptografia para m�xima seguranÃ§aurança dos dados.</p>
                    <div class="feature-benefits">
                        <span>? Envio automático</span>
                        <span>? confirmação de leitura</span>
                        <span>? Criptografia SSL</span>
                        <span>? Logs detalhados</span>
                    </div>
                </div>
                
                <div class="feature-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp Business</h3>
                    <p>integração com WhatsApp Business para envio direto aos 
                    funcion�rios, garantindo alta taxa de visualiza��o.</p>
                    <div class="feature-benefits">
                        <span>? Alta taxa de abertura</span>
                        <span>? confirmação de entrega</span>
                        <span>? Interface familiar</span>
                        <span>? notificações instantâneas</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="benefits-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Vantagens do RHDocs</span>
                <h2 class="section-title">Por que Escolher o RHDocs?</h2>
            </div>
            
            <div class="benefits-content">
                <div class="benefits-visual" data-aos="fade-right">
                    <div class="benefit-showcase">
                        <div class="showcase-item">
                            <div class="icon-badge">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="showcase-content">
                                <h4>Economia de Tempo</h4>
                                <p>At� 80% menos tempo gasto na distribui��o de holerites</p>
                            </div>
                        </div>
                        <div class="showcase-item">
                            <div class="icon-badge">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="showcase-content">
                                <h4>Sustentabilidade</h4>
                                <p>100% digital, sem impress�o de papel</p>
                            </div>
                        </div>
                        <div class="showcase-item">
                            <div class="icon-badge">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="showcase-content">
                                <h4>seguranÃ§aurança</h4>
                                <p>Criptografia de ponta a ponta</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="benefits-list" data-aos="fade-left">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>gestão Simplificada</h4>
                            <p>Painel administrativo intuitivo para gerenciar todos os funcion�rios 
                            e departamentos em um s� lugar.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Relat�rios Detalhados</h4>
                            <p>Acompanhe m�tricas de entrega, visualiza��o e engajamento 
                            com relat�rios completos em tempo real.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>Acesso Mobile</h4>
                            <p>Aplicativo mobile responsivo para que funcion�rios acessem 
                            seus holerites pelo celular ou tablet.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="benefit-content">
                            <h4>personalização</h4>
                            <p>Customize a apar�ncia do portal e emails com a identidade 
                            visual da sua empresa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section id="demo" class="demo-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Demonstra��o</span>
                <h2 class="section-title">Veja o RHDocs em A��o</h2>
                <p class="section-description">
                    Conhe�a todas as funcionalidades do sistema atrav�s de nossa demonstra��o interativa.
                </p>
            </div>
            
            <div class="demo-content" data-aos="fade-up" data-aos-delay="200">
                <div class="demo-video">
                    <div class="video-container">
                        <div class="video-placeholder">
                            <i class="fas fa-play-circle"></i>
                            <span>Clique para assistir a demonstra��o</span>
                        </div>
                    </div>
                </div>
                
                <div class="demo-features">
                    <div class="demo-feature">
                        <i class="fas fa-upload"></i>
                        <h4>Upload Simplificado</h4>
                        <p>Fa�a upload dos holerites em lote atrav�s de planilhas Excel ou PDF</p>
                    </div>
                    <div class="demo-feature">
                        <i class="fas fa-user-cog"></i>
                        <h4>gestão de usuários</h4>
                        <p>Cadastre funcion�rios, departamentos e defina permissões de acesso</p>
                    </div>
                    <div class="demo-feature">
                        <i class="fas fa-bell"></i>
                        <h4>notificações</h4>
                        <p>Sistema inteligente de notificações para funcion�rios e gestores</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Planos e Pre�os</span>
                <h2 class="section-title">Escolha o Plano Ideal</h2>
                <p class="section-description">
                    Planos flex�veis que se adaptam ao tamanho da sua empresa.
                </p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-header">
                        <h3>Starter</h3>
                        <div class="price">
                            <span class="currency">R$</span>
                            <span class="amount">49</span>
                            <span class="period">/m�s</span>
                        </div>
                        <p>At� 50 funcion�rios</p>
                    </div>
                    <div class="pricing-features">
                        <span>? Portal web</span>
                        <span>? Envio por email</span>
                        <span>? Suporte básico</span>
                        <span>? Relat�rios simples</span>
                    </div>
                    <a href="#contact" class="pricing-btn">Escolher Plano</a>
                </div>
                
                <div class="pricing-card featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-badge">Mais Popular</div>
                    <div class="pricing-header">
                        <h3>Professional</h3>
                        <div class="price">
                            <span class="currency">R$</span>
                            <span class="amount">99</span>
                            <span class="period">/m�s</span>
                        </div>
                        <p>At� 200 funcion�rios</p>
                    </div>
                    <div class="pricing-features">
                        <span>? Todos os recursos do Starter</span>
                        <span>? WhatsApp Business</span>
                        <span>? personalização</span>
                        <span>? Relat�rios avan�ados</span>
                        <span>? Suporte prioritário</span>
                    </div>
                    <a href="#contact" class="pricing-btn">Escolher Plano</a>
                </div>
                
                <div class="pricing-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-header">
                        <h3>Enterprise</h3>
                        <div class="price">
                            <span class="currency">R$</span>
                            <span class="amount">199</span>
                            <span class="period">/m�s</span>
                        </div>
                        <p>Funcion�rios ilimitados</p>
                    </div>
                    <div class="pricing-features">
                        <span>? Todos os recursos</span>
                        <span>? API personalizada</span>
                        <span>? integração com ERP</span>
                        <span>? Suporte 24/7</span>
                        <span>? Consultoria dedicada</span>
                    </div>
                    <a href="#contact" class="pricing-btn">Escolher Plano</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title">Implemente o RHDocs Hoje</h2>
                <p class="section-description">
                    Nossa equipe est� pronta para demonstrar como o RHDocs pode 
                    transformar a gestão de RH da sua empresa.
                </p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
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
                            <p>rhdocs@sintrixtechnology.com.br<br>
                            vendas@sintrixtechnology.com.br</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Demonstra��o</h4>
                            <p>Agende uma demo gratuita<br>
                            e veja o sistema funcionando</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form" data-aos="fade-left">
                    <form id="rhdocsForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Nome Completo</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email Corporativo</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" required>
                            <label for="phone">Telefone</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="company" name="company" required>
                            <label for="company">Empresa</label>
                        </div>
                        
                        <div class="form-group">
                            <select id="employees" name="employees" required>
                                <option value="">N�mero de funcion�rios</option>
                                <option value="1-50">1 a 50 funcion�rios</option>
                                <option value="51-200">51 a 200 funcion�rios</option>
                                <option value="201-500">201 a 500 funcion�rios</option>
                                <option value="500+">Mais de 500 funcion�rios</option>
                            </select>
                            <label for="employees">Porte da Empresa</label>
                        </div>
                        
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" placeholder="Conte-nos sobre suas necessidades..."></textarea>
                            <label for="message">Mensagem</label>
                        </div>
                        
                        <button type="submit" class="btn-primary btn-hover-effect">
                            <span>Solicitar Demonstra��o</span>
                            <i class="fas fa-rocket"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/cookie-banner.php'; ?>
    <?php include '../includes/analytics-tracking.php'; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../public/js/script.js"></script>
    <script>
        // Script espec�fico para RHDocs
        document.addEventListener('DOMContentLoaded', function() {
            // Anima��o do showcase do produto
            const showcaseItems = document.querySelectorAll('.showcase-item');
            showcaseItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.transform = 'translateX(0)';
                    item.style.opacity = '1';
                }, index * 200);
            });
            
            // Anima��o do video placeholder
            const videoPlaceholder = document.querySelector('.video-placeholder');
            if (videoPlaceholder) {
                videoPlaceholder.addEventListener('click', function() {
                    // Aqui você pode implementar a abertura do v�deo
                    alert('Funcionalidade de v�deo ser� implementada em breve!');
                });
            }
        });
    </script>    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>










<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Corporativo | Sintrix Technology</title>
    <meta name="description" content="Email corporativo profissional com anti-spam, backup automático e sincroniza��o total. gestão completa de emails para empresas.">
    <meta name="keywords" content="email corporativo, gestão email, anti-spam, backup email, email empresarial">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../public/assets/favicon.svg">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/animations.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <link rel="stylesheet" href="../public/css/tailwind-utilities.css">
    
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
    </style>
    
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
                    }
                }
            }
        }
    </script>
    
    <style>
        .email-hero {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            position: relative;
            padding: 120px 0 80px;
            overflow: hidden;
        }
        
        .email-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .email-envelope {
            position: absolute;
            color: rgba(0, 212, 255, 0.1);
            font-size: 2rem;
            animation: emailFloat 6s ease-in-out infinite;
        }
        
        .email-envelope:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .email-envelope:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }
        
        .email-envelope:nth-child(3) {
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
        }
        
        @keyframes emailFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.1; }
            50% { transform: translateY(-20px) rotate(10deg); opacity: 0.3; }
        }
        
        .email-interface {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .email-header {
            background: var(--gradient-primary);
            padding: 15px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .email-controls {
            display: flex;
            gap: 8px;
        }
        
        .email-btn {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }
        
        .email-title {
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .email-sidebar {
            display: flex;
            height: 400px;
        }
        
        .email-folders {
            width: 200px;
            background: #1e1e2e;
            padding: 20px 0;
            border-right: 1px solid var(--border-color);
        }
        
        .folder-item {
            padding: 12px 20px;
            color: var(--gray-text);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition-smooth);
            cursor: pointer;
        }
        
        .folder-item:hover,
        .folder-item.active {
            background: rgba(0, 212, 255, 0.1);
            color: var(--primary-color);
        }
        
        .email-content {
            flex: 1;
            padding: 20px;
        }
        
        .email-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition-smooth);
        }
        
        .email-item:hover {
            background: rgba(0, 212, 255, 0.05);
            margin: 0 -20px;
            padding: 15px 20px;
            border-radius: 8px;
        }
        
        .email-status {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--primary-color);
        }
        
        .email-status.read {
            background: var(--gray-text);
        }
        
        .email-from {
            font-weight: 600;
            color: var(--light-text);
            min-width: 120px;
        }
        
        .email-subject {
            flex: 1;
            color: var(--gray-text);
        }
        
        .email-time {
            color: var(--gray-text);
            font-size: 0.8rem;
        }
        
        .feature-comparison {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin: 50px 0;
        }
        
        .comparison-side {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 20px;
            position: relative;
        }
        
        .comparison-side.problem {
            border: 2px solid #ff4757;
        }
        
        .comparison-side.solution {
            border: 2px solid #2ed573;
        }
        
        .comparison-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .comparison-icon {
            font-size: 2rem;
        }
        
        .comparison-side.problem .comparison-icon {
            color: #ff4757;
        }
        
        .comparison-side.solution .comparison-icon {
            color: #2ed573;
        }
        
        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .feature-list-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--gray-text);
        }
        
        .feature-list-item.problem {
            color: #ff4757;
        }
        
        .feature-list-item.solution {
            color: #2ed573;
        }
        
        .email-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .stat-card {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            border-left: 4px solid var(--primary-color);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: var(--light-text);
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .stat-description {
            color: var(--gray-text);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .feature-comparison {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .email-sidebar {
                flex-direction: column;
                height: auto;
            }
            
            .email-folders {
                width: 100%;
                display: flex;
                overflow-x: auto;
                padding: 10px 0;
            }
            
            .folder-item {
                white-space: nowrap;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="email-hero">
        <div class="email-particles">
            <i class="fas fa-envelope email-envelope"></i>
            <i class="fas fa-paper-plane email-envelope"></i>
            <i class="fas fa-at email-envelope"></i>
        </div>
        
        <div class="container px-4 md:px-8">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            <span class="gradient-text">Email Corporativo</span><br>
                            Profissional e seguranÃ§auro
                        </h1>
                        <p class="hero-description">
                            Abandone emails gratuitos! Tenha um sistema profissional completo com 
                            seu dom�nio, anti-spam inteligente, backup automático e sincroniza��o 
                            perfeita. <strong>Sua empresa merece um email � altura do seu neg�cio!</strong>
                        </p>
                        
                        <div class="hero-features">
                            <div class="feature-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Anti-Spam avan�ado</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-sync"></i>
                                <span>Sincroniza��o Total</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-backup"></i>
                                <span>Backup automático</span>
                            </div>
                        </div>
                        
                        <div class="hero-actions">
                            <a href="#plans" class="btn-primary">
                                <i class="fas fa-rocket"></i>
                                <span>Ver Planos</span>
                            </a>
                            <a href="#demo" class="btn-secondary">
                                <i class="fas fa-play"></i>
                                <span>Ver Interface</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="email-interface">
                        <div class="email-header">
                            <div class="email-controls">
                                <div class="email-btn"></div>
                                <div class="email-btn"></div>
                                <div class="email-btn"></div>
                            </div>
                            <div class="email-title">suaempresa@seudominio.com.br</div>
                            <div style="color: rgba(255,255,255,0.7); font-size: 0.8rem;">
                                Online � Sincronizado
                            </div>
                        </div>
                        
                        <div class="email-sidebar">
                            <div class="email-folders">
                                <div class="folder-item active">
                                    <i class="fas fa-inbox"></i>
                                    <span>Caixa de Entrada</span>
                                </div>
                                <div class="folder-item">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>Enviados</span>
                                </div>
                                <div class="folder-item">
                                    <i class="fas fa-star"></i>
                                    <span>Importantes</span>
                                </div>
                                <div class="folder-item">
                                    <i class="fas fa-trash"></i>
                                    <span>Spam Bloqueado</span>
                                </div>
                            </div>
                            
                            <div class="email-content">
                                <div class="email-item">
                                    <div class="email-status"></div>
                                    <div class="email-from">Cliente Premium</div>
                                    <div class="email-subject">Proposta Comercial - Projeto 2024</div>
                                    <div class="email-time">09:30</div>
                                </div>
                                
                                <div class="email-item">
                                    <div class="email-status"></div>
                                    <div class="email-from">Fornecedor ABC</div>
                                    <div class="email-subject">Cota��o Solicitada - Urgente</div>
                                    <div class="email-time">08:45</div>
                                </div>
                                
                                <div class="email-item">
                                    <div class="email-status read"></div>
                                    <div class="email-from">Equipe Interna</div>
                                    <div class="email-subject">Reuni�o Semanal - relat�rio</div>
                                    <div class="email-time">Ontem</div>
                                </div>
                                
                                <div class="email-item">
                                    <div class="email-status read"></div>
                                    <div class="email-from">Contador</div>
                                    <div class="email-subject">Documentos Fiscais - an�lise</div>
                                    <div class="email-time">Ontem</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problems vs Solutions -->
    <section class="section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Problemas vs Solu��es</span>
                <h2 class="section-title">Por que mudar do Email Gratuito?</h2>
                <p class="section-description">
                    Veja a diferen�a entre usar emails gratuitos e ter um sistema profissional
                </p>
            </div>
            
            <div class="feature-comparison" data-aos="fade-up">
                <div class="comparison-side problem">
                    <div class="comparison-header">
                        <i class="fas fa-exclamation-triangle comparison-icon"></i>
                        <div>
                            <h3 style="color: #ff4757; margin-bottom: 5px;">Emails Gratuitos</h3>
                            <p style="color: var(--gray-text); margin: 0;">Gmail, Outlook, Yahoo...</p>
                        </div>
                    </div>
                    
                    <div class="feature-list">
                        <div class="feature-list-item problem">
                            <i class="fas fa-times"></i>
                            <span>Apar�ncia n�o profissional (@gmail.com)</span>
                        </div>
                        <div class="feature-list-item problem">
                            <i class="fas fa-times"></i>
                            <span>Spam constante na caixa de entrada</span>
                        </div>
                        <div class="feature-list-item problem">
                            <i class="fas fa-times"></i>
                            <span>Limita��o de armazenamento</span>
                        </div>
                        <div class="feature-list-item problem">
                            <i class="fas fa-times"></i>
                            <span>Sem backup garantido</span>
                        </div>
                        <div class="feature-list-item problem">
                            <i class="fas fa-times"></i>
                            <span>Depend�ncia de terceiros</span>
                        </div>
                        <div class="feature-list-item problem">
                            <i class="fas fa-times"></i>
                            <span>Problemas de sincroniza��o</span>
                        </div>
                        <div class="feature-list-item problem">
                            <i class="fas fa-times"></i>
                            <span>Suporte limitado</span>
                        </div>
                    </div>
                </div>
                
                <div class="comparison-side solution">
                    <div class="comparison-header">
                        <i class="fas fa-check-circle comparison-icon"></i>
                        <div>
                            <h3 style="color: #2ed573; margin-bottom: 5px;">Email Sintrix Corporativo</h3>
                            <p style="color: var(--gray-text); margin: 0;">seu@dominio.com.br</p>
                        </div>
                    </div>
                    
                    <div class="feature-list">
                        <div class="feature-list-item solution">
                            <i class="fas fa-check"></i>
                            <span>Dom�nio Pr�prio, imagem profissional</span>
                        </div>
                        <div class="feature-list-item solution">
                            <i class="fas fa-check"></i>
                            <span>Anti-spam inteligente 99.9% eficaz</span>
                        </div>
                        <div class="feature-list-item solution">
                            <i class="fas fa-check"></i>
                            <span>Armazenamento ilimitado disponível</span>
                        </div>
                        <div class="feature-list-item solution">
                            <i class="fas fa-check"></i>
                            <span>Backup automático di�rio</span>
                        </div>
                        <div class="feature-list-item solution">
                            <i class="fas fa-check"></i>
                            <span>Controle total dos seus dados</span>
                        </div>
                        <div class="feature-list-item solution">
                            <i class="fas fa-check"></i>
                            <span>Sincroniza��o perfeita multi-dispositivo</span>
                        </div>
                        <div class="feature-list-item solution">
                            <i class="fas fa-check"></i>
                            <span>Suporte especializado 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="email-stats" data-aos="fade-up">
                <div class="stat-card">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">Efic�cia Anti-Spam</div>
                    <div class="stat-description">Bloqueio inteligente de emails indesejados</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Disponibilidade</div>
                    <div class="stat-description">Acesso garantido em qualquer momento</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Sincroniza��o</div>
                    <div class="stat-description">Todos os dispositivos sempre atualizados</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">8</div>
                    <div class="stat-label">usuários</div>
                    <div class="stat-description">Crie quantos emails precisar</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section" id="demo">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Recursos avan�ados</span>
                <h2 class="section-title">Tudo que sua Empresa Precisa</h2>
                <p class="section-description">
                    funcionalidades profissionais para maximizar a produtividade
                </p>
            </div>
            
            <div class="security-features" data-aos="fade-up">
                <div class="security-item">
                    <i class="fas fa-shield-alt security-icon"></i>
                    <div class="security-text">
                        <h4>Anti-Spam Inteligente</h4>
                        <p>Sistema avan�ado que aprende e bloqueia automaticamente emails maliciosos</p>
                    </div>
                </div>
                
                <div class="security-item">
                    <i class="fas fa-sync security-icon"></i>
                    <div class="security-text">
                        <h4>Sincroniza��o Multi-Dispositivo</h4>
                        <p>Acesse seus emails em qualquer lugar: celular, tablet, notebook</p>
                    </div>
                </div>
                
                <div class="security-item">
                    <i class="fas fa-backup security-icon"></i>
                    <div class="security-text">
                        <h4>Backup automático</h4>
                        <p>Todos os emails salvos automaticamente, recupera��o garantida</p>
                    </div>
                </div>
                
                <div class="security-item">
                    <i class="fas fa-users security-icon"></i>
                    <div class="security-text">
                        <h4>gestão de usuários</h4>
                        <p>Crie, edite e gerencie todos os emails da empresa em um s� lugar</p>
                    </div>
                </div>
                
                <div class="security-item">
                    <i class="fas fa-calendar security-icon"></i>
                    <div class="security-text">
                        <h4>Calend�rio Integrado</h4>
                        <p>Agenda compartilhada, reuni�es sincronizadas com toda a equipe</p>
                    </div>
                </div>
                
                <div class="security-item">
                    <i class="fas fa-mobile-alt security-icon"></i>
                    <div class="security-text">
                        <h4>Apps Nativos</h4>
                        <p>Configure facilmente no Outlook, Apple Mail, Gmail app</p>
                    </div>
                </div>
                
                <div class="security-item">
                    <i class="fas fa-search security-icon"></i>
                    <div class="security-text">
                        <h4>Busca avançada</h4>
                        <p>Encontre qualquer email rapidamente com filtros inteligentes</p>
                    </div>
                </div>
                
                <div class="security-item">
                    <i class="fas fa-chart-line security-icon"></i>
                    <div class="security-text">
                        <h4>relat�rios Detalhados</h4>
                        <p>Estat�sticas de uso, emails bloqueados, efici�ncia da equipe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="section" id="plans">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Planos Email</span>
                <h2 class="section-title">Pre�os que Cabem no seu Bolso</h2>
                <p class="section-description">
                    A partir de R$ 15 por usu�rio - muito mais barato que você imagina!
                </p>
            </div>
            
            <div class="solutions-grid">
                <div class="solution-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="solution-header">
                        <h3>básico</h3>
                        <div class="solution-price">
                            <span class="currency">R$</span>
                            <span class="amount">15</span>
                            <span class="period">/usu�rio/m�s</span>
                        </div>
                    </div>
                    <div class="solution-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>10GB por caixa de email</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Anti-spam básico</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Sincroniza��o total</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Backup semanal</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Suporte técnico</span>
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
                            <span class="amount">25</span>
                            <span class="period">/usu�rio/m�s</span>
                        </div>
                    </div>
                    <div class="solution-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>50GB por caixa de email</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Anti-spam avan�ado 99.9%</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Calend�rio integrado</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Backup di�rio automático</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Suporte prioritário</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>relat�rios de uso</span>
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
                            <span class="amount">40</span>
                            <span class="period">/usu�rio/m�s</span>
                        </div>
                    </div>
                    <div class="solution-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Armazenamento ilimitado</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Anti-spam + antiv�rus</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Agenda compartilhada</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Backup cont�nuo</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Gerente de conta dedicado</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Integra��es avançadas</span>
                        </div>
                    </div>
                    <a href="#contact" class="solution-cta">
                        <span>Contratar Agora</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="pricing-note" style="text-align: center; margin-top: 40px; padding: 30px; background: rgba(0, 212, 255, 0.1); border-radius: 15px;" data-aos="fade-up">
                <h4 style="color: var(--primary-color); margin-bottom: 15px;">
                    ?? Economia Garantida
                </h4>
                <p style="color: var(--gray-text); margin-bottom: 10px;">
                    Compare: Office 365 custa R$ 35/usu�rio/m�s para funcionalidades similares
                </p>
                <p style="color: var(--light-text); font-weight: 600;">
                    Com a Sintrix, você economiza at� 40% e tem suporte nacional especializado!
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container px-4 md:px-8">
            <div class="cta-content" data-aos="fade-up">
                <h2>Transforme a comunica��o da sua Empresa!</h2>
                <p>configuração em 24h. Migra��o gratuita. Treinamento incluso. Teste por 30 dias!</p>
                <div class="cta-actions">
                    <a href="#contact" class="btn-primary">
                        <i class="fas fa-envelope"></i>
                        <span>Come�ar Agora</span>
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
                <h2 class="section-title">Configure seu Email Corporativo</h2>
                <p class="section-description">
                    Nossa equipe vai migrar todos os seus emails sem perder nada
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
                            <p>vendas@sintrixtechnology.com.br</p>
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
                        <label for="email">Email Atual</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Empresa</label>
                        <input type="text" id="company" name="company" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="domain">Dom�nio Desejado</label>
                        <input type="text" id="domain" name="domain" placeholder="minhaempresa.com.br" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="users">Quantos usuários?</label>
                        <select id="users" name="users" required>
                            <option value="">Selecione a quantidade</option>
                            <option value="1-5">1-5 usuários - A partir de R$ 75/m�s</option>
                            <option value="6-15">6-15 usuários - A partir de R$ 150/m�s</option>
                            <option value="16-50">16-50 usuários - A partir de R$ 400/m�s</option>
                            <option value="50+">50+ usuários - Valor personalizado</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="plan">Plano de Interesse</label>
                        <select id="plan" name="plan" required>
                            <option value="">Selecione um plano</option>
                            <option value="basic">básico - R$ 15/usu�rio/m�s</option>
                            <option value="professional">Profissional - R$ 25/usu�rio/m�s</option>
                            <option value="enterprise">Empresarial - R$ 40/usu�rio/m�s</option>
                            <option value="custom">Preciso de algo personalizado</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Observa��es</label>
                        <textarea id="message" name="message" rows="4" placeholder="Conte sobre suas necessidades espec�ficas de email..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-envelope-open"></i>
                        <span>Solicitar configuração</span>
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
        
        // Simular atividade na interface de email
        const emailItems = document.querySelectorAll('.email-item');
        let currentActive = 0;
        
        setInterval(() => {
            emailItems.forEach(item => item.style.background = '');
            emailItems[currentActive].style.background = 'rgba(0, 212, 255, 0.1)';
            currentActive = (currentActive + 1) % emailItems.length;
        }, 3000);
    </script>
</body>
</html>










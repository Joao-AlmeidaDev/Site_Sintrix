<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . '/../includes/google-analytics.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedPlaces - Sistema para Clínicas e Consultórios | Sintrix Technology</title>
    <meta name="description" content="MedPlaces: Sistema completo para clínicas e consultórios com entrega de exames em nuvem e visualizador PACS. Transforme sua gestão médica.">
    
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
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero product-hero medical-hero">
        <div class="hero-background">
            <div class="grid-overlay"></div>
            <div class="medical-elements">
                <div class="pulse-element"></div>
                <div class="heartbeat-line"></div>
            </div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                <div class="product-badge medical-badge">
                    <i class="fas fa-stethoscope"></i>
                    <span>Tecnologia Médica Avançada</span>
                </div>
                <h1 class="hero-title">
                    <span class="title-line">MedPlaces</span>
                    <span class="title-highlight">Saúde Digital</span>
                    <span class="title-line">Inteligente</span>
                </h1>
                <p class="hero-subtitle">
                    Sistema completo para clínicas e consultórios com entrega de exames em nuvem, 
                    visualizador PACS integrado e gestão completa para médicos e enfermagem.
                </p>
                <div class="hero-buttons">
                    <a href="#demo" class="btn-primary medical-btn">
                        <span>Ver Demonstração</span>
                        <i class="fas fa-microscope"></i>
                    </a>
                    <a href="#contact" class="btn-secondary">
                        <span>Solicitar Orçamento</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-visual" data-aos="fade-left" data-aos-delay="300">
                <div class="medical-showcase">
                    <div class="pacs-viewer">
                        <div class="viewer-header">
                            <div class="patient-info">
                                <span class="patient-name">João Silva</span>
                                <span class="patient-id">ID: 12345</span>
                            </div>
                            <div class="viewer-tools">
                                <i class="fas fa-search-plus"></i>
                                <i class="fas fa-search-minus"></i>
                                <i class="fas fa-arrows-alt"></i>
                            </div>
                        </div>
                        <div class="viewer-content">
                            <div class="medical-image">
                                <div class="scan-lines"></div>
                                <div class="image-overlay">
                                    <span>Radiografia Tórax PA</span>
                                    <span>2025-01-15 14:30</span>
                                </div>
                            </div>
                        </div>
                        <div class="viewer-controls">
                            <div class="control-group">
                                <span>Brilho</span>
                                <div class="slider"></div>
                            </div>
                            <div class="control-group">
                                <span>Contraste</span>
                                <div class="slider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section medical-features">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Recursos Especializados</span>
                <h2 class="section-title">Tecnologia Médica de Ponta</h2>
                <p class="section-description">
                    O MedPlaces oferece uma suíte completa de ferramentas para modernizar 
                    a gestão de clínicas e consultórios médicos.
                </p>
            </div>
            
            <div class="medical-features-grid">
                <div class="medical-feature" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon medical-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3>Exames em Nuvem</h3>
                    <p>Armazenamento seguro e entrega instantânea de exames médicos através 
                    de nossa plataforma cloud especializada.</p>
                    <div class="feature-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Backup automático</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Acesso remoto</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Conformidade LGPD</span>
                        </div>
                    </div>
                </div>
                
                <div class="medical-feature" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon medical-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visualizador PACS</h3>
                    <p>Visualizador DICOM avançado para análise detalhada de imagens médicas 
                    com ferramentas profissionais de diagnóstico.</p>
                    <div class="feature-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Zoom e pan</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Medições precisas</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Anotações</span>
                        </div>
                    </div>
                </div>
                
                <div class="medical-feature" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon medical-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Portal Médico</h3>
                    <p>Interface especializada para médicos e enfermagem com acesso rápido 
                    a históricos, laudos e ferramentas de diagnóstico.</p>
                    <div class="feature-highlights">
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Dashboard intuitivo</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Histórico completo</span>
                        </div>
                        <div class="highlight-item">
                            <i class="fas fa-check"></i>
                            <span>Laudos digitais</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Section -->
    <section class="workflow-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Como Funciona</span>
                <h2 class="section-title">Fluxo de Trabalho Otimizado</h2>
                <p class="section-description">
                    Processo simplificado que conecta pacientes, médicos e laboratórios 
                    em uma plataforma única e segura.
                </p>
            </div>
            
            <div class="workflow-steps">
                <div class="workflow-step" data-aos="fade-right" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-upload"></i>
                        </div>
                        <h4>Upload de Exames</h4>
                        <p>Laboratórios ou clínicas fazem upload dos exames diretamente 
                        na plataforma com integração automática.</p>
                    </div>
                </div>
                
                <div class="workflow-step" data-aos="fade-right" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <h4>Notificação Automática</h4>
                        <p>Pacientes e médicos recebem notificações instantâneas 
                        sobre a disponibilidade dos exames.</p>
                    </div>
                </div>
                
                <div class="workflow-step" data-aos="fade-right" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>Análise PACS</h4>
                        <p>Médicos utilizam o visualizador PACS para análise detalhada 
                        das imagens e elaboração de laudos.</p>
                    </div>
                </div>
                
                <div class="workflow-step" data-aos="fade-right" data-aos-delay="400">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-file-medical"></i>
                        </div>
                        <h4>Laudo Digital</h4>
                        <p>Laudos são gerados digitalmente e disponibilizados 
                        imediatamente para pacientes e médicos solicitantes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="benefits-section medical-benefits">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Vantagens Clínicas</span>
                <h2 class="section-title">Transforme sua Prática Médica</h2>
            </div>
            
            <div class="medical-benefits-grid">
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Diagnóstico Mais Rápido</h4>
                    <p>Redução de até 70% no tempo entre exame e diagnóstico através 
                    de nossa plataforma integrada.</p>
                    <div class="benefit-metric">
                        <span class="metric-number">70%</span>
                        <span class="metric-label">Mais Rápido</span>
                    </div>
                </div>
                
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Segurança LGPD</h4>
                    <p>Conformidade total com a Lei Geral de Proteção de Dados 
                    para segurança máxima das informações médicas.</p>
                    <div class="benefit-metric">
                        <span class="metric-number">100%</span>
                        <span class="metric-label">Conformidade</span>
                    </div>
                </div>
                
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4>Acesso Mobile</h4>
                    <p>Aplicativo móvel para médicos acessarem exames e elaborarem 
                    laudos de qualquer lugar.</p>
                    <div class="benefit-metric">
                        <span class="metric-number">24/7</span>
                        <span class="metric-label">Disponível</span>
                    </div>
                </div>
                
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Produtividade</h4>
                    <p>Aumento significativo na produtividade com fluxos de trabalho 
                    otimizados e automação inteligente.</p>
                    <div class="benefit-metric">
                        <span class="metric-number">+85%</span>
                        <span class="metric-label">Produtividade</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section id="demo" class="demo-section medical-demo">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Demonstração Interativa</span>
                <h2 class="section-title">Explore o MedPlaces</h2>
                <p class="section-description">
                    Conheça todas as funcionalidades do sistema através de nossa 
                    demonstração interativa personalizada para área médica.
                </p>
            </div>
            
            <div class="demo-tabs" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-buttons">
                    <button class="tab-btn active" data-tab="pacs">Visualizador PACS</button>
                    <button class="tab-btn" data-tab="portal">Portal Médico</button>
                    <button class="tab-btn" data-tab="mobile">App Mobile</button>
                </div>
                
                <div class="tab-content">
                    <div class="tab-panel active" id="pacs">
                        <div class="demo-interface">
                            <div class="interface-header">
                                <h4>Visualizador DICOM Avançado</h4>
                                <div class="interface-tools">
                                    <button><i class="fas fa-expand"></i></button>
                                    <button><i class="fas fa-ruler"></i></button>
                                    <button><i class="fas fa-edit"></i></button>
                                </div>
                            </div>
                            <div class="interface-body">
                                <div class="image-viewer">
                                    <div class="medical-scan">
                                        <div class="scan-overlay">
                                            <span>TC Crânio - Corte Axial</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="viewer-sidebar">
                                    <div class="patient-data">
                                        <h5>Dados do Paciente</h5>
                                        <p>Nome: Maria Silva</p>
                                        <p>Data: 15/01/2025</p>
                                        <p>Médico: Dr. João Santos</p>
                                    </div>
                                    <div class="measurements">
                                        <h5>Medições</h5>
                                        <p>Distância: 2.5 cm</p>
                                        <p>Ângulo: 45°</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-panel" id="portal">
                        <div class="demo-interface">
                            <div class="portal-dashboard">
                                <div class="dashboard-stats">
                                    <div class="stat-item">
                                        <i class="fas fa-file-medical"></i>
                                        <span class="stat-number">247</span>
                                        <span class="stat-label">Exames Hoje</span>
                                    </div>
                                    <div class="stat-item">
                                        <i class="fas fa-clock"></i>
                                        <span class="stat-number">12</span>
                                        <span class="stat-label">Pendentes</span>
                                    </div>
                                    <div class="stat-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span class="stat-number">98%</span>
                                        <span class="stat-label">Concluídos</span>
                                    </div>
                                </div>
                                <div class="recent-exams">
                                    <h5>Exames Recentes</h5>
                                    <div class="exam-item">
                                        <span>Radiografia Tórax - Ana Costa</span>
                                        <span class="exam-status pending">Pendente</span>
                                    </div>
                                    <div class="exam-item">
                                        <span>TC Abdome - Carlos Silva</span>
                                        <span class="exam-status completed">Concluído</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-panel" id="mobile">
                        <div class="demo-interface mobile-demo">
                            <div class="mobile-mockup">
                                <div class="mobile-screen">
                                    <div class="mobile-app">
                                        <div class="app-header">
                                            <span>MedPlaces Mobile</span>
                                            <i class="fas fa-user-circle"></i>
                                        </div>
                                        <div class="quick-actions">
                                            <div class="action-btn">
                                                <i class="fas fa-search"></i>
                                                <span>Buscar Exame</span>
                                            </div>
                                            <div class="action-btn">
                                                <i class="fas fa-camera"></i>
                                                <span>Capturar</span>
                                            </div>
                                        </div>
                                        <div class="recent-items">
                                            <div class="item">
                                                <i class="fas fa-x-ray"></i>
                                                <span>RX Tórax - João</span>
                                            </div>
                                            <div class="item">
                                                <i class="fas fa-brain"></i>
                                                <span>TC Crânio - Maria</span>
                                            </div>
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

    <!-- Pricing Section -->
    <section class="pricing-section medical-pricing">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Planos Médicos</span>
                <h2 class="section-title">Investimento em Tecnologia</h2>
                <p class="section-description">
                    Planos especializados para diferentes tipos de estabelecimentos de saúde.
                </p>
            </div>
            
            <div class="medical-pricing-grid">
                <div class="pricing-card medical-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-header">
                        <h3>Consultório</h3>
                        <div class="price">
                            <span class="currency">R$</span>
                            <span class="amount">199</span>
                            <span class="period">/mês</span>
                        </div>
                        <p>Até 1000 exames/mês</p>
                    </div>
                    <div class="pricing-features">
                        <span>✓ Visualizador PACS</span>
                        <span>✓ Armazenamento 100GB</span>
                        <span>✓ 2 usuários médicos</span>
                        <span>✓ Suporte básico</span>
                        <span>✓ App mobile</span>
                    </div>
                    <a href="#contact" class="pricing-btn">Escolher Plano</a>
                </div>
                
                <div class="pricing-card medical-card featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-badge">Recomendado</div>
                    <div class="pricing-header">
                        <h3>Clínica</h3>
                        <div class="price">
                            <span class="currency">R$</span>
                            <span class="amount">399</span>
                            <span class="period">/mês</span>
                        </div>
                        <p>Até 5000 exames/mês</p>
                    </div>
                    <div class="pricing-features">
                        <span>✓ Todos recursos do Consultório</span>
                        <span>✓ Armazenamento 500GB</span>
                        <span>✓ 10 usuários médicos</span>
                        <span>✓ Integração laboratórios</span>
                        <span>✓ Relatórios avançados</span>
                        <span>✓ Suporte prioritário</span>
                    </div>
                    <a href="#contact" class="pricing-btn">Escolher Plano</a>
                </div>
                
                <div class="pricing-card medical-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-header">
                        <h3>Hospital</h3>
                        <div class="price">
                            <span class="currency">R$</span>
                            <span class="amount">799</span>
                            <span class="period">/mês</span>
                        </div>
                        <p>Exames ilimitados</p>
                    </div>
                    <div class="pricing-features">
                        <span>✓ Todos os recursos</span>
                        <span>✓ Armazenamento ilimitado</span>
                        <span>✓ Usuários ilimitados</span>
                        <span>✓ API personalizada</span>
                        <span>✓ Integração HIS/RIS</span>
                        <span>✓ Suporte 24/7</span>
                        <span>✓ Consultoria dedicada</span>
                    </div>
                    <a href="#contact" class="pricing-btn">Escolher Plano</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section medical-contact">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title">Modernize sua Clínica</h2>
                <p class="section-description">
                    Nossa equipe médica especializada está pronta para demonstrar 
                    como o MedPlaces pode revolucionar sua prática médica.
                </p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Consultoria Médica</h4>
                            <p>Especialistas em tecnologia médica<br>
                            prontos para atender suas necessidades</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Telefone Especializado</h4>
                            <p>(11) 99999-9999<br>
                            Linha direta para área médica</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Demonstração Médica</h4>
                            <p>Agende uma demo personalizada<br>
                            com casos clínicos reais</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form" data-aos="fade-left">
                    <form id="medplacesForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Nome Completo</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email Profissional</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" required>
                            <label for="phone">Telefone</label>
                        </div>
                        
                        <div class="form-group">
                            <select id="specialty" name="specialty" required>
                                <option value="">Especialidade Médica</option>
                                <option value="radiologia">Radiologia</option>
                                <option value="cardiologia">Cardiologia</option>
                                <option value="ortopedia">Ortopedia</option>
                                <option value="neurologia">Neurologia</option>
                                <option value="clinica-geral">Clínica Geral</option>
                                <option value="outros">Outros</option>
                            </select>
                            <label for="specialty">Área de Atuação</label>
                        </div>
                        
                        <div class="form-group">
                            <select id="establishment" name="establishment" required>
                                <option value="">Tipo de Estabelecimento</option>
                                <option value="consultorio">Consultório</option>
                                <option value="clinica">Clínica</option>
                                <option value="hospital">Hospital</option>
                                <option value="laboratorio">Laboratório</option>
                                <option value="outros">Outros</option>
                            </select>
                            <label for="establishment">Estabelecimento</label>
                        </div>
                        
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" 
                                placeholder="Conte-nos sobre suas necessidades médicas..."></textarea>
                            <label for="message">Mensagem</label>
                        </div>
                        
                        <button type="submit" class="btn-primary medical-btn btn-hover-effect">
                            <span>Solicitar Demonstração</span>
                            <i class="fas fa-stethoscope"></i>
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
        // Script específico para MedPlaces
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabPanels = document.querySelectorAll('.tab-panel');
            
            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active from all
                    tabBtns.forEach(b => b.classList.remove('active'));
                    tabPanels.forEach(p => p.classList.remove('active'));
                    
                    // Add active to clicked
                    btn.classList.add('active');
                    const targetTab = btn.getAttribute('data-tab');
                    document.getElementById(targetTab).classList.add('active');
                });
            });
            
            // Medical animations
            const scanLines = document.querySelector('.scan-lines');
            if (scanLines) {
                setInterval(() => {
                    scanLines.style.animation = 'none';
                    setTimeout(() => {
                        scanLines.style.animation = 'scanLine 2s linear';
                    }, 100);
                }, 3000);
            }
            
            // Heartbeat animation
            const pulseElement = document.querySelector('.pulse-element');
            if (pulseElement) {
                setInterval(() => {
                    pulseElement.classList.add('pulse');
                    setTimeout(() => {
                        pulseElement.classList.remove('pulse');
                    }, 200);
                }, 1000);
            }
        });
    </script>    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




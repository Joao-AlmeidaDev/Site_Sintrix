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
        <title>Messenger Pro - Chatbot para Negócios | Sintrix Technology</title>
    <meta name="description" content="Messenger Pro Sintrix: Chatbot inteligente para empresas com mensagens automatizadas, direcionamento por departamento e gestão centralizada.">
    
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
    
    <!-- WhatsApp Typing Animation -->
    <style>
        @keyframes typingDot {
            0%, 60%, 100% {
                transform: translateY(0);
                opacity: 0.7;
            }
            30% {
                transform: translateY(-8px);
                opacity: 1;
            }
        }
        
        /* Melhorias específicas para a seção de contato */
        .whatsapp-contact .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-top: 50px;
            align-items: start;
        }
        
        .whatsapp-contact .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .whatsapp-contact .contact-item {
            display: flex;
            gap: 20px;
            padding: 25px;
            background: var(--gradient-surface);
            border-radius: 15px;
            border: 1px solid var(--border-color);
            transition: var(--transition-smooth);
            align-items: flex-start;
        }
        
        .whatsapp-contact .contact-item:hover {
            border-color: var(--primary-color);
            transform: translateX(5px);
        }
        
        .whatsapp-contact .contact-icon {
            width: 55px;
            height: 55px;
            min-width: 55px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .whatsapp-contact .contact-icon i {
            font-size: 1.2rem;
            color: white;
        }
        
        .whatsapp-contact .contact-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .whatsapp-contact .contact-details h4 {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            margin: 0 0 8px 0;
            color: var(--light-text);
            font-weight: 600;
            line-height: 1.3;
        }
        
        .whatsapp-contact .contact-details p {
            color: var(--gray-text);
            line-height: 1.6;
            margin: 0;
            font-size: 0.95rem;
        }
        
        .whatsapp-contact .contact-form {
            background: var(--gradient-surface);
            padding: 35px;
            border-radius: 20px;
            border: 1px solid var(--border-color);
        }
        
        .whatsapp-contact .form-group {
            position: relative;
            margin-bottom: 25px;
        }
        
        .whatsapp-contact .form-group input,
        .whatsapp-contact .form-group select,
        .whatsapp-contact .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            background: var(--dark-card);
            border: 2px solid var(--border-color);
            border-radius: 10px;
            color: var(--light-text);
            font-size: 0.95rem;
            transition: var(--transition-smooth);
            font-family: var(--font-primary);
        }
        
        .whatsapp-contact .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .whatsapp-contact .form-group input:focus,
        .whatsapp-contact .form-group select:focus,
        .whatsapp-contact .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(123, 47, 255, 0.1);
        }
        
        .whatsapp-contact .form-group label {
            position: absolute;
            top: 14px;
            left: 18px;
            color: var(--gray-text);
            font-size: 0.95rem;
            transition: var(--transition-smooth);
            pointer-events: none;
            background: var(--dark-card);
            padding: 0 5px;
        }
        
        .whatsapp-contact .form-group select + label {
            display: none;
        }
        
        .whatsapp-contact .form-group input:focus + label,
        .whatsapp-contact .form-group input:not(:placeholder-shown) + label,
        .whatsapp-contact .form-group textarea:focus + label,
        .whatsapp-contact .form-group textarea:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 0.8rem;
            color: var(--primary-color);
        }
        
        .whatsapp-contact button[type="submit"] {
            width: 100%;
            padding: 15px 30px;
            background: var(--gradient-primary);
            border: none;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition-smooth);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .whatsapp-contact button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(123, 47, 255, 0.3);
        }
        
        /* Responsividade para a seção de contato */
        @media (max-width: 968px) {
            .whatsapp-contact .contact-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero modern-hero">
        <div class="hero-container px-4 md:px-8">
            <div class="hero-content">
                <div class="hero-badge" data-aos="fade-up">
                    <i class="fab fa-whatsapp"></i>
                    <span>Automação WhatsApp Empresarial</span>
                </div>
                
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">
                    Transforme seu
                    <span class="gradient-text">Atendimento</span>
                    com Messenger Pro
                </h1>
                
                <p class="hero-description" data-aos="fade-up" data-aos-delay="400">
                    Atendimento 24/7, direcionamento inteligente e conversões automáticas. 
                    A solução completa para empresas que querem escalar sem perder qualidade.
                </p>
                
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="600">
                    <div class="stat-item">
                        <div class="stat-number">85%</div>
                        <div class="stat-label">Menos tempo de resposta</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">94%</div>
                        <div class="stat-label">satisfação dos clientes</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">60%</div>
                        <div class="stat-label">Mais conversões</div>
                    </div>
                </div>
                
                <div class="hero-actions" data-aos="fade-up" data-aos-delay="800">
                    <a href="#demo" class="cta-primary">
                        <span>Testar grátis Agora</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="cta-secondary">
                        <i class="fab fa-whatsapp"></i>
                        <span>Falar com Especialista</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="iphone-15-mockup">
                    <div class="iphone-15-frame">
                        <div class="dynamic-island">
                            <div class="island-content">
                                <div class="call-indicator">
                                    <div class="call-dot"></div>
                                    <span class="call-duration">Online</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="screen-content" style="background: #0a0a0a;">
                            <div class="status-bar-iphone">
                                <div class="status-left">
                                    <span class="time">14:35</span>
                                </div>
                                <div class="status-right">
                                    <div class="signal-strength">
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                    </div>
                                    <i class="fas fa-wifi signal-icon"></i>
                                    <div class="battery-indicator">
                                        <div class="battery-level"></div>
                                    </div>
                                    <span class="battery-percent">87%</span>
                                </div>
                            </div>
                            
                            <!-- WhatsApp Interface -->
                            <div style="flex: 1; display: flex; flex-direction: column; height: calc(100% - 50px);">
                                <!-- WhatsApp Header -->
                                <div style="background: #1f2c33; padding: 12px 15px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #2a3942;">
                                    <div style="display: flex; align-items: center; gap: 12px; flex: 1;">
                                        <i class="fas fa-arrow-left" style="color: #8696a0; font-size: 18px;"></i>
                                        <div style="width: 38px; height: 38px; background: linear-gradient(135deg, #25D366, #128C7E); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                            <i class="fas fa-building" style="color: #fff; font-size: 18px;"></i>
                                        </div>
                                        <div style="flex: 1; min-width: 0;">
                                            <h3 style="color: #e9edef; font-size: 16px; font-weight: 500; margin: 0; line-height: 1.3;">Sintrix</h3>
                                            <p style="color: #8696a0; font-size: 13px; margin: 0; line-height: 1.2;">
                                                <i class="fas fa-circle" style="font-size: 6px; color: #25D366; margin-right: 3px;"></i>online
                                            </p>
                                        </div>
                                    </div>
                                    <div style="display: flex; gap: 20px;">
                                        <i class="fas fa-video" style="color: #8696a0; font-size: 20px;"></i>
                                        <i class="fas fa-phone" style="color: #8696a0; font-size: 20px;"></i>
                                        <i class="fas fa-ellipsis-v" style="color: #8696a0; font-size: 20px;"></i>
                                    </div>
                                </div>
                                
                                <!-- Chat Messages Area -->
                                <div style="flex: 1; padding: 15px; background: #0a0a0a; overflow-y: auto; display: flex; flex-direction: column; gap: 10px;">
                                    <!-- Bot Message -->
                                    <div style="display: flex; justify-content: flex-start;">
                                        <div style="background: #1f2c33; padding: 8px 12px; border-radius: 8px; max-width: 75%; position: relative;">
                                            <p style="color: #e9edef; font-size: 14px; margin: 0 0 4px 0; line-height: 1.4;">
                                                👋 Olá! Como posso ajudar você hoje?
                                            </p>
                                            <span style="color: #8696a0; font-size: 11px; float: right; margin-top: 2px;">14:30</span>
                                        </div>
                                    </div>
                                    
                                    <!-- User Message -->
                                    <div style="display: flex; justify-content: flex-end;">
                                        <div style="background: #005c4b; padding: 8px 12px; border-radius: 8px; max-width: 75%; position: relative;">
                                            <p style="color: #e9edef; font-size: 14px; margin: 0 0 4px 0; line-height: 1.4;">
                                                Preciso de informações sobre o bot
                                            </p>
                                            <span style="color: #d1d7db; font-size: 11px; float: right; margin-top: 2px;">14:31</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Bot Response -->
                                    <div style="display: flex; justify-content: flex-start;">
                                        <div style="background: #1f2c33; padding: 8px 12px; border-radius: 8px; max-width: 75%; position: relative;">
                                            <p style="color: #e9edef; font-size: 14px; margin: 0 0 4px 0; line-height: 1.4;">
                                                🤖 Perfeito! Nosso Messenger Pro automatiza seu atendimento 24/7
                                            </p>
                                            <span style="color: #8696a0; font-size: 11px; float: right; margin-top: 2px;">14:31</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Typing Indicator -->
                                <div style="padding: 8px 15px; background: #0a0a0a; border-top: 1px solid #1f2c33; display: flex; align-items: center; gap: 8px;">
                                    <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #25D366, #128C7E); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <i class="fas fa-robot" style="color: #fff; font-size: 16px;"></i>
                                    </div>
                                    <span style="color: #8696a0; font-size: 13px;">Digitando</span>
                                    <div style="display: flex; gap: 3px;">
                                        <span style="width: 4px; height: 4px; background: #8696a0; border-radius: 50%; animation: typingDot 1.4s infinite;"></span>
                                        <span style="width: 4px; height: 4px; background: #8696a0; border-radius: 50%; animation: typingDot 1.4s infinite; animation-delay: 0.2s;"></span>
                                        <span style="width: 4px; height: 4px; background: #8696a0; border-radius: 50%; animation: typingDot 1.4s infinite; animation-delay: 0.4s;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="home-indicator-iphone"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="hero-background">
            <div class="bg-gradient"></div>
            <div class="floating-elements">
                <div class="float-element elem-1"></div>
                <div class="float-element elem-2"></div>
                <div class="float-element elem-3"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section whatsapp-features">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Recursos avançados</span>
                <h2 class="section-title">Automação Completa para WhatsApp</h2>
                <p class="section-description">
                    Nosso bot oferece recursos completos para automatizar e otimizar 
                    todo o atendimento via WhatsApp da sua empresa.
                </p>
            </div>
            
            <div class="whatsapp-features-grid">
                <div class="feature-card automation-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon whatsapp-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Mensagens Automatizadas</h3>
                    <p>Crie fluxos de conversa inteligentes com respostas automáticas 
                    personalizadas para diferentes tipos de consulta.</p>
                    <div class="feature-details">
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Respostas instantâneas</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Fluxos personalizáveis</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Menu interativo</span>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card routing-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon whatsapp-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Direcionamento Inteligente</h3>
                    <p>Direcione conversas automaticamente para o departamento correto 
                    baseado no tipo de solicitação do cliente.</p>
                    <div class="feature-details">
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Roteamento automático</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Múltiplos departamentos</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Horário de funcionamento</span>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card management-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon whatsapp-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Gestão Centralizada</h3>
                    <p>Painel administrativo completo para gerenciar todas as conversas, 
                    funcionários e departamentos em um só lugar.</p>
                    <div class="feature-details">
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Dashboard completo</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Gestão de usuários</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Histórico de conversas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Capabilities Section -->
    <section class="capabilities-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Capacidades avançadas</span>
                <h2 class="section-title">Mais que um Bot, uma Solução Completa</h2>
                <p class="section-description">
                    Conheça todos os recursos que tornam nosso Messenger Pro a ferramenta 
                    ideal para automatizar e otimizar o atendimento da sua empresa.
                </p>
            </div>
            
            <!-- Capacidades Principais -->
            <div class="main-capabilities" data-aos="fade-up" data-aos-delay="200">
                <div class="capability-main-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="main-card-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Automação Inteligente</h3>
                    <p>Sistema completo de automação com respostas inteligentes e direcionamento automático para departamentos específicos.</p>
                    <div class="main-card-features">
                        <span><i class="fas fa-check"></i> Menu numerado</span>
                        <span><i class="fas fa-check"></i> Respostas automáticas</span>
                        <span><i class="fas fa-check"></i> Direcionamento inteligente</span>
                    </div>
                </div>
                
                <div class="capability-main-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="main-card-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Gestão Completa</h3>
                    <p>Painel administrativo robusto para gerenciar equipes, departamentos e monitorar todas as conversas em tempo real.</p>
                    <div class="main-card-features">
                        <span><i class="fas fa-check"></i> Dashboard completo</span>
                        <span><i class="fas fa-check"></i> Gestão de usuários</span>
                        <span><i class="fas fa-check"></i> Controle de permissões</span>
                    </div>
                </div>
                
                <div class="capability-main-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="main-card-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Comunicação Avançada</h3>
                    <p>Recursos completos de comunicação incluindo grupos internos, envio de documentos e histórico detalhado de conversas.</p>
                    <div class="main-card-features">
                        <span><i class="fas fa-check"></i> Grupos internos</span>
                        <span><i class="fas fa-check"></i> Envio de arquivos</span>
                        <span><i class="fas fa-check"></i> Histórico completo</span>
                    </div>
                </div>
            </div>
            
            <!-- Recursos Adicionais -->
            <div class="additional-capabilities">
                <h3 class="additional-title" data-aos="fade-up">Recursos Adicionais</h3>
                <div class="additional-grid" data-aos="fade-up" data-aos-delay="300">
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Disponibilidade 24/7</h4>
                            <p>Bot ativo 24 horas por dia para atendimento inicial e direcionamento de conversas</p>
                        </div>
                    </div>
                    
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Acesso Web e Móvel</h4>
                            <p>Painel acessível via navegador web em desktop e dispositivos móveis</p>
                        </div>
                    </div>
                    
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Segurança Avançada</h4>
                            <p>Controle total de acesso com diferentes níveis de permissão por usuário</p>
                        </div>
                    </div>
                    
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Monitoramento</h4>
                            <p>Acompanhe performance da equipe e métricas de atendimento em tempo real</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Estatísticas -->
            <div class="capabilities-metrics" data-aos="fade-up" data-aos-delay="400">
                <div class="metric-item">
                    <div class="metric-number">∞</div>
                    <div class="metric-label">Conversas Simultâneas</div>
                </div>
                <div class="metric-item">
                    <div class="metric-number">100+</div>
                    <div class="metric-label">Departamentos</div>
                </div>
                <div class="metric-item">
                    <div class="metric-number">24/7</div>
                    <div class="metric-label">Disponibilidade</div>
                </div>
                <div class="metric-item">
                    <div class="metric-number">99.9%</div>
                    <div class="metric-label">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section id="demo" class="demo-section whatsapp-demo">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Bot em Ação</span>
                <h2 class="section-title">Veja Como Funciona na Prática</h2>
                <p class="section-description">
                    Explore os mockups interativos e entenda como nosso Messenger Pro
                    revoluciona o atendimento da sua empresa.
                </p>
            </div>
            
            <!-- Fluxo de Funcionamento -->
            <div class="workflow-demo" data-aos="fade-up" data-aos-delay="400">
                <div class="workflow-steps">
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="100">
                        <div class="step-number">1</div>
                        <div class="step-icon"><i class="fas fa-mobile-alt"></i></div>
                        <h4>Cliente Inicia Conversa</h4>
                        <p>Cliente manda mensagem pelo WhatsApp</p>
                    </div>
                    
                    <div class="workflow-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="200">
                        <div class="step-number">2</div>
                        <div class="step-icon"><i class="fas fa-robot"></i></div>
                        <h4>Bot Responde</h4>
                        <p>Menu automatizado com opções numeradas</p>
                    </div>
                    
                    <div class="workflow-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="300">
                        <div class="step-number">3</div>
                        <div class="step-icon"><i class="fas fa-route"></i></div>
                        <h4>Direcionamento</h4>
                        <p>Sistema direciona para departamento correto</p>
                    </div>
                    
                    <div class="workflow-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="400">
                        <div class="step-number">4</div>
                        <div class="step-icon"><i class="fas fa-user-tie"></i></div>
                        <h4>Atendimento Humano</h4>
                        <p>Funcionário assume a conversa</p>
                    </div>
                </div>
            </div>
            
            <!-- Demonstração Interativa -->
            <div class="interactive-demo" data-aos="fade-up" data-aos-delay="500">
                <h3 class="demo-title">Teste o Bot Agora</h3>
                <p>Digite um número na conversa e veja como o bot responde:</p>
                
                <div class="phone-simulator">
                    <div class="phone-frame">
                        <div class="phone-screen">
                            <div class="whatsapp-header">
                                <div class="header-info">
                                    <div class="company-avatar">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="company-details">
                                        <span class="company-name">Sintrix Tecnologia</span>
                                        <span class="online-indicator">
                                            <i class="fas fa-circle"></i> online
                                        </span>
                                    </div>
                                </div>
                                <div class="header-actions">
                                    <i class="fas fa-phone"></i>
                                    <i class="fas fa-video"></i>
                                    <i class="fas fa-ellipsis-v"></i>
                                </div>
                            </div>
                            
                            <div class="chat-area" id="chatArea">
                                <div class="bot-message">
                                    <div class="message-bubble bot menu-message">
                                        <span><strong>MENU DE ATENDIMENTO</strong><br><br>
                                            <strong>1</strong> 💰 Vendas e Orçamentos 📊<br>
                                            <strong>2</strong> 🔧 Suporte Técnico 🛠️<br>
                                            <strong>3</strong> 📋 Informações Gerais 📄<br>
                                            <strong>4</strong> 👨‍💼 Falar com Atendente 🗣️<br><br>
                                            <strong>Digite o número da opção!</strong></span>
                                        <div class="msg-time">14:30</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="input-area">
                                <div class="message-input-container">
                                    <input type="text" id="messageInput" placeholder="Digite um número (1-4)..." maxlength="1">
                                    <button id="sendButton" class="send-btn">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Instruções -->
                    <div class="demo-instructions">
                        <h4>Como Testar:</h4>
                        <div class="instruction-steps">
                            <div class="instruction-item">
                                <span class="step-number">1</span>
                                <span>Digite 1, 2, 3 ou 4 no campo de mensagem</span>
                            </div>
                            <div class="instruction-item">
                                <span class="step-number">2</span>
                                <span>Clique no botão enviar ou pressione Enter</span>
                            </div>
                            <div class="instruction-item">
                                <span class="step-number">3</span>
                                <span>Veja a resposta automatizada do bot</span>
                            </div>
                        </div>
                        
                        <div class="response-preview">
                            <h5>Respostas do Bot:</h5>
                            <div class="response-list">
                                <div class="response-item">
                                    <strong>1:</strong> "Perfeito! Vou conectá-lo com nossa equipe de Vendas. Um consultor entrará em contato em breve para elaborar sua proposta personalizada."
                                </div>
                                <div class="response-item">
                                    <strong>2:</strong> "Entendido! Redirecionando para nossa equipe de Suporte técnico. Um especialista analisará sua solicitação e retornará rapidamente."
                                </div>
                                <div class="response-item">
                                    <strong>3:</strong> "Ótimo! Nossa equipe de Atendimento compartilhará todas as Informações que você precisa sobre nossos Serviços e Soluções."
                                </div>
                                <div class="response-item">
                                    <strong>4:</strong> "Conectando você com um de nossos atendentes. Em instantes um colaborador assumirá esta conversa para ajudá-lo pessoalmente."
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="benefits-modern">
        <div class="container px-4 md:px-8">
            <div class="section-intro" data-aos="fade-up">
                <p class="section-subtitle">Resultados comprovados que transformam seu atendimento</p>
                <h2 class="section-title">
                    Por que escolher nosso 
                    <span class="gradient-text">Messenger Pro?</span>
                </h2>
            </div>
            
            <div class="benefits-flow">
                <div class="benefit-row" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-visual">
                        <div class="benefit-icon-large">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h3>Resposta Instantânea</h3>
                        <p>Seus clientes nunca mais ficarão esperando. Atendimento 24/7 com respostas imediatas que aumentam a satisfação em <strong>94%</strong> e reduzem o tempo de resposta em <strong>85%</strong>.</p>
                        <div class="benefit-highlights">
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Disponível 24 horas
                            </span>
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Zero tempo de espera
                            </span>
                        </div>
                    </div>
                </div>

                <div class="benefit-row reverse" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-visual">
                        <div class="benefit-icon-large">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h3>Direcionamento Inteligente</h3>
                        <p>Cada cliente é direcionado automaticamente para o departamento certo. Vendas, Suporte, Informações - tudo organizado para garantir o melhor atendimento possível.</p>
                        <div class="benefit-highlights">
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Departamentos ilimitados
                            </span>
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Filtragem automática
                            </span>
                        </div>
                    </div>
                </div>

                <div class="benefit-row" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-visual">
                        <div class="benefit-icon-large">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h3>Mais conversões</h3>
                        <p>Transforme visitantes em clientes com <strong>60% mais conversões</strong>. Capture leads automaticamente e nunca perca uma oportunidade de negócio novamente.</p>
                        <div class="benefit-highlights">
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Captura automática de leads
                            </span>
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Follow-up inteligente
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section 
    <section class="pricing-modern">
        <div class="container px-4 md:px-8">
            <div class="section-intro" data-aos="fade-up">
                <p class="section-subtitle">Escolha o plano ideal e comece hoje mesmo</p>
                 <h2 class="section-title">
                    Planos que se adaptam ao 
                    <span class="gradient-text">seu negócio</span>
                </h2>
            </div>
            
            <div class="pricing-simple" data-aos="fade-up" data-aos-delay="200">
                <div class="plan-item">
                    <div class="plan-header">
                        <h3>Starter</h3>
                        <div class="plan-price">
                            <span class="price-value">R$ 97</span>
                            <span class="price-period">/mês</span>
                        </div>
                        <p>Até 1.000 mensagens</p>
                    </div>
                    <div class="plan-features">
                        <span>✓ Bot automatizado</span>
                        <span>✓ 3 departamentos</span>
                        <span>✓ 5 usuários</span>
                        <span>✓ Suporte email</span>
                    </div>
                    <a href="#contact" class="plan-cta btn-hover-effect">
                        <span>Começar Agora</span>
                    </a>
                </div>

                <div class="plan-item featured">
                    <div class="popular-badge">Mais Popular</div>
                    <div class="plan-header">
                        <h3>Business</h3>
                        <div class="plan-price">
                            <span class="price-value">R$ 197</span>
                            <span class="price-period">/mês</span>
                        </div>
                        <p>Até 5.000 mensagens</p>
                    </div>
                    <div class="plan-features">
                        <span>✓ Tudo do Starter</span>
                        <span>✓ 10 departamentos</span>
                        <span>✓ 20 usuários</span>
                        <span>✓ Suporte prioritário</span>
                        <span>✓ Dashboard avançado</span>
                    </div>
                    <a href="#contact" class="plan-cta primary btn-hover-effect">
                        <span>Começar Agora</span>
                    </a>
                </div>

                <div class="plan-item">
                    <div class="plan-header">
                        <h3>Enterprise</h3>
                        <div class="plan-price">
                            <span class="price-value">R$ 397</span>
                            <span class="price-period">/mês</span>
                        </div>
                        <p>Mensagens ilimitadas</p>
                    </div>
                    <div class="plan-features">
                        <span>✓ Recursos ilimitados</span>
                        <span>✓ API personalizada</span>
                        <span>✓ Suporte 24/7</span>
                        <span>✓ Gerente dedicado</span>
                    </div>
                    <a href="#contact" class="plan-cta btn-hover-effect">
                        <span>Falar com Vendas</span>
                    </a>
                </div>
            </div>

            <div class="pricing-footer" data-aos="fade-up" data-aos-delay="400">
                <p>✓ 7 dias grátis • ✓ Cancele quando quiser • ✓ Suporte brasileiro • ✓ Dados seguros</p>
            </div>
        </div>
    </section>-->

    <!-- Contact Section -->
    <section id="contact" class="contact-section whatsapp-contact">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title">Automatize seu WhatsApp Hoje</h2>
                <p class="section-description">
                    Nossa equipe está pronta para implementar a automação perfeita 
                    para o atendimento da sua empresa.
                </p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-details">
                            <h4>WhatsApp Direto</h4>
                            <p>(11) 97377-4109</p>
                            <p>Fale conosco pelo Próprio WhatsApp</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Demo Personalizada</h4>
                            <p>Veja o bot funcionando</p>
                            <p>com os dados da sua empresa</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Implementação Rápida</h4>
                            <p>Bot funcionando em até 48 horas</p>
                            <p>após aprovação do projeto</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form" data-aos="fade-left">
                    <form id="whatsappForm">
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
                            <input type="text" id="company" name="company">
                            <label for="company">Empresa (Opcional)</label>
                        </div>
                        
                        <div class="form-group">
                            <select id="volume" name="volume" required>
                                <option value="">Volume de mensagens mensal</option>
                                <option value="0-1000">Até 1.000 mensagens</option>
                                <option value="1000-5000">1.000 a 5.000 mensagens</option>
                                <option value="5000-10000">5.000 a 10.000 mensagens</option>
                                <option value="10000+">Mais de 10.000 mensagens</option>
                            </select>
                            <label for="volume">Volume de Mensagens</label>
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

    <?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/cookie-banner.php'; ?>
<?php include __DIR__ . '/../includes/analytics-tracking.php'; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../public/js/form-handler.js"></script>
    <script src="../public/js/script.js"></script>
    <script>
        // Funcionalidade do Simulador de WhatsApp
        document.addEventListener('DOMContentLoaded', function() {
            const messageInput = document.getElementById('messageInput');
            const sendButton = document.getElementById('sendButton');
            const chatArea = document.getElementById('chatArea');

            // Respostas automáticas do bot
            const botResponses = {
                '1': {
                    title: 'Vendas e Orçamentos',
                    message: `Perfeito! Vou conectá-lo com nossa equipe de Vendas. Um consultor entrará em contato em breve para elaborar sua proposta personalizada.`
                },
                '2': {
                    title: '🔧 Suporte técnico',
                    message: `🔧 *Entendido!* Redirecionando para suporte técnico.

+-------------------------+
🔧 ⚙️ *COMO PODEMOS AJUDAR:* 🔧
+-------------------------+

⚙️ Problemas de configuração
🔧 Dúvidas sobre funcionalidades
⚙️ Relatório de bugs
🔧 Otimização do sistema

⚙️ *Suporte 24/7* disponível
🔧 *Status:* Analisando solicitação...

🔧🔧🔧🔧🔧🔧🔧🔧🔧🔧🔧🔧🔧🔧🔧
Digite *0* para voltar ao menu principal`
                },
                '3': {
                    title: 'ℹ️ Informações Gerais',
                    message: `ℹ️ *Ótimo!* Compartilharei todas as Informações.

+-------------------------+
📋 ℹ️ *Informações DISPONÍVEIS:* 📋
+-------------------------+

ℹ️ Funcionalidades do Messenger Pro
📋 Processo de implementação
ℹ️ Cases de sucesso
📋 Comparativo de planos

ℹ️ *Especialista designado*
📋 *Status:* Preparando material...

ℹ️📋ℹ️📋ℹ️📋ℹ️📋ℹ️📋ℹ️📋ℹ️📋
Digite *0* para voltar ao menu principal`
                },
                '4': {
                    title: 'Atendente Humano',
                    message: `Conectando você com um de nossos atendentes. Em instantes um colaborador assumirá esta conversa para ajudá-lo pessoalmente.`
                }
            };

            // Correção imediata das respostas
            botResponses['1'].message = 'Perfeito! Vou conectá-lo com nossa equipe de Vendas. Um consultor entrará em contato em breve para elaborar sua proposta personalizada.\n\nDigite *0* para voltar ao menu principal.';
            
            botResponses['2'].message = 'Entendido! Redirecionando para nossa equipe de Suporte Técnico. Um especialista analisará sua solicitação e retornará rapidamente.\n\nDigite *0* para voltar ao menu principal.';
            botResponses['2'].title = 'Suporte Técnico';
            
            botResponses['3'].message = 'Ótimo! Nossa equipe de Atendimento compartilhará todas as Informações que você precisa sobre nossos Serviços e Soluções.\n\nDigite *0* para voltar ao menu principal.';
            botResponses['3'].title = 'Informações Gerais';

            botResponses['4'].message = 'Conectando você com um de nossos atendentes. Em instantes um colaborador assumirá esta conversa para ajudá-lo pessoalmente.\n\nDigite *0* para voltar ao menu principal.';

            // Função para adicionar mensagem ao chat
            function addMessage(text, isUser = false, isTyping = false) {
                const messageDiv = document.createElement('div');
                messageDiv.className = isUser ? 'user-message' : 'bot-message';
                
                if (isTyping) {
                    messageDiv.innerHTML = `
                        <div class="message-bubble bot">
                            <div class="typing-animation">
                                <div class="typing-dot"></div>
                                <div class="typing-dot"></div>
                                <div class="typing-dot"></div>
                            </div>
                        </div>
                    `;
                } else {
                    const bubbleClass = isUser ? 'message-bubble user' : 'message-bubble bot';
                    const timeNow = new Date().toLocaleTimeString('pt-BR', { 
                        hour: '2-digit', 
                        minute: '2-digit' 
                    });
                    
                    const messageClass = !isUser && (text.includes('MENU DE ATENDIMENTO') || text.includes('Digite o número')) ? 'menu-message' : '';
                    
                    messageDiv.innerHTML = `
                        <div class="${bubbleClass} ${messageClass}">
                            ${text}
                            <div class="msg-time">${timeNow}</div>
                        </div>
                    `;
                }
                
                chatArea.appendChild(messageDiv);
                chatArea.scrollTop = chatArea.scrollHeight;
                
                return messageDiv;
            }

            // Função para enviar mensagem
            function sendMessage() {
                const message = messageInput.value.trim();
                if (!message) return;

                // Adicionar mensagem do usuário
                addMessage(message, true);
                messageInput.value = '';
                sendButton.disabled = true;

                // Simular digitação do bot
                const typingMessage = addMessage('', false, true);

                setTimeout(() => {
                    // Remover indicador de digitação
                    typingMessage.remove();

                    // Resposta do bot
                    const response = botResponses[message];
                    if (response) {
                        addMessage(response.message, false);
                    } else if (message === '0') {
                        addMessage(`<strong>MENU DE ATENDIMENTO</strong><br><br><strong>1</strong> 💰 Vendas e Orçamentos 💰<br><strong>2</strong> 🔧 Suporte Técnico 🔧<br><strong>3</strong> ℹ️ Informações Gerais ℹ️<br><strong>4</strong> 👨‍💼 Falar com Atendente 👨‍💼<br><br><strong>Digite o número da opção!</strong>`, false);
                    } else {
                        addMessage(`<strong>Opção não reconhecida</strong><br><br>Digite apenas números de 1 a 4:<br><br><strong>1</strong> 💰 Vendas e Orçamentos<br><strong>2</strong> 🔧 Suporte Técnico<br><strong>3</strong> ℹ️ Informações Gerais<br><strong>4</strong> 👨‍💼 Falar com Atendente<br><br>Digite <strong>0</strong> para menu completo`, false);
                    }

                    sendButton.disabled = false;
                }, 1800);
            }

            // Event listeners
            sendButton.addEventListener('click', sendMessage);
            
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });

            messageInput.addEventListener('input', function() {
                const value = this.value.trim();
                sendButton.disabled = !value;
                
                // Limitar a apenas números e 0
                if (value && !/^[0-4]$/.test(value)) {
                    this.value = '';
                    sendButton.disabled = true;
                }
            });

            // configuração inicial
            sendButton.disabled = true;
        });

        // Scripts existentes
        document.addEventListener('DOMContentLoaded', function() {
            // Demo interativo original mantido para compatibilidade
            const demoButtons = document.querySelectorAll('.demo-option-btn');
            const demoMessages = document.getElementById('demoMessages');
            
            if (demoButtons.length > 0) {
                demoButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const message = this.getAttribute('data-message');
                        const response = this.getAttribute('data-response');
                        
                        // Adiciona mensagem do usuário
                        addDemoMessage(message, 'user');
                        
                        // Adiciona resposta do bot após 1 segundo
                        setTimeout(() => {
                            addDemoMessage(response, 'bot');
                        }, 1000);
                    });
                });
            }
            
            function addDemoMessage(text, sender) {
                if (!demoMessages) return;
                
                const messageDiv = document.createElement('div');
                messageDiv.className = `demo-message ${sender}`;
                
                if (sender === 'user') {
                    messageDiv.innerHTML = `
                        <div class="message-bubble">
                            <span>${text}</span>
                            <div class="message-time">${getCurrentTime()}</div>
                        </div>
                    `;
                } else {
                    messageDiv.innerHTML = `
                        <div class="message-avatar">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="message-bubble">
                            <span>${text}</span>
                            <div class="message-time">${getCurrentTime()}</div>
                        </div>
                    `;
                }
                
                demoMessages.appendChild(messageDiv);
                demoMessages.scrollTop = demoMessages.scrollHeight;
            }
            
            function getCurrentTime() {
                const now = new Date();
                return now.getHours().toString().padStart(2, '0') + ':' + 
                       now.getMinutes().toString().padStart(2, '0');
            }
            
            // Animação dos mockups
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Observa os mockups
            document.querySelectorAll('.mockup-container').forEach(mockup => {
                mockup.style.opacity = '0';
                mockup.style.transform = 'translateY(30px)';
                mockup.style.transition = 'all 0.6s ease';
                observer.observe(mockup);
            });
            
            // Anima as conversas no painel admin
            const conversations = document.querySelectorAll('.conversation-item');
            conversations.forEach((conv, index) => {
                setTimeout(() => {
                    conv.style.opacity = '1';
                    conv.style.transform = 'translateX(0)';
                }, index * 200);
            });
            
            // Simula atualizações em tempo real no painel
            setInterval(() => {
                const statNumbers = document.querySelectorAll('.stat-number');
                statNumbers.forEach(stat => {
                    if (stat.textContent.includes('247')) {
                        const current = parseInt(stat.textContent);
                        stat.textContent = (current + Math.floor(Math.random() * 3)).toString();
                    }
                });
            }, 10000);
        });

        // Animações AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Corrigir respostas do bot executando imediatamente
        setTimeout(function() {
            if (typeof botResponses !== 'undefined') {
                // Sobrescrever respostas com versões simples
                botResponses['1'].message = 'Perfeito! Vou conectá-lo com nossa equipe de Vendas. Um consultor entrará em contato em breve para elaborar sua proposta personalizada.\n\nDigite *0* para voltar ao menu principal.';
                
                botResponses['2'].message = 'Entendido! Redirecionando para nossa equipe de Suporte Técnico. Um especialista analisará sua solicitação e retornará rapidamente.\n\nDigite *0* para voltar ao menu principal.';
                botResponses['2'].title = 'Suporte Técnico';
                
                botResponses['3'].message = 'Ótimo! Nossa equipe de Atendimento compartilhará todas as Informações que você precisa sobre nossos Serviços e Soluções.\n\nDigite *0* para voltar ao menu principal.';
                botResponses['3'].title = 'Informações Gerais';
                
                botResponses['4'].message = 'Conectando você com um de nossos atendentes. Em instantes um colaborador assumirá esta conversa para ajudá-lo pessoalmente.\n\nDigite *0* para voltar ao menu principal.';
                
                console.log('Bot responses corrigidas!');
            }
        }, 100);

        // Toggle de preços mensal/anual
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('pricingToggle');
            const amounts = document.querySelectorAll('.amount');
            const toggleLabels = document.querySelectorAll('.toggle-label');
            
            if (toggle) {
                toggle.addEventListener('change', function() {
                    const isYearly = this.checked;
                    
                    amounts.forEach(amount => {
                        const monthlyPrice = amount.getAttribute('data-monthly');
                        const yearlyPrice = amount.getAttribute('data-yearly');
                        
                        if (monthlyPrice && yearlyPrice) {
                            amount.textContent = isYearly ? yearlyPrice : monthlyPrice;
                        }
                    });
                    
                    // Atualizar estilo dos labels
                    toggleLabels.forEach((label, index) => {
                        if (index === 0) { // Mensal
                            label.style.color = isYearly ? 'var(--gray-text)' : 'var(--primary-color)';
                        } else if (index === 1) { // Anual
                            label.style.color = isYearly ? 'var(--primary-color)' : 'var(--gray-text)';
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>











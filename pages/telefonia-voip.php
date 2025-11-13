<?php
// Carrega configurações principais (caminhos e helper includeFile)
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefonia VoIP Sintrix - Sistema Proprietário | Sintrix Technology</title>
    <meta name="description" content="Sistema VoIP proprietário Sintrix com equipamentos em comodato, economia de 70% e suporte 24/7. Modernize a comunicação da sua empresa.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../public/assets/favicon.svg">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/animations.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <link rel="stylesheet" href="../public/css/tailwind-utilities.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Proteger estilos do header contra sobrescritas -->
    <style>
        /* Garantir que os estilos do navbar não sejam afetados pelos mockups */
        nav.navbar {
            font-size: 1rem !important;
        }
        nav.navbar .nav-link {
            font-size: 1rem !important;
        }
        nav.navbar .logo-text {
            font-size: 1.5rem !important;
        }
        nav.navbar .nav-menu {
            font-size: 1rem !important;
        }
    </style>
    
    <!-- Custom VoIP Mockup Styles -->
    <style>
        /* Escopar todos os estilos dos mockups para evitar conflitos com o header */
        .voip-mockups .cisco-phone-mockup,
        .demo-section .cisco-phone-mockup {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        
        .cisco-6921 {
            width: 280px;
            background: linear-gradient(145deg, #f8f9fa, #e9ecef);
            border-radius: 8px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1), 0 5px 15px rgba(0,0,0,0.07);
            padding: 1rem;
            font-family: 'Inter', sans-serif;
        }
        
        .cisco-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0.5rem;
        }
        
        .cisco-logo {
            font-weight: bold;
            font-size: 0.9rem;
            color: #1f2937;
            letter-spacing: 1px;
        }
        
        .model-number {
            font-size: 0.8rem;
            color: #6b7280;
            font-weight: 500;
        }
        
        .cisco-display {
            background: #1f2937;
            border-radius: 6px;
            padding: 1rem;
            margin-bottom: 1rem;
            color: white;
            min-height: 120px;
        }
        
        .cisco-display .status-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.7rem;
            margin-bottom: 0.8rem;
            border-bottom: 1px solid #374151;
            padding-bottom: 0.5rem;
        }
        
        .left-status {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }
        
        .right-status {
            display: flex;
            gap: 0.3rem;
            color: #10b981;
        }
        
        .user-info {
            text-align: center;
            margin-bottom: 0.8rem;
        }
        
        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
        }
        
        .extension {
            font-size: 0.7rem;
            color: #9ca3af;
            margin-bottom: 0.3rem;
        }
        
        .status-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.3rem;
            font-size: 0.7rem;
        }
        
        .status-dot.available {
            width: 6px;
            height: 6px;
            background: #10b981;
            border-radius: 50%;
        }
        
        .quick-actions {
            display: flex;
            justify-content: space-around;
            margin-bottom: 0.5rem;
        }
        
        .action-item {
            text-align: center;
            font-size: 0.6rem;
        }
        
        .action-key {
            display: block;
            font-weight: 600;
            color: #60a5fa;
        }
        
        .bottom-menu {
            border-top: 1px solid #374151;
            padding-top: 0.5rem;
            text-align: center;
            font-size: 0.6rem;
            color: #9ca3af;
        }
        
        .function-keys {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .func-key {
            flex: 1;
            background: #374151;
            border: none;
            border-radius: 4px;
            padding: 0.8rem 0.5rem;
            color: white;
            font-size: 0.7rem;
            position: relative;
        }
        
        .key-light {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            margin: 0 auto 0.3rem;
        }
        
        .nav-cluster {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .nav-ring {
            position: relative;
            width: 80px;
            height: 80px;
        }
        
        .nav-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #3b82f6;
            color: white;
            border: none;
            font-size: 0.7rem;
            font-weight: 600;
        }
        
        .nav-up, .nav-down, .nav-left, .nav-right {
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #6b7280;
            color: white;
            border: none;
            font-size: 0.7rem;
        }
        
        .nav-up { top: 0; left: 50%; transform: translateX(-50%); }
        .nav-down { bottom: 0; left: 50%; transform: translateX(-50%); }
        .nav-left { left: 0; top: 50%; transform: translateY(-50%); }
        .nav-right { right: 0; top: 50%; transform: translateY(-50%); }
        
        .softkeys {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.3rem;
            margin-bottom: 1rem;
        }
        
        .softkey {
            background: #e5e7eb;
            border: none;
            border-radius: 4px;
            padding: 0.5rem;
            font-size: 0.7rem;
            color: #374151;
            font-weight: 500;
        }
        
        .control-buttons {
            margin-bottom: 1rem;
        }
        
        .button-row {
            display: flex;
            justify-content: space-around;
        }
        
        .ctrl-btn {
            background: #f3f4f6;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 0.6rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.3rem;
            font-size: 0.6rem;
            color: #374151;
        }
        
        .cisco-keypad {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.4rem;
            margin-bottom: 1rem;
        }
        
        .cisco-key {
            background: #f9fafb;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 0.8rem 0.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .cisco-key:hover {
            background: #f3f4f6;
            transform: translateY(-1px);
        }
        
        .key-number {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f2937;
            line-height: 1;
        }
        
        .key-letters {
            font-size: 0.6rem;
            color: #6b7280;
            margin-top: 0.1rem;
        }
        
        .call-control {
            display: flex;
            justify-content: space-around;
            margin-bottom: 1rem;
        }
        
        .call-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .call-btn.answer {
            background: #10b981;
            color: white;
        }
        
        .call-btn.hangup {
            background: #ef4444;
            color: white;
        }
        
        .volume-controls, .audio-controls {
            display: flex;
            justify-content: space-around;
            margin-bottom: 1rem;
        }
        
        .vol-btn, .audio-btn {
            background: #f3f4f6;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            padding: 0.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.2rem;
            font-size: 0.6rem;
            color: #374151;
        }
        
        .phone-base {
            background: #374151;
            border-radius: 6px;
            padding: 0.5rem;
            display: flex;
            justify-content: space-around;
            color: white;
            font-size: 0.6rem;
        }
        
        /* iPhone Mockup Styles */
        .smartphone-mockup {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        
        .iphone-frame {
            width: 300px;
            height: 600px;
            background: #000;
            border-radius: 25px;
            padding: 8px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            position: relative;
        }
        
        .iphone-frame::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 25px;
            background: #000;
            border-radius: 15px;
            z-index: 10;
        }
        
        .iphone-frame .status-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 1rem 0.5rem;
            background: #fff;
            font-size: 0.8rem;
            font-weight: 600;
            color: #000;
            border-radius: 17px 17px 0 0;
        }
        
        .status-left {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        
        .signal-bars {
            display: flex;
            gap: 2px;
            align-items: end;
        }
        
        .signal-bars .bar {
            width: 3px;
            background: #000;
            border-radius: 1px;
        }
        
        .signal-bars .bar:nth-child(1) { height: 4px; }
        .signal-bars .bar:nth-child(2) { height: 6px; }
        .signal-bars .bar:nth-child(3) { height: 8px; }
        .signal-bars .bar:nth-child(4) { height: 10px; }
        
        .battery-icon {
            width: 20px;
            height: 10px;
            border: 1px solid #000;
            border-radius: 2px;
            position: relative;
        }
        
        .battery-icon::after {
            content: '';
            position: absolute;
            right: -3px;
            top: 2px;
            width: 2px;
            height: 4px;
            background: #000;
            border-radius: 0 1px 1px 0;
        }
        
        .battery-level {
            width: 87%;
            height: 100%;
            background: #10b981;
            border-radius: 1px;
        }
        
        .app-screen {
            background: #f8f9fa;
            height: calc(100% - 45px);
            border-radius: 0 0 17px 17px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .app-header {
            background: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .app-title {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: #1f2937;
        }
        
        .app-title i {
            color: #3b82f6;
        }
        
        .connection-banner {
            background: linear-gradient(90deg, #10b981, #059669);
            color: white;
            padding: 0.8rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.8rem;
        }
        
        .connection-status {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        
        .connection-status i {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .user-profile-card {
            background: #fff;
            margin: 1rem;
            border-radius: 12px;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        
        .profile-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-info {
            flex: 1;
        }
        
        .profile-info h3 {
            margin: 0 0 0.2rem 0;
            font-size: 1rem;
            font-weight: 600;
            color: #1f2937;
        }
        
        .profile-info p {
            margin: 0 0 0.3rem 0;
            font-size: 0.8rem;
            color: #6b7280;
        }
        
        .profile-status {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            font-size: 0.7rem;
            color: #10b981;
        }
        
        .quick-actions-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            padding: 1rem;
        }
        
        .quick-action-btn {
            background: #fff;
            border: none;
            border-radius: 12px;
            padding: 1rem 0.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.7rem;
            color: #374151;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            transition: all 0.2s;
        }
        
        .quick-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .action-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }
        
        .action-icon.dial { background: #dbeafe; color: #3b82f6; }
        .action-icon.contacts { background: #f3e8ff; color: #8b5cf6; }
        .action-icon.conference { background: #fef3c7; color: #f59e0b; }
        .action-icon.voicemail { background: #fecaca; color: #ef4444; }
        
        .recent-calls-section {
            flex: 1;
            padding: 1rem;
            background: #fff;
            margin: 0 1rem 1rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .section-header h4 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            color: #1f2937;
        }
        
        .see-all-btn {
            background: none;
            border: none;
            color: #3b82f6;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .call-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.8rem 0;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .call-item:last-child {
            border-bottom: none;
        }
        
        .call-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
        }
        
        .call-icon.incoming { background: #dcfce7; color: #16a34a; }
        .call-icon.outgoing { background: #dbeafe; color: #3b82f6; }
        .call-icon.missed { background: #fecaca; color: #dc2626; }
        
        .call-info {
            flex: 1;
        }
        
        .contact-name {
            font-weight: 500;
            color: #1f2937;
            font-size: 0.9rem;
            margin-bottom: 0.2rem;
        }
        
        .call-details {
            font-size: 0.7rem;
            color: #6b7280;
        }
        
        .callback-btn {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #f3f4f6;
            border: none;
            color: #3b82f6;
            font-size: 0.8rem;
        }
        
        .bottom-nav {
            background: #fff;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-around;
            padding: 0.8rem 0.5rem 1.5rem;
        }
        
        .nav-item {
            background: none;
            border: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.3rem;
            font-size: 0.6rem;
            color: #6b7280;
        }
        
        .nav-item.active {
            color: #3b82f6;
        }
        
        .nav-item i {
            font-size: 1rem;
        }
        
        .home-indicator {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: #fff;
            border-radius: 2px;
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
                    <i class="fas fa-phone-alt"></i>
                    <span>Telefonia VoIP Proprietária Sintrix</span>
                </div>
                
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">
                    Telefonia VoIP 
                    <span class="gradient-text">100% Sintrix</span>
                    com Equipamentos em Comodato
                </h1>
                
                <p class="hero-description" data-aos="fade-up" data-aos-delay="400">
                    Sistema proprietário desenvolvido pela Sintrix. Economia de até 70%, equipamentos 
                    em comodato e suporte técnico 24/7. A modernização da comunicação empresarial.
                </p>
                
                <div class="hero-stats" data-aos="fade-up" data-aos-delay="600">
                    <div class="stat-item">
                        <div class="stat-number">70%</div>
                        <div class="stat-label">Economia de custos</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Suporte técnico</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Em comodato</div>
                    </div>
                </div>
                
                <div class="hero-actions" data-aos="fade-up" data-aos-delay="800">
                    <a href="#demo" class="cta-primary">
                        <span>Ver Demonstração</span>
                        <i class="fas fa-play"></i>
                    </a>
                    <a href="#contact" class="cta-secondary">
                        <i class="fas fa-comments"></i>
                        <span>Falar com Especialista</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="iphone-15-mockup">
                    <!-- iPhone 15 Frame -->
                    <div class="iphone-15-frame">
                        <!-- Dynamic Island -->
                        <div class="dynamic-island">
                            <div class="island-content">
                                <div class="call-indicator">
                                    <div class="call-dot"></div>
                                    <span class="call-duration">02:35</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Screen Content -->
                        <div class="screen-content">
                            <!-- Status Bar -->
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
                            
                            <!-- VoIP App Interface -->
                            <div class="voip-app-container">
                                <!-- App Header -->
                                <div class="app-header-voip">
                                    <div class="app-title-section">
                                        <div class="app-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="title-info">
                                            <h3>Sintrix VoIP</h3>
                                            <p>Sistema Empresarial</p>
                                        </div>
                                    </div>
                                    <div class="connection-status-badge">
                                        <div class="status-dot online"></div>
                                        <span>Online</span>
                                    </div>
                                </div>
                                
                                <!-- Active Call Interface -->
                                <div class="active-call-interface">
                                    <div class="call-background">
                                        <div class="blur-overlay"></div>
                                    </div>
                                    
                                    <div class="caller-profile">
                                        <div class="caller-avatar-large">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxjaXJjbGUgY3g9IjUwIiBjeT0iNTAiIHI9IjUwIiBmaWxsPSIjM0I4MkY2Ii8+CjxzdmcgeD0iMjUiIHk9IjI1IiB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgZmlsbD0ibm9uZSI+CjxwYXRoIGQ9Ik0yNSAyNUMzMC41MjI4IDI1IDM1IDIwLjUyMjggMzUgMTVDMzUgOS40NzcyIDMwLjUyMjggNSAyNSA1QzE5LjQ3NzIgNSAxNSA5LjQ3NzIgMTUgMTVDMTUgMjAuNTIyOCAxOS40NzcyIDI1IDI1IDI1WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTI1IDMwQzE2IDMwIDEwIDM2IDEwIDQ1VjQ1SDQwVjQ1QzQwIDM2IDM0IDMwIDI1IDMwWiIgZmlsbD0id2hpdGUiLz4KPHN2Zz4KPC9zdmc+" alt="Caller Avatar" />
                                            <div class="avatar-ring"></div>
                                        </div>
                                        
                                        <div class="caller-details">
                                            <h2 class="caller-name">João Silva</h2>
                                            <p class="caller-subtitle">Departamento Comercial</p>
                                            <p class="caller-number">(11) 98765-4321</p>
                                            <div class="call-info-badges">
                                                <span class="info-badge">
                                                    <i class="fas fa-building"></i>
                                                    Ramal 1001
                                                </span>
                                                <span class="info-badge quality">
                                                    <i class="fas fa-signal"></i>
                                                    HD Quality
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Call Timer Display -->
                                    <div class="call-timer-display">
                                        <div class="timer-container">
                                            <span class="timer-text">02:35</span>
                                            <span class="timer-label">Em andamento</span>
                                        </div>
                                        <div class="call-quality-indicator">
                                            <div class="quality-bars">
                                                <div class="bar active"></div>
                                                <div class="bar active"></div>
                                                <div class="bar active"></div>
                                                <div class="bar active"></div>
                                            </div>
                                            <span class="quality-text">Excelente</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Call Control Grid -->
                                    <div class="call-controls-grid">
                                        <button class="control-btn-modern mute-btn active">
                                            <div class="btn-icon">
                                                <i class="fas fa-microphone-slash"></i>
                                            </div>
                                            <span class="btn-label">Mudo</span>
                                        </button>
                                        
                                        <button class="control-btn-modern keypad-btn">
                                            <div class="btn-icon">
                                                <i class="fas fa-th"></i>
                                            </div>
                                            <span class="btn-label">Teclado</span>
                                        </button>
                                        
                                        <button class="control-btn-modern speaker-btn">
                                            <div class="btn-icon">
                                                <i class="fas fa-volume-up"></i>
                                            </div>
                                            <span class="btn-label">Alto-falante</span>
                                        </button>
                                        
                                        <button class="control-btn-modern add-btn">
                                            <div class="btn-icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <span class="btn-label">Adicionar</span>
                                        </button>
                                        
                                        <button class="control-btn-modern hold-btn">
                                            <div class="btn-icon">
                                                <i class="fas fa-pause"></i>
                                            </div>
                                            <span class="btn-label">Pausar</span>
                                        </button>
                                        
                                        <button class="control-btn-modern contacts-btn">
                                            <div class="btn-icon">
                                                <i class="fas fa-address-book"></i>
                                            </div>
                                            <span class="btn-label">Contatos</span>
                                        </button>
                                    </div>
                                    
                                    <!-- End Call Button -->
                                    <div class="end-call-section">
                                        <button class="end-call-btn">
                                            <i class="fas fa-phone-slash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Home Indicator -->
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
                <h2 class="section-title">Solução VoIP Completa para Empresas</h2>
                <p class="section-description">
                    Nossa solução oferece recursos completos para revolucionar 
                    toda a comunicação corporativa da sua empresa.
                </p>
            </div>
            
            <div class="whatsapp-features-grid">
                <div class="feature-card automation-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon whatsapp-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Equipamentos em Comodato</h3>
                    <p>Todos os equipamentos fornecidos sem custo inicial. Telefones IP, 
                    adaptadores e infraestrutura completa em comodato.</p>
                    <div class="feature-details">
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Zero investimento inicial</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Manutenção inclusa</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Tecnologia sempre atualizada</span>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card routing-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon whatsapp-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Economia de até 70%</h3>
                    <p>Reduza drasticamente os custos mensais de telefonia com 
                    tarifas competitivas e sem gastos com hardware.</p>
                    <div class="feature-details">
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Tarifas reduzidas nacionalmente</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Sem custos de manutenção</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Planos flexíveis por uso</span>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card management-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon whatsapp-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Suporte Técnico 24/7</h3>
                    <p>Equipe especializada disponível todos os dias. Atendimento 
                    em português com técnicos certificados em VoIP.</p>
                    <div class="feature-details">
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Equipe técnica brasileira</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Resposta em menos de 2min</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-check"></i>
                            <span>Suporte remoto incluído</span>
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
                <span class="section-subtitle">Recursos Avançados</span>
                <h2 class="section-title">Mais que VoIP, uma Revolução na Comunicação</h2>
                <p class="section-description">
                    Descubra todos os recursos que fazem do nosso sistema VoIP a escolha 
                    ideal para modernizar a comunicação da sua empresa.
                </p>
            </div>
            
            <!-- Recursos Principais -->
            <div class="main-capabilities" data-aos="fade-up" data-aos-delay="200">
                <div class="capability-main-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="main-card-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Aplicativo Mobile</h3>
                    <p>App para Android e iOS que transforma seu celular no ramal da empresa. Faça e receba chamadas profissionais em qualquer lugar.</p>
                    <div class="main-card-features">
                        <span><i class="fas fa-check"></i> Android e iOS</span>
                        <span><i class="fas fa-check"></i> Ramal no celular</span>
                        <span><i class="fas fa-check"></i> Qualidade HD</span>
                    </div>
                </div>
                
                <div class="capability-main-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="main-card-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Personalização Total</h3>
                    <p>Sistema desenvolvido pela Sintrix permite customizações específicas para sua empresa. Recursos únicos adaptados ao seu negócio.</p>
                    <div class="main-card-features">
                        <span><i class="fas fa-check"></i> Desenvolvimento próprio</span>
                        <span><i class="fas fa-check"></i> Customizações exclusivas</span>
                        <span><i class="fas fa-check"></i> Integrações personalizadas</span>
                    </div>
                </div>
                
                <div class="capability-main-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="main-card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>seguranÃ§aurança Máxima</h3>
                    <p>Comunicação totalmente criptografada, backup automático e redundância de servidores para máxima disponibilidade e seguranÃ§aurança.</p>
                    <div class="main-card-features">
                        <span><i class="fas fa-check"></i> Criptografia end-to-end</span>
                        <span><i class="fas fa-check"></i> Backup automático</span>
                        <span><i class="fas fa-check"></i> Servidores redundantes</span>
                    </div>
                </div>
            </div>
            
            <!-- Recursos Adicionais -->
            <div class="additional-capabilities">
                <h3 class="additional-title" data-aos="fade-up">Recursos Inclusos</h3>
                <div class="additional-grid" data-aos="fade-up" data-aos-delay="300">
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Conferência até 50 Pessoas</h4>
                            <p>Realize reuniões por voz com até 50 participantes simultâneos</p>
                        </div>
                    </div>
                    
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-voicemail"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Caixa Postal Inteligente</h4>
                            <p>Mensagens enviadas por email com transcrição automática</p>
                        </div>
                    </div>
                    
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Escalabilidade Total</h4>
                            <p>Adicione ou remova ramais conforme sua necessidade</p>
                        </div>
                    </div>
                    
                    <div class="additional-item">
                        <div class="additional-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="additional-content">
                            <h4>Relatórios Detalhados</h4>
                            <p>Análise completa de chamadas, custos e performance</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Estatísticas -->
            <div class="capabilities-metrics" data-aos="fade-up" data-aos-delay="400">
                <div class="metric-item">
                    <div class="metric-number">∞</div>
                    <div class="metric-label">Ramais Simultâneos</div>
                </div>
                <div class="metric-item">
                    <div class="metric-number">48h</div>
                    <div class="metric-label">Instalação Rápida</div>
                </div>
                <div class="metric-item">
                    <div class="metric-number">HD</div>
                    <div class="metric-label">Qualidade de Áudio</div>
                </div>
                <div class="metric-item">
                    <div class="metric-number">99.9%</div>
                    <div class="metric-label">Uptime Garantido</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section -->
    <section id="demo" class="demo-section voip-demo">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Sistema em Ação</span>
                <h2 class="section-title">Veja Como Funciona na Prática</h2>
                <p class="section-description">
                    Explore os mockups interativos e entenda como nosso sistema VoIP 
                    revoluciona a comunicação da sua empresa.
                </p>
            </div>
            
            <!-- Fluxo de Funcionamento -->
            <div class="workflow-demo" data-aos="fade-up" data-aos-delay="400">
                <div class="workflow-steps">
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="100">
                        <div class="step-number">1</div>
                        <div class="step-icon"><i class="fas fa-phone-alt"></i></div>
                        <h4>Chamada Recebida</h4>
                        <p>Sistema recebe a chamada externa</p>
                    </div>
                    
                    <div class="workflow-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="200">
                        <div class="step-number">2</div>
                        <div class="step-icon"><i class="fas fa-route"></i></div>
                        <h4>Roteamento Inteligente</h4>
                        <p>Direcionamento automático por departamento</p>
                    </div>
                    
                    <div class="workflow-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="300">
                        <div class="step-number">3</div>
                        <div class="step-icon"><i class="fas fa-user-tie"></i></div>
                        <h4>Atendimento</h4>
                        <p>Funcionário recebe no ramal ou app</p>
                    </div>
                    
                    <div class="workflow-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    
                    <div class="workflow-step" data-aos="zoom-in" data-aos-delay="400">
                        <div class="step-number">4</div>
                        <div class="step-icon"><i class="fas fa-chart-line"></i></div>
                        <h4>Relatório</h4>
                        <p>Sistema registra dados para análise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="benefits-modern">
        <div class="container px-4 md:px-8">
            <div class="section-intro" data-aos="fade-up">
                <p class="section-subtitle">Resultados comprovados que transformam sua comunicação</p>
                <h2 class="section-title">
                    Por que escolher nosso 
                    <span class="gradient-text">VoIP Sintrix?</span>
                </h2>
            </div>
            
            <div class="benefits-flow">
                <div class="benefit-row" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-visual">
                        <div class="benefit-icon-large">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h3>Economia Real de 70%</h3>
                        <p>Reduza drasticamente os custos de telefonia. Com equipamentos em comodato e tarifas competitivas, você economiza até <strong>70%</strong> comparado aos sistemas tradicionais.</p>
                        <div class="benefit-highlights">
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Zero investimento inicial
                            </span>
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Tarifas reduzidas
                            </span>
                        </div>
                    </div>
                </div>

                <div class="benefit-row reverse" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-visual">
                        <div class="benefit-icon-large">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h3>Implementação em 48 Horas</h3>
                        <p>Sistema instalado e funcionando rapidamente, sem interrupção das atividades. Nossa equipe especializada cuida de toda a migração.</p>
                        <div class="benefit-highlights">
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Instalação expressa
                            </span>
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Sem interrupções
                            </span>
                        </div>
                    </div>
                </div>

                <div class="benefit-row" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-visual">
                        <div class="benefit-icon-large">
                            <i class="fas fa-headset"></i>
                        </div>
                    </div>
                    <div class="benefit-content">
                        <h3>Suporte Técnico 24/7</h3>
                        <p>Equipe técnica brasileira especializada disponível <strong>24 horas por dia</strong>. Garantia de funcionamento contínuo e suporte imediato quando precisar.</p>
                        <div class="benefit-highlights">
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Suporte brasileiro
                            </span>
                            <span class="highlight-item">
                                <i class="fas fa-check"></i>
                                Especialistas VoIP
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-modern">
        <div class="container px-4 md:px-8">
            <div class="section-intro" data-aos="fade-up">
                <p class="section-subtitle">Planos flexíveis para empresas de todos os tamanhos</p>
                <h2 class="section-title">
                    Invista no futuro da 
                    <span class="gradient-text">comunicação</span>
                </h2>
            </div>
            
            <div class="pricing-simple" data-aos="fade-up" data-aos-delay="200">
                <div class="plan-item">
                    <div class="plan-header">
                        <h3>Essencial</h3>
                        <div class="plan-price">
                            <span class="price-value">R$ 45</span>
                            <span class="price-period">/ramal/mês</span>
                        </div>
                        <p>Até 10 ramais</p>
                    </div>
                    <div class="plan-features">
                        <span>✓ Equipamentos em comodato</span>
                        <span>✓ Suporte técnico</span>
                        <span>✓ App mobile incluso</span>
                        <span>✓ Relatórios básicos</span>
                    </div>
                    <a href="#contact" class="plan-cta">Começar Agora</a>
                </div>

                <div class="plan-item featured">
                    <div class="popular-badge">Mais Popular</div>
                    <div class="plan-header">
                        <h3>Empresarial</h3>
                        <div class="plan-price">
                            <span class="price-value">R$ 39</span>
                            <span class="price-period">/ramal/mês</span>
                        </div>
                        <p>11 a 50 ramais</p>
                    </div>
                    <div class="plan-features">
                        <span>✓ Tudo do Essencial</span>
                        <span>✓ Conferência até 50 pessoas</span>
                        <span>✓ Caixa postal inteligente</span>
                        <span>✓ Relatórios avançados</span>
                        <span>✓ Suporte prioritário</span>
                    </div>
                    <a href="#contact" class="plan-cta primary">Começar Agora</a>
                </div>

                <div class="plan-item">
                    <div class="plan-header">
                        <h3>Corporativo</h3>
                        <div class="plan-price">
                            <span class="price-value">R$ 32</span>
                            <span class="price-period">/ramal/mês</span>
                        </div>
                        <p>Mais de 50 ramais</p>
                    </div>
                    <div class="plan-features">
                        <span>✓ Recursos ilimitados</span>
                        <span>✓ Customizações exclusivas</span>
                        <span>✓ Integração personalizada</span>
                        <span>✓ Gerente dedicado</span>
                    </div>
                    <a href="#contact" class="plan-cta">Falar com Vendas</a>
                </div>
            </div>

            <div class="pricing-footer" data-aos="fade-up" data-aos-delay="400">
                <p>✓ Equipamentos em comodato • ✓ Instalação gratuita • ✓ Suporte 24/7 • ✓ Sem fidelidade</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section voip-contact">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title">Modernize sua Telefonia Hoje</h2>
                <p class="section-description">
                    Nossa equipe está pronta para implementar o sistema VoIP perfeito 
                    para a comunicação da sua empresa.
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
                            <p>(11) 99999-9999<br>
                            Ligue e teste nosso VoIP</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Demo ao Vivo</h4>
                            <p>Demonstração personalizada<br>
                            com sua estrutura atual</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Instalação Rápida</h4>
                            <p>Sistema funcionando<br>
                            em até 48 horas</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form" data-aos="fade-left">
                    <form id="voipForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" required>
                            <label for="name">Nome Completo</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email Empresarial</label>
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
                            <select id="ramais" name="ramais" required>
                                <option value="">Quantos ramais você precisa?</option>
                                <option value="1-10">1 a 10 ramais</option>
                                <option value="11-25">11 a 25 ramais</option>
                                <option value="26-50">26 a 50 ramais</option>
                                <option value="50+">Mais de 50 ramais</option>
                            </select>
                            <label for="ramais">Número de Ramais</label>
                        </div>
                        
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" 
                                placeholder="Conte-nos sobre sua estrutura atual de telefonia e necessidades..."></textarea>
                            <label for="message">Mensagem</label>
                        </div>
                        
                        <button type="submit" class="btn-primary voip-btn btn-hover-effect">
                            <span>Solicitar Demonstração</span>
                            <i class="fas fa-phone-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../public/js/script.js"></script>
    <script>
        // Animações AOS
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Formulário de contato
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('voipForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Aqui você pode adicionar a lógica de envio do formulário
                    alert('Obrigado pelo interesse! Em breve nossa equipe entrará em contato para agendar uma demonstração personalizada do nosso sistema VoIP.');
                });
            }
        });
    </script>
</body>
</html>










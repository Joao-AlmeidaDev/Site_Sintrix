<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cloud Data - Armazenamento em Nuvem | Sintrix Technology</title>
    <meta name="description" content="Tenha seu Próprio cloud data 100% privado e seguranÃ§auro. Armazenamento em nuvem exclusivo da Sintrix sem dependéncia de terceiros. Acesse de qualquer lugar!">
    <meta name="keywords" content="cloud data, armazenamento nuvem, backup, dados seguranÃ§auros, cloud privado">
    
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
    
    <style>
        /* Forçar centralização do hero */
        .cloud-hero .container {
            max-width: 100% !important;
            padding: 0 20px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            position: relative !important;
        }
        
        /* Garantir centralização do wrapper interno */
        .cloud-hero .container > div {
            max-width: 1200px !important;
            margin: 0 auto !important;
            text-align: center !important;
            width: 100% !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            position: relative !important;
        }
        
        /* Garantir centralização do mockup */
        .cloud-hero .container > div > div:last-child {
            max-width: 1000px !important;
            margin: 0 auto !important;
            width: 100% !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            position: relative !important;
            left: 0 !important;
            right: 0 !important;
        }
        
        .cloud-hero {
            background: linear-gradient(135deg, #0a0a0f 0%, #1a1a2e 50%, #0f3460 100%);
            position: relative;
            padding: 120px 0 100px;
            overflow: hidden;
        }
        
        .cloud-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(0, 212, 255, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(138, 43, 226, 0.15) 0%, transparent 50%);
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.1); }
        }
        
        .cloud-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .cloud-particle {
            position: absolute;
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.2), rgba(138, 43, 226, 0.2));
            border-radius: 50%;
            animation: cloudFloat 12s ease-in-out infinite;
            filter: blur(2px);
        }
        
        .cloud-particle:nth-child(1) {
            width: 60px;
            height: 60px;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .cloud-particle:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 50%;
            right: 10%;
            animation-delay: 3s;
        }
        
        .cloud-particle:nth-child(3) {
            width: 40px;
            height: 40px;
            bottom: 20%;
            left: 25%;
            animation-delay: 6s;
        }
        
        .cloud-particle:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 70%;
            right: 30%;
            animation-delay: 9s;
        }
        
        @keyframes cloudFloat {
            0%, 100% { transform: translateY(0) translateX(0) scale(1); opacity: 0.3; }
            33% { transform: translateY(-30px) translateX(20px) scale(1.2); opacity: 0.6; }
            66% { transform: translateY(-15px) translateX(-20px) scale(0.9); opacity: 0.4; }
        }
        
        /* Centralização forçada do mockup */
        .cloud-hero-wrapper {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            width: 100% !important;
        }
        
        .cloud-mockup {
            position: relative;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto !important;
            left: 0 !important;
            right: 0 !important;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 
                0 30px 90px rgba(0, 0, 0, 0.5),
                0 15px 40px rgba(138, 43, 226, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.02) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            animation: floatCentered 6s ease-in-out infinite;
            transform-style: preserve-3d;
            display: block !important;
        }
        
        @keyframes floatCentered {
            0% { 
                transform: translateY(0) translateX(0) rotateY(0deg) scale(1);
            }
            25% {
                transform: translateY(-15px) translateX(0) rotateY(2deg) scale(1.01);
            }
            50% { 
                transform: translateY(-20px) translateX(0) rotateY(0deg) scale(1.02);
            }
            75% {
                transform: translateY(-15px) translateX(0) rotateY(-2deg) scale(1.01);
            }
            100% {
                transform: translateY(0) translateX(0) rotateY(0deg) scale(1);
            }
        }
        
        .cloud-mockup:hover {
            animation-play-state: paused;
        }
        
        .cloud-mockup::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #00d4ff, #8a2be2, #00d4ff);
            background-size: 200% 100%;
            animation: gradientSlide 3s ease infinite;
            z-index: 10;
        }
        
        @keyframes gradientSlide {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        /* Adicionar efeito de brilho pulsante */
        .cloud-mockup::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.4), rgba(138, 43, 226, 0.4));
            border-radius: 18px;
            opacity: 0;
            z-index: -1;
            animation: glowPulse 3s ease-in-out infinite;
        }
        
        @keyframes glowPulse {
            0%, 100% { opacity: 0; }
            50% { opacity: 0.6; }
        }

        .mockup-glow {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(138, 43, 226, 0.15) 0%, transparent 70%);
            animation: rotate-glow 20s linear infinite;
            pointer-events: none;
            z-index: -1;
        }

        @keyframes rotate-glow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .cloud-interface {
            background: linear-gradient(135deg, #1e1e3f 0%, #1a1a2e 50%, #141428 100%);
            padding: 0;
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }
        
        .cloud-interface::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent 48%, rgba(0, 212, 255, 0.03) 50%, transparent 52%);
            background-size: 20px 20px;
            pointer-events: none;
        }
        
        /* Garantir que todos os elementos internos respeitem a largura */
        .cloud-mockup * {
            box-sizing: border-box !important;
        }
        
        .cloud-mockup,
        .cloud-interface,
        .cloud-toolbar,
        .windows-ribbon,
        .cloud-nav-bar,
        .file-list-header,
        .file-list,
        .windows-status-bar {
            max-width: 100% !important;
            overflow-x: hidden !important;
        }
        
        /* Remover qualquer deslocamento horizontal */
        .cloud-mockup,
        .mockup-glow,
        .cloud-interface {
            transform: translateX(0) !important;
        }
        
        /* Centralização adicional para o wrapper do mockup */
        [data-aos="fade-up"][data-aos-delay="200"] {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            width: 100% !important;
        }
        
        .cloud-toolbar {
            background: linear-gradient(135deg, rgba(30, 30, 50, 0.98) 0%, rgba(20, 20, 35, 0.98) 100%);
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(138, 43, 226, 0.3);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
        }

        .cloud-status {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            font-size: 0.9rem;
        }

        /* Windows Ribbon Style */
        .windows-ribbon {
            background: linear-gradient(135deg, rgba(240, 240, 240, 0.95) 0%, rgba(230, 230, 230, 0.95) 100%);
            padding: 6px 20px;
            border-bottom: 1px solid rgba(200, 200, 200, 0.3);
        }

        .ribbon-tabs {
            display: flex;
            gap: 2px;
        }

        .ribbon-tab {
            padding: 6px 16px;
            font-size: 0.85rem;
            color: #333;
            cursor: pointer;
            transition: all 0.2s;
            border-radius: 3px 3px 0 0;
        }

        .ribbon-tab.active {
            background: rgba(0, 120, 215, 0.1);
            color: #0078d7;
            font-weight: 500;
        }

        .ribbon-tab:hover:not(.active) {
            background: rgba(0, 0, 0, 0.05);
        }

        /* Windows Navigation Bar */
        .cloud-nav-bar {
            background: rgba(250, 250, 250, 0.95);
            padding: 8px 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid rgba(200, 200, 200, 0.3);
        }

        .nav-controls {
            display: flex;
            gap: 4px;
        }

        .nav-btn {
            width: 28px;
            height: 28px;
            background: transparent;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            color: #333;
            font-size: 0.75rem;
        }

        .nav-btn:hover {
            background: rgba(0, 120, 215, 0.1);
            border-color: #0078d7;
            color: #0078d7;
        }

        .address-bar {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 6px;
            background: white;
            padding: 6px 12px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 3px;
            font-size: 0.85rem;
        }

        .path-text {
            color: #333;
        }

        .path-separator {
            color: #999;
            font-size: 0.75rem;
        }

        .active-path {
            color: #0078d7;
            font-weight: 500;
        }

        .search-box-windows {
            display: flex;
            align-items: center;
            gap: 6px;
            background: white;
            padding: 6px 12px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 3px;
            width: 200px;
        }

        .search-box-windows i {
            color: #999;
            font-size: 0.75rem;
        }

        .search-box-windows input {
            background: transparent;
            border: none;
            color: #333;
            font-size: 0.85rem;
            outline: none;
            width: 100%;
        }

        /* Windows File List Header */
        .file-list-header {
            background: rgba(245, 245, 245, 0.95);
            padding: 8px 20px;
            display: grid;
            grid-template-columns: 30px 32px 2fr 1.2fr 1fr 0.8fr;
            gap: 12px;
            align-items: center;
            border-bottom: 1px solid rgba(200, 200, 200, 0.4);
            font-size: 0.8rem;
            color: #666;
            font-weight: 500;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            overflow: hidden;
        }

        .header-column {
            display: flex;
            align-items: center;
            gap: 4px;
            cursor: pointer;
        }

        .header-column i {
            font-size: 0.7rem;
            color: #0078d7;
        }

        .name-col {
            grid-column: span 1;
        }

        /* Windows Status Bar */
        .windows-status-bar {
            background: rgba(245, 245, 245, 0.95);
            padding: 6px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(200, 200, 200, 0.3);
            font-size: 0.75rem;
            color: #666;
        }

        .status-left {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .separator {
            color: #ccc;
        }

        .storage-indicator {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #0078d7;
        }

        .storage-indicator i {
            font-size: 0.85rem;
        }

        .sync-indicator {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-left: 15px;
            padding: 4px 12px;
            background: rgba(0, 212, 255, 0.1);
            border-radius: 20px;
            font-size: 0.8rem;
            color: #00d4ff;
            border: 1px solid rgba(0, 212, 255, 0.2);
        }

        .sync-indicator i {
            animation: spin 3s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .cloud-buttons {
            display: flex;
            gap: 10px;
        }
        
        .cloud-btn {
            width: 14px;
            height: 14px;
            border-radius: 2px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }
        
        .cloud-btn.close { 
            background: linear-gradient(135deg, #ff5f57 0%, #e81123 100%);
        }
        
        .cloud-btn.close:hover {
            background: #e81123;
            box-shadow: 0 4px 15px rgba(232, 17, 35, 0.6);
            transform: scale(1.1);
        }

        .cloud-btn.minimize { 
            background: linear-gradient(135deg, #ffbd2e 0%, #ffa500 100%); 
        }
        
        .cloud-btn.maximize { 
            background: linear-gradient(135deg, #28ca41 0%, #20a033 100%); 
        }

        .cloud-nav-bar {
            background: rgba(20, 20, 35, 0.5);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .nav-path {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .path-separator {
            color: rgba(255, 255, 255, 0.4);
        }

        .path-item {
            color: var(--primary-color);
            font-weight: 500;
        }

        .cloud-search {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.05);
            padding: 6px 12px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .cloud-search i {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.85rem;
        }

        .cloud-search input {
            background: transparent;
            border: none;
            color: white;
            font-size: 0.85rem;
            outline: none;
            width: 150px;
        }

        .storage-info-bar {
            background: rgba(138, 43, 226, 0.1);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(138, 43, 226, 0.2);
        }

        .storage-usage {
            flex: 1;
            max-width: 400px;
        }

        .usage-bar {
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 6px;
        }

        .usage-fill {
            height: 100%;
            background: linear-gradient(90deg, #00d4ff 0%, #8a2be2 100%);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 212, 255, 0.5);
            animation: pulse-bar 3s ease-in-out infinite;
        }

        @keyframes pulse-bar {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .usage-text {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .quick-actions-bar {
            display: flex;
            gap: 8px;
        }

        .quick-action-btn-small {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .quick-action-btn-small:hover {
            background: rgba(138, 43, 226, 0.2);
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(138, 43, 226, 0.3);
        }
        
        .status-dot {
            width: 8px;
            height: 8px;
            background: #27ca3f;
            border-radius: 50%;
            animation: pulse 2s infinite;
            box-shadow: 0 0 10px #27ca3f;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.3); opacity: 0.7; }
        }
        
        .file-list {
            margin-top: 0;
            padding: 0;
            position: relative;
            z-index: 1;
            background: white;
            max-height: 300px;
            overflow-y: auto;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }
        
        .file-item {
            background: white;
            padding: 8px 20px;
            margin-bottom: 0;
            border-radius: 0;
            display: grid;
            grid-template-columns: 30px 32px 2fr 1.2fr 1fr 0.8fr;
            gap: 12px;
            align-items: center;
            cursor: pointer;
            transition: all 0.15s ease;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: visible;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }
        
        .file-item::before {
            display: none;
        }
        
        .file-item:hover {
            background: rgba(0, 120, 215, 0.08);
            transform: none;
            border-color: rgba(0, 120, 215, 0.1);
            box-shadow: none;
        }

        .file-item:active {
            background: rgba(0, 120, 215, 0.12);
        }

        .file-checkbox {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .file-checkbox input[type="checkbox"] {
            width: 16px;
            height: 16px;
            cursor: pointer;
            accent-color: #0078d7;
        }

        .file-icon-wrapper {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.2s;
            flex-shrink: 0;
            background: transparent;
            box-shadow: none;
        }

        .file-icon-wrapper.folder {
            background: transparent;
            color: #ffd700;
            box-shadow: none;
        }

        .file-icon-wrapper.pdf {
            background: transparent;
            color: #e53935;
            box-shadow: none;
        }

        .file-icon-wrapper.excel {
            background: transparent;
            color: #217346;
            box-shadow: none;
        }

        .file-icon-wrapper.video {
            background: transparent;
            color: #7c4dff;
            box-shadow: none;
        }

        .file-item:hover .file-icon-wrapper {
            transform: none;
        }

        .file-details {
            display: contents;
        }

        .file-name {
            color: #333;
            font-size: 0.85rem;
            font-weight: 400;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        .file-meta {
            display: none;
        }

        .file-date,
        .file-type,
        .file-size {
            color: #666;
            font-size: 0.8rem;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        .file-size {
            font-weight: 400;
            text-align: right;
        }
        
        .file-icon {
            color: var(--primary-color);
            width: 20px;
        }
        
        .pricing-comparison {
            position: relative;
            padding: 0;
            margin: 80px 0 60px;
            overflow: visible;
        }
        
        .pricing-comparison::before {
            display: none;
        }
        
        @keyframes rotateGradient {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .comparison-table {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 60px;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .comparison-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 45px 30px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(135deg, rgba(20, 20, 35, 0.5), rgba(10, 10, 20, 0.3));
            backdrop-filter: blur(30px);
            position: relative;
            z-index: 1;
        }
        
        .service-logo {
            width: 60px;
            height: 60px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border-radius: 14px;
            padding: 12px;
            transition: all 0.3s ease;
        }
        
        .service-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: brightness(0.9) saturate(0.95);
            transition: all 0.3s ease;
        }
        
        .comparison-item:hover .service-logo {
            transform: translateY(-3px);
        }
        
        .comparison-item:hover .service-logo img {
            filter: brightness(1.05) saturate(1.1);
        }
        
        .comparison-item.highlight .service-logo {
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.25), rgba(138, 43, 226, 0.25));
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.5);
            border: 2px solid rgba(0, 212, 255, 0.4);
        }
        
        .comparison-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.02), rgba(138, 43, 226, 0.02));
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 20px;
            z-index: -1;
        }
        
        .comparison-item:hover {
            transform: translateY(-6px);
            border-color: rgba(0, 212, 255, 0.2);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.4);
        }
        
        .comparison-item:hover::before {
            opacity: 1;
        }
        
        .comparison-item.highlight {
            border: 2px solid rgba(0, 212, 255, 0.5);
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.15), rgba(138, 43, 226, 0.12));
            box-shadow: 0 25px 60px rgba(0, 212, 255, 0.35);
            transform: scale(1.04);
            position: relative;
            z-index: 2;
        }
        
        .comparison-item.highlight:hover {
            transform: scale(1.05) translateY(-8px);
            box-shadow: 0 30px 70px rgba(0, 212, 255, 0.45);
            border-color: rgba(0, 212, 255, 0.7);
        }
        
        .comparison-item.highlight::after {
            content: 'RECOMENDADO';
            position: absolute;
            top: 18px;
            right: -8px;
            background: linear-gradient(135deg, #00d4ff, #8a2be2);
            color: white;
            padding: 5px 16px;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 1.2px;
            border-radius: 5px;
            box-shadow: 0 4px 12px rgba(0, 212, 255, 0.3);
        }
        
        .comparison-title {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 18px;
            letter-spacing: -0.3px;
        }
        
        .comparison-price {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--light-text);
            margin-bottom: 6px;
            letter-spacing: -1px;
        }
        
        .comparison-note {
            font-size: 0.82rem;
            color: var(--gray-text);
            margin-bottom: 28px;
            opacity: 0.7;
        }
        
        .security-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 16px;
            margin-top: 80px;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .security-item {
            background: linear-gradient(135deg, rgba(20, 20, 35, 0.4), rgba(10, 10, 20, 0.2));
            padding: 24px 28px;
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.04);
            display: flex;
            align-items: center;
            gap: 18px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(20px);
        }
        
        .security-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.05), transparent);
            transition: left 0.5s ease;
        }
        
        .security-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
            border-color: rgba(0, 212, 255, 0.15);
        }
        
        .security-item:hover::before {
            left: 100%;
        }
        
        .security-icon {
            color: var(--primary-color);
            font-size: 1.65rem;
            min-width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 212, 255, 0.06);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .security-item:hover .security-icon {
            background: rgba(0, 212, 255, 0.12);
            transform: scale(1.05);
        }
        
        .security-text h4 {
            color: var(--light-text);
            margin-bottom: 5px;
        }
        
        .security-text p {
            color: var(--gray-text);
            font-size: 0.9rem;
            margin: 0;
        }
        
        @media (max-width: 768px) {
            .comparison-table {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .cloud-hero {
                padding: 100px 0 60px;
            }
            
            .comparison-item.highlight {
                transform: scale(1);
            }

            .cloud-mockup {
                margin: 40px auto 0 auto !important;
                border-radius: 12px;
                max-width: 100% !important;
            }

            .cloud-hero .container {
                padding: 0 15px !important;
            }

            .cloud-hero .container > div > div:last-child {
                padding: 0 !important;
            }

            .file-list-header {
                grid-template-columns: 30px 32px 1fr 80px;
                font-size: 0.75rem;
                padding: 6px 10px;
            }

            .file-list-header > div:nth-child(4),
            .file-list-header > div:nth-child(5) {
                display: none;
            }

            .file-item {
                grid-template-columns: 30px 32px 1fr 80px;
                padding: 8px 10px;
            }

            .file-date,
            .file-type {
                display: none;
            }

            .file-size {
                text-align: right;
                font-size: 0.7rem;
            }

            .windows-ribbon,
            .nav-controls {
                display: none;
            }

            .cloud-nav-bar {
                flex-wrap: wrap;
                padding: 6px 10px;
            }

            .address-bar {
                order: 2;
                width: 100%;
                margin-top: 8px;
                font-size: 0.75rem;
            }

            .search-box-windows {
                width: 100%;
                order: 3;
                margin-top: 8px;
            }
        }
        
        /* Melhorias nos cards de planos */
        .solution-card {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.8), rgba(30, 41, 59, 0.6));
            border: 1px solid rgba(100, 116, 139, 0.15);
            border-radius: 24px;
            padding: 42px 36px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3), 
                        0 1px 2px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(24px);
            display: flex;
            flex-direction: column;
        }
        
        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 28px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .solution-header {
            margin-bottom: 32px;
            text-align: center;
        }
        
        .solution-header h3 {
            font-size: 1.75rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 24px;
            color: #f1f5f9;
            background: linear-gradient(135deg, #f1f5f9 0%, #cbd5e1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .solution-price {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 6px;
        }
        
        .solution-price .currency {
            font-size: 1.3rem;
            font-weight: 600;
            color: #94a3b8;
        }
        
        .solution-price .amount {
            font-size: 3.5rem;
            font-weight: 800;
            color: #f1f5f9;
            letter-spacing: -2px;
            line-height: 1;
        }
        
        .solution-price .period {
            font-size: 1rem;
            color: #94a3b8;
            font-weight: 500;
        }
        
        .solution-features {
            flex: 1;
            margin-bottom: 32px;
        }
        
        .solution-features .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 12px 0;
            font-size: 0.95rem;
            color: #cbd5e1;
            line-height: 1.6;
            transition: all 0.3s ease;
        }
        
        .solution-features .feature-item:hover {
            color: #f1f5f9;
            transform: translateX(4px);
        }
        
        .solution-features .feature-item i {
            font-size: 0.9rem;
            margin-top: 4px;
            opacity: 1;
            filter: drop-shadow(0 0 6px rgba(16, 185, 129, 0.5));
        }
        
        .solution-cta {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px 32px;
            background: linear-gradient(135deg, rgba(51, 65, 85, 0.8), rgba(30, 41, 59, 0.8));
            border: 1px solid rgba(100, 116, 139, 0.3);
            border-radius: 14px;
            color: #f1f5f9;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.98rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            letter-spacing: -0.2px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        
        .solution-cta:hover {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.2), rgba(14, 165, 233, 0.2));
            border-color: rgba(6, 182, 212, 0.6);
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(6, 182, 212, 0.3),
                        0 0 40px rgba(6, 182, 212, 0.1);
            color: #f1f5f9;
        }
        
        .solution-cta i {
            font-size: 0.95rem;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .solution-cta:hover i {
            transform: translateX(6px);
        }

        /* Estilos adicionais para centralização em telas maiores */
        @media (min-width: 769px) {
            .cloud-mockup {
                max-width: 1000px !important;
                margin: 0 auto !important;
            }

            .cloud-hero .container > div > div:last-child {
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
            }
        }

        @media (min-width: 1024px) {
            .cloud-hero .container {
                max-width: 1400px !important;
            }
        }

        @media (min-width: 1440px) {
            .cloud-hero .container {
                max-width: 1600px !important;
            }
            
            .cloud-mockup {
                max-width: 1100px !important;
            }
        }
        
        .solution-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(6, 182, 212, 0.08), 
                rgba(14, 165, 233, 0.08),
                transparent);
            transition: left 0.8s ease;
        }
        
        .solution-card:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: rgba(6, 182, 212, 0.4);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4),
                        0 0 80px rgba(6, 182, 212, 0.15),
                        inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        .solution-card:hover::before {
            left: 100%;
        }
        
        .solution-card.featured {
            background: linear-gradient(135deg, 
                rgba(6, 78, 59, 0.4), 
                rgba(5, 46, 22, 0.3));
            border: 2px solid rgba(16, 185, 129, 0.5);
            transform: scale(1.05);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.4),
                        0 0 100px rgba(16, 185, 129, 0.2),
                        inset 0 1px 0 rgba(16, 185, 129, 0.2);
        }
        
        .solution-card.featured:hover {
            transform: scale(1.05) translateY(-10px);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5),
                        0 0 120px rgba(16, 185, 129, 0.3),
                        inset 0 1px 0 rgba(16, 185, 129, 0.3);
            border-color: rgba(16, 185, 129, 0.7);
        }
        
        .solution-card.featured .solution-header h3 {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .solution-card.featured .solution-price .amount {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .solution-card.featured .solution-cta {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.25), rgba(5, 150, 105, 0.25));
            border-color: rgba(16, 185, 129, 0.5);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.3);
        }
        
        .solution-card.featured .solution-cta:hover {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.4), rgba(5, 150, 105, 0.4));
            box-shadow: 0 10px 40px rgba(16, 185, 129, 0.5),
                        0 0 60px rgba(16, 185, 129, 0.2);
            border-color: rgba(16, 185, 129, 0.8);
        }
        
        .solution-card.featured::before {
            background: linear-gradient(90deg, 
                transparent, 
                rgba(16, 185, 129, 0.15), 
                rgba(34, 197, 94, 0.15),
                transparent);
        }
        
        .featured-badge {
            position: absolute;
            top: 18px;
            right: -30px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 7px 38px;
            font-size: 0.7rem;
            font-weight: 800;
            letter-spacing: 1.5px;
            transform: rotate(45deg);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.5),
                        0 2px 8px rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }
        
        .hero-features {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin: 30px 0;
        }
        
        .hero-features .feature-item {
            background: rgba(0, 212, 255, 0.1);
            padding: 12px 20px;
            border-radius: 30px;
            border: 1px solid rgba(0, 212, 255, 0.3);
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }
        
        .hero-features .feature-item:hover {
            background: rgba(0, 212, 255, 0.2);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 212, 255, 0.3);
        }
        
        .hero-features .feature-item i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }
        
        /* Melhorias no formulário */
        .contact-form {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.9), rgba(15, 52, 96, 0.6));
            padding: 40px;
            border-radius: 25px;
            border: 1px solid rgba(0, 212, 255, 0.2);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        }
        
        .contact-form .form-group input,
        .contact-form .form-group select,
        .contact-form .form-group textarea {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(0, 212, 255, 0.3);
            color: var(--light-text);
            padding: 15px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .contact-form .form-group input:focus,
        .contact-form .form-group select:focus,
        .contact-form .form-group textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
            background: rgba(0, 0, 0, 0.5);
        }
        
        .contact-item {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.9), rgba(15, 52, 96, 0.6));
            padding: 25px;
            border-radius: 20px;
            border: 1px solid rgba(0, 212, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
        }
        
        .contact-icon {
            background: rgba(0, 212, 255, 0.1);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            font-size: 1.5rem;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="cloud-hero">
        <div class="cloud-particles">
            <div class="cloud-particle"></div>
            <div class="cloud-particle"></div>
            <div class="cloud-particle"></div>
            <div class="cloud-particle"></div>
        </div>
        
        <div class="container">
            <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
                <!-- Conteúdo Centralizado -->
                <div data-aos="fade-up" style="margin-bottom: 60px;">
                    <div style="display: inline-block; background: linear-gradient(90deg, rgba(0, 212, 255, 0.2), rgba(138, 43, 226, 0.2)); padding: 8px 20px; border-radius: 30px; border: 1px solid rgba(0, 212, 255, 0.3); margin-bottom: 25px;">
                        <span style="color: var(--primary-color); font-weight: 600; font-size: 0.9rem;">☁️ Cloud Storage Privado</span>
                    </div>
                    <h1 class="hero-title" style="font-size: 3rem; line-height: 1.2; margin-bottom: 25px;">
                        Seu <span class="gradient-text" style="position: relative; display: inline-block;">Cloud Data Próprio
                            <svg style="position: absolute; bottom: -10px; left: 0; width: 100%;" viewBox="0 0 300 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5,8 Q150,2 295,8" stroke="url(#gradient)" stroke-width="3" fill="none" stroke-linecap="round"/>
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:#00d4ff;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#8a2be2;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span><br>
                        <span style="font-size: 2.2rem;">100% Privado e Seguro</span>
                    </h1>
                    <p class="hero-description" style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 35px; max-width: 800px; margin-left: auto; margin-right: auto;">
                        Tenha total controle sobre seus dados com nossa infraestrutura exclusiva. 
                        Sem dependência de terceiros, sem limitações, sem surpresas.<br>
                        <strong style="color: var(--primary-color); font-size: 1.15rem;">✨ Seus dados ficam apenas com você!</strong>
                    </p>
                    
                    <div class="hero-features" style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center; margin-bottom: 35px;">
                        <div class="feature-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>100% Privado</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-lock"></i>
                            <span>Criptografia Total</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-globe"></i>
                            <span>Acesso de Qualquer Lugar</span>
                        </div>
                    </div>
                    
                    <div class="hero-actions" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <a href="#plans" class="btn-primary" style="padding: 18px 35px; font-size: 1.1rem; box-shadow: 0 10px 30px rgba(0, 212, 255, 0.4);">
                            <i class="fas fa-rocket"></i>
                            <span>Ver Planos</span>
                        </a>
                        <a href="#demo" class="btn-secondary" style="padding: 18px 35px; font-size: 1.1rem;">
                            <i class="fas fa-play"></i>
                            <span>Ver Demonstração</span>
                        </a>
                    </div>
                </div>
                
                <!-- Mockup Centralizado -->
                <div data-aos="fade-up" data-aos-delay="200" style="max-width: 1000px; margin: 0 auto;">
                    <div class="cloud-mockup">
                        <div class="mockup-glow"></div>
                        <div class="cloud-interface">
                            <!-- Windows Title Bar -->
                            <div class="cloud-toolbar">
                                <div class="cloud-status">
                                    <i class="fas fa-folder" style="color: #ffd700; margin-right: 10px; font-size: 1rem;"></i>
                                    <span style="font-weight: 500; font-size: 0.9rem;">Explorador de Arquivos</span>
                                </div>
                                <div class="cloud-buttons">
                                    <div class="cloud-btn minimize"></div>
                                    <div class="cloud-btn maximize"></div>
                                    <div class="cloud-btn close"></div>
                                </div>
                            </div>
                            
                            <!-- Windows Ribbon/Menu Bar -->
                            <div class="windows-ribbon">
                                <div class="ribbon-tabs">
                                    <div class="ribbon-tab active">Arquivo</div>
                                    <div class="ribbon-tab">Início</div>
                                    <div class="ribbon-tab">Compartilhar</div>
                                    <div class="ribbon-tab">Exibir</div>
                                </div>
                            </div>
                            
                            <!-- Windows Navigation Bar -->
                            <div class="cloud-nav-bar">
                                <div class="nav-controls">
                                    <button class="nav-btn"><i class="fas fa-arrow-left"></i></button>
                                    <button class="nav-btn"><i class="fas fa-arrow-right"></i></button>
                                    <button class="nav-btn"><i class="fas fa-arrow-up"></i></button>
                                    <button class="nav-btn"><i class="fas fa-redo"></i></button>
                                </div>
                                <div class="address-bar">
                                    <i class="fas fa-folder" style="color: #ffd700;"></i>
                                    <span class="path-separator">></span>
                                    <span class="path-text">Este Computador</span>
                                    <span class="path-separator">></span>
                                    <span class="path-text">Sintrix Cloud (D:)</span>
                                    <span class="path-separator">></span>
                                    <span class="path-text active-path">Documentos</span>
                                </div>
                                <div class="search-box-windows">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="Pesquisar em Documentos" readonly>
                                </div>
                            </div>
                            
                            <!-- Windows File List Header -->
                            <div class="file-list-header">
                                <div></div> <!-- Espaço para checkbox -->
                                <div></div> <!-- Espaço para ícone -->
                                <div class="header-column name-col">
                                    <span>Nome</span>
                                    <i class="fas fa-sort-down"></i>
                                </div>
                                <div class="header-column">
                                    <span>Data de modificação</span>
                                </div>
                                <div class="header-column">
                                    <span>Tipo</span>
                                </div>
                                <div class="header-column size-col">
                                    <span>Tamanho</span>
                                </div>
                            </div>
                            
                            <!-- Windows File List -->
                            <div class="file-list">
                                <div class="file-item">
                                    <div class="file-checkbox">
                                        <input type="checkbox" readonly>
                                    </div>
                                    <div class="file-icon-wrapper folder">
                                        <i class="fas fa-folder"></i>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-name">Documentos Corporativos</span>
                                    </div>
                                    <div class="file-date">10/11/2025 14:30</div>
                                    <div class="file-type">Pasta de arquivos</div>
                                    <div class="file-size">2.3 GB</div>
                                </div>
                                <div class="file-item">
                                    <div class="file-checkbox">
                                        <input type="checkbox" readonly>
                                    </div>
                                    <div class="file-icon-wrapper pdf">
                                        <i class="fas fa-file-pdf"></i>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-name">Relatório_Anual_2024.pdf</span>
                                    </div>
                                    <div class="file-date">10/11/2025 09:15</div>
                                    <div class="file-type">Documento PDF</div>
                                    <div class="file-size">15.2 MB</div>
                                </div>
                                <div class="file-item">
                                    <div class="file-checkbox">
                                        <input type="checkbox" readonly>
                                    </div>
                                    <div class="file-icon-wrapper excel">
                                        <i class="fas fa-file-excel"></i>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-name">Planilha_Financeira.xlsx</span>
                                    </div>
                                    <div class="file-date">09/11/2025 16:45</div>
                                    <div class="file-type">Planilha Excel</div>
                                    <div class="file-size">8.7 MB</div>
                                </div>
                                <div class="file-item">
                                    <div class="file-checkbox">
                                        <input type="checkbox" readonly>
                                    </div>
                                    <div class="file-icon-wrapper folder">
                                        <i class="fas fa-folder"></i>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-name">Backup_Sistema</span>
                                    </div>
                                    <div class="file-date">07/11/2025 22:00</div>
                                    <div class="file-type">Pasta de arquivos</div>
                                    <div class="file-size">1.8 GB</div>
                                </div>
                                <div class="file-item">
                                    <div class="file-checkbox">
                                        <input type="checkbox" readonly>
                                    </div>
                                    <div class="file-icon-wrapper video">
                                        <i class="fas fa-video"></i>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-name">Apresentacao_Empresa.mp4</span>
                                    </div>
                                    <div class="file-date">03/11/2025 11:20</div>
                                    <div class="file-type">Vídeo MP4</div>
                                    <div class="file-size">245 MB</div>
                                </div>
                            </div>
                            
                            <!-- Windows Status Bar -->
                            <div class="windows-status-bar">
                                <div class="status-left">
                                    <span>5 itens</span>
                                    <span class="separator">|</span>
                                    <span>2 itens selecionados</span>
                                </div>
                                <div class="status-right">
                                    <div class="storage-indicator">
                                        <i class="fas fa-hdd"></i>
                                        <span>45.2 GB livre de 100 GB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section" id="benefits" style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.05), rgba(138, 43, 226, 0.05)); position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: repeating-linear-gradient(0deg, rgba(0, 212, 255, 0.03) 0px, transparent 1px, transparent 2px, rgba(0, 212, 255, 0.03) 3px), repeating-linear-gradient(90deg, rgba(0, 212, 255, 0.03) 0px, transparent 1px, transparent 2px, rgba(0, 212, 255, 0.03) 3px); background-size: 50px 50px; opacity: 0.3;"></div>
        
        <div class="container px-4 md:px-8" style="position: relative; z-index: 2;">
            <div class="section-header" data-aos="fade-up">
                <div style="display: inline-block; background: linear-gradient(90deg, rgba(0, 212, 255, 0.2), rgba(138, 43, 226, 0.2)); padding: 10px 25px; border-radius: 30px; border: 1px solid rgba(0, 212, 255, 0.3); margin-bottom: 25px;">
                    <span style="color: var(--primary-color); font-weight: 600; font-size: 0.9rem;">🚀 Tecnologia Avançada</span>
                </div>
                <h2 class="section-title" style="font-size: 3.2rem; margin-bottom: 20px; font-weight: 700; letter-spacing: -1px; background: linear-gradient(135deg, #ffffff, rgba(255, 255, 255, 0.8)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Por que escolher nosso Cloud Data?</h2>
                <p class="section-description" style="font-size: 1.2rem; max-width: 750px; margin: 0 auto; color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                    Infraestrutura de classe mundial com segurança máxima e performance incomparável para sua empresa
                </p>
            </div>
            
            <!-- Key Benefits Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin-top: 70px; margin-bottom: 70px;">
                <!-- Segurança Total -->
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="100" style="background: linear-gradient(135deg, rgba(26, 26, 46, 0.95), rgba(15, 52, 96, 0.8)); border: 1px solid rgba(0, 212, 255, 0.3); border-radius: 25px; padding: 35px; position: relative; overflow: hidden; transition: all 0.4s ease;">
                    <div style="position: absolute; top: -50%; right: -50%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(0, 212, 255, 0.1), transparent); border-radius: 50%;"></div>
                    <div style="position: relative; z-index: 2;">
                        <div style="background: rgba(0, 212, 255, 0.15); width: 70px; height: 70px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                            <i class="fas fa-shield-alt" style="font-size: 2rem; color: var(--primary-color);"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; color: #ffffff;">Segurança Máxima</h3>
                        <p style="color: rgba(255, 255, 255, 0.75); line-height: 1.7; margin-bottom: 20px;">Criptografia AES-256 de nível militar, autenticação multi-fator e conformidade com LGPD garantem proteção total dos seus dados.</p>
                        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                            <span style="background: rgba(0, 212, 255, 0.2); color: var(--primary-color); padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">AES-256</span>
                            <span style="background: rgba(0, 212, 255, 0.2); color: var(--primary-color); padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">LGPD</span>
                            <span style="background: rgba(0, 212, 255, 0.2); color: var(--primary-color); padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">Zero Trust</span>
                        </div>
                    </div>
                </div>
                
                <!-- Performance -->
                <div class="benefit-card" data-aos="fade-up" data-aos-delay="200" style="background: linear-gradient(135deg, rgba(26, 26, 46, 0.95), rgba(15, 52, 96, 0.8)); border: 1px solid rgba(0, 212, 255, 0.3); border-radius: 25px; padding: 35px; position: relative; overflow: hidden; transition: all 0.4s ease;">
                    <div style="position: absolute; top: -50%; right: -50%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(138, 43, 226, 0.1), transparent); border-radius: 50%;"></div>
                    <div style="position: relative; z-index: 2;">
                        <div style="background: rgba(138, 43, 226, 0.15); width: 70px; height: 70px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                            <i class="fas fa-bolt" style="font-size: 2rem; color: #8a2be2;"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; color: #ffffff;">Ultra Performance</h3>
                        <p style="color: rgba(255, 255, 255, 0.75); line-height: 1.7; margin-bottom: 20px;">SSDs NVMe de última geração e rede de 10Gbps garantem velocidade máxima para upload, download e sincronização.</p>
                        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                            <span style="background: rgba(138, 43, 226, 0.2); color: #8a2be2; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">SSD NVMe</span>
                            <span style="background: rgba(138, 43, 226, 0.2); color: #8a2be2; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">10Gbps</span>
                            <span style="background: rgba(138, 43, 226, 0.2); color: #8a2be2; padding: 6px 12px; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">CDN Global</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Features Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 60px;">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100" style="background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(0, 212, 255, 0.2); border-radius: 20px; padding: 30px; text-align: center; transition: all 0.3s ease;">
                    <div style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.2), rgba(0, 212, 255, 0.1)); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-server" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; color: #ffffff;">Infraestrutura Dedicada</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6;">Servidores exclusivos no Brasil com uptime de 99.9% garantido por SLA.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="150" style="background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(0, 212, 255, 0.2); border-radius: 20px; padding: 30px; text-align: center; transition: all 0.3s ease;">
                    <div style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.2), rgba(0, 212, 255, 0.1)); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-sync-alt" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; color: #ffffff;">Sincronização Inteligente</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6;">Algoritmos avançados que sincronizam apenas as mudanças, economizando banda.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200" style="background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(0, 212, 255, 0.2); border-radius: 20px; padding: 30px; text-align: center; transition: all 0.3s ease; display: flex; flex-direction: column; align-items: center;">
                    <div style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.2), rgba(0, 212, 255, 0.1)); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fab fa-windows" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; color: #ffffff; width: 100%;">Integração Windows</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6; width: 100%;">Disco mapeado diretamente no Windows, funcionando como uma unidade local (Disco D:).</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="250" style="background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(0, 212, 255, 0.2); border-radius: 20px; padding: 30px; text-align: center; transition: all 0.3s ease;">
                    <div style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.2), rgba(0, 212, 255, 0.1)); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <i class="fas fa-headset" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                    </div>
                    <h4 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; color: #ffffff;">Suporte Especializado</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; line-height: 1.6;">Time técnico 24/7 com especialistas em cloud e infraestrutura empresarial.</p>
                </div>
            </div>
            
            <!-- Trust Section -->
            <div style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(138, 43, 226, 0.1)); border-radius: 25px; padding: 50px 40px; margin-top: 60px; text-align: center;" data-aos="fade-up">
                <div style="display: flex; align-items: center; justify-content: center; gap: 60px; flex-wrap: wrap;">
                    <div style="text-align: center; min-width: 150px;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 5px;">99.9%</div>
                        <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem;">Uptime Garantido</p>
                    </div>
                    <div style="text-align: center; min-width: 150px;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 5px;">24/7</div>
                        <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem;">Monitoramento</p>
                    </div>
                    <div style="text-align: center; min-width: 150px;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 5px;">ISO 27001</div>
                        <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem;">Certificação</p>
                    </div>
                    <div style="text-align: center; min-width: 150px;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 5px;">30 Dias</div>
                        <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem;">Teste Grátis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="section" id="plans" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(15, 52, 96, 0.3)); position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(ellipse at top, rgba(0, 212, 255, 0.1), transparent 70%);"></div>
        
        <div class="container px-4 md:px-8" style="position: relative; z-index: 2;">
            <div class="section-header" data-aos="fade-up">
                <div style="display: inline-block; background: linear-gradient(90deg, rgba(0, 212, 255, 0.2), rgba(138, 43, 226, 0.2)); padding: 10px 25px; border-radius: 30px; border: 1px solid rgba(0, 212, 255, 0.3); margin-bottom: 25px;">
                    <span style="color: var(--primary-color); font-weight: 600; font-size: 0.9rem;">💎 Planos Premium</span>
                </div>
                <h2 class="section-title" style="font-size: 3.2rem; margin-bottom: 20px; font-weight: 700; letter-spacing: -1px; background: linear-gradient(135deg, #ffffff, rgba(255, 255, 255, 0.8)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Escolha o Plano Ideal</h2>
                <p class="section-description" style="font-size: 1.2rem; max-width: 750px; margin: 0 auto; color: rgba(255, 255, 255, 0.7);">
                    Soluções Enterprise com infraestrutura dedicada e suporte especializado
                </p>
            </div>
            
            <!-- Pricing Toggle -->
            <div style="display: flex; justify-content: center; margin-bottom: 50px;" data-aos="fade-up">
                <div style="background: rgba(0, 0, 0, 0.4); border: 1px solid rgba(0, 212, 255, 0.3); border-radius: 22px; padding: 2px; display: flex; gap: 2px;">
                    <button class="pricing-toggle active" onclick="togglePricing('monthly')" style="background: linear-gradient(135deg, var(--primary-color), #8a2be2); color: #ffffff; border: none; padding: 6px 12px; border-radius: 18px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-size: 0.85rem;">Mensal</button>
                    <button class="pricing-toggle" onclick="togglePricing('yearly')" style="background: transparent; color: rgba(255, 255, 255, 0.7); border: none; padding: 6px 12px; border-radius: 18px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; font-size: 0.85rem;">Anual</button>
                </div>
            </div>

            
            <div class="solutions-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
                <!-- Starter Plan -->
                <div class="solution-card modern" data-aos="fade-up" data-aos-delay="100" style="background: linear-gradient(135deg, rgba(26, 26, 46, 0.95), rgba(15, 52, 96, 0.8)); border: 1px solid rgba(0, 212, 255, 0.3); border-radius: 25px; padding: 35px; position: relative; overflow: hidden; transition: all 0.4s ease;">
                    <div style="position: absolute; top: -50%; right: -50%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(0, 212, 255, 0.1), transparent); border-radius: 50%;"></div>
                    
                    <div style="position: relative; z-index: 2;">
                        <div style="margin-bottom: 25px;">
                            <div style="background: rgba(0, 212, 255, 0.15); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                                <i class="fas fa-rocket" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Starter</h3>
                            <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;">Ideal para pequenas equipes</p>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div class="price-monthly" style="display: flex; align-items: baseline; gap: 5px;">
                                <span style="font-size: 3rem; font-weight: 700; color: #ffffff;">R$ 180</span>
                                <span style="color: rgba(255, 255, 255, 0.6); font-size: 1rem;">/mês</span>
                            </div>
                            <div class="price-yearly" style="display: none; align-items: baseline; gap: 5px;">
                                <span style="font-size: 3rem; font-weight: 700; color: #ffffff;">R$ 144</span>
                                <span style="color: rgba(255, 255, 255, 0.6); font-size: 1rem;">/mês</span>
                            </div>
                            <p style="color: rgba(255, 255, 255, 0.5); font-size: 0.85rem; margin-top: 5px;">Faturamento mensal</p>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">100GB de Armazenamento SSD</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Até 5 Usuários</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Backup Automático Diário</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Suporte Técnico Padrão</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Disco Mapeado Windows</span>
                            </div>
                        </div>
                        
                        <a href="#contact" style="display: block; background: linear-gradient(135deg, rgba(0, 212, 255, 0.8), rgba(0, 212, 255, 0.6)); color: #ffffff; padding: 15px 25px; border-radius: 15px; text-decoration: none; font-weight: 600; text-align: center; transition: all 0.3s ease; border: 1px solid rgba(0, 212, 255, 0.5);">
                            Começar Agora
                        </a>
                    </div>
                </div>
                
                <!-- Professional Plan -->
                <div class="solution-card modern featured" data-aos="fade-up" data-aos-delay="200" style="background: linear-gradient(135deg, rgba(138, 43, 226, 0.15), rgba(0, 212, 255, 0.15)); border: 2px solid var(--primary-color); border-radius: 25px; padding: 35px; position: relative; overflow: hidden; transform: scale(1.05); transition: all 0.4s ease;">
                    <!-- Highlight Badge -->
                    <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, var(--primary-color), #8a2be2); color: #ffffff; padding: 8px 25px; border-radius: 20px; font-weight: 600; font-size: 0.85rem; box-shadow: 0 5px 15px rgba(0, 212, 255, 0.4);">
                        MAIS POPULAR
                    </div>
                    
                    <div style="position: absolute; top: -50%; right: -50%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(138, 43, 226, 0.2), transparent); border-radius: 50%;"></div>
                    
                    <div style="position: relative; z-index: 2; margin-top: 20px;">
                        <div style="margin-bottom: 25px;">
                            <div style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.3), rgba(138, 43, 226, 0.3)); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                                <i class="fas fa-crown" style="font-size: 1.5rem; color: var(--primary-color);"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Professional</h3>
                            <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem;">Para equipes em crescimento</p>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div class="price-monthly" style="display: flex; align-items: baseline; gap: 5px;">
                                <span style="font-size: 3rem; font-weight: 700; color: var(--primary-color);">R$ 320</span>
                                <span style="color: rgba(255, 255, 255, 0.6); font-size: 1rem;">/mês</span>
                            </div>
                            <div class="price-yearly" style="display: none; align-items: baseline; gap: 5px;">
                                <span style="font-size: 3rem; font-weight: 700; color: var(--primary-color);">R$ 256</span>
                                <span style="color: rgba(255, 255, 255, 0.6); font-size: 1rem;">/mês</span>
                            </div>
                            <p style="color: rgba(255, 255, 255, 0.5); font-size: 0.85rem; margin-top: 5px;">Faturamento mensal</p>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">500GB de Armazenamento SSD</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Até 15 Usuários</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Backup Automático 3x/dia</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Suporte Prioritário 24/7</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">API de Integração</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(0, 212, 255, 0.3); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: var(--primary-color); font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Analytics Avançado</span>
                            </div>
                        </div>
                        
                        <a href="#contact" style="display: block; background: linear-gradient(135deg, var(--primary-color), #8a2be2); color: #ffffff; padding: 15px 25px; border-radius: 15px; text-decoration: none; font-weight: 600; text-align: center; transition: all 0.3s ease; box-shadow: 0 8px 25px rgba(0, 212, 255, 0.4);">
                            Começar Agora
                        </a>
                    </div>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="solution-card modern" data-aos="fade-up" data-aos-delay="300" style="background: linear-gradient(135deg, rgba(26, 26, 46, 0.95), rgba(15, 52, 96, 0.8)); border: 1px solid rgba(138, 43, 226, 0.3); border-radius: 25px; padding: 35px; position: relative; overflow: hidden; transition: all 0.4s ease;">
                    <div style="position: absolute; top: -50%; right: -50%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(138, 43, 226, 0.1), transparent); border-radius: 50%;"></div>
                    
                    <div style="position: relative; z-index: 2;">
                        <div style="margin-bottom: 25px;">
                            <div style="background: rgba(138, 43, 226, 0.15); width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                                <i class="fas fa-building" style="font-size: 1.5rem; color: #8a2be2;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Enterprise</h3>
                            <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;">Para grandes organizações</p>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div class="price-monthly" style="display: flex; align-items: baseline; gap: 5px;">
                                <span style="font-size: 3rem; font-weight: 700; color: #ffffff;">R$ 580</span>
                                <span style="color: rgba(255, 255, 255, 0.6); font-size: 1rem;">/mês</span>
                            </div>
                            <div class="price-yearly" style="display: none; align-items: baseline; gap: 5px;">
                                <span style="font-size: 3rem; font-weight: 700; color: #ffffff;">R$ 464</span>
                                <span style="color: rgba(255, 255, 255, 0.6); font-size: 1rem;">/mês</span>
                            </div>
                            <p style="color: rgba(255, 255, 255, 0.5); font-size: 0.85rem; margin-top: 5px;">Faturamento mensal</p>
                        </div>
                        
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(138, 43, 226, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: #8a2be2; font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">2TB de Armazenamento SSD</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(138, 43, 226, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: #8a2be2; font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Usuários Ilimitados</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(138, 43, 226, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: #8a2be2; font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Backup Contínuo em Tempo Real</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(138, 43, 226, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: #8a2be2; font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Gerente de Conta Dedicado</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(138, 43, 226, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: #8a2be2; font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Integração Personalizada</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                <div style="width: 20px; height: 20px; background: rgba(138, 43, 226, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-check" style="color: #8a2be2; font-size: 0.8rem;"></i>
                                </div>
                                <span style="color: #ffffff; font-weight: 500;">Relatórios Executivos</span>
                            </div>
                        </div>
                        
                        <a href="#contact" style="display: block; background: linear-gradient(135deg, rgba(138, 43, 226, 0.8), rgba(138, 43, 226, 0.6)); color: #ffffff; padding: 15px 25px; border-radius: 15px; text-decoration: none; font-weight: 600; text-align: center; transition: all 0.3s ease; border: 1px solid rgba(138, 43, 226, 0.5);">
                            Falar com Especialista
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Enterprise Features -->
            <div style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(15, 52, 96, 0.2)); border: 1px solid rgba(0, 212, 255, 0.2); border-radius: 25px; padding: 40px; margin-top: 60px; text-align: center;" data-aos="fade-up">
                <h3 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 30px; color: #ffffff;">Recursos Enterprise Inclusos em Todos os Planos</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px;">
                    <div style="text-align: center;">
                        <i class="fas fa-certificate" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Certificação ISO 27001</h4>
                        <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.85rem;">Padrão internacional de segurança</p>
                    </div>
                    <div style="text-align: center;">
                        <i class="fas fa-gavel" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Conformidade LGPD</h4>
                        <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.85rem;">100% adequado à legislação</p>
                    </div>
                    <div style="text-align: center;">
                        <i class="fas fa-shield-check" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: 8px; color: #ffffff;">SLA 99.9%</h4>
                        <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.85rem;">Garantia de disponibilidade</p>
                    </div>
                    <div style="text-align: center;">
                        <i class="fas fa-clock" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1rem; font-weight: 600; margin-bottom: 8px; color: #ffffff;">Implementação Rápida</h4>
                        <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.85rem;">Ativo em até 24 horas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(138, 43, 226, 0.1)); position: relative; overflow: hidden;">
        <div style="position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(0, 212, 255, 0.1) 0%, transparent 70%); animation: rotateGradient 20s linear infinite;"></div>
        <div class="container px-4 md:px-8">
            <div class="cta-content" data-aos="fade-up" style="position: relative; z-index: 2;">
                <div style="font-size: 4rem; margin-bottom: 20px;">🚀</div>
                <h2 style="font-size: 2.8rem; margin-bottom: 20px;">Pronto para ter seu Cloud Data Privado?</h2>
                <p style="font-size: 1.2rem; margin-bottom: 40px;">Configure seu armazenamento seguro em menos de 24 horas. <strong style="color: var(--primary-color);">Teste grátis por 30 dias!</strong></p>
                <div class="cta-actions">
                    <a href="#contact" class="btn-primary" style="padding: 20px 40px; font-size: 1.2rem; box-shadow: 0 15px 40px rgba(0, 212, 255, 0.5);">
                        <i class="fas fa-rocket"></i>
                        <span>Começar Agora</span>
                    </a>
                    <a href="tel:+5511999999999" class="btn-secondary" style="padding: 20px 40px; font-size: 1.2rem;">
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
                <span class="section-subtitle" style="background: linear-gradient(90deg, rgba(0, 212, 255, 0.2), rgba(138, 43, 226, 0.2)); padding: 10px 25px; border-radius: 30px; border: 1px solid rgba(0, 212, 255, 0.3); display: inline-block; margin-bottom: 20px;">
                    📞 Entre em Contato
                </span>
                <h2 class="section-title" style="font-size: 3rem; margin-bottom: 20px;">Vamos Configurar seu Cloud Data</h2>
                <p class="section-description" style="font-size: 1.2rem;">
                    Nossa equipe está pronta para implementar sua solução personalizada
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
                            <p>contato@sintrixtechnology.com.br</p>
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
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="storage">Necessidade de Armazenamento</label>
                        <select id="storage" name="storage" required>
                            <option value="">Selecione uma opção</option>
                            <option value="100gb">Até 100GB - Essencial (R$ 180/mês)</option>
                            <option value="500gb">Até 500GB - Profissional (R$ 320/mês)</option>
                            <option value="2tb">Até 2TB - Empresarial (R$ 580/mês)</option>
                            <option value="custom">Personalizado - Sob consulta</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message" rows="4" placeholder="Conte-nos sobre suas necessidades específicas..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-paper-plane"></i>
                        <span>Solicitar Proposta</span>
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
        
        // Função para alternar entre preços mensais e anuais
        function togglePricing(type) {
            const monthlyPrices = document.querySelectorAll('.price-monthly');
            const yearlyPrices = document.querySelectorAll('.price-yearly');
            const toggleButtons = document.querySelectorAll('.pricing-toggle');
            
            toggleButtons.forEach(btn => btn.classList.remove('active'));
            
            if (type === 'monthly') {
                monthlyPrices.forEach(price => price.style.display = 'flex');
                yearlyPrices.forEach(price => price.style.display = 'none');
                event.target.classList.add('active');
                event.target.style.background = 'linear-gradient(135deg, var(--primary-color), #8a2be2)';
                event.target.style.color = '#ffffff';
                
                // Reset o outro botão
                const yearlyBtn = document.querySelector('.pricing-toggle:not(.active)');
                if (yearlyBtn) {
                    yearlyBtn.style.background = 'transparent';
                    yearlyBtn.style.color = 'rgba(255, 255, 255, 0.7)';
                }
            } else {
                monthlyPrices.forEach(price => price.style.display = 'none');
                yearlyPrices.forEach(price => price.style.display = 'flex');
                event.target.classList.add('active');
                event.target.style.background = 'linear-gradient(135deg, var(--primary-color), #8a2be2)';
                event.target.style.color = '#ffffff';
                
                // Reset o outro botão
                const monthlyBtn = document.querySelector('.pricing-toggle:not(.active)');
                if (monthlyBtn) {
                    monthlyBtn.style.background = 'transparent';
                    monthlyBtn.style.color = 'rgba(255, 255, 255, 0.7)';
                }
            }
        }
        
        // Adicionar hover effects aos cards
        document.addEventListener('DOMContentLoaded', function() {
            const benefitCards = document.querySelectorAll('.benefit-card');
            const featureCards = document.querySelectorAll('.feature-card');
            const solutionCards = document.querySelectorAll('.solution-card.modern');
            
            // Hover effects para benefit cards
            benefitCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                    this.style.boxShadow = '0 20px 40px rgba(0, 212, 255, 0.2)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                });
            });
            
            // Hover effects para feature cards
            featureCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                    this.style.boxShadow = '0 10px 25px rgba(0, 212, 255, 0.3)';
                    this.style.borderColor = 'var(--primary-color)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = 'none';
                    this.style.borderColor = 'rgba(0, 212, 255, 0.2)';
                });
            });
            
            // Hover effects para solution cards
            solutionCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    if (!this.classList.contains('featured')) {
                        this.style.transform = 'translateY(-8px) scale(1.02)';
                        this.style.boxShadow = '0 15px 35px rgba(0, 212, 255, 0.3)';
                    } else {
                        this.style.transform = 'translateY(-8px) scale(1.07)';
                        this.style.boxShadow = '0 20px 50px rgba(0, 212, 255, 0.4)';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('featured')) {
                        this.style.transform = 'translateY(0) scale(1)';
                        this.style.boxShadow = 'none';
                    } else {
                        this.style.transform = 'translateY(0) scale(1.05)';
                        this.style.boxShadow = '0 10px 30px rgba(0, 212, 255, 0.3)';
                    }
                });
            });
        });
        
        // Animação dos contadores
        const animateCounters = () => {
            const counters = document.querySelectorAll('.amount');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent);
                const increment = target / 50;
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                updateCounter();
            });
        };
        
        // Observer para os contadores
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    counterObserver.disconnect();
                }
            });
        });
        
        const countersSection = document.querySelector('#plans');
        if (countersSection) {
            counterObserver.observe(countersSection);
        }
    </script>
</body>
</html>










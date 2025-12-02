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
    <title>VPN Corporativa - Conexão Segura para Empresas | Sintrix Technology</title>
    <meta name="description" content="VPN corporativa com criptografia militar para trabalho remoto seguro. Proteja dados da empresa com conexões VPN dedicadas da Sintrix.">
    
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
    
    <!-- Custom VPN Styles -->
    <style>
        /* Melhorias específicas para a seção de contato */
        .vpn-contact .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-top: 50px;
            align-items: start;
        }
        
        .vpn-contact .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .vpn-contact .contact-item {
            display: flex;
            gap: 20px;
            padding: 25px;
            background: var(--gradient-surface);
            border-radius: 15px;
            border: 1px solid var(--border-color);
            transition: var(--transition-smooth);
            align-items: flex-start;
        }
        
        .vpn-contact .contact-item:hover {
            border-color: var(--primary-color);
            transform: translateX(5px);
        }
        
        .vpn-contact .contact-icon {
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
        
        .vpn-contact .contact-icon i {
            font-size: 1.2rem;
            color: white;
        }
        
        .vpn-contact .contact-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .vpn-contact .contact-details h4 {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            margin: 0 0 8px 0;
            color: var(--light-text);
            font-weight: 600;
            line-height: 1.3;
        }
        
        .vpn-contact .contact-details p {
            color: var(--gray-text);
            line-height: 1.6;
            margin: 0;
            font-size: 0.95rem;
        }
        
        .vpn-contact .contact-form {
            background: var(--gradient-surface);
            padding: 35px;
            border-radius: 20px;
            border: 1px solid var(--border-color);
        }
        
        .vpn-contact .form-group {
            position: relative;
            margin-bottom: 25px;
        }
        
        .vpn-contact .form-group input,
        .vpn-contact .form-group select,
        .vpn-contact .form-group textarea {
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
        
        .vpn-contact .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .vpn-contact .form-group input:focus,
        .vpn-contact .form-group select:focus,
        .vpn-contact .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(123, 47, 255, 0.1);
        }
        
        .vpn-contact .form-group label {
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
        
        .vpn-contact .form-group select + label {
            display: none;
        }
        
        .vpn-contact .form-group input:focus + label,
        .vpn-contact .form-group input:not(:placeholder-shown) + label,
        .vpn-contact .form-group textarea:focus + label,
        .vpn-contact .form-group textarea:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 0.8rem;
            color: var(--primary-color);
        }
        
        .vpn-contact button[type="submit"] {
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
        
        .vpn-contact button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(123, 47, 255, 0.3);
        }
        
        /* Responsividade para a seção de contato */
        @media (max-width: 968px) {
            .vpn-contact .contact-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
        
        /* Estilos para a nova seção de implementação */
        .vpn-implementation-section {
            padding: 100px 0;
            background: var(--dark-bg);
            position: relative;
            overflow: hidden;
        }
        
        .vpn-implementation-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 300px;
            background: radial-gradient(ellipse at top, rgba(123, 47, 255, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }
        
        /* Timeline visual conectada */
        .timeline-visual {
            position: relative;
            max-width: 1200px;
            margin: 50px auto 40px;
            height: 4px;
        }
        
        .timeline-line {
            position: absolute;
            width: 100%;
            height: 4px;
            background: var(--border-color);
            border-radius: 2px;
            overflow: hidden;
        }
        
        .timeline-progress {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: var(--gradient-primary);
            border-radius: 2px;
            animation: progressAnimation 3s ease-out forwards;
        }
        
        @keyframes progressAnimation {
            to { width: 100%; }
        }
        
        .implementation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 60px;
            position: relative;
        }
        
        .implementation-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 30px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }
        
        /* Ponto da timeline no topo do card */
        .card-timeline-dot {
            position: absolute;
            top: -32px;
            left: 30px;
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            box-shadow: 0 8px 30px rgba(123, 47, 255, 0.4);
            border: 4px solid var(--dark-bg);
            z-index: 2;
            font-family: var(--font-heading);
        }
        
        .card-timeline-dot.success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 8px 30px rgba(16, 185, 129, 0.4);
        }
        
        .implementation-card::before {
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
        
        .implementation-card:hover {
            transform: translateY(-8px);
            border-color: var(--primary-color);
            box-shadow: 0 20px 60px rgba(123, 47, 255, 0.25);
        }
        
        .implementation-card:hover::before {
            opacity: 1;
        }
        
        .implementation-card.featured {
            border: 2px solid var(--primary-color);
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.08) 0%, var(--dark-card) 100%);
        }
        
        .implementation-card.featured::before {
            opacity: 1;
            height: 6px;
            background: linear-gradient(90deg, #10b981, #3b82f6, #8b5cf6);
        }
        
        .featured-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--gradient-primary);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 4px 15px rgba(123, 47, 255, 0.3);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-top: 10px;
        }
        
        .step-badge {
            display: flex;
            align-items: center;
            gap: 12px;
            flex: 1;
        }
        
        .badge-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: var(--gradient-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(123, 47, 255, 0.3);
        }
        
        .step-badge.success .badge-icon {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
        }
        
        .badge-icon i {
            font-size: 1.3rem;
            color: white;
        }
        
        .badge-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        
        .step-title {
            font-family: var(--font-heading);
            font-size: 1rem;
            font-weight: 600;
            color: var(--light-text);
        }
        
        .step-time {
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--gray-text);
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .step-time i {
            font-size: 0.75rem;
        }
        
        .step-duration {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: rgba(123, 47, 255, 0.1);
            border: 2px solid var(--border-color);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .step-duration.success {
            background: rgba(16, 185, 129, 0.1);
            border-color: #10b981;
        }
        
        .duration-value {
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--primary-color);
            font-family: var(--font-heading);
        }
        
        .step-duration.success .duration-value {
            color: #10b981;
            font-size: 1.5rem;
        }
        
        .implementation-card h3 {
            font-family: var(--font-heading);
            font-size: 1.4rem;
            color: var(--light-text);
            margin: 0 0 15px 0;
            font-weight: 700;
        }
        
        .implementation-card p {
            color: var(--gray-text);
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        
        /* Barra de progresso */
        .card-progress {
            margin: 20px 0;
        }
        
        .progress-bar {
            width: 100%;
            height: 8px;
            background: var(--dark-card);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 8px;
        }
        
        .progress-fill {
            height: 100%;
            background: var(--gradient-primary);
            border-radius: 10px;
            transition: width 1s ease-out;
            position: relative;
            overflow: hidden;
        }
        
        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .progress-fill.success {
            background: linear-gradient(90deg, #10b981, #059669);
        }
        
        .progress-label {
            font-size: 0.8rem;
            color: var(--gray-text);
            font-weight: 500;
        }
        
        .card-features {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }
        
        .card-features span {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--light-text);
            font-size: 0.9rem;
        }
        
        .card-features i {
            color: var(--primary-color);
            font-size: 0.85rem;
        }
        
        .implementation-card.featured .card-features i {
            color: #10b981;
        }
        
        /* Barra de garantias condensada */
        .guarantees-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 30px 40px;
            margin-top: 60px;
            gap: 20px;
        }
        
        .guarantee-item {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1;
        }
        
        .guarantee-icon-small {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: var(--gradient-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .guarantee-icon-small i {
            font-size: 1.3rem;
            color: white;
        }
        
        .guarantee-text {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        
        .guarantee-text strong {
            color: var(--light-text);
            font-size: 1rem;
            font-weight: 600;
            font-family: var(--font-heading);
        }
        
        .guarantee-text span {
            color: var(--gray-text);
            font-size: 0.85rem;
        }
        
        .guarantee-divider {
            width: 1px;
            height: 50px;
            background: var(--border-color);
        }
        
        /* Responsividade */
        @media (max-width: 1200px) {
            .implementation-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 968px) {
            .guarantees-bar {
                flex-direction: column;
                align-items: flex-start;
                gap: 25px;
            }
            
            .guarantee-divider {
                width: 100%;
                height: 1px;
            }
            
            .guarantee-item {
                width: 100%;
            }
            
            .timeline-visual {
                display: none;
            }
        }
        
        @media (max-width: 640px) {
            .implementation-grid {
                grid-template-columns: 1fr;
            }
            
            .guarantees-bar {
                padding: 25px;
            }
            
            .card-timeline-dot {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }
        
        /* VPN Connection Demo Visual Enhancements */
        .vpn-connection-demo {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .vpn-connection-demo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(123, 47, 255, 0.05) 0%, transparent 70%);
            pointer-events: none;
        }
        
        .connection-node {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            position: relative;
            z-index: 2;
        }
        
        .node-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            box-shadow: 0 10px 40px rgba(123, 47, 255, 0.4);
            position: relative;
            animation: nodeFloat 3s ease-in-out infinite;
        }
        
        @keyframes nodeFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .vpn-server .node-icon {
            width: 100px;
            height: 100px;
            font-size: 2.5rem;
        }
        
        .server-glow {
            position: absolute;
            width: 120px;
            height: 120px;
            background: radial-gradient(circle, rgba(123, 47, 255, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            animation: glowPulse 2s ease-in-out infinite;
        }
        
        @keyframes glowPulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.2); opacity: 1; }
        }
        
        .node-label {
            font-family: var(--font-heading);
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--light-text);
            text-align: center;
        }
        
        .node-status {
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .node-status::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            animation: statusBlink 2s ease-in-out infinite;
        }
        
        @keyframes statusBlink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        
        .node-status.online {
            background: rgba(46, 213, 115, 0.1);
            color: #2ed573;
            border: 1px solid rgba(46, 213, 115, 0.3);
        }
        
        .node-status.online::before {
            background: #2ed573;
        }
        
        .node-status.secure {
            background: rgba(123, 47, 255, 0.1);
            color: var(--primary-color);
            border: 1px solid rgba(123, 47, 255, 0.3);
        }
        
        .node-status.secure::before {
            background: var(--primary-color);
        }
        
        .node-status.protected {
            background: rgba(0, 212, 255, 0.1);
            color: #00d4ff;
            border: 1px solid rgba(0, 212, 255, 0.3);
        }
        
        .node-status.protected::before {
            background: #00d4ff;
        }
        
        .connection-line {
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, 
                var(--primary-color) 0%, 
                rgba(123, 47, 255, 0.5) 50%, 
                var(--primary-color) 100%);
            border-radius: 4px;
            position: relative;
            overflow: hidden;
        }
        
        .data-packet {
            position: absolute;
            width: 40px;
            height: 8px;
            background: linear-gradient(90deg, transparent, #fff, transparent);
            border-radius: 4px;
            top: -2px;
            animation: packetFlow 2s ease-in-out infinite;
        }
        
        @keyframes packetFlow {
            0% { left: -40px; }
            100% { left: 100%; }
        }
        
        .encryption-badge {
            position: absolute;
            top: -35px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--gradient-primary);
            padding: 8px 16px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.8rem;
            font-weight: 600;
            color: white;
            white-space: nowrap;
            box-shadow: 0 4px 20px rgba(123, 47, 255, 0.3);
        }
        
        /* VPN Interface Mockup */
        .vpn-interface-mockup {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.95) 0%, rgba(15, 23, 42, 0.95) 100%);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            max-width: 500px;
            margin: 0 auto;
            border: 1px solid rgba(123, 47, 255, 0.2);
        }
        
        .mockup-header {
            background: rgba(15, 23, 42, 0.8);
            padding: 15px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(123, 47, 255, 0.2);
        }
        
        .mockup-controls {
            display: flex;
            gap: 8px;
        }
        
        .control-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        
        .control-dot.red { background: #ff5f56; }
        .control-dot.yellow { background: #ffbd2e; }
        .control-dot.green { background: #27c93f; }
        
        .mockup-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: var(--font-heading);
            font-weight: 600;
            color: var(--light-text);
            font-size: 1rem;
        }
        
        .mockup-title i {
            color: var(--primary-color);
        }
        
        .mockup-content {
            padding: 40px 30px;
        }
        
        .connection-status {
            text-align: center;
            margin-bottom: 35px;
        }
        
        .status-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(46, 213, 115, 0.2) 0%, rgba(46, 213, 115, 0.05) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            position: relative;
        }
        
        .status-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid #2ed573;
            border-radius: 50%;
            animation: statusPulse 2s ease-in-out infinite;
        }
        
        @keyframes statusPulse {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.3); opacity: 0; }
        }
        
        .status-icon i {
            font-size: 2.5rem;
            color: #2ed573;
        }
        
        .connection-status h3 {
            font-family: var(--font-heading);
            font-size: 1.4rem;
            color: var(--light-text);
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        .connection-status p {
            color: var(--gray-text);
            font-size: 0.95rem;
        }
        
        .connection-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .stat-box {
            background: rgba(123, 47, 255, 0.1);
            border: 1px solid rgba(123, 47, 255, 0.2);
            border-radius: 12px;
            padding: 20px 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 8px;
            transition: var(--transition-smooth);
        }
        
        .stat-box:hover {
            background: rgba(123, 47, 255, 0.15);
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .stat-box i {
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        .stat-label {
            font-size: 0.75rem;
            color: var(--gray-text);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .stat-value {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--light-text);
        }
        
        .connection-info {
            background: rgba(15, 23, 42, 0.5);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid rgba(123, 47, 255, 0.1);
        }
        
        .info-row:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-size: 0.9rem;
            color: var(--gray-text);
        }
        
        .info-value {
            font-family: var(--font-heading);
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--light-text);
        }
        
        .disconnect-btn {
            width: 100%;
            padding: 15px 30px;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.2) 0%, rgba(220, 38, 38, 0.2) 100%);
            border: 1px solid rgba(239, 68, 68, 0.3);
            border-radius: 12px;
            color: #ef4444;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition-smooth);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .disconnect-btn:hover {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.3) 0%, rgba(220, 38, 38, 0.3) 100%);
            border-color: #ef4444;
            transform: translateY(-2px);
        }
        
        /* Features Grid Enhancement */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 40px;
        }
        
        .feature-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 28px 24px;
            transition: var(--transition-smooth);
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(123, 47, 255, 0.1), transparent);
            transition: left 0.6s ease;
        }
        
        .feature-card:hover::before {
            left: 100%;
        }
        
        .feature-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(123, 47, 255, 0.2);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.2) 0%, rgba(123, 47, 255, 0.05) 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.7rem;
            color: var(--primary-color);
            transition: var(--transition-smooth);
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
            background: var(--gradient-primary);
            color: white;
        }
        
        .feature-title {
            font-family: var(--font-heading);
            font-size: 1.15rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 12px;
        }
        
        .feature-description {
            color: var(--gray-text);
            line-height: 1.6;
            margin-bottom: 16px;
            font-size: 0.9rem;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .feature-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--gray-text);
            font-size: 0.9rem;
        }
        
        .feature-list i {
            color: #2ed573;
            font-size: 0.9rem;
        }
        
        /* Comparison Grid Enhancement */
        .comparison-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .comparison-card {
            background: var(--gradient-surface);
            border-radius: 20px;
            padding: 32px 28px;
            position: relative;
            overflow: hidden;
            transition: var(--transition-smooth);
        }
        
        .comparison-card::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.03) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .comparison-card.vulnerable {
            border: 2px solid rgba(239, 68, 68, 0.3);
        }
        
        .comparison-card.vulnerable:hover {
            border-color: #ef4444;
            box-shadow: 0 20px 60px rgba(239, 68, 68, 0.2);
            transform: translateY(-8px);
        }
        
        .comparison-card.protected {
            border: 2px solid rgba(46, 213, 115, 0.3);
        }
        
        .comparison-card.protected:hover {
            border-color: #2ed573;
            box-shadow: 0 20px 60px rgba(46, 213, 115, 0.2);
            transform: translateY(-8px);
        }
        
        .card-header {
            margin-bottom: 25px;
        }
        
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .status-badge.danger {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }
        
        .status-badge.success {
            background: rgba(46, 213, 115, 0.1);
            color: #2ed573;
            border: 1px solid rgba(46, 213, 115, 0.3);
        }
        
        .comparison-title {
            font-family: var(--font-heading);
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 25px;
        }
        
        .threat-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .threat-item {
            display: flex;
            gap: 12px;
            padding: 16px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 10px;
            transition: var(--transition-smooth);
        }
        
        .threat-item:hover {
            background: rgba(255, 255, 255, 0.04);
            transform: translateX(5px);
        }
        
        .threat-item i {
            font-size: 1.5rem;
            flex-shrink: 0;
            margin-top: 3px;
        }
        
        .vulnerable .threat-item i {
            color: #ef4444;
        }
        
        .protected .threat-item i {
            color: #2ed573;
        }
        
        .threat-content h4 {
            font-family: var(--font-heading);
            font-size: 1rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 6px;
        }
        
        .threat-content p {
            color: var(--gray-text);
            line-height: 1.5;
            margin: 0;
            font-size: 0.85rem;
        }
        
        /* Workflow Steps Enhancement */
        .workflow-steps {
            display: grid;
            grid-template-columns: 1fr auto 1fr auto 1fr;
            gap: 20px;
            align-items: center;
            margin-top: 50px;
            margin-bottom: 60px;
        }
        
        .workflow-step {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 35px 25px;
            text-align: center;
            position: relative;
            transition: var(--transition-smooth);
        }
        
        .workflow-step:hover {
            border-color: var(--primary-color);
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(123, 47, 255, 0.2);
        }
        
        .step-number {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-heading);
            font-size: 1.3rem;
            font-weight: 700;
            color: white;
            box-shadow: 0 8px 25px rgba(123, 47, 255, 0.4);
        }
        
        .step-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.2) 0%, rgba(123, 47, 255, 0.05) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px auto 20px;
            font-size: 2.2rem;
            color: var(--primary-color);
            transition: var(--transition-smooth);
        }
        
        .workflow-step:hover .step-icon {
            background: var(--gradient-primary);
            color: white;
            transform: scale(1.1) rotate(360deg);
        }
        
        .step-title {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 12px;
        }
        
        .step-description {
            color: var(--gray-text);
            line-height: 1.6;
            font-size: 0.9rem;
        }
        
        .step-arrow {
            font-size: 2rem;
            color: var(--primary-color);
            opacity: 0.3;
        }
        
        /* Implementation Timeline */
        .implementation-timeline {
            position: relative;
            max-width: 700px;
            margin: 30px auto 0;
            padding: 0 20px;
        }
        
        .implementation-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, 
                var(--primary-color) 0%, 
                rgba(123, 47, 255, 0.3) 50%, 
                var(--primary-color) 100%);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 25px;
            margin-bottom: 25px;
            position: relative;
        }
        
        .timeline-item:nth-child(even) .timeline-content {
            grid-column: 1;
        }
        
        .timeline-item:nth-child(even) .timeline-marker {
            grid-column: 2;
        }
        
        .timeline-item:nth-child(even)::after {
            content: '';
            grid-column: 3;
        }
        
        .timeline-item:nth-child(odd) .timeline-content {
            grid-column: 3;
        }
        
        .timeline-item:nth-child(odd) .timeline-marker {
            grid-column: 2;
        }
        
        .timeline-item:nth-child(odd)::before {
            content: '';
            grid-column: 1;
        }
        
        .timeline-marker {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
        }
        
        .marker-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            box-shadow: 0 10px 40px rgba(123, 47, 255, 0.4);
            position: relative;
            animation: markerFloat 3s ease-in-out infinite;
        }
        
        .marker-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border: 3px solid var(--primary-color);
            border-radius: 50%;
            animation: markerPulse 2s ease-in-out infinite;
        }
        
        @keyframes markerPulse {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        
        @keyframes markerFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .marker-icon.success {
            background: linear-gradient(135deg, #2ed573 0%, #16a34a 100%);
            box-shadow: 0 10px 40px rgba(46, 213, 115, 0.4);
        }
        
        .marker-icon.success::before {
            border-color: #2ed573;
        }
        
        .timeline-content {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px 16px;
            transition: var(--transition-smooth);
        }
        
        .timeline-content:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(123, 47, 255, 0.2);
        }
        
        .timeline-tag {
            display: inline-block;
            background: rgba(123, 47, 255, 0.1);
            color: var(--primary-color);
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .timeline-content h3 {
            font-family: var(--font-heading);
            font-size: 1.05rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 8px;
        }
        
        .timeline-content p {
            color: var(--gray-text);
            line-height: 1.5;
            margin: 0;
            font-size: 0.85rem;
        }
        
        .timeline-features {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .timeline-features li {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--gray-text);
            font-size: 0.9rem;
            padding: 8px 0;
        }
        
        .timeline-features i {
            color: #2ed573;
            font-size: 0.9rem;
        }
        
        /* Guarantees Section */
        .guarantees-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid var(--border-color);
        }
        
        .guarantee-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px 16px;
            text-align: center;
            transition: var(--transition-smooth);
        }
        
        .guarantee-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 15px 45px rgba(123, 47, 255, 0.15);
        }
        
        .guarantee-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.2) 0%, rgba(123, 47, 255, 0.05) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            font-size: 1.15rem;
            color: var(--primary-color);
            transition: var(--transition-smooth);
        }
        
        .guarantee-card:hover .guarantee-icon {
            background: var(--gradient-primary);
            color: white;
            transform: scale(1.1) rotate(360deg);
        }
        
        .guarantee-card h4 {
            font-family: var(--font-heading);
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 6px;
        }
        
        .guarantee-card p {
            color: var(--gray-text);
            line-height: 1.4;
            font-size: 0.8rem;
            margin: 0;
        }
        
        /* Tech Info Grid */
        .tech-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        
        .tech-info-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 35px 30px;
            transition: var(--transition-smooth);
            text-align: center;
        }
        
        .tech-info-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(123, 47, 255, 0.2);
        }
        
        .tech-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.2) 0%, rgba(123, 47, 255, 0.05) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: var(--primary-color);
            transition: var(--transition-smooth);
        }
        
        .tech-info-card:hover .tech-icon {
            background: var(--gradient-primary);
            color: white;
            transform: scale(1.1) rotate(360deg);
        }
        
        .tech-info-card h4 {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 20px;
        }
        
        .tech-info-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .tech-info-card li {
            color: var(--gray-text);
            font-size: 0.95rem;
            padding: 8px 15px;
            background: rgba(123, 47, 255, 0.05);
            border-radius: 8px;
            transition: var(--transition-smooth);
        }
        
        .tech-info-card li:hover {
            background: rgba(123, 47, 255, 0.1);
            color: var(--light-text);
            transform: translateX(5px);
        }
        
        /* Pricing Cards Enhancement */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 28px;
            margin-top: 40px;
        }
        
        .pricing-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 35px 28px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .pricing-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 24px 24px 0 0;
            z-index: 1;
        }
        
        .pricing-card:hover {
            border-color: rgba(123, 47, 255, 0.4);
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 45px rgba(123, 47, 255, 0.15);
        }
        
        .pricing-card:hover::before {
            opacity: 1;
        }
        
        .pricing-card.featured {
            border: 2px solid var(--primary-color);
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.05) 0%, var(--gradient-surface) 100%);
            box-shadow: 0 10px 40px rgba(123, 47, 255, 0.2);
        }
        
        .pricing-card.featured::before {
            opacity: 1;
            height: 4px;
            border-radius: 23px 23px 0 0;
        }
        
        .popular-badge {
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--gradient-primary);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 6px 20px rgba(123, 47, 255, 0.4);
            z-index: 10;
        }
        
        .plan-header {
            text-align: center;
            margin-bottom: 25px;
            margin-top: 40px;
        }
        
        .pricing-card.featured .plan-header {
            margin-top: 50px;
        }
        
        .plan-name {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--light-text);
            margin-bottom: 8px;
        }
        
        .plan-description {
            color: var(--gray-text);
            font-size: 0.9rem;
        }
        
        .plan-price {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .currency {
            font-size: 1.5rem;
            color: var(--gray-text);
            vertical-align: top;
        }
        
        .amount {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--light-text);
            line-height: 1;
        }
        
        .period {
            font-size: 1rem;
            color: var(--gray-text);
        }
        
        .plan-features {
            list-style: none;
            padding: 0;
            margin: 0 0 auto 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex-grow: 1;
        }
        
        .plan-features li {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--gray-text);
            font-size: 0.9rem;
            padding: 8px 0;
        }
        
        .plan-features i {
            color: #2ed573;
            font-size: 1rem;
            flex-shrink: 0;
        }
        
        .plan-btn {
            display: block;
            width: 100%;
            padding: 15px 30px;
            background: var(--gradient-primary);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 25px;
        }
        
        .plan-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }
        
        .plan-btn:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .plan-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(123, 47, 255, 0.3);
            color: white;
        }
        
        .pricing-card.featured .plan-btn {
            box-shadow: 0 6px 20px rgba(123, 47, 255, 0.4);
        }
        
        .pricing-footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: rgba(123, 47, 255, 0.05);
            border-radius: 12px;
        }
        
        .pricing-footer p {
            color: var(--gray-text);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .pricing-footer i {
            color: var(--primary-color);
        }
        
        /* Melhorias específicas para a seção de contato */
        .contact-layout-new {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 40px;
            margin-top: 60px;
            align-items: start;
        }
        
        .contact-form-card {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 40px;
            transition: var(--transition-smooth);
        }
        
        .contact-form-card:hover {
            border-color: rgba(123, 47, 255, 0.4);
            box-shadow: 0 15px 50px rgba(123, 47, 255, 0.15);
        }
        
        .form-card-header {
            text-align: center;
            margin-bottom: 35px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .header-icon {
            width: 70px;
            height: 70px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: white;
            box-shadow: 0 10px 30px rgba(123, 47, 255, 0.3);
        }
        
        .form-card-header h3 {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--light-text);
            margin-bottom: 10px;
        }
        
        .form-card-header p {
            color: var(--gray-text);
            font-size: 1rem;
        }
        
        .contact-form-new {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group-new {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        .form-group-new label {
            color: var(--gray-text);
            font-size: 0.9rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-group-new label i {
            color: var(--primary-color);
            font-size: 0.9rem;
        }
        
        .form-group-new input,
        .form-group-new select,
        .form-group-new textarea {
            width: 100%;
            padding: 14px 16px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            color: var(--light-text);
            font-size: 0.95rem;
            transition: var(--transition-smooth);
            font-family: var(--font-primary);
        }
        
        .form-group-new input:focus,
        .form-group-new select:focus,
        .form-group-new textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            background: rgba(123, 47, 255, 0.05);
            box-shadow: 0 0 0 3px rgba(123, 47, 255, 0.1);
        }
        
        .form-group-new textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .form-submit-btn {
            width: 100%;
            padding: 16px 30px;
            background: var(--gradient-primary);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            font-size: 1.05rem;
            cursor: pointer;
            transition: var(--transition-smooth);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-top: 10px;
        }
        
        .form-submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(123, 47, 255, 0.4);
        }
        
        .form-submit-btn i {
            transition: transform 0.3s ease;
        }
        
        .form-submit-btn:hover i {
            transform: translateX(5px);
        }
        
        .contact-info-cards {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .info-card-new {
            background: var(--gradient-surface);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 25px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: var(--transition-smooth);
        }
        
        .info-card-new:hover {
            border-color: rgba(123, 47, 255, 0.4);
            transform: translateX(5px);
            box-shadow: 0 10px 30px rgba(123, 47, 255, 0.1);
        }
        
        .info-card-icon {
            width: 55px;
            height: 55px;
            min-width: 55px;
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.2) 0%, rgba(123, 47, 255, 0.05) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        .info-card-content {
            flex: 1;
        }
        
        .info-card-content h4 {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 5px;
        }
        
        .info-card-content p {
            color: var(--gray-text);
            font-size: 0.85rem;
            margin-bottom: 10px;
        }
        
        .info-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-color);
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition-smooth);
        }
        
        .info-link:hover {
            color: var(--light-text);
            gap: 12px;
        }
        
        .info-card-new.highlight {
            background: linear-gradient(135deg, rgba(123, 47, 255, 0.15) 0%, rgba(123, 47, 255, 0.05) 100%);
            border: 2px solid rgba(123, 47, 255, 0.3);
            padding: 30px;
            display: block;
        }
        
        .highlight-content {
            text-align: center;
        }
        
        .highlight-content i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .highlight-content h4 {
            font-family: var(--font-heading);
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--light-text);
            margin-bottom: 10px;
        }
        
        .highlight-content p {
            color: var(--gray-text);
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .highlight-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            background: var(--gradient-primary);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: var(--transition-smooth);
        }
        
        .highlight-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(123, 47, 255, 0.3);
            gap: 15px;
        }
        
        .vpn-contact .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-top: 50px;
            align-items: start;
        }
        
        .vpn-contact .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .vpn-contact .contact-item {
            display: flex;
            gap: 20px;
            padding: 25px;
            background: var(--gradient-surface);
            border-radius: 15px;
            border: 1px solid var(--border-color);
            transition: var(--transition-smooth);
            align-items: flex-start;
        }
        
        .vpn-contact .contact-item:hover {
            border-color: var(--primary-color);
            transform: translateX(5px);
        }
        
        .vpn-contact .contact-icon {
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
        
        .vpn-contact .contact-icon i {
            font-size: 1.2rem;
            color: white;
        }
        
        .vpn-contact .contact-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .vpn-contact .contact-details h4 {
            font-family: var(--font-heading);
            font-size: 1.1rem;
            margin: 0 0 8px 0;
            color: var(--light-text);
            font-weight: 600;
            line-height: 1.3;
        }
        
        .vpn-contact .contact-details p {
            color: var(--gray-text);
            line-height: 1.6;
            margin: 0;
            font-size: 0.95rem;
        }
        
        .vpn-contact .contact-form {
            background: var(--gradient-surface);
            padding: 35px;
            border-radius: 20px;
            border: 1px solid var(--border-color);
        }
        
        .vpn-contact .form-group {
            position: relative;
            margin-bottom: 25px;
        }
        
        .vpn-contact .form-group input,
        .vpn-contact .form-group select,
        .vpn-contact .form-group textarea {
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
        
        .vpn-contact .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .vpn-contact .form-group input:focus,
        .vpn-contact .form-group select:focus,
        .vpn-contact .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(123, 47, 255, 0.1);
        }
        
        .vpn-contact .form-group label {
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
        
        .vpn-contact .form-group select + label {
            display: none;
        }
        
        .vpn-contact .form-group input:focus + label,
        .vpn-contact .form-group input:not(:placeholder-shown) + label,
        .vpn-contact .form-group textarea:focus + label,
        .vpn-contact .form-group textarea:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 0.8rem;
            color: var(--primary-color);
        }
        
        .vpn-contact button[type="submit"] {
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
        
        .vpn-contact button[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(123, 47, 255, 0.3);
        }
        
        /* VPN Connection Animation */
        @keyframes dataFlow {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        /* Responsividade para a seção de contato */
        @media (max-width: 968px) {
            .contact-layout-new {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .contact-form-card {
                padding: 30px 25px;
            }
            
            .vpn-contact .contact-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .workflow-steps {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .step-arrow {
                display: none;
            }
            
            .comparison-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .features-grid,
            .pricing-grid,
            .tech-info-grid {
                grid-template-columns: 1fr;
            }
            
            .connection-stats {
                grid-template-columns: 1fr;
            }
            
            .vpn-connection-demo {
                padding: 40px 20px;
            }
            
            /* Timeline Responsivo */
            .implementation-timeline::before {
                left: 40px;
            }
            
            .timeline-item {
                grid-template-columns: 80px 1fr;
                gap: 25px;
                margin-bottom: 40px;
            }
            
            .timeline-item:nth-child(even) .timeline-content,
            .timeline-item:nth-child(odd) .timeline-content {
                grid-column: 2;
            }
            
            .timeline-item:nth-child(even) .timeline-marker,
            .timeline-item:nth-child(odd) .timeline-marker {
                grid-column: 1;
            }
            
            .timeline-item::before,
            .timeline-item::after {
                display: none;
            }
            
            .marker-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .timeline-content {
                padding: 25px 20px;
            }
            
            .guarantees-section {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
        
        /* Scroll Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Gradient Text Animation */
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .gradient-text-animated {
            background: linear-gradient(90deg, var(--primary-color), #00d4ff, var(--primary-color));
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero modern-hero">
        <div class="hero-container px-4 md:px-8">
            <div class="hero-content">
                <div class="badge" data-aos="fade-up">
                    <i class="fas fa-shield-alt"></i>
                    <span>Segurança Corporativa</span>
                </div>
                
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    VPN Corporativa
                    <span class="gradient-text gradient-text-animated">Conexão Segura</span>
                    para Seu Negócio
                </h1>
                
                <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                    Proteja os dados da sua empresa com VPN dedicada de alto desempenho. 
                    Acesso remoto seguro, criptografia de ponta a ponta e infraestrutura 
                    redundante para garantir continuidade dos negócios.
                </p>
                
                <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
                    <a href="#contact" class="btn-primary">
                        <span>Solicitar Demonstração</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#features" class="btn-secondary">
                        <i class="fas fa-play-circle"></i>
                        <span>Ver Recursos</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                <div class="vpn-connection-demo">
                    <div class="connection-node start-node">
                        <div class="node-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="node-label">Seu Dispositivo</div>
                        <div class="node-status online">Online</div>
                    </div>
                    
                    <div class="connection-line">
                        <div class="data-packet"></div>
                        <div class="encryption-badge">
                            <i class="fas fa-lock"></i>
                            <span>Criptografado</span>
                        </div>
                    </div>
                    
                    <div class="connection-node vpn-server">
                        <div class="server-glow"></div>
                        <div class="node-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="node-label">Servidor VPN Sintrix</div>
                        <div class="node-status secure">Seguro</div>
                    </div>
                    
                    <div class="connection-line">
                        <div class="data-packet"></div>
                    </div>
                    
                    <div class="connection-node end-node">
                        <div class="node-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="node-label">Rede Corporativa</div>
                        <div class="node-status protected">Protegido</div>
                    </div>
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

    <!-- Features Section -->
    <section id="features" class="features-section vpn-features">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">
                    <i class="fas fa-star"></i>
                    Recursos Premium
                </span>
                <h2 class="section-title">
                    Segurança e Performance
                    <span class="gradient-text">de Classe Mundial</span>
                </h2>
                <p class="section-description">
                    Tecnologia de ponta para proteger sua empresa contra ameaças digitais
                </p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Criptografia</h3>
                    <p class="feature-description">
                        Proteção AES-256 bits, o mesmo padrão usado por governos e 
                        instituições financeiras para proteger dados sensíveis.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Túnel criptografado</li>
                        <li><i class="fas fa-check"></i> Zero-knowledge policy</li>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3 class="feature-title">Infraestrutura Dedicada</h3>
                    <p class="feature-description">
                        Servidores exclusivos para sua empresa com recursos garantidos 
                        e performance consistente, sem compartilhamento.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> IP dedicado</li>
                        <li><i class="fas fa-check"></i> Largura de banda garantida</li>
                        <li><i class="fas fa-check"></i> SLA de 99%</li>
                    </ul>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Multi-plataforma</h3>
                    <p class="feature-description">
                        Aplicativos para: Windows com configuração simplificada.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Apps nativos</li>
                        <li><i class="fas fa-check"></i> Conexão automática</li>
                        <li><i class="fas fa-check"></i> Sincronização automática</li>
                    </ul>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Suporte 24/7</h3>
                    <p class="feature-description">
                        Equipe técnica especializada disponível a qualquer hora para 
                        resolver problemas e garantir continuidade do serviço.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Chat em tempo real</li>
                        <li><i class="fas fa-check"></i> Telefone dedicado</li>
                        <li><i class="fas fa-check"></i> Técnicos certificados</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Comparison Section -->
    <section class="capabilities-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">
                    <i class="fas fa-shield-alt"></i>
                    Comparativo de Segurança
                </span>
                <h2 class="section-title">
                    Entenda os Riscos
                    <span class="gradient-text">de Conexões Não Protegidas</span>
                </h2>
                <p class="section-description">
                    Veja a diferença entre trabalhar com e sem VPN corporativa
                </p>
            </div>
            
            <div class="comparison-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="comparison-card vulnerable">
                    <div class="card-header">
                        <div class="status-badge danger">
                            <i class="fas fa-exclamation-triangle"></i>
                            Sem VPN
                        </div>
                    </div>
                    <h3 class="comparison-title">Conexão Desprotegida</h3>
                    
                    <div class="threat-list">
                        <div class="threat-item">
                            <i class="fas fa-times-circle"></i>
                            <div class="threat-content">
                                <h4>Dados Expostos</h4>
                                <p>Informações trafegam sem criptografia, visíveis para interceptadores</p>
                            </div>
                        </div>
                        
                        <div class="threat-item">
                            <i class="fas fa-times-circle"></i>
                            <div class="threat-content">
                                <h4>Ataques Man-in-the-Middle</h4>
                                <p>Hackers podem interceptar e modificar dados em trânsito</p>
                            </div>
                        </div>
                        
                        <div class="threat-item">
                            <i class="fas fa-times-circle"></i>
                            <div class="threat-content">
                                <h4>Vulnerável em WiFi Público</h4>
                                <p>Redes públicas são alvos fáceis para roubo de credenciais</p>
                            </div>
                        </div>
                        
                        <div class="threat-item">
                            <i class="fas fa-times-circle"></i>
                            <div class="threat-content">
                                <h4>Sem Controle de Acesso</h4>
                                <p>Impossível rastrear ou limitar quem acessa recursos da empresa</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="comparison-card protected">
                    <div class="card-header">
                        <div class="status-badge success">
                            <i class="fas fa-check-circle"></i>
                            Com VPN Sintrix
                        </div>
                    </div>
                    <h3 class="comparison-title">Conexão Protegida</h3>
                    
                    <div class="threat-list">
                        <div class="threat-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="threat-content">
                                <h4>Criptografia Total</h4>
                                <p>Todos os dados criptografados com AES-256, indecifráveis para terceiros</p>
                            </div>
                        </div>
                        
                        <div class="threat-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="threat-content">
                                <h4>Túnel Seguro</h4>
                                <p>Conexão direta e protegida, impossível de interceptar ou modificar</p>
                            </div>
                        </div>
                        
                        <div class="threat-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="threat-content">
                                <h4>Seguro em Qualquer Rede</h4>
                                <p>Trabalhe com confiança de qualquer lugar, mesmo em WiFi público</p>
                            </div>
                        </div>
                        
                        <div class="threat-item">
                            <i class="fas fa-check-circle"></i>
                            <div class="threat-content">
                                <h4>Controle Completo</h4>
                                <p>Monitore acessos, defina permissões e mantenha auditoria completa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="demo" class="vpn-implementation-section">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Processo Simplificado</span>
                <h2 class="section-title">
                    VPN Operacional em
                    <span class="gradient-text">Apenas 48 Horas</span>
                </h2>
                <p class="section-description">
                    Do primeiro contato até a operação completa, tudo acontece em 2 dias úteis
                </p>
            </div>
            
            <!-- Timeline Visual Conectada -->
            <div class="timeline-visual" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-line">
                    <div class="timeline-progress"></div>
                </div>
            </div>
            
            <!-- Grid de Etapas com Cards Modernos -->
            <div class="implementation-grid" data-aos="fade-up" data-aos-delay="200">
                <!-- Etapa 1 -->
                <div class="implementation-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-header">
                        <div class="step-badge">
                            <div class="badge-icon">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <div class="badge-info">
                                <span class="step-title">Contratação</span>
                            </div>
                        </div>
                    </div>
                    <h3>Contratação Express</h3>
                    <p>Análise técnica da sua infraestrutura, levantamento de requisitos e assinatura digital do contrato. Tudo online em menos de 2 horas.</p>
                    <div class="card-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 25%"></div>
                        </div>
                        <span class="progress-label">Etapa 1 de 4</span>
                    </div>
                    <div class="card-features">
                        <span><i class="fas fa-check-circle"></i> Análise técnica</span>
                        <span><i class="fas fa-check-circle"></i> Mapeamento de usuários</span>
                        <span><i class="fas fa-check-circle"></i> Definição de políticas</span>
                    </div>
                </div>

                <!-- Etapa 2 -->
                <div class="implementation-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-header">
                        <div class="step-badge">
                            <div class="badge-icon">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="badge-info">
                                <span class="step-title">Provisionamento</span>
                            </div>
                        </div>
                    </div>
                    <h3>Setup Automatizado</h3>
                    <p>Ativação instantânea dos servidores dedicados, configuração de firewall avançado e instalação de certificados SSL/TLS de última geração.</p>
                    <div class="card-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 50%"></div>
                        </div>
                        <span class="progress-label">Etapa 2 de 4</span>
                    </div>
                    <div class="card-features">
                        <span><i class="fas fa-check-circle"></i> Servidores dedicados</span>
                        <span><i class="fas fa-check-circle"></i> Firewall configurado</span>
                        <span><i class="fas fa-check-circle"></i> SSL/TLS instalado</span>
                    </div>
                </div>

                <!-- Etapa 3 -->
                <div class="implementation-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-header">
                        <div class="step-badge">
                            <div class="badge-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="badge-info">
                                <span class="step-title">Configuração</span>
                            </div>
                        </div>
                    </div>
                    <h3>Configuração Final</h3>
                    <p>Criação das credenciais individuais de cada usuário, instalação dos aplicativos cliente e aplicação completa das políticas de segurança.</p>
                    <div class="card-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%"></div>
                        </div>
                        <span class="progress-label">Etapa 3 de 4</span>
                    </div>
                    <div class="card-features">
                        <span><i class="fas fa-check-circle"></i> Credenciais geradas</span>
                        <span><i class="fas fa-check-circle"></i> Apps instalados</span>
                        <span><i class="fas fa-check-circle"></i> Segurança ativa</span>
                    </div>
                </div>

                <!-- Etapa 4 -->
                <div class="implementation-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card-header">
                        <div class="step-badge">
                            <div class="badge-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="badge-info">
                                <span class="step-title">Em Produção</span>
                            </div>
                        </div>
                    </div>
                    <h3>VPN em Produção!</h3>
                    <p>Sistema 100% operacional com monitoramento em tempo real, logs ativos e equipe de suporte técnico 24/7 já disponível para sua empresa.</p>
                    <div class="card-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 100%"></div>
                        </div>
                        <span class="progress-label">✓ Implementação Completa!</span>
                    </div>
                    <div class="card-features">
                        <span><i class="fas fa-check-circle"></i> Totalmente operacional</span>
                        <span><i class="fas fa-check-circle"></i> Monitoramento ativo</span>
                        <span><i class="fas fa-check-circle"></i> Suporte 24/7</span>
                    </div>
                </div>
            </div>

            <!-- Barra de Garantias Condensada -->
            <div class="guarantees-bar" data-aos="fade-up" data-aos-delay="500">
                <div class="guarantee-item">
                    <div class="guarantee-icon-small">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="guarantee-text">
                        <strong>48 Horas</strong>
                        <span>Para implementação completa</span>
                    </div>
                </div>
                <div class="guarantee-divider"></div>
                <div class="guarantee-item">
                    <div class="guarantee-icon-small">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="guarantee-text">
                        <strong>Suporte 24/7</strong>
                        <span>Equipe sempre disponível</span>
                    </div>
                </div>
                <div class="guarantee-divider"></div>
                <div class="guarantee-item">
                    <div class="guarantee-icon-small">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <div class="guarantee-text">
                        <strong>SLA 99.9%</strong>
                        <span>Disponibilidade garantida</span>
                    </div>
                </div>
                <div class="guarantee-divider"></div>
                <div class="guarantee-item">
                    <div class="guarantee-icon-small">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="guarantee-text">
                        <strong>Zero Downtime</strong>
                        <span>Migração sem paradas</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="benefits-modern">
        <div class="container px-4 md:px-8">
            <div class="section-intro" data-aos="fade-up">
                <h2 class="section-title">
                    Benefícios para
                    <span class="gradient-text">Sua Empresa</span>
                </h2>
                <p class="section-description">
                    Invista em segurança e produtividade com VPN corporativa
                </p>
            </div>
            
            <div class="benefits-grid-alt">
                <div class="benefit-card-large" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-number">01</div>
                    <div class="benefit-content-wrapper">
                        <div class="benefit-icon-wrapper">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="benefit-text">
                            <h3 class="benefit-title">Acesso de Qualquer Lugar</h3>
                            <p class="benefit-description">
                                Conecte-se ao servidor e dados da empresa de onde estiver: escritório, 
                                casa, viagem ou home office. Trabalhe com a mesma segurança e performance 
                                como se estivesse na rede local da empresa.
                            </p>
                            <div class="benefit-tags">
                                <span class="tag">Home Office</span>
                                <span class="tag">Mobilidade</span>
                                <span class="tag">Acesso Remoto</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-large" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-number">02</div>
                    <div class="benefit-content-wrapper">
                        <div class="benefit-icon-wrapper">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="benefit-text">
                            <h3 class="benefit-title">Conformidade Regulatória</h3>
                            <p class="benefit-description">
                                Atenda requisitos de LGPD e outras regulamentações 
                                com logs auditáveis e criptografia certificada.
                            </p>
                            <div class="benefit-tags">
                                <span class="tag">LGPD</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-large" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-number">04</div>
                    <div class="benefit-content-wrapper">
                        <div class="benefit-icon-wrapper">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <div class="benefit-text">
                            <h3 class="benefit-title">Escalabilidade</h3>
                            <p class="benefit-description">
                                Adicione ou remova usuários conforme necessário. Infraestrutura 
                                cresce junto com seu negócio sem investimentos adicionais.
                            </p>
                            <div class="benefit-tags">
                                <span class="tag">Flexível</span>
                                <span class="tag">Escalável</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-large" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-number">05</div>
                    <div class="benefit-content-wrapper">
                        <div class="benefit-icon-wrapper">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <div class="benefit-text">
                            <h3 class="benefit-title">Alta Performance</h3>
                            <p class="benefit-description">
                                Servidores dedicados garantem velocidade consistente. Trabalhe 
                                com aplicações pesadas sem lentidão ou interrupções.
                            </p>
                            <div class="benefit-tags">
                                <span class="tag">Velocidade</span>
                                <span class="tag">Estabilidade</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <!--
    <section class="pricing-modern">
        <div class="container px-4 md:px-8">
            <div class="section-intro" data-aos="fade-up">
                <h2 class="section-title">
                    Planos Flexíveis
                    <span class="gradient-text">para Todas as Empresas</span>
                </h2>
                <p class="section-description">
                    Escolha o plano ideal para o tamanho da sua operação
                </p>
            </div>
            
            <div class="pricing-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card">
                    <div class="plan-header">
                        <h3 class="plan-name">Starter</h3>
                        <p class="plan-description">Para pequenas equipes</p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">R$</span>
                        <span class="amount">299</span>
                        <span class="period">/mês</span>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Até 10 usuários simultâneos</li>
                        <li><i class="fas fa-check"></i> 100 Mbps garantidos</li>
                        <li><i class="fas fa-check"></i> 1 servidor dedicado</li>
                        <li><i class="fas fa-check"></i> Suporte 8x5</li>
                        <li><i class="fas fa-check"></i> Apps para todos dispositivos</li>
                        <li><i class="fas fa-check"></i> Painel administrativo</li>
                    </ul>
                    <a href="#contact" class="plan-btn">Começar Agora</a>
                </div>
                
                <div class="pricing-card featured">
                    <div class="popular-badge">Mais Popular</div>
                    <div class="plan-header">
                        <h3 class="plan-name">Business</h3>
                        <p class="plan-description">Para empresas em crescimento</p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">R$</span>
                        <span class="amount">699</span>
                        <span class="period">/mês</span>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Até 50 usuários simultâneos</li>
                        <li><i class="fas fa-check"></i> 500 Mbps garantidos</li>
                        <li><i class="fas fa-check"></i> 2 servidores dedicados</li>
                        <li><i class="fas fa-check"></i> Suporte 24/7</li>
                        <li><i class="fas fa-check"></i> Multi-localização</li>
                        <li><i class="fas fa-check"></i> Failover automático</li>
                        <li><i class="fas fa-check"></i> Relatórios avançados</li>
                        <li><i class="fas fa-check"></i> IP dedicado</li>
                    </ul>
                    <a href="#contact" class="plan-btn">Começar Agora</a>
                </div>
                
                <div class="pricing-card">
                    <div class="plan-header">
                        <h3 class="plan-name">Enterprise</h3>
                        <p class="plan-description">Para grandes corporações</p>
                    </div>
                    <div class="plan-price">
                        <span class="currency">R$</span>
                        <span class="amount">1.499</span>
                        <span class="period">/mês</span>
                    </div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Usuários ilimitados</li>
                        <li><i class="fas fa-check"></i> 1 Gbps garantido</li>
                        <li><i class="fas fa-check"></i> Servidores redundantes</li>
                        <li><i class="fas fa-check"></i> Suporte prioritário 24/7</li>
                        <li><i class="fas fa-check"></i> Múltiplas localizações</li>
                        <li><i class="fas fa-check"></i> SLA 99.99%</li>
                        <li><i class="fas fa-check"></i> Gerente de conta dedicado</li>
                        <li><i class="fas fa-check"></i> Customização completa</li>
                        <li><i class="fas fa-check"></i> Integração AD/LDAP</li>
                    </ul>
                    <a href="#contact" class="plan-btn">Falar com Vendas</a>
                </div>
            </div>

            <div class="pricing-footer" data-aos="fade-up" data-aos-delay="400">
                <p><i class="fas fa-info-circle"></i> Todos os planos incluem período de teste gratuito de 14 dias</p>
            </div>
        </div>
    </section>
    -->

    <!-- Contact Section -->
    <section id="contact" class="contact-section vpn-contact">
        <div class="container px-4 md:px-8">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Entre em Contato</span>
                <h2 class="section-title">Proteja Sua Empresa Hoje</h2>
                <p class="section-description">
                    Nossa equipe está pronta para implementar a solução VPN perfeita 
                    para sua empresa.
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
                            <p>Fale com nosso time de vendas</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Demo Personalizada</h4>
                            <p>Veja a VPN funcionando</p>
                            <p>com os dados da sua empresa</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Implementação Rápida</h4>
                            <p>VPN configurada em até 24 horas</p>
                            <p>após aprovação do projeto</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form" data-aos="fade-left">
                    <form id="vpnForm">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder=" " required>
                            <label for="name">Nome Completo</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder=" " required>
                            <label for="email">Email Empresarial</label>
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
                            <select id="users" name="users" required>
                                <option value="">Número de usuários</option>
                                <option value="1-10">1 a 10 usuários</option>
                                <option value="11-50">11 a 50 usuários</option>
                                <option value="51-100">51 a 100 usuários</option>
                                <option value="100+">Mais de 100 usuários</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" 
                                placeholder="Conte-nos sobre suas necessidades de segurança..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary vpn-btn btn-hover-effect">
                            <span>Solicitar Demonstração</span>
                            <i class="fas fa-shield-alt"></i>
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
            const form = document.getElementById('vpnContactForm');
            
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Animação de loading no botão
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalContent = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Enviando...</span>';
                    submitBtn.disabled = true;
                    
                    // Simular envio (substitua por sua lógica real)
                    setTimeout(() => {
                        submitBtn.innerHTML = '<i class="fas fa-check-circle"></i><span>Enviado com Sucesso!</span>';
                        
                        setTimeout(() => {
                            alert('Obrigado pelo contato! Nossa equipe entrará em contato em breve.');
                            form.reset();
                            submitBtn.innerHTML = originalContent;
                            submitBtn.disabled = false;
                        }, 1500);
                    }, 2000);
                });
            }
            
            // Animação dos números das estatísticas
            const animateValue = (element, start, end, duration) => {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    const value = Math.floor(progress * (end - start) + start);
                    element.textContent = value;
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            };
            
            // Observer para animar quando entrar na viewport
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const statBoxes = entry.target.querySelectorAll('.stat-value');
                        statBoxes.forEach(box => {
                            const text = box.textContent;
                            const number = parseFloat(text.replace(/[^0-9.]/g, ''));
                            if (!isNaN(number)) {
                                box.textContent = '0';
                                setTimeout(() => {
                                    animateValue(box, 0, number, 1500);
                                }, 200);
                            }
                        });
                        statsObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            const connectionStats = document.querySelector('.connection-stats');
            if (connectionStats) {
                statsObserver.observe(connectionStats);
            }
            
            // Animação de hover nos cards de features
            const featureCards = document.querySelectorAll('.feature-card');
            featureCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
            
            // Efeito parallax no hero
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const heroBackground = document.querySelector('.hero-background');
                if (heroBackground && scrolled < window.innerHeight) {
                    heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });
            
            // Contador animado para os stats do hero
            const heroStats = document.querySelectorAll('.hero-stats .stat-value');
            const heroObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const statValue = entry.target;
                        const finalText = statValue.textContent;
                        
                        // Animar apenas números
                        if (finalText.includes('Gbps')) {
                            statValue.textContent = '0 Gbps';
                            setTimeout(() => {
                                statValue.textContent = finalText;
                            }, 300);
                        } else if (finalText.includes('%')) {
                            const num = parseFloat(finalText);
                            statValue.textContent = '0%';
                            animateValue(statValue, 0, num, 1500);
                            setTimeout(() => {
                                statValue.textContent = finalText;
                            }, 1500);
                        }
                        
                        heroObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            heroStats.forEach(stat => {
                heroObserver.observe(stat);
            });
            
            // Smooth scroll para links internos
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#' && href !== '#!') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            const offsetTop = target.offsetTop - 80;
                            window.scrollTo({
                                top: offsetTop,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
            
            // Animação suave dos pricing cards
            const pricingCards = document.querySelectorAll('.pricing-card');
            pricingCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            });
        });
    </script>
</body>
</html>

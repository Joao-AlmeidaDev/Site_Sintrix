<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . '/../includes/google-analytics.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada - Sintrix Technology</title>
    <meta name="description" content="A página que você procura não foi encontrada. Visite nossa página inicial para conhecer nossos serviços de TI.">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../public/assets/favicon.png?v=<?php echo time(); ?>">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../public/css/style.css?v=<?php echo time(); ?>">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: var(--dark-bg);
            position: relative;
            overflow: hidden;
        }
        
        .error-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .error-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(0, 212, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 212, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
        }
        
        .error-content {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 20px;
            z-index: 1;
        }
        
        .error-number {
            font-family: var(--font-heading);
            font-size: clamp(6rem, 15vw, 12rem);
            font-weight: 700;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 20px;
            position: relative;
        }
        
        .error-number::after {
            content: '404';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            -webkit-text-stroke: 2px var(--primary-color);
            -webkit-text-fill-color: transparent;
            z-index: -1;
            animation: glitch 2s infinite;
        }
        
        @keyframes glitch {
            0%, 100% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
        }
        
        .error-title {
            font-family: var(--font-heading);
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            font-weight: 600;
            color: var(--light-text);
            margin-bottom: 20px;
        }
        
        .error-description {
            font-size: 1.2rem;
            color: var(--gray-text);
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .error-actions {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .error-btn {
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition-smooth);
            position: relative;
            overflow: hidden;
        }
        
        .error-btn-primary {
            background: var(--gradient-primary);
            color: white;
        }
        
        .error-btn-secondary {
            background: transparent;
            color: var(--light-text);
            border: 2px solid var(--border-color);
        }
        
        .error-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
        }
        
        .error-btn-secondary:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }
        
        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        
        .floating-icon {
            position: absolute;
            color: var(--primary-color);
            opacity: 0.1;
            animation: floatIcon 6s ease-in-out infinite;
        }
        
        .floating-icon:nth-child(1) {
            top: 20%;
            left: 10%;
            font-size: 2rem;
            animation-delay: 0s;
        }
        
        .floating-icon:nth-child(2) {
            top: 60%;
            right: 15%;
            font-size: 3rem;
            animation-delay: 2s;
        }
        
        .floating-icon:nth-child(3) {
            bottom: 30%;
            left: 20%;
            font-size: 2.5rem;
            animation-delay: 4s;
        }
        
        .floating-icon:nth-child(4) {
            top: 30%;
            right: 30%;
            font-size: 1.5rem;
            animation-delay: 1s;
        }
        
        @keyframes floatIcon {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.1; }
            50% { transform: translateY(-20px) rotate(180deg); opacity: 0.3; }
        }
        
        @media (max-width: 768px) {
            .error-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .error-btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="error-page">
        <div class="error-background">
            <div class="error-grid"></div>
            <div class="floating-icons">
                <i class="floating-icon fas fa-code"></i>
                <i class="floating-icon fas fa-server"></i>
                <i class="floating-icon fas fa-laptop-code"></i>
                <i class="floating-icon fas fa-cog"></i>
            </div>
        </div>
        
        <div class="error-content">
            <div class="error-number">404</div>
            <h1 class="error-title">Página Não Encontrada</h1>
            <p class="error-description">
                Ops! A página que você está procurando não existe ou foi movida. 
                Mas não se preocupe, nossa equipe de TI está sempre trabalhando 
                para melhorar sua experiência.
            </p>
            
            <div class="error-actions">
                <a href="../index.php" class="error-btn error-btn-primary">
                    <i class="fas fa-home"></i>
                    <span>Voltar ao Início</span>
                </a>
                <a href="../index.php#contact" class="error-btn error-btn-secondary">
                    <i class="fas fa-envelope"></i>
                    <span>Entre em Contato</span>
                </a>
            </div>
            
            <div style="margin-top: 60px; padding-top: 30px; border-top: 1px solid var(--border-color);">
                <h3 style="color: var(--light-text); margin-bottom: 20px; font-size: 1.2rem;">
                    Que tal conhecer nossos serviços?
                </h3>
                <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                    <a href="rhdocs.php" style="color: var(--primary-color); text-decoration: none; font-weight: 500; transition: var(--transition-smooth);">
                        <i class="fas fa-file-invoice" style="margin-right: 8px;"></i>
                        RHDocs
                    </a>
                    <a href="medplaces.php" style="color: var(--primary-color); text-decoration: none; font-weight: 500; transition: var(--transition-smooth);">
                        <i class="fas fa-stethoscope" style="margin-right: 8px;"></i>
                        MedPlaces
                    </a>
                    <a href="whatsapp-bot.php" style="color: var(--primary-color); text-decoration: none; font-weight: 500; transition: var(--transition-smooth);">
                        <i class="fab fa-whatsapp" style="margin-right: 8px;"></i>
                        WhatsApp Bot
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Easter egg: Click no número 404
        document.querySelector('.error-number').addEventListener('click', function() {
            this.style.animation = 'glitch 0.3s ease-in-out';
            setTimeout(() => {
                this.style.animation = '';
            }, 300);
        });
        
        // Animação dos ícones flutuantes
        document.querySelectorAll('.floating-icon').forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.animation = 'none';
                this.style.transform = 'scale(1.5) rotate(360deg)';
                this.style.opacity = '0.5';
            });
            
            icon.addEventListener('mouseleave', function() {
                this.style.animation = 'floatIcon 6s ease-in-out infinite';
                this.style.transform = '';
                this.style.opacity = '';
            });
        });
    </script>
    <?php include __DIR__ . '/../includes/cookie-banner.php'; ?>
    <?php include __DIR__ . '/../includes/analytics-tracking.php'; ?>
</body>
</html>


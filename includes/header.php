<?php
// Detecta se estamos em uma subpasta
$base = (basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
$navbarClass = (basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? 'navbar show' : 'navbar';
?>
<!-- Navigation -->
<nav class="<?php echo $navbarClass; ?>" id="navbar">
    <div class="nav-container px-4 md:px-8">
        <a href="<?php echo $base; ?>index.php" class="nav-logo" style="text-decoration: none; display: flex; align-items: center; gap: 10px; cursor: pointer;">
            <img src="<?php echo $base; ?>public/assets/logo.png?v=<?php echo time(); ?>" alt="Sintrix Logo" class="logo-img">
            <span class="logo-text">SINTRIX</span>
        </a>
        
        <ul class="nav-menu" id="nav-menu">
            <li class="nav-item">
                <a href="<?php echo $base; ?>index.php#home" class="nav-link">Início</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $base; ?>index.php#about" class="nav-link">Sobre</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $base; ?>index.php#services" class="nav-link">Serviços</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link dropdown-toggle">
                    Soluções
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="https://rhdocs.com.br" target="_blank" class="dropdown-item">
                        <i class="fas fa-users"></i>
                        RHDocs
                    </a>
                    <a href="https://medplaces.org" target="_blank" class="dropdown-item">
                        <i class="fas fa-hospital"></i>
                        MedPlaces
                    </a>
                    <a href="<?php echo $base; ?>pages/messenger-pro.php" class="dropdown-item">
                        <i class="fas fa-comments"></i>
                        Messenger Pro
                    </a>
                    <a href="<?php echo $base; ?>pages/telefonia-voip.php" class="dropdown-item">
                        <i class="fas fa-phone"></i>
                        Telefonia VoIP
                    </a>
                </div>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link dropdown-toggle">
                    Especialidades
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <a href="<?php echo $base; ?>pages/cloud-data.php" class="dropdown-item">
                        <i class="fas fa-cloud"></i>
                        Cloud Data Próprio
                    </a>
                    <a href="<?php echo $base; ?>pages/vpn-corporativa.php" class="dropdown-item">
                        <i class="fas fa-key"></i>
                        VPN Corporativa
                    </a>
                    <a href="<?php echo $base; ?>pages/email-corporativo.php" class="dropdown-item">
                        <i class="fas fa-envelope"></i>
                        Email Corporativo
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a href="<?php echo $base; ?>index.php#contact" class="nav-link">Contato</a>
            </li>
        </ul>
        
        <div class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>

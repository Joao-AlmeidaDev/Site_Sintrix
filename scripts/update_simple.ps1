# Script para atualizar navbar e footer em todas as páginas

$pages = @("rhdocs.html","whatsapp-bot.html","telefonia-voip.html","cloud-data.html","vpn-corporativa.html","email-corporativo.html")

foreach($page in $pages) {
    if(Test-Path $page) {
        Write-Host "Atualizando: $page"
        $content = Get-Content $page -Raw -Encoding UTF8
        
        # Atualizar navbar - procurar por nav class="navbar"
        $navbarPattern = '(?s)<nav class="navbar"[^>]*>.*?</nav>'
        $newNavbar = '<nav class="navbar show" id="navbar">
        <div class="nav-container px-4 md:px-8">
            <div class="nav-logo">
                <a href="index.html">
                    <img src="assets/logo.svg" alt="Sintrix Logo" class="logo-img">
                    <span class="logo-text">Sintrix</span>
                </a>
            </div>
            
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Início</a>
                </li>
                <li class="nav-item">
                    <a href="index.html#about" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="index.html#services" class="nav-link">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="index.html#solutions" class="nav-link">Soluções</a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a href="#" class="nav-link dropdown-toggle">
                        Especialidades
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="cloud-data.html" class="dropdown-item">
                            <i class="fas fa-cloud"></i>
                            Cloud Data Próprio
                        </a>
                        <a href="vpn-corporativa.html" class="dropdown-item">
                            <i class="fas fa-key"></i>
                            VPN Corporativa
                        </a>
                        <a href="email-corporativo.html" class="dropdown-item">
                            <i class="fas fa-envelope"></i>
                            Email Corporativo
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="index.html#contact" class="nav-link">Contato</a>
                </li>
            </ul>
            
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>'
        
        $content = $content -replace $navbarPattern, $newNavbar
        
        # Salvar arquivo
        Set-Content $page $content -Encoding UTF8
        Write-Host "Concluído: $page"
    } else {
        Write-Host "Arquivo não encontrado: $page"
    }
}

Write-Host "Todas as páginas foram atualizadas!"
# Script para atualizar navbar e footer em todas as páginas

# Navbar padrão
$navbar = @'
    <!-- Navigation -->
    <nav class="navbar show" id="navbar">
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
    </nav>
'@

# Footer padrão
$footer = @'
    <!-- Footer -->
    <footer class="footer">
        <div class="container px-4 md:px-8">
            <div class="footer-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="assets/logo.svg" alt="Sintrix Logo">
                        <span>Sintrix Technology</span>
                    </div>
                    <p>23 anos de excelência em soluções de TI, conectando tecnologia 
                    e pessoas para um futuro melhor.</p>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Serviços</h4>
                    <ul>
                        <li><a href="index.html#services">Helpdesk</a></li>
                        <li><a href="index.html#services">Consultoria em TI</a></li>
                        <li><a href="index.html#services">Gerenciamento de Servidores</a></li>
                        <li><a href="index.html#services">Segurança de Dados</a></li>
                        <li><a href="index.html#services">Telefonia VoIP</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Soluções</h4>
                    <ul>
                        <li><a href="https://rhdocs.com.br" target="_blank">RHDocs</a></li>
                        <li><a href="https://medplaces.org" target="_blank">MedPlaces</a></li>
                        <li><a href="whatsapp-bot.html">WhatsApp Bot</a></li>
                        <li><a href="cloud-data.html">Cloud Data</a></li>
                        <li><a href="vpn-corporativa.html">Serviços VPN</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contato</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> (11) 99999-9999</li>
                        <li><i class="fas fa-envelope"></i> contato@sintrixtechnology.com.br</li>
                        <li><i class="fas fa-map-marker-alt"></i> Rua da Tecnologia, 123</li>
                        <li><i class="fas fa-clock"></i> Suporte 24/7</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom flex flex-col md:flex-row justify-between items-center pt-8 mt-8 border-t border-gray-700">
                <p class="text-center md:text-left mb-4 md:mb-0">&copy; 2025 Sintrix Technology. Todos os direitos reservados.</p>
                <div class="footer-links flex flex-wrap justify-center md:justify-end gap-4">
                    <a href="#">Política de Privacidade</a>
                    <a href="#">Termos de Uso</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
'@

# Lista de páginas para atualizar
$pages = @("rhdocs.html","whatsapp-bot.html","telefonia-voip.html","cloud-data.html","vpn-corporativa.html","email-corporativo.html")

foreach($page in $pages) {
    if(Test-Path $page) {
        Write-Host "Atualizando: $page"
        $content = Get-Content $page -Raw -Encoding UTF8
        
        # Atualizar navbar
        $content = $content -replace '(?s)<!-- Navigation -->.*?</nav>', $navbar
        
        # Atualizar footer
        $content = $content -replace '(?s)<!-- Footer -->.*?</footer>', $footer
        
        # Salvar arquivo
        Set-Content $page $content -Encoding UTF8
        Write-Host "✓ Concluído: $page"
    } else {
        Write-Host "✗ Arquivo não encontrado: $page"
    }
}

Write-Host "Todas as páginas foram atualizadas com navbar e footer padrão!"
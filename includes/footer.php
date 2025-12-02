<?php
// Detecta se estamos em uma subpasta (mesmo que o header)
$base = (basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
?>
<!-- Footer -->
<footer class="footer">
    <div class="container px-4 md:px-8">
        <div class="footer-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="<?php echo $base; ?>public/assets/logo.png?v=<?php echo time(); ?>" alt="Sintrix Logo">
                    <span>SINTRIX TECHNOLOGY</span>
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
                        <li><a href="index.php#services">Helpdesk</a></li>
                        <li><a href="index.php#services">Consultoria em TI</a></li>
                        <li><a href="index.php#services">Gerenciamento de Servidores</a></li>
                        <li><a href="index.php#services">Segurança de Dados</a></li>
                        <li><a href="/dhr/pages/telefonia-voip.php">Telefonia VoIP</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Soluções</h4>
                    <ul>
                        <li><a href="https://rhdocs.com.br" target="_blank">RHDocs</a></li>
                        <li><a href="https://medplaces.org" target="_blank">MedPlaces</a></li>
                        <li><a href="/dhr/pages/messenger-pro.php">Messenger Pro</a></li>
                        <li><a href="/dhr/pages/cloud-data.php">Cloud Data</a></li>
                        <li><a href="/dhr/pages/vpn-corporativa.php">Serviços VPN</a></li>
                    </ul>
                </div>            <div class="footer-section">
                <h4>Contato</h4>
                <ul>
                    <li><i class="fas fa-phone"></i> (11) 97377-4109</li>
                    <li><i class="fas fa-envelope"></i> contato@sintrix.com.br</li>
                    <li><i class="fas fa-map-marker-alt"></i> Rua Borges Vieira, 174</li>
                    <li><i class="fas fa-clock"></i> Suporte 8/5</li>
                </ul>
            </div>
        </div>
        
            <div class="footer-bottom flex flex-col md:flex-row justify-between items-center pt-8 mt-8 border-t border-gray-700">
                <p class="text-center md:text-left mb-4 md:mb-0">&copy; 2025 Sintrix Technology. Todos os direitos reservados.</p>
                <div class="footer-links flex flex-wrap justify-center md:justify-end gap-4">
                <a href="<?php echo $base; ?>pages/politica-privacidade.php">Política de Privacidade</a>
                <a href="<?php echo $base; ?>pages/termos-uso.php">Termos de Uso</a>
                <a href="<?php echo $base; ?>pages/politica-cookies.php">Cookies</a>
            </div>
        </div>
    </div>
</footer>

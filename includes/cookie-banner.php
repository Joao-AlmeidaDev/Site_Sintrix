<!-- Cookie Consent Banner -->
<div id="cookieConsent" class="cookie-consent" style="display: none;">
    <div class="cookie-content">
        <div class="cookie-icon">
            <i class="fas fa-cookie-bite"></i>
        </div>
        <div class="cookie-text">
            <h4>🍪 Nós usamos cookies</h4>
            <p>Utilizamos cookies para melhorar sua experiência, personalizar conteúdo e analisar nosso tráfego. Você pode aceitar todos os cookies ou usar apenas os essenciais. Veja nossa <a href="<?php echo $base; ?>pages/politica-cookies.php">Política de Cookies</a> e <a href="<?php echo $base; ?>pages/politica-privacidade.php">Política de Privacidade</a>.</p>
        </div>
        <div class="cookie-actions">
            <button onclick="acceptCookies()" class="btn-accept">
                <i class="fas fa-check"></i>
                <span>Aceitar Todos</span>
            </button>
            <button onclick="rejectCookies()" class="btn-reject">
                <i class="fas fa-times"></i>
                <span>Apenas Essenciais</span>
            </button>
        </div>
    </div>
</div>

<style>
/* Cookie Consent Banner */
.cookie-consent {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(135deg, rgba(26, 26, 46, 0.98), rgba(15, 52, 96, 0.98));
    backdrop-filter: blur(20px);
    border-top: 2px solid rgba(0, 212, 255, 0.3);
    box-shadow: 0 -10px 40px rgba(0, 0, 0, 0.5);
    z-index: 999999;
    animation: slideUp 0.5s ease-out;
    padding: 25px 20px;
}

@keyframes slideUp {
    from {
        transform: translateY(100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.cookie-content {
    max-width: 1400px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 25px;
    flex-wrap: wrap;
}

.cookie-icon {
    background: linear-gradient(135deg, rgba(0, 212, 255, 0.2), rgba(138, 43, 226, 0.2));
    width: 60px;
    height: 60px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: var(--primary-color);
    flex-shrink: 0;
}

.cookie-text {
    flex: 1;
    min-width: 300px;
}

.cookie-text h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 8px;
    color: #ffffff;
}

.cookie-text p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

.cookie-text a {
    color: var(--primary-color);
    text-decoration: underline;
    transition: all 0.3s ease;
}

.cookie-text a:hover {
    color: #fff;
}

.cookie-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.cookie-actions button {
    padding: 12px 24px;
    border-radius: 12px;
    border: none;
    font-weight: 600;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
}

.btn-accept {
    background: linear-gradient(135deg, var(--primary-color), #8a2be2);
    color: #ffffff;
    box-shadow: 0 5px 20px rgba(0, 212, 255, 0.4);
}

.btn-accept:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 212, 255, 0.6);
}

.btn-reject {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.btn-reject:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.3);
}

/* Responsive */
@media (max-width: 768px) {
    .cookie-content {
        flex-direction: column;
        text-align: center;
    }
    
    .cookie-actions {
        width: 100%;
        justify-content: center;
    }
    
    .cookie-actions button {
        flex: 1;
        min-width: 0;
    }
}
</style>

<script>
// Cookie Consent Management
function checkCookieConsent() {
    const consent = localStorage.getItem('cookieConsent');
    if (!consent) {
        setTimeout(() => {
            document.getElementById('cookieConsent').style.display = 'block';
        }, 1000);
    }
}

function acceptCookies() {
    const preferences = {
        essential: true,
        analytics: true,
        marketing: true,
        timestamp: new Date().toISOString()
    };
    localStorage.setItem('cookieConsent', JSON.stringify(preferences));
    document.getElementById('cookieConsent').style.display = 'none';
    
    // Ativar Google Analytics
    initializeGoogleAnalytics();
    
    // Ativar Facebook Pixel
    initializeFacebookPixel();
    
    // Ativar Google Ads
    initializeGoogleAds();
}

function rejectCookies() {
    const preferences = {
        essential: true,
        analytics: false,
        marketing: false,
        timestamp: new Date().toISOString()
    };
    localStorage.setItem('cookieConsent', JSON.stringify(preferences));
    document.getElementById('cookieConsent').style.display = 'none';
    
    // Desativar cookies de terceiros
    disableThirdPartyCookies();
}

// Verificar consentimento ao carregar a página
document.addEventListener('DOMContentLoaded', checkCookieConsent);

// ============================================
// INTEGRAÇÃO COM FERRAMENTAS DE ANÁLISE
// ============================================

// Google Analytics 4 (GA4)
function initializeGoogleAnalytics() {
    const GA_MEASUREMENT_ID = 'G-70NFMXQ2GE';
    
    // Adicionar script do Google Analytics
    const gaScript = document.createElement('script');
    gaScript.async = true;
    gaScript.src = `https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`;
    document.head.appendChild(gaScript);
    
    // Configurar Google Analytics
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', GA_MEASUREMENT_ID, {
        'anonymize_ip': true, // Anonimizar IP para LGPD
        'cookie_flags': 'SameSite=None;Secure'
    });
}

// Facebook Pixel - DESATIVADO (não configurado)
function initializeFacebookPixel() {
    // Descomente e configure quando tiver um Pixel ID válido
    /*
    const FB_PIXEL_ID = 'XXXXXXXXXX'; // CONFIGURE SEU ID AQUI
    
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    
    fbq('init', FB_PIXEL_ID);
    fbq('track', 'PageView');
    */
}

// Google Ads / Google Tag Manager - DESATIVADO (não configurado)
function initializeGoogleAds() {
    // Descomente e configure quando tiver um Ads ID válido
    /*
    const GOOGLE_ADS_ID = 'AW-XXXXXXXXXX'; // CONFIGURE SEU ID AQUI
    
    const gadsScript = document.createElement('script');
    gadsScript.async = true;
    gadsScript.src = `https://www.googletagmanager.com/gtag/js?id=${GOOGLE_ADS_ID}`;
    document.head.appendChild(gadsScript);
    
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', GOOGLE_ADS_ID);
    */
}

// Hotjar (opcional - ferramenta de heatmap e gravação de sessão)
function initializeHotjar() {
    // Substitua 'XXXXXXX' pelo seu ID do Hotjar
    const HOTJAR_ID = 'XXXXXXX'; // CONFIGURE SEU ID AQUI
    
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:HOTJAR_ID,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
}

// Desativar cookies de terceiros
function disableThirdPartyCookies() {
    // Remover cookies do Google Analytics
    const cookiesToDelete = ['_ga', '_gid', '_gat', '_gat_gtag_', '_fbp', 'fr', 'IDE'];
    
    cookiesToDelete.forEach(cookieName => {
        document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=${window.location.hostname};`;
    });
    
    // Desativar Google Analytics se já estiver ativo
    if (window.gtag) {
        window['ga-disable-G-XXXXXXXXXX'] = true; // Substitua pelo seu ID
    }
}

// Verificar se já tem consentimento salvo e ativar ferramentas
function loadExistingConsent() {
    const consent = localStorage.getItem('cookieConsent');
    if (consent) {
        const preferences = JSON.parse(consent);
        
        if (preferences.analytics) {
            initializeGoogleAnalytics();
        }
        
        if (preferences.marketing) {
            initializeFacebookPixel();
            initializeGoogleAds();
        }
    }
}

// Carregar consentimento existente ao iniciar
loadExistingConsent();
</script>


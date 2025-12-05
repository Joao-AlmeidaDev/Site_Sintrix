<!-- Rastreamento de Eventos de Análise -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Verificar se trackEvent está disponível
    if (typeof trackEvent !== 'function') {
        console.warn('trackEvent function not available');
        return;
    }
    
    // ========================================
    // 1. RASTREAMENTO DE BOTÕES CTA
    // ========================================
        document.querySelectorAll('.btn-primary, .btn-secondary, .cta-button, a[href="#contact"]').forEach(btn => {
            btn.addEventListener('click', function() {
                const buttonText = this.textContent.trim();
                const section = this.closest('section')?.id || 'unknown';
                const href = this.getAttribute('href');
                
                trackEvent('button_click', {
                    button_text: buttonText,
                    section: section,
                    href: href,
                    page: document.title
                });
            });
        });
        
        // ========================================
        // 2. RASTREAMENTO DE FORMULÁRIOS
        // ========================================
        
        // Formulário de contato geral
        const contactForms = document.querySelectorAll('form');
        contactForms.forEach(form => {
            // Rastrear início de preenchimento
            let formStarted = false;
            const formInputs = form.querySelectorAll('input, textarea, select');
            
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    if (!formStarted) {
                        formStarted = true;
                        const formName = form.id || form.querySelector('h2, h3')?.textContent || 'Form';
                        trackEvent('form_start', {
                            form_name: formName,
                            page: document.title
                        });
                    }
                });
            });
            
            // Rastrear envio de formulário
            form.addEventListener('submit', function(e) {
                const formName = form.id || 'contact_form';
                const serviceSelect = form.querySelector('[name="service"], [name="storage"]');
                const service = serviceSelect ? serviceSelect.value : 'não especificado';
                
                trackEvent('lead_form_submit', {
                    form_name: formName,
                    service_interest: service,
                    page: document.title
                });
                
                // Se for lead qualificado, rastrear também como conversão
                trackEvent('lead_generated', {
                    form_name: formName,
                    service: service,
                    page: document.title,
                    lead_source: 'website'
                });
            });
        });
        
        // ========================================
        // 3. RASTREAMENTO DE CLIQUES EM SERVIÇOS
        // ========================================
        document.querySelectorAll('.service-card, .solution-card, .product-card').forEach(card => {
            card.addEventListener('click', function() {
                const serviceName = this.querySelector('h3, h4')?.textContent.trim() || 'Serviço';
                const price = this.querySelector('.price, .amount')?.textContent.trim();
                
                trackEvent('service_card_click', {
                    service_name: serviceName,
                    price: price || 'N/A',
                    page: document.title
                });
            });
        });
        
        // ========================================
        // 4. RASTREAMENTO DE TELEFONE E EMAIL
        // ========================================
        
        // Cliques em telefone
        document.querySelectorAll('a[href^="tel:"]').forEach(link => {
            link.addEventListener('click', function() {
                const phoneNumber = this.href.replace('tel:', '');
                trackEvent('phone_click', {
                    phone_number: phoneNumber,
                    page: document.title,
                    section: this.closest('section')?.id || 'unknown'
                });
            });
        });
        
        // Cliques em email
        document.querySelectorAll('a[href^="mailto:"]').forEach(link => {
            link.addEventListener('click', function() {
                const email = this.href.replace('mailto:', '');
                trackEvent('email_click', {
                    email: email,
                    page: document.title
                });
            });
        });
        
        // ========================================
        // 5. RASTREAMENTO DE SCROLL (Seções)
        // ========================================
        const sectionsToTrack = document.querySelectorAll('section[id]');
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sectionId = entry.target.id;
                    const sectionTitle = entry.target.querySelector('h1, h2')?.textContent.trim() || sectionId;
                    
                    trackEvent('section_viewed', {
                        section_id: sectionId,
                        section_title: sectionTitle,
                        page: document.title
                    });
                    
                    // Rastrear apenas uma vez
                    sectionObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 }); // 50% da seção visível
        
        sectionsToTrack.forEach(section => {
            sectionObserver.observe(section);
        });
        
        // ========================================
        // 6. RASTREAMENTO DE TEMPO NA PÁGINA
        // ========================================
        let timeOnPage = 0;
        const timeInterval = setInterval(() => {
            timeOnPage += 10; // Incrementar a cada 10 segundos
            
            // Rastrear milestone de tempo (30s, 60s, 120s, 300s)
            if ([30, 60, 120, 300].includes(timeOnPage)) {
                trackEvent('time_on_page', {
                    seconds: timeOnPage,
                    page: document.title
                });
            }
        }, 10000);
        
        // Parar contador ao sair
        window.addEventListener('beforeunload', () => {
            clearInterval(timeInterval);
            trackEvent('page_exit', {
                time_spent: timeOnPage,
                page: document.title
            });
        });
        
        // ========================================
        // 7. RASTREAMENTO DE SCROLL DEPTH
        // ========================================
        let maxScroll = 0;
        const milestones = [25, 50, 75, 100];
        const trackedMilestones = new Set();
        
        window.addEventListener('scroll', () => {
            const scrollPercentage = Math.round((window.scrollY + window.innerHeight) / document.documentElement.scrollHeight * 100);
            
            if (scrollPercentage > maxScroll) {
                maxScroll = scrollPercentage;
                
                // Rastrear milestones
                milestones.forEach(milestone => {
                    if (scrollPercentage >= milestone && !trackedMilestones.has(milestone)) {
                        trackedMilestones.add(milestone);
                        trackEvent('scroll_depth', {
                            percentage: milestone,
                            page: document.title
                        });
                    }
                });
            }
        });
        
        // ========================================
        // 8. RASTREAMENTO DE VÍDEOS
        // ========================================
        document.querySelectorAll('video, iframe[src*="youtube"], iframe[src*="vimeo"]').forEach(video => {
            // Para vídeos HTML5
            if (video.tagName === 'VIDEO') {
                video.addEventListener('play', function() {
                    trackEvent('video_play', {
                        video_title: this.title || this.src,
                        page: document.title
                    });
                });
                
                video.addEventListener('ended', function() {
                    trackEvent('video_complete', {
                        video_title: this.title || this.src,
                        page: document.title
                    });
                });
            }
        });
        
        // ========================================
        // 9. RASTREAMENTO DE DOWNLOADS
        // ========================================
        document.querySelectorAll('a[download], a[href$=".pdf"], a[href$=".zip"], a[href$=".doc"], a[href$=".docx"]').forEach(link => {
            link.addEventListener('click', function() {
                const fileName = this.getAttribute('download') || this.href.split('/').pop();
                trackEvent('file_download', {
                    file_name: fileName,
                    file_url: this.href,
                    page: document.title
                });
            });
        });
        
        // ========================================
        // 10. RASTREAMENTO DE LINKS EXTERNOS
        // ========================================
        document.querySelectorAll('a[href^="http"]').forEach(link => {
            // Verificar se não é link interno
            if (!link.href.includes(window.location.hostname)) {
                link.addEventListener('click', function() {
                    trackEvent('external_link_click', {
                        url: this.href,
                        link_text: this.textContent.trim(),
                        page: document.title
                    });
                });
            }
        });
        
        // ========================================
        // 11. RASTREAMENTO DE ERROS 404
        // ========================================
        if (document.title.includes('404') || window.location.pathname.includes('404')) {
            trackEvent('page_404', {
                attempted_url: window.location.pathname,
                referrer: document.referrer
            });
        }
        
        // ========================================
        // 12. RASTREAMENTO DE BUSCA (se houver)
        // ========================================
        const searchForms = document.querySelectorAll('form[role="search"], .search-form');
        searchForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const searchInput = this.querySelector('input[type="search"], input[name="q"], input[name="search"]');
                if (searchInput) {
                    trackEvent('search', {
                        search_term: searchInput.value,
                        page: document.title
                    });
                }
            });
        });
});
</script>

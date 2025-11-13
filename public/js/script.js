// Inicialização quando o DOM estiver carregado
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar todas as funcionalidades
    initPreloader();
    initNavigation();
    initAnimations();
    initCounters();
    initFormHandling();
    initScrollEffects();
    initParticles();
    initTypingEffect();
    initSmoothScroll();
    
    // Remover preloader após carregamento
    window.addEventListener('load', function() {
        setTimeout(() => {
            const preloader = document.getElementById('preloader');
            const navbar = document.getElementById('navbar');
            
            if (preloader) {
                // Fade out mais suave do preloader
                preloader.style.transition = 'opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                preloader.style.opacity = '0';
                
                setTimeout(() => {
                    preloader.style.display = 'none';
                    
                    // Remover classe loading e mostrar conteúdo
                    document.body.classList.remove('loading');
                    
                    // Mostrar navbar com delay suave
                    setTimeout(() => {
                        if (navbar) {
                            navbar.classList.add('show');
                        }
                    }, 100);
                    
                }, 800);
            }
        }, 800); // Reduzido de 1000ms para 800ms
    });
});

// Função do Preloader
function initPreloader() {
    const preloader = document.getElementById('preloader');
    if (!preloader) return;
    
    // Animação mais fluida do scanner
    const scanner = preloader.querySelector('.scanner');
    if (scanner) {
        let dots = 0;
        const interval = setInterval(() => {
            dots = (dots + 1) % 4;
            scanner.style.transition = 'all 0.3s ease';
            scanner.textContent = 'Sintrix' + '.'.repeat(dots);
        }, 400); // Mais rápido para parecer mais fluido
        
        setTimeout(() => {
            clearInterval(interval);
            scanner.style.transition = 'all 0.5s ease';
            scanner.textContent = 'Sintrix';
        }, 2500); // Reduzido de 3000ms
    }
}

// Navegação e Menu Mobile
function initNavigation() {
    // Aguardar um pouco se os elementos não estiverem prontos
    const checkAndInit = () => {
        const navbar = document.getElementById('navbar');
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        const navLinks = document.querySelectorAll('.nav-link, .dropdown-item');
        
        // Se os elementos não existirem ainda, tentar novamente em 100ms
        if (!navbar || !hamburger || !navMenu) {
            setTimeout(checkAndInit, 100);
            return;
        }
        
        // Scroll effect na navbar
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Toggle menu mobile
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        // Fechar menu ao clicar em link (exceto dropdown toggle)
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                // Se for um dropdown toggle, apenas alternar o dropdown
                if (link.classList.contains('dropdown-toggle')) {
                    e.preventDefault();
                    const dropdown = link.closest('.nav-dropdown');
                    
                    // Fechar outros dropdowns abertos
                    document.querySelectorAll('.nav-dropdown.open').forEach(openDropdown => {
                        if (openDropdown !== dropdown) {
                            openDropdown.classList.remove('open');
                        }
                    });
                    
                    // Alternar o dropdown atual
                    dropdown.classList.toggle('open');
                } else if (!link.classList.contains('dropdown-item')) {
                    // Se não for um item de dropdown, fechar o menu
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                    // Fechar todos os dropdowns
                    document.querySelectorAll('.nav-dropdown.open').forEach(dropdown => {
                        dropdown.classList.remove('open');
                    });
                } else {
                    // Se for um item de dropdown, fechar apenas o menu principal
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                    // Fechar todos os dropdowns
                    document.querySelectorAll('.nav-dropdown.open').forEach(dropdown => {
                        dropdown.classList.remove('open');
                    });
                }
            });
        });
        
        // Fechar menu ao clicar fora
        document.addEventListener('click', (e) => {
            if (!navbar.contains(e.target)) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                // Fechar todos os dropdowns
                document.querySelectorAll('.nav-dropdown.open').forEach(dropdown => {
                    dropdown.classList.remove('open');
                });
            }
        });
        
        // Destacar link ativo baseado na seção
        function updateActiveLink() {
            const sections = document.querySelectorAll('section[id]');
            const scrollPos = window.scrollY + 100;
            
            sections.forEach(section => {
                const top = section.offsetTop;
                const bottom = top + section.offsetHeight;
                const id = section.getAttribute('id');
                const link = document.querySelector(`.nav-link[href="#${id}"]`);
                
                if (scrollPos >= top && scrollPos < bottom) {
                    navLinks.forEach(l => l.classList.remove('active'));
                    if (link) link.classList.add('active');
                }
            });
        }
        
        window.addEventListener('scroll', updateActiveLink);
    };
    
    checkAndInit();
}

// Inicializar AOS (Animate On Scroll)
function initAnimations() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    }
    
    // Animações customizadas de scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                
                // Animação especial para cards
                if (entry.target.classList.contains('service-card') || 
                    entry.target.classList.contains('solution-card')) {
                    setTimeout(() => {
                        entry.target.style.transform = 'translateY(0)';
                        entry.target.style.opacity = '1';
                    }, 100);
                }
            }
        });
    }, observerOptions);
    
    // Observar elementos para animação
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
}

// Contador animado
function initCounters() {
    const counters = document.querySelectorAll('.stat-number[data-count]');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000; // 2 segundos
        const step = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
                counter.classList.add('counter-animation');
            }
        };
        
        updateCounter();
    };
    
    // Observer para iniciar contador quando visível
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

// Manipulação do formulário de contato
function initFormHandling() {
    const contactForm = document.getElementById('contactForm');
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validação personalizada
        if (validateForm(this)) {
            // Simular envio
            showLoading(this);
            
            setTimeout(() => {
                showSuccess();
                this.reset();
            }, 2000);
        }
    });
    
    // Validação em tempo real
    const inputs = contactForm.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', () => validateField(input));
        input.addEventListener('input', () => clearFieldError(input));
    });
}

function validateForm(form) {
    let isValid = true;
    const fields = form.querySelectorAll('input[required], select[required], textarea[required]');
    
    fields.forEach(field => {
        if (!validateField(field)) {
            isValid = false;
        }
    });
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';
    
    // Limpar erro anterior
    clearFieldError(field);
    
    // Validação obrigatória
    if (field.hasAttribute('required') && !value) {
        errorMessage = 'Este campo é obrigatório';
        isValid = false;
    }
    
    // Validação de email
    if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            errorMessage = 'Email inválido';
            isValid = false;
        }
    }
    
    // Validação de telefone
    if (field.type === 'tel' && value) {
        const phoneRegex = /^[\d\s\-\(\)\+]{10,}$/;
        if (!phoneRegex.test(value)) {
            errorMessage = 'Telefone inválido';
            isValid = false;
        }
    }
    
    if (!isValid) {
        showFieldError(field, errorMessage);
    }
    
    return isValid;
}

function showFieldError(field, message) {
    field.classList.add('error');
    
    let errorElement = field.parentNode.querySelector('.error-message');
    if (!errorElement) {
        errorElement = document.createElement('span');
        errorElement.className = 'error-message';
        field.parentNode.appendChild(errorElement);
    }
    
    errorElement.textContent = message;
}

function clearFieldError(field) {
    field.classList.remove('error');
    const errorElement = field.parentNode.querySelector('.error-message');
    if (errorElement) {
        errorElement.remove();
    }
}

function showLoading(form) {
    const submitBtn = form.querySelector('button[type="submit"]');
    if (submitBtn) {
        submitBtn.innerHTML = '<div class="spinner"></div> Enviando...';
        submitBtn.disabled = true;
    }
}

function showSuccess() {
    // Criar notificação de sucesso
    const notification = document.createElement('div');
    notification.className = 'notification success';
    notification.innerHTML = `
        <i class="fas fa-check-circle"></i>
        <span>Mensagem enviada com sucesso!</span>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
    
    // Resetar botão
    const submitBtn = document.querySelector('#contactForm button[type="submit"]');
    if (submitBtn) {
        submitBtn.innerHTML = '<span>Enviar Mensagem</span><i class="fas fa-paper-plane"></i>';
        submitBtn.disabled = false;
    }
}

// Efeitos de scroll
function initScrollEffects() {
    // Parallax simples para elementos flutuantes
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.parallax-element');
        
        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
    
    // Efeito de scroll suave para indicador
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        window.addEventListener('scroll', () => {
            const opacity = Math.max(0, 1 - window.scrollY / 500);
            scrollIndicator.style.opacity = opacity;
        });
    }
}

// Sistema de partículas
function initParticles() {
    const particleContainer = document.querySelector('.hero-background');
    if (!particleContainer) return;
    
    function createParticle() {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Posição aleatória
        particle.style.left = Math.random() * 100 + 'vw';
        particle.style.top = '100vh';
        
        // Tamanho aleatório
        const size = Math.random() * 4 + 2;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        
        // Duração aleatória
        const duration = Math.random() * 3 + 2;
        particle.style.animationDuration = duration + 's';
        
        particleContainer.appendChild(particle);
        
        // Remover após animação
        setTimeout(() => {
            if (particle.parentNode) {
                particle.parentNode.removeChild(particle);
            }
        }, duration * 1000);
    }
    
    // Criar partículas periodicamente
    setInterval(createParticle, 300);
}

// Efeito de digitação
function initTypingEffect() {
    const typingElements = document.querySelectorAll('.typing-effect');
    
    typingElements.forEach(element => {
        const text = element.textContent;
        element.textContent = '';
        element.style.borderRight = '2px solid var(--primary-color)';
        
        let i = 0;
        const typeWriter = () => {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            } else {
                // Efeito de piscar cursor
                setInterval(() => {
                    element.style.borderRightColor = 
                        element.style.borderRightColor === 'transparent' ? 
                        'var(--primary-color)' : 'transparent';
                }, 500);
            }
        };
        
        // Iniciar quando elemento ficar visível
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(typeWriter, 500);
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(element);
    });
}

// Scroll suave para âncoras
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Verificar se o href é válido (não é apenas '#')
            if (href && href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Altura da navbar
                    
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

// Função utilitária para debounce
function debounce(func, wait, immediate) {
    let timeout;
    return function executedFunction() {
        const context = this;
        const args = arguments;
        
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        
        if (callNow) func.apply(context, args);
    };
}

// Otimização de performance para scroll
const optimizedScrollHandler = debounce(() => {
    // Handlers de scroll otimizados aqui
}, 10);

window.addEventListener('scroll', optimizedScrollHandler);

// Função para detectar dispositivo móvel
function isMobile() {
    return window.innerWidth <= 768;
}

// Ajustes para dispositivos móveis
if (isMobile()) {
    // Reduzir animações em dispositivos móveis
    document.documentElement.style.setProperty('--transition-smooth', 'all 0.2s ease');
    
    // Desabilitar algumas animações pesadas
    const heavyAnimations = document.querySelectorAll('.floating-element');
    heavyAnimations.forEach(el => {
        el.style.animation = 'none';
    });
}

// Função para lazy loading de imagens
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Função para modo escuro (se necessário)
function initThemeToggle() {
    const themeToggle = document.getElementById('theme-toggle');
    if (!themeToggle) return;
    
    themeToggle.addEventListener('click', () => {
        document.body.classList.toggle('light-theme');
        localStorage.setItem('theme', 
            document.body.classList.contains('light-theme') ? 'light' : 'dark'
        );
    });
    
    // Carregar tema salvo
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'light') {
        document.body.classList.add('light-theme');
    }
}

// Tratamento de erros global
window.addEventListener('error', function(e) {
    console.error('Erro na aplicação:', e.error);
    // Aqui você pode implementar um sistema de log de erros
});

// Service Worker para cache (se necessário)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registrado com sucesso:', registration);
            })
            .catch(registrationError => {
                console.log('Falha no registro do SW:', registrationError);
            });
    });
}

// Função para analytics (Google Analytics, etc.)
function initAnalytics() {
    // Implementar tracking de eventos
    document.querySelectorAll('a[href^="mailto:"], a[href^="tel:"]').forEach(link => {
        link.addEventListener('click', () => {
            // gtag('event', 'contact_click', { method: link.href.split(':')[0] });
        });
    });
    
    // Tracking de scroll depth
    let maxScroll = 0;
    window.addEventListener('scroll', () => {
        const scrollPercent = Math.round(
            (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100
        );
        
        if (scrollPercent > maxScroll && scrollPercent % 25 === 0) {
            maxScroll = scrollPercent;
            // gtag('event', 'scroll_depth', { value: scrollPercent });
        }
    });
}

// Inicializar analytics
// initAnalytics();
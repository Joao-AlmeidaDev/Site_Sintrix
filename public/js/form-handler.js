/**
 * Manipulador Universal de Formulários
 * Processa todos os formulários de contato do site
 */

(function() {
    'use strict';

    // IDs de formulários para processar
    const formIds = [
        'contactForm',
        'vpnForm',
        'vpnContactForm',
        'voipForm',
        'rhdocsForm',
        'whatsappForm',
        'medplacesForm',
        'emailForm',
        'cloudForm'
    ];

    // Mapeamento de campos dos formulários
    const fieldMappings = {
        // Campos comuns
        'name': 'nome',
        'nome': 'nome',
        'email': 'email',
        'phone': 'telefone',
        'telefone': 'telefone',
        'company': 'empresa',
        'empresa': 'empresa',
        'message': 'mensagem',
        'mensagem': 'mensagem',
        
        // Campos de serviço/interesse
        'service': 'assunto',
        'storage': 'assunto',
        'plan': 'assunto',
        'plano': 'assunto',
        'subject': 'assunto',
        'assunto': 'assunto',
        
        // Campos específicos das páginas (vão como informação adicional na mensagem)
        'users': 'info_adicional',
        'usuarios': 'info_adicional',
        'employees': 'info_adicional',
        'funcionarios': 'info_adicional'
    };

    /**
     * Inicializa um formulário específico
     */
    function initializeForm(form, formId) {
        // Prevenir submissão padrão imediatamente
        form.setAttribute('onsubmit', 'return false;');
        
        // Remover listeners antigos se existirem
        const newForm = form.cloneNode(true);
        form.parentNode.replaceChild(newForm, form);
        
        // Re-aplicar prevenção inline
        newForm.setAttribute('onsubmit', 'return false;');

        // Adicionar novo listener
        newForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            e.stopPropagation();
            await handleFormSubmit(this, formId);
        }, true); // Use capture phase
    }

    // Inicializar IMEDIATAMENTE ao carregar script
    function initializeForms() {
        formIds.forEach(formId => {
            const form = document.getElementById(formId);
            if (form) {
                initializeForm(form, formId);
            }
        });
    }

    // Tentar inicializar imediatamente
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeForms);
    } else {
        // DOM já carregado
        initializeForms();
    }

    // Delegação de eventos como fallback adicional
    document.addEventListener('submit', function(e) {
        const form = e.target;
        if (form && formIds.includes(form.id)) {
            e.preventDefault();
            e.stopPropagation();
        }
    }, true);

    /**
     * Processa o envio do formulário
     */
    async function handleFormSubmit(form, formId) {
        // Validar formulário
        if (!validateForm(form)) {
            return;
        }

        // Coletar dados do formulário
        const formData = collectFormData(form);
        
        // Adicionar identificador do formulário
        formData.append('form_id', formId);

        // Mostrar loading
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalContent = submitBtn.innerHTML;
        showLoading(submitBtn);

        try {
            // Determinar o caminho correto baseado na localização da página
            const isInSubfolder = window.location.pathname.includes('/pages/');
            const actionUrl = isInSubfolder 
                ? '../pages/process-contact.php' 
                : 'pages/process-contact.php';

            // Enviar dados
            const response = await fetch(actionUrl, {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();

            if (result.success) {
                showSuccess(result.message || 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
                form.reset();

                // Rastrear conversão no Analytics
                if (typeof trackEvent === 'function') {
                    trackEvent('form_submission_success', {
                        form_id: formId,
                        page: window.location.pathname
                    });
                }
            } else {
                showError(result.message || 'Erro ao enviar mensagem. Tente novamente.');
                console.error('Erro no envio:', result);
            }
        } catch (error) {
            console.error('Erro ao enviar formulário:', error);
            showError('Erro ao enviar mensagem. Verifique sua conexão e tente novamente.');
        } finally {
            resetButton(submitBtn, originalContent);
        }
    }

    /**
     * Coleta os dados do formulário e normaliza os nomes dos campos
     */
    function collectFormData(form) {
        const formData = new FormData();
        const inputs = form.querySelectorAll('input, select, textarea');
        let infoAdicional = [];

        inputs.forEach(input => {
            const fieldName = input.name || input.id;
            const value = input.value.trim();

            if (fieldName && value) {
                const mappedName = fieldMappings[fieldName];
                
                if (mappedName === 'info_adicional') {
                    // Pegar o label do campo
                    let label = fieldName;
                    
                    // Tentar pegar o label do elemento anterior ou do option selecionado
                    if (input.tagName === 'SELECT') {
                        // Para select, pegar o texto da opção selecionada
                        const selectedText = input.options[input.selectedIndex]?.text || value;
                        label = input.previousElementSibling?.textContent?.trim() || 
                                fieldName.replace(/_/g, ' ');
                        infoAdicional.push(`${label}: ${selectedText}`);
                    } else {
                        label = input.previousElementSibling?.textContent?.trim() || 
                                fieldName.replace(/_/g, ' ');
                        infoAdicional.push(`${label}: ${value}`);
                    }
                } else if (mappedName) {
                    // Campos mapeados normalmente
                    formData.append(mappedName, value);
                } else {
                    // Campos não mapeados também vão para info adicional
                    let label = input.previousElementSibling?.textContent?.trim() || 
                                fieldName.replace(/_/g, ' ');
                    
                    if (input.tagName === 'SELECT') {
                        const selectedText = input.options[input.selectedIndex]?.text || value;
                        infoAdicional.push(`${label}: ${selectedText}`);
                    } else {
                        infoAdicional.push(`${label}: ${value}`);
                    }
                }
            }
        });

        // Adicionar informações adicionais à mensagem
        if (infoAdicional.length > 0) {
            const currentMessage = formData.get('mensagem') || '';
            const additionalText = '\n\n--- Detalhes do Serviço ---\n' + infoAdicional.join('\n');
            formData.set('mensagem', (currentMessage || 'Solicitação de orçamento/informações') + additionalText);
        }

        // Garantir que campos obrigatórios existam
        ['nome', 'email', 'telefone', 'empresa', 'assunto', 'mensagem'].forEach(field => {
            if (!formData.has(field)) {
                formData.append(field, '');
            }
        });

        return formData;
    }

    /**
     * Valida os campos do formulário
     */
    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');

        requiredFields.forEach(field => {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        return isValid;
    }

    /**
     * Valida um campo individual
     */
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
        if ((field.type === 'tel' || field.name === 'phone' || field.name === 'telefone') && value) {
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

    /**
     * Mostra erro em um campo específico
     */
    function showFieldError(field, message) {
        field.classList.add('error');

        let errorElement = field.parentNode.querySelector('.error-message');
        if (!errorElement) {
            errorElement = document.createElement('span');
            errorElement.className = 'error-message';
            errorElement.style.color = '#f44336';
            errorElement.style.fontSize = '0.875rem';
            errorElement.style.marginTop = '0.25rem';
            errorElement.style.display = 'block';
            field.parentNode.appendChild(errorElement);
        }

        errorElement.textContent = message;
    }

    /**
     * Limpa erro de um campo
     */
    function clearFieldError(field) {
        field.classList.remove('error');
        const errorElement = field.parentNode.querySelector('.error-message');
        if (errorElement) {
            errorElement.remove();
        }
    }

    /**
     * Mostra loading no botão
     */
    function showLoading(button) {
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
        button.disabled = true;
    }

    /**
     * Reseta o botão ao estado original
     */
    function resetButton(button, originalContent) {
        button.innerHTML = originalContent;
        button.disabled = false;
    }

    /**
     * Mostra notificação de sucesso
     */
    function showSuccess(message) {
        showNotification(message, 'success');
    }

    /**
     * Mostra notificação de erro
     */
    function showError(message) {
        showNotification(message, 'error');
    }

    /**
     * Mostra notificação genérica
     */
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? 'rgba(76, 175, 80, 0.95)' : 'rgba(244, 67, 54, 0.95)'};
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            z-index: 10000;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            max-width: 400px;
        `;

        const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
        notification.innerHTML = `
            <i class="fas ${icon}"></i>
            <span>${message}</span>
        `;

        document.body.appendChild(notification);

        // Animar entrada
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);

        // Remover após 5 segundos
        setTimeout(() => {
            notification.style.transform = 'translateX(400px)';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 5000);
    }

})();

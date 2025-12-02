<?php
$base = (strpos($_SERVER['REQUEST_URI'], '/pages/') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include __DIR__ . '/../includes/google-analytics.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de Uso - Sintrix</title>
    <link rel="stylesheet" href="<?php echo $base; ?>public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .legal-page {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.9), rgba(15, 52, 96, 0.8));
            min-height: 100vh;
            padding: 120px 0 80px;
        }
        
        .legal-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .legal-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .legal-header h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #ffffff, var(--primary-color));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .legal-header .last-update {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.95rem;
        }
        
        .legal-content {
            background: linear-gradient(135deg, rgba(26, 26, 46, 0.9), rgba(15, 52, 96, 0.7));
            border: 1px solid rgba(0, 212, 255, 0.2);
            border-radius: 25px;
            padding: 50px;
        }
        
        .legal-content h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-top: 40px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .legal-content h2:first-child {
            margin-top: 0;
        }
        
        .legal-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #ffffff;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        
        .legal-content p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
            margin-bottom: 15px;
        }
        
        .legal-content ul {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
            margin-bottom: 20px;
            padding-left: 30px;
        }
        
        .legal-content li {
            margin-bottom: 10px;
        }
        
        .legal-content strong {
            color: #ffffff;
        }
        
        .highlight-box {
            background: rgba(0, 212, 255, 0.1);
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .back-button:hover {
            background: rgba(0, 212, 255, 0.2);
            transform: translateX(-5px);
        }
        
        @media (max-width: 768px) {
            .legal-page {
                padding: 100px 0 60px;
            }
            
            .legal-header h1 {
                font-size: 2rem;
            }
            
            .legal-content {
                padding: 30px 20px;
            }
            
            .legal-content h2 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    
    <section class="legal-page">
        <div class="legal-container">
            <a href="<?php echo $base; ?>index.php" class="back-button">
                <i class="fas fa-arrow-left"></i>
                <span>Voltar para o Site</span>
            </a>
            
            <div class="legal-header">
                <h1><i class="fas fa-file-contract"></i> Termos de Uso</h1>
                <p class="last-update">Última atualização: 01 de dezembro de 2025</p>
            </div>
            
            <div class="legal-content">
                <div class="highlight-box">
                    <p><strong>Importante:</strong> Ao acessar e usar os serviços da Sintrix, você concorda em estar vinculado a estes Termos de Uso. Se você não concordar com estes termos, não use nossos serviços.</p>
                </div>
                
                <h2><i class="fas fa-handshake"></i> 1. Aceitação dos Termos</h2>
                <p>Estes Termos de Uso ("Termos") regem seu acesso e uso dos serviços, produtos e website da Sintrix Soluções Tecnológicas ("Sintrix", "nós", "nosso"). Ao utilizar nossos serviços, você concorda com estes termos e nossa <a href="politica-privacidade.php" style="color: var(--primary-color);">Política de Privacidade</a>.</p>
                
                <h2><i class="fas fa-briefcase"></i> 2. Descrição dos Serviços</h2>
                <p>A Sintrix oferece soluções tecnológicas empresariais, incluindo mas não limitado a:</p>
                <ul>
                    <li><strong>Cloud Data:</strong> Armazenamento em nuvem privado e seguro</li>
                    <li><strong>Email Corporativo:</strong> Serviços de e-mail profissional</li>
                    <li><strong>VPN Corporativa:</strong> Rede privada virtual para empresas</li>
                    <li><strong>Telefonia VoIP:</strong> Sistema de telefonia pela internet</li>
                    <li><strong>RHDocs:</strong> Sistema de gestão documental</li>
                    <li><strong>Messenger Pro:</strong> Comunicação empresarial instantânea</li>
                    <li><strong>MedPlaces:</strong> Gestão de clínicas e consultórios</li>
                </ul>
                
                <h2><i class="fas fa-user-check"></i> 3. Elegibilidade e Conta</h2>
                
                <h3>3.1 Requisitos de Elegibilidade</h3>
                <ul>
                    <li>Você deve ter pelo menos 18 anos para usar nossos serviços</li>
                    <li>Você deve fornecer informações verdadeiras, precisas e completas</li>
                    <li>Você deve ter autoridade para vincular sua empresa a estes termos</li>
                    <li>Você não pode estar proibido de receber nossos serviços por lei</li>
                </ul>
                
                <h3>3.2 Responsabilidade da Conta</h3>
                <ul>
                    <li>Você é responsável por manter a confidencialidade de suas credenciais</li>
                    <li>Você é responsável por todas as atividades que ocorrem em sua conta</li>
                    <li>Notifique-nos imediatamente sobre qualquer uso não autorizado</li>
                    <li>Não compartilhe suas credenciais com terceiros</li>
                </ul>
                
                <h2><i class="fas fa-ban"></i> 4. Uso Aceitável</h2>
                <p>Você concorda em NÃO usar nossos serviços para:</p>
                <ul>
                    <li>Violar leis, regulamentos ou direitos de terceiros</li>
                    <li>Enviar spam, malware ou conteúdo malicioso</li>
                    <li>Realizar atividades fraudulentas ou enganosas</li>
                    <li>Interferir ou interromper nossos serviços ou servidores</li>
                    <li>Acessar sistemas ou dados sem autorização</li>
                    <li>Fazer engenharia reversa de nossos serviços</li>
                    <li>Revender ou redistribuir nossos serviços sem autorização</li>
                    <li>Armazenar conteúdo ilegal, ofensivo ou que viole direitos autorais</li>
                </ul>
                
                <h2><i class="fas fa-credit-card"></i> 5. Pagamentos e Faturamento</h2>
                
                <h3>5.1 Preços e Planos</h3>
                <ul>
                    <li>Os preços estão listados em Reais (R$) e sujeitos a alterações</li>
                    <li>Você será notificado com antecedência sobre mudanças de preço</li>
                    <li>Planos podem ter diferentes recursos e limitações</li>
                </ul>
                
                <h3>5.2 Cobrança e Renovação</h3>
                <ul>
                    <li>Serviços são cobrados mensalmente ou conforme plano contratado</li>
                    <li>Pagamentos são processados automaticamente na data de vencimento</li>
                    <li>Renovação automática a menos que cancelada antes do período</li>
                    <li>Taxas de atraso podem ser aplicadas em pagamentos em atraso</li>
                </ul>
                
                <h3>5.3 Reembolsos</h3>
                <ul>
                    <li>Oferecemos garantia de 30 dias para novos clientes</li>
                    <li>Reembolsos são processados no método de pagamento original</li>
                    <li>Serviços já utilizados podem ter reembolso proporcional</li>
                </ul>
                
                <h2><i class="fas fa-shield-alt"></i> 6. Propriedade Intelectual</h2>
                
                <h3>6.1 Propriedade da Sintrix</h3>
                <p>Todos os direitos, títulos e interesses em nossos serviços, incluindo software, designs, marcas e conteúdo, pertencem à Sintrix e são protegidos por leis de propriedade intelectual.</p>
                
                <h3>6.2 Seus Dados</h3>
                <p>Você mantém todos os direitos sobre seus dados armazenados em nossos serviços. Concedemos apenas a licença necessária para fornecer os serviços.</p>
                
                <h2><i class="fas fa-exclamation-triangle"></i> 7. Limitação de Responsabilidade</h2>
                
                <div class="highlight-box">
                    <p><strong>IMPORTANTE:</strong> Na máxima extensão permitida por lei:</p>
                </div>
                
                <ul>
                    <li>Nossos serviços são fornecidos "como estão" e "conforme disponíveis"</li>
                    <li>Não garantimos operação ininterrupta ou livre de erros</li>
                    <li>Não somos responsáveis por perdas de dados causadas por você</li>
                    <li>Nossa responsabilidade total é limitada aos valores pagos nos últimos 12 meses</li>
                    <li>Não somos responsáveis por danos indiretos, incidentais ou consequenciais</li>
                    <li>Você é responsável por manter backups de seus dados</li>
                </ul>
                
                <h2><i class="fas fa-check-circle"></i> 8. Garantias e SLA</h2>
                
                <h3>8.1 Garantia de Uptime</h3>
                <ul>
                    <li>Garantimos 99,9% de disponibilidade mensal conforme SLA</li>
                    <li>Manutenções programadas são notificadas com antecedência</li>
                    <li>Créditos podem ser aplicados por falhas no SLA</li>
                </ul>
                
                <h3>8.2 Suporte Técnico</h3>
                <ul>
                    <li>Suporte disponível conforme plano contratado</li>
                    <li>Tempos de resposta variam de acordo com prioridade</li>
                    <li>Suporte 24/7 disponível em planos Enterprise</li>
                </ul>
                
                <h2><i class="fas fa-times-circle"></i> 9. Suspensão e Rescisão</h2>
                
                <h3>9.1 Por Você</h3>
                <ul>
                    <li>Você pode cancelar seus serviços a qualquer momento</li>
                    <li>Cancelamento deve ser feito antes da próxima data de cobrança</li>
                    <li>Você pode exportar seus dados antes do cancelamento</li>
                </ul>
                
                <h3>9.2 Por Nós</h3>
                <p>Podemos suspender ou encerrar seus serviços se:</p>
                <ul>
                    <li>Você violar estes Termos de Uso</li>
                    <li>Seu pagamento estiver em atraso por mais de 15 dias</li>
                    <li>Você usar os serviços para atividades ilegais</li>
                    <li>Houver risco à segurança ou integridade de nossos sistemas</li>
                </ul>
                
                <h3>9.3 Efeitos da Rescisão</h3>
                <ul>
                    <li>Acesso aos serviços será interrompido imediatamente</li>
                    <li>Dados podem ser mantidos por 30 dias para recuperação</li>
                    <li>Após 30 dias, dados são permanentemente excluídos</li>
                </ul>
                
                <h2><i class="fas fa-lock"></i> 10. Confidencialidade</h2>
                <p>Ambas as partes concordam em:</p>
                <ul>
                    <li>Manter informações confidenciais em sigilo</li>
                    <li>Usar informações confidenciais apenas para fins do serviço</li>
                    <li>Não divulgar informações confidenciais a terceiros sem autorização</li>
                    <li>Proteger informações confidenciais com medidas de segurança adequadas</li>
                </ul>
                
                <h2><i class="fas fa-gavel"></i> 11. Lei Aplicável e Jurisdição</h2>
                <p>Estes Termos são regidos pelas leis do Brasil. Qualquer disputa será resolvida nos tribunais de São Paulo, SP, Brasil.</p>
                
                <h2><i class="fas fa-edit"></i> 12. Modificações dos Termos</h2>
                <p>Reservamos o direito de modificar estes termos a qualquer momento. Mudanças significativas serão notificadas com pelo menos 30 dias de antecedência através de:</p>
                <ul>
                    <li>E-mail para o endereço cadastrado</li>
                    <li>Aviso em nosso website</li>
                    <li>Notificação em sua conta</li>
                </ul>
                <p>O uso continuado dos serviços após as mudanças constitui aceitação dos novos termos.</p>
                
                <h2><i class="fas fa-balance-scale"></i> 13. Disposições Gerais</h2>
                
                <h3>13.1 Acordo Completo</h3>
                <p>Estes Termos, juntamente com a Política de Privacidade, constituem o acordo completo entre você e a Sintrix.</p>
                
                <h3>13.2 Renúncia</h3>
                <p>A falha em exercer qualquer direito não constitui renúncia desse direito.</p>
                
                <h3>13.3 Divisibilidade</h3>
                <p>Se qualquer disposição for considerada inválida, as demais permanecerão em vigor.</p>
                
                <h3>13.4 Cessão</h3>
                <p>Você não pode transferir seus direitos sem nossa autorização prévia por escrito.</p>
                
                <h2><i class="fas fa-envelope"></i> 14. Contato</h2>
                <p>Para questões sobre estes Termos de Uso ou nossos serviços:</p>
                
                <div class="highlight-box">
                    <p><strong>Sintrix Soluções Tecnológicas</strong></p>
                    <p>📧 E-mail: contato@sintrix.com.br</p>
                    <p>📱 Telefone: (11) 97377-4109</p>
                    <p>🌐 Site: www.sintrix.com.br</p>
                    <p>⚖️ Jurídico: juridico@sintrix.com.br</p>
                </div>
                
                <div class="highlight-box" style="margin-top: 40px; background: rgba(138, 43, 226, 0.1); border-left-color: #8a2be2;">
                    <p><strong>Ao usar os serviços da Sintrix, você reconhece que leu, compreendeu e concorda em estar vinculado a estes Termos de Uso.</strong></p>
                </div>
            </div>
        </div>
    </section>
    
    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <?php include __DIR__ . '/../includes/cookie-banner.php'; ?>
    <?php include __DIR__ . '/../includes/analytics-tracking.php'; ?>
    <script src="<?php echo $base; ?>public/js/script.js"></script>
</body>
</html>

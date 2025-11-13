<?php
/**
 * Configurações Principais do Site
 * Sintrix Technology
 */

// Configurações do Site
define('SITE_NAME', 'Sintrix Technology');
define('SITE_TAGLINE', '23 Anos de Inovação em TI');
define('SITE_URL', 'https://sintrixtechnology.com.br');
define('SITE_EMAIL', 'contato@sintrixtechnology.com.br');
define('SITE_PHONE', '(11) 99999-9999');
define('SITE_ADDRESS', 'Rua da Tecnologia, 123 - Centro - Cidade/SP');
define('SITE_YEAR', date('Y'));

// Configurações de Desenvolvimento
define('DEBUG_MODE', true);
define('ENVIRONMENT', 'development'); // development, staging, production

// Configurações de Caminhos
define('BASE_PATH', __DIR__ . '/..');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('PAGES_PATH', BASE_PATH . '/pages');
define('PUBLIC_PATH', BASE_PATH . '/public');

// URLs dos Projetos
define('RHDOCS_URL', 'https://rhdocs.com.br');
define('MEDPLACES_URL', 'https://medplaces.org');

// Configurações de SEO
$seo_config = [
    'default_title' => SITE_NAME . ' - ' . SITE_TAGLINE,
    'default_description' => '23 anos de excelência em serviços de TI, oferecendo soluções inovadoras e seguras para impulsionar o seu negócio no mundo digital.',
    'default_keywords' => 'TI, tecnologia, serviços, consultoria, helpdesk, servidores, segurança, dados, RHDocs, MedPlaces, WhatsApp Bot, VoIP',
    'default_image' => '/public/assets/og-image.jpg'
];

// Configurações de Contato
$contact_config = [
    'email' => SITE_EMAIL,
    'phone' => SITE_PHONE,
    'whatsapp' => '5511999999999',
    'address' => SITE_ADDRESS,
    'business_hours' => 'Segunda a Sexta: 8h às 18h',
    'support_24_7' => true
];

// Configurações de Redes Sociais
$social_config = [
    'linkedin' => '#',
    'facebook' => '#',
    'instagram' => '#',
    'twitter' => '#',
    'youtube' => '#'
];

// Configurações de Serviços
$services_config = [
    'helpdesk' => [
        'name' => 'Helpdesk Especializado',
        'description' => 'Suporte técnico completo com atendimento especializado',
        'features' => ['Suporte 24/7', 'Resolução rápida', 'Equipe especializada']
    ],
    'consultoria' => [
        'name' => 'Consultoria em TI',
        'description' => 'Análise estratégica e planejamento tecnológico',
        'features' => ['Análise estratégica', 'Planejamento tech', 'Otimização de processos']
    ],
    'servidores' => [
        'name' => 'Gerenciamento de Servidores',
        'description' => 'Implantação, configuração e monitoramento de servidores',
        'features' => ['Implantação completa', 'Monitoramento 24/7', 'Alta disponibilidade']
    ],
    'seguranca' => [
        'name' => 'Segurança de Dados',
        'description' => 'Proteção avançada contra ameaças digitais',
        'features' => ['Backup automatizado', 'Proteção avançada', 'Monitoramento contínuo']
    ],
    'manutencao' => [
        'name' => 'Manutenção de Hardware e Software',
        'description' => 'Manutenção preventiva e corretiva de equipamentos',
        'features' => ['Manutenção preventiva', 'Reparo especializado', 'Otimização de performance']
    ]
];

// Configurações de Soluções
$solutions_config = [
    'rhdocs' => [
        'name' => 'RHDocs',
        'description' => 'Gestão completa de holerites com distribuição automatizada',
        'category' => 'Gestão de RH',
        'url' => RHDOCS_URL,
        'icon' => 'fas fa-file-invoice'
    ],
    'medplaces' => [
        'name' => 'MedPlaces',
        'description' => 'Exames em nuvem com visualizador PACS para clínicas',
        'category' => 'Saúde Digital',
        'url' => MEDPLACES_URL,
        'icon' => 'fas fa-stethoscope'
    ],
    'whatsapp_bot' => [
        'name' => 'WhatsApp Bot',
        'description' => 'Chatbot inteligente com automação empresarial',
        'category' => 'Automação',
        'url' => 'whatsapp-bot.php',
        'icon' => 'fab fa-whatsapp'
    ],
    'telefonia_voip' => [
        'name' => 'Telefonia VoIP',
        'description' => 'Sistema próprio com equipamentos em comodato',
        'category' => 'Comunicação',
        'url' => 'telefonia-voip.php',
        'icon' => 'fas fa-phone-alt'
    ]
];

// Função para obter configuração
function getConfig($key = null) {
    global $seo_config, $contact_config, $social_config, $services_config, $solutions_config;
    
    $config = [
        'seo' => $seo_config,
        'contact' => $contact_config,
        'social' => $social_config,
        'services' => $services_config,
        'solutions' => $solutions_config
    ];
    
    if ($key) {
        return isset($config[$key]) ? $config[$key] : null;
    }
    
    return $config;
}

// Função para incluir arquivos com verificação
function includeFile($file) {
    $fullPath = INCLUDES_PATH . '/' . $file;
    if (file_exists($fullPath)) {
        include $fullPath;
    } else {
        if (DEBUG_MODE) {
            echo "<!-- Arquivo não encontrado: $fullPath -->";
        }
    }
}

// Função para gerar meta tags
function generateMetaTags($title = null, $description = null, $keywords = null, $image = null) {
    $config = getConfig('seo');
    
    $title = $title ?: $config['default_title'];
    $description = $description ?: $config['default_description'];
    $keywords = $keywords ?: $config['default_keywords'];
    $image = $image ?: $config['default_image'];
    
    $meta = '';
    $meta .= "<title>" . htmlspecialchars($title) . "</title>\n";
    $meta .= "<meta name=\"description\" content=\"" . htmlspecialchars($description) . "\">\n";
    $meta .= "<meta name=\"keywords\" content=\"" . htmlspecialchars($keywords) . "\">\n";
    $meta .= "<meta property=\"og:title\" content=\"" . htmlspecialchars($title) . "\">\n";
    $meta .= "<meta property=\"og:description\" content=\"" . htmlspecialchars($description) . "\">\n";
    $meta .= "<meta property=\"og:image\" content=\"" . SITE_URL . htmlspecialchars($image) . "\">\n";
    $meta .= "<meta property=\"og:url\" content=\"" . SITE_URL . "\">\n";
    $meta .= "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
    
    return $meta;
}

// Função para sanitizar entrada
function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

// Configurar timezone
date_default_timezone_set('America/Sao_Paulo');

// Configurar encoding
ini_set('default_charset', 'UTF-8');

// Configurar exibição de erros baseado no ambiente
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>
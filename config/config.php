<?php
/**
 * Configurações Principais do Site
 * Sintrix Technology
 */

// Configurações do Site
define('SITE_NAME', 'Sintrix Technology');
define('SITE_TAGLINE', '23 Anos de Inovação em TI');
define('SITE_URL', 'https://sintrix.com.br');
define('SITE_EMAIL', 'contato@sintrix.com.br');
define('SITE_PHONE', '(11) 97377-4109');
define('SITE_ADDRESS', 'Rua Borges Vieira, 174 - Vila Industrial - Mogi das Cruzes/SP');
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
    'default_description' => 'Sintrix Technology - 23 anos de excelência em TI! Empresa líder em Mogi das Cruzes oferecendo soluções completas: ✓ Helpdesk Especializado 24/7 ✓ Cloud Data Próprio ✓ Telefonia VoIP Empresarial ✓ VPN Corporativa Segura ✓ Email Corporativo Profissional ✓ Desenvolvimento de Software Personalizado. Conheça nossas plataformas: RHDocs (Gestão de Holerites) e MedPlaces (PACS em Nuvem). Infraestrutura robusta, segurança avançada, consultoria especializada e suporte técnico que transforma negócios. Agende uma consultoria gratuita!',
    'default_keywords' => 'sintrix, sintrix technology, empresa TI, serviços TI, tecnologia da informação, TI Mogi das Cruzes, suporte técnico, helpdesk, consultoria TI, infraestrutura TI, servidores, segurança da informação, proteção de dados, backup, cloud computing, nuvem, datacenter, VoIP, telefonia IP, telefonia empresarial, email corporativo, VPN corporativa, rede corporativa, desenvolvimento software, software personalizado, sistema gestão, RHDocs, holerite online, gestão RH, MedPlaces, exames online, PACS, sistema médico, chatbot, automação WhatsApp, messenger pro, atendimento automatizado, manutenção computadores, suporte 24/7, segurança cibernética, backup automático, recuperação dados, servidor dedicado, hospedagem, domínio, certificado digital, firewall, antivírus corporativo, monitoramento rede, help desk empresarial, outsourcing TI, terceirização TI, soluções tecnológicas, transformação digital, inovação tecnológica, TI estratégica',
    'default_image' => '/public/assets/favicon.png'
];

// Configurações de Contato
$contact_config = [
    'email' => SITE_EMAIL,
    'phone' => SITE_PHONE,
    'whatsapp' => '5511973774109',
    'address' => SITE_ADDRESS,
    'business_hours' => 'Segunda a Sexta: 8h às 17h',
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
    $meta .= "<meta name=\"author\" content=\"Sintrix Technology\">\n";
    $meta .= "<meta name=\"robots\" content=\"index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1\">\n";
    $meta .= "<link rel=\"canonical\" href=\"" . SITE_URL . "\">\n";
    
    // Open Graph (WhatsApp, Facebook, LinkedIn)
    $meta .= "<meta property=\"og:locale\" content=\"pt_BR\">\n";
    $meta .= "<meta property=\"og:type\" content=\"website\">\n";
    $meta .= "<meta property=\"og:title\" content=\"" . htmlspecialchars($title) . "\">\n";
    $meta .= "<meta property=\"og:description\" content=\"" . htmlspecialchars($description) . "\">\n";
    $meta .= "<meta property=\"og:image\" content=\"" . SITE_URL . htmlspecialchars($image) . "\">\n";
    $meta .= "<meta property=\"og:image:secure_url\" content=\"" . SITE_URL . htmlspecialchars($image) . "\">\n";
    $meta .= "<meta property=\"og:image:alt\" content=\"Sintrix Technology - 23 Anos de Inovação em TI\">\n";
    $meta .= "<meta property=\"og:image:type\" content=\"image/png\">\n";
    $meta .= "<meta property=\"og:url\" content=\"" . SITE_URL . $_SERVER['REQUEST_URI'] . "\">\n";
    $meta .= "<meta property=\"og:site_name\" content=\"Sintrix Technology\">\n";
    $meta .= "<meta property=\"article:publisher\" content=\"" . SITE_URL . "\">\n";
    
    // Twitter Card
    $meta .= "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
    $meta .= "<meta name=\"twitter:site\" content=\"@sintrix\">\n";
    $meta .= "<meta name=\"twitter:title\" content=\"" . htmlspecialchars($title) . "\">\n";
    $meta .= "<meta name=\"twitter:description\" content=\"" . htmlspecialchars($description) . "\">\n";
    $meta .= "<meta name=\"twitter:image\" content=\"" . SITE_URL . htmlspecialchars($image) . "\">\n";
    $meta .= "<meta name=\"twitter:image:alt\" content=\"Sintrix Technology - 23 Anos de Inovação em TI\">\n";
    
    // WhatsApp específico
    $meta .= "<meta property=\"og:phone_number\" content=\"+55-11-97377-4109\">\n";
    
    // Schema.org structured data
    $meta .= "<script type=\"application/ld+json\">\n";
    $meta .= "{\n";
    $meta .= "  \"@context\": \"https://schema.org\",\n";
    $meta .= "  \"@type\": \"Organization\",\n";
    $meta .= "  \"name\": \"Sintrix Technology\",\n";
    $meta .= "  \"url\": \"" . SITE_URL . "\",\n";
    $meta .= "  \"logo\": \"" . SITE_URL . "/public/assets/logo.png\",\n";
    $meta .= "  \"description\": \"" . htmlspecialchars($description) . "\",\n";
    $meta .= "  \"address\": {\n";
    $meta .= "    \"@type\": \"PostalAddress\",\n";
    $meta .= "    \"streetAddress\": \"Rua Borges Vieira, 174\",\n";
    $meta .= "    \"addressLocality\": \"Mogi das Cruzes\",\n";
    $meta .= "    \"addressRegion\": \"SP\",\n";
    $meta .= "    \"postalCode\": \"08770-100\",\n";
    $meta .= "    \"addressCountry\": \"BR\"\n";
    $meta .= "  },\n";
    $meta .= "  \"contactPoint\": {\n";
    $meta .= "    \"@type\": \"ContactPoint\",\n";
    $meta .= "    \"telephone\": \"+55-11-97377-4109\",\n";
    $meta .= "    \"contactType\": \"customer service\",\n";
    $meta .= "    \"availableLanguage\": \"Portuguese\"\n";
    $meta .= "  },\n";
    $meta .= "  \"sameAs\": [\n";
    $meta .= "    \"https://rhdocs.com.br\",\n";
    $meta .= "    \"https://medplaces.org\"\n";
    $meta .= "  ],\n";
    $meta .= "  \"areaServed\": \"BR\",\n";
    $meta .= "  \"foundingDate\": \"2002\"\n";
    $meta .= "}\n";
    $meta .= "</script>\n";
    
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
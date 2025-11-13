<?php
/**
 * Script para substituir todas as ocorrências de DHR/dhr por Sintrix
 */

echo "=== Substituindo DHR/dhr por Sintrix em todos os arquivos ===\n\n";

// Diretório atual
$directory = __DIR__;

// Padrões de substituição
$replacements = [
    'DHR' => 'Sintrix',
    'DHR Serviços em Tecnologia' => 'Sintrix Technology',
    'DHR Serviços' => 'Sintrix Technology',
    'DHR Tecnologia' => 'Sintrix Technology',
    'dhrtech.com.br' => 'sintrixtechnology.com.br',
    'dhrservicos.com.br' => 'sintrixtechnology.com.br',
    'contato@dhrtech.com.br' => 'contato@sintrixtechnology.com.br',
    'comercial@dhrtech.com.br' => 'comercial@sintrixtechnology.com.br',
    'contato@dhrservicos.com.br' => 'contato@sintrixtechnology.com.br',
    'VPN DHR' => 'VPN Sintrix',
    'DHR VoIP' => 'Sintrix VoIP',
    'VoIP DHR' => 'VoIP Sintrix',
    'Email DHR' => 'Email Sintrix',
    'DHR Cloud' => 'Sintrix Cloud',
    'WhatsApp Bot DHR' => 'WhatsApp Bot Sintrix'
];

// Função recursiva para percorrer diretórios
function processDirectory($dir, $replacements) {
    $files = glob($dir . '/*');
    
    foreach ($files as $file) {
        if (is_dir($file)) {
            // Processar subdiretórios recursivamente
            processDirectory($file, $replacements);
        } elseif (is_file($file)) {
            // Processar apenas arquivos relevantes
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array($extension, ['php', 'html', 'js', 'css', 'xml', 'txt', 'md', 'ps1'])) {
                processFile($file, $replacements);
            }
        }
    }
}

function processFile($filePath, $replacements) {
    $fileName = basename($filePath);
    
    // Pular alguns arquivos específicos
    if (in_array($fileName, ['convert_to_php.php', 'replace_dhr.php'])) {
        return;
    }
    
    echo "Processando: $fileName\n";
    
    $content = file_get_contents($filePath);
    
    if ($content === false) {
        echo "  ❌ Erro ao ler arquivo: $filePath\n";
        return;
    }
    
    $originalContent = $content;
    $changesMade = false;
    
    // Aplicar todas as substituições
    foreach ($replacements as $search => $replace) {
        $newContent = str_replace($search, $replace, $content);
        if ($newContent !== $content) {
            $content = $newContent;
            $changesMade = true;
            echo "  ✓ Substituído: '$search' → '$replace'\n";
        }
    }
    
    // Salvar arquivo se houve mudanças
    if ($changesMade) {
        if (file_put_contents($filePath, $content) !== false) {
            echo "  ✅ Arquivo atualizado com sucesso!\n";
        } else {
            echo "  ❌ Erro ao salvar arquivo: $filePath\n";
        }
    } else {
        echo "  ➖ Nenhuma alteração necessária\n";
    }
    
    echo "\n";
}

// Processar todos os arquivos
processDirectory($directory, $replacements);

echo "=== Processamento concluído! ===\n";
echo "Todas as ocorrências de DHR foram substituídas por Sintrix.\n";
?>
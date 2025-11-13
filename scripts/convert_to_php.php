<?php
/**
 * Script para converter todos os arquivos HTML para PHP
 * e adicionar os includes automaticamente
 */

echo "=== Conversor HTML para PHP com Includes ===\n\n";

// Diretório atual
$directory = __DIR__;

// Obter todos os arquivos HTML (exceto os de includes)
$htmlFiles = glob($directory . "/*.html");

// Filtrar arquivos de includes
$htmlFiles = array_filter($htmlFiles, function($file) {
    return !preg_match('/header|footer/i', basename($file));
});

echo "Arquivos HTML encontrados: " . count($htmlFiles) . "\n\n";

foreach ($htmlFiles as $htmlFile) {
    $fileName = basename($htmlFile, '.html');
    $phpFile = $directory . '/' . $fileName . '.php';
    
    echo "Processando: $fileName.html -> $fileName.php\n";
    
    // Ler conteúdo do arquivo HTML
    $content = file_get_contents($htmlFile);
    
    if ($content === false) {
        echo "  ❌ Erro ao ler arquivo: $htmlFile\n";
        continue;
    }
    
    $updated = false;
    
    // 1. Substituir navegação por include PHP
    $navPattern = '/<!--\s*Navigation\s*-->.*?<nav[^>]*class="navbar".*?<\/nav>/s';
    if (preg_match($navPattern, $content)) {
        $content = preg_replace($navPattern, '<?php include \'includes/header.php\'; ?>', $content);
        echo "  ✓ Header substituído por include PHP\n";
        $updated = true;
    }
    
    // 2. Substituir footer por include PHP
    $footerPattern = '/<!--\s*Footer\s*-->.*?<footer[^>]*class="footer".*?<\/footer>/s';
    if (preg_match($footerPattern, $content)) {
        $content = preg_replace($footerPattern, '<?php include \'includes/footer.php\'; ?>', $content);
        echo "  ✓ Footer substituído por include PHP\n";
        $updated = true;
    }
    
    // 3. Atualizar links para outros arquivos HTML para .php
    $linkPattern = '/href="([^"]+)\.html/';
    if (preg_match($linkPattern, $content)) {
        $content = preg_replace($linkPattern, 'href="$1.php', $content);
        echo "  ✓ Links HTML atualizados para PHP\n";
        $updated = true;
    }
    
    // 4. Remover script de includes JavaScript se existir
    $includesJsPattern = '/<script[^>]*src="[^"]*includes\.js"[^>]*><\/script>\s*/';
    if (preg_match($includesJsPattern, $content)) {
        $content = preg_replace($includesJsPattern, '', $content);
        echo "  ✓ Script includes.js removido\n";
        $updated = true;
    }
    
    // 5. Remover placeholders de header/footer se existirem
    $placeholderPattern = '/<!--\s*(?:Header|Footer)\s*Include\s*-->.*?<div\s+id="(?:header|footer)-placeholder"><\/div>\s*/s';
    if (preg_match($placeholderPattern, $content)) {
        $content = preg_replace($placeholderPattern, '', $content);
        echo "  ✓ Placeholders removidos\n";
        $updated = true;
    }
    
    // Salvar arquivo PHP
    if (file_put_contents($phpFile, $content) !== false) {
        echo "  ✅ Arquivo PHP criado com sucesso!\n";
        
        // Remover arquivo HTML original se conversão foi bem-sucedida
        if ($updated && unlink($htmlFile)) {
            echo "  🗑️ Arquivo HTML original removido\n";
        }
    } else {
        echo "  ❌ Erro ao criar arquivo PHP: $phpFile\n";
    }
    
    echo "\n";
}

echo "=== Verificando estrutura de includes ===\n\n";

// Verificar se os arquivos de include existem
$headerFile = $directory . '/includes/header.php';
$footerFile = $directory . '/includes/footer.php';

if (file_exists($headerFile)) {
    echo "✓ Header encontrado: includes/header.php\n";
} else {
    echo "❌ Header não encontrado: includes/header.php\n";
}

if (file_exists($footerFile)) {
    echo "✓ Footer encontrado: includes/footer.php\n";
} else {
    echo "❌ Footer não encontrado: includes/footer.php\n";
}

echo "\n=== Conversão concluída! ===\n";
echo "Para testar, execute o site em um servidor PHP local:\n";
echo "php -S localhost:8000\n";
echo "Depois acesse: http://localhost:8000\n";
?>
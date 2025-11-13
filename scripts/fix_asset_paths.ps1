# Script para corrigir caminhos dos assets nas páginas PHP
# Executa correções em todas as páginas na pasta pages/

$pagesPath = "c:\Users\Joao Pedro\Desktop\dhr\pages"
$phpFiles = Get-ChildItem -Path $pagesPath -Filter "*.php"

Write-Host "🔧 Corrigindo caminhos dos assets em todas as páginas PHP..." -ForegroundColor Yellow
Write-Host ""

foreach ($file in $phpFiles) {
    Write-Host "📄 Processando: $($file.Name)" -ForegroundColor Cyan
    
    $content = Get-Content -Path $file.FullName -Raw -Encoding UTF8
    
    # Corrigir caminhos dos CSS
    $content = $content -replace 'href="css/', 'href="../css/'
    $content = $content -replace 'href="assets/', 'href="../assets/'
    
    # Corrigir caminhos dos JS
    $content = $content -replace 'src="js/', 'src="../js/'
    $content = $content -replace 'src="assets/', 'src="../assets/'
    
    # Corrigir navegação para index
    $content = $content -replace 'href="index\.php"', 'href="../index.php"'
    $content = $content -replace 'href="index\.php#', 'href="../index.php#'
    
    # Corrigir includes
    $content = $content -replace "include 'includes/", "include '../includes/"
    $content = $content -replace 'include "includes/', 'include "../includes/'
    
    # Salvar arquivo corrigido
    Set-Content -Path $file.FullName -Value $content -Encoding UTF8
    
    Write-Host "   ✅ Caminhos corrigidos!" -ForegroundColor Green
}

Write-Host ""
Write-Host "✅ Todos os caminhos foram corrigidos com sucesso!" -ForegroundColor Green
Write-Host "📁 Arquivos processados: $($phpFiles.Count)" -ForegroundColor White
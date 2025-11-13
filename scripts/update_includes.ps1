# Script para atualizar header e footer em todas as páginas HTML
# Atualiza automaticamente os includes em todos os arquivos HTML

Write-Host "Iniciando atualizacao do header e footer..." -ForegroundColor Green

# Obter todos os arquivos HTML no diretório atual (exceto os includes)
$htmlFiles = Get-ChildItem -Path "." -Filter "*.html" | Where-Object { $_.Name -notmatch "header|footer" }

foreach ($file in $htmlFiles) {
    Write-Host "Processando: $($file.Name)" -ForegroundColor Yellow
    
    $content = Get-Content $file.FullName -Raw -Encoding UTF8
    $updated = $false
    
    # Verificar se já tem os placeholders
    if ($content -notmatch 'id="header-placeholder"') {
        Write-Host "  -> Adicionando placeholder do header" -ForegroundColor Cyan
        
        # Procurar por uma tag nav existente e substituir
        if ($content -match '(?s)<nav[^>]*class="navbar".*?</nav>') {
            $content = $content -replace '(?s)<nav[^>]*class="navbar".*?</nav>', '<!-- Header Include -->
    <div id="header-placeholder"></div>'
            $updated = $true
        }
        # Ou adicionar após o body se não encontrar nav
        elseif ($content -match '<body[^>]*>') {
            $content = $content -replace '(<body[^>]*>\s*)', '$1
    <!-- Header Include -->
    <div id="header-placeholder"></div>
'
            $updated = $true
        }
    }
    
    # Verificar se já tem o placeholder do footer
    if ($content -notmatch 'id="footer-placeholder"') {
        Write-Host "  -> Adicionando placeholder do footer" -ForegroundColor Cyan
        
        # Procurar por uma tag footer existente e substituir
        if ($content -match '(?s)<footer[^>]*class="footer".*?</footer>') {
            $content = $content -replace '(?s)<footer[^>]*class="footer".*?</footer>', '<!-- Footer Include -->
    <div id="footer-placeholder"></div>'
            $updated = $true
        }
        # Ou adicionar antes do fechamento do body se não encontrar footer
        elseif ($content -match '</body>') {
            $content = $content -replace '(\s*</body>)', '    <!-- Footer Include -->
    <div id="footer-placeholder"></div>
$1'
            $updated = $true
        }
    }
    
    # Verificar se já tem o script de includes
    if ($content -notmatch 'js/includes\.js') {
        Write-Host "  -> Adicionando script de includes" -ForegroundColor Cyan
        
        # Adicionar antes do fechamento do body ou antes dos outros scripts
        if ($content -match '(\s*<script[^>]*src="[^"]*script\.js"[^>]*></script>)') {
            $content = $content -replace '(\s*<script[^>]*src="[^"]*script\.js"[^>]*></script>)', '    <script src="js/includes.js"></script>
$1'
            $updated = $true
        }
        elseif ($content -match '(\s*</body>)') {
            $content = $content -replace '(\s*</body>)', '    <!-- Scripts -->
    <script src="js/includes.js"></script>
$1'
            $updated = $true
        }
    }
    
    # Salvar o arquivo se foi atualizado
    if ($updated) {
        Set-Content -Path $file.FullName -Value $content -Encoding UTF8
        Write-Host "  -> Arquivo atualizado com sucesso!" -ForegroundColor Green
    } else {
        Write-Host "  -> Arquivo já está atualizado" -ForegroundColor Gray
    }
}

Write-Host "`nAtualizacao concluida!" -ForegroundColor Green
Write-Host "Arquivos processados: $($htmlFiles.Count)" -ForegroundColor White

# Verificar se os arquivos de include existem
if (Test-Path "includes/header.html") {
    Write-Host "✓ Header encontrado: includes/header.html" -ForegroundColor Green
} else {
    Write-Host "✗ Header não encontrado: includes/header.html" -ForegroundColor Red
}

if (Test-Path "includes/footer.html") {
    Write-Host "✓ Footer encontrado: includes/footer.html" -ForegroundColor Green
} else {
    Write-Host "✗ Footer não encontrado: includes/footer.html" -ForegroundColor Red
}

if (Test-Path "js/includes.js") {
    Write-Host "✓ Script de includes encontrado: js/includes.js" -ForegroundColor Green
} else {
    Write-Host "✗ Script de includes não encontrado: js/includes.js" -ForegroundColor Red
}

Write-Host "`nPara testar, abra qualquer arquivo HTML em um servidor local." -ForegroundColor Yellow
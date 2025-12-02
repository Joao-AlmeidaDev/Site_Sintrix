# 🔒 Segurança do GitHub - O que NÃO subir

## ❌ Arquivos BLOQUEADOS no `.gitignore`:

### 🔐 **CRÍTICO - Nunca subir:**
1. **`config/email.config.php`** 
   - Contém senha do email SMTP
   - ⚠️ Se subir, qualquer pessoa pode ver sua senha!
   
2. **`vendor/`** (Composer)
   - Dependências do PHPMailer
   - São baixadas via `composer install`

3. **`logs/`**
   - Pode conter informações sensíveis
   - Erros, IPs, dados de usuários

### 📝 **O que PODE subir:**
✅ `config/email.config.example.php` - Arquivo exemplo sem senhas
✅ `composer.json` - Lista de dependências
✅ Todo o código PHP, HTML, CSS, JS
✅ Imagens públicas
✅ Configurações gerais

## 🛡️ Como funciona:

1. **Você tem localmente**: `email.config.php` (com senha real)
2. **GitHub tem**: `email.config.example.php` (sem senha)
3. **Quem clonar o repo**: Copia o `.example` e preenche suas próprias credenciais

## 📋 Instruções para outros desenvolvedores:

```bash
# 1. Clonar o repositório
git clone https://github.com/Joao-AlmeidaDev/Site_Sintrix.git

# 2. Copiar arquivo de exemplo
cp config/email.config.example.php config/email.config.php

# 3. Editar e adicionar suas credenciais
nano config/email.config.php

# 4. Instalar dependências
composer install
```

## ⚠️ ATENÇÃO:

Se você **já subiu** o arquivo com senha, faça:

1. **Mude a senha do email** imediatamente
2. **Remova do histórico do Git**:
```bash
git filter-branch --force --index-filter \
"git rm --cached --ignore-unmatch config/email.config.php" \
--prune-empty --tag-name-filter cat -- --all

git push origin --force --all
```

## ✅ Status Atual:

- ✅ `.gitignore` configurado
- ✅ Arquivo exemplo criado
- ✅ Senha protegida
- ✅ Pronto para commit seguro

## 🔍 Verificar antes de commit:

```bash
# Ver o que será enviado
git status

# Se aparecer email.config.php na lista, NÃO faça commit!
# Verifique o .gitignore
```

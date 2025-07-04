@echo off
echo ================================================
echo  MIGRAÇÃO PARA NOVA ESTRUTURA - LUMINA ACADEMY
echo ================================================
echo.

echo [1/6] Criando estrutura de pastas...
mkdir "src\pages\auth" 2>nul
mkdir "src\pages\student" 2>nul
mkdir "src\pages\teacher" 2>nul
mkdir "src\pages\admin" 2>nul
mkdir "src\assets\css" 2>nul
mkdir "src\assets\js\core" 2>nul
mkdir "src\assets\js\components" 2>nul
mkdir "src\assets\js\utils" 2>nul
mkdir "config" 2>nul
mkdir "docs" 2>nul

echo [2/6] Movendo páginas de autenticação...
if exist "auth\login.php" move "auth\login.php" "src\pages\auth\"

echo [3/6] Movendo páginas do aluno...
if exist "student\dashboard.php" move "student\dashboard.php" "src\pages\student\"
if exist "student\materias.php" move "student\materias.php" "src\pages\student\"
if exist "student\exercicios.php" move "student\exercicios.php" "src\pages\student\"
if exist "student\cronograma.php" move "student\cronograma.php" "src\pages\student\"
if exist "cliente\desempenho.php" move "cliente\desempenho.php" "src\pages\student\"

echo [4/6] Movendo páginas do professor...
if exist "cliente\teacher-dashboard.php" move "cliente\teacher-dashboard.php" "src\pages\teacher\dashboard.php"

echo [5/6] Movendo páginas do admin...
if exist "cliente\admin-dashboard.php" move "cliente\admin-dashboard.php" "src\pages\admin\dashboard.php"

echo [6/6] Movendo assets...
if exist "cliente\css\*" move "cliente\css\*" "src\assets\css\"

echo.
echo Organizando scripts JavaScript...
if exist "cliente\js\login.js" move "cliente\js\login.js" "src\assets\js\core\auth.js"
if exist "cliente\js\dashboard-auth.js" move "cliente\js\dashboard-auth.js" "src\assets\js\core\"
if exist "cliente\js\lumina-storage.js" move "cliente\js\lumina-storage.js" "src\assets\js\core\storage.js"

if exist "cliente\js\sidebar-components.js" move "cliente\js\sidebar-components.js" "src\assets\js\components\sidebar.js"
if exist "cliente\js\color-system.js" move "cliente\js\color-system.js" "src\assets\js\components\"

if exist "cliente\js\utils.js" move "cliente\js\utils.js" "src\assets\js\utils\helpers.js"
if exist "cliente\js\data.js" move "cliente\js\data.js" "src\assets\js\utils\"
if exist "cliente\js\debug-auth.js" move "cliente\js\debug-auth.js" "src\assets\js\utils\debug.js"
if exist "cliente\js\main.js" move "cliente\js\main.js" "src\assets\js\utils\"
if exist "cliente\js\tailwind-config.js" move "cliente\js\tailwind-config.js" "src\assets\js\utils\"

echo.
echo ================================================
echo  MIGRAÇÃO CONCLUÍDA!
echo ================================================
echo.
echo Próximos passos:
echo 1. Verificar se todos os arquivos foram movidos
echo 2. Atualizar caminhos nos includes
echo 3. Testar todas as funcionalidades
echo.
pause

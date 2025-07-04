/**
 * Verificação de autenticação para páginas de dashboard
 * Sistema atualizado para três tipos de usuário: admin, teacher, student
 */

// Configuração das chaves do localStorage
const STORAGE_KEYS = {
    CURRENT_USER: 'lumina_user_data',
    AUTH_TOKEN: 'lumina_auth_token'
};

// URLs dos dashboards por tipo de usuário
const DASHBOARD_URLS = {
    admin: 'admin-dashboard.php',
    teacher: 'teacher-dashboard.php',
    student: 'dashboard.php'
};

// Verificar se o usuário está autenticado
function checkAuthentication() {
    try {
        const userData = localStorage.getItem(STORAGE_KEYS.CURRENT_USER);
        const authToken = localStorage.getItem(STORAGE_KEYS.AUTH_TOKEN);
        
        if (!userData || !authToken) {
            console.log('Usuário não autenticado, redirecionando para login...');
            redirectToLogin();
            return false;
        }
        
        // Verificar se o token não expirou
        const tokenData = JSON.parse(authToken);
        if (tokenData.expires && Date.now() > tokenData.expires) {
            console.log('Token expirado, redirecionando para login...');
            clearAuthData();
            redirectToLogin();
            return false;
        }
        
        // Verificar se o usuário tem acesso a esta página
        const user = JSON.parse(userData);
        const currentPage = getCurrentPageType();
        
        if (!hasPageAccess(user.role, currentPage)) {
            console.log(`Usuário ${user.role} não tem acesso à página ${currentPage}`);
            redirectToCorrectDashboard(user.role);
            return false;
        }
        
        console.log(`Usuário ${user.role} autenticado com sucesso na página ${currentPage}`);
        return true;
    } catch (error) {
        console.error('Erro ao verificar autenticação:', error);
        clearAuthData();
        redirectToLogin();
        return false;
    }
}

// Identificar qual tipo de página estamos
function getCurrentPageType() {
    const path = window.location.pathname;
    
    if (path.includes('admin-dashboard')) {
        return 'admin';
    } else if (path.includes('teacher-dashboard')) {
        return 'teacher';
    } else if (path.includes('dashboard.php')) {
        return 'student';
    }
    
    return 'unknown';
}

// Verificar se o usuário tem acesso à página
function hasPageAccess(userRole, pageType) {
    // Cada tipo de usuário só tem acesso ao seu próprio dashboard
    return userRole === pageType;
}

// Redirecionar para o dashboard correto
function redirectToCorrectDashboard(userRole) {
    const targetUrl = DASHBOARD_URLS[userRole];
    if (targetUrl && !window.location.pathname.includes(targetUrl)) {
        console.log(`Redirecionando ${userRole} para ${targetUrl}`);
        window.location.replace(targetUrl);
    }
}

// Limpar dados de autenticação
function clearAuthData() {
    localStorage.removeItem(STORAGE_KEYS.CURRENT_USER);
    localStorage.removeItem(STORAGE_KEYS.AUTH_TOKEN);
    localStorage.removeItem('lumina_remember_login');
}

// Redirecionar para login
function redirectToLogin() {
    // Evitar loops verificando se já estamos na página de login
    if (!window.location.pathname.includes('login.php')) {
        window.location.replace('login.php');
    }
}

// Função de logout
function performLogout() {
    clearAuthData();
    
    // Registrar atividade de logout
    try {
        const activityLog = JSON.parse(localStorage.getItem('lumina_activity_log') || '[]');
        activityLog.unshift({
            id: Date.now(),
            type: 'user_logout',
            description: 'Usuário fez logout via dashboard',
            timestamp: Date.now(),
            date: new Date().toISOString()
        });
        
        // Manter apenas os últimos 50 registros
        if (activityLog.length > 50) {
            activityLog.splice(50);
        }
        
        localStorage.setItem('lumina_activity_log', JSON.stringify(activityLog));
    } catch (error) {
        console.error('Erro ao registrar logout:', error);
    }
    
    // Redirecionar para login
    window.location.replace('login.php');
}

// Verificar autenticação quando a página carrega
document.addEventListener('DOMContentLoaded', function() {
    console.log('Verificando autenticação...');
    checkAuthentication();
});

// Verificar autenticação quando a página volta ao foco
document.addEventListener('visibilitychange', function() {
    if (!document.hidden) {
        setTimeout(checkAuthentication, 100); // Pequeno delay para evitar conflitos
    }
});

// Exportar funções para uso global
window.checkAuthentication = checkAuthentication;
window.performLogout = performLogout;

console.log('🔐 Sistema de autenticação de dashboard carregado');
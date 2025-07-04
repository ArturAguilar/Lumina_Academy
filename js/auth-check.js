/**
 * Sistema de verificação de autenticação
 * Verifica se o usuário está logado antes de acessar áreas restritas
 */

// Função para verificar se o usuário está logado
function isUserLoggedIn() {
    try {
        const userData = localStorage.getItem('lumina_user_data');
        const authToken = localStorage.getItem('lumina_auth_token');
        
        if (!userData || !authToken) {
            return false;
        }
        
        // Verificar se o token não expirou
        const tokenData = JSON.parse(authToken);
        if (tokenData.expires && Date.now() > tokenData.expires) {
            // Token expirado, limpar dados
            localStorage.removeItem('lumina_user_data');
            localStorage.removeItem('lumina_auth_token');
            return false;
        }
        
        return true;
    } catch (error) {
        console.error('Erro ao verificar autenticação:', error);
        return false;
    }
}

// Função para redirecionar para login se não estiver logado
function requireLogin(redirectUrl = null) {
    if (!isUserLoggedIn()) {
        // Salvar a URL de destino para redirecionar após o login
        if (redirectUrl) {
            localStorage.setItem('lumina_redirect_after_login', redirectUrl);
        }
        
        // Redirecionar para o login
        window.location.href = 'cliente/login.php?view=login';
        return false;
    }
    return true;
}

// Função para verificar acesso a área restrita
function checkRestrictedAccess(targetUrl) {
    if (!isUserLoggedIn()) {
        // Salvar URL de destino e redirecionar para login
        localStorage.setItem('lumina_redirect_after_login', targetUrl);
        window.location.href = 'cliente/login.php?view=login';
        return false;
    } else {
        // Se estiver logado, redirecionar para a página desejada
        window.location.href = targetUrl;
        return true;
    }
}

// Função para mostrar modal de aviso (opcional)
function showLoginRequiredModal(targetUrl) {
    // Criar modal simples
    const modal = document.createElement('div');
    modal.className = 'fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50';
    modal.innerHTML = `
        <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 mb-4">
                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Login Necessário</h3>
                <p class="text-sm text-gray-500 mb-6">Para acessar este conteúdo, você precisa estar logado em sua conta.</p>
                <div class="flex space-x-3">
                    <button onclick="closeLoginModal()" class="flex-1 px-4 py-2 bg-gray-300 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-400 transition-colors">
                        Cancelar
                    </button>
                    <button onclick="redirectToLogin('${targetUrl}')" class="flex-1 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors">
                        Fazer Login
                    </button>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
}

// Função para fechar o modal
function closeLoginModal() {
    const modal = document.querySelector('.fixed.inset-0.bg-gray-600');
    if (modal) {
        modal.remove();
    }
}

// Função para redirecionar para login
function redirectToLogin(targetUrl) {
    if (targetUrl) {
        localStorage.setItem('lumina_redirect_after_login', targetUrl);
    }
    window.location.href = 'cliente/login.php?view=login';
}

// Função para verificar e redirecionar após login bem-sucedido
function checkRedirectAfterLogin() {
    const redirectUrl = localStorage.getItem('lumina_redirect_after_login');
    if (redirectUrl && isUserLoggedIn()) {
        localStorage.removeItem('lumina_redirect_after_login');
        window.location.href = redirectUrl;
    }
}

// Função para obter dados do usuário logado
function getCurrentUser() {
    try {
        const userData = localStorage.getItem('lumina_user_data');
        return userData ? JSON.parse(userData) : null;
    } catch (error) {
        console.error('Erro ao obter dados do usuário:', error);
        return null;
    }
}

// Função para verificar se o usuário tem uma permissão específica
function hasPermission(permission) {
    const user = getCurrentUser();
    if (!user || !user.permissions) {
        return false;
    }
    return user.permissions[permission] === true;
}

// Função para verificar se o usuário tem um role específico
function hasRole(role) {
    const user = getCurrentUser();
    return user && user.role === role;
}

// Função para verificar acesso a páginas administrativas
function requireAdminAccess() {
    if (!isUserLoggedIn()) {
        window.location.href = 'login.php?view=login';
        return false;
    }
    
    if (!hasRole('admin')) {
        // Redirecionar para dashboard apropriado baseado no role
        const user = getCurrentUser();
        if (user) {
            switch (user.role) {
                case 'teacher':
                    window.location.href = 'teacher-dashboard.php';
                    break;
                case 'moderator':
                    window.location.href = 'moderator-dashboard.php';
                    break;
                default:
                    window.location.href = 'dashboard.php';
            }
        } else {
            window.location.href = 'dashboard.php';
        }
        return false;
    }
    
    return true;
}

// Função para verificar acesso de professor
function requireTeacherAccess() {
    if (!isUserLoggedIn()) {
        window.location.href = 'login.php?view=login';
        return false;
    }
    
    const user = getCurrentUser();
    if (!user || (user.role !== 'admin' && user.role !== 'teacher')) {
        window.location.href = 'dashboard.php';
        return false;
    }
    
    return true;
}

// Função para verificar acesso de moderador
function requireModeratorAccess() {
    if (!isUserLoggedIn()) {
        window.location.href = 'login.php?view=login';
        return false;
    }
    
    const user = getCurrentUser();
    if (!user || (user.role !== 'admin' && user.role !== 'moderator')) {
        window.location.href = 'dashboard.php';
        return false;
    }
    
    return true;
}

// Função para redirecionar automaticamente para o dashboard correto
function redirectToDashboard() {
    if (!isUserLoggedIn()) {
        window.location.href = 'login.php?view=login';
        return;
    }
    
    const user = getCurrentUser();
    if (user) {
        switch (user.role) {
            case 'admin':
                window.location.href = 'admin-dashboard.php';
                break;
            case 'teacher':
                window.location.href = 'teacher-dashboard.php';
                break;
            case 'moderator':
                window.location.href = 'moderator-dashboard.php';
                break;
            default:
                window.location.href = 'dashboard.php';
        }
    } else {
        window.location.href = 'dashboard.php';
    }
}

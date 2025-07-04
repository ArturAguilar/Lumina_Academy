/**
 * Login Page JavaScript - Lumina Academy
 * Sistema de autenticação, localStorage e validações
 */

// ===============================
// GERENCIAMENTO DE FORMULÁRIOS POR URL
// ===============================

// Função para mostrar o formulário correto baseado na URL
function showFormByUrl() {
    const params = new URLSearchParams(window.location.search);
    const view = params.get('view');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    
    if (view === 'register') {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
    } else {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
    }
}

// Configurar troca de formulários
function setupFormSwitching() {
    const showRegisterBtn = document.getElementById('showRegisterBtn');
    const showLoginBtn = document.getElementById('showLoginBtn');
    
    if (showRegisterBtn) {
        showRegisterBtn.onclick = function() {
            history.replaceState(null, '', '?view=register');
            showFormByUrl();
        };
    }
    
    if (showLoginBtn) {
        showLoginBtn.onclick = function() {
            history.replaceState(null, '', '?view=login');
            showFormByUrl();
        };
    }
}

// ===============================
// SISTEMA DE LOCALSTORAGE
// ===============================

// Classe para gerenciar localStorage
class StorageManager {
    static keys = {
        USER_DATA: 'lumina_user_data',
        AUTH_TOKEN: 'lumina_auth_token',
        USER_PREFERENCES: 'lumina_user_preferences',
        REMEMBER_LOGIN: 'lumina_remember_login',
        LAST_LOGIN: 'lumina_last_login',
        FORM_DATA: 'lumina_form_data',
        ACTIVITY_LOG: 'lumina_activity_log'
    };
    
    // Salvar dados do usuário
    static saveUserData(userData) {
        try {
            localStorage.setItem(this.keys.USER_DATA, JSON.stringify(userData));
            this.logActivity('user_data_saved', 'Dados do usuário salvos');
            return true;
        } catch (error) {
            console.error('Erro ao salvar dados do usuário:', error);
            return false;
        }
    }
    
    // Recuperar dados do usuário
    static getUserData() {
        try {
            const data = localStorage.getItem(this.keys.USER_DATA);
            return data ? JSON.parse(data) : null;
        } catch (error) {
            console.error('Erro ao recuperar dados do usuário:', error);
            return null;
        }
    }
    
    // Salvar token de autenticação
    static saveAuthToken(token, expiresIn = 24 * 60 * 60 * 1000) { // 24 horas por padrão
        try {
            const tokenData = {
                token: token,
                expires: Date.now() + expiresIn,
                created: Date.now()
            };
            localStorage.setItem(this.keys.AUTH_TOKEN, JSON.stringify(tokenData));
            this.logActivity('auth_token_saved', 'Token de autenticação salvo');
            return true;
        } catch (error) {
            console.error('Erro ao salvar token:', error);
            return false;
        }
    }
    
    // Verificar se o token é válido
    static isTokenValid() {
        try {
            const tokenData = localStorage.getItem(this.keys.AUTH_TOKEN);
            if (!tokenData) return false;
            
            const parsed = JSON.parse(tokenData);
            return Date.now() < parsed.expires;
        } catch (error) {
            console.error('Erro ao verificar token:', error);
            return false;
        }
    }
    
    // Salvar preferências do usuário
    static saveUserPreferences(preferences) {
        try {
            const currentPrefs = this.getUserPreferences();
            const updatedPrefs = { ...currentPrefs, ...preferences };
            localStorage.setItem(this.keys.USER_PREFERENCES, JSON.stringify(updatedPrefs));
            this.logActivity('preferences_saved', 'Preferências atualizadas');
            return true;
        } catch (error) {
            console.error('Erro ao salvar preferências:', error);
            return false;
        }
    }
    
    // Recuperar preferências do usuário
    static getUserPreferences() {
        try {
            const data = localStorage.getItem(this.keys.USER_PREFERENCES);
            return data ? JSON.parse(data) : {
                theme: 'light',
                language: 'pt-BR',
                notifications: true,
                autoSave: true
            };
        } catch (error) {
            console.error('Erro ao recuperar preferências:', error);
            return {};
        }
    }
    
    // Salvar dados temporários do formulário
    static saveFormData(formType, data) {
        try {
            const currentFormData = this.getFormData();
            currentFormData[formType] = {
                data: data,
                timestamp: Date.now()
            };
            localStorage.setItem(this.keys.FORM_DATA, JSON.stringify(currentFormData));
            return true;
        } catch (error) {
            console.error('Erro ao salvar dados do formulário:', error);
            return false;
        }
    }
    
    // Recuperar dados do formulário
    static getFormData(formType = null) {
        try {
            const data = localStorage.getItem(this.keys.FORM_DATA);
            const formData = data ? JSON.parse(data) : {};
            
            if (formType) {
                return formData[formType] || null;
            }
            return formData;
        } catch (error) {
            console.error('Erro ao recuperar dados do formulário:', error);
            return formType ? null : {};
        }
    }
    
    // Registrar atividade
    static logActivity(type, description, data = null) {
        try {
            const activities = this.getActivityLog();
            const activity = {
                id: Date.now(),
                type: type,
                description: description,
                data: data,
                timestamp: Date.now(),
                date: new Date().toISOString()
            };
            
            activities.unshift(activity);
            
            // Manter apenas os últimos 50 registros
            if (activities.length > 50) {
                activities.splice(50);
            }
            
            localStorage.setItem(this.keys.ACTIVITY_LOG, JSON.stringify(activities));
            return true;
        } catch (error) {
            console.error('Erro ao registrar atividade:', error);
            return false;
        }
    }
    
    // Recuperar log de atividades
    static getActivityLog() {
        try {
            const data = localStorage.getItem(this.keys.ACTIVITY_LOG);
            return data ? JSON.parse(data) : [];
        } catch (error) {
            console.error('Erro ao recuperar log de atividades:', error);
            return [];
        }
    }
    
    // Limpar todos os dados
    static clearAllData() {
        try {
            Object.values(this.keys).forEach(key => {
                localStorage.removeItem(key);
            });
            this.logActivity('data_cleared', 'Todos os dados foram limpos');
            return true;
        } catch (error) {
            console.error('Erro ao limpar dados:', error);
            return false;
        }
    }
    
    // Fazer logout
    static logout() {
        try {
            localStorage.removeItem(this.keys.AUTH_TOKEN);
            localStorage.removeItem(this.keys.USER_DATA);
            localStorage.removeItem(this.keys.FORM_DATA);
            this.logActivity('user_logout', 'Usuário fez logout');
            return true;
        } catch (error) {
            console.error('Erro ao fazer logout:', error);
            return false;
        }
    }
    
    // Limpar dados de autenticação (similar ao logout mas mais específico)
    static clearAuthData() {
        try {
            localStorage.removeItem(this.keys.AUTH_TOKEN);
            localStorage.removeItem(this.keys.USER_DATA);
            this.logActivity('auth_data_cleared', 'Dados de autenticação limpos');
            return true;
        } catch (error) {
            console.error('Erro ao limpar dados de autenticação:', error);
            return false;
        }
    }
    
    // Verificar se usuário está logado
    static isLoggedIn() {
        return this.isTokenValid() && this.getUserData() !== null;
    }
    
    // Recuperar token de autenticação
    static getAuthToken() {
        try {
            const tokenData = localStorage.getItem(this.keys.AUTH_TOKEN);
            if (!tokenData) return null;
            
            const parsed = JSON.parse(tokenData);
            return Date.now() < parsed.expires ? parsed.token : null;
        } catch (error) {
            console.error('Erro ao recuperar token:', error);
            return null;
        }
    }
}

// ===============================
// INICIALIZAÇÃO E VERIFICAÇÕES
// ===============================

// Verificar se usuário já está logado ao carregar a página
document.addEventListener('DOMContentLoaded', function() {
    // Configurar troca de formulários baseada na URL
    showFormByUrl();
    setupFormSwitching();
    
    // Verificar se já existe um login ativo
    if (checkExistingLogin()) {
        return; // Para aqui se o usuário já está logado
    }
    
    // Recuperar dados do formulário se existirem
    restoreFormData();
    
    // Aplicar preferências salvas
    applyUserPreferences();
    
    // Registrar acesso à página de login
    StorageManager.logActivity('page_access', 'Acesso à página de login');
    
    // Configurar event listeners
    setupEventListeners();
});

// Função para restaurar dados do formulário
function restoreFormData() {
    const loginData = StorageManager.getFormData('login');
    const registerData = StorageManager.getFormData('register');
    
    if (loginData && loginData.data) {
        const emailField = document.getElementById('login-email');
        const rememberField = document.getElementById('remember-me');
        
        if (emailField && loginData.data.email) {
            emailField.value = loginData.data.email;
        }
        
        if (rememberField && loginData.data.remember) {
            rememberField.checked = true;
        }
    }
    
    if (registerData && registerData.data) {
        const fields = ['register-firstname', 'register-lastname', 'register-email'];
        fields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            const dataKey = fieldId.replace('register-', '');
            if (field && registerData.data[dataKey]) {
                field.value = registerData.data[dataKey];
            }
        });
    }
}

// Verificar se usuário já está logado ao carregar a página
function checkExistingLogin() {
    const userData = StorageManager.getUserData();
    const authToken = StorageManager.getAuthToken();
    const rememberLogin = localStorage.getItem(StorageManager.keys.REMEMBER_LOGIN) === 'true';
    
    if (userData && authToken && rememberLogin) {
        // Usuário já está logado e escolheu ser lembrado
        StorageManager.logActivity('auto_login', 'Login automático detectado', { 
            email: userData.email,
            lastLogin: userData.lastLogin 
        });
        
        showNotification(`Bem-vindo de volta, ${userData.firstName}! Redirecionando...`, 'success');
        
        setTimeout(() => {
            // Verificar se há redirecionamento pendente
            const redirectUrl = localStorage.getItem('lumina_redirect_after_login');
            if (redirectUrl) {
                localStorage.removeItem('lumina_redirect_after_login');
                window.location.href = redirectUrl;
            } else {
                window.location.href = 'dashboard.php';
            }
        }, 1500);
        
        return true;
    }
    
    return false;
}

// Função para logout (pode ser chamada de outras páginas)
function logout(redirectToLogin = true) {
    const userData = StorageManager.getUserData();
    
    if (userData) {
        StorageManager.logActivity('logout', 'Usuário fez logout', { 
            email: userData.email,
            sessionDuration: new Date() - new Date(userData.lastLogin)
        });
    }
    
    // Limpar dados de autenticação
    StorageManager.clearAuthData();
    localStorage.removeItem(StorageManager.keys.REMEMBER_LOGIN);
    
    showNotification('Logout realizado com sucesso!', 'success');
    
    if (redirectToLogin) {
        setTimeout(() => {
            window.location.href = 'login.php';
        }, 1000);
    }
}

// Adicionar função global para logout
window.luminaLogout = logout;

// Função para aplicar preferências do usuário
function applyUserPreferences() {
    const preferences = StorageManager.getUserPreferences();
    
    // Aplicar tema se necessário
    if (preferences.theme === 'dark') {
        document.body.classList.add('dark');
    }
    
    // Outras preferências podem ser aplicadas aqui
}

// Salvar dados do formulário automaticamente
function autoSaveFormData(formType) {
    const preferences = StorageManager.getUserPreferences();
    if (!preferences.autoSave) return;
    
    if (formType === 'login') {
        const email = document.getElementById('login-email').value;
        const remember = document.getElementById('remember-me').checked;
        
        if (email || remember) {
            StorageManager.saveFormData('login', { email, remember });
        }
    } else if (formType === 'register') {
        const firstName = document.getElementById('register-firstname').value;
        const lastName = document.getElementById('register-lastname').value;
        const email = document.getElementById('register-email').value;
        
        if (firstName || lastName || email) {
            StorageManager.saveFormData('register', { firstName, lastName, email });
        }
    }
}

// ===============================
// EVENT LISTENERS
// ===============================

function setupEventListeners() {
    // Adicionar listeners para auto-save
    setTimeout(() => {
        // Auto-save para login
        ['login-email', 'remember-me'].forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.addEventListener('change', () => autoSaveFormData('login'));
                element.addEventListener('input', () => autoSaveFormData('login'));
            }
        });
        
        // Auto-save para registro
        ['register-firstname', 'register-lastname', 'register-email'].forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.addEventListener('change', () => autoSaveFormData('register'));
                element.addEventListener('input', () => autoSaveFormData('register'));
            }
        });
    }, 100);
    
    // Form switching
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const showRegisterBtn = document.getElementById('showRegisterBtn');
    const showLoginBtn = document.getElementById('showLoginBtn');
    
    if (showRegisterBtn) {
        showRegisterBtn.addEventListener('click', () => {
            loginForm?.classList.add('hidden');
            registerForm?.classList.remove('hidden');
            StorageManager.logActivity('form_switch', 'Mudança para formulário de registro');
        });
    }
    
    if (showLoginBtn) {
        showLoginBtn.addEventListener('click', () => {
            registerForm?.classList.add('hidden');
            loginForm?.classList.remove('hidden');
            StorageManager.logActivity('form_switch', 'Mudança para formulário de login');
        });
    }
    
    // Login form validation and processing
    setupLoginForm();
    
    // Register form validation and processing
    setupRegisterForm();
    
    // Password strength indicator
    setupPasswordStrength();
}

// ===============================
// LOGIN FORM
// ===============================

function setupLoginForm() {
    const loginButton = document.getElementById('loginButton');
    const loginEmail = document.getElementById('login-email');
    const loginPassword = document.getElementById('login-password');
    const loginEmailError = document.getElementById('login-email-error');
    const loginPasswordError = document.getElementById('login-password-error');
    const rememberMe = document.getElementById('remember-me');
    
    if (!loginButton) return;
    
    // Adicionar validação em tempo real
    if (loginEmail) {
        loginEmail.addEventListener('blur', () => validateEmailField(loginEmail, loginEmailError));
        loginEmail.addEventListener('input', () => {
            if (loginEmail.value && loginEmailError && !loginEmailError.classList.contains('hidden')) {
                validateEmailField(loginEmail, loginEmailError);
            }
        });
    }
    
    if (loginPassword) {
        loginPassword.addEventListener('input', () => {
            if (loginPassword.value && loginPasswordError && !loginPasswordError.classList.contains('hidden')) {
                validatePasswordField(loginPassword, loginPasswordError);
            }
        });
    }
    
    // Submit no enter
    [loginEmail, loginPassword].forEach(field => {
        if (field) {
            field.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    handleLoginSubmit();
                }
            });
        }
    });
    
    loginButton.addEventListener('click', handleLoginSubmit);
    
    function handleLoginSubmit() {
        if (loginButton.disabled) return; // Evitar múltiplos cliques
        
        let isValid = true;
        
        // Reset errors
        loginEmailError?.classList.add('hidden');
        loginPasswordError?.classList.add('hidden');
        loginEmail?.classList.remove('border-error');
        loginPassword?.classList.remove('border-error');
        
        // Validate email
        if (!validateEmailField(loginEmail, loginEmailError)) {
            isValid = false;
        }
        
        // Validate password
        if (!validatePasswordField(loginPassword, loginPasswordError)) {
            isValid = false;
        }
        
        if (isValid) {
            // Processar login
            processLogin(loginEmail.value.trim(), loginPassword.value, rememberMe?.checked || false);
        } else {
            // Focar no primeiro campo com erro
            const firstErrorField = document.querySelector('.border-error');
            if (firstErrorField) {
                firstErrorField.focus();
            }
        }
    }
}

// Funções auxiliares de validação
function validateEmailField(emailField, errorField) {
    if (!emailField || !errorField) return true;
    
    const email = emailField.value.trim();
    
    if (!email) {
        showFieldError(emailField, errorField, 'Por favor, insira seu email.');
        return false;
    }
    
    if (!isValidEmail(email)) {
        showFieldError(emailField, errorField, 'Por favor, insira um email válido.');
        return false;
    }
    
    // Verificar se é um dos emails demo para facilitar o teste
    const demoEmails = ['admin@lumina.com', 'student@lumina.com', 'demo@lumina.com'];
    if (demoEmails.includes(email.toLowerCase())) {
        showFieldSuccess(emailField, errorField, 'Email demo reconhecido! 🎯');
    } else {
        hideFieldError(emailField, errorField);
    }
    return true;
}

function validatePasswordField(passwordField, errorField, showSuccessMessages = false) {
    if (!passwordField || !errorField) return true;
    
    const password = passwordField.value;
    
    if (!password) {
        showFieldError(passwordField, errorField, 'Por favor, insira sua senha.');
        return false;
    }
    
    if (password.length < 6) {
        showFieldError(passwordField, errorField, 'A senha deve ter pelo menos 6 caracteres.');
        return false;
    }
    
    // Para campo de registro, mostrar força da senha
    if (showSuccessMessages) {
        const strength = calculatePasswordStrength(password);
        if (strength.strength === 'forte') {
            showFieldSuccess(passwordField, errorField, 'Senha forte! 💪');
        } else if (strength.strength === 'boa') {
            showFieldWarning(passwordField, errorField, 'Senha boa, mas pode melhorar');
        } else {
            hideFieldError(passwordField, errorField);
        }
    } else {
        hideFieldError(passwordField, errorField);
    }
    
    return true;
}

function showFieldError(field, errorElement, message) {
    errorElement.textContent = message;
    errorElement.classList.remove('hidden', 'text-green-600', 'text-yellow-600');
    errorElement.classList.add('text-red-600');
    field.classList.remove('border-green-500', 'border-yellow-500');
    field.classList.add('border-error', 'error-shake');
    setTimeout(() => {
        field.classList.remove('error-shake');
    }, 500);
}

function showFieldSuccess(field, errorElement, message) {
    errorElement.textContent = message;
    errorElement.classList.remove('hidden', 'text-red-600', 'text-yellow-600');
    errorElement.classList.add('text-green-600');
    field.classList.remove('border-error', 'border-yellow-500');
    field.classList.add('border-green-500');
}

function showFieldWarning(field, errorElement, message) {
    errorElement.textContent = message;
    errorElement.classList.remove('hidden', 'text-red-600', 'text-green-600');
    errorElement.classList.add('text-yellow-600');
    field.classList.remove('border-error', 'border-green-500');
    field.classList.add('border-yellow-500');
}

function hideFieldError(field, errorElement) {
    errorElement.classList.add('hidden');
    field.classList.remove('border-error', 'border-green-500', 'border-yellow-500');
}

// Função para processar login
function processLogin(email, password, remember) {
    const loginButton = document.getElementById('loginButton');
    showLoading(loginButton);
    
    // Registrar tentativa de login
    StorageManager.logActivity('login_attempt', 'Tentativa de login', { email: email.toLowerCase() });
    
    // Simular validação (em produção, isso seria uma chamada para API)
    setTimeout(() => {
        try {
            // Buscar usuário registrado (case insensitive)
            const registeredUsers = getRegisteredUsers();
            const user = registeredUsers.find(u => u.email.toLowerCase() === email.toLowerCase());
            
            // Validar credenciais
            const isValidLogin = user && user.password === btoa(password);
            
            if (isValidLogin) {
                // Sucesso no login
                handleLoginSuccess(user, remember, email);
            } else {
                // Falha no login
                handleLoginFailure(user, email);
            }
        } catch (error) {
            console.error('Erro durante o processo de login:', error);
            hideLoading(loginButton, 'Entrar');
            showNotification('Erro interno. Tente novamente mais tarde.', 'error');
            StorageManager.logActivity('login_error', 'Erro durante o login', { email, error: error.message });
        }
    }, 1000); // Reduzido de 1500 para 1000ms para melhor UX
}

function handleLoginSuccess(user, remember, email) {
    const loginButton = document.getElementById('loginButton');
    
    // Atualizar dados do usuário
    const userData = {
        ...user,
        lastLogin: new Date().toISOString(),
        loginCount: (user.loginCount || 0) + 1,
        lastIp: getUserIP(), // Simulado
        sessionId: generateSessionId(),
        permissions: getUserPermissions(user.role) // Adicionar permissões
    };
    
    // Atualizar na lista de usuários
    updateUserInList(userData);
    
    // Gerar token seguro
    const token = generateSecureToken();
    
    // Calcular expiração do token
    const tokenExpiry = remember ? 30 * 24 * 60 * 60 * 1000 : 24 * 60 * 60 * 1000; // 30 dias ou 1 dia
    
    // Salvar dados no localStorage
    const saveSuccess = StorageManager.saveUserData(userData) &&
                       StorageManager.saveAuthToken(token, tokenExpiry) &&
                       StorageManager.saveUserPreferences(userData.preferences || getDefaultPreferences());
    
    if (!saveSuccess) {
        hideLoading(loginButton, 'Entrar');
        showNotification('Erro ao salvar dados de sessão. Tente novamente.', 'error');
        return;
    }
    
    if (remember) {
        localStorage.setItem(StorageManager.keys.REMEMBER_LOGIN, 'true');
    }
    
    // Salvar timestamp do último login
    localStorage.setItem(StorageManager.keys.LAST_LOGIN, new Date().toISOString());
    
    // Limpar dados temporários do formulário de login
    StorageManager.saveFormData('login', {});
    
    // Registrar login bem-sucedido
    StorageManager.logActivity('login_success', 'Login realizado com sucesso', { 
        email: email.toLowerCase(), 
        remember,
        tokenExpiry: new Date(Date.now() + tokenExpiry).toISOString(),
        loginCount: userData.loginCount,
        sessionId: userData.sessionId
    });
    
    // Limpar formulário
    clearLoginForm();
    
    // Mostrar mensagem de sucesso
    showNotification(`Bem-vindo de volta, ${userData.firstName}! Redirecionando...`, 'success');
    
    // Redirecionar para dashboard
    setTimeout(() => {
        // Verificar se há redirecionamento pendente
        const redirectUrl = localStorage.getItem('lumina_redirect_after_login');
        if (redirectUrl) {
            localStorage.removeItem('lumina_redirect_after_login');
            window.location.href = redirectUrl;
        } else {
            // Redirecionar baseado no tipo de usuário
            if (userData.role === 'admin') {
                window.location.href = 'admin-dashboard.php';
            } else if (userData.role === 'teacher') {
                window.location.href = 'teacher-dashboard.php';
            } else {
                // student ou outros
                window.location.href = 'dashboard.php';
            }
        }
    }, 1200); // Reduzido para melhor UX
}

function handleLoginFailure(user, email) {
    const loginButton = document.getElementById('loginButton');
    
    hideLoading(loginButton, 'Entrar');
    
    // Registrar tentativa falhada
    StorageManager.logActivity('login_failed', 'Falha no login - credenciais inválidas', { 
        email: email.toLowerCase(),
        userExists: !!user,
        timestamp: new Date().toISOString()
    });
    
    // Adicionar delay de segurança para prevenir ataques de força bruta
    const attempts = getFailedAttempts(email);
    if (attempts >= 3) {
        const waitTime = Math.min(attempts * 2, 30); // Max 30 segundos
        showNotification(`Muitas tentativas falhadas. Aguarde ${waitTime} segundos.`, 'warning');
        disableLoginForm(waitTime);
        return;
    }
    
    incrementFailedAttempts(email);
    
    if (!user) {
        showNotification('Email não encontrado. Verifique o email ou crie uma nova conta.', 'error');
        
        // Focar no campo de email
        const emailField = document.getElementById('login-email');
        if (emailField) {
            emailField.focus();
            emailField.select();
        }
    } else {
        showNotification('Senha incorreta. Tente novamente.', 'error');
        
        // Focar no campo de senha e limpar
        const passwordField = document.getElementById('login-password');
        if (passwordField) {
            passwordField.value = '';
            passwordField.focus();
        }
    }
}

// Funções auxiliares de segurança
function getFailedAttempts(email) {
    const attempts = localStorage.getItem(`failed_attempts_${email.toLowerCase()}`);
    return attempts ? parseInt(attempts) : 0;
}

function incrementFailedAttempts(email) {
    const currentAttempts = getFailedAttempts(email);
    localStorage.setItem(`failed_attempts_${email.toLowerCase()}`, currentAttempts + 1);
    
    // Limpar tentativas depois de 1 hora
    setTimeout(() => {
        localStorage.removeItem(`failed_attempts_${email.toLowerCase()}`);
    }, 60 * 60 * 1000);
}

function disableLoginForm(seconds) {
    const loginButton = document.getElementById('loginButton');
    const emailField = document.getElementById('login-email');
    const passwordField = document.getElementById('login-password');
    
    [loginButton, emailField, passwordField].forEach(element => {
        if (element) element.disabled = true;
    });
    
    let countdown = seconds;
    const interval = setInterval(() => {
        if (loginButton) {
            loginButton.textContent = `Aguarde ${countdown}s`;
        }
        countdown--;
        
        if (countdown < 0) {
            clearInterval(interval);
            [loginButton, emailField, passwordField].forEach(element => {
                if (element) element.disabled = false;
            });
            if (loginButton) {
                loginButton.textContent = 'Entrar';
            }
        }
    }, 1000);
}

function clearLoginForm() {
    const emailField = document.getElementById('login-email');
    const passwordField = document.getElementById('login-password');
    const rememberField = document.getElementById('remember-me');
    
    if (passwordField) passwordField.value = '';
    // Manter email se "lembrar de mim" estiver marcado
    if (emailField && (!rememberField || !rememberField.checked)) {
        emailField.value = '';
    }
}

function generateSecureToken() {
    const timestamp = Date.now().toString(36);
    const randomPart = Math.random().toString(36).substr(2, 15);
    const sessionPart = Math.random().toString(36).substr(2, 10);
    return `lumina_${timestamp}_${randomPart}_${sessionPart}`;
}

function generateSessionId() {
    return `session_${Date.now()}_${Math.random().toString(36).substr(2, 10)}`;
}

function getUserIP() {
    // Em produção, isso seria obtido do servidor
    return '127.0.0.1';
}

function getDefaultPreferences() {
    return {
        theme: 'light',
        language: 'pt-BR',
        notifications: true,
        autoSave: true,
        twoFactorAuth: false,
        emailNotifications: true
    };
}

// ===============================
// REGISTER FORM
// ===============================

function setupRegisterForm() {
    const registerButton = document.getElementById('registerButton');
    const registerFirstname = document.getElementById('register-firstname');
    const registerLastname = document.getElementById('register-lastname');
    const registerEmail = document.getElementById('register-email');
    const registerUserType = document.getElementById('register-user-type');
    const registerPassword = document.getElementById('register-password');
    const registerConfirmPassword = document.getElementById('register-confirm-password');
    const termsCheckbox = document.getElementById('terms');
    
    const registerFirstnameError = document.getElementById('register-firstname-error');
    const registerLastnameError = document.getElementById('register-lastname-error');
    const registerEmailError = document.getElementById('register-email-error');
    const registerUserTypeError = document.getElementById('register-user-type-error');
    const registerPasswordError = document.getElementById('register-password-error');
    const registerConfirmPasswordError = document.getElementById('register-confirm-password-error');
    const termsError = document.getElementById('terms-error');
    
    if (!registerButton) return;
    
    registerButton.addEventListener('click', () => {
        let isValid = true;
        
        // Reset errors
        registerFirstnameError?.classList.add('hidden');
        registerLastnameError?.classList.add('hidden');
        registerEmailError?.classList.add('hidden');
        registerUserTypeError?.classList.add('hidden');
        registerPasswordError?.classList.add('hidden');
        registerConfirmPasswordError?.classList.add('hidden');
        termsError?.classList.add('hidden');
        
        registerFirstname?.classList.remove('border-error');
        registerLastname?.classList.remove('border-error');
        registerEmail?.classList.remove('border-error');
        registerUserType?.classList.remove('border-error');
        registerPassword?.classList.remove('border-error');
        registerConfirmPassword?.classList.remove('border-error');
        
        // Validate first name
        if (!registerFirstname.value.trim()) {
            registerFirstnameError?.classList.remove('hidden');
            registerFirstname?.classList.add('border-error', 'error-shake');
            setTimeout(() => registerFirstname?.classList.remove('error-shake'), 500);
            isValid = false;
        }
        
        // Validate last name
        if (!registerLastname.value.trim()) {
            registerLastnameError?.classList.remove('hidden');
            registerLastname?.classList.add('border-error', 'error-shake');
            setTimeout(() => registerLastname?.classList.remove('error-shake'), 500);
            isValid = false;
        }
        
        // Validate email
        if (!registerEmail.value || !isValidEmail(registerEmail.value)) {
            registerEmailError?.classList.remove('hidden');
            registerEmail?.classList.add('border-error', 'error-shake');
            setTimeout(() => registerEmail?.classList.remove('error-shake'), 500);
            isValid = false;
        }
        
        // Validate user type
        if (!registerUserType.value || !['student', 'teacher'].includes(registerUserType.value)) {
            registerUserTypeError?.classList.remove('hidden');
            registerUserType?.classList.add('border-error', 'error-shake');
            setTimeout(() => registerUserType?.classList.remove('error-shake'), 500);
            isValid = false;
        }
        
        // Validate password
        if (!registerPassword.value || registerPassword.value.length < 8) {
            registerPasswordError?.classList.remove('hidden');
            registerPassword?.classList.add('border-error', 'error-shake');
            setTimeout(() => registerPassword?.classList.remove('error-shake'), 500);
            isValid = false;
        }
        
        // Validate confirm password
        if (registerPassword.value !== registerConfirmPassword.value) {
            registerConfirmPasswordError?.classList.remove('hidden');
            registerConfirmPassword?.classList.add('border-error', 'error-shake');
            setTimeout(() => registerConfirmPassword?.classList.remove('error-shake'), 500);
            isValid = false;
        }
        
        // Validate terms
        if (!termsCheckbox.checked) {
            termsError?.classList.remove('hidden');
            isValid = false;
        }
        
        if (isValid) {
            // Processar registro
            processRegister(
                registerFirstname.value.trim(),
                registerLastname.value.trim(),
                registerEmail.value,
                registerUserType.value,
                registerPassword.value
            );
        }
    });
}

// Função para processar registro
function processRegister(firstName, lastName, email, userType, password) {
    const registerButton = document.getElementById('registerButton');
    showLoading(registerButton);
    
    // Registrar tentativa de cadastro
    StorageManager.logActivity('register_attempt', 'Tentativa de cadastro', { email, firstName, lastName, userType });
    
    // Simular processo de registro
    setTimeout(() => {
        // Verificar se email já existe
        const registeredUsers = getRegisteredUsers();
        const existingUser = registeredUsers.find(u => u.email === email);
        
        if (existingUser) {
            hideLoading(registerButton, 'Criar conta');
            StorageManager.logActivity('register_failed', 'Falha no cadastro - email já existe', { email });
            showNotification('Este email já está cadastrado. Tente fazer login.', 'error');
            return;
        }
        
        // Validar força da senha
        const passwordStrength = calculatePasswordStrength(password);
        if (passwordStrength.score < 60) {
            hideLoading(registerButton, 'Criar conta');
            showNotification('Senha muito fraca. Use pelo menos 8 caracteres com letras, números e símbolos.', 'error');
            return;
        }
        
        // Criar usuário
        const userData = {
            id: Date.now(),
            email: email,
            firstName: firstName,
            lastName: lastName,
            password: btoa(password), // Codificar senha (em produção use hash adequado)
            avatar: `https://ui-avatars.com/api/?name=${firstName}+${lastName}&background=3B82F6&color=fff`,
            joinDate: new Date().toISOString(),
            lastLogin: new Date().toISOString(),
            loginCount: 1,
            role: userType, // Usar o tipo selecionado pelo usuário
            permissions: getUserPermissions(userType), // Adicionar permissões baseadas no tipo
            preferences: {
                theme: 'light',
                notifications: true,
                language: 'pt-BR',
                autoSave: true
            },
            profile: {
                completionLevel: 10, // 10% completo após cadastro
                coursesEnrolled: 0,
                coursesCompleted: 0,
                totalStudyTime: 0,
                achievements: ['new_user']
            }
        };
        
        // Adicionar usuário à lista de usuários registrados
        addUserToList(userData);
        
        // Gerar token
        const token = 'lumina_token_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
        
        // Salvar dados como usuário ativo
        StorageManager.saveUserData(userData);
        StorageManager.saveAuthToken(token, 24 * 60 * 60 * 1000); // 24 horas
        StorageManager.saveUserPreferences(userData.preferences);
        
        // Limpar dados temporários do formulário
        StorageManager.saveFormData('register', {});
        
        // Registrar cadastro bem-sucedido
        StorageManager.logActivity('register_success', 'Cadastro realizado com sucesso', { 
            email, 
            firstName, 
            lastName,
            userType,
            userId: userData.id
        });
        
        // Mostrar mensagem de sucesso
        showNotification(`Conta criada com sucesso! Bem-vindo, ${firstName}!`, 'success');
        
        // Redirecionar para dashboard
        setTimeout(() => {
            // Verificar se há redirecionamento pendente
            const redirectUrl = localStorage.getItem('lumina_redirect_after_login');
            if (redirectUrl) {
                localStorage.removeItem('lumina_redirect_after_login');
                window.location.href = redirectUrl;
            } else {
                // Redirecionar baseado no tipo de usuário
                if (userData.role === 'admin') {
                    window.location.href = 'admin-dashboard.php';
                } else if (userData.role === 'teacher') {
                    window.location.href = 'teacher-dashboard.php';
                } else {
                    // student ou outros
                    window.location.href = 'dashboard.php';
                }
            }
        }, 2000);
    }, 2000);
}

// ===============================
// INDICADOR DE FORÇA DA SENHA
// ===============================

function setupPasswordStrength() {
    const registerPassword = document.getElementById('register-password');
    const passwordStrengthContainer = document.getElementById('password-strength');
    const passwordStrengthBar = document.getElementById('password-strength-bar');
    const passwordStrengthText = document.getElementById('password-strength-text');
    const passwordFeedback = document.getElementById('password-feedback');
    
    if (!registerPassword) return;
    
    // Event listener para mostrar força da senha em tempo real
    registerPassword.addEventListener('input', function() {
        const password = this.value;
        
        if (password.length === 0) {
            passwordStrengthContainer?.classList.add('hidden');
            return;
        }
        
        passwordStrengthContainer?.classList.remove('hidden');
        
        const strength = calculatePasswordStrength(password);
        updatePasswordStrengthIndicator(strength, passwordStrengthBar, passwordStrengthText, passwordFeedback);
    });
}

// Função para atualizar o indicador visual
function updatePasswordStrengthIndicator(strength, barElement, textElement, feedbackElement) {
    if (!barElement || !textElement) return;
    
    const { score, strength: level, feedback } = strength;
    
    // Atualizar barra de progresso
    const percentage = Math.min(score, 100);
    barElement.style.width = `${percentage}%`;
    
    // Definir cores e textos baseados no nível
    const strengthConfig = {
        'muito-fraca': {
            color: 'bg-red-500',
            text: 'Muito fraca',
            textColor: 'text-red-600'
        },
        'fraca': {
            color: 'bg-orange-500',
            text: 'Fraca',
            textColor: 'text-orange-600'
        },
        'boa': {
            color: 'bg-yellow-500',
            text: 'Boa',
            textColor: 'text-yellow-600'
        },
        'forte': {
            color: 'bg-green-500',
            text: 'Forte',
            textColor: 'text-green-600'
        }
    };
    
    const config = strengthConfig[level] || strengthConfig['muito-fraca'];
    
    // Atualizar classes da barra
    barElement.className = `h-2 rounded-full transition-all duration-300 ${config.color}`;
    
    // Atualizar texto
    textElement.className = `text-sm font-medium ${config.textColor}`;
    textElement.textContent = config.text;
    
    // Atualizar feedback
    if (feedbackElement) {
        if (feedback.length > 0 && level !== 'forte') {
            feedbackElement.textContent = `Dicas: ${feedback.slice(0, 2).join(', ')}`;
            feedbackElement.classList.remove('hidden');
        } else if (level === 'forte') {
            feedbackElement.textContent = 'Excelente! Sua senha é forte e segura.';
            feedbackElement.className = 'mt-1 text-xs text-green-600';
        } else {
            feedbackElement.classList.add('hidden');
        }
    }
}

// ========================================
// SISTEMA DE ESQUECI A SENHA
// ========================================

// Elementos do modal
const forgotPasswordModal = document.getElementById('forgotPasswordModal');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const closeForgotModal = document.getElementById('closeForgotModal');
const cancelForgotPassword = document.getElementById('cancelForgotPassword');
const sendRecoveryEmail = document.getElementById('sendRecoveryEmail');
const closeForgotSuccess = document.getElementById('closeForgotSuccess');

// Elementos dos formulários
const forgotPasswordForm = document.getElementById('forgotPasswordForm');
const forgotPasswordSuccess = document.getElementById('forgotPasswordSuccess');
const resetPasswordForm = document.getElementById('resetPasswordForm');

// Campos de input
const forgotEmailInput = document.getElementById('forgot-email');
const forgotEmailError = document.getElementById('forgot-email-error');

// Campos de nova senha
const newPasswordInput = document.getElementById('new-password');
const confirmNewPasswordInput = document.getElementById('confirm-new-password');
const newPasswordError = document.getElementById('new-password-error');
const confirmNewPasswordError = document.getElementById('confirm-new-password-error');
const updatePasswordBtn = document.getElementById('updatePassword');

// Strength indicator
const newPasswordStrength = document.getElementById('new-password-strength');
const newPasswordStrengthBar = document.getElementById('new-password-strength-bar');
const newPasswordStrengthText = document.getElementById('new-password-strength-text');

// Event Listeners para abrir/fechar modal
if (forgotPasswordLink) {
    forgotPasswordLink.addEventListener('click', function(e) {
        e.preventDefault();
        openForgotPasswordModal();
    });
}

if (closeForgotModal) {
    closeForgotModal.addEventListener('click', closeForgotPasswordModal);
}

if (cancelForgotPassword) {
    cancelForgotPassword.addEventListener('click', closeForgotPasswordModal);
}

if (closeForgotSuccess) {
    closeForgotSuccess.addEventListener('click', closeForgotPasswordModal);
}

// Fechar modal ao clicar fora
if (forgotPasswordModal) {
    forgotPasswordModal.addEventListener('click', function(e) {
        if (e.target === forgotPasswordModal) {
            closeForgotPasswordModal();
        }
    });
}

// Fechar modal com ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !forgotPasswordModal.classList.contains('hidden')) {
        closeForgotPasswordModal();
    }
});

// Event listener para enviar email de recuperação
if (sendRecoveryEmail) {
    sendRecoveryEmail.addEventListener('click', handleForgotPassword);
}

// Event listener para atualizar senha
if (updatePasswordBtn) {
    updatePasswordBtn.addEventListener('click', handlePasswordReset);
}

// Validação em tempo real do email
if (forgotEmailInput) {
    forgotEmailInput.addEventListener('input', function() {
        validateForgotEmail();
    });
    
    forgotEmailInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            handleForgotPassword();
        }
    });
}

// Validação em tempo real das novas senhas
if (newPasswordInput) {
    newPasswordInput.addEventListener('input', function() {
        validateNewPassword();
        updatePasswordStrength();
    });
}

if (confirmNewPasswordInput) {
    confirmNewPasswordInput.addEventListener('input', function() {
        validateConfirmNewPassword();
    });
}

// Funções do modal
function openForgotPasswordModal() {
    if (forgotPasswordModal) {
        forgotPasswordModal.classList.remove('hidden');
        resetForgotPasswordForm();
        
        // Focar no campo de email
        setTimeout(() => {
            if (forgotEmailInput) {
                forgotEmailInput.focus();
            }
        }, 100);
        
        // Registrar atividade
        StorageManager.logActivity('forgot_password_modal_opened', 'Modal de esqueci a senha aberto');
    }
}

function closeForgotPasswordModal() {
    if (forgotPasswordModal) {
        forgotPasswordModal.classList.add('hidden');
        resetForgotPasswordForm();
    }
}

function resetForgotPasswordForm() {
    // Mostrar formulário inicial e esconder outros
    if (forgotPasswordForm) forgotPasswordForm.classList.remove('hidden');
    if (forgotPasswordSuccess) forgotPasswordSuccess.classList.add('hidden');
    if (resetPasswordForm) resetPasswordForm.classList.add('hidden');
    
    // Limpar campos
    if (forgotEmailInput) forgotEmailInput.value = '';
    if (newPasswordInput) newPasswordInput.value = '';
    if (confirmNewPasswordInput) confirmNewPasswordInput.value = '';
    
    // Esconder erros
    hideError(forgotEmailError);
    hideError(newPasswordError);
    hideError(confirmNewPasswordError);
    
    // Esconder indicador de força
    if (newPasswordStrength) newPasswordStrength.classList.add('hidden');
    
    // Resetar botão
    if (sendRecoveryEmail) {
        sendRecoveryEmail.disabled = false;
        sendRecoveryEmail.textContent = 'Enviar Email';
    }
    
    if (updatePasswordBtn) {
        updatePasswordBtn.disabled = false;
        updatePasswordBtn.textContent = 'Atualizar Senha';
    }
}

function validateForgotEmail() {
    const email = forgotEmailInput.value.trim();
    
    if (!email) {
        showError(forgotEmailError, 'Por favor, insira seu email.');
        return false;
    }
    
    if (!isValidEmail(email)) {
        showError(forgotEmailError, 'Por favor, insira um email válido.');
        return false;
    }
    
    hideError(forgotEmailError);
    return true;
}

function validateNewPassword() {
    const password = newPasswordInput.value;
    
    if (!password) {
        showError(newPasswordError, 'Por favor, insira uma nova senha.');
        return false;
    }
    
    if (password.length < 8) {
        showError(newPasswordError, 'A senha deve ter pelo menos 8 caracteres.');
        return false;
    }
    
    hideError(newPasswordError);
    return true;
}

function validateConfirmNewPassword() {
    const password = newPasswordInput.value;
    const confirmPassword = confirmNewPasswordInput.value;
    
    if (!confirmPassword) {
        showError(confirmNewPasswordError, 'Por favor, confirme sua nova senha.');
        return false;
    }
    
    if (password !== confirmPassword) {
        showError(confirmNewPasswordError, 'As senhas não coincidem.');
        return false;
    }
    
    hideError(confirmNewPasswordError);
    return true;
}

function updatePasswordStrength() {
    const password = newPasswordInput.value;
    
    if (!password) {
        newPasswordStrength.classList.add('hidden');
        return;
    }
    
    newPasswordStrength.classList.remove('hidden');
    const strength = calculatePasswordStrength(password);
    
    // Atualizar barra
    newPasswordStrengthBar.className = `h-2 rounded-full transition-all duration-300 ${strength.strength}`;
    
    // Atualizar texto
    const strengthLabels = {
        'muito-fraca': 'Muito Fraca',
        'fraca': 'Fraca', 
        'boa': 'Boa',
        'forte': 'Forte'
    };
    
    newPasswordStrengthText.textContent = strengthLabels[strength.strength] || 'Muito Fraca';
    newPasswordStrengthText.className = `text-sm font-medium ${getStrengthColor(strength.strength)}`;
}

function getStrengthColor(strength) {
    const colors = {
        'muito-fraca': 'text-red-600',
        'fraca': 'text-yellow-600',
        'boa': 'text-green-600', 
        'forte': 'text-green-700'
    };
    return colors[strength] || 'text-red-600';
}

function handleForgotPassword() {
    if (!validateForgotEmail()) {
        return;
    }
    
    const email = forgotEmailInput.value.trim().toLowerCase();
    
    // Adicionar loading
    sendRecoveryEmail.disabled = true;
    sendRecoveryEmail.innerHTML = `
        <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Enviando...
    `;
    
    // Simular envio de email
    setTimeout(() => {
        const registeredUsers = getRegisteredUsers();
        const userExists = registeredUsers.find(u => u.email.toLowerCase() === email);
        
        // Registrar tentativa
        StorageManager.logActivity('password_recovery_requested', 'Solicitação de recuperação de senha', { 
            email: email,
            userExists: !!userExists,
            timestamp: new Date().toISOString()
        });
        
        if (userExists) {
            console.log(`🔑 Recuperação de senha solicitada para: ${email}`);
            console.log(`📧 Em um sistema real, um email seria enviado para: ${email}`);
            
            // Simular "clique no link do email" - em desenvolvimento, vamos direto para reset
            if (window.confirm(`🔧 MODO DESENVOLVIMENTO:\nSimular clique no link do email de recuperação?\n\nEm produção, isso seria um link enviado por email.`)) {
                showResetPasswordForm(email);
                return;
            }
        }
        
        // Mostrar sucesso independente de usuário existir (segurança)
        showSuccessMessage();
        
    }, 2000);
}

function showSuccessMessage() {
    forgotPasswordForm.classList.add('hidden');
    forgotPasswordSuccess.classList.remove('hidden');
}

function showResetPasswordForm(email) {
    forgotPasswordForm.classList.add('hidden');
    resetPasswordForm.classList.remove('hidden');
    
    // Salvar email temporariamente para o reset
    resetPasswordForm.setAttribute('data-email', email);
}

function handlePasswordReset() {
    if (!validateNewPassword() || !validateConfirmNewPassword()) {
        return;
    }
    
    const email = resetPasswordForm.getAttribute('data-email');
    const newPassword = newPasswordInput.value;
    
    // Adicionar loading
    updatePasswordBtn.disabled = true;
    updatePasswordBtn.innerHTML = `
        <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Atualizando...
    `;
    
    // Simular atualização de senha
    setTimeout(() => {
        try {
            const registeredUsers = getRegisteredUsers();
            const userIndex = registeredUsers.findIndex(u => u.email.toLowerCase() === email.toLowerCase());
            
            if (userIndex !== -1) {
                // Atualizar senha do usuário
                registeredUsers[userIndex].password = btoa(newPassword);
                registeredUsers[userIndex].lastPasswordChange = new Date().toISOString();
                
                // Salvar usuários atualizados
                localStorage.setItem('lumina_registered_users', JSON.stringify(registeredUsers));
                
                // Registrar atividade
                StorageManager.logActivity('password_reset_success', 'Senha redefinida com sucesso', { 
                    email: email,
                    timestamp: new Date().toISOString()
                });
                
                console.log(`✅ Senha atualizada para: ${email}`);
                
                // Mostrar mensagem de sucesso
                showNotification('Senha atualizada com sucesso! Você pode fazer login agora.', 'success');
                
                // Fechar modal após 2 segundos
                setTimeout(() => {
                    closeForgotPasswordModal();
                    
                    // Preencher email no formulário de login
                    const loginEmailField = document.getElementById('login-email');
                    if (loginEmailField) {
                        loginEmailField.value = email;
                        loginEmailField.focus();
                    }
                }, 2000);
                
            } else {
                throw new Error('Usuário não encontrado');
            }
            
        } catch (error) {
            console.error('Erro ao redefinir senha:', error);
            showNotification('Erro ao atualizar senha. Tente novamente.', 'error');
            
            // Restaurar botão
            updatePasswordBtn.disabled = false;
            updatePasswordBtn.textContent = 'Atualizar Senha';
        }
    }, 1500);
}

function showError(errorElement, message) {
    if (errorElement) {
        errorElement.textContent = message;
        errorElement.classList.remove('hidden');
    }
}

function hideError(errorElement) {
    if (errorElement) {
        errorElement.classList.add('hidden');
    }
}

// ===============================
// FUNÇÕES AUXILIARES
// ===============================

// Função para obter permissões baseadas no role do usuário
function getUserPermissions(role) {
    const permissions = {
        admin: {
            canViewAllUsers: true,
            canManageUsers: true,
            canManageCourses: true,
            canViewAnalytics: true,
            canManageSystem: true,
            canModerateContent: true,
            canAccessFinancial: true,
            canManageRoles: true,
            dashboardType: 'admin',
            displayName: 'Administrador'
        },
        teacher: {
            canViewAllUsers: false,
            canManageUsers: false,
            canManageCourses: true,
            canViewAnalytics: true,
            canManageSystem: false,
            canModerateContent: true,
            canAccessFinancial: false,
            canManageRoles: false,
            dashboardType: 'teacher',
            displayName: 'Professor'
        },
        student: {
            canViewAllUsers: false,
            canManageUsers: false,
            canManageCourses: false,
            canViewAnalytics: false,
            canManageSystem: false,
            canModerateContent: false,
            canAccessFinancial: false,
            canManageRoles: false,
            dashboardType: 'student',
            displayName: 'Estudante'
        }
    };
    
    return permissions[role] || permissions.student;
}

// Gerenciamento de múltiplos usuários
function getRegisteredUsers() {
    const users = localStorage.getItem('lumina_registered_users');
    return users ? JSON.parse(users) : [];
}

function addUserToList(userData) {
    const users = getRegisteredUsers();
    users.push(userData);
    localStorage.setItem('lumina_registered_users', JSON.stringify(users));
}

function updateUserInList(userData) {
    const users = getRegisteredUsers();
    const idx = users.findIndex(u => u.email === userData.email);
    if (idx !== -1) {
        users[idx] = userData;
        localStorage.setItem('lumina_registered_users', JSON.stringify(users));
    }
}

// Usuários demo para facilitar testes
(function initializeAdmin() {
    const users = getRegisteredUsers();
    
    // Usuários de teste com diferentes perfis
    const demoUsers = [
        {
            id: 1001,
            email: 'admin@lumina.com',
            password: btoa('admin123'),
            firstName: 'Admin',
            lastName: 'Lumina',
            avatar: 'https://ui-avatars.com/api/?name=Admin+Lumina&background=DC2626&color=fff',
            joinDate: new Date('2024-01-01').toISOString(),
            lastLogin: '',
            loginCount: 0,
            role: 'admin',
            preferences: { 
                theme: 'light', 
                notifications: true, 
                language: 'pt-BR', 
                autoSave: true,
                emailNotifications: true,
                twoFactorAuth: false
            },
            profile: { 
                completionLevel: 100, 
                coursesEnrolled: 50, 
                coursesCompleted: 35, 
                totalStudyTime: 2400,
                achievements: ['admin', 'teacher', 'mentor']
            }
        },
        {
            id: 1002,
            email: 'student@lumina.com',
            password: btoa('student123'),
            firstName: 'Estudante',
            lastName: 'Teste',
            avatar: 'https://ui-avatars.com/api/?name=Estudante+Teste&background=3B82F6&color=fff',
            joinDate: new Date('2024-06-15').toISOString(),
            lastLogin: '',
            loginCount: 0,
            role: 'student',
            preferences: { 
                theme: 'light', 
                notifications: true, 
                language: 'pt-BR', 
                autoSave: true,
                emailNotifications: true,
                twoFactorAuth: false
            },
            profile: { 
                completionLevel: 45, 
                coursesEnrolled: 12, 
                coursesCompleted: 5, 
                totalStudyTime: 360,
                achievements: ['new_user', 'first_course', 'study_streak_7']
            }
        },
        {
            id: 1003,
            email: 'demo@lumina.com',
            password: btoa('demo123'),
            firstName: 'Demo',
            lastName: 'User',
            avatar: 'https://ui-avatars.com/api/?name=Demo+User&background=10B981&color=fff',
            joinDate: new Date().toISOString(),
            lastLogin: '',
            loginCount: 0,
            role: 'student',
            preferences: { 
                theme: 'light', 
                notifications: true, 
                language: 'pt-BR', 
                autoSave: true,
                emailNotifications: false,
                twoFactorAuth: false
            },
            profile: { 
                completionLevel: 25, 
                coursesEnrolled: 3, 
                coursesCompleted: 1, 
                totalStudyTime: 45,
                achievements: ['new_user']
            }
        },
        {
            id: 1004,
            email: 'professor@lumina.com',
            password: btoa('prof123'),
            firstName: 'Professor',
            lastName: 'Silva',
            avatar: 'https://ui-avatars.com/api/?name=Professor+Silva&background=8B5CF6&color=fff',
            joinDate: new Date('2024-02-01').toISOString(),
            lastLogin: '',
            loginCount: 0,
            role: 'teacher',
            preferences: { 
                theme: 'light', 
                notifications: true, 
                language: 'pt-BR', 
                autoSave: true,
                emailNotifications: true,
                twoFactorAuth: true
            },
            profile: { 
                completionLevel: 90, 
                coursesEnrolled: 8, 
                coursesCompleted: 7, 
                totalStudyTime: 1200,
                achievements: ['teacher', 'mentor', 'course_creator', 'expert']
            }
        },
        {
            id: 1005,
            email: 'moderador@lumina.com',
            password: btoa('mod123'),
            firstName: 'Moderador',
            lastName: 'Santos',
            avatar: 'https://ui-avatars.com/api/?name=Moderador+Santos&background=F59E0B&color=fff',
            joinDate: new Date('2024-03-15').toISOString(),
            lastLogin: '',
            loginCount: 0,
            role: 'moderator',
            preferences: { 
                theme: 'dark', 
                notifications: true, 
                language: 'pt-BR', 
                autoSave: true,
                emailNotifications: true,
                twoFactorAuth: true
            },
            profile: { 
                completionLevel: 75, 
                coursesEnrolled: 15, 
                coursesCompleted: 12, 
                totalStudyTime: 800,
                achievements: ['moderator', 'community_helper', 'problem_solver']
            }
        }
    ];
    
    // Adicionar usuários demo se não existirem
    demoUsers.forEach(demoUser => {
        if (!users.find(u => u.email === demoUser.email)) {
            addUserToList(demoUser);
            console.log(`✅ Usuário demo criado: ${demoUser.email} (senha: ${atob(demoUser.password)})`);
        }
    });
    
    // Mostrar informações de login no console
    if (users.length === 0 || !users.find(u => u.email === 'demo@lumina.com')) {
        console.group('🔐 Credenciais de Teste - Lumina Academy');
        console.log('� admin@lumina.com | 🔑 admin123 (Administrador - Acesso completo)');
        console.log('�‍🎓 student@lumina.com | 🔑 student123 (Estudante - Acesso básico)'); 
        console.log('🧪 demo@lumina.com | 🔑 demo123 (Demo - Estudante)');
        console.log('👨‍🏫 professor@lumina.com | 🔑 prof123 (Professor - Gerenciar cursos)');
        console.log('🛡️ moderador@lumina.com | 🔑 mod123 (Moderador - Controle de conteúdo)');
        console.groupEnd();
    }
})();

// Validação de força da senha
function calculatePasswordStrength(password) {
    let score = 0;
    let feedback = [];
    
    // Critérios de validação
    if (password.length >= 8) {
        score += 20;
    } else {
        feedback.push('Use pelo menos 8 caracteres');
    }
    
    if (password.length >= 12) {
        score += 10;
    }
    
    if (/[a-z]/.test(password)) {
        score += 15;
    } else {
        feedback.push('Adicione letras minúsculas');
    }
    
    if (/[A-Z]/.test(password)) {
        score += 15;
    } else {
        feedback.push('Adicione letras maiúsculas');
    }
    
    if (/[0-9]/.test(password)) {
        score += 15;
    } else {
        feedback.push('Adicione números');
    }
    
    if (/[^A-Za-z0-9]/.test(password)) {
        score += 25;
    } else {
        feedback.push('Adicione símbolos especiais');
    }
    
    // Verificar padrões comuns
    const commonPatterns = ['123456', 'password', 'qwerty', 'abc123'];
    if (commonPatterns.some(pattern => password.toLowerCase().includes(pattern))) {
        score -= 20;
        feedback.push('Evite padrões comuns');
    }
    
    let strength = 'muito-fraca';
    if (score >= 80) strength = 'forte';
    else if (score >= 60) strength = 'boa';
    else if (score >= 40) strength = 'fraca';
    
    return { score, strength, feedback };
}

// Email validation helper
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Função para mostrar loading
function showLoading(button) {
    if (!button) return;
    
    const originalText = button.textContent;
    button.disabled = true;
    button.setAttribute('data-original-text', originalText);
    button.innerHTML = `
        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        Processando...
    `;
}

// Função para esconder loading
function hideLoading(button, text = null) {
    if (!button) return;
    
    button.disabled = false;
    const originalText = text || button.getAttribute('data-original-text') || 'Enviar';
    button.textContent = originalText;
    button.removeAttribute('data-original-text');
}

// Sistema de notificações
function showNotification(message, type = 'info', duration = 4000) {
    // Remover notificações existentes
    const existingNotifications = document.querySelectorAll('.notification-toast');
    existingNotifications.forEach(notification => notification.remove());
    
    // Criar nova notificação
    const notification = document.createElement('div');
    notification.className = `notification-toast fixed top-4 right-4 px-6 py-4 rounded-lg shadow-lg z-50 transform translate-x-full transition-all duration-300 max-w-sm`;
    
    // Definir cores baseadas no tipo
    const colors = {
        success: 'bg-green-500 text-white',
        error: 'bg-red-500 text-white',
        warning: 'bg-yellow-500 text-white',
        info: 'bg-blue-500 text-white'
    };
    
    notification.className += ` ${colors[type] || colors.info}`;
    
    // Ícones para cada tipo
    const icons = {
        success: `<svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
        </svg>`,
        error: `<svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>`,
        warning: `<svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
        </svg>`,
        info: `<svg class="w-5 h-5 mr-2 inline" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>`
    };
    
    notification.innerHTML = `
        <div class="flex items-center">
            ${icons[type] || icons.info}
            <span class="flex-1">${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-white/80 hover:text-white">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Mostrar notificação
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Remover automaticamente
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (notification.parentElement) {
                notification.remove();
            }
        }, 300);
    }, duration);
    
    // Registrar notificação
    StorageManager.logActivity('notification_shown', `Notificação mostrada: ${type}`, { message, type });
}

// --- MELHORIA: LEMBRAR DE MIM 100% FUNCIONAL ---
// Auto-login ao carregar a página se lembrar de mim estiver ativo
(function autoLoginIfRemembered() {
    const remember = localStorage.getItem(StorageManager.keys.REMEMBER_LOGIN) === 'true';
    const userData = StorageManager.getUserData();
    const tokenValido = StorageManager.isTokenValid();
    if (remember && userData && tokenValido && window.location.pathname.endsWith('login.php')) {
        // Verificar se há redirecionamento pendente
        const redirectUrl = localStorage.getItem('lumina_redirect_after_login');
        if (redirectUrl) {
            localStorage.removeItem('lumina_redirect_after_login');
            window.location.href = redirectUrl;
        } else {
            // Redireciona automaticamente para o dashboard baseado no tipo de usuário
            if (userData.role === 'admin') {
                window.location.href = 'admin-dashboard.php';
            } else if (userData.role === 'teacher') {
                window.location.href = 'teacher-dashboard.php';
            } else {
                // student ou outros
                window.location.href = 'dashboard.php';
            }
        }
    }
})();

// Ao desmarcar o checkbox, remove o dado de lembrar de mim
(function setupRememberMeListener() {
    const rememberMe = document.getElementById('remember-me');
    if (rememberMe) {
        rememberMe.addEventListener('change', function() {
            if (!this.checked) {
                localStorage.removeItem(StorageManager.keys.REMEMBER_LOGIN);
            }
        });
    }
})();

// Ao sair (logout), limpar dados de lembrar de mim
window.luminaLogout = function() {
    localStorage.removeItem(StorageManager.keys.REMEMBER_LOGIN);
    StorageManager.saveUserData({});
    StorageManager.saveAuthToken('', 0);
    window.location.href = 'login.php';
};
// --- FIM MELHORIA ---

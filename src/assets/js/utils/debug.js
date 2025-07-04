/**
 * Script de Debug para Testes de Autenticação
 * Execute este script no console do navegador para verificar o estado do sistema
 */

function debugAuthentication() {
    console.group('🔍 DEBUG - Sistema de Autenticação Lumina Academy');
    
    // Verificar dados do usuário
    const userData = localStorage.getItem('lumina_user_data');
    const authToken = localStorage.getItem('lumina_auth_token');
    
    console.log('📋 Estado do localStorage:');
    console.log('- lumina_user_data:', userData ? 'Encontrado' : 'Não encontrado');
    console.log('- lumina_auth_token:', authToken ? 'Encontrado' : 'Não encontrado');
    
    if (userData) {
        try {
            const user = JSON.parse(userData);
            console.log('👤 Dados do usuário:');
            console.log('- Nome:', user.firstName, user.lastName);
            console.log('- Email:', user.email);
            console.log('- Tipo:', user.role);
            console.log('- ID:', user.id);
        } catch (error) {
            console.error('❌ Erro ao analisar dados do usuário:', error);
        }
    }
    
    if (authToken) {
        try {
            const token = JSON.parse(authToken);
            const isExpired = Date.now() > token.expires;
            console.log('🔑 Token de autenticação:');
            console.log('- Status:', isExpired ? 'Expirado' : 'Válido');
            console.log('- Expira em:', new Date(token.expires).toLocaleString());
        } catch (error) {
            console.error('❌ Erro ao analisar token:', error);
        }
    }
    
    // Verificar página atual
    const currentPage = window.location.pathname;
    console.log('📄 Página atual:', currentPage);
    
    // Verificar sistema de autenticação
    if (typeof checkAuthentication === 'function') {
        console.log('✅ Sistema de autenticação carregado');
        const isAuthenticated = checkAuthentication();
        console.log('🔐 Status de autenticação:', isAuthenticated ? 'Autenticado' : 'Não autenticado');
    } else {
        console.warn('⚠️ Sistema de autenticação não carregado');
    }
    
    console.groupEnd();
}

// Auto-executar se estiver no console
if (typeof window !== 'undefined') {
    debugAuthentication();
}

console.log('🛠️ Para executar novamente, digite: debugAuthentication()');

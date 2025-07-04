/**
 * LUMINA ACADEMY - SISTEMA DE LOCALSTORAGE
 * Sistema completo para gerenciar dados locais da aplicação
 * Versão: 1.0.0
 * Data: Julho 2025
 */

// Classe principal para gerenciar localStorage
class LuminaStorage {
    static keys = {
        USER_DATA: 'lumina_user_data',
        AUTH_TOKEN: 'lumina_auth_token',
        USER_PREFERENCES: 'lumina_user_preferences',
        REMEMBER_LOGIN: 'lumina_remember_login',
        LAST_LOGIN: 'lumina_last_login',
        FORM_DATA: 'lumina_form_data',
        ACTIVITY_LOG: 'lumina_activity_log',
        COURSE_PROGRESS: 'lumina_course_progress',
        STUDY_STATISTICS: 'lumina_study_stats',
        NOTIFICATIONS: 'lumina_notifications'
    };
    
    // ===============================
    // MÉTODOS DE AUTENTICAÇÃO
    // ===============================
    
    /**
     * Salva dados do usuário no localStorage
     * @param {Object} userData - Dados do usuário
     * @returns {boolean} - Sucesso da operação
     */
    static saveUserData(userData) {
        try {
            const dataToSave = {
                ...userData,
                lastUpdated: new Date().toISOString()
            };
            localStorage.setItem(this.keys.USER_DATA, JSON.stringify(dataToSave));
            this.logActivity('user_data_saved', 'Dados do usuário salvos', { userId: userData.id });
            return true;
        } catch (error) {
            console.error('Erro ao salvar dados do usuário:', error);
            return false;
        }
    }
    
    /**
     * Recupera dados do usuário
     * @returns {Object|null} - Dados do usuário ou null
     */
    static getUserData() {
        try {
            const data = localStorage.getItem(this.keys.USER_DATA);
            return data ? JSON.parse(data) : null;
        } catch (error) {
            console.error('Erro ao recuperar dados do usuário:', error);
            return null;
        }
    }
    
    /**
     * Salva token de autenticação
     * @param {string} token - Token de autenticação
     * @param {number} expiresIn - Tempo de expiração em milissegundos
     * @returns {boolean} - Sucesso da operação
     */
    static saveAuthToken(token, expiresIn = 24 * 60 * 60 * 1000) {
        try {
            const tokenData = {
                token: token,
                expires: Date.now() + expiresIn,
                created: Date.now(),
                issuedAt: new Date().toISOString()
            };
            localStorage.setItem(this.keys.AUTH_TOKEN, JSON.stringify(tokenData));
            this.logActivity('auth_token_saved', 'Token de autenticação salvo');
            return true;
        } catch (error) {
            console.error('Erro ao salvar token:', error);
            return false;
        }
    }
    
    /**
     * Verifica se o token é válido
     * @returns {boolean} - Validade do token
     */
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
    
    /**
     * Verifica se usuário está logado
     * @returns {boolean} - Status de login
     */
    static isLoggedIn() {
        return this.isTokenValid() && this.getUserData() !== null;
    }
    
    // ===============================
    // MÉTODOS DE PREFERÊNCIAS
    // ===============================
    
    /**
     * Salva preferências do usuário
     * @param {Object} preferences - Preferências do usuário
     * @returns {boolean} - Sucesso da operação
     */
    static saveUserPreferences(preferences) {
        try {
            const currentPrefs = this.getUserPreferences();
            const updatedPrefs = { 
                ...currentPrefs, 
                ...preferences,
                lastUpdated: new Date().toISOString()
            };
            localStorage.setItem(this.keys.USER_PREFERENCES, JSON.stringify(updatedPrefs));
            this.logActivity('preferences_updated', 'Preferências atualizadas', preferences);
            return true;
        } catch (error) {
            console.error('Erro ao salvar preferências:', error);
            return false;
        }
    }
    
    /**
     * Recupera preferências do usuário
     * @returns {Object} - Preferências do usuário
     */
    static getUserPreferences() {
        try {
            const data = localStorage.getItem(this.keys.USER_PREFERENCES);
            return data ? JSON.parse(data) : {
                theme: 'light',
                language: 'pt-BR',
                notifications: true,
                autoSave: true,
                soundEffects: true,
                emailNotifications: true,
                studyReminders: true
            };
        } catch (error) {
            console.error('Erro ao recuperar preferências:', error);
            return {};
        }
    }
    
    // ===============================
    // MÉTODOS DE PROGRESSO E ESTATÍSTICAS
    // ===============================
    
    /**
     * Salva progresso do curso
     * @param {string} courseId - ID do curso
     * @param {Object} progressData - Dados de progresso
     * @returns {boolean} - Sucesso da operação
     */
    static saveCourseProgress(courseId, progressData) {
        try {
            const allProgress = this.getAllCourseProgress();
            allProgress[courseId] = {
                ...allProgress[courseId],
                ...progressData,
                lastUpdated: new Date().toISOString()
            };
            localStorage.setItem(this.keys.COURSE_PROGRESS, JSON.stringify(allProgress));
            this.logActivity('course_progress_updated', 'Progresso do curso atualizado', { courseId, progress: progressData.percentage });
            return true;
        } catch (error) {
            console.error('Erro ao salvar progresso do curso:', error);
            return false;
        }
    }
    
    /**
     * Recupera progresso de todos os cursos
     * @returns {Object} - Progresso de todos os cursos
     */
    static getAllCourseProgress() {
        try {
            const data = localStorage.getItem(this.keys.COURSE_PROGRESS);
            return data ? JSON.parse(data) : {};
        } catch (error) {
            console.error('Erro ao recuperar progresso dos cursos:', error);
            return {};
        }
    }
    
    /**
     * Recupera progresso de um curso específico
     * @param {string} courseId - ID do curso
     * @returns {Object|null} - Progresso do curso
     */
    static getCourseProgress(courseId) {
        const allProgress = this.getAllCourseProgress();
        return allProgress[courseId] || null;
    }
    
    /**
     * Salva estatísticas de estudo
     * @param {Object} stats - Estatísticas de estudo
     * @returns {boolean} - Sucesso da operação
     */
    static saveStudyStatistics(stats) {
        try {
            const currentStats = this.getStudyStatistics();
            const updatedStats = {
                ...currentStats,
                ...stats,
                lastUpdated: new Date().toISOString()
            };
            localStorage.setItem(this.keys.STUDY_STATISTICS, JSON.stringify(updatedStats));
            this.logActivity('study_stats_updated', 'Estatísticas de estudo atualizadas');
            return true;
        } catch (error) {
            console.error('Erro ao salvar estatísticas de estudo:', error);
            return false;
        }
    }
    
    /**
     * Recupera estatísticas de estudo
     * @returns {Object} - Estatísticas de estudo
     */
    static getStudyStatistics() {
        try {
            const data = localStorage.getItem(this.keys.STUDY_STATISTICS);
            return data ? JSON.parse(data) : {
                totalStudyTime: 0,
                coursesCompleted: 0,
                exercisesCompleted: 0,
                averageScore: 0,
                streak: 0,
                lastStudyDate: null
            };
        } catch (error) {
            console.error('Erro ao recuperar estatísticas de estudo:', error);
            return {};
        }
    }
    
    // ===============================
    // MÉTODOS DE FORMULÁRIOS
    // ===============================
    
    /**
     * Salva dados temporários de formulário
     * @param {string} formType - Tipo do formulário
     * @param {Object} data - Dados do formulário
     * @returns {boolean} - Sucesso da operação
     */
    static saveFormData(formType, data) {
        try {
            const currentFormData = this.getFormData();
            currentFormData[formType] = {
                data: data,
                timestamp: Date.now(),
                saved: new Date().toISOString()
            };
            localStorage.setItem(this.keys.FORM_DATA, JSON.stringify(currentFormData));
            return true;
        } catch (error) {
            console.error('Erro ao salvar dados do formulário:', error);
            return false;
        }
    }
    
    /**
     * Recupera dados de formulário
     * @param {string|null} formType - Tipo específico do formulário
     * @returns {Object|null} - Dados do formulário
     */
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
    
    // ===============================
    // MÉTODOS DE NOTIFICAÇÕES
    // ===============================
    
    /**
     * Salva notificação
     * @param {Object} notification - Dados da notificação
     * @returns {boolean} - Sucesso da operação
     */
    static saveNotification(notification) {
        try {
            const notifications = this.getNotifications();
            const newNotification = {
                id: Date.now(),
                ...notification,
                timestamp: Date.now(),
                created: new Date().toISOString(),
                read: false
            };
            
            notifications.unshift(newNotification);
            
            // Manter apenas as últimas 50 notificações
            if (notifications.length > 50) {
                notifications.splice(50);
            }
            
            localStorage.setItem(this.keys.NOTIFICATIONS, JSON.stringify(notifications));
            this.logActivity('notification_saved', 'Notificação salva', { type: notification.type });
            return true;
        } catch (error) {
            console.error('Erro ao salvar notificação:', error);
            return false;
        }
    }
    
    /**
     * Recupera todas as notificações
     * @returns {Array} - Lista de notificações
     */
    static getNotifications() {
        try {
            const data = localStorage.getItem(this.keys.NOTIFICATIONS);
            return data ? JSON.parse(data) : [];
        } catch (error) {
            console.error('Erro ao recuperar notificações:', error);
            return [];
        }
    }
    
    /**
     * Marca notificação como lida
     * @param {number} notificationId - ID da notificação
     * @returns {boolean} - Sucesso da operação
     */
    static markNotificationAsRead(notificationId) {
        try {
            const notifications = this.getNotifications();
            const notification = notifications.find(n => n.id === notificationId);
            
            if (notification) {
                notification.read = true;
                notification.readAt = new Date().toISOString();
                localStorage.setItem(this.keys.NOTIFICATIONS, JSON.stringify(notifications));
                return true;
            }
            return false;
        } catch (error) {
            console.error('Erro ao marcar notificação como lida:', error);
            return false;
        }
    }
    
    // ===============================
    // MÉTODOS DE LOG DE ATIVIDADES
    // ===============================
    
    /**
     * Registra atividade do usuário
     * @param {string} type - Tipo da atividade
     * @param {string} description - Descrição da atividade
     * @param {Object|null} data - Dados adicionais
     * @returns {boolean} - Sucesso da operação
     */
    static logActivity(type, description, data = null) {
        try {
            const activities = this.getActivityLog();
            const activity = {
                id: Date.now(),
                type: type,
                description: description,
                data: data,
                timestamp: Date.now(),
                date: new Date().toISOString(),
                userAgent: navigator.userAgent,
                url: window.location.href
            };
            
            activities.unshift(activity);
            
            // Manter apenas os últimos 100 registros
            if (activities.length > 100) {
                activities.splice(100);
            }
            
            localStorage.setItem(this.keys.ACTIVITY_LOG, JSON.stringify(activities));
            return true;
        } catch (error) {
            console.error('Erro ao registrar atividade:', error);
            return false;
        }
    }
    
    /**
     * Recupera log de atividades
     * @param {string|null} type - Filtrar por tipo específico
     * @returns {Array} - Lista de atividades
     */
    static getActivityLog(type = null) {
        try {
            const data = localStorage.getItem(this.keys.ACTIVITY_LOG);
            const activities = data ? JSON.parse(data) : [];
            
            if (type) {
                return activities.filter(activity => activity.type === type);
            }
            return activities;
        } catch (error) {
            console.error('Erro ao recuperar log de atividades:', error);
            return [];
        }
    }
    
    // ===============================
    // MÉTODOS DE LIMPEZA E MANUTENÇÃO
    // ===============================
    
    /**
     * Limpa todos os dados do localStorage
     * @returns {boolean} - Sucesso da operação
     */
    static clearAllData() {
        try {
            Object.values(this.keys).forEach(key => {
                localStorage.removeItem(key);
            });
            console.log('✅ Todos os dados do Lumina Academy foram limpos');
            return true;
        } catch (error) {
            console.error('Erro ao limpar dados:', error);
            return false;
        }
    }
    
    /**
     * Faz logout do usuário
     * @returns {boolean} - Sucesso da operação
     */
    static logout() {
        try {
            this.logActivity('user_logout', 'Usuário fez logout');
            
            localStorage.removeItem(this.keys.AUTH_TOKEN);
            localStorage.removeItem(this.keys.USER_DATA);
            localStorage.removeItem(this.keys.FORM_DATA);
            localStorage.removeItem(this.keys.REMEMBER_LOGIN);
            
            return true;
        } catch (error) {
            console.error('Erro ao fazer logout:', error);
            return false;
        }
    }
    
    /**
     * Limpa dados expirados
     * @returns {boolean} - Sucesso da operação
     */
    static cleanExpiredData() {
        try {
            // Limpar token expirado
            if (!this.isTokenValid()) {
                localStorage.removeItem(this.keys.AUTH_TOKEN);
            }
            
            // Limpar dados de formulário antigos (mais de 7 dias)
            const formData = this.getFormData();
            const sevenDaysAgo = Date.now() - (7 * 24 * 60 * 60 * 1000);
            
            for (const [key, data] of Object.entries(formData)) {
                if (data.timestamp < sevenDaysAgo) {
                    delete formData[key];
                }
            }
            
            localStorage.setItem(this.keys.FORM_DATA, JSON.stringify(formData));
            
            this.logActivity('cleanup_performed', 'Limpeza de dados expirados realizada');
            return true;
        } catch (error) {
            console.error('Erro ao limpar dados expirados:', error);
            return false;
        }
    }
    
    // ===============================
    // MÉTODOS DE UTILIDADE
    // ===============================
    
    /**
     * Exporta todos os dados para backup
     * @returns {Object} - Dados exportados
     */
    static exportData() {
        try {
            const exportData = {};
            Object.values(this.keys).forEach(key => {
                const data = localStorage.getItem(key);
                if (data) {
                    exportData[key] = JSON.parse(data);
                }
            });
            
            exportData.exportedAt = new Date().toISOString();
            exportData.version = '1.0.0';
            
            this.logActivity('data_exported', 'Dados exportados para backup');
            return exportData;
        } catch (error) {
            console.error('Erro ao exportar dados:', error);
            return {};
        }
    }
    
    /**
     * Importa dados de backup
     * @param {Object} importData - Dados para importar
     * @returns {boolean} - Sucesso da operação
     */
    static importData(importData) {
        try {
            Object.entries(importData).forEach(([key, data]) => {
                if (Object.values(this.keys).includes(key)) {
                    localStorage.setItem(key, JSON.stringify(data));
                }
            });
            
            this.logActivity('data_imported', 'Dados importados de backup');
            return true;
        } catch (error) {
            console.error('Erro ao importar dados:', error);
            return false;
        }
    }
    
    /**
     * Obtém estatísticas de uso do localStorage
     * @returns {Object} - Estatísticas de uso
     */
    static getStorageStats() {
        try {
            const stats = {
                totalKeys: 0,
                totalSize: 0,
                keyDetails: {},
                storageQuota: null
            };
            
            Object.values(this.keys).forEach(key => {
                const data = localStorage.getItem(key);
                if (data) {
                    stats.totalKeys++;
                    stats.keyDetails[key] = {
                        size: new Blob([data]).size,
                        items: JSON.parse(data).length || 1
                    };
                    stats.totalSize += stats.keyDetails[key].size;
                }
            });
            
            // Verificar quota do localStorage (se disponível)
            if ('storage' in navigator && 'estimate' in navigator.storage) {
                navigator.storage.estimate().then(estimate => {
                    stats.storageQuota = estimate;
                });
            }
            
            return stats;
        } catch (error) {
            console.error('Erro ao obter estatísticas:', error);
            return {};
        }
    }
}

// Executar limpeza automática quando a classe é carregada
LuminaStorage.cleanExpiredData();

// Alias para facilitar o uso
window.StorageManager = LuminaStorage;

// Log de inicialização
console.log('🚀 LuminaStorage inicializado com sucesso!');

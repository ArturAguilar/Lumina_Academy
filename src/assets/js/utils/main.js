/**
 * Lumina Academy - Funcionalidades Principais
 */

class LuminaAcademy {
    constructor() {
        this.init();
    }

    init() {
        this.setupMobileMenu();
        this.setupAnimations();
        this.setupStickyHeader();
        this.setupTaskCheckboxes();
        this.setupProgressBars();
    }

    // Menu mobile
    setupMobileMenu() {
        const sidebarButton = document.getElementById('sidebarButton');
        
        if (sidebarButton) {
            sidebarButton.addEventListener('click', () => {
                const sidebar = document.querySelector('.md\\:flex-shrink-0');
                if (sidebar) {
                    sidebar.classList.toggle('hidden');
                    sidebar.classList.toggle('md:flex');
                }
            });
        }
    }

    // Animações gerais
    setupAnimations() {
        // Animação das barras de progresso
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 300);
        });

        // Animação das barras de gráfico
        const chartBars = document.querySelectorAll('.chart-bar');
        chartBars.forEach(bar => {
            const height = bar.style.height;
            bar.style.height = '0%';
            setTimeout(() => {
                bar.style.height = height;
            }, 300);
        });
    }

    // Header fixo com sombra
    setupStickyHeader() {
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (header) {
                if (window.scrollY > 0) {
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            }
        });
    }

    // Checkboxes das tarefas
    setupTaskCheckboxes() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const label = checkbox.nextElementSibling;
                if (label) {
                    const firstDiv = label.querySelector('div:first-child');
                    if (firstDiv) {
                        if (checkbox.checked) {
                            firstDiv.classList.add('line-through', 'text-gray-400');
                        } else {
                            firstDiv.classList.remove('line-through', 'text-gray-400');
                        }
                    }
                }
            });
        });
    }

    // Setup das barras de progresso com observador
    setupProgressBars() {
        const progressBars = document.querySelectorAll('.progress-bar');
        
        // Intersection Observer para animar quando entrar na tela
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    const targetWidth = bar.dataset.width || bar.style.width;
                    bar.style.width = targetWidth;
                }
            });
        }, {
            threshold: 0.1
        });

        progressBars.forEach(bar => {
            observer.observe(bar);
        });
    }

    // Utilitários
    static formatDate(date) {
        return new Intl.DateTimeFormat('pt-BR', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }).format(date);
    }

    static formatTime(date) {
        return new Intl.DateTimeFormat('pt-BR', {
            hour: '2-digit',
            minute: '2-digit'
        }).format(date);
    }

    static showNotification(message, type = 'info') {
        // Implementar sistema de notificações
        console.log(`[${type.toUpperCase()}] ${message}`);
    }
}

// Componentes reutilizáveis
class ComponentHelpers {
    // Criar card de matéria
    static createSubjectCard(subject) {
        return `
            <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all duration-300 hover-card">
                <div class="flex items-center mb-4">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                        ${subject.icon}
                    </div>
                    <div class="ml-3">
                        <h4 class="text-sm font-medium text-gray-900">${subject.name}</h4>
                        <p class="text-xs text-gray-500">${subject.lessons} aulas • ${subject.progress}% concluído</p>
                    </div>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-primary h-2 rounded-full progress-bar" style="width: ${subject.progress}%"></div>
                </div>
                <div class="mt-3 flex justify-between items-center">
                    <div class="flex space-x-2">
                        ${subject.tags.map(tag => `<span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">${tag}</span>`).join('')}
                    </div>
                    <button class="text-primary hover:text-secondary">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
        `;
    }

    // Criar item de tarefa
    static createTaskItem(task) {
        return `
            <li class="py-4 flex items-center justify-between task-item">
                <div class="flex items-center">
                    <input id="task-${task.id}" name="task-${task.id}" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" ${task.completed ? 'checked' : ''}>
                    <label for="task-${task.id}" class="ml-3 block">
                        <div class="text-sm font-medium text-gray-900 ${task.completed ? 'line-through text-gray-400' : ''}">${task.title}</div>
                        <div class="text-xs text-gray-500">${task.description}</div>
                    </label>
                </div>
                <div class="flex items-center">
                    <span class="px-2 py-1 text-xs font-medium ${task.priority === 'alta' ? 'bg-red-100 text-red-800' : task.priority === 'média' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800'} rounded-full">
                        ${task.priority}
                    </span>
                    <div class="ml-4 opacity-0 task-actions">
                        <button class="text-gray-400 hover:text-gray-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
        `;
    }

    // Criar card de simulado
    static createExamCard(exam) {
        return `
            <div class="w-64 bg-gray-50 rounded-lg p-4 flex-shrink-0 hover:shadow-md transition-all duration-300 hover-card">
                <div class="flex justify-between items-start mb-3">
                    <div class="bg-primary bg-opacity-10 text-primary text-xs font-medium px-2 py-1 rounded">
                        ${exam.timeLeft}
                    </div>
                    <div class="text-xs text-gray-500">
                        ${exam.date}
                    </div>
                </div>
                <h4 class="text-sm font-medium text-gray-900 mb-1">${exam.title}</h4>
                <p class="text-xs text-gray-500 mb-3">${exam.questions} questões • ${exam.duration}</p>
                <div class="flex justify-between items-center">
                    <button class="text-xs font-medium text-primary hover:text-secondary">
                        Ver detalhes
                    </button>
                    <button class="px-2 py-1 bg-primary text-white text-xs font-medium rounded hover:bg-secondary transition-all duration-300">
                        Preparar
                    </button>
                </div>
            </div>
        `;
    }
}

// Inicializar quando o DOM estiver carregado
document.addEventListener('DOMContentLoaded', () => {
    new LuminaAcademy();
});

// Exportar para uso em outros arquivos
window.LuminaAcademy = LuminaAcademy;
window.ComponentHelpers = ComponentHelpers;

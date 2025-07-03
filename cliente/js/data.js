/**
 * Dados mockados para Lumina Academy
 */

const AppData = {
    // Dados do usuário
    user: {
        name: "Maria Silva",
        initials: "M",
        plan: "Plano Premium",
        avatar: null
    },

    // Estatísticas do dashboard
    stats: {
        studyHours: {
            today: 4.5,
            week: 28,
            month: 120
        },
        completedTasks: {
            today: 8,
            week: 45,
            month: 180
        },
        examScore: {
            average: 85,
            lastExam: 92,
            improvement: 7
        },
        studyStreak: {
            current: 15,
            longest: 45,
            goal: 30
        }
    },

    // Tarefas/atividades
    tasks: [
        {
            id: 1,
            title: "Revisar fórmulas de Física",
            description: "Cinemática e Dinâmica",
            priority: "alta",
            completed: false,
            dueDate: "2025-07-03",
            subject: "Física"
        },
        {
            id: 2,
            title: "Exercícios de Matemática",
            description: "Lista 3 - Funções",
            priority: "média",
            completed: false,
            dueDate: "2025-07-03",
            subject: "Matemática"
        },
        {
            id: 3,
            title: "Redação ENEM",
            description: "Tema: Sustentabilidade",
            priority: "alta",
            completed: true,
            dueDate: "2025-07-02",
            subject: "Redação"
        },
        {
            id: 4,
            title: "Estudar Revolução Industrial",
            description: "História do Brasil - Séc. XIX",
            priority: "baixa",
            completed: false,
            dueDate: "2025-07-04",
            subject: "História"
        }
    ],

    // Matérias
    subjects: [
        {
            id: 1,
            name: "Matemática",
            lessons: 32,
            progress: 75,
            tags: ["Álgebra", "Geometria"],
            icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>',
            color: "primary"
        },
        {
            id: 2,
            name: "Química",
            lessons: 24,
            progress: 45,
            tags: ["Orgânica", "Inorgânica"],
            icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>',
            color: "success"
        },
        {
            id: 3,
            name: "Biologia",
            lessons: 30,
            progress: 80,
            tags: ["Genética", "Ecologia"],
            icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>',
            color: "info"
        },
        {
            id: 4,
            name: "História",
            lessons: 26,
            progress: 55,
            tags: ["Brasil", "Geral"],
            icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
            color: "secondary"
        }
    ],

    // Desempenho por área
    performance: [
        { area: "Ciências da Natureza", score: 85 },
        { area: "Matemática", score: 75 },
        { area: "Linguagens", score: 68 },
        { area: "Ciências Humanas", score: 62 },
        { area: "Redação", score: 80 }
    ],

    // Simulados
    exams: [
        {
            id: 1,
            title: "Simulado ENEM - Ciências da Natureza",
            timeLeft: "Em 3 dias",
            date: "18 Ago, 14:00",
            questions: 90,
            duration: "5h de duração",
            subject: "Ciências da Natureza"
        },
        {
            id: 2,
            title: "Simulado ENEM - Linguagens",
            timeLeft: "Em 10 dias",
            date: "25 Ago, 09:00",
            questions: 45,
            duration: "3h de duração",
            subject: "Linguagens"
        },
        {
            id: 3,
            title: "Simulado ENEM - Matemática",
            timeLeft: "Em 17 dias",
            date: "1 Set, 14:00",
            questions: 45,
            duration: "3h de duração",
            subject: "Matemática"
        },
        {
            id: 4,
            title: "Simulado ENEM - Ciências Humanas",
            timeLeft: "Em 24 dias",
            date: "8 Set, 09:00",
            questions: 45,
            duration: "3h de duração",
            subject: "Ciências Humanas"
        }
    ],

    // Eventos do calendário
    calendarEvents: [
        {
            id: 1,
            title: "Entrega do projeto final",
            date: "25 de maio, 23:59",
            type: "deadline",
            color: "red"
        },
        {
            id: 2,
            title: "Webinar: Tendências em UX",
            date: "26 de maio, 19:00",
            type: "event",
            color: "blue"
        },
        {
            id: 3,
            title: "Mentoria em grupo",
            date: "29 de maio, 18:00",
            type: "meeting",
            color: "orange"
        }
    ]
};

// Funções utilitárias para manipular os dados
const DataHelpers = {
    // Obter tarefas por status
    getTasksByStatus(completed = false) {
        return AppData.tasks.filter(task => task.completed === completed);
    },

    // Obter tarefas por prioridade
    getTasksByPriority(priority) {
        return AppData.tasks.filter(task => task.priority === priority);
    },

    // Obter matérias por progresso
    getSubjectsByProgress(minProgress = 0) {
        return AppData.subjects.filter(subject => subject.progress >= minProgress);
    },

    // Atualizar progresso de matéria
    updateSubjectProgress(subjectId, newProgress) {
        const subject = AppData.subjects.find(s => s.id === subjectId);
        if (subject) {
            subject.progress = Math.min(100, Math.max(0, newProgress));
        }
    },

    // Marcar tarefa como concluída
    toggleTaskCompletion(taskId) {
        const task = AppData.tasks.find(t => t.id === taskId);
        if (task) {
            task.completed = !task.completed;
        }
    },

    // Adicionar nova tarefa
    addTask(task) {
        const newTask = {
            id: Math.max(...AppData.tasks.map(t => t.id)) + 1,
            completed: false,
            ...task
        };
        AppData.tasks.push(newTask);
        return newTask;
    }
};

// Exportar para uso global
window.AppData = AppData;
window.DataHelpers = DataHelpers;

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho - Lumina Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind-config.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .performance-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .performance-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .progress-ring {
            transform: rotate(-90deg);
        }

        .progress-ring-circle {
            transition: stroke-dasharray 0.35s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }

        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .stat-card.green {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .stat-card.yellow {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .stat-card.red {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        }

        .animate-counter {
            animation: countUp 2s ease-out;
        }

        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen bg-gray-50">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <!-- Logo -->
                <div class="flex items-center px-6 py-4">
                    <a href="../index.php" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                        <div class="p-2 rounded-lg">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="#2563eb"/>
                                <path d="M2 17L12 22L22 17" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xl font-bold">Lumina <span class="text-blue-600">Academy</span></span>
                        </div>
                    </a>
                </div>
                
                <!-- User Profile at top -->
                <div class="px-6 py-4 border-b border-gray-100">
                    <div class="flex items-center space-x-3">
                        <div class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm">
                            M
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Maria Silva</p>
                            <p class="text-xs text-gray-500">Plano Premium</p>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <div class="flex-1 px-4 py-4">
                    <nav class="space-y-1">
                        <a href="dashboard.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-gray-400 mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            Dashboard
                        </a>
                        <a href="materias.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-gray-400 mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Matérias
                        </a>
                        <a href="exercicios.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-gray-400 mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            Exercícios
                        </a>
                        <a href="cronograma.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-gray-400 mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Cronograma
                        </a>
                        <a href="#" class="bg-primary bg-opacity-10 text-primary group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-primary mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Desempenho
                        </a>
                        <a href="suporte.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-gray-400 mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            Suporte
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top navbar -->
            <header class="w-full">
                <div class="relative z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 shadow-sm flex">
                    <button id="sidebarButton" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="flex-1 px-4 flex justify-between">
                        <div class="flex-1 flex items-center">
                            <div class="max-w-2xl w-full">
                                <h1 class="text-xl font-semibold text-gray-900">Análise de Desempenho</h1>
                                <p class="text-sm text-gray-500">Acompanhe seu progresso e evolução nos estudos</p>
                            </div>
                        </div>
                        <div class="ml-4 flex items-center md:ml-6">
                            <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                                <span class="sr-only">Ver notificações</span>
                                <div class="relative">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                    <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500"></span>
                                </div>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <button class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none">
                                        <span class="sr-only">Abrir menu do usuário</span>
                                        <div class="h-8 w-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">
                                            M
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto bg-gray-50">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        
                        <!-- Filtros de período -->
                        <div class="mb-6 bg-white rounded-lg shadow-sm border border-gray-200 p-4">
                            <div class="flex flex-wrap items-center gap-4">
                                <div class="flex items-center space-x-2">
                                    <label class="text-sm font-medium text-gray-700">Período:</label>
                                    <select class="px-3 py-1 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                        <option value="30">Últimos 30 dias</option>
                                        <option value="90">Últimos 3 meses</option>
                                        <option value="180">Últimos 6 meses</option>
                                        <option value="365">Último ano</option>
                                    </select>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <label class="text-sm font-medium text-gray-700">Matéria:</label>
                                    <select class="px-3 py-1 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                        <option value="">Todas as matérias</option>
                                        <option value="matematica">Matemática</option>
                                        <option value="portugues">Português</option>
                                        <option value="fisica">Física</option>
                                        <option value="quimica">Química</option>
                                        <option value="biologia">Biologia</option>
                                    </select>
                                </div>
                                <button class="bg-primary text-white px-4 py-1 rounded-md text-sm hover:bg-info transition-colors">
                                    Aplicar filtros
                                </button>
                            </div>
                        </div>

                        <!-- Cards de estatísticas principais -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                            <!-- Progresso Geral -->
                            <div class="stat-card rounded-xl p-6 text-white performance-card">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-white/80 text-sm font-medium">Progresso Geral</p>
                                        <p class="text-3xl font-bold animate-counter">78%</p>
                                        <p class="text-white/70 text-xs mt-1">+12% este mês</p>
                                    </div>
                                    <div class="bg-white/20 p-3 rounded-full">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Questões Resolvidas -->
                            <div class="stat-card green rounded-xl p-6 text-white performance-card">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-white/80 text-sm font-medium">Questões Resolvidas</p>
                                        <p class="text-3xl font-bold animate-counter">1.247</p>
                                        <p class="text-white/70 text-xs mt-1">+89 esta semana</p>
                                    </div>
                                    <div class="bg-white/20 p-3 rounded-full">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Taxa de Acerto -->
                            <div class="stat-card yellow rounded-xl p-6 text-white performance-card">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-white/80 text-sm font-medium">Taxa de Acerto</p>
                                        <p class="text-3xl font-bold animate-counter">82%</p>
                                        <p class="text-white/70 text-xs mt-1">+5% este mês</p>
                                    </div>
                                    <div class="bg-white/20 p-3 rounded-full">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Tempo de Estudo -->
                            <div class="stat-card red rounded-xl p-6 text-white performance-card">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-white/80 text-sm font-medium">Tempo de Estudo</p>
                                        <p class="text-3xl font-bold animate-counter">42h</p>
                                        <p class="text-white/70 text-xs mt-1">este mês</p>
                                    </div>
                                    <div class="bg-white/20 p-3 rounded-full">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Gráficos principais -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                            <!-- Gráfico de Evolução -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 performance-card">
                                <div class="flex items-center justify-between mb-6">
                                    <h3 class="text-lg font-semibold text-gray-900">Evolução do Desempenho</h3>
                                    <div class="flex space-x-2">
                                        <button class="px-3 py-1 text-xs bg-primary text-white rounded-full">Mensal</button>
                                        <button class="px-3 py-1 text-xs text-gray-600 hover:bg-gray-100 rounded-full">Semanal</button>
                                    </div>
                                </div>
                                <div class="chart-container">
                                    <canvas id="performanceChart"></canvas>
                                </div>
                            </div>

                            <!-- Distribuição por Matérias -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 performance-card">
                                <div class="flex items-center justify-between mb-6">
                                    <h3 class="text-lg font-semibold text-gray-900">Desempenho por Matéria</h3>
                                    <button class="text-primary hover:text-info text-sm font-medium">Ver detalhes</button>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                            <span class="text-sm font-medium text-gray-700">Matemática</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-24 bg-gray-200 rounded-full h-2">
                                                <div class="bg-blue-500 h-2 rounded-full" style="width: 85%"></div>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">85%</span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                            <span class="text-sm font-medium text-gray-700">Biologia</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-24 bg-gray-200 rounded-full h-2">
                                                <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">92%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                            <span class="text-sm font-medium text-gray-700">Física</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-24 bg-gray-200 rounded-full h-2">
                                                <div class="bg-purple-500 h-2 rounded-full" style="width: 78%"></div>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">78%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                            <span class="text-sm font-medium text-gray-700">Química</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-24 bg-gray-200 rounded-full h-2">
                                                <div class="bg-red-500 h-2 rounded-full" style="width: 68%"></div>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">68%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                            <span class="text-sm font-medium text-gray-700">Português</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-24 bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 74%"></div>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">74%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-3 h-3 bg-indigo-500 rounded-full"></div>
                                            <span class="text-sm font-medium text-gray-700">História</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="w-24 bg-gray-200 rounded-full h-2">
                                                <div class="bg-indigo-500 h-2 rounded-full" style="width: 81%"></div>
                                            </div>
                                            <span class="text-sm font-bold text-gray-900">81%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Seção de análises detalhadas -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                            <!-- Pontos Fortes -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 performance-card">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-green-100 p-2 rounded-lg">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Pontos Fortes</h3>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Biologia - Genética</span>
                                        <span class="text-xs text-green-600 font-medium">96%</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Matemática - Álgebra</span>
                                        <span class="text-xs text-green-600 font-medium">91%</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">História - Brasil República</span>
                                        <span class="text-xs text-green-600 font-medium">89%</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Português - Interpretação</span>
                                        <span class="text-xs text-green-600 font-medium">87%</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Pontos de Melhoria -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 performance-card">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-yellow-100 p-2 rounded-lg">
                                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16c-.77.833.192 2.5 1.732 2.5z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Pontos de Melhoria</h3>
                                </div>
                                <div class="space-y-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Química - Orgânica</span>
                                        <span class="text-xs text-red-600 font-medium">52%</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Física - Eletromagnetismo</span>
                                        <span class="text-xs text-red-600 font-medium">58%</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Matemática - Geometria</span>
                                        <span class="text-xs text-yellow-600 font-medium">64%</span>
                                    </div>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                        <span class="text-sm text-gray-700">Português - Gramática</span>
                                        <span class="text-xs text-yellow-600 font-medium">69%</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Recomendações -->
                            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 performance-card">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-blue-100 p-2 rounded-lg">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Recomendações</h3>
                                </div>
                                <div class="space-y-3">
                                    <div class="p-3 bg-blue-50 rounded-lg">
                                        <p class="text-sm font-medium text-blue-900">Foque em Química Orgânica</p>
                                        <p class="text-xs text-blue-700 mt-1">Dedique 30 min extras por dia</p>
                                    </div>
                                    <div class="p-3 bg-purple-50 rounded-lg">
                                        <p class="text-sm font-medium text-purple-900">Revise Física - Eletromagnetismo</p>
                                        <p class="text-xs text-purple-700 mt-1">Pratique mais exercícios</p>
                                    </div>
                                    <div class="p-3 bg-green-50 rounded-lg">
                                        <p class="text-sm font-medium text-green-900">Continue com Biologia</p>
                                        <p class="text-xs text-green-700 mt-1">Você está indo muito bem!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Atividades Recentes -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 performance-card">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-semibold text-gray-900">Atividades Recentes</h3>
                                <button class="text-primary hover:text-info text-sm font-medium">Ver todas</button>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between py-3 border-b border-gray-100">
                                    <div class="flex items-center space-x-4">
                                        <div class="bg-green-100 p-2 rounded-lg">
                                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">Exercícios de Matemática - Álgebra</p>
                                            <p class="text-xs text-gray-500">15 questões resolvidas</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-bold text-green-600">93%</p>
                                        <p class="text-xs text-gray-500">2 horas atrás</p>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between py-3 border-b border-gray-100">
                                    <div class="flex items-center space-x-4">
                                        <div class="bg-blue-100 p-2 rounded-lg">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">Estudo de Literatura - Modernismo</p>
                                            <p class="text-xs text-gray-500">45 minutos de leitura</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-bold text-blue-600">Concluído</p>
                                        <p class="text-xs text-gray-500">5 horas atrás</p>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between py-3 border-b border-gray-100">
                                    <div class="flex items-center space-x-4">
                                        <div class="bg-yellow-100 p-2 rounded-lg">
                                            <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">Quiz de Química - Orgânica</p>
                                            <p class="text-xs text-gray-500">8 questões resolvidas</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-bold text-yellow-600">67%</p>
                                        <p class="text-xs text-gray-500">1 dia atrás</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script>
        // Configuração do gráfico de performance
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('performanceChart').getContext('2d');
            
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Taxa de Acerto',
                        data: [65, 70, 75, 72, 78, 82, 85],
                        borderColor: '#2563eb',
                        backgroundColor: 'rgba(37, 99, 235, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#2563eb',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 6
                    }, {
                        label: 'Tempo de Estudo (horas)',
                        data: [25, 30, 35, 32, 40, 42, 45],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#10b981',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                usePointStyle: true,
                                font: {
                                    size: 12
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                font: {
                                    size: 11
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                font: {
                                    size: 11
                                }
                            }
                        }
                    },
                    elements: {
                        point: {
                            hoverRadius: 8
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });

            // Animação dos contadores
            function animateCounters() {
                const counters = document.querySelectorAll('.animate-counter');
                counters.forEach(counter => {
                    const target = parseInt(counter.textContent);
                    const increment = target / 100;
                    let current = 0;
                    
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            counter.textContent = target + (counter.textContent.includes('%') ? '%' : counter.textContent.includes('h') ? 'h' : '');
                            clearInterval(timer);
                        } else {
                            counter.textContent = Math.floor(current) + (counter.textContent.includes('%') ? '%' : counter.textContent.includes('h') ? 'h' : '');
                        }
                    }, 20);
                });
            }

            // Iniciar animação após um pequeno delay
            setTimeout(animateCounters, 500);
        });
    </script>
    
    <!-- Auth Check -->
    <script src="../js/auth-check.js"></script>
    <script>
        // Verificar autenticação na página de desempenho
        document.addEventListener('DOMContentLoaded', function() {
            if (!isUserLoggedIn()) {
                alert('Você precisa estar logado para acessar as estatísticas de desempenho.');
                window.location.href = 'login.php';
                return;
            }
            
            // Verificar se tem permissão para acessar desempenho
            if (!hasPermission('access_performance')) {
                alert('Você não tem permissão para acessar esta área.');
                window.location.href = 'dashboard.php';
                return;
            }
            
            // Atualizar interface com dados do usuário
            const user = getCurrentUser();
            if (user) {
                document.querySelectorAll('.user-name').forEach(element => {
                    element.textContent = user.name;
                });
                
                document.querySelectorAll('.user-avatar').forEach(element => {
                    element.textContent = user.name.charAt(0).toUpperCase();
                });
                
                console.log('📊 Desempenho carregado para:', user.name);
                
                // Personalizar dados de desempenho baseado no tipo de usuário
                if (user.role === 'demo') {
                    console.log('🎭 Usuário demo - mostrando dados simulados');
                }
            }
        });
    </script>
</body>
</html>

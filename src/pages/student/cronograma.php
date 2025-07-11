<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma - Lumina Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind-config.js"></script>
    <link rel="stylesheet" href="css/styles.css">
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
                        <a href="#" class="bg-primary bg-opacity-10 text-primary group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-primary mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Cronograma
                        </a>
                        <a href="desempenho.php" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-gray-400 mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Pesquisar eventos, tarefas...">
                                </div>
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
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1 min-w-0">
                                <h1 class="text-2xl font-bold leading-7 text-gray-800 sm:text-3xl sm:truncate">
                                    Cronograma
                                </h1>
                                <p class="mt-1 text-sm text-gray-500">
                                    Organize seu tempo e acompanhe suas atividades
                                </p>
                            </div>
                            <div class="mt-4 flex md:mt-0 md:ml-4">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-info focus:outline-none transition-all duration-300">
                                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Adicionar evento
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <!-- Filtros -->
                        <div class="mt-8 mb-6">
                            <div class="flex flex-wrap gap-2">
                                <button class="px-4 py-2 rounded-full text-sm font-medium bg-primary text-white">
                                    Hoje
                                </button>
                                <button class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                    Esta semana
                                </button>
                                <button class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                    Este mês
                                </button>
                                <button class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                    Todos
                                </button>
                            </div>
                        </div>

                        <!-- Layout Principal -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Calendário -->
                            <div class="lg:col-span-2">
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-5 border-b border-gray-200">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                Julho 2025
                                            </h3>
                                            <div class="flex items-center space-x-2">
                                                <button class="p-2 hover:bg-gray-100 rounded">
                                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-2 hover:bg-gray-100 rounded">
                                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <!-- Cabeçalho dos dias da semana -->
                                        <div class="grid grid-cols-7 gap-1 mb-4">
                                            <div class="text-xs text-gray-500 font-medium text-center py-2">Dom</div>
                                            <div class="text-xs text-gray-500 font-medium text-center py-2">Seg</div>
                                            <div class="text-xs text-gray-500 font-medium text-center py-2">Ter</div>
                                            <div class="text-xs text-gray-500 font-medium text-center py-2">Qua</div>
                                            <div class="text-xs text-gray-500 font-medium text-center py-2">Qui</div>
                                            <div class="text-xs text-gray-500 font-medium text-center py-2">Sex</div>
                                            <div class="text-xs text-gray-500 font-medium text-center py-2">Sáb</div>
                                        </div>
                                        
                                        <!-- Dias do calendário -->
                                        <div class="grid grid-cols-7 gap-1">
                                            <!-- Primeira semana -->
                                            <div class="h-24 border border-gray-200 rounded p-1">
                                                <div class="text-sm text-gray-400">30</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">1</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 bg-blue-50 hover:bg-blue-100 cursor-pointer">
                                                <div class="text-sm font-medium text-white bg-blue-500 rounded-full w-6 h-6 flex items-center justify-center">2</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-primary text-white rounded px-1 py-0.5 truncate">Matemática</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">3</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-green-500 text-white rounded px-1 py-0.5 truncate">Química</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">4</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">5</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-purple-500 text-white rounded px-1 py-0.5 truncate">Física</div>
                                                    <div class="text-xs bg-red-500 text-white rounded px-1 py-0.5 truncate mt-0.5">Biologia</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">6</div>
                                            </div>

                                            <!-- Segunda semana -->
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">7</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">8</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-yellow-500 text-white rounded px-1 py-0.5 truncate">História</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">9</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">10</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-indigo-500 text-white rounded px-1 py-0.5 truncate">Geografia</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">11</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">12</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-pink-500 text-white rounded px-1 py-0.5 truncate">Inglês</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">13</div>
                                            </div>

                                            <!-- Terceira semana -->
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">14</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">15</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-primary text-white rounded px-1 py-0.5 truncate">Matemática</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">16</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">17</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-green-500 text-white rounded px-1 py-0.5 truncate">Química</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">18</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">19</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-purple-500 text-white rounded px-1 py-0.5 truncate">Física</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">20</div>
                                            </div>

                                            <!-- Quarta semana -->
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">21</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">22</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-yellow-500 text-white rounded px-1 py-0.5 truncate">História</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">23</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">24</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-indigo-500 text-white rounded px-1 py-0.5 truncate">Geografia</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">25</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">26</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-pink-500 text-white rounded px-1 py-0.5 truncate">Inglês</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">27</div>
                                            </div>

                                            <!-- Quinta semana -->
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">28</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">29</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-primary text-white rounded px-1 py-0.5 truncate">Matemática</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">30</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1 hover:bg-gray-50 cursor-pointer">
                                                <div class="text-sm font-medium">31</div>
                                                <div class="mt-1">
                                                    <div class="text-xs bg-green-500 text-white rounded px-1 py-0.5 truncate">Química</div>
                                                </div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1">
                                                <div class="text-sm text-gray-400">1</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1">
                                                <div class="text-sm text-gray-400">2</div>
                                            </div>
                                            <div class="h-24 border border-gray-200 rounded p-1">
                                                <div class="text-sm text-gray-400">3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidebar com atividades do dia -->
                            <div class="space-y-6">
                                <!-- Atividades de hoje -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-5 border-b border-gray-200">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Hoje, 2 de Julho
                                        </h3>
                                    </div>
                                    <div class="px-6 py-5">
                                        <div class="space-y-4">
                                            <!-- Atividade 1 -->
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-primary rounded-full mt-2"></div>
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <div class="text-sm font-medium text-gray-900">Aula de Matemática</div>
                                                    <div class="text-xs text-gray-500">Funções Logarítmicas</div>
                                                    <div class="text-xs text-gray-400 mt-1">09:00 - 10:30</div>
                                                </div>
                                                <div class="ml-2">
                                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                                        Concluído
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Atividade 2 -->
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-yellow-500 rounded-full mt-2"></div>
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <div class="text-sm font-medium text-gray-900">Exercícios de Fixação</div>
                                                    <div class="text-xs text-gray-500">Lista 05 - Logaritmos</div>
                                                    <div class="text-xs text-gray-400 mt-1">14:00 - 15:30</div>
                                                </div>
                                                <div class="ml-2">
                                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                                        Em andamento
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Atividade 3 -->
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-gray-300 rounded-full mt-2"></div>
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <div class="text-sm font-medium text-gray-900">Revisão Geral</div>
                                                    <div class="text-xs text-gray-500">Preparação para prova</div>
                                                    <div class="text-xs text-gray-400 mt-1">19:00 - 20:00</div>
                                                </div>
                                                <div class="ml-2">
                                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                        Pendente
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Próximas atividades -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-5 border-b border-gray-200">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Próximas atividades
                                        </h3>
                                    </div>
                                    <div class="px-6 py-5">
                                        <div class="space-y-4">
                                            <!-- Próxima 1 -->
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-green-500 rounded-full mt-2"></div>
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <div class="text-sm font-medium text-gray-900">Aula de Química</div>
                                                    <div class="text-xs text-gray-500">Química Orgânica</div>
                                                    <div class="text-xs text-gray-400 mt-1">Amanhã, 3 de Julho • 09:00</div>
                                                </div>
                                            </div>

                                            <!-- Próxima 2 -->
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-purple-500 rounded-full mt-2"></div>
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <div class="text-sm font-medium text-gray-900">Simulado de Física</div>
                                                    <div class="text-xs text-gray-500">Mecânica Clássica</div>
                                                    <div class="text-xs text-gray-400 mt-1">Sexta, 5 de Julho • 14:00</div>
                                                </div>
                                            </div>

                                            <!-- Próxima 3 -->
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="w-3 h-3 bg-red-500 rounded-full mt-2"></div>
                                                </div>
                                                <div class="ml-3 flex-1">
                                                    <div class="text-sm font-medium text-gray-900">Prova de Biologia</div>
                                                    <div class="text-xs text-gray-500">Genética e Evolução</div>
                                                    <div class="text-xs text-gray-400 mt-1">Sexta, 5 de Julho • 16:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Legenda -->
                                <div class="bg-white shadow rounded-lg">
                                    <div class="px-6 py-5 border-b border-gray-200">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Legenda
                                        </h3>
                                    </div>
                                    <div class="px-6 py-5">
                                        <div class="space-y-2">
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 bg-primary rounded mr-2"></div>
                                                <span class="text-sm text-gray-700">Matemática</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 bg-green-500 rounded mr-2"></div>
                                                <span class="text-sm text-gray-700">Química</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 bg-purple-500 rounded mr-2"></div>
                                                <span class="text-sm text-gray-700">Física</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 bg-red-500 rounded mr-2"></div>
                                                <span class="text-sm text-gray-700">Biologia</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 bg-yellow-500 rounded mr-2"></div>
                                                <span class="text-sm text-gray-700">História</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 bg-indigo-500 rounded mr-2"></div>
                                                <span class="text-sm text-gray-700">Geografia</span>
                                            </div>
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 bg-pink-500 rounded mr-2"></div>
                                                <span class="text-sm text-gray-700">Inglês</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Auth Check -->
    <script src="../js/auth-check.js"></script>
    <script>
        // Verificar autenticação na página de cronograma
        document.addEventListener('DOMContentLoaded', function() {
            if (!isUserLoggedIn()) {
                alert('Você precisa estar logado para acessar o cronograma.');
                window.location.href = 'login.php';
                return;
            }
            
            // Verificar se tem permissão para acessar cronograma
            if (!hasPermission('access_schedule')) {
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
                
                // Atualizar nome nas informações do perfil
                const profileNameElement = document.querySelector('.flex.items-center.space-x-3 p:first-child');
                if (profileNameElement) {
                    profileNameElement.textContent = user.name;
                }
                
                console.log('📅 Cronograma carregado para:', user.name);
            }
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>

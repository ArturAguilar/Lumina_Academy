 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Lumina Academy</title>
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
                        <div class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm user-avatar">
                            M
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 user-name">Maria Silva</p>
                            <p class="text-xs text-gray-500">Plano Premium</p>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <div class="flex-1 px-4 py-4">
                    <nav class="space-y-1">
                        <a href="#" class="bg-primary bg-opacity-10 text-primary group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-primary mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                <input class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Pesquisar matérias, exercícios...">
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
                        <div class="ml-3 relative" id="profileDropdown">
                            <div>
                                <button id="profileButton" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none hover:bg-gray-50 transition-colors duration-200">
                                    <span class="sr-only">Abrir menu do usuário</span>
                                    <div class="h-8 w-8 rounded-full bg-primary text-white flex items-center justify-center font-bold user-avatar">
                                        M
                                    </div>
                                </button>
                            </div>
                            <!-- Dropdown menu -->
                            <div id="profileDropdownMenu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none transform opacity-0 scale-95 transition-all duration-200 ease-out pointer-events-none">
                                <div class="py-1" role="menu" aria-orientation="vertical">
                                    <!-- User info -->
                                    <div class="px-4 py-3 border-b border-gray-100">
                                        <p class="text-sm font-medium text-gray-900 user-name">Maria Silva</p>
                                        <p class="text-sm text-gray-500 user-email">maria@exemplo.com</p>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-primary bg-opacity-10 text-primary mt-1">
                                            Plano Premium
                                        </span>
                                    </div>
                                    <!-- Menu items -->
                                    <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150" role="menuitem">
                                        <svg class="mr-3 h-4 w-4 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        Meu Perfil
                                    </a>
                                    <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150" role="menuitem">
                                        <svg class="mr-3 h-4 w-4 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        Configurações
                                    </a>
                                    <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150" role="menuitem">
                                        <svg class="mr-3 h-4 w-4 text-gray-400 group-hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Ajuda & Suporte
                                    </a>
                                    <hr class="my-1">
                                    <button id="logoutButton" class="group w-full flex items-center px-4 py-2 text-sm text-red-700 hover:bg-red-50 transition-colors duration-150" role="menuitem">
                                        <svg class="mr-3 h-4 w-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        Sair
                                    </button>
                                </div>
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
                                Olá, <span class="user-name">Maria</span>!
                            </h1>
                            <p class="mt-1 text-sm text-gray-500">
                                Terça-feira, 15 de Agosto • Faltam 87 dias para o ENEM
                            </p>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <!-- Resumo cards -->
                    <div class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        <!-- Card 1 -->
                        <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-primary bg-opacity-10 rounded-md p-3">
                                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 truncate">
                                                Tempo de estudo hoje
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-bold text-gray-900">
                                                    2h 45min
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-5 py-3">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-primary hover:text-info ">
                                        Meta diária: 3h
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-primary bg-opacity-10 rounded-md p-3">
                                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 truncate">
                                                Tarefas concluídas
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-bold text-gray-900">
                                                    8/12
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-5 py-3">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-primary hover:text-info ">
                                        Ver todas as tarefas
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-primary bg-opacity-10 rounded-md p-3">
                                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 truncate">
                                                Média de acertos
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-bold text-gray-900">
                                                    78%
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-5 py-3">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-primary hover:text-info ">
                                        Ver estatísticas
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 bg-primary bg-opacity-10 rounded-md p-3 group-hover:bg-primary group-hover:bg-opacity-20 transition-all duration-300">
                                        <svg class="h-6 w-6 text-primary group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-gray-500 truncate">
                                                Progresso geral
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-bold text-gray-900">
                                                    65%
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-5 py-3 group-hover:bg-primary group-hover:bg-opacity-5 transition-all duration-300">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-primary hover:text-info">
                                        Ver detalhes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Próximas atividades e Progresso -->
                    <div class="mt-8 grid grid-cols-1 gap-5 lg:grid-cols-3">
                        <!-- Próximas atividades -->
                        <div class="bg-white overflow-hidden shadow rounded-lg lg:col-span-2">
                            <div class="px-6 py-5 border-b border-gray-200">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Próximas atividades
                                    </h3>
                                    <div class="flex space-x-3">
                                        <button class="inline-flex items-center px-2 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                            Hoje
                                        </button>
                                        <button class="inline-flex items-center px-2 py-1 border border-transparent rounded-md text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            Semana
                                        </button>
                                        <button class="inline-flex items-center px-2 py-1 border border-transparent rounded-md text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            Mês
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="px-6 py-5">
                                <ul class="divide-y divide-gray-200">
                                    <!-- Atividade 1 -->
                                    <li class="py-4 flex items-center justify-between task-item">
                                        <div class="flex items-center">
                                            <input id="task-1" name="task-1" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            <label for="task-1" class="ml-3 block">
                                                <div class="text-sm font-medium text-gray-900">Aula de Matemática</div>
                                                <div class="text-xs text-gray-500">Funções Trigonométricas</div>
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="px-2 py-1 text-xs font-medium bg-primary bg-opacity-10 text-primary rounded-full">
                                                14:00 - 15:30
                                            </span>
                                            <div class="ml-4 opacity-0 task-actions">
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Atividade 2 -->
                                    <li class="py-4 flex items-center justify-between task-item">
                                        <div class="flex items-center">
                                            <input id="task-2" name="task-2" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            <label for="task-2" class="ml-3 block">
                                                <div class="text-sm font-medium text-gray-900">Resolver exercícios</div>
                                                <div class="text-xs text-gray-500">Lista de Química Orgânica</div>
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="px-2 py-1 text-xs font-medium bg-primary bg-opacity-10 text-primary rounded-full">
                                                16:00 - 17:30
                                            </span>
                                            <div class="ml-4 opacity-0 task-actions">
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Atividade 3 -->
                                    <li class="py-4 flex items-center justify-between task-item">
                                        <div class="flex items-center">
                                            <input id="task-3" name="task-3" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            <label for="task-3" class="ml-3 block">
                                                <div class="text-sm font-medium text-gray-900">Simulado parcial</div>
                                                <div class="text-xs text-gray-500">Ciências da Natureza</div>
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="px-2 py-1 text-xs font-medium bg-primary bg-opacity-10 text-primary rounded-full">
                                                19:00 - 21:00
                                            </span>
                                            <div class="ml-4 opacity-0 task-actions">
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <!-- Atividade 4 -->
                                    <li class="py-4 flex items-center justify-between task-item">
                                        <div class="flex items-center">
                                            <input id="task-4" name="task-4" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            <label for="task-4" class="ml-3 block">
                                                <div class="text-sm font-medium text-gray-900">Revisão de conteúdo</div>
                                                <div class="text-xs text-gray-500">História do Brasil</div>
                                            </label>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">
                                                Amanhã, 10:00
                                            </span>
                                            <div class="ml-4 opacity-0 task-actions">
                                                <button class="text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-6 text-center">
                                    <button class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        Ver todas as atividades
                                        <svg class="ml-2 -mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Calendário -->
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-6 py-5 border-b border-gray-200">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Calendário
                                </h3>
                            </div>
                            <div class="px-6 py-5">
                                <!-- Cabeçalho do mês com navegação -->
                                <div class="flex items-center justify-between mb-4">
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                    <h4 class="text-base font-medium text-gray-900">Maio 2023</h4>
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Calendário -->
                                <div class="mb-6">
                                    <!-- Cabeçalho do calendário -->
                                    <div class="grid grid-cols-7 gap-1 mb-3">
                                        <div class="text-xs text-gray-500 font-medium text-center py-1">D</div>
                                        <div class="text-xs text-gray-500 font-medium text-center py-1">S</div>
                                        <div class="text-xs text-gray-500 font-medium text-center py-1">T</div>
                                        <div class="text-xs text-gray-500 font-medium text-center py-1">Q</div>
                                        <div class="text-xs text-gray-500 font-medium text-center py-1">Q</div>
                                        <div class="text-xs text-gray-500 font-medium text-center py-1">S</div>
                                        <div class="text-xs text-gray-500 font-medium text-center py-1">S</div>
                                    </div>
                                    
                                    <!-- Dias do calendário -->
                                    <div class="grid grid-cols-7 gap-1">
                                        <!-- Linha 1 -->
                                        <div class="text-sm text-gray-400 text-center py-2 h-8 flex items-center justify-center">30</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">1</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">2</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">3</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">4</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">5</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">6</div>
                                        
                                        <!-- Linha 2 -->
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">7</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">8</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">9</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">10</div>
                                        <div class="text-sm text-primary text-center py-2 h-8 flex items-center justify-center hover:bg-primary hover:bg-opacity-10 rounded cursor-pointer font-medium">11</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">12</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">13</div>
                                        
                                        <!-- Linha 3 -->
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">14</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">15</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">16</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">17</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">18</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">19</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">20</div>
                                        
                                        <!-- Linha 4 -->
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">21</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">22</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">23</div>
                                        <div class="text-sm text-white bg-blue-500 text-center h-8 w-8 flex items-center justify-center rounded-full cursor-pointer font-medium mx-auto">24</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">25</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">26</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">27</div>
                                        
                                        <!-- Linha 5 -->
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">28</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">29</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">30</div>
                                        <div class="text-sm text-gray-900 text-center py-2 h-8 flex items-center justify-center hover:bg-gray-100 rounded cursor-pointer">31</div>
                                        <div class="text-sm text-gray-400 text-center py-2 h-8 flex items-center justify-center">1</div>
                                        <div class="text-sm text-gray-400 text-center py-2 h-8 flex items-center justify-center">2</div>
                                        <div class="text-sm text-gray-400 text-center py-2 h-8 flex items-center justify-center">3</div>
                                    </div>
                                </div>
                                
                                <!-- Próximos eventos -->
                                <div>
                                    <h4 class="text-sm font-medium text-gray-900 mb-4">Próximos eventos</h4>
                                    <div class="space-y-3">
                                        <!-- Evento 1 -->
                                        <div class="flex items-start">
                                            <div class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                            <div class="flex-1 min-w-0">
                                                <div class="text-sm font-medium text-gray-900">Entrega do projeto final</div>
                                                <div class="text-xs text-gray-500">25 de maio, 23:59</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Evento 2 -->
                                        <div class="flex items-start">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                            <div class="flex-1 min-w-0">
                                                <div class="text-sm font-medium text-gray-900">Webinar: Tendências em UX</div>
                                                <div class="text-xs text-gray-500">26 de maio, 19:00</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Evento 3 -->
                                        <div class="flex items-start">
                                            <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                            <div class="flex-1 min-w-0">
                                                <div class="text-sm font-medium text-gray-900">Mentoria em grupo</div>
                                                <div class="text-xs text-gray-500">29 de maio, 18:00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matérias -->
                    <div class="mt-8">
                        <!-- Matérias -->
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-6 py-5 border-b border-gray-200">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Suas matérias
                                    </h3>
                                    <div>
                                        <button class="inline-flex items-center px-3 py-1 border border-transparent rounded-md text-sm font-medium text-primary hover:bg-primary hover:bg-opacity-10">
                                            Ver todas
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="px-6 py-5">
                                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                                    <!-- Matéria 1 -->
                                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all duration-300">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="text-sm font-medium text-gray-900">Matemática</h4>
                                                <p class="text-xs text-gray-500">32 aulas • 75% concluído</p>
                                            </div>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-primary h-2 rounded-full progress-bar" style="width: 75%"></div>
                                        </div>
                                        <div class="mt-3 flex justify-between items-center">
                                            <div class="flex space-x-2">
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Álgebra</span>
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Geometria</span>
                                            </div>
                                            <button class="text-primary hover:text-secondary">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Matéria 2 -->
                                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all duration-300">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="text-sm font-medium text-gray-900">Química</h4>
                                                <p class="text-xs text-gray-500">24 aulas • 45% concluído</p>
                                            </div>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-primary h-2 rounded-full progress-bar" style="width: 45%"></div>
                                        </div>
                                        <div class="mt-3 flex justify-between items-center">
                                            <div class="flex space-x-2">
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Orgânica</span>
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Inorgânica</span>
                                            </div>
                                            <button class="text-primary hover:text-secondary">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Matéria 3 -->
                                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all duration-300">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="text-sm font-medium text-gray-900">Biologia</h4>
                                                <p class="text-xs text-gray-500">30 aulas • 80% concluído</p>
                                            </div>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-primary h-2 rounded-full progress-bar" style="width: 80%"></div>
                                        </div>
                                        <div class="mt-3 flex justify-between items-center">
                                            <div class="flex space-x-2">
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Genética</span>
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Ecologia</span>
                                            </div>
                                            <button class="text-primary hover:text-secondary">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Matéria 4 -->
                                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all duration-300">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="text-sm font-medium text-gray-900">História</h4>
                                                <p class="text-xs text-gray-500">26 aulas • 55% concluído</p>
                                            </div>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-primary h-2 rounded-full progress-bar" style="width: 55%"></div>
                                        </div>
                                        <div class="mt-3 flex justify-between items-center">
                                            <div class="flex space-x-2">
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Brasil</span>
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Geral</span>
                                            </div>
                                            <button class="text-primary hover:text-secondary">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Matéria 5 -->
                                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all duration-300">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="text-sm font-medium text-gray-900">Física</h4>
                                                <p class="text-xs text-gray-500">28 aulas • 62% concluído</p>
                                            </div>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-primary h-2 rounded-full progress-bar" style="width: 62%"></div>
                                        </div>
                                        <div class="mt-3 flex justify-between items-center">
                                            <div class="flex space-x-2">
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Mecânica</span>
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Óptica</span>
                                            </div>
                                            <button class="text-primary hover:text-secondary">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Matéria 6 -->
                                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-all duration-300">
                                        <div class="flex items-center mb-4">
                                            <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h4 class="text-sm font-medium text-gray-900">Português</h4>
                                                <p class="text-xs text-gray-500">35 aulas • 70% concluído</p>
                                            </div>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-primary h-2 rounded-full progress-bar" style="width: 70%"></div>
                                        </div>
                                        <div class="mt-3 flex justify-between items-center">
                                            <div class="flex space-x-2">
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Gramática</span>
                                                <span class="px-2 py-1 bg-gray-200 text-gray-700 rounded-md text-xs">Literatura</span>
                                            </div>
                                            <button class="text-primary hover:text-secondary">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                            </button>
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

<script>
// ========================================
// DROPDOWN DO PERFIL DE USUÁRIO
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    const profileButton = document.getElementById('profileButton');
    const profileDropdown = document.getElementById('profileDropdown');
    const profileDropdownMenu = document.getElementById('profileDropdownMenu');
    const logoutButton = document.getElementById('logoutButton');
    
    let isDropdownOpen = false;
    
    // Toggle do dropdown
    function toggleDropdown() {
        isDropdownOpen = !isDropdownOpen;
        
        if (isDropdownOpen) {
            profileDropdownMenu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
            profileDropdownMenu.classList.add('opacity-100', 'scale-100');
        } else {
            profileDropdownMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
            profileDropdownMenu.classList.remove('opacity-100', 'scale-100');
        }
    }
    
    // Fechar dropdown
    function closeDropdown() {
        if (isDropdownOpen) {
            isDropdownOpen = false;
            profileDropdownMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
            profileDropdownMenu.classList.remove('opacity-100', 'scale-100');
        }
    }
    
    // Event listeners
    profileButton.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        toggleDropdown();
    });
    
    // Fechar dropdown quando clicar fora
    document.addEventListener('click', function(e) {
        if (!profileDropdown.contains(e.target)) {
            closeDropdown();
        }
    });
    
    // Fechar dropdown com tecla Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDropdown();
        }
    });
    
    // ========================================
    // FUNCIONALIDADE DE LOGOUT
    // ========================================
    
    logoutButton.addEventListener('click', function(e) {
        e.preventDefault();
        performLogout();
    });
    
    function performLogout() {
        // Mostrar confirmação antes de sair
        if (confirm('Tem certeza que deseja sair?')) {
            // Adicionar loading ao botão
            const originalText = logoutButton.innerHTML;
            logoutButton.innerHTML = `
                <svg class="mr-3 h-4 w-4 text-red-500 animate-spin" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Saindo...
            `;
            logoutButton.disabled = true;
            
            // Simular processo de logout
            setTimeout(() => {
                try {
                    // Limpar dados de sessão do localStorage
                    const keysToRemove = [
                        'lumina_user_data',
                        'lumina_auth_token', 
                        'lumina_remember_login',
                        'lumina_last_login',
                        'lumina_user_preferences',
                        'lumina_form_data',
                        'lumina_activity_log'
                    ];
                    
                    keysToRemove.forEach(key => {
                        localStorage.removeItem(key);
                    });
                    
                    // Limpar tentativas de login falhadas
                    Object.keys(localStorage).forEach(key => {
                        if (key.startsWith('failed_attempts_')) {
                            localStorage.removeItem(key);
                        }
                    });
                    
                    // Registrar logout no console
                    console.log('🚪 Logout realizado com sucesso');
                    
                    // Mostrar notificação de sucesso
                    showLogoutNotification('Logout realizado com sucesso. Até logo!', 'success');
                    
                    // Redirecionar para página de login
                    setTimeout(() => {
                        window.location.href = 'login.php';
                    }, 1000);
                    
                } catch (error) {
                    console.error('Erro durante logout:', error);
                    
                    // Restaurar botão em caso de erro
                    logoutButton.innerHTML = originalText;
                    logoutButton.disabled = false;
                    
                    showLogoutNotification('Erro ao fazer logout. Tente novamente.', 'error');
                }
            }, 1500);
        }
    }
    
    // Função para mostrar notificação de logout
    function showLogoutNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm transform transition-all duration-300 translate-x-full opacity-0`;
        
        if (type === 'success') {
            notification.classList.add('bg-green-500', 'text-white');
        } else if (type === 'error') {
            notification.classList.add('bg-red-500', 'text-white');
        } else {
            notification.classList.add('bg-blue-500', 'text-white');
        }
        
        notification.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    ${type === 'success' ? 
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>' :
                        type === 'error' ?
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>' :
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>'
                    }
                </svg>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.classList.remove('translate-x-full', 'opacity-0');
        }, 100);
        
        setTimeout(() => {
            notification.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }
    
    // ========================================
    // VERIFICAÇÃO DE AUTENTICAÇÃO
    // ========================================
    
    function checkAuthentication() {
        const userData = localStorage.getItem('lumina_user_data');
        const authToken = localStorage.getItem('lumina_auth_token');
        
        if (!userData || !authToken) {
            console.log('⚠️ Usuário não autenticado, redirecionando...');
            window.location.href = 'login.php';
            return false;
        }
        
        try {
            const tokenData = JSON.parse(authToken);
            if (Date.now() > tokenData.expires) {
                console.log('⚠️ Token expirado, redirecionando...');
                performLogout();
                return false;
            }
        } catch (error) {
            console.error('Erro ao verificar token:', error);
            window.location.href = 'login.php';
            return false;
        }
        
        return true;
    }
    
    // Executar verificação de autenticação
    checkAuthentication();
    
    // ========================================
    // CARREGAR DADOS DO USUÁRIO
    // ========================================
    
    function loadUserData() {
        try {
            const userData = localStorage.getItem('lumina_user_data');
            if (userData) {
                const user = JSON.parse(userData);
                
                // Atualizar nome do usuário
                const userNameElements = document.querySelectorAll('.user-name');
                userNameElements.forEach(element => {
                    element.textContent = `${user.firstName} ${user.lastName}`;
                });
                
                // Atualizar email
                const userEmailElements = document.querySelectorAll('.user-email');
                userEmailElements.forEach(element => {
                    element.textContent = user.email;
                });
                
                // Atualizar iniciais do avatar
                const avatarElements = document.querySelectorAll('.user-avatar');
                avatarElements.forEach(element => {
                    element.textContent = user.firstName.charAt(0).toUpperCase();
                });
                
                console.log('✅ Dados do usuário carregados:', user.firstName);
            }
        } catch (error) {
            console.error('Erro ao carregar dados do usuário:', error);
        }
    }
    
    // Carregar dados do usuário
    loadUserData();
});
</script>

<!-- Auth Check and User Management -->
<script src="../js/auth-check.js"></script>
<script>
    // Verificar se o usuário está autenticado e é estudante
    document.addEventListener('DOMContentLoaded', function() {
        if (!isUserLoggedIn()) {
            window.location.href = 'login.php';
            return;
        }
        
        const user = getCurrentUser();
        if (!user) {
            window.location.href = 'login.php';
            return;
        }
        
        // Verificar se é estudante ou demo (ambos podem acessar o dashboard principal)
        if (!hasPermission('access_student_dashboard')) {
            // Se não for estudante, redirecionar para o dashboard apropriado
            if (user.role === 'admin') {
                window.location.href = 'admin-dashboard.php';
            } else if (user.role === 'teacher') {
                window.location.href = 'teacher-dashboard.php';
            } else if (user.role === 'moderator') {
                window.location.href = 'moderator-dashboard.php';
            } else {
                alert('Acesso negado. Você não tem permissão para acessar esta área.');
                window.location.href = 'login.php';
            }
            return;
        }
        
        // Atualizar interface com dados do usuário
        updateStudentInterface();
        
        console.log('👋 Bem-vindo ao Dashboard do Estudante!');
        console.log('📚 Usuário:', user.name, '| Role:', user.role);
        console.log('✅ Permissões:', user.permissions);
    });
    
    function updateStudentInterface() {
        const user = getCurrentUser();
        if (!user) return;
        
        // Atualizar nome do usuário
        document.querySelectorAll('.user-name').forEach(element => {
            element.textContent = user.name;
        });
        
        // Atualizar email (se existir elemento)
        document.querySelectorAll('.user-email').forEach(element => {
            element.textContent = user.email;
        });
        
        // Atualizar avatar
        document.querySelectorAll('.user-avatar').forEach(element => {
            element.textContent = user.name.charAt(0).toUpperCase();
        });
        
        // Personalizar saudação baseada no horário
        const hour = new Date().getHours();
        let greeting = 'Olá';
        if (hour < 12) {
            greeting = 'Bom dia';
        } else if (hour < 18) {
            greeting = 'Boa tarde';
        } else {
            greeting = 'Boa noite';
        }
        
        const greetingElement = document.querySelector('h1');
        if (greetingElement) {
            greetingElement.innerHTML = `${greeting}, <span class="user-name">${user.name}</span>!`;
        }
        
        // Mostrar indicador de tipo de usuário
        if (user.role === 'demo') {
            const userTypeElements = document.querySelectorAll('p:contains("Plano Premium")');
            userTypeElements.forEach(element => {
                if (element.textContent.includes('Plano Premium')) {
                    element.textContent = 'Conta Demo';
                    element.className = element.className.replace('text-primary', 'text-orange-600');
                    element.className = element.className.replace('bg-primary', 'bg-orange-100');
                }
            });
        }
    }
    
    // Função personalizada de logout para estudantes
    function studentLogout() {
        if (confirm('Tem certeza que deseja sair?')) {
            localStorage.removeItem('currentUser');
            console.log('👋 Logout do estudante realizado');
            window.location.href = 'login.php';
        }
    }
    
    // Substituir a função de logout padrão
    window.performLogout = studentLogout;
</script>

<script src="js/utils.js"></script>
<script src="js/data.js"></script>
<script src="js/sidebar-components.js"></script>
<script src="js/main.js"></script>
</body>
</html>
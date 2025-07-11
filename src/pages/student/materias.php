<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matérias - Lumina Academy</title>
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
                        <a href="#" class="bg-primary bg-opacity-10 text-primary group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-primary mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    Matérias
                                </h1>
                                <p class="mt-1 text-sm text-gray-500">
                                    Explore todas as matérias disponíveis e acompanhe seu progresso
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <!-- Filtros -->
                        <div class="mt-8 mb-6">
                            <div class="flex flex-wrap gap-2">
                                <button class="px-4 py-2 rounded-full text-sm font-medium bg-primary text-white">
                                    Todas
                                </button>
                                <button class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                    Em andamento
                                </button>
                                <button class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                    Concluídas
                                </button>
                                <button class="px-4 py-2 rounded-full text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                    Favoritas
                                </button>
                            </div>
                        </div>

                        <!-- Grid de matérias -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                            <!-- Matemática -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-primary bg-opacity-10 rounded-md p-3 group-hover:bg-primary group-hover:bg-opacity-20 transition-all duration-300">
                                            <svg class="h-6 w-6 text-primary group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors duration-300">Matemática</h3>
                                        <p class="text-sm text-gray-500 mt-1">Álgebra, Geometria, Funções e mais</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-primary">75%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-primary h-2 rounded-full" style="width: 75%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>12 módulos</span>
                                            <span>48 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Física -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3 group-hover:bg-blue-200 transition-all duration-300">
                                            <svg class="h-6 w-6 text-blue-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                            </svg>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-300">Física</h3>
                                        <p class="text-sm text-gray-500 mt-1">Mecânica, Termodinâmica, Eletricidade</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-blue-600">42%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-blue-600 h-2 rounded-full" style="width: 42%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>10 módulos</span>
                                            <span>32 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Química -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3 group-hover:bg-green-200 transition-all duration-300">
                                            <svg class="h-6 w-6 text-green-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                            </svg>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600 transition-colors duration-300">Química</h3>
                                        <p class="text-sm text-gray-500 mt-1">Química Orgânica, Inorgânica, Físico-Química</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-green-600">28%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-green-600 h-2 rounded-full" style="width: 28%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>8 módulos</span>
                                            <span>24 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Biologia -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-purple-100 rounded-md p-3 group-hover:bg-purple-200 transition-all duration-300">
                                            <svg class="h-6 w-6 text-purple-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                            </svg>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-purple-600 transition-colors duration-300">Biologia</h3>
                                        <p class="text-sm text-gray-500 mt-1">Citologia, Genética, Ecologia, Evolução</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-purple-600">53%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-purple-600 h-2 rounded-full" style="width: 53%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>9 módulos</span>
                                            <span>30 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Português -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-red-100 rounded-md p-3 group-hover:bg-red-200 transition-all duration-300">
                                            <svg class="h-6 w-6 text-red-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </div>
                                        <button class="text-red-500">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-red-600 transition-colors duration-300">Português</h3>
                                        <p class="text-sm text-gray-500 mt-1">Gramática, Literatura, Redação</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-red-600">78%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-red-600 h-2 rounded-full" style="width: 78%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>11 módulos</span>
                                            <span>35 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- História -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3 group-hover:bg-yellow-200 transition-all duration-300">
                                            <svg class="h-6 w-6 text-yellow-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition-colors duration-300">História</h3>
                                        <p class="text-sm text-gray-500 mt-1">História Geral, do Brasil e Contemporânea</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-yellow-600">35%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-yellow-600 h-2 rounded-full" style="width: 35%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>8 módulos</span>
                                            <span>26 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Geografia -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-indigo-100 rounded-md p-3 group-hover:bg-indigo-200 transition-all duration-300">
                                            <svg class="h-6 w-6 text-indigo-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors duration-300">Geografia</h3>
                                        <p class="text-sm text-gray-500 mt-1">Geografia Física, Humana e Econômica</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-indigo-600">45%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 45%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>7 módulos</span>
                                            <span>22 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Inglês -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300 cursor-pointer group">
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex-shrink-0 bg-pink-100 rounded-md p-3 group-hover:bg-pink-200 transition-all duration-300">
                                            <svg class="h-6 w-6 text-pink-600 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                                            </svg>
                                        </div>
                                        <button class="text-gray-400 hover:text-red-500">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900 group-hover:text-pink-600 transition-colors duration-300">Inglês</h3>
                                        <p class="text-sm text-gray-500 mt-1">Gramática, Vocabulário, Interpretação</p>
                                        <div class="mt-4">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-gray-500">Progresso</span>
                                                <span class="font-medium text-pink-600">60%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                                <div class="bg-pink-600 h-2 rounded-full" style="width: 60%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-between text-xs text-gray-500">
                                            <span>6 módulos</span>
                                            <span>18 aulas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Estatísticas gerais -->
                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="px-6 py-5 border-b border-gray-200">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Seu progresso geral
                                </h3>
                            </div>
                            <div class="px-6 py-5">
                                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                                    <!-- Total de matérias -->
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 bg-primary bg-opacity-10 rounded-md p-3">
                                                <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                                        Total de matérias
                                                    </dt>
                                                    <dd>
                                                        <div class="text-lg font-bold text-gray-900">
                                                            8
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Matérias em andamento -->
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3">
                                                <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                                        Em andamento
                                                    </dt>
                                                    <dd>
                                                        <div class="text-lg font-bold text-gray-900">
                                                            6
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Matérias concluídas -->
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                                        Concluídas
                                                    </dt>
                                                    <dd>
                                                        <div class="text-lg font-bold text-gray-900">
                                                            2
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Progresso médio -->
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">
                                                        Progresso médio
                                                    </dt>
                                                    <dd>
                                                        <div class="text-lg font-bold text-gray-900">
                                                            52%
                                                        </div>
                                                    </dd>
                                                </dl>
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
        // Verificar autenticação na página de matérias
        document.addEventListener('DOMContentLoaded', function() {
            if (!isUserLoggedIn()) {
                alert('Você precisa estar logado para acessar as matérias.');
                window.location.href = 'login.php';
                return;
            }
            
            // Verificar se tem permissão para acessar matérias
            if (!hasPermission('access_subjects')) {
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
                
                console.log('📖 Matérias carregadas para:', user.name);
            }
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>

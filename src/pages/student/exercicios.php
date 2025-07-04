<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - Lumina Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind-config.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* Custom tooltip styles */
        .exercise-card {
            position: relative;
            overflow: visible;
        }
        
        .exercise-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .exercise-card .tooltip {
            pointer-events: none;
            transform: translateX(-50%) translateY(-100%);
            white-space: normal;
            word-wrap: break-word;
        }
        
        .exercise-card:hover .tooltip {
            animation: fadeInUp 0.3s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateX(-50%) translateY(-90%);
            }
            to {
                opacity: 1;
                transform: translateX(-50%) translateY(-100%);
            }
        }

        /* Ensure tooltips appear above everything */
        .group:hover .group-hover\:visible {
            z-index: 9999 !important;
        }

        /* Smooth hover animations */
        .exercise-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
                        <a href="#" class="bg-primary bg-opacity-10 text-primary group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-primary mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    <input class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Pesquisar exercícios...">
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
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Header -->
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="flex-1 min-w-0">
                                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                                    Banco de Exercícios
                                </h2>
                                <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        Pratique com mais de 50.000 questões de vestibulares anteriores
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex md:mt-0 md:ml-4">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-info focus:outline-none transition-all duration-300">
                                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    Simulado personalizado
                                </button>
                            </div>
                        </div>

                        <!-- Stats Cards -->
                        <div class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                            <!-- Stat 1 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
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
                                                    Questões resolvidas
                                                </dt>
                                                <dd>
                                                    <div class="text-lg font-bold text-gray-900">
                                                        1.247
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stat 2 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">
                                                    Taxa de acerto
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
                            </div>

                            <!-- Stat 3 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3">
                                            <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">
                                                    Favoritas
                                                </dt>
                                                <dd>
                                                    <div class="text-lg font-bold text-gray-900">
                                                        32
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stat 4 -->
                            <div class="bg-white overflow-hidden shadow rounded-lg">
                                <div class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium text-gray-500 truncate">
                                                    Tempo médio
                                                </dt>
                                                <dd>
                                                    <div class="text-lg font-bold text-gray-900">
                                                        4:32
                                                    </div>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Filters -->
                        <div class="mt-6 bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                                <!-- Subject Filter -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Matéria</label>
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                        <option value="">Todas as matérias</option>
                                        <option value="matematica">Matemática</option>
                                        <option value="portugues">Português</option>
                                        <option value="fisica">Física</option>
                                        <option value="quimica">Química</option>
                                        <option value="biologia">Biologia</option>
                                        <option value="historia">História</option>
                                        <option value="geografia">Geografia</option>
                                    </select>
                                </div>

                                <!-- Difficulty Filter -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Dificuldade</label>
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                        <option value="">Todas</option>
                                        <option value="facil">Fácil</option>
                                        <option value="medio">Médio</option>
                                        <option value="dificil">Difícil</option>
                                    </select>
                                </div>

                                <!-- Exam Filter -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Vestibular</label>
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                        <option value="">Todos</option>
                                        <option value="enem">ENEM</option>
                                        <option value="fuvest">FUVEST</option>
                                        <option value="unicamp">UNICAMP</option>
                                        <option value="uerj">UERJ</option>
                                    </select>
                                </div>

                                <!-- Year Filter -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Ano</label>
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                        <option value="">Todos os anos</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mt-6 flex space-x-3">
                                <button class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                                    Filtrar
                                </button>
                                <button class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition-colors">
                                    Limpar
                                </button>
                            </div>
                        </div>

                        <!-- Exercise List -->
                        <div class="mt-6 space-y-6">
                            <!-- Exercise Card 1 -->
                            <div class="exercise-card relative bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 hover:border-primary hover:border-opacity-50 group" 
                                 data-tooltip="Questão de nível básico sobre funções do primeiro grau. Envolve conceitos de taxa fixa e variável. Ideal para revisar conceitos fundamentais de função afim. Resolução estimada: 5 minutos.">
                                <!-- Tooltip -->
                                <div class="absolute invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 bg-gray-900 text-white text-sm rounded-lg p-3 -top-2 left-1/2 transform -translate-x-1/2 -translate-y-full z-50 w-80 shadow-xl">
                                    <div class="space-y-2">
                                        <div class="font-semibold text-blue-300">Informações da Questão</div>
                                        <div class="grid grid-cols-2 gap-2 text-xs">
                                            <div><span class="text-gray-300">Assunto:</span> Função Afim</div>
                                            <div><span class="text-gray-300">Origem:</span> ENEM 2023</div>
                                            <div><span class="text-gray-300">Dificuldade:</span> Fácil</div>
                                            <div><span class="text-gray-300">Tempo médio:</span> 5 min</div>
                                            <div><span class="text-gray-300">Taxa de acerto:</span> 85%</div>
                                            <div><span class="text-gray-300">Resolvida por:</span> 2.847 alunos</div>
                                        </div>
                                        <div class="text-xs text-gray-300 border-t border-gray-700 pt-2">
                                            Conceitos: Taxa fixa, taxa variável, função linear, domínio e contradomínio
                                        </div>
                                    </div>
                                    <!-- Tooltip arrow -->
                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2">
                                        <div class="border-4 border-transparent border-t-gray-900"></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="bg-blue-100 p-3 rounded-lg">
                                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-3 mb-2">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    Matemática
                                                </span>
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    Fácil
                                                </span>
                                                <span class="text-xs text-gray-500">ENEM 2023</span>
                                            </div>
                                            <h3 class="text-lg font-semibold text-gray-900">
                                                Questão sobre funções quadráticas
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="text-gray-400 hover:text-yellow-500 transition-colors p-1">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-info transition-colors text-sm font-medium">
                                            Resolver
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-gray-700 leading-relaxed">
                                        Uma empresa de telefonia cobra uma taxa fixa de R$ 30,00 e mais R$ 0,10 por minuto de ligação. Sabendo que o custo total é representado por uma função do primeiro grau, determine o valor a ser pago por uma ligação de 45 minutos.
                                    </p>
                                </div>
                                <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            5 min
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                                            </svg>
                                            85% de acerto
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Exercise Card 2 -->
                            <div class="exercise-card relative bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 hover:border-primary hover:border-opacity-50 group"
                                 data-tooltip="Questão de nível intermediário sobre cinemática básica. Trabalha conceitos de velocidade média e movimento uniforme. Fundamental para física do ensino médio.">
                                <!-- Tooltip -->
                                <div class="absolute invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 bg-gray-900 text-white text-sm rounded-lg p-3 -top-2 left-1/2 transform -translate-x-1/2 -translate-y-full z-50 w-80 shadow-xl">
                                    <div class="space-y-2">
                                        <div class="font-semibold text-purple-300">Informações da Questão</div>
                                        <div class="grid grid-cols-2 gap-2 text-xs">
                                            <div><span class="text-gray-300">Assunto:</span> Cinemática</div>
                                            <div><span class="text-gray-300">Origem:</span> FUVEST 2022</div>
                                            <div><span class="text-gray-300">Dificuldade:</span> Médio</div>
                                            <div><span class="text-gray-300">Tempo médio:</span> 8 min</div>
                                            <div><span class="text-gray-300">Taxa de acerto:</span> 62%</div>
                                            <div><span class="text-gray-300">Resolvida por:</span> 1.923 alunos</div>
                                        </div>
                                        <div class="text-xs text-gray-300 border-t border-gray-700 pt-2">
                                            Conceitos: Velocidade média, movimento uniforme, relação espaço-tempo
                                        </div>
                                    </div>
                                    <!-- Tooltip arrow -->
                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2">
                                        <div class="border-4 border-transparent border-t-gray-900"></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="bg-purple-100 p-3 rounded-lg">
                                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-3 mb-2">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                    Física
                                                </span>
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                    Médio
                                                </span>
                                                <span class="text-xs text-gray-500">FUVEST 2022</span>
                                            </div>
                                            <h3 class="text-lg font-semibold text-gray-900">
                                                Cinemática - Movimento Uniforme
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="text-yellow-500 hover:text-yellow-600 transition-colors p-1">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-info transition-colors text-sm font-medium">
                                            Resolver
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-gray-700 leading-relaxed">
                                        Um carro percorre uma distância de 300 km em 4 horas mantendo velocidade constante. Calcule a velocidade média do veículo e determine quanto tempo levaria para percorrer 450 km na mesma velocidade.
                                    </p>
                                </div>
                                <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            8 min
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                                            </svg>
                                            62% de acerto
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Exercise Card 3 -->
                            <div class="exercise-card relative bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-lg transition-all duration-300 hover:border-primary hover:border-opacity-50 group"
                                 data-tooltip="Questão avançada sobre equilíbrio químico. Requer conhecimento profundo de cinética química e cálculos complexos. Nível universitário.">
                                <!-- Tooltip -->
                                <div class="absolute invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 bg-gray-900 text-white text-sm rounded-lg p-3 -top-2 left-1/2 transform -translate-x-1/2 -translate-y-full z-50 w-80 shadow-xl">
                                    <div class="space-y-2">
                                        <div class="font-semibold text-red-300">Informações da Questão</div>
                                        <div class="grid grid-cols-2 gap-2 text-xs">
                                            <div><span class="text-gray-300">Assunto:</span> Equilíbrio Químico</div>
                                            <div><span class="text-gray-300">Origem:</span> UNICAMP 2021</div>
                                            <div><span class="text-gray-300">Dificuldade:</span> Difícil</div>
                                            <div><span class="text-gray-300">Tempo médio:</span> 12 min</div>
                                            <div><span class="text-gray-300">Taxa de acerto:</span> 38%</div>
                                            <div><span class="text-gray-300">Resolvida por:</span> 892 alunos</div>
                                        </div>
                                        <div class="text-xs text-gray-300 border-t border-gray-700 pt-2">
                                            Conceitos: Constante de equilíbrio, Le Chatelier, concentrações molares, cinética
                                        </div>
                                    </div>
                                    <!-- Tooltip arrow -->
                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2">
                                        <div class="border-4 border-transparent border-t-gray-900"></div>
                                    </div>
                                </div>
                                
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="bg-red-100 p-3 rounded-lg">
                                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-3 mb-2">
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                    Química
                                                </span>
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                    Difícil
                                                </span>
                                                <span class="text-xs text-gray-500">UNICAMP 2021</span>
                                            </div>
                                            <h3 class="text-lg font-semibold text-gray-900">
                                                Equilíbrio Químico
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button class="text-gray-400 hover:text-yellow-500 transition-colors p-1">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                            </svg>
                                        </button>
                                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-info transition-colors text-sm font-medium">
                                            Resolver
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-gray-700 leading-relaxed">
                                        Considere a reação em equilíbrio: N₂(g) + 3H₂(g) ⇌ 2NH₃(g). Se a constante de equilíbrio for Kc = 4,5 × 10⁻⁵ a 450°C, calcule as concentrações de equilíbrio quando as concentrações iniciais são [N₂] = 0,2 M e [H₂] = 0,6 M.
                                    </p>
                                </div>
                                <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            12 min
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 mr-1 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                                            </svg>
                                            38% de acerto
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-8 flex justify-center">
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    Anterior
                                </a>
                                <a href="#" class="bg-primary border-primary text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    1
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    2
                                </a>
                                <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    3
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    Próximo
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script>
        // Enhanced tooltip functionality
        document.addEventListener('DOMContentLoaded', function() {
            const exerciseCards = document.querySelectorAll('.exercise-card');
            
            exerciseCards.forEach(card => {
                const tooltip = card.querySelector('.group-hover\\:visible');
                
                // Improve tooltip positioning
                card.addEventListener('mouseenter', function(e) {
                    if (tooltip) {
                        const rect = card.getBoundingClientRect();
                        const viewportHeight = window.innerHeight;
                        
                        // If tooltip would go off screen, adjust position
                        if (rect.top < 100) {
                            tooltip.style.top = '100%';
                            tooltip.style.transform = 'translateX(-50%) translateY(10px)';
                            
                            // Update arrow position
                            const arrow = tooltip.querySelector('.border-t-gray-900');
                            if (arrow) {
                                arrow.parentElement.style.top = '-4px';
                                arrow.style.borderTopColor = 'transparent';
                                arrow.style.borderBottomColor = '#111827';
                            }
                        }
                    }
                });
                
                card.addEventListener('mouseleave', function(e) {
                    if (tooltip) {
                        // Reset position
                        tooltip.style.top = '';
                        tooltip.style.transform = '';
                        
                        const arrow = tooltip.querySelector('.border-transparent');
                        if (arrow && arrow.parentElement) {
                            arrow.parentElement.style.top = '';
                            arrow.style.borderTopColor = '';
                            arrow.style.borderBottomColor = '';
                        }
                    }
                });
            });
            
            // Add smooth scroll behavior for pagination
            document.querySelectorAll('nav a').forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.getAttribute('href') === '#') {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
    
    <!-- Auth Check -->
    <script src="../js/auth-check.js"></script>
    <script>
        // Verificar autenticação na página de exercícios
        document.addEventListener('DOMContentLoaded', function() {
            if (!isUserLoggedIn()) {
                alert('Você precisa estar logado para acessar os exercícios.');
                window.location.href = 'login.php';
                return;
            }
            
            // Verificar se tem permissão para acessar exercícios
            if (!hasPermission('access_exercises')) {
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
                
                console.log('📚 Exercícios carregados para:', user.name);
            }
        });
    </script>
</body>
</html>

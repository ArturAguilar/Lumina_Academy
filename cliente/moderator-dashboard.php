<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Moderador - Lumina Academy</title>
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
                
                <!-- User Profile -->
                <div class="px-6 py-4 border-b border-gray-100">
                    <div class="flex items-center space-x-3">
                        <div class="bg-orange-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm user-avatar">
                            M
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 user-name">Moderador</p>
                            <p class="text-xs text-orange-600 font-medium">Moderador</p>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <div class="flex-1 px-4 py-4">
                    <nav class="space-y-1">
                        <a href="#overview" class="nav-item active flex items-center px-3 py-2 text-sm font-medium rounded-md text-primary bg-primary/10">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                            Visão Geral
                        </a>
                        
                        <a href="#comments" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                            </svg>
                            Comentários
                        </a>
                        
                        <a href="#reports" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                            </svg>
                            Denúncias
                        </a>
                        
                        <a href="#users" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                            Usuários
                        </a>
                        
                        <a href="#content" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                            </svg>
                            Conteúdo
                        </a>
                        
                        <a href="#settings" class="nav-item flex items-center px-3 py-2 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                            </svg>
                            Configurações
                        </a>
                    </nav>
                </div>
                
                <!-- Logout Button -->
                <div class="px-4 py-4 border-t border-gray-200">
                    <button onclick="logout()" class="w-full flex items-center px-3 py-2 text-sm font-medium text-red-600 rounded-md hover:bg-red-50">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                        </svg>
                        Sair
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-hidden">
            <div class="flex flex-col h-full">
                <!-- Header -->
                <header class="bg-white shadow-sm border-b border-gray-200">
                    <div class="px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900">Painel do Moderador</h1>
                                <p class="text-sm text-gray-600">Gerencie conteúdo e interações da plataforma</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <!-- Notifications -->
                                <button class="relative p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-full">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                    </svg>
                                    <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Content -->
                <main class="flex-1 overflow-y-auto p-6">
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Denúncias Pendentes</p>
                                    <p class="text-2xl font-bold text-gray-900">12</p>
                                </div>
                                <div class="p-3 bg-red-100 rounded-full">
                                    <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-2">
                                <span class="text-sm text-red-600 font-medium">+3 hoje</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Comentários Revisados</p>
                                    <p class="text-2xl font-bold text-gray-900">156</p>
                                </div>
                                <div class="p-3 bg-green-100 rounded-full">
                                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-2">
                                <span class="text-sm text-green-600 font-medium">+28 hoje</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Usuários Ativos</p>
                                    <p class="text-2xl font-bold text-gray-900">1,247</p>
                                </div>
                                <div class="p-3 bg-blue-100 rounded-full">
                                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-2">
                                <span class="text-sm text-blue-600 font-medium">+89 hoje</span>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Conteúdo Aprovado</p>
                                    <p class="text-2xl font-bold text-gray-900">43</p>
                                </div>
                                <div class="p-3 bg-orange-100 rounded-full">
                                    <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-2">
                                <span class="text-sm text-orange-600 font-medium">+7 hoje</span>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content Sections -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Recent Reports -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                            <div class="p-6 border-b border-gray-100">
                                <h2 class="text-lg font-semibold text-gray-900">Denúncias Recentes</h2>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div class="flex items-start space-x-3 p-3 bg-red-50 rounded-lg">
                                        <div class="p-2 bg-red-100 rounded-full">
                                            <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">Conteúdo Inapropriado</p>
                                            <p class="text-xs text-gray-600">Reportado por João Silva • há 2 horas</p>
                                            <div class="mt-2 flex space-x-2">
                                                <button class="px-3 py-1 text-xs bg-red-600 text-white rounded-md hover:bg-red-700">
                                                    Revisar
                                                </button>
                                                <button class="px-3 py-1 text-xs bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                                                    Ignorar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-3 p-3 bg-yellow-50 rounded-lg">
                                        <div class="p-2 bg-yellow-100 rounded-full">
                                            <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">Spam em Comentários</p>
                                            <p class="text-xs text-gray-600">Reportado por Ana Costa • há 4 horas</p>
                                            <div class="mt-2 flex space-x-2">
                                                <button class="px-3 py-1 text-xs bg-red-600 text-white rounded-md hover:bg-red-700">
                                                    Revisar
                                                </button>
                                                <button class="px-3 py-1 text-xs bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                                                    Ignorar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-3 p-3 bg-orange-50 rounded-lg">
                                        <div class="p-2 bg-orange-100 rounded-full">
                                            <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">Informação Incorreta</p>
                                            <p class="text-xs text-gray-600">Reportado por Pedro Oliveira • há 6 horas</p>
                                            <div class="mt-2 flex space-x-2">
                                                <button class="px-3 py-1 text-xs bg-red-600 text-white rounded-md hover:bg-red-700">
                                                    Revisar
                                                </button>
                                                <button class="px-3 py-1 text-xs bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                                                    Ignorar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Content -->
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                            <div class="p-6 border-b border-gray-100">
                                <h2 class="text-lg font-semibold text-gray-900">Conteúdo Pendente</h2>
                            </div>
                            <div class="p-6">
                                <div class="space-y-4">
                                    <div class="border border-gray-200 rounded-lg p-4">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1">
                                                <h3 class="text-sm font-medium text-gray-900">Introdução ao JavaScript</h3>
                                                <p class="text-xs text-gray-600 mt-1">Por Prof. Carlos Santos</p>
                                                <p class="text-xs text-gray-500 mt-2">Aguardando aprovação há 2 dias</p>
                                            </div>
                                            <div class="flex space-x-2">
                                                <button class="px-3 py-1 text-xs bg-green-600 text-white rounded-md hover:bg-green-700">
                                                    Aprovar
                                                </button>
                                                <button class="px-3 py-1 text-xs bg-red-600 text-white rounded-md hover:bg-red-700">
                                                    Rejeitar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-gray-200 rounded-lg p-4">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1">
                                                <h3 class="text-sm font-medium text-gray-900">Python para Iniciantes</h3>
                                                <p class="text-xs text-gray-600 mt-1">Por Prof. Maria Fernanda</p>
                                                <p class="text-xs text-gray-500 mt-2">Aguardando aprovação há 1 dia</p>
                                            </div>
                                            <div class="flex space-x-2">
                                                <button class="px-3 py-1 text-xs bg-green-600 text-white rounded-md hover:bg-green-700">
                                                    Aprovar
                                                </button>
                                                <button class="px-3 py-1 text-xs bg-red-600 text-white rounded-md hover:bg-red-700">
                                                    Rejeitar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border border-gray-200 rounded-lg p-4">
                                        <div class="flex items-start justify-between">
                                            <div class="flex-1">
                                                <h3 class="text-sm font-medium text-gray-900">Design Thinking Aplicado</h3>
                                                <p class="text-xs text-gray-600 mt-1">Por Prof. Ana Clara</p>
                                                <p class="text-xs text-gray-500 mt-2">Aguardando aprovação há 3 horas</p>
                                            </div>
                                            <div class="flex space-x-2">
                                                <button class="px-3 py-1 text-xs bg-green-600 text-white rounded-md hover:bg-green-700">
                                                    Aprovar
                                                </button>
                                                <button class="px-3 py-1 text-xs bg-red-600 text-white rounded-md hover:bg-red-700">
                                                    Rejeitar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="mt-6 bg-white rounded-xl shadow-sm border border-gray-100">
                        <div class="p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-900">Atividade Recente</h2>
                        </div>
                        <div class="p-6">
                            <div class="flow-root">
                                <ul class="-mb-8">
                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"></span>
                                            <div class="relative flex items-start space-x-3">
                                                <div class="relative">
                                                    <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center">
                                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <div>
                                                        <div class="text-sm">
                                                            <span class="font-medium text-gray-900">Conteúdo aprovado:</span>
                                                            <span class="text-gray-600"> "Introdução ao React"</span>
                                                        </div>
                                                        <p class="mt-0.5 text-xs text-gray-500">há 30 minutos</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"></span>
                                            <div class="relative flex items-start space-x-3">
                                                <div class="relative">
                                                    <div class="h-10 w-10 rounded-full bg-red-500 flex items-center justify-center">
                                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <div>
                                                        <div class="text-sm">
                                                            <span class="font-medium text-gray-900">Denúncia resolvida:</span>
                                                            <span class="text-gray-600"> Comentário removido por spam</span>
                                                        </div>
                                                        <p class="mt-0.5 text-xs text-gray-500">há 1 hora</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="relative">
                                            <div class="relative flex items-start space-x-3">
                                                <div class="relative">
                                                    <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center">
                                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <div>
                                                        <div class="text-sm">
                                                            <span class="font-medium text-gray-900">Usuário suspenso:</span>
                                                            <span class="text-gray-600"> rodrigo.santos@email.com por 7 dias</span>
                                                        </div>
                                                        <p class="mt-0.5 text-xs text-gray-500">há 2 horas</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="../js/auth-check.js"></script>
    <script>
        // Verificar se o usuário tem permissão de moderador
        requireModeratorAccess();
        
        // Atualizar informações do usuário na interface
        updateUserInterface();
        
        function updateUserInterface() {
            const user = getCurrentUser();
            if (user) {
                document.querySelector('.user-name').textContent = user.name;
                document.querySelector('.user-avatar').textContent = user.name.charAt(0).toUpperCase();
            }
        }
        
        function logout() {
            if (confirm('Tem certeza que deseja sair?')) {
                localStorage.removeItem('currentUser');
                window.location.href = 'login.php';
            }
        }
        
        // Navegação entre seções
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all items
                document.querySelectorAll('.nav-item').forEach(nav => {
                    nav.classList.remove('active', 'text-primary', 'bg-primary/10');
                    nav.classList.add('text-gray-600');
                });
                
                // Add active class to clicked item
                this.classList.add('active', 'text-primary', 'bg-primary/10');
                this.classList.remove('text-gray-600');
                
                // Aqui você pode implementar a lógica para mostrar diferentes seções
                const section = this.getAttribute('href').substring(1);
                console.log('Navegando para seção:', section);
            });
        });
    </script>
</body>
</html>

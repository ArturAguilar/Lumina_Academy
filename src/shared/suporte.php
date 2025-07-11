<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte - Lumina Academy</title>
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
                        <a href="#" class="bg-primary bg-opacity-10 text-primary group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                            <svg class="text-primary mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    <input class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-md text-sm placeholder-gray-500 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Como podemos ajudar?">
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
                                    Central de Suporte
                                </h2>
                                <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        Estamos aqui para ajudar você a aproveitar ao máximo a Lumina Academy
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex md:mt-0 md:ml-4">
                                <button class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-info focus:outline-none transition-all duration-300">
                                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    Falar com suporte
                                </button>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Chat ao Vivo -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <h3 class="text-lg font-medium text-gray-900">Chat ao Vivo</h3>
                                            <p class="text-sm text-gray-500 mt-1">Fale conosco agora mesmo</p>
                                            <div class="mt-3">
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                    • Online
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                            <p class="text-sm text-gray-500 mt-1">Envie sua dúvida por email</p>
                                            <div class="mt-3">
                                                <span class="text-xs text-gray-400">Resposta em até 24h</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Central de Ajuda -->
                            <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 bg-purple-100 rounded-md p-3">
                                            <svg class="h-6 w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-5 w-0 flex-1">
                                            <h3 class="text-lg font-medium text-gray-900">Central de Ajuda</h3>
                                            <p class="text-sm text-gray-500 mt-1">Artigos e tutoriais</p>
                                            <div class="mt-3">
                                                <span class="text-xs text-gray-400">+200 artigos</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Perguntas Frequentes -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-6">Perguntas Frequentes</h3>
                            <div class="bg-white shadow rounded-lg">
                                <div class="divide-y divide-gray-200">
                                    <!-- FAQ Item 1 -->
                                    <div class="p-6">
                                        <h4 class="text-base font-medium text-gray-900 mb-2">Como posso alterar meu plano de assinatura?</h4>
                                        <p class="text-sm text-gray-600">Você pode alterar seu plano a qualquer momento acessando Configurações > Assinatura. As alterações entram em vigor no próximo ciclo de cobrança.</p>
                                    </div>

                                    <!-- FAQ Item 2 -->
                                    <div class="p-6">
                                        <h4 class="text-base font-medium text-gray-900 mb-2">Como acompanhar meu progresso de estudos?</h4>
                                        <p class="text-sm text-gray-600">Acesse a seção "Desempenho" no menu lateral para ver relatórios detalhados do seu progresso, incluindo tempo de estudo, questões resolvidas e áreas de melhoria.</p>
                                    </div>

                                    <!-- FAQ Item 3 -->
                                    <div class="p-6">
                                        <h4 class="text-base font-medium text-gray-900 mb-2">Posso usar a plataforma offline?</h4>
                                        <p class="text-sm text-gray-600">Atualmente a plataforma requer conexão com a internet. Estamos desenvolvendo uma versão offline que estará disponível em breve.</p>
                                    </div>

                                    <!-- FAQ Item 4 -->
                                    <div class="p-6">
                                        <h4 class="text-base font-medium text-gray-900 mb-2">Como posso resetar minha senha?</h4>
                                        <p class="text-sm text-gray-600">Na tela de login, clique em "Esqueci minha senha" e siga as instruções enviadas para seu email cadastrado.</p>
                                    </div>

                                    <!-- FAQ Item 5 -->
                                    <div class="p-6">
                                        <h4 class="text-base font-medium text-gray-900 mb-2">Existe limite para o número de exercícios?</h4>
                                        <p class="text-sm text-gray-600">Não! Nosso banco de exercícios tem mais de 50.000 questões e você pode resolver quantas quiser, sem limite.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Formulário de Contato -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-6">Envie sua Dúvida</h3>
                            <div class="bg-white shadow rounded-lg p-6">
                                <form class="space-y-6">
                                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                                        <div>
                                            <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                                            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                                        </div>
                                        <div>
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="category" class="block text-sm font-medium text-gray-700">Categoria</label>
                                        <select id="category" name="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                                            <option>Dúvida técnica</option>
                                            <option>Problema com exercícios</option>
                                            <option>Questão de cobrança</option>
                                            <option>Sugestão de melhoria</option>
                                            <option>Outro</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="message" class="block text-sm font-medium text-gray-700">Mensagem</label>
                                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" placeholder="Descreva sua dúvida ou problema..."></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors duration-300">
                                            Enviar Mensagem
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Status do Sistema -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-6">Status do Sistema</h3>
                            <div class="bg-white shadow rounded-lg p-6">
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="h-3 w-3 bg-green-400 rounded-full mr-3"></div>
                                            <span class="text-sm font-medium text-gray-900">Plataforma</span>
                                        </div>
                                        <span class="text-sm text-gray-500">Operacional</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="h-3 w-3 bg-green-400 rounded-full mr-3"></div>
                                            <span class="text-sm font-medium text-gray-900">Banco de Exercícios</span>
                                        </div>
                                        <span class="text-sm text-gray-500">Operacional</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="h-3 w-3 bg-green-400 rounded-full mr-3"></div>
                                            <span class="text-sm font-medium text-gray-900">Sistema de Login</span>
                                        </div>
                                        <span class="text-sm text-gray-500">Operacional</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="h-3 w-3 bg-yellow-400 rounded-full mr-3"></div>
                                            <span class="text-sm font-medium text-gray-900">Relatórios</span>
                                        </div>
                                        <span class="text-sm text-gray-500">Manutenção programada</span>
                                    </div>
                                </div>
                                <div class="mt-4 pt-4 border-t border-gray-200">
                                    <p class="text-xs text-gray-500">Última atualização: Hoje às 14:30</p>
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
        // Verificar autenticação na página de suporte
        document.addEventListener('DOMContentLoaded', function() {
            if (!isUserLoggedIn()) {
                alert('Você precisa estar logado para acessar o suporte.');
                window.location.href = 'login.php';
                return;
            }
            
            // Nota: Suporte geralmente é acessível a todos os usuários logados
            // Não restringir por permissão específica
            
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
                
                console.log('🆘 Suporte carregado para:', user.name, '| Role:', user.role);
                
                // Adicionar informações de contexto para o suporte baseado no tipo de usuário
                if (user.role === 'demo') {
                    console.log('ℹ️ Usuário demo - suporte limitado disponível');
                }
            }
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>

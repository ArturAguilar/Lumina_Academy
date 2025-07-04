<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina Academy - Sua plataforma de estudos para vestibulares</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/auth-check.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "blue": {
                            "50": "#eff6ff",
                            "100": "#dbeafe",
                            "200": "#bfdbfe",
                            "300": "#93c5fd",
                            "400": "#60a5fa",
                            "500": "#3b82f6",
                            "600": "#2563eb",
                            "700": "#1d4ed8",
                            "800": "#1e40af",
                            "900": "#1e3a8a",
                            "950": "#172554"
                        },
                        "indigo": {
                            "50": "#eef2ff",
                            "100": "#e0e7ff",
                            "200": "#c7d2fe",
                            "300": "#a5b4fc",
                            "400": "#818cf8",
                            "500": "#6366f1",
                            "600": "#4f46e5",
                            "700": "#4338ca",
                            "800": "#3730a3",
                            "900": "#312e81",
                            "950": "#1e1b4b"
                        },
                        "gray": {
                            "50": "#f9fafb",
                            "100": "#f3f4f6",
                            "200": "#e5e7eb",
                            "300": "#d1d5db",
                            "400": "#9ca3af",
                            "500": "#6b7280",
                            "600": "#4b5563",
                            "700": "#374151",
                            "800": "#1f2937",
                            "900": "#111827",
                            "950": "#030712"
                        },
                        "white": "#ffffff",
                        "black": "#000000",
                        "transparent": "transparent"
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'custom': '0 10px 25px -5px rgba(59, 130, 246, 0.1), 0 10px 10px -5px rgba(59, 130, 246, 0.04)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        .hero-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
        .hero-wave svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 80px;
        }
        .wave-animation {
            animation: wave-movement 15s ease-in-out infinite;
        }
        .wave-animation-2 {
            animation: wave-movement-2 12s ease-in-out infinite reverse;
        }
        .wave-animation-3 {
            animation: wave-movement-3 18s ease-in-out infinite;
        }
        @keyframes wave-movement {
            0%, 100% {
                transform: translateX(0%) scaleX(1);
            }
            25% {
                transform: translateX(-2%) scaleX(1.02);
            }
            50% {
                transform: translateX(1%) scaleX(0.98);
            }
            75% {
                transform: translateX(-1%) scaleX(1.01);
            }
        }
        @keyframes wave-movement-2 {
            0%, 100% {
                transform: translateX(0%) scaleY(1);
            }
            33% {
                transform: translateX(1.5%) scaleY(1.05);
            }
            66% {
                transform: translateX(-1.5%) scaleY(0.95);
            }
        }
        @keyframes wave-movement-3 {
            0%, 100% {
                transform: translateX(0%) scaleX(1) scaleY(1);
            }
            20% {
                transform: translateX(-1%) scaleX(1.01) scaleY(1.02);
            }
            40% {
                transform: translateX(2%) scaleX(0.99) scaleY(0.98);
            }
            60% {
                transform: translateX(-0.5%) scaleX(1.02) scaleY(1.01);
            }
            80% {
                transform: translateX(1%) scaleX(0.98) scaleY(0.99);
            }
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px -5px rgba(37, 99, 235, 0.15), 0 10px 15px -5px rgba(37, 99, 235, 0.08);
        }
        .progress-bar {
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #2563eb;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .active-nav::after {
            width: 100%;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .testimonial-card {
            transition: all 0.3s ease;
        }
        .testimonial-card:hover {
            transform: scale(1.03);
        }
        .feature-icon {
            transition: all 0.3s ease;
        }
        .feature-card:hover .feature-icon {
            transform: scale(1.15);
            color: #2563eb;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-50" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="index.php" class="flex items-center space-x-1 hover:opacity-80 transition-opacity">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="#2563eb"/>
                                <path d="M2 17L12 22L22 17" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="text-xl font-bold">Lumina <span class="text-blue-600">Academy</span></span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#home" class="nav-link active-nav px-2 py-1 text-gray-700 hover:text-blue-600 transition-colors text-sm font-medium">Início</a>
                    <a href="#materias" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition-colors text-sm font-medium">Matérias</a>
                    <a href="#planos" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition-colors text-sm font-medium">Planos</a>
                    <a href="#recursos" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition-colors text-sm font-medium">Recursos</a>
                    <a href="#depoimentos" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition-colors text-sm font-medium">Depoimentos</a>
                    <a href="#contato" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition-colors text-sm font-medium">Contato</a>
                </div>
                <div class="flex items-center space-x-3">
                    <button id="loginBtn" class="px-4 py-2 text-blue-600 border border-blue-600 rounded-full text-sm font-medium hover:bg-blue-600 hover:text-white transition-all duration-300" onclick="window.location.href='cliente/login.php?view=login'">Entrar</button>
                    <a href="cliente/login.php?view=register" id="registerBtn" class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-medium hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg">Cadastre-se</a>
                    <button id="mobileMenuBtn" class="md:hidden p-2 rounded-md text-gray-700 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg rounded-b-lg">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">Início</a>
                <a href="#materias" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">Matérias</a>
                <a href="#planos" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">Planos</a>
                <a href="#recursos" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">Recursos</a>
                <a href="#depoimentos" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">Depoimentos</a>
                <a href="#contato" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300">Contato</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-28 pb-32 bg-gradient-to-br from-blue-600 to-indigo-600 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white opacity-10 rounded-full -ml-48 -mb-48"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 text-center md:text-left mb-12 md:mb-0">
                    <div class="inline-block px-3 py-1 bg-white bg-opacity-20 rounded-full text-white text-sm font-medium mb-6">
                        #1 Plataforma de Estudos para Vestibulares
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                        Prepare-se para o <span class="bg-white text-blue-600 px-2 rounded-lg">sucesso</span> no vestibular
                    </h1>
                    <p class="text-blue-100 text-lg mb-8 max-w-lg">
                        Organize seus estudos, acompanhe seu progresso e conquiste sua aprovação com a metodologia exclusiva da Lumina Academy.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <button id="startNowBtn" class="px-8 py-3 bg-white text-blue-600 font-medium rounded-full hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1" onclick="window.location.href='cliente/login.php?view=register'">
                            Começar Agora
                        </button>
                        <button id="knowMoreBtn" class="px-8 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-blue-600 transition-all duration-300 group">
                            <span class="flex items-center justify-center">
                                Saiba mais
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="relative animate-float">
                        <div class="bg-white rounded-2xl shadow-2xl p-6 relative z-10">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="text-xs text-gray-500">Lumina Academy Dashboard</div>
                            </div>
                            
                            <div class="mb-6">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-semibold text-gray-800">Seu progresso</h3>
                                    <span class="text-xs text-blue-600 font-medium">75% completo</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-blue-50 rounded-xl p-4">
                                    <div class="text-xs text-gray-500 mb-1">Próxima aula</div>
                                    <div class="font-medium text-gray-800">Matemática</div>
                                    <div class="text-xs text-blue-600 mt-1">Hoje, 14:00</div>
                                </div>
                                <div class="bg-blue-50 rounded-xl p-4">
                                    <div class="text-xs text-gray-500 mb-1">Suporte</div>
                                    <div class="font-medium text-gray-800">Chat disponível</div>
                                    <div class="text-xs text-blue-600 mt-1">24/7</div>
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <h3 class="font-semibold text-gray-800 mb-3">Matérias recentes</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <div class="flex items-center">
                                            <div class="bg-blue-50 p-2 rounded-md mr-3">
                                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="font-medium text-sm text-gray-800">Matemática</div>
                                                <div class="text-xs text-gray-500">Funções Trigonométricas</div>
                                            </div>
                                        </div>
                                        <div class="bg-blue-50 text-blue-600 text-xs font-medium px-2 py-1 rounded-md">
                                            85%
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg">
                                        <div class="flex items-center">
                                            <div class="bg-blue-50 p-2 rounded-md mr-3">
                                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="font-medium text-sm text-gray-800">Química</div>
                                                <div class="text-xs text-gray-500">Química Orgânica</div>
                                            </div>
                                        </div>
                                        <div class="bg-blue-50 text-blue-600 text-xs font-medium px-2 py-1 rounded-md">
                                            70%
                                        </div>
                                    </div>
                                </div>
                            </div>
                                  <a href="cliente/dashboard.php" class="w-full py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center">
                            <span>Ver dashboard completo</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        </div>
                        
                        <!-- Decorative elements -->
                        <div class="absolute -top-6 -right-6 bg-white rounded-full p-4 shadow-lg z-20">
                            <svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838l-2.727 1.17 1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                            </svg>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-indigo-200 rounded-lg h-24 w-24 z-0 opacity-50"></div>
                    </div>
                </div>
            </div>
            
            <!-- Estatísticas flutuantes -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 transform hover:scale-105 transition-all duration-300">
                    <div class="text-white text-4xl font-bold mb-2">15+</div>
                    <div class="text-white text-opacity-90">Matérias completas</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 transform hover:scale-105 transition-all duration-300">
                    <div class="text-white text-4xl font-bold mb-2">5.000+</div>
                    <div class="text-white text-opacity-90">Exercícios resolvidos</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 transform hover:scale-105 transition-all duration-300">
                    <div class="text-white text-4xl font-bold mb-2">98%</div>
                    <div class="text-white text-opacity-90">Taxa de aprovação</div>
                </div>
            </div>
        </div>
        
        <div class="hero-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-white"></path>
            </svg>
        </div>
    </section>

    <!-- Matérias Section -->
    <section id="materias" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center px-4 py-1 bg-blue-50 rounded-full mb-4">
                    <span class="text-blue-600 text-sm font-medium">Conteúdo completo</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Matérias Disponíveis</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore nosso conteúdo completo para todas as disciplinas dos principais vestibulares do país, organizado de forma intuitiva e didática.</p>
            </div>
            
            <!-- Filtro de matérias -->
            <div class="flex flex-wrap justify-center mb-10 gap-3">
                <button id="filter-todas" class="px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-medium">Todas</button>
                <button id="filter-exatas" class="px-4 py-2 bg-white text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300 rounded-full text-sm font-medium">Exatas</button>
                <button id="filter-humanas" class="px-4 py-2 bg-white text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300 rounded-full text-sm font-medium">Humanas</button>
                <button id="filter-biologicas" class="px-4 py-2 bg-white text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300 rounded-full text-sm font-medium">Biológicas</button>
                <button id="filter-linguagens" class="px-4 py-2 bg-white text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-300 rounded-full text-sm font-medium">Linguagens</button>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Matemática -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 card-hover">
                    <div class="h-2 bg-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-50 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-semibold text-gray-800">Matemática</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Álgebra, Geometria, Trigonometria, Estatística e muito mais para dominar os conceitos fundamentais.</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Álgebra</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Geometria</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Estatística</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="w-3/4">
                                <span class="text-xs text-gray-500">32 aulas • 75% concluído</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 75%"></div>
                                </div>
                            </div>
                            <button class="flex items-center justify-center w-10 h-10 bg-blue-50 rounded-full text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300" onclick="checkRestrictedAccess('cliente/materias.php?materia=matematica')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>                        
                
                <!-- Física -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 card-hover">
                    <div class="h-2 bg-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 bg-opacity-10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-semibold text-gray-800">Física</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Mecânica, Termodinâmica, Eletromagnetismo e Física Moderna com abordagem prática e intuitiva.</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Mecânica</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Eletromagnetismo</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Óptica</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="w-3/4">
                                <span class="text-xs text-gray-500">28 aulas • 60% concluído</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 60%"></div>
                                </div>
                            </div>
                            <button class="flex items-center justify-center w-10 h-10 bg-blue-600 bg-opacity-10 rounded-full text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300" onclick="checkRestrictedAccess('cliente/materias.php?materia=fisica')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Química -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 card-hover">
                    <div class="h-2 bg-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 bg-opacity-10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-semibold text-gray-800">Química</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Química Orgânica, Inorgânica, Físico-Química e Analítica com exemplos práticos e aplicações.</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Orgânica</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Inorgânica</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Físico-Química</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="w-3/4">
                                <span class="text-xs text-gray-500">24 aulas • 45% concluído</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 45%"></div>
                                </div>
                            </div>
                            <button class="flex items-center justify-center w-10 h-10 bg-blue-600 bg-opacity-10 rounded-full text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300" onclick="checkRestrictedAccess('cliente/materias.php?materia=quimica')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Biologia -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 card-hover">
                    <div class="h-2 bg-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 bg-opacity-10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-semibold text-gray-800">Biologia</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Citologia, Genética, Ecologia, Fisiologia e Evolução com conteúdo atualizado e didático.</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Genética</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Ecologia</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Evolução</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="w-3/4">
                                <span class="text-xs text-gray-500">30 aulas • 80% concluído</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 80%"></div>
                                </div>
                            </div>
                            <button class="flex items-center justify-center w-10 h-10 bg-blue-600 bg-opacity-10 rounded-full text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300" onclick="checkRestrictedAccess('cliente/materias.php?materia=biologia')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Literatura -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 card-hover">
                    <div class="h-2 bg-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 bg-opacity-10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-semibold text-gray-800">Literatura</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">Escolas literárias, análise de obras obrigatórias e interpretação textual aprofundada.</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Modernismo</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Romantismo</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Contemporânea</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="w-3/4">
                                <span class="text-xs text-gray-500">22 aulas • 65% concluído</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 65%"></div>
                                </div>
                            </div>
                            <button class="flex items-center justify-center w-10 h-10 bg-blue-600 bg-opacity-10 rounded-full text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300" onclick="checkRestrictedAccess('cliente/materias.php?materia=literatura')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- História -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 card-hover">
                    <div class="h-2 bg-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 bg-opacity-10 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 text-xl font-semibold text-gray-800">História</h3>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm">História Geral, do Brasil e contemporânea com análises críticas e contextualização.</p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Brasil</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Geral</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-md text-xs">Contemporânea</span>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="w-3/4">
                                <span class="text-xs text-gray-500">26 aulas • 55% concluído</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                    <div class="bg-blue-600 h-2 rounded-full progress-bar" style="width: 55%"></div>
                                </div>
                            </div>
                            <button class="flex items-center justify-center w-10 h-10 bg-blue-600 bg-opacity-10 rounded-full text-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-300" onclick="checkRestrictedAccess('cliente/materias.php?materia=historia')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <button class="px-8 py-3 bg-blue-600 text-white font-medium rounded-full hover:bg-secondary transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1 flex items-center mx-auto" onclick="checkRestrictedAccess('cliente/materias.php')">
                    <span>Ver todas as matérias</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Planos de Estudo Section -->
    <section id="planos" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center px-4 py-1 bg-blue-600 bg-opacity-10 rounded-full mb-4">
                    <span class="text-blue-600 text-sm font-medium">Escolha seu plano</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Planos de Estudo Personalizados</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Organize seus estudos de acordo com seus objetivos e disponibilidade de tempo com nossos planos flexíveis e adaptáveis.</p>
            </div>
            
            <!-- Toggle anual/mensal -->
            <div class="flex justify-center mb-12">
                <div class="bg-gray-100 p-1 rounded-full inline-flex">
                    <button id="plan-mensal" class="px-6 py-2 rounded-full bg-blue-600 text-white text-sm font-medium">Mensal</button>
                    <button id="plan-anual" class="px-6 py-2 rounded-full text-gray-700 text-sm font-medium">Anual (20% off)</button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Plano Básico -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-1">Plano Básico</h3>
                                <p class="text-sm text-gray-500">Para iniciantes</p>
                            </div>
                            <div class="bg-gray-100 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-end mb-6">
                            <div class="text-blue-600 text-4xl font-bold">Gratuito</div>
                        </div>
                        
                        <ul class="mb-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Acesso a 5 matérias</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Exercícios básicos</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Cronograma simples</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Suporte básico por email</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Suporte personalizado</span>
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-gray-100 text-blue-600 font-medium rounded-lg hover:bg-gray-200 transition-all duration-300 flex items-center justify-center" onclick="checkRestrictedAccess('cliente/perfil_aluno.php')">
                            <span>Começar agora</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Plano Premium -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-blue-600 relative transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-2 z-10">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-4 py-1 rounded-bl-lg font-medium text-sm">
                        Mais popular
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-1">Plano Premium</h3>
                                <p class="text-sm text-gray-500">Para estudantes dedicados</p>
                            </div>
                            <div class="bg-blue-600 bg-opacity-10 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-end mb-6">
                            <div class="text-blue-600 text-4xl font-bold">R$ 49,90</div>
                            <div class="text-gray-500 ml-2 mb-1">/mês</div>
                        </div>
                        
                        <ul class="mb-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Acesso a todas as matérias</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Exercícios avançados</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Cronograma personalizado</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Suporte prioritário</span>
                            </li>
                            <li class="flex items-center text-gray-400">
                                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm">Suporte personalizado</span>
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-secondary transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center" onclick="checkRestrictedAccess('cliente/perfil_aluno.php')">
                            <span>Assinar agora</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Plano Master -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 transition-all duration-300 hover:shadow-xl transform hover:-translate-y-2">
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-1">Plano Master</h3>
                                <p class="text-sm text-gray-500">Para aprovação garantida</p>
                            </div>
                            <div class="bg-gray-100 p-2 rounded-lg">
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-end mb-6">
                            <div class="text-blue-600 text-4xl font-bold">R$ 89,90</div>
                            <div class="text-gray-500 ml-2 mb-1">/mês</div>
                        </div>
                        
                        <ul class="mb-8 space-y-4">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Tudo do plano Premium</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Aulas ao vivo semanais</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Correção de redações</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Suporte 24/7 com chat</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">Suporte personalizado</span>
                            </li>
                        </ul>
                        <button class="w-full py-3 bg-gray-100 text-blue-600 font-medium rounded-lg hover:bg-gray-200 transition-all duration-300 flex items-center justify-center" onclick="checkRestrictedAccess('cliente/perfil_aluno.php')">
                            <span>Assinar agora</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- FAQ -->
            <div class="mt-20">
                <div class="text-center mb-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Perguntas Frequentes</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">Tire suas dúvidas sobre nossos planos e serviços</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Posso mudar de plano depois?</h4>
                        <p class="text-gray-600 text-sm">Sim, você pode fazer upgrade ou downgrade do seu plano a qualquer momento. As alterações entram em vigor no próximo ciclo de cobrança.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Como funciona o cronograma personalizado?</h4>
                        <p class="text-gray-600 text-sm">Nosso algoritmo analisa seu perfil, objetivos e tempo disponível para criar um plano de estudos otimizado e adaptado às suas necessidades.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Posso cancelar a assinatura?</h4>
                        <p class="text-gray-600 text-sm">Sim, você pode cancelar sua assinatura a qualquer momento. O acesso permanece até o final do período pago.</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Como funciona o suporte?</h4>
                        <p class="text-gray-600 text-sm">Oferecemos suporte completo via chat 24/7, email e central de ajuda, com atendimento especializado para tirar suas dúvidas sobre estudos e uso da plataforma.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recursos Section -->
    <section id="recursos" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center px-4 py-1 bg-blue-600 bg-opacity-10 rounded-full mb-4">
                    <span class="text-blue-600 text-sm font-medium">Ferramentas exclusivas</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Recursos que Potencializam seus Estudos</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Ferramentas desenvolvidas para maximizar seu aprendizado e aumentar suas chances de aprovação nos vestibulares.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Cronograma Personalizado -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 flex flex-col items-center text-center feature-card">
                    <div class="bg-blue-600 bg-opacity-10 p-4 rounded-full mb-6 feature-icon">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Cronograma Personalizado</h3>
                    <p class="text-gray-600 text-sm mb-4">Organize seus estudos de acordo com seu tempo disponível e objetivos. Nosso algoritmo cria um plano ideal para você.</p>
                    <a href="cliente/cronograma.php" class="text-blue-600 font-medium text-sm flex items-center mt-auto">
                        <span>Saiba mais</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Banco de Questões -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 flex flex-col items-center text-center feature-card">
                    <div class="bg-blue-600 bg-opacity-10 p-4 rounded-full mb-6 feature-icon">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Banco de Questões</h3>
                    <p class="text-gray-600 text-sm mb-4">Mais de 50.000 questões de vestibulares anteriores com resolução detalhada e classificadas por nível de dificuldade.</p>
                    <a href="cliente/exercicios.php" class="text-blue-600 font-medium text-sm flex items-center mt-auto">
                        <span>Saiba mais</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Central de Suporte -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 flex flex-col items-center text-center feature-card">
                    <div class="bg-blue-600 bg-opacity-10 p-4 rounded-full mb-6 feature-icon">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Central de Suporte</h3>
                    <p class="text-gray-600 text-sm mb-4">Suporte completo 24/7 com chat ao vivo, FAQ detalhado e atendimento especializado para otimizar seus estudos.</p>
                    <a href="cliente/suporte.php" class="text-blue-600 font-medium text-sm flex items-center mt-auto">
                        <span>Saiba mais</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Análise de Desempenho -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 flex flex-col items-center text-center feature-card">
                    <div class="bg-blue-600 bg-opacity-10 p-4 rounded-full mb-6 feature-icon">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Análise de Desempenho</h3>
                    <p class="text-gray-600 text-sm mb-4">Relatórios detalhados do seu progresso com gráficos e estatísticas para acompanhar sua evolução nos estudos.</p>
                    <a href="cliente/desempenho.php" class="text-blue-600 font-medium text-sm flex items-center mt-auto">
                        <span>Saiba mais</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos Section -->
    <section id="depoimentos" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center px-4 py-1 bg-blue-600 bg-opacity-10 rounded-full mb-4">
                    <span class="text-blue-600 text-sm font-medium">✨ Conquistas dos nossos alunos</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Histórias de Sucesso</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Veja como nossos estudantes alcançaram seus sonhos e conquistaram suas aprovações nos melhores vestibulares! 🎓</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Depoimento 1 -->
                <div class="bg-gray-50 rounded-xl p-8 testimonial-card">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" alt="Maria Silva" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Maria Silva</h4>
                            <p class="text-sm text-gray-600">Aprovada em Medicina - USP</p>
                            <div class="flex text-blue-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"O cronograma personalizado foi fundamental para minha aprovação! Consegui organizar meus estudos de forma eficiente e focar nas minhas dificuldades. A plataforma é incrível! 🚀"</p>
                </div>
                
                <!-- Depoimento 2 -->
                <div class="bg-gray-50 rounded-xl p-8 testimonial-card">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" alt="João Santos" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">João Santos</h4>
                            <p class="text-sm text-gray-600">Aprovado em Engenharia - UNICAMP</p>
                            <div class="flex text-blue-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"O suporte da plataforma é incrível! Sempre que tenho dúvidas, recebo ajuda rápida e eficiente. O banco de questões também é excelente para praticar. Recomendo muito! 💪"</p>
                </div>
                
                <!-- Depoimento 3 -->
                <div class="bg-gray-50 rounded-xl p-8 testimonial-card">
                    <div class="flex items-center mb-6">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" alt="Ana Costa" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Ana Costa</h4>
                            <p class="text-sm text-gray-600">Aprovada em Direito - PUC</p>
                            <div class="flex text-blue-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"A análise de desempenho me ajudou a identificar onde eu precisava melhorar. Em poucos meses consegui aumentar muito minha nota! Obrigada Lumina Academy! 🎯"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato Section -->
    <section id="contato" class="py-20 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center justify-center px-4 py-1 bg-white bg-opacity-20 rounded-full mb-6">
                        <span class="text-white text-sm font-medium">💬 Vamos conversar!</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Pronto para começar sua jornada rumo à aprovação?</h2>
                    <p class="text-white text-opacity-90 mb-8">Entre em contato conosco! Nossa equipe está pronta para te ajudar a escolher o melhor plano e tirar todas suas dúvidas. 🚀</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <a href="mailto:contato@luminaacademy.com.br?subject=Interesse nos planos da Lumina Academy" class="text-white font-medium hover:text-blue-300 transition-colors cursor-pointer">contato@luminaacademy.com.br</a>
                                <p class="text-white text-opacity-75 text-sm">Resposta em até 2 horas</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <a href="https://wa.me/5511999998888?text=Olá! Gostaria de saber mais sobre os planos da Lumina Academy 🎓" target="_blank" class="text-white font-medium hover:text-green-300 transition-colors cursor-pointer">(11) 99999-8888</a>
                                <p class="text-white text-opacity-75 text-sm">WhatsApp disponível 24h</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-medium">São Paulo - SP</p>
                                <p class="text-white text-opacity-75 text-sm">Atendimento presencial e online</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botões de ação rápida -->
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <button onclick="openWhatsApp()" class="flex items-center justify-center px-6 py-3 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                            <span>Falar no WhatsApp</span>
                        </button>
                        
                        <button onclick="openEmail()" class="flex items-center justify-center px-6 py-3 bg-white bg-opacity-20 text-white font-medium rounded-lg hover:bg-white hover:bg-opacity-30 transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1 border border-white border-opacity-20">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>Enviar Email</span>
                        </button>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Fale conosco agora! 📞</h3>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nome completo</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" placeholder="Seu nome aqui...">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">E-mail</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" placeholder="seu@email.com">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">WhatsApp</label>
                            <input type="tel" id="phone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" placeholder="(11) 99999-9999">
                        </div>
                        
                        <div>
                            <label for="vestibular" class="block text-sm font-medium text-gray-700 mb-2">Qual vestibular você quer passar?</label>
                            <select id="vestibular" name="vestibular" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300">
                                <option value="">Selecione...</option>
                                <option value="enem">ENEM</option>
                                <option value="fuvest">FUVEST (USP)</option>
                                <option value="unicamp">UNICAMP</option>
                                <option value="unesp">UNESP</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Mensagem</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" placeholder="Conte-nos sobre seus objetivos..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-secondary transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1 flex items-center justify-center">
                            <span>Enviar mensagem</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo e descrição -->
                <div class="md:col-span-1">
                    <a href="index.php" class="flex items-center space-x-2 mb-4 hover:opacity-80 transition-opacity">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="#2563eb"/>
                            <path d="M2 17L12 22L22 17" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="text-xl font-bold">Lumina <span class="text-blue-600">Academy</span></span>
                    </a>
                    <p class="text-gray-400 text-sm mb-6">Sua plataforma completa para aprovação nos melhores vestibulares do país. Junte-se aos milhares de aprovados! 🎓</p>
                    <!-- Redes sociais -->
                    <div class="flex space-x-4">
                        <a href="https://twitter.com/luminaacademy" target="_blank" class="bg-gray-800 p-2 rounded-full hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                            </svg>
                        </a>
                        <a href="https://facebook.com/luminaacademy" target="_blank" class="bg-gray-800 p-2 rounded-full hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                            </svg>
                        </a>
                        <a href="https://instagram.com/luminaacademy" target="_blank" class="bg-gray-800 p-2 rounded-full hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.222.083.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"></path>
                            </svg>
                        </a>
                        <a href="https://linkedin.com/company/luminaacademy" target="_blank" class="bg-gray-800 p-2 rounded-full hover:bg-blue-600 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Links úteis -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Links Úteis</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#home" class="hover:text-blue-600 transition-colors">Início</a></li>
                        <li><a href="#materias" class="hover:text-blue-600 transition-colors">Matérias</a></li>
                        <li><a href="#planos" class="hover:text-blue-600 transition-colors">Planos</a></li>
                        <li><a href="#recursos" class="hover:text-blue-600 transition-colors">Recursos</a></li>
                        <li><a href="#depoimentos" class="hover:text-blue-600 transition-colors">Depoimentos</a></li>
                        <li><a href="#contato" class="hover:text-blue-600 transition-colors">Contato</a></li>
                    </ul>
                </div>
                
                <!-- Matérias -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Matérias</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="cliente/exercicios.php" class="hover:text-blue-600 transition-colors">Matemática</a></li>
                        <li><a href="cliente/exercicios.php" class="hover:text-blue-600 transition-colors">Física</a></li>
                        <li><a href="cliente/exercicios.php" class="hover:text-blue-600 transition-colors">Química</a></li>
                        <li><a href="cliente/exercicios.php" class="hover:text-blue-600 transition-colors">Biologia</a></li>
                        <li><a href="cliente/exercicios.php" class="hover:text-blue-600 transition-colors">Literatura</a></li>
                        <li><a href="cliente/exercicios.php" class="hover:text-blue-600 transition-colors">História</a></li>
                    </ul>
                </div>
                
                <!-- Suporte -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Suporte</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="cliente/dashboard.php" class="hover:text-blue-600 transition-colors">Central de Ajuda</a></li>
                        <li><a href="cliente/dashboard.php" class="hover:text-blue-600 transition-colors">FAQ</a></li>
                        <li><a href="cliente/dashboard.php" class="hover:text-blue-600 transition-colors">Política de Privacidade</a></li>
                        <li><a href="cliente/dashboard.php" class="hover:text-blue-600 transition-colors">Termos de Uso</a></li>
                        <li><a href="cliente/dashboard.php" class="hover:text-blue-600 transition-colors">Cancelamento</a></li>
                        <li><a href="cliente/dashboard.php" class="hover:text-blue-600 transition-colors">Reembolso</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">© 2025 Lumina Academy. Todos os direitos reservados. Feito com ❤️ para estudantes brasileiros.</p>
                    <div class="flex items-center space-x-4 mt-4 md:mt-0">
                        <span class="text-gray-400 text-sm">Aceitamos:</span>
                        <div class="flex space-x-2">
                            <div class="bg-gray-800 px-3 py-1 rounded text-xs">PIX</div>
                            <div class="bg-gray-800 px-3 py-1 rounded text-xs">Cartão</div>
                            <div class="bg-gray-800 px-3 py-1 rounded text-xs">Boleto</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Navbar sempre com estilo fixo - sem alterações no scroll

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active navigation highlighting
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active-nav');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active-nav');
                }
            });
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const phone = formData.get('phone');
            const vestibular = formData.get('vestibular');
            const message = formData.get('message');
            
            // Basic validation
            if (!name || !email || !phone) {
                alert('Por favor, preencha todos os campos obrigatórios.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Por favor, insira um email válido.');
                return;
            }
            
            // Phone validation (basic)
            const phoneRegex = /^[\d\s\(\)\-\+]{10,}$/;
            if (!phoneRegex.test(phone.replace(/\D/g, ''))) {
                alert('Por favor, insira um telefone válido.');
                return;
            }
            
            // Simulate form submission
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<svg class="animate-spin h-5 w-5 mr-2" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Enviando...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                // Create WhatsApp message
                const whatsappMessage = `🎓 *Nova mensagem do site Lumina Academy*%0A%0A*Nome:* ${name}%0A*Email:* ${email}%0A*Telefone:* ${phone}%0A*Vestibular:* ${vestibular || 'Não informado'}%0A*Mensagem:* ${message || 'Sem mensagem adicional'}`;
                const whatsappURL = `https://wa.me/5511999998888?text=${whatsappMessage}`;
                
                // Show success message with options
                const userChoice = confirm('Mensagem processada com sucesso! 🚀\n\nGostaria de enviar também pelo WhatsApp para um atendimento mais rápido?\n\nClique "OK" para WhatsApp ou "Cancelar" para continuar.');
                
                if (userChoice) {
                    // Open WhatsApp
                    window.open(whatsappURL, '_blank');
                } else {
                    alert('Mensagem enviada! Nossa equipe entrará em contato em breve. �');
                }
                
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Progress bar animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBars = entry.target.querySelectorAll('.progress-bar');
                    progressBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0%';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll('#materias .grid').forEach(grid => {
            observer.observe(grid);
        });

        // Button interactions
        document.getElementById('knowMoreBtn').addEventListener('click', function() {
            document.querySelector('#materias').scrollIntoView({ behavior: 'smooth' });
        });

        // Filter functionality for subjects
        const filterButtons = document.querySelectorAll('[id^="filter-"]');
        const subjectCards = document.querySelectorAll('#materias .grid > div');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-blue-600', 'text-white');
                    btn.classList.add('bg-white', 'text-gray-700');
                });
                
                // Add active class to clicked button
                this.classList.remove('bg-white', 'text-gray-700');
                this.classList.add('bg-blue-600', 'text-white');
                
                const filter = this.id.replace('filter-', '');
                
                subjectCards.forEach(card => {
                    if (filter === 'todas') {
                        card.style.display = 'block';
                    } else {
                        // Simple filter logic - in a real app this would be more sophisticated
                        const cardTitle = card.querySelector('h3').textContent.toLowerCase();
                        let shouldShow = false;
                        
                        switch(filter) {
                            case 'exatas':
                                shouldShow = ['matemática', 'física', 'química'].some(subject => 
                                    cardTitle.includes(subject));
                                break;
                            case 'humanas':
                                shouldShow = ['história', 'geografia', 'filosofia', 'sociologia'].some(subject => 
                                    cardTitle.includes(subject));
                                break;
                            case 'biologicas':
                                shouldShow = ['biologia'].some(subject => 
                                    cardTitle.includes(subject));
                                break;
                            case 'linguagens':
                                shouldShow = ['literatura', 'português', 'inglês', 'redação'].some(subject => 
                                    cardTitle.includes(subject));
                                break;
                        }
                        
                        card.style.display = shouldShow ? 'block' : 'none';
                    }
                });
            });
        });

        // Plan toggle functionality
        const planToggleButtons = document.querySelectorAll('[id^="plan-"]');
        planToggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                planToggleButtons.forEach(btn => {
                    btn.classList.remove('bg-blue-600', 'text-white');
                    btn.classList.add('text-gray-700');
                });
                
                // Add active class to clicked button
                this.classList.remove('text-gray-700');
                this.classList.add('bg-blue-600', 'text-white');
                
                // Update prices based on plan type
                const isAnual = this.id === 'plan-anual';
                const priceElements = document.querySelectorAll('.text-4xl');
                
                priceElements.forEach(element => {
                    if (element.textContent.includes('R$')) {
                        const currentPrice = element.textContent;
                        if (isAnual) {
                            // Apply 20% discount for annual plans
                            if (currentPrice.includes('49,90')) {
                                element.textContent = 'R$ 39,92';
                            } else if (currentPrice.includes('89,90')) {
                                element.textContent = 'R$ 71,92';
                            }
                        } else {
                            // Restore monthly prices
                            if (currentPrice.includes('39,92') || currentPrice.includes('49,90')) {
                                element.textContent = 'R$ 49,90';
                            } else if (currentPrice.includes('71,92') || currentPrice.includes('89,90')) {
                                element.textContent = 'R$ 89,90';
                            }
                        }
                    }
                });
            });
        });

        // Initialize entrance animations
        const observeElements = document.querySelectorAll('.card-hover, .testimonial-card, .feature-card');
        
        const elementObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.style.transition = 'all 0.6s ease-out';
                }
            });
        }, { threshold: 0.1 });

        observeElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            elementObserver.observe(el);
        });

        // Contact functions
        function openWhatsApp() {
            const message = "Olá! Gostaria de saber mais sobre os planos da Lumina Academy 🎓";
            const whatsappURL = `https://wa.me/5511999998888?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, '_blank');
        }

        function openEmail() {
            const subject = "Interesse nos planos da Lumina Academy";
            const body = "Olá,\n\nGostaria de saber mais informações sobre os planos de estudo da Lumina Academy.\n\nAguardo retorno.\n\nObrigado(a)!";
            const emailURL = `mailto:contato@luminaacademy.com.br?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            window.location.href = emailURL;
        }

        // Make functions globally available
        window.openWhatsApp = openWhatsApp;
        window.openEmail = openEmail;

        // Console welcome message
        console.log(`
        🎓 Lumina Academy - Desenvolvimento Web
        
        ╔══════════════════════════════════════╗
        ║   Bem-vindo ao Lumina Academy!       ║
        ║   Sua jornada rumo à aprovação       ║
        ║   começa aqui! 🚀                   ║
        ╚══════════════════════════════════════╝
        
        Desenvolvido com ❤️ para estudantes brasileiros
        `);
    </script>
</body>
</html>

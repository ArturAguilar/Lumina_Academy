<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lumina Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        textPrimary: '#1F2937',
                        textSecondary: '#6B7280',
                        neutral: '#E5E7EB',
                        error: '#EF4444'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Container Principal -->
    <div class="min-h-screen flex">
        <!-- Lado Esquerdo - Institucional -->
        <div class="flex-1 relative bg-gradient-to-br from-primary to-secondary hidden lg:flex">
            <!-- Formas Flutuantes -->
            <div class="floating-shapes">
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
            </div>
            
            <!-- Conteúdo Institucional -->
            <div class="relative z-10 flex flex-col justify-between h-full p-12 text-white">
                <!-- Header -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold">Lumina Academy</span>
                </div>
                
                <!-- Conteúdo Central -->
                <div class="space-y-8">
                    <!-- Chamada Principal -->
                    <div class="space-y-6">
                        <h1 class="text-3xl md:text-4xl font-bold mb-6">Comece sua jornada de aprendizado hoje</h1>
                        <p class="text-white/80 mb-8">Acesse milhares de cursos online ministrados por especialistas e desenvolva habilidades que impulsionarão sua carreira.</p>
                    </div>
                    
                    <!-- Benefícios -->
                    <div class="hidden md:block">
                        <div class="flex items-center mb-6">
                            <div class="bg-white/20 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Mais de 5.000 cursos</h3>
                                <p class="text-sm text-white/70">Em diversas áreas de conhecimento</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center mb-6">
                            <div class="bg-white/20 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.0 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Certificados reconhecidos</h3>
                                <p class="text-sm text-white/70">Valorize seu currículo</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="bg-white/20 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium">Aprenda no seu ritmo</h3>
                                <p class="text-sm text-white/70">Acesso vitalício aos cursos</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:block mt-12">
                    <p class="text-sm text-white/70">© 2023 Lumina Academy. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
        
        <!-- Lado Direito - Formulários -->
        <div class="w-full md:w-7/12 p-8 md:p-12">
            <div class="max-w-md mx-auto">
                <!-- Login Form -->
                <div id="loginForm" class="form-container">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-textPrimary">Bem-vindo de volta!</h2>
                        <p class="text-textSecondary">Entre na sua conta para continuar</p>
                    </div>
                    
                    <div class="space-y-4 mb-6">
                        <div>
                            <label for="login-email" class="block text-sm font-medium text-textSecondary mb-1">Email</label>
                            <input type="email" id="login-email" class="input-field w-full px-4 py-3 rounded-lg border border-neutral focus:outline-none" placeholder="seu@email.com">
                            <p id="login-email-error" class="hidden text-error text-sm mt-1">Por favor, insira um email válido.</p>
                        </div>
                        
                        <div>
                            <div class="flex justify-between mb-1">
                                <label for="login-password" class="block text-sm font-medium text-textSecondary">Senha</label>
                                <button type="button" id="forgotPasswordLink" class="text-sm text-primary hover:underline focus:outline-none">Esqueceu a senha?</button>
                            </div>
                            <input type="password" id="login-password" class="input-field w-full px-4 py-3 rounded-lg border border-neutral focus:outline-none" placeholder="••••••••">
                            <p id="login-password-error" class="hidden text-error text-sm mt-1">Por favor, insira sua senha.</p>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="remember-me" class="w-4 h-4 text-primary border-neutral rounded focus:ring-primary">
                            <label for="remember-me" class="ml-2 text-sm text-textSecondary">Lembrar de mim</label>
                        </div>
                    </div>
                    
                    <button id="loginButton" class="btn-primary w-full py-3 rounded-lg text-white font-medium mb-4">Entrar</button>
                    
                    <div class="text-center">
                        <p class="text-textSecondary">
                            Não tem uma conta? 
                            <button id="showRegisterBtn" class="form-switch text-primary font-medium hover:underline">Cadastre-se</button>
                        </p>
                    </div>
                    
                    <!-- Back to home -->
                    <div class="mt-4 text-center">
                        <a href="../index.php" class="text-sm text-gray-500 hover:text-gray-700 transition-colors flex items-center justify-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Voltar ao início
                        </a>
                    </div>
                </div>
                
                <!-- Register Form -->
                <div id="registerForm" class="form-container hidden">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-textPrimary">Crie sua conta</h2>
                        <p class="text-textSecondary">Comece sua jornada de aprendizado</p>
                    </div>
                    
                    <div class="space-y-4 mb-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="register-firstname" class="block text-sm font-medium text-textSecondary mb-1">Nome</label>
                                <input type="text" id="register-firstname" class="input-field w-full px-4 py-3 rounded-lg border border-neutral focus:outline-none" placeholder="Maria">
                                <p id="register-firstname-error" class="hidden text-error text-sm mt-1">Por favor, insira seu nome.</p>
                            </div>
                            <div>
                                <label for="register-lastname" class="block text-sm font-medium text-textSecondary mb-1">Sobrenome</label>
                                <input type="text" id="register-lastname" class="input-field w-full px-4 py-3 rounded-lg border border-neutral focus:outline-none" placeholder="Silva">
                                <p id="register-lastname-error" class="hidden text-error text-sm mt-1">Por favor, insira seu sobrenome.</p>
                            </div>
                        </div>
                        
                        <div>
                            <label for="register-email" class="block text-sm font-medium text-textSecondary mb-1">Email</label>
                            <input type="email" id="register-email" class="input-field w-full px-4 py-3 rounded-lg border border-neutral focus:outline-none" placeholder="seu@email.com">
                            <p id="register-email-error" class="hidden text-error text-sm mt-1">Por favor, insira um email válido.</p>
                        </div>
                        
                        <div>
                            <label for="register-password" class="block text-sm font-medium text-textSecondary mb-1">Senha</label>
                            <input type="password" id="register-password" class="input-field w-full px-4 py-3 rounded-lg border border-neutral focus:outline-none" placeholder="••••••••">
                            <!-- Indicador de força da senha -->
                            <div id="password-strength" class="hidden mt-2">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm text-textSecondary">Força da senha:</span>
                                    <span id="password-strength-text" class="text-sm font-medium"></span>
                                </div>
                                <div class="w-full bg-neutral rounded-full h-2">
                                    <div id="password-strength-bar" class="h-2 rounded-full transition-all duration-300"></div>
                                </div>
                                <div id="password-feedback" class="mt-1 text-xs text-textSecondary"></div>
                            </div>
                            <p id="register-password-error" class="hidden text-error text-sm mt-1">A senha deve ser forte e ter pelo menos 8 caracteres.</p>
                        </div>
                        
                        <div>
                            <label for="register-confirm-password" class="block text-sm font-medium text-textSecondary mb-1">Confirmar senha</label>
                            <input type="password" id="register-confirm-password" class="input-field w-full px-4 py-3 rounded-lg border border-neutral focus:outline-none" placeholder="••••••••">
                            <p id="register-confirm-password-error" class="hidden text-error text-sm mt-1">As senhas não coincidem.</p>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="terms" class="w-4 h-4 text-primary border-neutral rounded focus:ring-primary">
                            <label for="terms" class="ml-2 text-sm text-textSecondary">
                                Eu concordo com os <a href="#" class="text-primary hover:underline">Termos de Serviço</a> e <a href="#" class="text-primary hover:underline">Política de Privacidade</a>
                            </label>
                        </div>
                        <p id="terms-error" class="hidden text-error text-sm mt-1">Você deve concordar com os termos para continuar.</p>
                    </div>
                    
                    <button id="registerButton" class="btn-primary w-full py-3 rounded-lg text-white font-medium mb-4">Criar conta</button>
                    
                    <div class="text-center">
                        <p class="text-textSecondary">
                            Já tem uma conta? 
                            <button id="showLoginBtn" class="form-switch text-primary font-medium hover:underline">Entrar</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Esqueci a Senha -->
    <div id="forgotPasswordModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 hidden">
        <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <!-- Header do Modal -->
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Recuperar Senha</h3>
                        <p class="text-sm text-gray-500 mt-1">Digite seu email para receber instruções de recuperação</p>
                    </div>
                    <button id="closeForgotModal" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Formulário de Recuperação -->
                <div id="forgotPasswordForm">
                    <div class="mb-4">
                        <label for="forgot-email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="forgot-email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" placeholder="seu@email.com">
                        <p id="forgot-email-error" class="hidden text-red-600 text-sm mt-1">Por favor, insira um email válido.</p>
                    </div>
                    
                    <div class="flex items-center justify-end pt-6 border-t border-gray-200">
                        <button id="cancelForgotPassword" type="button" class="px-4 py-2 bg-gray-300 text-gray-700 text-base font-medium rounded-md shadow-sm hover:bg-gray-400 focus:outline-none mr-3">
                            Cancelar
                        </button>
                        <button id="sendRecoveryEmail" type="button" class="px-4 py-2 bg-primary text-white text-base font-medium rounded-md shadow-sm hover:bg-secondary focus:outline-none">
                            Enviar Email
                        </button>
                    </div>
                </div>

                <!-- Mensagem de Sucesso -->
                <div id="forgotPasswordSuccess" class="hidden">
                    <div class="text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 mb-4">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Email Enviado!</h3>
                        <p class="text-sm text-gray-500 mb-6">Se o email existir em nossa base, você receberá instruções para redefinir sua senha em breve.</p>
                        <button id="closeForgotSuccess" class="w-full px-4 py-2 bg-primary text-white text-base font-medium rounded-md shadow-sm hover:bg-secondary focus:outline-none">
                            Voltar ao Login
                        </button>
                    </div>
                </div>

                <!-- Reset Password Form (simulação) -->
                <div id="resetPasswordForm" class="hidden">
                    <div class="text-center mb-6">
                        <h3 class="text-lg font-bold text-gray-900">Nova Senha</h3>
                        <p class="text-sm text-gray-500 mt-1">Digite sua nova senha</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="new-password" class="block text-sm font-medium text-gray-700 mb-2">Nova Senha</label>
                            <input type="password" id="new-password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" placeholder="••••••••">
                            <p id="new-password-error" class="hidden text-red-600 text-sm mt-1">A senha deve ter pelo menos 8 caracteres.</p>
                        </div>
                        
                        <div>
                            <label for="confirm-new-password" class="block text-sm font-medium text-gray-700 mb-2">Confirmar Nova Senha</label>
                            <input type="password" id="confirm-new-password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" placeholder="••••••••">
                            <p id="confirm-new-password-error" class="hidden text-red-600 text-sm mt-1">As senhas não coincidem.</p>
                        </div>
                        
                        <!-- Indicador de força da nova senha -->
                        <div id="new-password-strength" class="hidden">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm text-gray-600">Força da senha:</span>
                                <span id="new-password-strength-text" class="text-sm font-medium"></span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="new-password-strength-bar" class="h-2 rounded-full transition-all duration-300"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-end pt-6 border-t border-gray-200 mt-6">
                        <button id="updatePassword" type="button" class="w-full px-4 py-2 bg-primary text-white text-base font-medium rounded-md shadow-sm hover:bg-secondary focus:outline-none">
                            Atualizar Senha
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/login.js"></script>
</body>
</html>
/**
 * Componentes da Sidebar - Lumina Academy
 */

class SidebarComponents {
    // Gerar logo da aplicação
    static generateLogo() {
        return `
            <div class="flex items-center px-6 py-4">
                <a href="../index.html" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
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
        `;
    }

    // Gerar perfil do usuário
    static generateUserProfile(user) {
        return `
            <div class="px-6 py-4 border-b border-gray-100">
                <div class="flex items-center space-x-3">
                    <div class="bg-primary text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-sm">
                        ${user.initials}
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">${user.name}</p>
                        <p class="text-xs text-gray-500">${user.plan}</p>
                    </div>
                </div>
            </div>
        `;
    }

    // Gerar item de navegação
    static generateNavItem(item) {
        const isActive = item.active ? 'bg-primary bg-opacity-10 text-primary' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900';
        const iconColor = item.active ? 'text-primary' : 'text-gray-400';
        
        return `
            <a href="${item.href}" class="${isActive} group flex items-center px-3 py-2 text-sm font-medium rounded-lg">
                <svg class="${iconColor} mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    ${item.icon}
                </svg>
                ${item.label}
            </a>
        `;
    }

    // Gerar menu completo de navegação
    static generateNavigationMenu(menuItems) {
        return `
            <div class="flex-1 px-4 py-4">
                <nav class="space-y-1">
                    ${menuItems.map(item => this.generateNavItem(item)).join('')}
                </nav>
            </div>
        `;
    }

    // Dados de exemplo para o menu
    static getDefaultMenuItems() {
        return [
            {
                label: 'Dashboard',
                href: '#',
                active: true,
                icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>'
            },
            {
                label: 'Matérias',
                href: '#',
                active: false,
                icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>'
            },
            {
                label: 'Exercícios',
                href: 'exercicios.html',
                active: false,
                icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>'
            },
            {
                label: 'Cronograma',
                href: '#',
                active: false,
                icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>'
            },
            {
                label: 'Simulados',
                href: '#',
                active: false,
                icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>'
            },
            {
                label: 'Desempenho',
                href: '#',
                active: false,
                icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>'
            },
            {
                label: 'Suporte',
                href: '#',
                active: false,
                icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>'
            }
        ];
    }

    // Gerar sidebar completa
    static generateCompleteSidebar(user, menuItems = null) {
        const items = menuItems || this.getDefaultMenuItems();
        
        return `
            <div class="hidden md:flex md:flex-shrink-0">
                <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                    ${this.generateLogo()}
                    ${this.generateUserProfile(user)}
                    ${this.generateNavigationMenu(items)}
                </div>
            </div>
        `;
    }
}

// Exportar para uso global
window.SidebarComponents = SidebarComponents;

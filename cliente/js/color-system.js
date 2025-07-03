/**
 * Demonstração das Novas Cores do Sistema - Lumina Academy
 */

// Paleta de cores atualizada
const colorPalette = {
    primary: '#5A67D8',      // Azul/Roxo principal - elementos interativos
    secondary: '#F0AD55',     // Laranja - elementos secundários e destaques
    highlight: '#FCD34D',     // Amarelo - realces e notificações importantes
    textPrimary: '#2D3748',   // Cinza escuro - texto principal
    textSecondary: '#4A5568', // Cinza médio - texto secundário
    bgLight: '#F7FAFC',       // Fundo claro
    bgDark: '#1A202C',        // Fundo escuro
    success: '#48BB78',       // Verde - sucesso
    error: '#F56565',         // Vermelho - erro
    info: '#4299E1',          // Azul - informação
    neutral: '#E2E8F0'        // Cinza neutro
};

// Exemplos de uso das novas cores
class ColorSystemDemo {
    // Exemplo de botões com as novas cores
    static createButtons() {
        return `
            <!-- Botão Principal -->
            <button class="bg-primary hover:bg-primary-600 text-white px-4 py-2 rounded-lg transition-colors">
                Botão Principal
            </button>
            
            <!-- Botão Secundário -->
            <button class="bg-secondary hover:bg-secondary-600 text-white px-4 py-2 rounded-lg transition-colors">
                Botão Secundário
            </button>
            
            <!-- Botão de Destaque -->
            <button class="bg-highlight hover:bg-highlight-600 text-gray-800 px-4 py-2 rounded-lg transition-colors">
                Destaque
            </button>
            
            <!-- Botão de Sucesso -->
            <button class="bg-success hover:bg-success-600 text-white px-4 py-2 rounded-lg transition-colors">
                Sucesso
            </button>
            
            <!-- Botão de Erro -->
            <button class="bg-error hover:bg-error-600 text-white px-4 py-2 rounded-lg transition-colors">
                Erro
            </button>
            
            <!-- Botão de Info -->
            <button class="bg-info hover:bg-info-600 text-white px-4 py-2 rounded-lg transition-colors">
                Informação
            </button>
        `;
    }

    // Exemplo de cards com as novas cores
    static createCards() {
        return `
            <!-- Card Principal -->
            <div class="bg-white border-l-4 border-primary p-4 rounded-lg shadow">
                <h3 class="text-textPrimary font-semibold">Card Principal</h3>
                <p class="text-textSecondary">Usando a cor primária como destaque</p>
            </div>
            
            <!-- Card de Sucesso -->
            <div class="bg-success bg-opacity-10 border border-success border-opacity-20 p-4 rounded-lg">
                <h3 class="text-success font-semibold">Sucesso</h3>
                <p class="text-textSecondary">Operação realizada com sucesso</p>
            </div>
            
            <!-- Card de Aviso -->
            <div class="bg-highlight bg-opacity-10 border border-highlight border-opacity-20 p-4 rounded-lg">
                <h3 class="text-yellow-800 font-semibold">Atenção</h3>
                <p class="text-textSecondary">Informação importante</p>
            </div>
            
            <!-- Card de Erro -->
            <div class="bg-error bg-opacity-10 border border-error border-opacity-20 p-4 rounded-lg">
                <h3 class="text-error font-semibold">Erro</h3>
                <p class="text-textSecondary">Algo deu errado</p>
            </div>
        `;
    }

    // Exemplo de badges/tags com as novas cores
    static createBadges() {
        return `
            <span class="bg-primary text-white px-2 py-1 rounded-full text-xs">Principal</span>
            <span class="bg-secondary text-white px-2 py-1 rounded-full text-xs">Secundário</span>
            <span class="bg-success text-white px-2 py-1 rounded-full text-xs">Sucesso</span>
            <span class="bg-error text-white px-2 py-1 rounded-full text-xs">Erro</span>
            <span class="bg-info text-white px-2 py-1 rounded-full text-xs">Info</span>
            <span class="bg-highlight text-gray-800 px-2 py-1 rounded-full text-xs">Destaque</span>
            <span class="bg-neutral text-textPrimary px-2 py-1 rounded-full text-xs">Neutro</span>
        `;
    }

    // Demonstrar uso das cores de texto
    static createTextExamples() {
        return `
            <h1 class="text-textPrimary font-bold text-2xl">Título Principal</h1>
            <h2 class="text-textSecondary font-semibold text-xl">Subtítulo</h2>
            <p class="text-textSecondary">Texto secundário para descrições</p>
            <p class="text-primary">Texto com cor primária para links</p>
            <p class="text-success">Texto de sucesso</p>
            <p class="text-error">Texto de erro</p>
            <p class="text-info">Texto informativo</p>
        `;
    }
}

// Função para aplicar tema escuro
function applyDarkTheme() {
    document.body.classList.add('bg-bgDark', 'text-white');
    
    // Atualizar cards para tema escuro
    const cards = document.querySelectorAll('.bg-white');
    cards.forEach(card => {
        card.classList.remove('bg-white');
        card.classList.add('bg-gray-800');
    });
}

// Função para aplicar tema claro
function applyLightTheme() {
    document.body.classList.remove('bg-bgDark', 'text-white');
    document.body.classList.add('bg-bgLight');
    
    // Atualizar cards para tema claro
    const cards = document.querySelectorAll('.bg-gray-800');
    cards.forEach(card => {
        card.classList.remove('bg-gray-800');
        card.classList.add('bg-white');
    });
}

// Guia de uso das cores
const colorUsageGuide = {
    primary: "Use para botões principais, links ativos, elementos de navegação ativos",
    secondary: "Use para botões secundários, elementos de destaque moderado",
    highlight: "Use para chamar atenção, avisos importantes, elementos que precisam se destacar",
    success: "Use para confirmações, sucessos, estados positivos",
    error: "Use para erros, alertas críticos, estados negativos",
    info: "Use para informações neutras, dicas, estados informativos",
    textPrimary: "Use para títulos, texto principal, conteúdo importante",
    textSecondary: "Use para texto secundário, descrições, legendas",
    neutral: "Use para elementos neutros, bordas, separadores"
};

// Exportar para uso em outros arquivos
window.ColorSystemDemo = ColorSystemDemo;
window.colorPalette = colorPalette;
window.colorUsageGuide = colorUsageGuide;

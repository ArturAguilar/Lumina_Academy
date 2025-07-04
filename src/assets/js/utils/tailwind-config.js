/**
 * Configuração do Tailwind CSS para Lumina Academy
 */

// Configuração customizada do Tailwind
const tailwindConfig = {
    theme: {
        extend: {
            colors: {
                'primary': '#5A67D8',
                'secondary': '#F6AD55',
                'highlight': '#FCD34D',
                'textPrimary': '#2D3748',
                'textSecondary': '#4A5568',
                'bgLight': '#F7FAFC',
                'bgDark': '#1A202C',
                'success': '#48BB78',
                'error': '#F56565',
                'info': '#4299E1',
                'neutral': '#E2E8F0'
            },
            fontFamily: {
                'sans': ['Poppins', 'Inter', 'system-ui', '-apple-system', 'sans-serif'],
            },
            spacing: {
                '18': '4.5rem',
                '88': '22rem',
            },
            animation: {
                'fade-in': 'fadeIn 0.5s ease-in-out',
                'slide-up': 'slideUp 0.3s ease-out',
                'pulse-soft': 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(10px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                }
            }
        }
    }
};

// Aplicar configuração ao Tailwind se disponível
if (typeof tailwind !== 'undefined' && tailwind.config) {
    tailwind.config = tailwindConfig;
}

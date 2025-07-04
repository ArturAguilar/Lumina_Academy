# Lumina Academy - Plataforma de Estudos para Vestibulares

## 📚 Sobre o Projeto

O Lumina Academy é uma plataforma moderna e completa para estudos de vestibulares, oferecendo cronogramas personalizados, banco de questões, simulados realistas e análise de desempenho para maximizar as chances de aprovação dos estudantes.

**🆕 NOVO: Sistema de Login com Níveis de Acesso**
A plataforma agora conta com um sistema completo de autenticação e autorização, com diferentes tipos de usuário e dashboards personalizados.

## 🚀 Tecnologias Utilizadas

- **HTML5**: Estrutura semântica e acessível
- **CSS3**: Estilos modernos com animações e responsividade
- **JavaScript ES6+**: Interatividade e funcionalidades dinâmicas
- **Tailwind CSS**: Framework CSS utilitário para design consistente
- **Font Inter**: Tipografia moderna do Google Fonts
- **Sistema de Autenticação**: Login/logout com localStorage

## � Sistema de Login e Níveis de Acesso

### Tipos de Usuário Disponíveis

| Tipo | Email | Senha | Dashboard | Descrição |
|------|-------|-------|-----------|-----------|
| **Admin** | `admin@lumina.com` | `admin123` | Admin Dashboard | Acesso total ao sistema |
| **Professor** | `teacher@lumina.com` | `teacher123` | Teacher Dashboard | Gerenciar cursos e estudantes |
| **Moderador** | `moderator@lumina.com` | `moderator123` | Moderator Dashboard | Moderar conteúdo e denúncias |
| **Estudante** | `student@lumina.com` | `student123` | Student Dashboard | Acessar cursos e exercícios |
| **Demo** | `demo@lumina.com` | `demo123` | Student Dashboard | Acesso demonstração |

### Funcionalidades de Autenticação
- ✅ **Login/Logout** seguro com validação
- ✅ **Registro** de novos usuários
- ✅ **"Lembrar de mim"** com persistência de sessão
- ✅ **Redirecionamento automático** baseado no tipo de usuário
- ✅ **Verificação de permissões** em tempo real
- ✅ **Proteção de rotas** com controle de acesso
- ✅ **Dashboards personalizados** por tipo de usuário

### Como Testar o Sistema
1. Acesse `cliente/login.php`
2. Use uma das credenciais de teste acima
3. Observe o redirecionamento automático para o dashboard correto
4. Teste navegação entre páginas (algumas são restritas por permissão)
5. Teste logout e login com outro tipo de usuário

## 📁 Estrutura do Projeto

O projeto foi expandido com sistema de autenticação e múltiplos dashboards:

```
Lumina Academy/
├── index.php                    # Landing page da plataforma
├── README.md                   # Documentação do projeto
├── SISTEMA_LOGIN_DOCUMENTACAO.md # Documentação do sistema de login
├── cliente/                    # Área logada da plataforma
│   ├── login.php              # Página de login/registro
│   ├── dashboard.php          # Dashboard de estudantes
│   ├── admin-dashboard.php    # Dashboard de administradores
│   ├── teacher-dashboard.php  # Dashboard de professores
│   ├── moderator-dashboard.php # Dashboard de moderadores
│   ├── exercicios.php         # Página de exercícios (protegida)
│   ├── materias.php           # Página de matérias (protegida)
│   ├── desempenho.php         # Página de desempenho (protegida)
│   ├── cronograma.php         # Página de cronograma (protegida)
│   ├── suporte.php            # Página de suporte (protegida)
│   ├── css/
│   │   ├── styles.css         # Estilos globais compartilhados
│   │   └── login.css          # Estilos específicos do login
│   └── js/
│       ├── main.js            # JavaScript principal global
│       ├── login.js           # Lógica de autenticação
│       ├── data.js            # Dados e configurações
│       ├── utils.js           # Funções utilitárias
│       ├── sidebar-components.js # Componentes da sidebar
│       ├── color-system.js    # Sistema de cores
│       └── tailwind-config.js # Configurações do Tailwind
└── js/
    └── auth-check.js          # Funções de verificação de autenticação
```

## 🎨 Principais Recursos

### Sistema de Autenticação
- **Página de Login** (`cliente/login.php`): Interface moderna com alternância login/registro
- **Múltiplos Dashboards**: Interfaces personalizadas por tipo de usuário
- **Verificação de Permissões**: Controle granular de acesso a funcionalidades
- **Sessão Persistente**: "Lembrar de mim" funcional
- **Segurança**: Tokens de sessão com expiração

### Landing Page (index.php)
- **Hero Section**: Apresentação impactante com call-to-action
- **Seção de Matérias**: Cards interativos com progresso visual
- **Planos de Estudo**: Comparação de planos com preços
- **Recursos**: Apresentação das funcionalidades da plataforma
- **Depoimentos**: Feedback de estudantes aprovados
- **Contato**: Formulário funcional para contato

### Dashboards Especializados

#### Dashboard do Administrador
- **Gestão de Usuários**: Controle total de contas
- **Analytics Avançado**: Métricas da plataforma
- **Configurações do Sistema**: Controles administrativos
- **Relatórios**: Dados detalhados de uso

#### Dashboard do Professor
- **Gestão de Cursos**: Criar e editar conteúdo
- **Acompanhamento de Alunos**: Progresso individualizado
- **Materiais Didáticos**: Upload e organização
- **Avaliações**: Criação de exercícios e simulados

#### Dashboard do Moderador
- **Moderação de Conteúdo**: Aprovação/rejeição
- **Gestão de Denúncias**: Resolução de problemas
- **Controle de Comentários**: Moderação de interações
- **Relatórios de Atividade**: Logs de moderação

#### Dashboard do Estudante
- **Painel personalizado** com progresso visual
- **Estatísticas** de desempenho em tempo real
- **Tarefas e cronograma** adaptativo
- **Navegação lateral** com componentes modulares
- **Tarefas e cronograma** adaptativo
- **Navegação lateral** com componentes modulares

## Paleta de Cores

O sistema utiliza uma paleta de cores moderna e acessível:

### Cores Principais
- **Primary (#5A67D8)**: Azul/roxo principal para elementos interativos
- **Secondary (#F6AD55)**: Laranja para elementos secundários e destaques
- **Highlight (#FCD34D)**: Amarelo para realces e notificações importantes

### Cores de Estado
- **Success (#48BB78)**: Verde para confirmações e sucessos
- **Error (#F56565)**: Vermelho para erros e alertas
- **Info (#4299E1)**: Azul para informações neutras

### Cores de Texto
- **Text Primary (#2D3748)**: Cinza escuro para texto principal
- **Text Secondary (#4A5568)**: Cinza médio para texto secundário

### Cores de Fundo
- **BG Light (#F7FAFC)**: Fundo claro
- **BG Dark (#1A202C)**: Fundo escuro para modo noturno
- **Neutral (#E2E8F0)**: Cinza neutro para elementos auxiliares

## 🔧 Organização do Código

### Separação de Responsabilidades

**HTML**: Estrutura semântica pura, sem código inline
- Tags semânticas (`<section>`, `<article>`, `<nav>`)
- Atributos data-* para interações JavaScript
- Acessibilidade com ARIA labels quando necessário

**CSS**: Estilos organizados e modulares
- `css/index-styles.css`: Estilos específicos da landing page
- `css/styles.css`: Estilos globais compartilhados
- Variáveis CSS para cores e medidas
- Animações e transições otimizadas

**JavaScript**: Código modular e reutilizável
- `js/index-scripts.js`: Scripts específicos da landing page
- `js/main.js`: Funcionalidades principais do dashboard
- Funções bem documentadas e organizadas
- Event listeners centralizados

## Arquivos e Responsabilidades

### CSS
- **styles.css**: Contém todos os estilos personalizados, animações e configurações visuais do dashboard
- **index-styles.css**: Estilos específicos da landing page com animações e layout responsivo

### JavaScript

#### index-scripts.js (Landing Page)
- Navegação suave entre seções
- Menu mobile responsivo
- Animações de entrada com Intersection Observer
- Validação e envio de formulário de contato
- Efeitos visuais e interações da landing page

#### main.js (Dashboard)
- Classe principal `LuminaAcademy`
- Gerenciamento de menu mobile
- Animações de elementos
- Header fixo com sombra
- Funcionalidade de checkboxes
- Configuração de barras de progresso

#### sidebar-components.js
- Classe `SidebarComponents` para geração da sidebar
- Componentes reutilizáveis:
  - Logo da aplicação
  - Perfil do usuário
  - Items de navegação
  - Menu completo

#### data.js
- Objeto `AppData` com dados mockados
- Classe `DataHelpers` com funções para manipular dados
- Dados incluem: usuário, estatísticas, tarefas, matérias, simulados, eventos

#### utils.js
- Classe `Utils` com funções utilitárias
- Classe `NotificationSystem` para notificações
- Funcionalidades incluem:
  - Formatação de datas e números
  - Validações (email, CPF)
  - Manipulação de strings
  - Sistema de notificações

#### tailwind-config.js
- Configuração personalizada do Tailwind CSS
- Cores customizadas
- Animações personalizadas

## 🚀 Como Executar

### Requisitos
- Servidor web local (Apache, Nginx, ou similar)
- PHP (opcional, mas recomendado para funcionalidade completa)

### Opção 1: XAMPP (Recomendado)
1. **Instale o XAMPP** se ainda não tiver
2. **Copie o projeto** para `C:\xampp\htdocs\Lumina_Academy`
3. **Inicie o Apache** no painel do XAMPP
4. **Acesse** `http://localhost/Lumina_Academy` no navegador

### Opção 2: Servidor Simples
1. **Clone ou baixe o projeto**
2. **Use um servidor local**:

```bash
# Python
python -m http.server 8000

# Node.js (http-server)
npx http-server

# VS Code Live Server Extension
# Clique com botão direito no index.php > "Open with Live Server"
```

3. **Acesse** o projeto no navegador

### Testando o Sistema de Login
1. Vá para `cliente/login.php`
2. Use as credenciais de teste:
   - **Admin**: admin@lumina.com / admin123
   - **Professor**: teacher@lumina.com / teacher123
   - **Moderador**: moderator@lumina.com / moderator123
   - **Estudante**: student@lumina.com / student123
   - **Demo**: demo@lumina.com / demo123

## 🎯 Melhorias Implementadas

### Manutenibilidade
- ✅ **Separação de linguagens**: HTML, CSS e JS em arquivos distintos
- ✅ **Código organizado**: Funções bem estruturadas e documentadas
- ✅ **Reutilização**: Componentes e utilitários modulares
- ✅ **Nomenclatura**: Nomes descritivos para variáveis e funções

### Performance
- ✅ **Lazy Loading**: Animações com Intersection Observer
- ✅ **Debounce**: Otimização de eventos de scroll
- ✅ **CSS otimizado**: Transições eficientes
- ✅ **JavaScript modular**: Carregamento organizado

### Experiência do Usuário
- ✅ **Feedback visual**: Estados de loading e sucesso
- ✅ **Validação de formulário**: Verificação em tempo real
- ✅ **Navegação fluida**: Scroll suave entre seções
- ✅ **Responsividade**: Adaptação para todos os dispositivos

## Como Usar

### Adicionando uma Nova Página

1. Crie o arquivo HTML
2. Inclua os arquivos CSS e JS necessários:
```html
<link rel="stylesheet" href="css/styles.css">
<script src="js/utils.js"></script>
<script src="js/data.js"></script>
<script src="js/sidebar-components.js"></script>
<script src="js/main.js"></script>
```

### Criando Componentes Reutilizáveis

Use as classes helper para criar componentes:

```javascript
// Criar card de matéria
const subjectCard = ComponentHelpers.createSubjectCard({
    name: "Física",
    lessons: 25,
    progress: 60,
    tags: ["Mecânica", "Óptica"],
    icon: "..."
});

// Criar item de tarefa
const taskItem = ComponentHelpers.createTaskItem({
    id: 1,
    title: "Estudar Física",
    description: "Capítulo 5",
    priority: "alta",
    completed: false
});
```

### Manipulando Dados

```javascript
// Obter tarefas pendentes
const pendingTasks = DataHelpers.getTasksByStatus(false);

// Atualizar progresso de matéria
DataHelpers.updateSubjectProgress(1, 85);

// Adicionar nova tarefa
DataHelpers.addTask({
    title: "Nova tarefa",
    description: "Descrição",
    priority: "média",
    subject: "Matemática"
});
```

### Usando Utilitários

```javascript
// Formatar data
const formattedDate = Utils.formatDate(new Date());

// Mostrar notificação
NotificationSystem.show("Tarefa concluída!", "success");

// Calcular tempo restante
const timeLeft = Utils.getTimeRemaining("2025-12-31");
```

## 🌟 Funcionalidades Principais

### Para Estudantes
- 📊 **Dashboard personalizado** com progresso visual
- 📚 **Banco de questões** de vestibulares anteriores
- ⏰ **Cronograma adaptativo** baseado em objetivos
- 📝 **Simulados realistas** com correção automática
- 📈 **Análise de desempenho** com relatórios detalhados

### Para Desenvolvedores
- 🔧 **Código limpo** e bem documentado
- 📱 **Design responsivo** com mobile-first
- ⚡ **Performance otimizada** com lazy loading
- 🎨 **Sistema de design** consistente
- 🔒 **Validação robusta** de formulários

## 📱 Compatibilidade

- ✅ Chrome 60+
- ✅ Firefox 60+
- ✅ Safari 12+
- ✅ Edge 79+
- ✅ Dispositivos móveis (iOS/Android)

## 🤝 Contribuição

Para contribuir com o projeto:

1. **Fork** o repositório
2. **Crie uma branch** para sua feature
3. **Commit** suas mudanças
4. **Push** para a branch
5. **Abra um Pull Request**

## 📞 Contato

Para dúvidas ou sugestões sobre o projeto:

- **Email**: contato@luminaacademy.com.br
- **WhatsApp**: (11) 99999-8888
- **Website**: [Lumina Academy](https://luminaacademy.com.br)

---

Desenvolvido com ❤️ para estudantes brasileiros | © 2025 Lumina Academy

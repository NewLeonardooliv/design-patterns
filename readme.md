# Design Patterns

Repositório de estudos sobre design patterns. Aqui você encontrará implementações práticas de diversos design patterns, bem como exemplos que ilustram como eles podem ser aplicados no desenvolvimento de software.

## Design Patterns Abordados

### Strategy Pattern

É um padrão de design de software que permite que você defina uma família de algoritmos, coloque cada um deles em uma classe separada e torne-os intercambiáveis. Isso significa que você pode escolher o algoritmo que deseja usar em tempo de execução, com base nas necessidades específicas do seu programa.

### State Pattern

O padrão State permite que um objeto altere seu comportamento quando seu estado interno muda. Cada estado é representado por uma classe separada, tornando mais fácil adicionar novos estados ou modificar o comportamento existente.

### Chain of Responsibility Pattern

É um padrão de design comportamental que visa criar uma cadeia de objetos (ou "manipuladores") para processar uma solicitação. Cada objeto na cadeia tem a capacidade de processar a solicitação ou passá-la para o próximo objeto na cadeia. A ideia central é que você pode enviar uma solicitação através da cadeia sem saber qual objeto específico a tratará e permitindo que vários objetos possam processar a solicitação de forma independente.

### Template Method Pattern

É um padrão de design comportamental que define a estrutura de um algoritmo, permitindo que partes específicas desse algoritmo sejam implementadas por subclasses. Ele fornece um esqueleto ou molde para um algoritmo, enquanto permite que as etapas individuais desse algoritmo sejam personalizadas nas subclasses.

### Liskov Substitution Principle

É um dos cinco princípios do SOLID, um conjunto de diretrizes de design de software que promovem a criação de código flexível, extensível e de fácil manutenção. O princípio afirma que as subclasses devem ser substituíveis por suas classes base (superclasses) sem afetar a integridade do programa. Em termos mais simples, isso significa que se você estiver usando uma instância de uma classe derivada (subclasse), ela deve se comportar de maneira compatível com a classe base (superclasse) sem causar problemas ou surpresas.

### Command and Command Handler

O padrão Command é um padrão de design comportamental que visa encapsular uma solicitação como um objeto, permitindo que você parametrize clientes com operações, enfileire solicitações, registre solicitações e forneça suporte para operações desfazer.
O padrão Command Handler, por outro lado, é uma extensão ou variação do padrão Command. Em vez de tratar com comandos individuais, o Command Handler lida com a execução e o gerenciamento de uma série de comandos relacionados.
Os Command Handlers podem ser úteis quando você tem várias operações para serem executadas em conjunto ou quando deseja implementar lógica adicional de controle em torno da execução dos comandos.

### Observer Pattern

É um padrão de design comportamental que permite que um objeto, chamado de "observador," seja notificado automaticamente quando o estado de outro objeto, chamado de "sujeito" ou "observado," muda. Em outras palavras, ele estabelece uma relação de dependência um-para-muitos, onde vários observadores estão interessados nas mudanças de um objeto.

Explore o código-fonte, para mais exemplos reais.

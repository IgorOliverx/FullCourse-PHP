# API REST COM LARAVEL


### Criando uma api rest com padrões restfull com laravel 10x;



### Porquê criar uma API?

Acrônimo para Application Program Interface, a API é uma ponte de conexão entre servidores, pense na analogia básica do restaurante. Atualmente a maneira mais difundida de se criar uma API é da maneira REST, com protocolos e verbos http, mas, que posteriormente será introduzido e substituído por GraphQL, uma forma de api com outros padrões para projetos WEB baseado em microserviços;




### ROTAS

 - Definindo rotas e sessões

Na pasta de rotas podemos definir uma série de informações a respeito do site como rotas em api/web

 - API: arquivo onde vc define os endpoints de sua api
Ele é controlado no middleware(middleware é a parte que conversa diretamente com o kernel e executa funções antes dos controllers) dentro de kernel e ignora token csrf e cookies. Aqui vamos trabalhar bastante

 -WEB: arquivo onde fazemos o roteamento das páginas do site, mas em uma aplicação de alto nível pouco usamos para rotear, já que o front-end terá este papel
 

### CONTROLLER

#### Lidando com request e response

 - O controller será responsável por fazer o 'meio de campo', recebendo REQUEST do servidor front-end, e devolvendo RESPONSE com as devidas manipulações, indo desde uma consulta ao BD, um retorno de dado, uma consulta na web e afins.

Com uma request podemos obter varios parametros da requisição, por exemplo(URI, Parametroes da URI, Inputs de formulários e afins)
Com a response, devolvemos a manipulação correta daquilo que foi solicitado na request, podendo ser literalmente qualquer coisa. Qualquer coisa. Isso mesmo, QUALQUER COISA.(status http e respostas personalizadas!!!!)
# REPOSITÓRIO PHP 

Este é meu repositório pessoal sobre meus estudos de PHP. Neste repositório, não contemplarei projetos feitos em larga escala e completos.

 # CONCEITOS IMPORTANTES

## API
Acrônimo para Application Programming Interface(Interface de Programação de Aplicações) é basicamente um conjunto de rotinas 
e padrões estabelecidos por uma aplicação, para que outras aplicações possam utilizar as funcionalidades desta aplicação.

A Api realiza a comunicação entre serviços.
EX: Em um restaurante, podemos contemplar 3 etapas.

(Client)Cliente:O cliente tem uma aparato visual e realiza um pedido. O pedido é passado diretamente ao garçom;
(API)Garçom: O Garçom recebe o pedido, anotas as informações que nele são solicitadas e os leva até a cozinha;
(Server)Cozinha:A cozinha processa o pedido e o faz conforme instruções.
A cozinha então, depois de processar o pedido, envia novamente para o garçom que fica responsável por entregar o pedido concluído para o cliente

- Responsável por estabelecer comunicação entre diferentes serviços.
- Meio de campo entre as tecnologias.
- Intermediador para troca de informações


## REST
  - Um acrônimo para Representational State Transfer (Transferência de Estado Representativo).
Sera feita a transferência de dados de uma maneira simbólica, figurativa, representativa, de maneira didática

A transferência de dados, geralmente, usando o protocolo HTTP.

O Rest, delimita algumas obrigações (padrões REST) nessas transferências de dados.
Resources seria então, uma entidade, um objeto


## RESTFUL (6 NECESSIDADES - constraints - PARA SER RESTFUL )
Ser RESTful é aplicar todos os padrões REST

 - _Client-server_: Separação do cliente e do armazenamento de dados (servidor), dessa forma, poderemos ter uma portabilidade
do nosso sistema, usando o React para WEB e o React Native para o smartphone, por exemplo

 - _Stateless_: Cada requisição que o cliente faz para o servidor, deverá conter todas as informações necessárias para o 
servidor entender e responder (RESPONSE) a requisição (REQUEST). Exemplo: A sessão do usuário deverá ser enviada em todas as requisições,
para saber se aquele usuário está autenticado e apto a usar os serviços, e o servidor não pode lembrar que o cliente foi autenticado
na requisição anterior. Temos por padrões usar TOKENS

 - _Cacheable_: As respostas para uma requisição, deverão ser explicitas ao dizer se aquela requisição, pode ou não ser cacheada
pelo cliente.

 - _Layered System_: O Cliente acessa a um endpoint, sem precisar saber da complexidade, de quais passos estão sendo necessários 
para o servidor responder a requisição, ou quais outras camadas o servidor estará lidando, para que a requisição seja respondida.

 - _Code on demand (optional)_: Dá a posibilidade da nossa aplicação pegar códigos, como o javascript, por exemplo, executar no cliente,
Executar o servidor usando o processamento da GPU do cliente por exemplo. NodeJs
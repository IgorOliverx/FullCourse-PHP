## PRIMEIRO SIMULADO OFICIAL PARA ESTUDOS.


Este foi um simulado que a primeira vista foi muito complexo, mas com tempo e dedicação as coisas foram fluindo.

Passo a passo:

Analisando a documentação do simulado, eles ofertam a tabela do banco de dados criada e todas as informações em arquivo json, sendo assim parti criar a tabela
no banco de dados com o que eles ofereceram, e, após, usando as seeders do laravel, alimentei o banco de dados decodificando o arquivo .json
seguindo uma estrutura de ordem de chaves primárias eu usei o facade no final para inserir no banco de dados.
Conseguinte fiz os model e os controllers das entidades requeridas. Fiz com que ao digitar a rota designada, obtivesse o retorno em formato json
Após fazer os modelos e controladores, enderecei rotas no enviando parametros(usei de exemplo o curso de mvc)


 
    Problemas que preciso resolver:
-Meu metodo POST nao ta funcionando bem.
-Preciso pensar como vou criar dinamicamente a pagina de criar computadores/montar maquinas
-preciso ver como vou passar um parametro na url e retornar a imagem do que foi pesquisado

# Curso de Laravel -> Criando uma API REST (esse curso literalmente é uma parte do simulado. Preste atenção)

- utilizando migrations
CONVENÇÃO DE CRIAÇÃO DE MIGRATIONS:
create_NOMETABELA_table

- Utilizando mysql

Depois de criar o esquema de tabela com migrations precisamos mapear os models da aplicação
MODELS:
 - Aluno
 - Turma
MAPEANDO O MODELO:
 - Criando uma função de retorno de todos os dados e o tipo de relação

Criando os controladores
CONTROLLERS:
 - AlunoController
 - TurmaController

- Uma API REST pode ter mais de uma ação usando o mesmo endereço. Nestes casos, usamos os métodos HTTP para identificar qual será usada.

# ROTAS
 - API: endpoint das api's -> As rotas declaradas neste arquivo tem por padrão um /api/rotaquevcquiser no endereço
 - CHANNELS: registramos os eventBroadingCasting
 - CONSOLE: registramos os comandos que queremos criar para o artisan
 - WEB: rotas do site

# POR QUE DOIS ARQUIVOS (WEB E API)?
 - Ambos funcionam de maneira diferente!
 - Uma aplicação web utiliza cookies/sessões/csrf token
 - Uma aplicação API não utiliza necessariamente isto(cookies e token esquece)
 - VOCÊ PODE VERIFICAR NO ARQUIVO KERNEL.PHP E DENTRO DE MIDDLEWAREGROUPS!

# ENTENDENDO SOBRE O MIDDLEWARE:
 - O middleware executa funções antes dos controladores
 - Você pode executar funções especiais antes de tudo


# CONCEITOS DE RECURSOS(VERBOS HTTP)
 - 


# COMO RETORNAR STATUS CODE/CONTEÚDOS PERSONALIZADOS
    public function index(Response $response) //permite personalizar minha resposta
    {
        //O ‘framework’ ja transforma em formato JSON quando você usa o eloquent, ex:
        // return Aluno::all();

        //Montando a resposta manualmente
       // return $response->setContent('{"name": "elton"}')
                           // ->setStatusCode(200)//passa o status da resposta
                            //->header('Content-Type', 'application/json');//header passa o cabeçalho da requisição

        //Montando uma boa resposta:
        //return $response->setContent(Aluno::all()); //setContent indica o conteudo a ser exibido

        //Montando uma boa resposta com o 'helper'
        return \response(Aluno::all(), 200, []);//codigo elegante

    }

 - Você também pode indicar no header que a resposta esperada é apenas um json (no simulado ele esperava respostas json em casos de erros);
 - Precisamos dai tirar o modo de debug no arquivo .env -> APP_DEBUG = false


# RETORNANDO UM DADO COM DETALHES A PARTIR DE UM PARAMETRO NO ENDPOINT
 
 - Mostrar um dado com detalhes a partir de um parametro no endpoint, normalmente o id 

# Curso de Laravel -> Criando uma API REST

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

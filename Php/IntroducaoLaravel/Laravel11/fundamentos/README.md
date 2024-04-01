## Criando um projeto laravel com a versão 11

 - Como a versão ainda não entrou na latest, para criar um arquivo com essa versão, precisamos passar uma flag de versão, o código ficará assim:
    ``
   composer create-project laravel/laravel NOME_PROJETO --prefer-dist 11``


## Fazendo um sistema de autenticação e login do zero, sem starter kit!


### Criando um modelo
#### O laravel já vem com um model de user padrão, então você pode usá-lo e apenas personalizá-lo de acordo com seu projeto

### Criando os controllers
 - Crie os controllers de Autenticação e cadastro -> Em ambos você só usará dois métodos, de index e store:

### Determine as rotas
 - Determine as rotas tanto de login quanto de cadastro

        Route::get('cadastro', [RegisteredUserController::class, 'index']);
        Route::post('cadastro', [RegisteredUserController::class, 'store']);

### Crie as views
 - Crie uma pasta 'auth' dentro de resources e crie a view de login e cadastro


### Crie o método de cadastrar usuário
#### Lembre-se:
 - Validadar dados passados na request
 - Criar usuário pelo FACADE
 - Salvar usuário
 - Autenticar no sistema ou opcional
 - Retornar a home
 - Posso também retornar um json, status code, isso fica a critério do desenvolvedor

### Crie o Request personalizado de login

Essa é uma forma de personalizar o request para atender apenas especificações na parte do login de seu programa, com ele, posso:
 - Dividir responsabilidades;
 - CENTRALIZAR A LÓGICA DE VALIDAÇÃO(IMPORTANTÍSSIMO)

        php artisan make:request LoginRequest

 - Depois precisamos criar alguns métodos personalizados

### Crie a lógica dos métodos controladores de credenciais e validações, e use o request personalizado(opcional) no método store do controller de autenticação

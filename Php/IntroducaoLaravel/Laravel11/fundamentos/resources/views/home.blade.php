<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Laravel - Fundamentos</title>
</head>
<style>
    body{
        margin: 0;
    }
    header{
        box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
        background: #fff;
        position: fixed;
        width: 100%;
        top: 0;
    }

    header, nav {
        display: flex;
        justify-content: space-between;
        padding: 1rem;

    }
    .lista .lista-1{
        text-decoration: none;
        color: black;
        margin-right: 1rem;
    }
    .container-principal{
        margin-top: 150px;
    }


</style>
<body>

  <x-header></x-header>

<main class="container-principal">
    <p>
        Conteudo principal da pagina
    </p>



    <h1>
        @if(\Illuminate\Support\Facades\Route::has('login'))
            @auth
                <p>voce esta logado</p>
            @endauth
        @endif
    </h1>
</main>

</body>
</html>
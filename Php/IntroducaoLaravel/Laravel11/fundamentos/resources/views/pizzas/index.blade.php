<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cardPizzas.css">
    <title>Document</title>
</head>
<body>
<h1>Retornando as pizzas cadastradas</h1>
<hr>
<button type="submit">Pizzas</button>
<br>
<hr class="divisao_nav">
@foreach($pizzas as $pizza)
    <div class="container-card">
        <p class="titulo_pizza">{{$pizza->nome_pizza}}</p>
       <section class="img-pizza"> <img src="{{asset("/storage/{$pizza->img_pizza}")}}" alt=[imagem] ></section>
        <p class="descricao_pizza">{{$pizza->descricao_pizza}}</p>
        <p class="preco_pizza">{{$pizza->preco_pizza}}</p>
    </div>
@endforeach





- cadastrar a pizza e a imagem seguindo tutorial do video - CONCLUIDO
- estilizar o card da pizza e direcionar a correta agora
- criar uma factory que sempre cadastra um usuário
- tornar esse usuário o único a ser apto a cadastrar uma pizza

</body>
</html>

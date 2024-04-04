<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Cadastro de pizzas</h1>

<form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nome_pizza">Nome da Pizza</label>
    <input type="text" name="nome_pizza" id="nome_pizza" required autofocus>
    <br>
    <label for="descicao_pizza">Descrição da Pizza</label>
    <input type="text" name="descricao_pizza" id="descricao _pizza" required >
    <br>
    <label for="preco_pizza">Preço da Pizza</label>
    <input type="text" name="preco_pizza" id="preco_pizza" required >
    <br>
    <label for="img_pizza">Caminho da imagem - Pizza</label>
    <input type="file" name="img_pizza" id="img_pizza" required >
    <button type="submit">Cadastrar Pizza</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('register')}}" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name">
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password">
        <br>

        <button type="submit">Cadastrar</button>
    </form>

</body>

</html>
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

<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="">Username:</label>
    <input type="text" name="username" id="">
    <br>
    <label for="">Password:</label>
    <input type="text" name="password" id="">

    <input type="submit" value="enviar">
</form>





</body>
</html>

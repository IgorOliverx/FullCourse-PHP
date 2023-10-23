<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //capturando os dados do formulario retroalimentado
    $v1 = $_POST['num1'] ?? 0;
    $v2 = $_POST['num2'] ?? 0; //?? serve para se nao for preenchido ele substitui


    ?>'
<main>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

        <label>Insira o 1° Número</label>
        <input type="number" name="num1" id="num1" value="<?=$v1?>"> //aqui eu tenho uma query string
        <label>Insira o 2° Número</label>
        <input type="number" name="num2" id="num2" value="<?=$v2?>">
        <input type="submit" value="enviar">
    </form>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php
        $soma = $v1+$v2;
        print "A soma entre os valores é igual a:$soma"
        ?>
    </section>





</main>

</body>
</html>
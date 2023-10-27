<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Interação entre formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <pre>
        <?php

        setcookie("dia-da-semana", "sexta", time()+3600);

        session_start();
        $_SESSION['teste'] = 'funcionou';

        echo "<h1> Superglobal GET</h1>";
        var_dump($_GET);


        echo "<h1> Superglobal POST</h1>";
        var_dump($_POST);


        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST);

        echo "<h1>Superglobal COOKIE</h1>";
        var_dump($_COOKIE);


        echo "<h1>Superglobal SESSION</h1>";
        var_dump($_SESSION);

        echo "<h1>Superglobal ENV</h1>";
        var_dump($_ENV);

        echo "<h1>Superglobal SERVER</h1>";
        var_dump($_SERVER);

        echo "<h1>Superglobal GLOBALS</h1>";
        var_dump($GLOBALS);

        ?>
    </pre>
</main>
</body>
</html>

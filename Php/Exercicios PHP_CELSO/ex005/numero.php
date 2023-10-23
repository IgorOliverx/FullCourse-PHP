<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style005.css">
</head>
<body>
<main>
    <h1>Analisador de número Real</h1>
    <?php
    $num = $_POST['num'] ?? 1.111111 ;//poderia usar o metodo request
    echo "<p>Analisando o número <strong>". number_format($num, 4, ",", ".")  . " </strong>informado pelo usuário:</p>";
    $int = (int) $num;
    $fra = $num - $int;

    echo "<ul><li> A parte inteira do número é <strong> " . number_format($int, 0, ',', ".") . "</strong></li>";
    echo "<li> A parte fracionária do número é <strong>" . number_format($fra, 4, ",", ".") . "</strong></li></ul>"



    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>

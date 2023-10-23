<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script Php</title>
    <link rel="stylesheet" href="style001.css">
</head>
<body>
<main>
    <h1>
        Resultado:
    </h1>
    <p>
        <?php
        try{
            //request ou get eu poderia usar
            //uso de superglobais
            $numero = $_REQUEST["num"] ?? 0; // criei uma variavel para armazenar dados do formulario
            $antecessor = $numero -1;
            $sucessor = $numero +1;
        }catch (Exception $e){
            echo "Erro, digite um numero" . $e->getMessage();
        }
        echo "O número escolhido foi: $numero" . PHP_EOL;

        echo "<br>Seu antecessor é: $antecessor" . PHP_EOL;

        echo "<br>Seu sucessor é: $sucessor" . PHP_EOL;

        ?>
    </p>

    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
</main>
</body>
</html>
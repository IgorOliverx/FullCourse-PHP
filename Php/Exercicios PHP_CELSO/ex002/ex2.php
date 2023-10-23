<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex002</title>
    <link rel="stylesheet" href="styke002.css">
</head>
<body>
<main>
    <h1>Sorteador de números </h1>
    <?php
    $min = 0;
    $max =5;//coloquei 5 pra nao ficar tao dificil :)
    $num = mt_rand($min, $max);//função de random
    echo "<p>Gerando um num aleatorio entre $min e $max</p>";
    echo "O valor gerado foi *** $num, tente advinhar";

    $ligar = true;

    while ($ligar){

        try{
        $tentativa = readline();
        }catch (Exception $e){
            echo "Por favor, digite um número" . $e-> getMessage() . PHP_EOL;
        }
        if($tentativa === $num){
            echo" PARABÉNS, VOCÊ ACERTOU!";
        }else{
            echo "Tente novamente";
        }
        break;
    }
    ?>


    <button onclick="javascript:document.location.reload()">Gerar novo Número</button>
</main>
</html>
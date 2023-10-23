<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<main>
    <h1>Conversor de moedas</h1>
<?php

$constanteCotacao = 5.17;

$real = $_GET["din"] ?? 0;

$dolar = $real / $constanteCotacao;

//$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

//echo "Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
?>
<button onclick="javascript:history.go(-1)">Voltar</button>
</main>

</body>
</html>







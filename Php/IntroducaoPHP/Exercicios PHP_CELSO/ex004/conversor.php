<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style003.css">
</head>
<body>

<main>
    <h1>Conversor de moedas</h1>
<?php

$inicio = date("m-d-Y", strtotime("-7days"));
$fim = date("m-d-Y");
$url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);


$cotacao = $dados["value"][0]["cotacaoCompra"];

echo "a cotacao atual é de $cotacao";


$real = $_GET["din"] ?? 0;

$dolar = $real / $cotacao;

//$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);//precisa ativar a bib desta classe nativamente nas configs do php na sua maquina

//echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
?>
<button onclick="javascript:history.go(-1)">Voltar</button>
</main>

</body>
</html>







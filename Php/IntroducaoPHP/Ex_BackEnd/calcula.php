<?php


$distancia = $_POST['distancia'];
$consumo = $_POST['consumo'];


$gasolina = 4.90;
$diesel = 6.50;
$alcool = 3.19;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <section class="secAqui">

            <div class="containerAqui">
                <div class="tittle">Resultado do cálculo do consumo</div>
                <div class="containerResultado">
                    <p style="margin-left: 10px;">O valor total gasto será de:</p>
                    <ul>
                        <?php $contGas = ($distancia/$consumo)*$gasolina; 
                        echo "<li>Gasolina: R$ ". $contGas . "</li>";
                        ?>
                       <?php $contAlcool = ($distancia/$consumo)*$alcool; 
                        echo "<li>Álcool: R$ ". $contAlcool . "</li>";
                        ?>
                       <?php $contDiesel = ($distancia/$consumo)*$diesel; 
                        echo "<li>Diesel: R$ ". $contDiesel . "</li>";
                        ?>
                    </ul>
                </div>

                <button class="btn"onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
            </div>
        </section>


    </main>
</body>
</html>

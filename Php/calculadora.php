<?php
$inicio = true;


while($inicio) {
    echo "Insira um número: ";
    $num1 = readline();

    while (!is_numeric($num1)) {
        echo "Por favor, insira um número: ";
        $num1 = readline();
    }
        echo "Insira outro número: ";
        $num2 = readline();

    while (!is_numeric($num2)) {
        echo "Por favor, insira um número: ";
        $num2 = readline();
    }

        echo "Escolha operação que quer fazer:" . PHP_EOL;
        print "1 - SOMA " . PHP_EOL;
        print "2 - SUBSTRAÇÃO   " . PHP_EOL;
        print "3 - MULTIPLICAÇÃO    " . PHP_EOL;
        print "4 - POTENCIAÇÃO  " . PHP_EOL;
        print "5 - DIVISÃO " . PHP_EOL;
        print "6 - TODAS AS OPERAÇÕES ACIMA  " . PHP_EOL;


    $escolha = readline() . PHP_EOL;
    switch ($escolha) {
        case 1:
            $soma = $num1 + $num2;
            echo "A soma entre estes dois números é: $soma" . PHP_EOL;
            break;
        case 2:
            $subtracao = $num1 - $num2;
            echo "A subtração entre estes dois números é: $subtracao" . PHP_EOL;
            break;
        case 3:
            $multiplicacao = $num1 * $num2;
            echo "A multiplicação entre estes dois números é: $multiplicacao" . PHP_EOL;
            break;
        case 4:
            $potenciacao = $num1 ** $num2;
            echo "A potenciação entre estes dois números é: $potenciacao" . PHP_EOL;
            break;
        case 6:
            $soma = $num1 + $num2;
            echo "A soma entre estes dois números é: $soma" . PHP_EOL;
            $subtracao = $num1 - $num2;
            echo "A subtração entre estes dois números é: $subtracao" . PHP_EOL;
            $multiplicacao = $num1 * $num2;
            echo "A multiplicação entre estes dois números é: $multiplicacao" . PHP_EOL;
            $potenciacao = $num1 ** $num2;
            echo "A potenciação entre estes dois números é: $potenciacao" . PHP_EOL;
            break;
        case 5:
            if($num2 == 0){
                echo "é impossível realizar divisão por ;0" . PHP_EOL;
                echo "Insira novamente o segundo número" . PHP_EOL;
                $num2 = readline();
            }
                $divisao = $num1 / $num2;



            echo "A divisão entre estes dois números é: $divisao" . PHP_EOL;
            break;

        default:
            echo "Opção inválida, escolha outra" . PHP_EOL;
    }

        echo "Deseja realizar outra operação?" . PHP_EOL;
        print "1 - SIM" . PHP_EOL;
        print "2 - NÃO" . PHP_EOL;
        $continuar = readline();

    if ($continuar == 2) {
        echo "Obrigado e até mais!";
        $inicio = false;


    }
}
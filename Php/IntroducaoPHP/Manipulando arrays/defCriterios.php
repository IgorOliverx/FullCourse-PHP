<?php
//array multidimensional => arrays de arrays
$notas = [
   'Igor' => 10,
    'Henrique' =>9,
    'Alfonso' =>2,
    'Andre' => 8,
];
//ordenação do sort => é feito com 3 medidas:
//comparo dois arrays (array dentro de array) => NUMA FUNCTION
//verifico valores if
// PARA FAZER O PRIMEIRO VALOR VIR PRIMEIRO => -1
// PARA FAZER O SEGUNDO VALOR VIR PRIMEIRO => 1
// PARA FAZER COM QUE A ORDEM NÃO IMPORTE => 0

function ordenaNotas(array $nota1, array $nota2): int
{
    //FAZENDO TODO ESTE CODIGO COM UMA LINHA
    return  $nota1['nota'] <=> $nota2['nota']; // FEZ CRESCENTE, MAS CASO QUEIRA DIFERENTE, SO ALTERAR :)
    // if ($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }
    // if ($nota2['nota'] > $nota1['nota']){
    //     return 1;
    // }
    // return 0;
}

//Consigo fazer a ordenação de uma array usando uma function desta forma => usort precisa de dois parametros, o array de ordenação e a function de 'regras'
usort($notas, 'ordenaNotas');
var_dump($notas);

//funcionou:)



//verifica se o valor da chave existe
array_key_exists('chave3', $notas, true);

//realiza a verificação de alguma info dentro de um array pra ver se existe
var_dump(array_key_exists('Igor', $notas));

//isset verifica null dentro de vars
var_dump(isset($notas['Andre']));

//verificar se um valor existe dentro de um array; => ignora as chaves
var_dump(in_array(9, $notas, true));

//busca um valor dentro de um array e retorna sua chave
var_dump(array_search(10, $notas, true));



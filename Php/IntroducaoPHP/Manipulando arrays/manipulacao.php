<?php
$notasBimestre1 = [
   'Igor' => 10,
    'Andre' => 8,
    'Gustavo' => 8,
    'Henrique' => 7,
    'Gabriel' =>3,
    'Roberto' =>7,
    'Marcela' => 3,
];
$notasBimestre2 = [
    'Igor' => 10,
    'Andre' => 8,
    'Gustavo' =>8,
    'Henrique' => 7,
];


//Vai retornar todos os valores do parametro 1 que não estão no parametro 2 => SOMENTE VALORES
var_dump(array_diff($notasBimestre1, $notasBimestre2));


//Agora sim vai retornar as CHAVES
$alunosFaltaram = (array_diff_key($notasBimestre1, $notasBimestre2));
//peguei as chaves dos alunos
var_dump(array_keys($alunosFaltaram));
//peguei os valores
var_dump(array_values($alunosFaltaram));

//Compara as chaves e o valor
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

//combinando arrays => ambos precisam ser do mesmo tamanho
$nomesAlunos = array_keys($alunosFaltaram);
$notasAlunos = array_values($alunosFaltaram);
print_r(array_combine($notasAlunos, $nomesAlunos));
//inverte as chaves com os valores
array_flip();
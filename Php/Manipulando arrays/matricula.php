<?php
$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];
$novosAlunos = [
    'Patricia',
    'Nico',
    'Kildenson',
    'Daiane',
];
//se for array associativo o último se houver a mesma chave, sobrescreve sobre todos os outros
$alunos2022 = array_merge($alunos2021, $novosAlunos);

//incremementa o segundo array ao final do primeiro => ignora as chaves do segundo e nao sobrescreve
$alunos2022m = $alunos2021 + $novosAlunos; // tem um comportamento bem peculiar




$alunos2022d = [...$alunos2021, 'Carlos Vinícius', ...$novosAlunos]; // esse é muito bom ein => fiz um novo array a partir da desconstrução de outros dois

array_push($alunos2022d, 'Alice', 'Bob', 'Charlie'); // função para adicionar elementos no arrray

$alunos2022d[] = 'Luiz'; //Por o array ser dinâmico posso add um elemento no array desta forma => última posição

array_unshift($alunos2022d, 'Grennfoot', 'MariaDB'); // Função para adicionar elementos na primeira posição
array_shift();//remove o primeiro elemento
array_pop(); //remove o segundo elemento
// print_r($alunos2022);

print_r($alunos2022d);
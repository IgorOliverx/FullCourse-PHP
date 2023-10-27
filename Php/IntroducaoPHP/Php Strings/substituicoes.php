<?php

$texto = 'Vai toma no meio do seu nariz'; //quero fazer a substituição por ***


echo str_replace(
    ['nariz', 'meio'],
    '***',
    $texto);

// echo strtr($texto, (array)'nariz', '***'); => trabalha para substituir acentos e etc
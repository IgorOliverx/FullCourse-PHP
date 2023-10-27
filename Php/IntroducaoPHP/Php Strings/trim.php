<?php
$csv = ', Igor Olvieira, 16';

echo trim($csv, '., ') . PHP_EOL; //apara a string por completa dado os parametros
echo ltrim($csv, '., ') . PHP_EOL; // apara a string da esquerda
echo rtrim($csv, '., ') . PHP_EOL; // apara a string da direita
<?php

function geraEmail(string $nome, int $mes): void{
$conteudoEmail = <<<FINAL
        Olá $nome!
        Estamos entrando em contato para 
        informar que sua inscrição foi aceita em
        University Canadá. Você tem $mes meses para estar em 
        Toronto e realizar sua matrícula. Parabéns!
FINAL;





echo $conteudoEmail;
}
geraEmail('Iguito Ferreirita de Oliveirita', 2);



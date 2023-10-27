
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>


<?php
//a superglobal GET pega o 'name' do input, não o seu id.
$nome = $_GET['nome'] ?? "nomeNOMEq";
$sobrenome = $_GET['sobrenome'] ?? "nomeNOMEq";
$email = $_GET['email'] ?? "nome";

if(mb_strlen($nome)>8 && mb_strlen($sobrenome)>8 && mb_strlen($email)<9){
    echo'nome correcto';
    echo "é um prazer conhecê-lo, $nome $sobrenome com o email:$email";
}else{
    echo'nome incorrecto';
}


?>

    <button  onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

</main>
</body>
</html>
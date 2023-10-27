<?php
//vamos criar um header para permitir outro localhost e impedir erro de cross

header('Acess-Control-Allow-Origin: *'); //o certo seria passar a porta

//vamos fazer a conexao de forma simples.
//OBS: NÃO É SEGURA/ESCALAVEL/PERFORMATICA -> EXISTEM ORM'S E ATE O PDO



///vamos criar o banco no mysql workbench
$conec = new mysqli("localhost","root","","api");

if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit();
}
else{
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];


    $sql = "INSERT INTO api_table(nome,celular,email) VALUES('$nome', '$celular', '$email');";

    $res = mysqli_query($conec, $sql);

    if($res){
        echo "Conexao bem sucedida";
    }else{
        echo "insucesso";
    }

    $conec->close();
}


<?php
header('Access-Control-Allow-Origin: *'); //Permite que outros localhosts se comuniquem -> evita erro de cors;

$conn = new mysqli("localhost","root","","react_api");

if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit();
}
else{
    $nome = $_POST['nome'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $sql = "INSERT INTO enquiry(nome,mobile,email)  VALUES('$nome','$mobile','$email');";

    $res = mysqli_query($conn, $sql);

    if($res){
        echo "Successo";
    }else{
        echo "falhou";
    }

    $conn->close();
}
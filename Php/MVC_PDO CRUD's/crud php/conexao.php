<!---->
<?php
//
//
//
//
//// Verificar se foi enviando dados via POST
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
//    $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
//    $email = (isset($_POST["email"]) && $_POST["email"] != null ) ? $_POST["email"] : "" && preg_match('/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/');
//    $celular = (isset($_POST["celular"]) && $_POST["celular"] != null) ? $_POST["celular"] : NULL;
//} else if (!isset($id)) {
//    // Se não se não foi setado nenhum valor para variável $id
//    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
//    $nome = NULL;
//    $email = NULL;
//    $celular = NULL;
//}
//
//try {
//    $conexao = new PDO("mysql:host=127.0.0.1; dbname=crudsimples", "root", "");
//    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $conexao->exec("set names utf8");
//} catch (PDOException $erro) {
//    echo "Erro na conexão:" . $erro->getMessage();
//}
//if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
//    try {
//        //este metodo 'prepare' declarou o sql na forma de um 'objeto' o que o torna manipulavel por alguns metodos
//        $stmt = $conexao->prepare("INSERT INTO contatos (nome, email, celular) VALUES (?, ?, ?)");
//        //metodo de manipualação seguro
//        $stmt->bindParam(1, $nome);
//        $stmt->bindParam(2, $email);
//        $stmt->bindParam(3, $celular);
//
//
//        //se a instrução de preenchimento de cadastro for concluida, recarrega-se a pagina e limpa os formularios
//        if ($stmt->execute()) {
//            if ($stmt->rowCount() > 0) {
//                echo "Dados cadastrados com sucesso!";
//                $id = null;
//                $nome = null;
//                $email = null;
//                $celular = null;
//            } else {
//                echo "Erro ao tentar efetivar cadastro";
//            }
//        } else {
//            throw new PDOException("Erro: Não foi possível executar a declaração sql");
//        }
//    } catch (PDOException $erro) {
//        echo "Erro: " . $erro->getMessage();
//    }
//}
//
//if(isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != ""){
//    try{
//        $stmt = $conexao -> prepare("SELECT * FROM contatos WHERE id = ?");
//        $stmt -> bindParam(1, $id, PDO::PARAM_INT);
//        if($stmt -> execute()){
//            $rs = $stmt -> fetch(PDO::FETCH_OBJ);
//            $id = $rs -> id;
//            $nome = $rs -> nome;
//            $email = $rs -> email;
//            $celular = $rs -> celular;
//        }else {
//            throw new PDOException("Erro --> não foi possível declarar a instrução sql");
//        }
//    }catch(PDOException $erro){
//        echo "ERRO: ". $erro->getMessage();
//    }
//}
//
//if ($id != "") {
//    $stmt = $conexao ->prepare("UPDATE contatos SET nome=?, email=?, celular=? WHERE id = ?");
//    $stmt ->bindParam(4, $id);
//} else {
//    $stmt = $conexao->prepare("INSERT INTO contatos (nome, email, celular) VALUES (?, ?, ?)");
//}
//if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
//    try {
//        $stmt = $conexao->prepare("DELETE FROM contatos WHERE id = ?");
//        $stmt->bindParam(1, $id, PDO::PARAM_INT);
//        if ($stmt->execute()) {
//            echo "Registo foi excluído com êxito";
//            $id = null;
//        } else {
//            throw new PDOException("Erro --> Não foi possível executar a declaração sql");
//        }
//    } catch (PDOException $erro) {
//        echo "Erro: ".$erro->getMessage();
//    }
//}
//
//
//
//
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="pt-br">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Crud simples</title>-->
<!--</head>-->
<!--<body>-->
<!--    <form action="?act=save" method="POST" name="form1">-->
<!--    <h1>Agenda de contatos</h1>-->
<!--    <hr>-->
<!--    <input type="hidden" name="id" id=""--><?php
//    //Preenche o id no campo id com um valor.
//    if(isset($id) && $id != null || $id !=""){
//        echo "value=\"{$id}\"";
//    }
//    ?><!--/>-->
<!--    Nome:-->
<!--    <input type="text" name="nome" --><?php
//    //Preenche o nome no campo nome com um valor.
//    if(isset($nome) && $nome != null || $nome !=""){
//        echo "value=\"{$nome}\"";
//    }?><!--  />-->
<!--    E-mail:-->
<!--    <input type="text" name="email" id="" --><?php
//    //Preenche o email no campo email com um valor.
//    if(isset($email) && $email != null || $email !=""){
//        echo "value=\"{$email}\"";
//
//    }
//    ?><!--  />-->
<!--    Celular:-->
<!--    <input type="text" name="celular" id=""--><?php
//    //Preenche o celular no campo celular com um valor.
//    if(isset($celular) && $celular != null || $celular !=""){
//        echo "value=\"{$celular}\"";
//    }?><!--/>-->
<!--    <input type="submit" value="salvar"/>-->
<!--    <input type="reset" value="novo"/>-->
<!--    <hr>-->
<!--    </form>-->
<!--    <table border="1" width="100%">-->
<!--        <tr>-->
<!--            <th>Nome</th>-->
<!--            <th>E-mail</th>-->
<!--            <th>Celular</th>-->
<!--            <th>Ações</th>-->
<!--        </tr>-->
<!--        --><?php
//        try {
//
//            $stmt = $conexao->prepare("SELECT * FROM contatos");
//
//            if ($stmt->execute()) {
//                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
//                    echo "<tr>";
//                    echo "<td>".$rs->nome."</td><td>".$rs->email."</td><td>".$rs->celular
//                        //indicar na âncora “href” do link os parâmetros “act” e “id” que serão lidos pela mesma página no refresh.
//                        ."</td><td><center><a href=\"?act=upd&id=" . $rs->id . "\">[Alterar]</a>"
//                        ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
//                        ."<a href=\"?act=del&id=" . $rs->id . "\">[Excluir]</a></center></td>";
//                    echo "</tr>";
//                }
//            } else {
//                echo "Erro: Não foi possível recuperar os dados do banco de dados";
//            }
//        } catch (PDOException $erro) {
//            echo "Erro: ".$erro->getMessage();
//        }
//        ?>
<!--    </table>-->
<!---->
<!---->
<!--</body>-->
<!--</html>-->
<!---->

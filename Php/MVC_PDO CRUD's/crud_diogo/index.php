<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <?php if (!empty($_GET['msgErro'])) { ?>
        <div class="alert alert-warning" role="alert">
            <?php echo $_GET['msgErro']; ?>
        </div>
    <?php } ?>
<?php if (!empty($_GET['msgSucesso'])) { ?>
<div class="alert alert-success" role="alert">
<?php echo $_GET['msgSucesso']; ?>
</div>
<?php } ?>
</div>












    <div class="container"></div>
        <h1>Olá, seja bem-vindo(a)!</h1>
    <form action="processa_login.php" method="post">
        <div class="col-4">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="col-4">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div><br />
        <button type="submit" name="enviarDados" class="btn btnprimary">Entrar</button>
        <a href="cad_usuario.html" class="btn btn-warning">Cadastrar-se</a>
    </form>
    </div>


    </form>

</body>
</html>
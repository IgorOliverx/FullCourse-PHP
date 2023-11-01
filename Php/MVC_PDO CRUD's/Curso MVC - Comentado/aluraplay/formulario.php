<?php

$db = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$db");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);//verificacao do filtro para inteiros
    $videoAEditar = [
            'url' => '',
            'title' => '',
        ];
if($id !== false && $id !== null){ //a verificação do nulo é necessário pois o filtro so reconhece os numeros
   $stmt = $pdo -> prepare('SELECT * FROM videos WHERE id = ?;');
   $stmt -> bindValue(1, $id, PDO::PARAM_INT);
   $stmt->execute();
  $videoAEditar = $stmt->fetch(PDO::FETCH_ASSOC);
}




?><?php require_once 'inicio-html.php'; ?>

    <main class="container">

        <form class="container__formulario"
              method="post">
            <h2 class="formulario__titulo">Envie um vídeo!</h2>
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="url">Link embed</label>
                    <input name="url"
                           VALUE="<?= $videoAEditar['url'];?>"
                           class="campo__escrita" required
                        placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url' />
                </div>


                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                    <input name="titulo" value="<?= $videoAEditar['title']; ?>" class="campo__escrita" required placeholder="Neste campo, dê o nome do vídeo"
                        id='titulo' />
                </div>

                <input class="formulario__botao" type="submit" value="Enviar" />
        </form>

    </main>
<?php require_once 'fim-html.php'; ?>
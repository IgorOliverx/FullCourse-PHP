<?php

declare(strict_types=1);

namespace Alura\Mvc\Repository;

use Alura\Mvc\Entity\Video;
use PDO;

class VideoRepository
{
    //construtor recebe uma instancia de pdo para fazer com que toda manipulação envolva o bd
    public function __construct(private PDO $pdo)
    {
    }

    //metodo de adicionar video
    public function add(Video $video): bool
    {
        //instrução sql
        $sql = 'INSERT INTO videos (url, title) VALUES (?, ?)';
        //preparação do statement
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $video->url);//passando parametros de forma segura
        $statement->bindValue(2, $video->title);

        //verificacao para inserir o video como o ultimo id (isso se deve pq o sqlite nao tem o autoincrement)
        $result = $statement->execute();
        $id = $this->pdo->lastInsertId();

        $video->setId(intval($id));

        return $result;
    }

    //função de remover video
    public function remove(int $id): bool
    {
        //instrução sql
        $sql = 'DELETE FROM videos WHERE id = ?';
        //statement da execucao
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);

        return $statement->execute();
    }

    //atualizando video
    public function update(Video $video): bool
    {
        $sql = 'UPDATE videos SET url = :url, title = :title WHERE id = :id;';
        $statement = $this->pdo->prepare($sql);

        $statement->bindValue(':url', $video->url);
        $statement->bindValue(':title', $video->title);
        $statement->bindValue(':id', $video->id, PDO::PARAM_INT);

        return $statement->execute();
    }

    /**
     * @return Video[]
     */

    //retornando todos os videos -> em forma de array associativo
    public function all(): array
    {
        $videoList = $this->pdo
            ->query('SELECT * FROM videos;')
            ->fetchAll(\PDO::FETCH_ASSOC);
        return array_map(
            $this->hydrateVideo(...),
            $videoList
        );
    }

    //buscando um video pelo seu id
    public function find(int $id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM videos WHERE id = ?;');
        $statement->bindValue(1, $id, \PDO::PARAM_INT);
        $statement->execute();

        return $this->hydrateVideo($statement->fetch(\PDO::FETCH_ASSOC));
    }

    //hidratando! Estou transformando cada video upado em um objeto -> muito importante
    private function hydrateVideo(array $videoData): Video
    {
        $video = new Video($videoData['url'], $videoData['title']);
        $video->setId($videoData['id']);

        return $video;
    }
}

<?php

namespace Alura\Mvc\Repository;

use Alura\Mvc\Entity\Video;

class VideoRepository
{
    public function __construct(private \PDO $pdo)
    {

    }

    public function addVideo(Video $video):bool
    {
        //instrução sql de inserção
        $sql = 'INSERT INTO videos (url, title) VALUES (?, ?);';
        //definindo meu statement e orientando referencias
        $stmt = $this->pdo->prepare($sql);
        $stmt ->bindValue(1, $video->url );
        $stmt -> bindValue(2, $video->title );

        //executando minha instrução
        $result = $stmt->execute();
        //garantindo que estamos inserindo em sequência pelo último id
        $id = $this->pdo->lastInsertId();
        $video->setId(intval($id));

        return $result;
    }

    public function removeVideo(int $id):bool
    {
        $sql = 'DELETE FROM videos WHERE id = ?;';
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(1, $id);

        return $stmt ->execute();
    }

    public function updateVideo(Video $video):bool
    {
        $sql = 'UPDATE videos SET url = :url, title = :title WHERE id = :id;'; //prepara uma instrução de update
        $stmt = $this -> pdo->prepare($sql); // prepara o statement
        $stmt->bindValue(':url', $video->url); //parametros -> proteção contra sql injection
        $stmt->bindValue(':title', $video->title);
        $stmt->bindValue(':id', $video->id, \PDO::PARAM_INT);

        return $stmt->execute();
    }

    /**
     * @return Video[]
     */
    public function serchAll():array
    {
        $videoList = $this->pdo
            ->query('SELECT * FROM videos;')
            ->fetchAll(\PDO::FETCH_ASSOC);

        return array_map(
            function(array $videoData){
                $video = new Video($videoData['url'], $videoData['title']);
                $video->setId($videoData['id']);

                return$video;
            },
            $videoList
        );
    }
}
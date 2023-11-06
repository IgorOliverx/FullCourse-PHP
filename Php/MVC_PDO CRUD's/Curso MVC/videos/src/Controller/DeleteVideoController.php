<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;


//controller de deletar video
class DeleteVideoController implements Controller
{
    //construtor recebe uma instancia do repositorio de videos -> assim posso acessar os metodos de manipulação do repositorio
    public function __construct(private VideoRepository $videoRepository)
    {
    }

    public function processaRequisicao(): void
    {
        //validação e verificação do id
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($id === null || $id === false) {
            header('Location: /?sucesso=0');
            return;
        }
        //se o id for invalido, retorna a index

        $success = $this->videoRepository->remove($id);
        if ($success === false) {
            header('Location: /?sucesso=0');
        } else {
            header('Location: /?sucesso=1');
        }
        //se a url for valida -> executa o metodo de remover e envia a index

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlunoController extends Controller
{
    /**
     * Retorna os valores ou lista recursos. CRUD -> R=read
     */
    public function index(Response $response) //Instanciar um Objeto da classe Response permite personalizar/tratar minha resposta
    {
        //O ‘framework’ ja transforma em formato JSON quando você usa o eloquent, ex:
        // return Aluno::all();

        //Montando a resposta manualmente
       // return $response->setContent('{"name": "elton"}')
                           // ->setStatusCode(200)//passa o status da resposta
                            //->header('Content-Type', 'application/json');//header passa o cabeçalho da requisição

        //Montando uma boa resposta:
        return $response->setContent(Aluno::all()); //setContent indica o conteudo a ser exibido

        //Montando uma boa resposta com o 'helper' response()
        //return \response(Aluno::all(), 200, []);//codigo elegante

        //Outro maneira
        //return response()->json(Aluno::all());

    }

    /**
     * Cria um recurso. CRUD -> C=create
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Mostra um recurso a partir de um ID ou uma instância de objeto
     */
    public function show(Aluno $aluno)
    {
       //Buscando com o modelo e o Eloquent a partir de uma instância de objeto(retorna todos)]
        //return Aluno::find($aluno);

        //Retornando apenas o Aluno especificado
        return $aluno;


        //retornar uma mensagem de erro em json caso nao exista o id procurado
         // return Aluno::where('legs', '>', 3)->firstOr(function () {
         //     \response(['message' => 'fail'], 404);
          // });


        //Lançar uma excessão caso nao encontrar -> modo debug
        //return Aluno::findOrFail($id ou $aluno)


    }

    /**
     * Atualiza um recurso. CRUD -> U=update
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Deleta um recurso a partir de um ID. CRUD -> D=delete
     */
    public function destroy(string $id)
    {
        Aluno::destroy($id);
    }
}

<?php
//A classe é composta pelos métodos de CRUD:
//Save – Insere um novo registro ou atualiza um registro – Atua tanto como CREATE como UPDATE do CRUD.
//Destroy – Exclui um registro da tabela. Atua como o DELETE do CRUD.
//Find – Localiza um registro conforme o id informado. Atua como READ do CRUD.
//All – Listar todos registros da tabela. Também atua como READ do CRUD.
//Count – É um método bonus para firula! Mostra a quantidade de registros na tabela. Acaba tendo um certo princípio de funcionalidade READ do CRUD.

//Baseado no modelo active record

class Contato
{
    private $atributos;

    public function _construct()
    {

    }
    public function _set(string $atributo, $valor)
    {
        $this ->atributos[$atributo] = $valor;
        return $this;
    }
    public function _get(string $atributo)
    {
        return $this ->atributos[$atributo];
    }
    public function _isset($atributo)
    {
        return isset($this -> atributos[$atributo]);
    }

    //SALVAR O CONTATO

    public function save()
    {
        $colunas = $this -> preparar($this->atributos);
        if(!isset($this->id)){
            $query = "INSERT INTO contatos (".
                implode(', ', array_keys($colunas)).
                ") VALUES (".
                implode(', ', array_values($colunas)).");";
        }else{
            foreach ($colunas as $key => $value){
                if($key !== 'id'){
                    $definir[] = "{$key}={$value}";
                }
            }
            $query = "UPDATE contatos set ".implode(', ', $definir). "WHERE id='{$this->id}';";
        }
        if($conexao = Conexao::getInstance()){
            $stmt = $conexao->prepare($query);
            if($stmt->execute()){
                return $stmt->rowCount();
            }
        }
        return false;
    }

    //Tornar valores aceitos para sintaxe SQL

    private function escapar($dados)
    {
        if(is_string($dados) & !empty($dados)){
            return "'".addslashes($dados)."'";
        }elseif (is_bool($dados)) {
            return $dados ? 'TRUE' : 'FALSE';
        }elseif($dados !== '') {
            return $dados;
        }else {}

    }


















}
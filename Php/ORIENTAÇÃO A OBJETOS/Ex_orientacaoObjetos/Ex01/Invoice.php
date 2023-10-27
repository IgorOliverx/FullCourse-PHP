<?php

namespace Ex_orientacaoObjetos\Ex01;


//Essa classe deve ser utilizada pore uma loja, para representar a fatura de um item vendido
//Atributos: numero do item faturado/descricaoitem/quantidadeitem/precoitem
class Invoice
{
    public int $numeroItemFaturado;
    public string $descricaoItem;
    public int $quantidadeItem;
    public float $precoItem;

    /**
     * @param int $numeroItemFaturado
     * @param string $descricaoItem
     * @param int $quantidadeItem
     * @param float $precoItem
     */
    public function __construct(int $numeroItemFaturado, string $descricaoItem = "VAZIO", int $quantidadeItem, float $precoItem)
    {
        $this->numeroItemFaturado = $numeroItemFaturado;
        $this->descricaoItem = $descricaoItem;
        $this->quantidadeItem = $quantidadeItem;
        $this->precoItem = $precoItem;
        $this -> getInvoiceAmount($precoItem, $quantidadeItem);
    }

    public function getInvoiceAmount($quantidadeItem, $precoItem){
       $metodo =  $this->getQuantidadeItem()*$this->getPrecoItem();
       echo $metodo;
    }


    public function getNumeroItemFaturado(): int
    {
        return $this->numeroItemFaturado;
    }

    public function setNumeroItemFaturado(int $numeroItemFaturado): void
    {
        $this->numeroItemFaturado = $numeroItemFaturado;
    }

    public function getDescricaoItem(): string
    {
        return $this->descricaoItem;
    }

    public function setDescricaoItem(string $descricaoItem): void
    {
        $this->descricaoItem = $descricaoItem;
    }

    public function getQuantidadeItem(): int
    {
        return $this->quantidadeItem;
    }

    public function setQuantidadeItem(int $quantidadeItem): void
    {
        $this->quantidadeItem = $quantidadeItem;
    }

    public function getPrecoItem(): float
    {
        return $this->precoItem;
    }

    public function setPrecoItem(float $precoItem): void
    {
        $this->precoItem = $precoItem < 0 ?? 0 ;
    }

    public function consultar(){

    }





















}







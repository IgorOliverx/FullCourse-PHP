<?php

namespace Ex_orientacaoObjetos;

class Empregado
{
    private string $primeiroNome;
    private string $sobrenome;
    private float $salarioMensal;

    /**
     * @param string $primeiroNome
     * @param string $sobrenome
     * @param float $salarioMensal
     */
    public function __construct(string $primeiroNome, string $sobrenome, float $salarioMensal)
    {
        $this->primeiroNome = $primeiroNome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    public function aumentarSalario($salarioMensal){
        $salarioAnual = $this->salarioMensal*12;
        echo "Seu salário anual é de: R$ $salarioAnual";
    }

    public function getPrimeiroNome(): string
    {
        return $this->primeiroNome;
    }

    public function setPrimeiroNome(string $primeiroNome): void
    {
        $this->primeiroNome = $primeiroNome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): void
    {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal(): float
    {
        return $this->salarioMensal;
    }

    public function setSalarioMensal(float $salarioMensal): void
    {
        $this->salarioMensal = $salarioMensal < 0.0 ?? 0.0;
    }

}

$empregado1 = new Empregado('igor', "oliveira", 10000);
var_dump($empregado1);
var_dump($empregado1 ->aumentarSalario(10000));
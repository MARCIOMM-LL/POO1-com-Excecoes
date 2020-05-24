<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        #A propriedade parent inicia o construtor da classe Pessoa()
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function setNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0)
        {
            echo 'Aumento deve ser positivo.';
            #Earlier Return
            return;
        }

        #Passagem de valores por referência
        $this->salario += $valorAumento;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    #Aqui está sendo implementado o pilar de poo polimorfismo, sobrescrita de métodos
    abstract public function calculaBonificacao(): float;

}

<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Conta\ValidarNome;

abstract class Pessoa
{
    #Acessando uma trait
    use AcessorPropriedades;

    protected $nome;
    private $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    #A palavra final impede que o método validaNome seja sobrescrito em outras classes
    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) 
        {
            throw new ValidarNome("O nome deve possuir no mínimo 5 caracteres.");
        }
    }
}

<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    #Sobrescrevendo o método calculaBonificacao()/polimorfismo
    public function calculaBonificacao(): float
    {
        return $this->getSalario();
    }

    #Aqui temos uma interface() que serve para fazer a adição de métodos etc
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}
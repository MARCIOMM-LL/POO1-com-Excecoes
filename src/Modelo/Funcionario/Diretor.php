<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    #A sobrescrita de métodos é exatamente o que estamos
    #vendo abaixo, um método que vem da classe Funcionario
    #porém, está sendo sobre escrito com um novo comportamento
    #na classe Diretor. Com isso evitamos a escrita de muitos if's
    #na classe Funcionario que pode gerar bug's
    #A esses métodos ou atributos é dado o nome de traits
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    #Diferentes comportamentos para diversos objetos, polimorfismo
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
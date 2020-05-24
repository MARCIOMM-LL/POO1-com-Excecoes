<?php

#Descreve o caminho da classe Titular
namespace Alura\Banco\Modelo\Conta;

#Importação de classes 
use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        #Iniciando o __construct da classe base/pai que no caso é a classe Pessoa
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    #Método da interface
    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'dhss';
    }
}

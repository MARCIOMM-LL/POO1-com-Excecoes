<?php

namespace Alura\Banco\Modelo\Conta;

class ValidarNome extends \Exception
{
    public function __construct(string $mensagem) 
    {
        parent::__construct($mensagem, null, null);
    }
}
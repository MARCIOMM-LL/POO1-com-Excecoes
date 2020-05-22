<?php

require_once 'autoload.php';

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;

$autenticador = new Autenticador();

$umDiretor = new Gerente('João Silva', 
             new Cpf('376.983.387-98'), 1000);

$autenticador->tentaLogin($umDiretor, '4321');  

var_dump($autenticador);

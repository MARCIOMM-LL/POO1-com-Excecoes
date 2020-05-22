<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Modelo\Cpf;

use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Gerente('Márcio', 
                 new Cpf('345.858.938-09'), 1000);  

$umaFuncionario = new Desenvolvedor('Lilian', 
                  new Cpf('345.858.938-09'), 1000);        
          
$umaFuncionario->sobeDeNivel();

$editorVideo = new EditorVideo('Márcio', 
               new Cpf('345.858.938-09'), 1000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionario);
$controlador->adicionaBonificacaoDe($editorVideo);

echo $controlador->getTotal();
                 
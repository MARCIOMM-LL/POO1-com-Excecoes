<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('sp', 'jardim', 'rua', '78');
$outroEndereco = new Endereco('sp', 'jardim nf', 'rua kd', '43');

echo $umEndereco->bairro;
echo $umEndereco->rua;
exit();

echo ("$umEndereco <br>");
echo ("$outroEndereco <br>");

<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular, };
use Alura\Banco\Modelo\{Cpf, Endereco};

$conta = new ContaCorrente(
         new Titular(
         new Cpf('123.456.789-10'), 'Márcio',
         new Endereco('SP', 'Jardim Kemel', 'Rua Gomes', '82')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->getSaldo();

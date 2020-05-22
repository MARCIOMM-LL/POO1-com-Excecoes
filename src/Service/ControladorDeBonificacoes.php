<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

#Classe de serviços/complemento de funcionalidades que
#não pertencem ao modelo de domínio
class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotal(): float
    {
        return $this->totalBonificacoes;
    }

}

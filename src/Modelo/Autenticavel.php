<?php

namespace Alura\Banco\Modelo;

#O método da interface precisa obrigatoriamente
#ser implementado na classe que irá estendê-lo.
interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}

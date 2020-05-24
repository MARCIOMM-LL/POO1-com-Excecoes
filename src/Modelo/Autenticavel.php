<?php

namespace Alura\Banco\Modelo;

#O método da interface precisa obrigatoriamente ser implementado na classe 
#que irá estendê-lo, ele funciona como uma assinatura
#A Interface permite definir um “contrato” na qual as classes que vão
#implementá-las terão que ter os métodos definidos pela interface.
#Na verdade, interfaces são parecidas com traits no que toca a adição 
#de métodos em outras classes, porém com regras diferentes
interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}

<?php

class MinhaExcecao extends \DomainException
{ 
    public function exibeMarcio()
    {
        echo "Márcio";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeMarcio();
}

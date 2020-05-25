<?php

function funcao1()
{
    echo "Entrei na função 1 <br />";

    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) {
        echo "$erroOuExcecao->getMessage() <br />";
        echo "$erroOuExcecao->getLine() <br />";
        echo "$erroOuExcecao->getTraceAsString() <br />";
    }

    echo "Saindo da função 1 <br />";
}

function funcao2()
{
    echo "Entrei na função 2 <br />";

    for ($i = 1; $i <= 5; $i++) {
        echo "$i <br />";
    }
    echo "Saindo da função 2 <br />";
}

echo "<pre>";

echo "Iniciando o programa principal <br />";
funcao1();
echo "Finalizando o programa principal <br />";

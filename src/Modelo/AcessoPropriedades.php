<?php

namespace Alura\Banco\Modelo;

#Traits são pedaços de código que definem propriedades e métodos que podem ser 
#utilizados por diferentes classes, fornecendo funcionalidades adicionais. 
#São semelhantes às classes abstratas, visando a reutilização de código e 
#resolvendo o problema da falta de herança múltipla
trait AcessorPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}

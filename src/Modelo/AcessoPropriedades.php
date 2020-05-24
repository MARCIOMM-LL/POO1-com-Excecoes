<?php

namespace Alura\Banco\Modelo;

#Traits permitem o reuso de código que podem ser métodos que podem ser 
#utilizados por diferentes classes, fornecendo funcionalidades adicionais. 
#São semelhantes às classes abstratas, ou seja, traits não podem ser instânciados
#sabendo isso, traits visa a reutilização de código em outras classes
#resolvendo o problema da falta de herança múltipla
trait AcessorPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}

<?php

namespace Alura\Banco\Modelo\Conta;

#Uma classe abstract é um modelo/abstração que que serve de 
#base para outras classes herdarem dela.
#Ela não precisa obrigatóriamente ser herdada por outras, porém,
#os métodos de classes abstratas, precisam ser implementados em outras classes obrigatóriamente
abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        #Exibição de um atributo static que não 
        #precisa ser instânciado 
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";

            #Fazendo uso do early return
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    #Para O método abstract existir, a classe onde se 
    #encontra o método abstract, também precisa ser abstract
    #Detalhe, todas as classes que tiverem métodos abstract,
    #precisam ser abstract também. E todas as classes que 
    #que herdarem de classes abstratas, precisam implementar 
    #seus métodos abstract obrigatoriamente.
    abstract protected function percentualTarifa(): float;
}

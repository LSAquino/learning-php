<?php

// STATIC

// como se fazem as implementações?

class Operacoes
{
    static $valor1;
    static $valor2;

    static function adicionar()
    {
        return self::$valor1 + self::$valor2;
        // return Operacoes::$valor1 + Operacoes::$valor2; //alternativa
    }

    static function hashAleatoria()
    {
        return rand(0, 1000);
    }
}

Operacoes::$valor1 = 10;
Operacoes::$valor2 = 10;
echo Operacoes::adicionar();

$hash = Operacoes::hashAleatoria();
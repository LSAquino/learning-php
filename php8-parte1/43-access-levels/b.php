<?php

//  ACCESS LEVELS - NÍVEIS DE ACESSO

// PROTECTED

// Pode ser alcançado dentro da classe, e dentro de qualquer classe que seja uma extensão de outra 

class ClasseTeste
{
    public $publica = "a";
    protected $protegida = "b";
    private $privada = "c";
}

class ClasseDerivada extends ClasseTeste
{
    function teste()
    {
        echo $this->publica;    # possível
        echo $this->protegida;  # possível
        echo $this->privada;    # erro
    }
}

$a = new ClasseTeste();
$a->publica = "1";      # possível
$a->protegida = "2";    # gera erro
$a->privada = "3";      # gera erro

$b = new ClasseDerivada();
$a->publica = "a";      # possível
$a->protegida = "b";    # erro
$a->privada = "c";      # erro

$b->teste();


// PRIVATE

// Só dpode ser visível dentro da própria classe

// ---------------------

// Os métodos não necessitam de ter um nivel de acesso especificado. Caso não haja especificação, ele sera público



class Teste
{
    private $valor;
    function mover() // == function mover(){} 
    {
        // code
    }
}

$a = new Teste();
$a->mover();        # possivel
// $a->valor = 'a'; # acusaria erro
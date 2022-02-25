<?php

// CLASSES ABSTRATAS

// Possuem métodos incompletos, que obrigatoriamente precisam ser impelementadas pelas classes que a herdam. Não podem ser instanciadas, servem apenas para poderem ser herdadas por outras classes.


abstract class Forma
{
    public $largura = 100;
    public $altura = 200;

    abstract public function area();

    function altura(){
        return $this->altura;
    }
}

// $quadrado = new Forma(); # isto não é permitido

class Retangulo extends Forma
{
    public function area(){
        return $this->largura * $this->altura;
    }
}

$r = new Retangulo($x,$y);
echo $r->area();
echo '<br>';
echo $r->altura();
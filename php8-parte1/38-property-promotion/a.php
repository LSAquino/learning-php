<?php

class Humano1
{
    public $nome;
    public $apelido;
}

class Humano2
{

    public function falar()
    {
        // código aqui
    }

    private function andar()
    {
        // método apenas acessível dentro da class
    }

    public function movimento()
    {
        $this->andar();
    }
}


$homem = new Humano();
$homem->nome = "João";
$homem->apelido = "Ribeiro";

$homem = new Humano2();
$mulher->movimento();


// CONSTRUCTOR
// PROPERTY PROMOTION

class Humano3
{
    public $nome;
    public $apelido;

    function __construct($n, $a)
    {
        $this->nome = $n;
        $this->apelido = $a;
    }
}


// Já no PHP 8, podemos fazer asssim:

class Humano4
{
    function __construct(public $nome, public $apelido){
        $this->nome = $nome;
        $this->apelido = $apelido;
    }
}

$h1 = new Humano3('joao','ribeiro');
$h2 = new Humano4('ana','martins');

echo $h1->nome . ' ' . $h1->apelido;
echo '<br>'
echo $h2->nome . ' ' . $h2->apelido;
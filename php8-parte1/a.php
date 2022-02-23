<?php

class Humano1
{
    public $nome;
    public $apelido;

    function __construct($n, $a)
    {
        $this->nome = $n;
        $this->apelido = $a;
    }

    function nomeCompleto(){
        return $this->nome . ' ' . $this.epelido;
}

$homem = new Humano('joao', 'ribeiro');
$mulher = new Humano('ana', 'martins')

echo $homem -> nomeCompleto();
echo '<br>';
echo $mulher -> nomeCompleto();
<?php

// OBJECT ACCESS

// No PHP, um objeto instnciado a partir de uma clase pode aceder a elementos privados e protegidos de outor objeto criado a partir da mesma classe


class Humano
{
    private $nome = 'x';

    function setPrivate($objeto, $valor)
    {
        $objeto->nome = $valor;
    }
    function apresentar()
    {
        echo $this->nome;
    }
}

$a = new Humano();
$b = new Humano();

$a->setPrivate($b, 'Joao');
$a->apresentar();
echo '<br>';
$b->apresentar();

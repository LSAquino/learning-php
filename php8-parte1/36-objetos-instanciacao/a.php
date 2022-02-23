<?php

class Humano{
    public $nome = 'Joao';
    public $apelido = 'Ribeiro';

    public function nomeCompleto(){
        return $this->nome . ' ' . $this->apelido;
    }
}

// INSTANCIAR UM OBJETO

$homem = new Humano();


echo $homem->nomeCompleto();
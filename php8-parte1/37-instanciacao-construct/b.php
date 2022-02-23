<?php

class Humano1{
    public $nome = 'Joao';
    public $apelido = 'Ribeiro';

    public function nomeCompleto(){
        return $this->nome . ' ' . $this->apelido;
    }
}

$homem1 = new Humano();
echo $homem->nomeCompleto();
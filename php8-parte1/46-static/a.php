<?php

// STATIC

// A palavra chave static pode ser usada para declarar propriedades ou métodos de uma classe que podem ser acedidos sem que seja necessário criar um objeto a partir dessa classe

class Teste
{
    // instance members 
    public $nome;
    function teste(){
        // code
    }

    // static ou class members
    static $idade;
    static function mover(){
        // code
    }
}
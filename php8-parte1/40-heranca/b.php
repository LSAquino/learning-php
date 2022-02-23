<?php

// HERANÇA | INHERITANCE


// Para herdar uma classe a partir de outra, usamos o extends
// Exemplo (classe base)

class Animais
{
    public $especie;
    public $peso;

    function tipoEspecie()
    {
        return "Este animal é da espécie {this->especie}";
    }
}

// Exemplo (classe com herança)
class Mamifero extends Animais
{
    // não é necessario voltar a definir os atributos e métodos que já existem na classe base

    // podemos acrescentar outras propriedades e métodos

    public $quantidade_pernas;
    public $tem_pelo;

    function temQuantasPernas(){
        return "O animal da espécie {$this->especie} tem {$this->quantidade_pernas}";
    }
}
$mamifero = new Mamifero();
$mamifer->especie = 'Cavalo';
$mamifero->quantidade_pernas = 4;
echo $mamifero->temQuantasPernas();
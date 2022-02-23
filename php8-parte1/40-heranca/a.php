<?php

// HERANÇA | INHERITANCE



// Exemplo (classe tradicionao)

class Animal
{
    public $especie;
    public $peso;

    function tipoEspecie()
    {
        return "Este animal é da espécie {this->especie}";
    }
}

$animal = new Animal();
$animal->especie = 'Mamíferos';

echo $animal->tipoEspecie();



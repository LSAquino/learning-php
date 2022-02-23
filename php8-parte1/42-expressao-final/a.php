<?php


// FINAL

// Para impedir que uma classe derivada poss fazer override de métodos  podemos utilizar a expressão FINAL da seguinte forma

class Veiculo
{
    final function mover()
    {
        // code...
    }
}

class Bicicleta extends Veiculo
{
    function mover(){ // acusa erro
        // override do codigo original
    }
}

// Podemos inclusive, definir uma class como não sendo possivel de ser herdada colocando FINAL antes da class

final class Humano
{
    // code
    function teste(){
        echo 'teste';
    }
}

class Homem extends Humano{ // acusa erro
    // code
}

$a = new Homem();
$a->teste();
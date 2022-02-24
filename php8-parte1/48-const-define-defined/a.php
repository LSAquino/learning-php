<?php

// CONSTANTS

// As constantes não podem ter o valor modificado
// São definidas de duas formas: com o termo const e com o método define



// CONST 

// Define constantes no contexto de classes, eles são sempre visíveis (públicas)

// para definir uma constante, o nome deve ser sempre em maiúsculas, podendo ser usados _, não é necessário usar o $

class Circulo
{
    const PI = 3.14; // todas as constantes precisam ter o valor atribuído assim que são definidas
}

// é possivel apresentar sem instanciar
echo Circulo::PI;

echo '<br>';

// ou com instanciação
$c = new Circulo();
echo $c::PI;
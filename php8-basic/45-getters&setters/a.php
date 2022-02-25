<?php

// ACCESS LEVEL - Aspectos importantes a reter

// Uma boa prática é criar o menor número de propriedades públcias dentro das classes, pois isso expõe a propriedade.
// Por exemplo: imaginem que queremos que uma propriedade de uma classe seja sempre um número.

class Humano
{
    public $idade;
}

$eu = new Humano();
$eu->idade = 'Olá Mundo!'; # isto é possivel porque o PHP não é strongly typed

# Para definir corretamente este tipo de situações, podemos usar métodos para definir e ir buscar os valores das propriedades privadas. Estes métodos permitem garantir que a integridade das propriedades seja mantida.

class Humano1
{
    private $idade;
}

$eu1->idade='joao'; # não é possivel porque a propriedade é privada
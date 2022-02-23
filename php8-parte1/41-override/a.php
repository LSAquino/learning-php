<?php

#Overriding

#O mecanismo de overriding permite a uma classe derivada ter métodos reescritos especificamente para essa classe.

#por exemplo, podemos ter um método TESTE na classe base e ter o mesmo método TESTE com código diferente na classe derivada

class Animal
{
    function mover()
    {
        echo 'Mover a partir da classe base.';
    }
}

class Mamifero extends Animal
{
}

class Peixe extends Animal
{
    function mover()
    {
        echo 'Mover a partir da classe peixe.';
    }
}

$animal = new Animal();
echo $animal->mover();
echo '<br>';

$mamifero = new Mamifero();
echo $mamifero->mover();
echo '<br>';

$peixe = new Peixe();
echo $peixe->mover();
echo '<br>';

# Também é aplicável às propriedades

class Animal1
{
    public $especie = 'Ave';
}

class Mamifero1 extends Animal
{
    public $especie = 'Cavalo';
}

$a = new Animal1();
echo $a->especie;
echo '<br>';
$b = new Mamifero1();
echo $b->especie;



# Construtor de parent class

class Retangulo
{
    public $largura, $altura;
    function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $l;
    }

    function calcularArea()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo{
    function __construct($l)
    {
        $this->largura = $l;
        $this->altura = $l;
    }
}

$rect = new Retangulo(10,20);
$quad = new Quadrado(10);

echo $rect->calcularArea();
echo '<br>';
echo $quad->calcularArea();
echo '<br>';
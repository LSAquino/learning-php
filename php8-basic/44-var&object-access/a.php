<?php

// VAR Keyword

// Tem o mesmo comportamento de public, mas apenas existe por retrocompatibilidade, não é mais recomendado o seu uso

class Homem
{
    var $nome;
    var $apelido;
}

$eu = new Homem();
$eu->nome = 'Joao';
$eu->apelido = 'Ribeiro';

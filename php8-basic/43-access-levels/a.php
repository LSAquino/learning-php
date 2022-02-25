<?php

//  ACCESS LEVELS - NÍVEIS DE ACESSO

// public, protected e private

class MinhaClasse
{
    public $v1;
    protected $v2;
    private $v3;
}

$a = new MinhaClasse();
$a->v1 = '111'; # possivel
$a->v2 = '222'; # não é possivel. Acusa erro.
$a->v3 = '333'; # não é possivel. Acusa erro.






// PUBLIC

// São sempre acessíveis, se criarmos um objeto a partir da classe, temos acesso direto aos elemento

class TudoPublico
{
    public $propriedade;

    public function metodo()
    {
        echo 'Método público';
    }
}

$obj1 = new TudoPublico();
$obj1->propriedade = "a";
$obj1->metodo();

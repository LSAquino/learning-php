<?php

// ACCESS LEVEL - Aspectos importantes a reter

class Humano2
{
    private $idade = 0;

    public function setIdade($valor){
        // verifica se $valor é numérico
        if (is_numeric($valor)) {
            $this->idade = $valor;
        }
    }
    public function getIdade(){
        return $this->idade;
    }
}

$eu2 = new Humano2();
$eu2->setIdade('Joao');
echo $eu2->getIdade();

<?php

#TRAITS

// São um grupo de métodos que podem ser inseridos dentro de uma classe. São definidos com a expressão trait, seguido pelo nome e por um bloco de código. 
// As regras para dar nomes a traits são as mesmas que usamos nas classes


trait MinhasHabilidades
{
    public function falar($mensagem){
        echo "Eu digo: $mensagem";
    }
    public function saltar($metros){
        echo "Eu salto $metros metros.";
    }
}

// As classes que necessitem usar estes metodos do trait, apesas terão que ter o seguinte:

class Humano
{
    use MinhasHabilidades;
}

$h = new Humano();
$h->falar('Olá Mundo!');
echo '<br>';
$h->saltar(3);
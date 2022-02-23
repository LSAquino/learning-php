<?php



// CLASSES ANÔNIMAS

// Só faz sentido quando queremos instanciar apenas um objeto dessa classe


// Exemplo "normal":

class Objeto1 {
    function teste(){
        echo 'teste - normal';
    }
}

$a = new Objeto1();
 

// Exemplo com classes anônimas

$b = new class{
    function teste(){
        echo 'teste - classe anônima';
    }
};

$a->teste();
echo '<br>';
$b->teste();
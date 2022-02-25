<?php

// GENERATORS

// É uma função que permite gerar séries de valores, devolvidos através da instrução yield, e ela guarda o resultado, permitindo que a função continue a partir do estado onde ficou na última chamada


function buscar_numero(){
    for ($i=0; $i < 10; $i++) { 
            yield $i;
    }
}

// Funciona como um iterador, podendo ser usada um ciclo até que o gerador não tenha mais valores para devolver com o yield
foreach (buscar_numero() as $numero ) {
    echo "$numero<br>";
}

// yield from permite outro tipo de retorno:
// devolver valores de outro gerador, ou devolver valores de um array

function buscar_nomes(){
    yield 'joao';
    yield 'maria';
    yield from ['carlos', 'ana', 'antonio'];
    yield 'fernando';
}

echo '<hr>';
foreach(buscar_nomes() as $nome){
    echo "$nome<br>";
}

// elas não precisas tratar todos os dados de uma vez, podendo aumentar a performance do script 
<?php

// FILESYSTEM

/*
Na leitura de ficheiros de texto, o PHP contém nativamente algumas funções para carregar informação a partir de ficheiros CSV.

Um ficheiro CSV (Comand Separated Values), permite guardar dados em esquema de tabela.
É muito utilizado na exportação de dados a partir do Excel e de outras aplicações de desktop e web. O ficheiro pode conter vários formatos diferentes (dados separados por vírgulas, ponto e vírgula, delimitados por aspas, etc.)

Vejamos um exeplo.

*/

$file = fopen('dados.csv', 'r');
$max_lines = 1;
while (!feof($file)) {
    $l = fgetcsv($file);
    print_r($l);
    if ($max_lines-- == 0) {
        die('terminado');
    }
}

fclose($file);

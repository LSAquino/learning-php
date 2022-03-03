<?php

// FILESYSTEM

/*
Vamos aprender a ler dados de um ficheiro, neste caso, linha a linha
*/

// leitura dos dados
$ficheiro = fopen('dados.txt', 'r');

# --- não muito correto -------
// for ($i=1; $i < 10; $i++) { 
//     echo fgets($ficheiro);
// }
// fclose($ficheiro);

# -------- mais correto -------
while (!feof($ficheiro)) {
    echo fgets($ficheiro);
}
fclose($ficheiro);
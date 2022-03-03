<?php

// FILESYSTEM

/*
Vamos ver como podemos gravar um texto completo num ficheiro, e como ler esse texto completo para o interior de uma variável de PHP
*/

// gravar texto completo
$texto = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis eligendi quod deleniti adipisci voluptatibus ad assumenda, vitae dolores eveniet id dignissimos ab doloribus voluptas, iusto recusandae, quidem asperiores commodi corporis fuga maiores. At qui nam atque voluptatibus molestiae harum sunt debitis, aspernatur, iusto, odio laudantium. Nihil aspernatur deleniti eum hic!";

// file_put_contents('texto_completo.txt', $texto);
// esta função é equivalente a chamar fopen, fwrite e fclose tudo na mesma função.



// ler todo o conteúdo de um ficheiro para uma variável
$texto = file_get_contents('texto_completo.txt');
echo($texto);
<?php

// IMPORTAR SCRIPTS COM INCLUDE
 
/*
A maioria dos projetos vão sempe necessitar de ter o código "partido" entre diferentes ficheiros.

É aqui que entram os mecanismo de importação de scripts dentro de outros scripts.

A importação pode ser feita recorrendo ao uso da instrução include

NOTA: o include, à semelhança do echo, são construções especiais do PHP e não requerem a utilização dos parênteses.
*/

include 'config.php';

// Esta instrução vai inserir o código de programação do script config.php dentro do script atual.
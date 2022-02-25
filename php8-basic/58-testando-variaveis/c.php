<?php


# UNSET

/*
Permite "destruir" uma variável.
Existem duas formas de se fazer isso, mas com diferenças de performance e atuação no sistema.
*/

$a = 'joao';
unset($a);

$b = 'Antonio';
$b = null;

/*
No primeiro caso, a variável é "libertada" e no próximo ciclo de limpeza ela é removida da memória.

No segundo, ela vai persistir na memória, porém sem valor definido, apesar de liberar memória quanto à inexistência de valor.
*/
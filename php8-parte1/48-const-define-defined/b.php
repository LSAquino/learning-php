<?php

// CONSTANTS

// o termo const não deve ser aplicados a variáveis locais ou parametros, mas sim para constantes globais

const APP_NAME = 'Minha Aplicação';
echo APP_NAME;
echo '<br>';

// dentro de uma função
function teste()
{
    echo APP_NAME;
}

teste();

// não é possivel concatenar constantes da mesma forma que fazemos com variáveis
echo "<br>Nome:" . APP_NAME; // só funciona assim

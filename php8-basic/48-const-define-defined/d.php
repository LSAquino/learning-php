<?php

// CONSTANTS

// Para verificarmos de uma constante já existe
if (!defined('APPNAME')) {
    define('APPNAME', 'Minha app');
}
echo APPNAME;
echo '<br>';

// ou mais comum ainda...
defined('CONSTANTE') or define('CONSTANTE', 'valor');

// com um array
const NOMES = ['joao','ana','carlos'];
echo NOMES[0];
echo '<br>';

// com o define...
define('NAMES', ['joao','ana','carlos']);
echo NAMES[2];
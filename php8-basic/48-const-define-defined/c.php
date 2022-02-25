<?php

// CONSTANTS

// DEFINE

// A função define permite dfinir constants globais e locais, mas não pode ser usada dentro do contexto de uma classe

define('APP_NAME', 'Minha aplicação');
define('VERSAO', '1.0.0');
define('MOSTRAR_ERROS', true);
define('PI', 3.14);

echo APP_NAME;
echo '<br>';

define('CONSTANTE',100);
echo CONSTANTE . '<br>';


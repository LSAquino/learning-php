<?php

/*
SESSIONS (Sessões)

É um mecanismo ou forma que permite guardar dados entre vários requests.
Permite construir aplicações com informação que está disponível em todas as páginas da nossa aplicação ou website.

*/

session_start();    
echo 'SESSÕES';
echo '<br>';

$_SESSION['valor'] = 1000;
$_SESSION['usuario'] = 'joao';

echo $_SESSION['usuario'];

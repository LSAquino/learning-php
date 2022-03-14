<?php

require_once('logger.php');



// testar o log

// logger('primeira mensagem');

echo 'OK';

secreta();

function secreta()
{
    logger('usuário entrou na área secreta', 'warning');
    echo 'Entrou na área secreta';
}

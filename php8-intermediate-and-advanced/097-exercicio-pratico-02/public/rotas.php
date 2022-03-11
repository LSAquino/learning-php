<?php

defined('CONTROLE') or die('Acesso negado.');

echo 'rotas';

$rota = null;

if (!verifica_sessao()) {
    $rota = 'login';
} else {
    $rota = 'logado';
}

// apresentar os layouts
switch ($rota) {
    case 'login':
        require_once('../views/login_frm.php');
        break;
}
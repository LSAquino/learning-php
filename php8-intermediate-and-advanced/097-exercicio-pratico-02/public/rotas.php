<?php

use EasyPDO\EasyPDO;

defined('CONTROLE') or die('Acesso negado.');

// echo 'rotas';

$rota = null;

if (verifica_sessao() && $_SERVER['REQUEST_METHOD'] != 'POST') {
    $rota = 'login';
    $r = 1;
} elseif (verifica_sessao() && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $rota = 'login_submit';
    $r = 2;
} else {
    $r = 3;
    $rota = 'logado';
}
// apresentar os layouts
switch ($rota) {

        // -------------------------------------------------------------
        // -------------------------------------------------------------
    case 'login':

        // apresentação do formulário de login
        require_once('../views/login_frm.php');
        break;
        // -------------------------------------------------------------
        // -------------------------------------------------------------
    case 'login_submit':

        // tentativa de login

        $bd = new EasyPDO();
        $parametros = [
            ':usuario' => $_POST['text_usuario']
        ];

        $resultado = $bd->select("SELECT id_usuario, usuario, senha FROM usuarios WHERE usuario = :usuario", $parametros);

        if (count($resultado) == 0) {
            // erro
            $erro = "Login inválido(1).";
            require_once('../views/login_frm.php');
            return;
        }

        $usuario = $resultado[0];

        // verificar a senha

        if (password_verify($_POST['text_senha'], $usuario['senha'])) {

            // login com sucesso
            $_SESSION['usuario'] = $usuario['usuario'];
            header("Location: index.php");
            return;
        } else {
            // erro
            $erro = "Login inválido(2).";
            require_once('../views/login_frm.php');
            return;
        }
        break;
        // -------------------------------------------------------------
        // -------------------------------------------------------------
    case 'logado':
        $bd = new EasyPDO();
        $usuarios = $bd->select("
            SELECT
            usuario, 
            AES_DECRYPT(nome_completo, UNHEX(SHA2('" . AES_KEY . "',512))) nome_completo 
            FROM usuarios
        ");

        require_once('../views/ver_usuarios.php');

        // require_once('ver_usuarios.php');
        // print_r($usuarios);
        break;
}

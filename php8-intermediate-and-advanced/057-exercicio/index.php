<?php

// COOKIES - CRIAR UM COOKIE COM TEMPO DE VIDA

/*
O tempo de vida de um cookie é definido em segundos.

Vamos ver o exemplo de um cookie que só tem 10 segundos de duração, e um que tem 1 ano
*/

if (!isset($_COOKIE['visitou_o_site'])) {
    // primeira visita
    setcookie('visitou_o_site', true, time() + 10);
    echo 'É a primeira visita ao site. Bem-vindo!';
}else{
    // apresentar mensagem
    echo 'Você já esteve neste site nos últimos 10 segundos. Seja bem-vindo novamente.';
}

// if (!isset($_COOKIE['visitou_o_site'])) {
//     // primeira visita
//     setcookie('visitou_o_site', true, time() + 365*24*60*60);
//     echo 'É a primeira visita ao site. Bem-vindo!';
// }else{
//     // apresentar mensagem
//     echo 'Você já esteve neste site no último ano. Seja bem-vindo novamente.';
// }
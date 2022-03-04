<?php

// EXEMPLO DE FUNÇÃO PARA CALCULAR A IDADE

$data_nascimento = new DateTime('19-10-1973');

echo calculate($data_nascimento);




function calculate($data_nascimento)
{

    $agora = new DateTime();

    // primeiro cálculo dos anos
    if ($agora->format('Y') == $data_nascimento->format('Y')) {
        // verifica se estamos no mesmo ano
        $anos = 1;
    } else {
        $anos = $agora->format('Y') - $data_nascimento->format('Y');
    }

    // validar os anos de forma precisa
    // se ainda não chegamos ao "nosso" mês, temos menos  ano do que é calculado

    if ($agora->format('m') < $data_nascimento->format('m')) {
        $anos--;
    } elseif ($agora->format('m') == $data_nascimento->format('m')) {
        // estamos no mês de aniversário, vamos ver se o dia já chegou
        if ($agora->format('d') < $data_nascimento->format('d')) {
            $anos--;
        }
    }
    return $anos != 1 ? "$anos anos" : "1 ano";
}

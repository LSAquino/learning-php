<?php

class Operacoes
{
    // retorna um num sorteado entre $min e $max
    static function numeroAleatorio($min, $max)
    {
        return rand($min, $max);
    }

    static function calcularFormula($a, $b)
    {
        //(A x 2) + (B x A)
        return ($a * 2) + ($b * $a);
    }

    static function criarUmNome()
    {
        $nomes = ['joao', 'ana', 'carlos', 'francisco', 'rui', 'nuno'];
        $apelidos = ['silva', 'almeida', 'santos', 'rodrigues', 'oliveira'];
        return $nomes[rand(0, count($nomes) - 1)] . ' ' . $apelidos[rand(0, count($apelidos) - 1)];
    }
}

echo Operacoes::numeroAleatorio(0,1000);
echo '<br>';
echo Operacoes::calcularFormula(10,20);
echo '<br>';
echo Operacoes::criarUmNome();

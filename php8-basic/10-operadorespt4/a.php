<?php

# OPERADORES LÓGICOS

# Os operadores lógicos são frequentemente usados com os operadores de comparação
# Eles permitem 'ligar' várias comparações avaliando se são verdadeiras ou falsas.

# No PHP a construção correta de instruções condicionais depende destes operadores
#(instruções condicionais verificam se uma situação é verdadeira (true) ou falso (false))

$a = 100;
$b = 200;

$x = ($a < $b) && ($a < 1000);
$x = ($a > $b) || ($a > 100);
$x = ($a < 150) && ($b > 300);
$x = ($a > 10) || ($b > 500);
$x = ($a == 100) && ($b < $a);

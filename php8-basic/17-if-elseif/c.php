<?php

// Uso de operadores lógicos

$numero = 20;
if($numero > 10 && $numero != 30){
    // executar o código
} else{
    // executar outro código
}

// condições dentro de condições

$numero = 10;
if($numero > 0){
    if($numero >= 100){
        echo 'O número é igual ou maior que 100';
    } else {
        echo 'O número é positivo, mas inferior a 100';
    }
} else {
    echo 'O número é negativo.';
}
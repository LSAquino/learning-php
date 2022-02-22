<?php


// Declaração IF - define blocos de códigos que só são executadas se a condição for true

$nome = 'joao';
if($nome == 'joao'){
    echo 'Foi identificado o nome do autor do vídeo.';
}

# IF ... ELSE

$idade = 18;
if($idade <= 18){
    echo 'Adolescente';
} else {
    echo 'Adulto';
}

#IF ... ELSEUF ... ELESE

$nota = 5; // num universo de 0 a 10
if ($nota <= 2){
    echo 'Nota fraca';
}elseif($nota <=4){
    echo 'Nota insuficiente';
}elseif($nota <=6){
    echo 'Nota positiva';
}elseif($nota <=8){
    echo 'Nota muito positiva';
}else{
    echo 'Nota exelente!';
}
// Podemos deixar de usar chaves caso haja apenas uma instrução no bloco

if ($nota <= 2)
    echo 'Nota fraca';
elseif($nota <=4)
    echo 'Nota insuficiente';
elseif($nota <=6)
    echo 'Nota positiva';
elseif($nota <=8)
    echo 'Nota muito positiva';
else
    echo 'Nota exelente!';

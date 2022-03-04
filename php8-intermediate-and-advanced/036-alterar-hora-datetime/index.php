<?php

// DATETIME

/*
A partir do momento em que definimos uma data (e podemos fazê-lo no construtor da classe DateTime), podemos tirar partido de vários métodos para oeprar os valores. Uma data e hora contém imensos parâmetros: ano, mês, dia, dia da semana, hora, minuto, segundo, etc.
Existem vários métodos para alterar os valores da data e hora, adicionando períodos de tempo.
Vejamos.
*/

$data = new DateTime();
$data->setDate(2010,1,7);
$data->setTime(23,30);
echo $data->format('d-m-Y H:i:s');

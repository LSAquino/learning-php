<?php

// DATETIME - outra forma de manipular data e hora 

/*
Existe ainda outra forma muito interessante de manipular um DateTime.
Vejamos o método Modify.
*/

$portugal = new DateTime('now', new DateTimeZone('Europe/Lisbon'));

echo $portugal->format('d-m-Y H:i:s') . PHP_EOL;

// adicionar um minuto

$portugal->modify('+1 minute'); // adicionar 1 minuto
$portugal->modify('+15 minutes'); // adicionar 15 minutos
$portugal->modify('+48 hours'); // adicionar 48 horas
$portugal->modify('+1 day'); // adicionar 1 dia
$portugal->modify('+7 days'); // adicionar 7 dias
$portugal->modify('+3 mounths'); // adicionar 3 meses
$portugal->modify('+12 years'); // adicionar 12 anos
$portugal->modify('+1 year + 6 months'); // adicionar 1 ano e 6 meses
$portugal->modify('+1 hour + 15 minutes'); // adicionar 1 hora e 15 minutos
$portugal->modify('-1 hour - 15 minutes'); // retirar 1 hora e 15 minutos

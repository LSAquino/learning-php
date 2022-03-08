<?php

echo '<pre>';
print_r($_POST);

$valores = explode(" to ",$_POST['data_nascimento']);

$data_inicial = $valores[0];
$data_final = $valores[1];

echo "$data_inicial - $data_final";
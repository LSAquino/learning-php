<?php

// Arrays mistos

// É possivel criar arrays que combinam indices numéricos e strings.

$dados = [
  0 => 10,
  'nome' => 'Antonio',
  'apelido' => 'Silva',
  10 => 1000,
  11 => 'Rua de Lisboa',
  12 => 'Portutal'  
];

// para apresentar dados do array, procedemos sempre da mesma forma: 

$echo[0]; #10
echo $dados['apelido']; #silva
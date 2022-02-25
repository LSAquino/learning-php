<?php

# TESTANDO VARIÁVEIS



# ISSET

/*
Esta construção permite verificar se uma variável está ou não defininida
Ela retorna verdadeiro se a variável existe, e false se não.
*/

$a = 1;
if (isset($a)) {
    echo 'A variavel existe!<br>';
} else {
    echo 'A variável NAO existe<br>';
}

/*
Se ela existir, porém o valor for null, ela será considerada como uma variável inexistente.
*/

$b = null;
echo isset($b) ? 'sim':'nao';

# EMPTY

/*
Verifica se a variável tem um valor vazio (null, 0, false ou string vazia) e retorna verdadeiro ou falso
*/

$b = 'Joao';
empty($b); // false

$c = false;
empty($c); // true

$nomes = [];
empty($nomes); // true

$outro = null;
empty($outro); // true

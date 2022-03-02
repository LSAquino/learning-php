<?php

// STRSTR

// Retorna o resto da string a partir de uma ocorrência.

$a = "Frase de tetes no sistema";

echo strstr($a,'de'); // de testes no sistema
echo strstr($a,'n'); // no sistema

// esta função é case-sensitive
// para usá-la no modo insensitive, usamos stristr()

// Existe um terceiro parâmetro que permite definir a parte da string que pretendemos obter. Por default, não usando esse parâmetro, a string obtida é o resto da string incluindo a needle. Se usarmos $before_needle = true, vamos obter a parte inicial da string até à needle, excluindo a neddle

echo strstr($a, 'n', true);
// Frases de testes

<?php

/*
O print é uma construção da linguagem PHP muito semelhante ao echo.
As principais diferenças são: 
    1. print apenas aceita um argumento
    2. print retorna sempre o valor 1.
*/

$nome = "Joao";
$apelido = "Ribeiro";

print "$nome $apelido <br>"; // valido

print $nome . ' ' . $apelido . '<br>'; // também é válido

// print $nome, ' ', $apelido; // inválido

if (print($nome)) {
    print("$apelido");
}

// tal como acontece no echo, podemos usar o print para apresentar resultados de uma função

print '<br>';
print strlen("Ribeiro"); // 7

// preferencialmente devemos usar o echo, por ser mais rápido.
// o echo permite uma sintaxe mais curta no html
?>

<p><?php echo "joao"?></p>
<p><?= "joao"?></p>
<p><?php print "joao"?></p>
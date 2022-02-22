<?php

// OPERADOR TERNÁRIO


// É um operador condicional que pode substituir uma estrutura simples IF ELSE
// Necessita de três expressões ou áreas:
// 1. A expressão que será avaliada como verdadeira
// 2. A expressão que será executada como true
// 3. A expressão que será executada como false

$opcao = 0;

$nome = $opcao == 1 ? 'Joao' : 'Antonio';

// podemos também usar da seguinte forma:

$opcao == 1 ? $nome = 'Joao' : $nome = 'Antonio';

// podemos usar, por exemplo, para apresentar um determinado texto

echo $opcao == 1 ? 'SIM' : 'NAO';

?>

<!-- Com instrução condicional IF -->

<?php if ($opcao == 1) : ?>
    <h2>SIM</h2>
<?php else : ?>
    <h2>NAO</h2>
<?php endif; ?>

<!-- Com operador ternário -->
<h2><?= $opcao ==1 ? 'SIM' : 'NAO' ?></h2>

<!-- Por exemplo, para controlar CSS -->
<h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>"> Esse texto tem cor definida pelo PHP</h2>


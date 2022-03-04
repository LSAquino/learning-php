<?php

// LIST E EXTRACT - TRANSFORMAR UM ARRAY EM VÁRIAS VARIÁVEIS

/*
É possível transformar os valores de um array, cada um para uma variável específica. Utilizamos para isso a função list()
*/

$nomes = ['joao', 'ana', 'carlos'];
list($nome1, $nome2, $nome3) = $nomes;

echo $nome1 . PHP_EOL;
echo $nome2 . PHP_EOL;
echo $nome3 . PHP_EOL;

// se quisermos apenas alguns elementos:

list($nome1,, $nome2) = $nomes;
echo $nome1 . PHP_EOL;
echo $nome2 . PHP_EOL;

// Podemos ainda usar o extract para, automaticamente, cada valor passar uma variável com o nome da chave
$funcionarios = [
    'administradot' => 'joao',
    'secretaria' => 'ana',
    'contabilidade' => 'carlos'
];

// IMPORTANTE: não devemos usar o extract com arrays que não controlamos, como por exemplo os dados da superglobal $_POST[] quando fazemos a submissão de um formulário
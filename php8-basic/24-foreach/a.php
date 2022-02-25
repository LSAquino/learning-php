<?php

// Cliclos / loops

// Foreach

# É um ciclo especialmente concebido para fazer uma iteração pelos valores de um array

$nomes = ['joao', 'ana', 'carlos'];
foreach ($nomes as $nome) {
    echo $nome . '<br>';
}

echo '<hr>';

// existe ainda uma outra assinatura que permite ir buscar a chave e o valor do array

$capitais = [
    'portugal' => 'Lisboa',
    'brasil' => 'Brasília',
    'espanha' => 'Madrid'
];
foreach ($capitais as $key => $value) {
    echo "Para o país $key a capital é $value<br>";
}

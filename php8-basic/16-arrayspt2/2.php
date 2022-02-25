<?php

// Arrays multidimensionais

// os valores dos arrays são outros arrays

$dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000]
];

// neste caso, para apresnetar os valores:

echo $dados[1][2]; # 300
echo $dados[0][3]; # 40 

// podemos ter arrays multidimensionais associativos:

$cidades = [ 
    'portugal' => ['Lisboa','Porto','Coimbra'],
    'brasil' => ['Brasilia', 'São Paulo', 'Rio de Janeiro']
];
echo $cidades['brasil'][1]; # São Paulo
echo $cidades['portugal'][2]; # Coimbra

// os arrays podem ter mais de dua dimensões
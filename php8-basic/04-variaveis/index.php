<?php

// VARIÁVEIS
// =====================================

# são usadas para guardar dados: números, textos, etc.
# podemos apresentar e modificar os seus valores ao longo do código

# definem-se com um dollar ($) e um identificador (nome da variavel)
$variavel;






# podemos definir e iniciar uma variável
 $variavel = 100;

# podemos alterar o tipo de valores da variável
 $variavel = "teste"; 


 # as variáveis são Case sensitive
//  $variavel = "uma variavel";
//  $Variavel = "outra variavel"


# Jeito errado
// $1var = 0;
// $!var = 0;
// $variavel(1) = 0;
// $variavel um = 0;
// $variavel -um = 0;

# Jeito correto
// $var1 = 0;
// $var_um = 0;
// $varUm = 0;
// $_um = 0;
// $_1 = 0;


#convenções

$umaVariavel = 0; #camel case
$uma_variavel = 0; #com undersores (snake case)
$UmaVariavel = 0; #studly case (não recomendado)

# deve ser sempre mantido o mesmo estilo ao longo do periodo

$variavel = 100;
echo $variavel;
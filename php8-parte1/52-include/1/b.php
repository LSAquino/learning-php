<?php


include 'config.php';

echo NOME_APLICACAO;

# CAMINHO PARA O INCLUDE

/*
Podemos "incluir" um script dentro de ouso usuario:
1. nenhum caminho e apenas o nome do script a ser incluido;
2. um caminho relativo ao script atual;
3. um caminho absoluto - que indica a localização exata do script no filesystem.
*/

# 1. apenas quando o script a incluir está na mesma pasta do script atual

# 2. caminho relativo à pasta do script atual


include 'inc/dados.php';
echo '<br>';
echo $nome;

// quando é necessário "andar para trás" na árvore de pastas usamos ../
include '../outro_script.php';
echo '<br>';
echo $valor;


# 3. caminho absoluto
include 'C:/Users/mateu/OneDrive/Área de Trabalho/Lucas/php8/php8-parte1/52-include/1/inc/dados2.php';
echo '<br>';
echo $hoje->format('d-m-y');

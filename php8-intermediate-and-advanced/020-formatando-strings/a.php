<?php

// PRINT F | SPRINTF | FPRINTF | VPRINTF | VSPRINTF | VFPRINTF | SSCANF | FSCANF
// -----------------------------------------------------------------------------------

/*
Existem várias funções com terminologia muito semelhante cuja principal finalidade é o output, a gravação em stream ou retorno de strings formatadas de acordo com várias regras ou diretivas.

Estas funções são particularmente complexas, porque contêm um leque muito variado de possibilidades de formatação. Vamos olhar para o caso do printf com alguns exemplos.
*/

/*
printf - Mostra uma string formatada (com um número variável de argumentos)
sprintf - Retorna uma string formatada
vprintf - Mostra uma string formatada (mas um array de argumentos)
sscanf - Interpreta a entrada de uma string de acordo com um formato
fscanf - Interpreta a leitura de um arquivo de acordo com um formato
*/

// -----------------------------------------------------------------------------------
// Todas esas funções recorrem ao mesmo tipo de formatação, que veremos mais adianta
// -----------------------------------------------------------------------------------

// podemos usar a função para simplesmente fazer o output do texto.
printf("Olá Mundo!");

// substitui o %s pelo argumento em sequência.
printf("O meu nome é %s e o apelido é %s", 'joao', 'ribeiro');

// amos ver aplicações mais avançadas;
$valor = 65;

// apresenta o código binário do valor.
printf("%b", $valor);

// apresenta o caracter cujo código ASCII é indicado em $valor.
printf("%c", $valor);

// o valor é apresentado como um inteiro.
// se o valor for uma string alfanumérica, vai dar 0. Se for uma string com valor númerico, apresenta o número.
printf("%d", $valor);

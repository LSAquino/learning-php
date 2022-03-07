<?php

// PASSAR VALORES ENTRE PÁGINAS WEB - VIA GET

/*
De cada vez que fazemos um clique num link, na maior parte dos casos estamos a pedir ao sistema que vá para uma outra página. Na prática estamos a executar um request (pedido) que se traduz num pedido de dados ao servidor onde nossa página se encontra.

Tradicionalmente, quando fazemos um novo request, os valores das variáveis do php desaparecem e uma nova vida na nossa aplicação surge como resposta ao novo pedido

Se tivermos a página A onde existe uma variáve $nome = 'joao, quando abrimos a página B, a variável $nome não existe.

Existe outras formas de passar valores entre duas páginas web (ou dois requests).
Uma das formas mais simples, é através da query string. A query string é o endereço da n agregado com um conjunto de informações adicionais. Vejamos na prática.
*/


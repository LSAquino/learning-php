<?php

// FILESYSTEM
/*
O processo mais linear para a gravação de textos num ficheiro é o seguinte:
    1. Criamos uma variável, também conhecida como por handle, que é um apontor para um ficheiro
    2. Escrevemos texto usando funções com esse apontador
    3. Fechamos o apontador
*/

// $ficheiro = fopen('dados1.txt','w');
// fwrite($ficheiro, 'Primeira frase.');
// fwrite($ficheiro, 'Segunda frase.');
// fclose($ficheiro);

/*
Na instrução fopen, o segundo parâmetro (modo) pode ser definido de várias formas.
As mais comunbs são as seguintes:

w - write - Abre o ficheiro apens para escrever. Se o ficheiro não existe, cria-se e se existe, apaga tudo.

a - append - Apenas para escrever. Se existe, acrescenta o texto ao que já existe no ficheiro
*/

// $ficheiro = fopen('dados2.txt','a');
// fwrite($ficheiro, 'Mais uma frase.');
// fclose($ficheiro);

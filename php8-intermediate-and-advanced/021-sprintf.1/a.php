<?php

// PERCEBENDO O FORMATO DE SPRINTF - PARTE 1

/*
A função sprintf retorna uma string formatada de acordo com um determinado formato
Percebendo como funciona a definição desse formato, ficaremos a perceber como funciona o formato das outras funções referidas no tópico anterior.

Esta é a assinatura da função:
sprintf ( string $format, mixed ...$values ) : string

o $format (formato) é uma string composta de diretivas. 
As diretivas são constituídas por caracteres que são copiadas diretamente para o resultado da string e por especificações de conversão, cada uma das quais com outputs distintos.

As especificações de conversão seguem a seguinte filosofia: 
    
    %[argnum$][flags][width][.precision]specifier

*/

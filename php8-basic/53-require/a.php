<?php

/*
Além do include, existem ainda outras 3 formas de importação de scripts:
    require
    include_once
    require_onde

O require é muito semelhane aao include.
As mesmas regras de definição dos caminhos são aplicadas.
A diferença entre o include e o require é que, o caso do include falhar, o código avança com um aviso.
No caso do require falhar, a aplicação termina com um erro
*/

// include 'teste.php';
// echo 'momento 1';

require 'teste.php';
echo 'momento 2';

/*
Como escolher entre os dois tipos de instrução?

É aconselhavel o uso do require, uma vez que, acontecendo um erro de importação do script, a aplicação não irá avançar com erros
*/
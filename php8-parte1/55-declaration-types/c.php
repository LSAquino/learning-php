<?php

// TYPE DECLARATIONS

/*
Também é possivel atribuir tipos de retorno de dados de uma função
*/

function funcao(): array
{
    return [
        1, 2, 3
    ];

    // return 'teste';
}

function funcao2():string{
    
    return 'teste o return abaixo';
    //return [1,2,3]; acusa erro
}

/* 
é uma forma interessante de forçar a construção de código com menos erros. 
*/
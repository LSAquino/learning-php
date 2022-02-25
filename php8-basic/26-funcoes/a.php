<?php

#FUNÇÕES

// Funções são blocos de código identificados por um nome e uma assinatura e que permitem que o código seja reutilizado e organizado de uma forma muito mais consistente.

// Estes blocos só são executados quando são solicitados.

// Definimos uma função usando a palavra chave function, seguida de um nome, um conjunto de parênteses e um bloco de código.

// (forma correta de escrita de uma função)
function funcao()
{
    // código da função aqui
}

// exemplo de sua aplicação
echo 'Inicio da nossa aplicação.';
echo '<br>';
executar();

function executar()
{
    echo 'A função foi executada.';
}

// no PHP o nome das funcoes é case insensitive
// function Falar()
// {
// }

// function falar()
// {
// }

// podem ser usados vários padrões para o nome das funções, mas os mais comuns são o Camel Case e o Snake Case

function camelCase()
{
}

function snake_case()
{
}

function getClient()
{
}
function get_client(){
    
}
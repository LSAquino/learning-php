<?php

// ARRAYS - KEY_EXISTS E IN_ARRAY

/*
Quando queremos verificar se um determinado valor ou uma determinada chave eixste dentro de um array, não temos o que percorrer aé encontrar o que desejamos.
*/

// key_exists - "pergunta" ao array se ele tem uma determinada chave (key)

$empresa = [
    'administrador' => 'joao',
    'secretaria' => 'ana',
    'contabilista' => 'carlos'
];

if (key_exists('operarario', $empresa)) {
    echo 'Existe';
} else {
    echo 'Não existe';
}

// in_array - verifica se determinado valor existen no array ou não
if (in_array('ana', $empresa)) {
    echo 'O valor existe';
} else {
    echo 'O valor não existe';
}

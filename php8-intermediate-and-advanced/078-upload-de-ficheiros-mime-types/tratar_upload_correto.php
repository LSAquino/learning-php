<?php

echo '<pre>';
print_r($_FILES);

// pasta de destino final
$pasta_final = 'C:/tmp/';

$mime_aceites = [
    'image/png', 'image/jpeg'
];

// tratamento dos ficheiros
foreach ($_FILES as $file) {

    // verifica se a imagem é do tipo esperado
    if (!in_array($file['type'], $mime_aceites)) continue;
    
    // mover o ficheiro para o destino final
    move_uploaded_file($file['tmp_name'],$pasta_final . $file['name']);
}

/*
    [name] => lobo3.jpg
    [full_path] => lobo3.jpg
    [type] => image/jpeg
    [tmp_name] =>C:\Users\mateu\AppData\Local\Temp\phpE082.tmp
    [error] => 0
    [size] => 94115
*/

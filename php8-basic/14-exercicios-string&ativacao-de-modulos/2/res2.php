<?php
    $nome = 'Lucas';
    $apelido = 'Aquino';
    
    $nome_completo = "$nome $apelido";
    $quantity = strlen($nome_completo);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= "$nome $apelido" ?></p>
    <p>O meu nome tem <?=$quantity?> caracteres</p>
</body>
</html>
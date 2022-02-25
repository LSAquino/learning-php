<?php


/*
ECHO

É a instrução mais usada para apresentar conteúdo PHP numa página web.
Também podemos usar o print, mas é ligeiramente mais lento e tem menos potencial, podemos usar o echo com ou sem parênteses
Pode ser usado com múltiplos parâmetros.

*/
?>

<?php
$nome = "Joao";
$apelido = "Ribeiro";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .texto-vermelho {
            color: red;
        }
    </style>
</head>

<body>

    <?php echo $nome . ' ' . $apelido ?> <br>

    <?php echo "$nome $apelido" ?> <br>

    <?php echo "Bom dia", " ", $nome, " ", $apelido ?>

    <?php echo "<h3>$nome $apelido</h3>" ?>

    <?php echo "<h3 class=\"texto-vermelho\">$nome $apelido</h3>" ?>

    <?php echo  '<h3 class="texto-vermelho">', "$nome $apelido", "</h3>"  ?>

    <?= '<h3 class = "texto-vermelho">', "$nome $apelido", "</h3>" ?>

    <p>Nome do cliente: <?= "<strong>$nome $apelido" ?></p>

    <p><?= substr($apelido, 0, 4) ?></p>
</body>

</html>
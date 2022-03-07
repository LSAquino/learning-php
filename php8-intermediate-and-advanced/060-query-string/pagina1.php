<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>

<body>

    <?php
    $nome = "joao";
    ?>


    <h3>Página 1</h3>

    <p><?= $nome ?></p>

    <a href="pagina2.php?a=<?= $nome ?>">Ir para a página 2</a>

</body>

</html>
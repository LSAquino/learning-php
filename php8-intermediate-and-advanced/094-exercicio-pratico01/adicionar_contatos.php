<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar contatos</title>
</head>

<body>

    <form action="adicionar_contatos_submit.php" method="post">
        <div>
            <label>Nome:</label>
            <input type="text" name="text_nome" maxlength="50">
        </div>
        <div>
            <label>Telefone:</label>
            <input type="text" name="text_telefone" maxlength="20">
        </div>
        <div>
            <input type="submit" value="Salvar">
        </div>
        <div>
            <a href="index.php">Voltar</a>
        </div>
    </form>
    
</body>

</html>
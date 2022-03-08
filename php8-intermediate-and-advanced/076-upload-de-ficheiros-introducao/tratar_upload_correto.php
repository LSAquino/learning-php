<?php

echo '<pre>';
print_r($_FILES);

// mover ficheiro para o destino final
move_uploaded_file($_FILES['caixa_ficheiro']['tmp_name'], "c:/tmp/" . $_FILES['caixa_ficheiro']['name']);

// Readme: Criar uma pasta "tmp" no c:

<?php

use EasyPDO\EasyPDO;

require_once('../libs/EasyPDO.php');
//require_once('config.php');

$senha = "abc123";
// echo md5($senha);

echo password_hash($senha, PASSWORD_ARGON2I);





// if (password_verify($senha, '$2y$10$drNACVhtQ9FCdl6kS5iD4OZ.T5BOu7jKtuUhWmfwXgdVBoyPvx2QC')) {
//     echo 'login correto.';
// }else{
//     echo 'login inválido.';
// }

// password_verify();


/*
PASSWORD_DEFAULT
PASSWORD_BCRYPT
PASSWORD_ARGON2I
*/
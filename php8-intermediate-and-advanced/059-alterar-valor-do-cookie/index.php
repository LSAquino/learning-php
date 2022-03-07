<?php

// COOKIES - COMO ALTERAR VALOR DO COOKIE 

/*

É importante perceber que não existe uam função prática e direta para perceber quando é que um cookie vai expirar. Da mesma forma, não existe uma forma direta para alterar um valor de um cookie sem ter que o "refazer" novamente.
*/

// criar o cookie
setcookie('minhaOpcao', 10, time() + (365*24*60*60),"/");

// alterar seu valor
// if (isset($_COOKIE['minhaOpcao'])) {
//     setcookie('minhaOpcao',1000,time() + (365*24*60*60),"/");
//     echo '<p>Cookie alterado</p>';
// }

echo '<p>terminado</p>';
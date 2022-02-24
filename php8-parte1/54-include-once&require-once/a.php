<?php

# INCLUDE_ONCE E REQUIRE_ONCE

/*
A expressão include_once funciona exatamente como o include, no entando, se o script já tiver sido anteriormente incluído, o PHP não volta a incluí-lo.
*/

include_once 'config.php';
echo 'AAA';
include_once 'config.php'; #esta linha não vai carregar novamente o mesmo script
echo 'BBB';

/*
A mesma lógica vale para o require_once,  se o ficheiro já tiver sido anteriormente incluído, o PHP não volta a incluí-lo
*/

require_once 'config.php';
echo 'CCC';
require_once 'config.php';
echo 'DDD';

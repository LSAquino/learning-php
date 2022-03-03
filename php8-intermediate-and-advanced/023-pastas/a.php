<?php

// FILESYSTEM
// CRIAR PASTAS NO PHP
// mkdir (string $pathname, int $mode = 077, bool $recursive = false, resource $context = ? ): bool

// Para criar uma pasta, usamos a função mkdir
// mkdir('pasta1');

// Criar uma pasta dentro de outra
// mdkir('pasta1/pasta2'); // só funciona se a pasta1 já existir

// criar duas pastas um dentro da outra ao mesmo tempo
// mkdir('teste/outra',0777,true);

// remover uma pasta
// rmdir('pasta1');
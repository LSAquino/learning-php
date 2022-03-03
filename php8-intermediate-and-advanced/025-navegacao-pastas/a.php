<?php

// FILESYSTEM

mkdir(dirname(__FILE__) . '/pasta1');
chdir('pasta1');
touch('ficheiro');

// -------------------------------
mkdir(dirname(__FILE__) . '/pasta1');
chdir(dirname(__FILE__) . '/pasta1');
touch('ficheiro');
chdir(dirname(__FILE__));
touch('ficheiro');

// -------------------------------
mkdir(dirname(__FILE__) . '/pasta1');
chdir('pasta1');
touch('ficheiro1');
chdir('../');
touch('ficheiro2');
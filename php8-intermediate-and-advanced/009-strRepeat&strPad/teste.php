<?php

echo '<pre>';
$valores = [100.2100,0,45790];
foreach($valores as $valor){
    echo str_pad($valor,'30','.',STR_PAD_LEFT) . PHP_EOL;
}
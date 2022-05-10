<?php

$arrayWhile = [];
while (count($arrayWhile) < 15) {
    $numero = rand(1, 15);
    if (!in_array($numero, $arrayWhile) == true) {
        $arrayWhile[] = $numero;
    };
};

var_dump($arrayWhile);

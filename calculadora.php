<?php

$numeros = [5, 10, 15, 20, 25];
$total = 0;

foreach ($numeros as $numero) {
    $total = $total + $numero;
}

echo $total;
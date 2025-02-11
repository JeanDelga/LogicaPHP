<?php

$valorReal = 100;
$moeda = [
            "USD" => 5.10,
            "EUR" => 5.50,
            "GBP" => 6.30,
            "ARS" => 0.05,
];

foreach ($moeda as $indice => $valor) {
    $valorReal = $valorReal * $valor;
    echo $indice . " = " .$valorReal . "<br>";
}


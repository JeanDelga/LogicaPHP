<?php

$frutas = ["Maça", "Banana", "Limão", "Melão", "Uva"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

$frutas[] = "Morango";

echo "<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
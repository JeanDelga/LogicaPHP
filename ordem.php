<?php

$numeros = [15, 10, 35, 20, 18, 30, 5, 40, 60, 45, 80];


/*
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

sort($numeros);
echo "<br>";

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

rsort($numeros);
echo "<br>";

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

*/


$ordem = implode(", ", $numeros);
echo $ordem;

sort($numeros);
echo "<br>";

$ordem = implode(", ", $numeros);
echo $ordem;

rsort($numeros);
echo "<br>";

$ordem = implode(", ", $numeros);
echo $ordem;






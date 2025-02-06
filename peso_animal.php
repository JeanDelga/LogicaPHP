<?php 

$peso_1 = 300;
$peso_2 = 250;
$produtor = "José";

$valor_arroba = 325.90;


$lista_abate = [
    "produtor" => "José",
    "peso_1" => 300,
    "peso_1" => 250,    
]


$peso_total_arroba = ($peso_1 + $peso_2) / 15;
$valor_total = $peso_total_arroba * $valor_arroba;


echo "<h1>Sr(a) $produtor, o valor total do seu animal é R$ " . number_format($valor_total, 2, ',', '.');
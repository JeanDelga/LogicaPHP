<?php

$nota1 = 5;
$nota2 = 5;
$nota3 = 5;
$nota4 = 5;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

$status;

if($media >= 7){
    $status = 'Aprovado';
} elseif( $media < 7 && $media >= 5) {
    $status = 'Em Reprovação';
} else {
    $status = 'Reprovado';
}

echo "Sua média foi: $media<br>";
echo "<h1>Você está $status!</h1>";



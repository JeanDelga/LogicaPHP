<?php

$temp = 29;
$status;

if($temp >= 30){
    $status = "Ensolarado";
}else{
    $status = "Nublado";
}

echo "<h1>O dia está $status!";
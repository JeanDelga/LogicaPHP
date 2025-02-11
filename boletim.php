<?php

$alunos = [
            [
            "Nome" => "Jean",
            "Materia" => "Programação",
            "Nota" => 5, 
            ],[
            "Nome" => "Laís",
            "Materia" => "Matemática",
            "Nota" => 10,     
            ],[
            "Nome" => "Edu",
            "Materia" => "Português",
            "Nota" => 6,     
            ]
];

foreach ($alunos as $aluno) {
    echo "Nome - " . $aluno["Nome"] . "<br>";
    echo "Materia - " . $aluno["Materia"] . "<br>";
    echo "Nota - " . $aluno["Nota"] . "<br>";
    if($aluno == "Nota"){
        if($aluno >= 7){
            echo "Aprovado";
        } elseif($aluno < 7 && $aluno >= 5){
            echo "Em Recuperação";
        } else {
            echo "Reprovado";
        }
    }
}

/*
foreach ($aluno as $indice => $valor) {
    echo $indice . " - " . $valor . "<br>";
    if($indice == "Nota"){
        if($valor >= 7){
            echo "Aprovado";
        } elseif($valor < 7 && $valor >= 5){
            echo "Em Recuperação";
        } else {
            echo "Reprovado";
        }
    }
}
*/

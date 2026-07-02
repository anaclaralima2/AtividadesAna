<?php
//Atividade10 
$aprovados = 0;
$reprovados = 0;
$candidato = [
    (object)["nome" => "Ana", "nota" => 50],
    (object) ["nome" => "Natanael", "nota" => 100],
    (object)["nome" => "Ana Luisa", "nota" => 90],
    (object)["nome" => "Pedro", "nota" => 70],
    (object)["nome" => "Maria", "nota" => 60]

];

foreach ($candidato as $candidato) {
    if ($candidato->nota >= 80) {
        $aprovados++;
    } else {
        $reprovados++;
    }

    echo "O total de aprovados e: $aprovados";
    echo "O total de reprovados e: $reprovados";
}
?>
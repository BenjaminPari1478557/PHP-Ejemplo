<?php
//caso 1
$numeros = array(1, 3, 5, 2, 6);
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($numeros);
echo $numeros [2]."\n";
print_r($frutas);
//caso 2
$estudiante = array(
    "dni            "=>"41558098",
    "edad           "=>27,
    "fechanacimiento"=>"2000-01-05",
    "nombres        "=>"pedro",
    "apellidos      "=>"paredes acero",
    "semestre       "=>100.50,
    "notafinal      "=>11.6
);
print_r($estudiante);
foreach ($estudiante as $key => $value) {
    echo $key. " => ".$value."\n";
}
//caso 3

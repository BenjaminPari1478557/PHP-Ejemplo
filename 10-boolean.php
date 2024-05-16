<?php
$luzencendida==true;
if($luzencendida==true){
    echo "la luz esta encendida";
}else{
    echo "la luz esta apagada";
}
//caso 2

$sintomas_covid=[
    "tos"=>true,
    "fiebre"=>true,
    "dolor"=>false,
    "perdida_olfato"=>true];

    if($sintomas_covid["tos"] && $sintomas_covid["fiebre"]){
        echo "\nEstas enfermo tienes covid. Ve al centro de salud";
    }else{
        echo "\nAun no estas con covid";
    }
?>

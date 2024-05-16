<?php
function ObtenerSaludo($parametro){
    return "Hola como estas ".$parametro."\n";

}
echo ObtenerSaludo("Benjamin");
function mostrarDatos($nombres,$apellidos,$curso,$semestre){
    $mensaje="Hola soy ".$nombres." ".$apellidos." y estoy en ".$curso." del ".$semestre;
    return $mensaje;
}
echo mostrarDatos("Benjamin","Pari","BACKEND DEVELOPER WEB","3er Semestre")."\n";

function calcular($operador,$numero,$numero2){
    if($operador=="+"){
        return $numero+$numero2;
    }
    if($operador=="-"){
        return $numero-$numero2;
    }
    if($operador=="*"){
        return $numero*$numero2;
    }
    if($operador=="/"){
        return $numero/$numero2;
    }
}
echo "El total de la suma es :".calcular("+",10,34);

?>
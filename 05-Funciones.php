<?php
function ObtenerSaludo($parametro){
    return "Hola como estas ".$parametro."<br>";

}
echo ObtenerSaludo("Benjamin");
function mostrarDatos($nombres,$apellidos,$curso,$semestre){
    $mensaje="Hola soy ".$nombres." ".$apellidos." y estoy en ".$curso." del ".$semestre;
    return $mensaje;
}
echo mostrarDatos("Benjamin","Pari","BACKEND DEVELOPER WEB","3er Semestre")
?>
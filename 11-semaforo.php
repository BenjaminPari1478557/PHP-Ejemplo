<?php

echo "Indique de que color esta el semaforo\n<rojo>=1\n<amarillo>=2\n<verde>=3\n";
$eleccion=fgets(STDIN);
if($eleccion== 1){
    echo "¡PARE! El semaforo esta en rojo";
}elseif($eleccion== 2){
    echo "¡Espera!";
}else{
    echo "El semaforo esta en verde ¡Avanze!";
}
?>
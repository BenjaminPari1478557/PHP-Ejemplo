<?php
include ("12-clase.php");
echo"******** Bienvenido a mi calculadora ********\n";
do {
echo"Seleccione la operacion\n";
echo" Sumar (Opcion 1)\n";
echo" Restar (Opcion 2)\n";
echo" Multiplicar (Opcion 3)\n";
echo" Dividir (Opcion 4)\n";
echo" Potencia (Opcion 5)\n";
echo" Raiz (Opcion 6)\n";
echo" Salir (Opcion 0)\n";

    $opcion =fgets(STDIN);
    echo "Escriba el primer numero\n";
    $numero1=fgets(STDIN);
    echo "Escriba el segundo numero\n";
    $numero2=fgets(STDIN);
    $calculadora = new Calculadora($numero1,$numero2);
    switch ($opcion) {
        case 1:
            $calculadora = new Calculadora($numero1,$numero2);
            $resultado=$calculadora->sumar();
            break;
        case 2:
            $resultado=$calculadora->restar();
            break;
        case 3:
            $resultado=$calculadora->multiplicar();
            break;
        case 4:
            $resultado=$calculadora->dividir();
            
            break;
        case 5:
            $resultado=$calculadora->potencia();
            break;
        case 6:
            $resultado=$calculadora->raiz();
            break;
        default:
            break;
    }
    if ($resultado=="Divisibilidad imposible"){
        echo "Error al dividir entre 0";
    }else{
        echo "El resultado de la operacion es : ".$resultado;
    }
    echo "\nDesea Continuar (1= Si 0= No)";
    $opcion =fgets(STDIN);
    echo "\n_____________________________________________\n";
}while($opcion!=0);
echo "Gracias por usar la calculadora";


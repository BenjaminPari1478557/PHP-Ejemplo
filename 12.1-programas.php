<?php
include ("12-clase.php");
echo"******** Bienvenido a mi calculadora ********\n";

echo"Seleccione la operacion\n";
echo" Sumar (Opcion 1)\n";
echo" Restar (Opcion 2)\n";
echo" Multiplicar (Opcion 3)\n";
echo" Dividir (Opcion 4)\n";
echo" Potencia (Opcion 5)\n";
echo" Raiz (Opcion 6)\n";
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
        echo "\n El resultado de la suma es ".$resultado;
        break;
    case 2:
        $resultado=$calculadora->restar();
        echo "\n El resultado de la restar es ".$resultado;
        break;
    case 3:
        $resultado=$calculadora->multiplicar();
        echo "\n El resultado de la suma es ".$resultado;
        break;
    case 4:
        $resultado=$calculadora->dividir();
        echo "\n El resultado de la division es ".$resultado;
        break;
    case 5:
        $resultado=$calculadora->potencia();
        echo "\n El resultado de la potencia es ".$resultado; 
        break;
    case 6:
        $resultado=$calculadora->raiz();
        echo "\n El resultado de la raiz es ".$resultado;
        break;
    default:
        break;
}

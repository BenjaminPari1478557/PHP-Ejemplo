<?php

include ("15-polimorfismo.php");
echo "Eliga la figura\n1-Triangulo\n2-Rectangulo\n3-Cuadrado\n4-Circulo\n0-Salir";
$variable=fgets(STDIN);
switch ($variable) {
    case 1:
        echo"\n________________________\n";
        echo "AREA DE TRIANGULO\n";
        echo "Ingrese la base:\n";
        $b=fgets(STDIN);
        echo "Ingrese la altura\n";
        $h=fgets(STDIN);
        $triangulo= new Triangulo($b,$h);
        $area=$triangulo->calcularArea();
        echo "El area del triangulo es: ".$area;
        break;
    case 2:
        echo"\n________________________";
        echo "\nAREA DEL RECTANGULO\n";
        echo "Ingrese la base:\n";
        $b=fgets(STDIN);
        echo "Ingrese la altura\n";
        $h=fgets(STDIN);
        $rectangulo= new Rectangulo($b,$h);
        $area=$rectangulo->calcularArea();
        echo "El area del rectangulo es: ".$area;
        break;
    case 3:
        echo"\n________________________";
        echo "\nAREA DEL CUADRADO\n";
        echo "Ingrese la base:\n";
        $b=fgets(STDIN);
        $cuadrado= new Cuadrado($b);
        $area=$cuadrado->calcularArea();
        echo "El area del cuadrado es: ".$area;
        break;
    case 4:
        echo"\n________________________";
        echo "\nAREA DEL CIRCULO\n";
        echo "Ingrese el radio:\n";
        $r=fgets(STDIN);
        $circulo= new Circulo($r);
        $area=$circulo->calcularArea();
        echo "El area del circulo es: ".$area;
        break;
    default:
        echo "aea";
        break;
}
<?php
include("14-herencia.php");
echo "EJEMOPLO DE HERENCIA CON ANIMALES\n";
$perro= new Perro("Coimita","Verde",false,"perro-ladra.mp3");
echo $perro->obtenerInformacion()."\n";
echo $perro->hacerSonido("Guauu\n");

$gato= new Gato("Pelusa","Rojo",false,"gato-miau.mp3");
echo $gato->obtenerInformacion()."\n";
echo $gato->hacerSonido("Miau\n");

$pollo= new Pollo("Claudio","Amarillo",false,"chicken_1.mp3");
echo $pollo->obtenerInformacion()."\n";
echo $pollo->hacerSonido("Pio Pio\n");
?>
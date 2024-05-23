<?php
    include("16-encapsulamiento.php");

    $guitarra = new Instrumento("gibson","acustica");
    $guitarra->setearModelos("nylon,alambre");
    echo "Datos de guitarra\n";
    echo "nombre :".$guitarra->nombre."\n";
    echo "categoria :".$guitarra->categoria."\n";
    echo "modelos :".$guitarra->mostrarModelos();

    $guitarra->nombre="yamaha";
    $guitarra->categoria="electrica";
    $guitarra->setearModelos("nylon,alambre,otros");
    echo "Datos de guitarra\n";
    echo "nombre :".$guitarra->nombre."\n";
    echo "categoria :".$guitarra->categoria."\n";
    echo "modelos :".$guitarra->mostrarModelos()."\n";
    echo "tiene cuerdas? : ".$guitarra->validarCuerdas()."\n";

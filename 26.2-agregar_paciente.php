<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id=$_POST["id"];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];

    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;
    

    $servername = "localhost";
    $username = "root";
    $password ="";    
    $dbname = "covid";    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        
        $conn->beginTransaction();
        $sql="INSERT INTO pacientes 
        (`nombres`
        , `apellidos`, `edad`
        , `talla_m`, `peso_kg`
        , `sintoma_tos`, `sintoma_fiebre`
        , `sintoma_disnea`, `sintoma_dolormuscular`
        , `sintoma_gripe`, `sintoma_presionalta`
        , `sintoma_fatiga`, `sintoma_garraspera`
        , `ultima_fecha_vacunacion`) 
        VALUES ('asd', 'asd',
         45, 25,
          25, '0',
           '1', '0', '1', '0', '0', '0', '0', '2024-06-06');";

        $conn->exec($sql);
        $conn->commit();
        echo "Fue agregado correctamente.";
    }
    catch(Exception $e) {
        echo "Error : ".$e->getMessage();
    }
    
}
?>
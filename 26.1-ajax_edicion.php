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
    $password ="pass";    
    $dbname = "covid";    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        
        $conn->beginTransaction();
        $sql="UPDATE `covid`.`pacientes` SET `nombres`='$nombre',
        `edad`=$edad,
        `talla_m`='$talla',
        `peso_kg`='$peso',
        `sintoma_tos`=$tos,
        `sintoma_fiebre`=$fiebre,
        `sintoma_disnea`=$disnea
        WHERE `id`=$id;";

        $conn->exec($sql);
        $conn->commit();
        echo "Fue editado correctamente.";
    }
    catch(Exception $e) {
        echo "Error : ".$e->getMessage();
    }
    
}
?>
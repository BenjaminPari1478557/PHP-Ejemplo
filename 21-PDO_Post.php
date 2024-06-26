<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];

    // $sexo = array_key_exists("sexo",$_POST) ? $_POST['sexo'] : "0";
    // $sexo = $sexo == "" ? "0" : $sexo;

    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;
    $dolor_muscular = array_key_exists("dolor_muscular",$_POST) ? $_POST['dolor_muscular'] : "0";
    $dolor_muscular = $dolor_muscular == "" ? "0" : $dolor_muscular;
    $gripe = array_key_exists("gripe",$_POST) ? $_POST['gripe'] : "0";
    $gripe = $gripe == "" ? "0" : $gripe;
    $Presion_alta = array_key_exists("Presion_alta",$_POST) ? $_POST['Presion_alta'] : "0";
    $Presion_alta = $Presion_alta == "" ? "0" : $Presion_alta;
    $Fatiga = array_key_exists("Fatiga",$_POST) ?  $_POST['Fatiga'] : "0";
    $Fatiga = $Fatiga == "" ? "0" : $Fatiga;
    $Garraspera = array_key_exists("Garraspera",$_POST) ? $_POST['Garraspera'] : "0";
    $Garraspera = $Garraspera == "" ? "0" : $Garraspera;
    $fecha = $_POST['fecha'];
   
    if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)) {
        echo "Todos los campos son obligatorios." ;
    }

    if($tos== 1 || $fiebre == 1 || $disnea==1 || $dolor_muscular==1 ||
    $gripe == 1 ||  $Presion_alta==1 || $Fatiga==1 ||  $Garraspera==1)  {
        $resultado = "1";
    }
    else {
        $resultado ="0";
    }
    $servername = "localhost";
    $username = "root";
    $password ="pass";    
    $dbname = "covid";    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        
        $conn->beginTransaction();
        $sql="INSERT INTO `pacientes` (`nombres`, `apellidos`,
        `edad`, `talla_m`, `peso_kg`, `sintoma_tos`,
        `sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`,
        `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`,
            `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`
            )
            VALUES ('$nombre', '$apellido', $edad, $talla, $peso, 
            '$tos', '$fiebre', '$disnea', '$dolor_muscular','$gripe'
            , '$Presion_alta', '$Fatiga', '$Garraspera', '$fecha', '$resultado'
            );";

        $conn->exec($sql);

        $sql="SELECT * FROM pacientes where nombres='$nombre'";
        $pacientes = $conn->query($sql);//edad BETWEEN 18 AND 19
    foreach ($pacientes as $row) {
        echo $row["nombres"]." ".$row["apellidos"].", EDAD : ".$row["edad"]."<br>".
        " Talla (cm): ".$row["talla_m"]."<br>".
        " Peso (kg): ".$row["peso_kg"]."<br>".
        " Tos: ".$row["sintoma_tos"]."<br>".
        " Fiebre: ".$row["sintoma_fiebre"]."<br>".
        " Fiebre: ".$row["sintoma_fiebre"]."<br>".
        " Disnea: ".$row["sintoma_disnea"]."<br>".
        " Dolor muscular: ".$row["sintoma_dolormuscular"]."<br>".
        " Gripe: ".$row["sintoma_gripe"]."<br>".
        " Presion Alta: ".$row["sintoma_presionalta"]."<br>".
        " Fatiga: ".$row["sintoma_fatiga"]."<br>".
        " Garraspera: ".$row["sintoma_garraspera"]."<br>".
        " Ultima fecha de vacunacion: ".$row["ultima_fecha_vacunacion"]."<br>";
    }     
        $conn->commit();
        echo "Fue registrado correctamente.";
    }
    catch(Exception $e) {
        echo "Error : ".$e->getMessage();
    }
    
}
?>
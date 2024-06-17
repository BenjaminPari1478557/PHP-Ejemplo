<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    try {
        $nombre=$_POST["nombre"];
        $user = "root";
        $pass = "pass";
        $host = "mysql:host=localhost;dbname=covid";

        $conn = new PDO($host, $user, $pass);
        $sql = "SELECT * FROM pacientes where nombres like '%$nombre%'";
        $consulta = $conn->query($sql);
        $resultado=[];
        foreach($consulta as $row){
            array_push($resultado,$row);
        }
        echo json_encode($resultado);
    }catch(PDOException $e) {
        echo "Error :".$e->getMessage();
    }
}

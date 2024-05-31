<?php
    function consulta($nombre,$tos,$fiebre,$disnea,$dolor){
        $base="covid";
        $user="root";
        $pass="pass";
        $host="localhost";

        $conn =new PDO("mysql:host=$host;dbname=$base",$user,$pass);
        $conn->beginTransaction();
        $sql="SELECT `id`,`nombres`,`edad`,`talla_m`,`peso_kg`,`sintoma_tos`,`sintoma_fiebre`,`sintoma_disnea`,`sintoma_dolormuscular` 
                FROM pacientes where nombres ='$nombre' || sintoma_tos ='$tos' || sintoma_fiebre ='$fiebre' || sintoma_disnea ='$disnea'
                || sintoma_dolormuscular='$dolor';";
        $consulta=$conn->query($sql);
        return $consulta;
    }
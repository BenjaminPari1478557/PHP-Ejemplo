<?php
    function consulta($nombre){
        $base="covid";
        $user="root";
        $pass="";
        $host="localhost";

        $conn =new PDO("mysql:host=$host;dbname=$base",$user,$pass);
        $conn->beginTransaction();
        $sql="SELECT `nombres`,`edad`,`talla_m`,`peso_kg`,`sintoma_tos`,`sintoma_fiebre`,`sintoma_disnea` FROM pacientes where nombres ='$nombre'";
        $consulta=$conn->query($sql);
        return $consulta;
    }
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre=$_POST["nombre"];
        $tos=$_POST["tos"];
        $fiebre=$_POST["fiebre"];
        $disnea=$_POST["disnea"];
        $dolor=$_POST["dolor"];
        header("Location: 22-lista_PDO.php?consulta=1&nombre=$nombre&tos=$tos&fiebre=$fiebre&disnea=$disnea&dolor=$dolor");
        
        exit();
    }
?>
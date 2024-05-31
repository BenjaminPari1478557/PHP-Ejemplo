<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
</head>
<body>
    
    <center><h1>Busqueda de Pacientes</h1>
    </center>
    <form action="22.1-consulta.php" method="POST">
    <input name="nombre"type="text" placeholder="Escribe aqui" /><br>
    <input type="checkbox" name="tos" value="1"><label id="tos" name="tos">Tos</label>
    <input type="checkbox" name="fiebre" value="1"><label id="fiebre" name="fiebre">Fiebre</label>
    <input type="checkbox" name="disnea" value="1"><label id="disnea" name="disnea">Disnea</label>
    <input type="checkbox" name="dolor" value="1"><label id="dolor" name="dolor">Dolor muscular</label>
    <button type="submit">Buscar</button>
    <table style="border: 1px solid black;">
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Dolor muscular</td>
            <td>Acciones</td>
        </tr>
        <?php         
            include ("22.2-select.php");
            if(isset($_GET["consulta"]) ) {
                $pacientes=consulta($_GET["nombre"],$_GET["tos"],$_GET["fiebre"],$_GET["disnea"],$_GET["dolor"]);
                    foreach ($pacientes as $row) {
                        $id=$row["id"];
                        $nombre=$row["nombres"];
                        echo "<tr>";
                        echo "<td>".$row["nombres"]."</td>";
                        echo "<td>".$row["edad"]."</td>";
                        echo "<td>".$row["talla_m"]."</td>";
                        echo "<td>".$row["peso_kg"]."</td>";
                        echo "<td>".($row["sintoma_tos"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["sintoma_fiebre"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["sintoma_disnea"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["sintoma_dolormuscular"]==1 ? "Si" : "No")."</td";
                        echo '<td> <a href="23-edicion_PDO.php?id='.$id.'&nombre='.$nombre.'"><button type="button">Editar</button></a><button>Eliminar</button></td>';
                        echo "</tr>";
                    }    
            }
        ?>        
    </table>
    </form>
</body>
</html>

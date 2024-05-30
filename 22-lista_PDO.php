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
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
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
            <td>Acciones</td>
        </tr>
        <?php         
            include ("22.2-select.php");
            if(isset($_GET["consulta"]) ) {
                echo $_GET["nombre"];
                $pacientes=consulta($_GET["nombre"]);
                    foreach ($pacientes as $row) {
                        echo "<tr>";
                        echo "<td>".$row["nombres"]."</td>";
                        echo "<td>".$row["edad"]."</td>";
                        echo "<td>".$row["talla_m"]."</td>";
                        echo "<td>".$row["peso_kg"]."</td>";
                        echo "<td>".($row["sintoma_tos"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["sintoma_fiebre"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["sintoma_disnea"]==1 ? "Si" : "No")."</td>";
                        echo '<td> <a href="20-Registro_Paciente.php"><button type="button">Editar</button></a><button>Eliminar</button></td><\a>';
                        echo "</tr>";
                    }    
            }
        ?>        
    </table>
    </form>
</body>
</html>

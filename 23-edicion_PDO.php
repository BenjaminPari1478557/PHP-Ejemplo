<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Edicion de Paciente</title>
</head>
<body>
    <h1>Edicion de Paciente</h1>
    <form id="formulario" action="23.1-actualizacion_PDO.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>"> 
        <label for ="nombre">Nombres:</label> 
        <input value="<?php echo $_GET["nombre"] ?>" type="text" id="nombre" name="nombre" required><br>
        <label for= "apellido">Apellidos:</label>
        <input type ="text" id="apellido" name="apellido"><br>
        <label for="edad">Edad :</label>
        <input type="text" id="edad" name="edad" required /><br>
        <label for="talla">Talla(cm):</label>
        <input type="text" id="talla" name="talla" required /><br>
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso"><br>
        <!-- <label for="sexo">Sexo :</label> -->
        <!-- <select name="sexo" id="sexo">
            <option value="1">1- Hombre</option>
            <option value="2">2- Mujer</option>
            <option value="0">0- Indefinido</option>
        </select><br> -->
        <h2><u>Sintomas</u></h2>
        <input type="checkbox" name="tos" id="tos" value="1">
        <label for="tos">Tos</label><br>
        <input type="checkbox" name="fiebre" id="fiebre" value="1">
        <label for="fiebre">Fiebre</label><br>
        <input type="checkbox" name="disnea" id="disnea" value="1">
        <label for="disnea">Disnea</label><br>
        <input type="checkbox" id = dolor_muscular name ="dolor_muscular" value="1">
        <label for="dolor_muscular">Dolor muscular</label><br>
        <input type="checkbox" id="gripe" name="gripe" value="1">
        <label for="gripe">Gripe</label><br>
        <input type="checkbox" id="Presion_alta" name ="Presion_alta" value="1">
        <label for="Presion_alta">Presion Alta</label><br>    
        <input type="checkbox" id="Fatiga" name="Fatiga" value="1">
        <label for="Fatiga">Fatiga</label><br>
        <input type="checkbox" id="Garraspera" name="Garraspera" value="1">
        <label for="Garraspera">Garraspera</label><br>
        <label for="fecha">**Fecha de vacunacion:**</label>
        <input type="date" id="fecha" name="fecha">
        <div class="Botones">
            <br>
            <button type="submit">Editar</button>
            <button>Cancelar</button>
        </div>
    </form>    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Busqueda de Pacientes</h1>
    </center>
    <!-- <form action="22.1-consulta.php" method="POST"> -->
    <input id="nombre" name="nombre"type="text" placeholder="Escribe aqui" /><br>
    <input type="checkbox" name="tos" value="1"><label id="tos" name="tos">Tos</label>
    <input type="checkbox" name="fiebre" value="1"><label id="fiebre" name="fiebre">Fiebre</label>
    <input type="checkbox" name="disnea" value="1"><label id="disnea" name="disnea">Disnea</label>
    <input type="checkbox" name="dolor" value="1"><label id="dolor" name="dolor">Dolor muscular</label>
    <button type="button" onclick="buscarPacientes();">Buscar</button>
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
        <script src="25.1-ajax.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>
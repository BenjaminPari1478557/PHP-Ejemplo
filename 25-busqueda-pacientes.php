<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <center><h1>Busqueda de Pacientes</h1></center>
    <!-- <form action="22.1-consulta-pdo.php" method="POST"> -->
    <!-- checked="true" -->
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <button type="button" class="btn btn-primary" onclick="buscarPacientes();">Buscar</button>

    

    <table style="border: 1px solid black;" id="tabla">
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
    </table>
    <!-- </form> -->
    <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="25.1-ajax.js"></script>
 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        Nuevo Paciente
    </button>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type='hidden' id='id_paciente'>
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre2" name="nombre2"/>
                    <label for="name" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="edad2" name="nombre2"/>
                    <label for="name" class="form-label">Talla:</label>
                    <input type="text" class="form-control" id="talla2" name="nombre2"/>
                    <label for="name" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso2" name="nombre2"/>
                    <br>
                    Sintomas
                    <br>
                    <input type="checkbox" id="tos2" <?php  ?> name="tos2" value="1">
                    <label id="tos" class="form-label" name="tos">Tos</label><br>
                    <input type="checkbox" id="fiebre2" name="fiebre2" value="1">
                    <label id="fiebre" class="form-label" name="fiebre">  Fiebre</label><br>
                    <input type="checkbox" id="disnea2" name="disnea2" value="1">
                    <label id="disnea" class="form-label" name="disnea">  Disnea</label><br>
                </div>
                <button type="button" class="btn btn-primary" onclick="editarPacientes();">Guardar</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type='hidden' id='id_paciente'>
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre2" name="nombre2"/>
                    <label for="name" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="edad2" name="nombre2"/>
                    <label for="name" class="form-label">Talla:</label>
                    <input type="text" class="form-control" id="talla2" name="nombre2"/>
                    <label for="name" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso2" name="nombre2"/>
                    <br>
                    Sintomas
                    <br>
                    <input type="checkbox" id="tos2" <?php  ?> name="tos2" value="1">
                    <label id="tos" class="form-label" name="tos">Tos</label><br>
                    <input type="checkbox" id="fiebre2" name="fiebre2" value="1">
                    <label id="fiebre" class="form-label" name="fiebre">  Fiebre</label><br>
                    <input type="checkbox" id="disnea2" name="disnea2" value="1">
                    <label id="disnea" class="form-label" name="disnea">  Disnea</label><br>
                </div>
                <button type="button" class="btn btn-primary" onclick="editarPacientes();">NuevoPaciente</button>
            </div>
        </div>
    </div>
</body>
</html>
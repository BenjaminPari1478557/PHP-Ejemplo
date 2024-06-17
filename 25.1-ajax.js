function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando....");
    let datos = {
        nombre: $nombre
    }
    $.ajax({
        url: "26-ajax_PDO.php",
        type: "post",
        data: datos,
        success: function (result) {
            //console.log(result)   ;
            // debugger;
            console.log(result);
            const pacientes = $.parseJSON(result);
            pacientes.forEach(item => {
                agregarFilas("#tabla", item);
            });
        }
    })
    return;
} 
function editarPacientes() {
    const $nombre = $("#nombre2").val();
    const $edad = $("#edad2").val();
    const $talla = $("#talla2").val();
    const $peso = $("#peso2").val();

    var tos=document.getElementById("tos2");
    var $tos= $("#tos2").val();
    if (tos.checked){
        $tos= $("#tos2").val();
    }else{
        $tos=0
    }

    var fiebre=document.getElementById("fiebre2");
    var $fiebre= $("#fiebre2").val();
    if (fiebre.checked){
        $fiebre= $("#fiebre2").val();
    }else{
        $fiebre=0
    }

    var disnea=document.getElementById("disnea2");
    var $disnea= $("#disnea2").val();
    if (disnea.checked){
        var $disnea= $("#disnea2").val();
    }else{
        $disnea=0
    }

    const $id=$("#id_paciente").val();

        let datos = {
            nombre: $nombre,
            edad:$edad,
            talla:$talla,
            peso:$peso,
            tos:$tos,
            fiebre:$fiebre,
            disnea:$disnea,
            id:$id
        }
        $.ajax({
            url: "26.1-ajax_edicion.php",
            type: "post",
            data: datos,
            success: alert ("Se edito correctamente el paciente")
            
        })
        return;
}
function agregarFilas(id, paciente) {
    //Explicacion rara para no caer en el problema de las comillas(Conflicto con la cadena de /paciente/ que llega de la 
    // funcion buscarPacientes())
    // Primero se crea la constante pacienteStr y de lo que venia como objeto JavaScript lo tranforma en JSON de nuevo
    // Luego se almacena en un atributo de datos : data-paciente| 
    // El atributo "data" se encarga de manejar los datos no importa haya conflicto de comillas puesto que el mismo navegador se encarga
    // y en la funcion editar(this) el this de frente agarra todos los atributos o propiedades del elemento HTML
    // y luego el javascript puede acceder mejor a ellos ya con el nombre cambiado al seleccionado
    // en este caso el editar(this) se tranforma en el editar (result) y ya con el result podemos manejar todas las propiedades del HTML
    // 
    const pacienteStr = JSON.stringify(paciente);
    const html =
        "<tr>" +
        "<td>" + paciente.nombres + "</td>" +
        "<td>" + paciente.edad + "</td>" +
        "<td>" + paciente.talla_m + "</td>" +
        "<td>" + paciente.peso_kg + "</td>" +
        "<td>" + paciente.sintoma_tos + "</td>" +
        "<td>" + paciente.sintoma_fiebre + "</td>" +
        "<td>" + paciente.sintoma_disnea + "</td>" +
        "<td><button type='button' class='btn btn-primary' data-paciente='" + pacienteStr + "' onclick='editar(this);'>Editar</button></td>" +
        "</tr>";
    $(id + " tr:last").after(html);
}

function editar(result) {
    $('#exampleModal').modal('show');
    const pacientes = $.parseJSON(result.getAttribute('data-paciente'));
    $("#id_paciente").val(pacientes.id);
    $("#nombre2").val(pacientes.nombres);
    $("#edad2").val(pacientes.edad);
    $("#talla2").val(pacientes.talla_m);
    $("#peso2").val(pacientes.peso_kg);
    if (pacientes.sintoma_tos == 1) {
        $('#tos2').prop('checked', true);
      } else {
        $('#tos2').prop('checked', false);
      }
      if (pacientes.sintoma_fiebre == 1) {
        $('#fiebre2').prop('checked', true);
      } else {
        $('#fiebre2').prop('checked', false);
      }
      if (pacientes.sintoma_disnea == 1) {
        $('#disnea2').prop('checked', true);
      } else {
        $('#disnea2').prop('checked', false);
      }

}

function nuevoPaciente(){
    const $nombre = $("#nombre3").val();
    const $edad = $("#edad3").val();
    const $talla = $("#talla3").val();
    const $peso = $("#peso3").val();
    const $tos = $("#tos3").val();
    const $fiebre = $("#fiebre3").val();
    const $disnea = $("#disnea3").val();
    let datos = {
        nombre: $nombre,
        edad:$edad,
        talla:$talla,
        peso:$peso,
        tos:$tos,
        fiebre:$fiebre,
        disnea:$disnea,
    }
    $.ajax({
        url: "26.2-agregar_paciente.php",
        type: "post",
        data: datos,
        success: alert ("Se agrego correctamente el paciente")
        
    })
    return;
}
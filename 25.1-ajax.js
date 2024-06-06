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
    const $tos = $("#tos2").val();
    const $fiebre = $("#fiebre2").val();
    const $disnea = $("#disnea2").val();
    const $id=$("#id_paciente").val();

    //alert("Buscando....");
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
    const html =
        "<tr>" +
        "<td>" + paciente.nombres + "</td>" +
        "<td>" + paciente.edad + "</td>" +
        "<td>" + paciente.talla_m + "</td>" +
        "<td>" + paciente.peso_kg + "</td>" +
        "<td>" + paciente.sintoma_tos + "</td>" +
        "<td>" + paciente.sintoma_fiebre + "</td>" +
        "<td>" + paciente.sintoma_disnea + "</td>" +
        "<td><button type='button' class='btn btn-primary' onclick=editar('"+JSON.stringify(paciente)+"');>Editar</button></td>" +
        "</tr>";
    $(id + " tr:last").after(html);

}

function editar(result) {
    $('#exampleModal').modal('show');
    const pacientes = $.parseJSON(result);
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
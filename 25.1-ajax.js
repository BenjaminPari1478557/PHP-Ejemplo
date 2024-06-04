function buscarPacientes(){
    const $nombre=$("#nombre").val();
    // alert("Buscando...."+nombre);
    let datos={
        nombre: $nombre
    }
    $.ajax({
        url:"26-ajax_PDO.php",
        type:"post",
        data:datos,
        success:function(arg){
            console.log(arg);
        }
    })
    return;
}
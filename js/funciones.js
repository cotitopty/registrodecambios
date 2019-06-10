function agregardatos(tipo, objeto, solicitado_por, causa_cambio, autorizado_por, responsable, certificado_por, fecha_cambio, departamento) {

    cadena = "tipo=" + tipo +
        "&objeto=" + objeto +
        "&solicitado_por=" + solicitado_por +
        "&causa_cambio=" + causa_cambio +
        "&autorizado_por=" + autorizado_por +
        "&responsable=" + responsable +
        "&certificado_por=" + certificado_por +
        "&fecha_cambio=" + fecha_cambio +
        "&departamento=" + departamento;
    if (tipo.length == "" || solicitado_por.length == "" || causa_cambio.length == "" || autorizado_por.length == "" ||
        responsable.length == "" || certificado_por.length == "" || fecha_cambio.length == "" || fdepartamento.length == "") {
        alertify.error("Campos vacios debes rellenarlos");
        return false;
    }

    $.ajax({
        type: "POST",
        url: "php/agregarDatos.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaform(datos) {
    //llena los datos del modal edicion
    d = datos.split('||');

    $('#idu').val(d[0]);
    $('#tipou').val(d[1]);
    $('#objetou').val(d[2]);
    $('#solicitado_poru').val(d[3]);
    $('#causa_cambiou').val(d[4]);
    $('#autorizado_poru').val(d[5]);
    $('#responsableu').val(d[6]);
    $('#certificado_poru').val(d[7]);
    $('#fecha_cambiou').val(d[8]);
    $('#departamentou').val(d[9]);

}

function actualizaDatos() {
    //regisra los cambios

    id = $('#idu').val();
    tipo = $('#tipou').val();
    objeto = $('#objetou').val();
    solicitado_por = $('#solicitado_poru').val();
    causa_cambio = $('#causa_cambiou').val();
    autorizado_por = $('#autorizado_poru').val();
    responsable = $('#responsableu').val();
    certificado_por = $('#certificado_poru').val();
    fecha_cambio = $('#fecha_cambiou').val();
    departamento = $('#departamentou').val();

    cadena = "id=" + id +
        "&tipo=" + tipo +
        "&objeto=" + objeto +
        "&solicitado_por=" + solicitado_por +
        "&causa_cambio=" + causa_cambio +
        "&autorizado_por=" + autorizado_por +
        "&responsable=" + responsable +
        "&certificado_por=" + certificado_por +
        "&fecha_cambio=" + fecha_cambio +
        "&departamento=" + departamento;

    $.ajax({
        type: "POST",
        url: "php/actualizaDatos.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function preguntarSiNo(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
        function() { eliminarDatos(id) },
        function() { alertify.error('Se cancelo') });
}

function eliminarDatos(id) {

    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "php/eliminarDatos.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Registro de Cambios</title>
  <!-- boostrap CSS-->
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <!-- alertify CSS-->
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <!-- datatable CSS-->
	<link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap.min.css">
  <!-- datapicker CSS-->
  <link  rel="stylesheet" type="text/css" href="librerias/jqueryui/jquery-ui.min.css">
  <!-- favicon -->
	<link rel="icon" type="image/vnd.microsoft.icon" href="img/ico.ico">
  <!-- jquery JS-->
  <script src="librerias/jquery-3.2.1.min.js"></script>
  <!-- funciones JS-->
  <script src="js/funciones.js"></script>
  <!-- boostrap JS-->
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <!-- alertify JS-->
  <script src="librerias/alertifyjs/alertify.js"></script>
  <!-- datatable JS-->
  <script src="librerias/datatable/jquery.dataTables.min.js"></script>
  <script src="librerias/datatable/dataTables.bootstrap.min.js"></script>
  <script src="librerias/datatable/buttons/dataTables.buttons.min.js"></script>
  <script src="librerias/datatable/buttons/jszip.min.js"></script>
  <script src="librerias/datatable/buttons/pdfmake.min.js"></script>
  <script src="librerias/datatable/buttons/vfs_fonts.js"></script>
  <script src="librerias/datatable/buttons/buttons.html5.min.js"></script>
  <!-- datapicker JS-->
  <script src="librerias/jqueryui/jquery-ui.min.js"></script>
</head>
<body>
	<div class="container">
		<div id="tabla"></div>
	</div>
	<!-- Modal para registros nuevos -->
  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar datos</h4>
          </div>
            <div class="modal-body">       
            <div class="form-row">
                   <div class="form-group col-md-4">
                          <label>tipo</label>
                          <select type="text" name="" id="tipo" class="form-control">
                            <option>--------</option>
                            <option value="Tipo1">Tipo1</option>
                            <option value="Procedimientos">Procedimientos</option>
                          </select>
                        </div>
                          <div class="form-group col-md-4">     
                            <label>objeto</label>
                            <input type="text" name="" id="objeto" class="form-control" placeholder="Nombre del Objeto">
                          </div>  
                        <div class="form-group col-md-4">
                          <label>departamento</label>
                          <select type="text" name="" id="departamento" class="form-control">
                            <option>--------</option>
                            <option value="departamento1">departamento1</option>
                            <option value="departamento2">departamento2</option>
                          </select>
                        </div>
                  </div>
                  <div class="form-row">   
                        <div class="form-group col-md-4">
                            <label>solicitado_por</label>
                                <select type="text" name="" id="solicitado_por" class="form-control">
                                    <option>--------</option>
                                    <option value="solicitador1">solicitador1</option>
                                    <option value="solicitador2">solicitador2</option>
                                </select> 
                        </div>
                        <div class="form-group col-md-4">  
                          <label>autorizado_por</label>
                          <select type="text" name="" id="autorizado_por" class="form-control">
                            <option>--------</option>
                            <option value="autoriza1">autoriza1</option>
                            <option value="autoriza2">autoriza2</option>
                          </select>
                        </div>  
                        <div class="form-group col-md-4">   
                          <label>responsable</label>
                          <select type="text" name="" id="responsable" class="form-control">
                            <option>--------</option>
                            <option value="responsable1">responsable1</option>
                            <option value="responsable2">responsable2</option>
                          </select> 
                        </div>  
                  </div>
                  <div class="form-row">    
                    <div class="form-group col-sm-6">
                      <label>certificado_por</label>
                      <select type="text" name="" id="certificado_por" class="form-control">
                        <option>--------</option>
                        <option value="certifica1">certifica1</option>
                        <option value="certifica2">certifica2</option>
                      </select> 
                    </div>  
                    <div class='form-group col-sm-6' >
                      <label>fecha_cambio</label>
                      <input type='text' id="fecha_cambio"class="form-control" data-date-format='yyyy-mm-dd'/>
                     </div>                 
                  </div> 
                        <label>causa_cambio</label>
                        <input type="text" name="" id="causa_cambio" class="form-control" placeholder="Describa la causa del cambio">
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
            </div>
        </div>
    </div>
  </div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
        </div>
        <div class="modal-body"> 
            <input type="text" hidden="" id="idu" name="">
            <div class="form-row">
                   <div class="form-group col-md-4">
                          <label>tipo</label>
                          <select type="text" name="" id="tipou" class="form-control">
                            <option>--------</option>
                            <option value="Tipo1">Tipo1</option>
                            <option value="Procedimientos">Procedimientos</option>
                          </select>
                        </div>
                          <div class="form-group col-md-4">     
                            <label>objeto</label>
                            <input type="text" name="" id="objetou" class="form-control" placeholder="Nombre del Objeto">
                          </div>  
                        <div class="form-group col-md-4">
                          <label>departamento</label>
                          <select type="text" name="" id="departamentou" class="form-control">
                            <option>--------</option>
                            <option value="departamento1">departamento1</option>
                            <option value="departamento2">departamento2</option>
                          </select>
                        </div>
                  </div>
                  <div class="form-row">   
                        <div class="form-group col-md-4">
                            <label>solicitado_por</label>
                                <select type="text" name="" id="solicitado_poru" class="form-control">
                                    <option>--------</option>
                                    <option value="solicitador1">solicitador1</option>
                                    <option value="solicitador2">solicitador2</option>
                                </select> 
                        </div>
                        <div class="form-group col-md-4">  
                          <label>autorizado_por</label>
                          <select type="text" name="" id="autorizado_poru" class="form-control">
                            <option>--------</option>
                            <option value="autoriza1">autoriza1</option>
                            <option value="autoriza2">autoriza2</option>
                          </select>
                        </div>  
                        <div class="form-group col-md-4">   
                          <label>responsable</label>
                          <select type="text" name="" id="responsableu" class="form-control">
                            <option>--------</option>
                            <option value="responsable1">responsable1</option>
                            <option value="responsable2">responsable2</option>
                          </select> 
                        </div>  
                  </div>
                  <div class="form-row">    
                    <div class="form-group col-sm-6">
                      <label>certificado_por</label>
                      <select type="text" name="" id="certificado_poru" class="form-control">
                        <option>--------</option>
                        <option value="certifica1">certifica1</option>
                        <option value="certifica2">certifica2</option>
                      </select> 
                    </div>  
                    <div class='form-group col-sm-6' >
                      <label>fecha_cambio</label>
                      <input type='text' id="fecha_cambiou"class="form-control" data-date-format='yyyy-mm-dd'/>
                     </div>                 
                  </div> 
                        <label>causa_cambio</label>
                        <input type="text" name="" id="causa_cambiou" class="form-control" placeholder="Describa la causa del cambio">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button> 
        </div>
      </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          tipo=$('#tipo').val();
          objeto=$('#objeto').val();
          solicitado_por=$('#solicitado_por').val();
          causa_cambio=$('#causa_cambio').val();
          autorizado_por=$('#autorizado_por').val();
          responsable=$('#responsable').val();
          certificado_por=$('#certificado_por').val();
          fecha_cambio=$('#fecha_cambio').val();
          departamento=$('#departamento').val();
          agregardatos(tipo,objeto,solicitado_por,causa_cambio,autorizado_por,responsable,certificado_por,fecha_cambio,departamento);
        });
        $('#actualizadatos').click(function(){
          actualizaDatos();
        });
    });
</script>

<script> 
$('#modalNuevo').on('hidden.bs.modal', function() {
$(this)
.find("input,textarea,select")
.val('')
.end()
.find("input[type=checkbox], input[type=radio]")
.prop("checked", "")
.end();
})
</script>

<script>
  $( function() {
    $("#fecha_cambio").datepicker();
  } );
</script>

<script>
  $( function() {
    $("#fecha_cambiou").datepicker();
  } );
</script>
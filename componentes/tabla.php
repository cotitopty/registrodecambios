
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Registro de datos</h2>
		<table id="datable" class="table table-hover table-condensed table-bordered" id="cambios">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
		<thead>
			<tr>
			    <td>ID</td>
				<td>Tipo</td>
				<td>Objeto</td>
				<td>Solicitado por</td>
				<td>Causa Cambio</td>
				<td>Autorizado Por</td>
				<td>Responsable</td>
				<td>Certificado Por</td>
				<td>Fecha Cambio</td>
				<td>Departamento</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
         </thead>
         <tbody>    
			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,tipo,objeto,solicitado_por,causa_cambio,autorizado_por,responsable,certificado_por,fecha_cambio,departamento 
						from tabla where id='$idp'";
					}else{
						$sql="SELECT id,tipo,objeto,solicitado_por,causa_cambio,autorizado_por,responsable,certificado_por,fecha_cambio,departamento 
						from tabla";
					}
				}else{
					$sql="SELECT id,tipo,objeto,solicitado_por,causa_cambio,autorizado_por,responsable,certificado_por,fecha_cambio,departamento 
						from tabla";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||".
						   $ver[8]."||".
						   $ver[9];
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[9] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</tbody>	 
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('#datable').DataTable({
        dom: 'Blfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
		language:{
					"sProcessing":     "Procesando...",
					"sLengthMenu":     "Mostrar _MENU_ registros",
					"sZeroRecords":    "No se encontraron resultados",
					"sEmptyTable":     "Ningún dato disponible en esta tabla",
					"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					"sInfoPostFix":    "",
					"sSearch":         "Buscar:",
					"sUrl":            "",
					"sInfoThousands":  ",",
					"sLoadingRecords": "Cargando...",
					"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
					},
					"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
					}
				}
	});
} );
</script>

<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$tipo=$_POST['tipo'];
	$objeto=$_POST['objeto'];
	$solicitado_por=$_POST['solicitado_por'];
	$causa_cambio=$_POST['causa_cambio'];
	$autorizado_por=$_POST['autorizado_por'];
	$responsable=$_POST['responsable'];
	$certificado_por=$_POST['certificado_por'];
	$fecha_cambio=$_POST['fecha_cambio'];
	$departamento=$_POST['departamento'];

	$sql="UPDATE tabla set tipo='$tipo',
								objeto='$objeto',
								solicitado_por='$solicitado_por',
								causa_cambio='$causa_cambio',
								autorizado_por='$autorizado_por',
								responsable='$responsable',
								certificado_por='$certificado_por',
								fecha_cambio='$fecha_cambio',
								departamento='$departamento'
				where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>

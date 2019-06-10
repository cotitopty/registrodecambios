<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$tipo=$_POST['tipo'];
	$objeto=$_POST['objeto'];
	$solicitado_por=$_POST['solicitado_por'];
	$causa_cambio=$_POST['causa_cambio'];
	$autorizado_por=$_POST['autorizado_por'];
	$responsable=$_POST['responsable'];
	$certificado_por=$_POST['certificado_por'];
	$fecha_cambio=$_POST['fecha_cambio'];
	$departamento=$_POST['departamento'];

	$sql="INSERT into tabla (tipo,objeto,solicitado_por,causa_cambio,autorizado_por,responsable,certificado_por,fecha_cambio,departamento)
								values ('$tipo','$objeto','$solicitado_por','$causa_cambio','$autorizado_por','$responsable','$certificado_por','$fecha_cambio','$departamento')";
	echo $result=mysqli_query($conexion,$sql);

 ?>

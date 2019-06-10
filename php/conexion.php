

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="";
			$password="";
			$bd="";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>

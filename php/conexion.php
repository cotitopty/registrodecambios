

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="itecsa+1024";
			$bd="bitacora";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>
<?php 


	require_once '../clases/Conexion.php';
	require_once '../clases/Movimiento.php';

	$obj=new Movimiento();


	$datos=array($_POST['fechaentrada'],
					$_POST['fechasalida'],
					$_POST['equipo'],
					$_POST['observaciones'],
					$_POST['empleado'],
					$_POST['estado'],
					$_POST['ot'],
					$_POST['tipodagno']
					);

			 $obj->IngresarMovimiento($datos);

			 if($obj){

		 	echo "Datos Ingresados Correctamente";

		 }else{
		 	echo "Error al ingresar los datos";
		 }

		 echo "<br>";
		 echo "<a href='../vista/tablaMovimiento/tablaMovimiento.php'>Regresar</a>";





 ?>
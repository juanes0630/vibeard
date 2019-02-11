<?php 
	require_once '../clases/Conexion.php';
	require_once '../clases/Movimiento.php';

	$obj=new Movimiento();

	$codigo=$_GET['codigo'];

	$obj->EliminarMovimiento($codigo);
	

	if($obj){
		echo "Registro Eliminado";
	}else{
		echo "Error al eliminar el registro".mysqli_error($conexion);
	}

	echo "<br>";
	echo "<a href='../vista/tablaMovimiento/tablaMovimiento.php'>Regresar</a>";
 ?>
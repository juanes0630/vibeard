<?php 

	require_once '../Clases/Conexion.php';
	require_once '../Clases/Faq.php';

	$obj=new Ingresardatos();


	$datos=array($_POST['codigo'],
					$_POST['nombre'],
					$_POST['descripcion'],
					
					);

			 $obj->Ingresardato($datos);

			 if($obj){

		 	echo " <br><br><br><br><br><br><br><br><br><br><br><br><br> <div align='center' style='color:white; vertical-align:middle; font-size:4vw;'>Datos Ingresados Correctamente</div>";

		 }else{
		 	echo "Error al ingresar los datos";
		 }

		 echo "<br>";
		 echo "<a href='../vista/tablas/tablafaq.php'>Regresar</a>";








 ?>
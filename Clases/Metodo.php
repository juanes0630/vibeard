<?php 

class metodo{
	public function AgregarDatosMetodo($datos){

		$c=new Conectar();
		$conexion=$c->conexion();

		$sql=("INSERT INTO tbl_metodo VALUES ($datos[0],'$datos[1]')";

		return mysqli_query($conexion,$sql);

		mysqli_close($conexion);

	}

}

 ?>
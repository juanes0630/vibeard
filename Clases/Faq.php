
<?php 
class Ingresardatos{

	public function Ingresardato($datos){

		$c=new conectar();
		$conexion=$c->conexion();

		$sql="INSERT INTO tbl_faq values ($datos[0], '$datos[1]', '$datos[2]')";

		$result=mysqli_query($conexion,$sql);

		return $result;

		$c->Desconectar();

	}
}







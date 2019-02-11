<?php 
/**
 * 
 */
class SolicitudRecepcion{
	
	public function agregardatos_Solicitudrecepcion($datos){
		$c=new conectar();
		$conexion=$c->conexion();
		$sql=("INSERT INTO tbl_solicitudrecepcion(codigo,usuario,tiposolicitud,numeroCotizacion,exonerado,cliente,observaciones,fecharecepcion)
		VALUES (null,'documento','$datos[1]','$datos[0]','$datos[2]'");

		return mysqli_query($conexion,$sql);

		cerrarConexion();
		
	}
	public function traercliente($docid/*Docid se recibe de el controlador que en este caso es el data del frm que se obtubo mediante ajax*/){
		/*instanciar la conexion*/
		$c=new conectar();
		$conexion=$c->conexion();
		/*crear la consulta sql */
		$sql="SELECT C.documento,C.nombre,C.apellido,TC.nombre,C.telefono,C.infoAdicional,C.direccion,C.email FROM `tbl_cliente` as C inner join `tbl_tipoCliente` as TC ON C.tipoCliente=TC.codigo where C.documento=$docid";
		/*enviar la consulta a la BD*/
		$ver=mysqli_query($conexion,$sql);
		$result=mysqli_fetch_rows($ver);
		/*convertir clienter en vector asociativo*/

		$dato=array(
			'docid'=>$result[0],
			'nombres'=>$result[1],
			'apellidos'=>$result[2],
			'tipocliente'=>$result[3],
			'telefono'=>$result[4],
			'direccion'=>$result[6],
			'email'=>$result[7]
		);
		return $dato;
		cerrarConexion();

	}
}
 ?>
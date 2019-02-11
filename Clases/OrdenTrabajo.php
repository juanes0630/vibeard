<?php 


class ordenTrabajo{

	public function AgregarDatosOrdenT($datos){

		$c=new Conectar();
		$conexion=$c->conexion();

		$sql="INSERT INTO tbl_ordenDeTrabajo (consecutivo,
												usuarioEntrega,
												laboratorista,
												consecutivoSolicitudRecepcion,
												fechaOrdenTrabajo) 
		VALUES (null,'1038414938','$datos[1]','$datos[0]','$datos[2]')";

		return mysqli_query($conexion,$sql);

		cerrarConexion();

	}
	public function AgregarDatosMuestraOrden($datos){

		$c=new Conectar();
		$conexion=$c->conexion();
		$fechaHoraEntrega=date('Y-m-d H:i:s');
		$OrdenTrabajo=("SELECT consecutivo from tbl_ordenDeTrabajo ORDER BY consecutivo DESC LIMIT 1, 1");
		$idOrdenTrabajo=(mysqli_query($conexion,$OrdenTrabajo));

		$sql="INSERT INTO tbl_muestraOrdenTrabajo (consecutivo,
													consecutivoOrdenTrabajo,
													codigoMuestra,
													fechaHoraEntrega,
													areaAnalisis,
													analisisEnsayo,
													analisisMetodo) 
		VALUES (null,'$datos[4]','$datos[0]','$fechaHoraEntrega','$datos[1]','$datos[2]','$datos[3]')";

		return mysqli_query($conexion,$sql);

		cerrarConexion();

	}

	public function obtenDatosOT($id){
		$c=new Conectar();
		$conexion=$c->conexion();

		$sql="SELECT mo.codigoMuestra, mo.fechaHoraEntrega, mo.areaAnalisis, mo.analisisEnsayo, mo.analisisMetodo, u.documento,  o.consecutivoSolicitudRecepcion,o.fechaOrdenTrabajo, mo.consecutivo FROM tbl_ordenDeTrabajo as o inner join tbl_usuario as u
			 on u.documento=o.laboratorista 
			inner join tbl_muestraOrdenTrabajo as mo on o.consecutivo=mo.consecutivoOrdenTrabajo 
			where u.tipoUsuario=3 and mo.consecutivo='$id'";

			$ver=mysqli_query($conexion,$sql);
			$result=mysqli_fetch_array($ver);

		$dato=array(
					'muestra'=>$result[0],
					'fechaE'=>$result[1],
					'area'=>$result[2],
					'ensayo'=>$result[3],
					'metodo'=>$result[4],
					'documento'=>$result[5],
					'codigo_solicitud'=>$result[6],
					'fechaO'=>$result[7],
					'consecutivo'=>$result[8]
					);

		return $dato;

		cerrarConexion();

	}

	public function actualizaDatosMO($datos){
		$c=new Conectar();
		$conexion=$c->conexion();

		$sql="UPDATE tbl_muestraOrdenTrabajo set codigoMuestra='$datos[3]',areaAnalisis='$datos[4]',analisisEnsayo='$datos[2]',analisisMetodo='$datos[5]'
		where consecutivo='$datos[6]'";

		return mysqli_query($conexion,$sql);

		cerrarConexion();


	}

	public function eliminaDatosMO($id){
		$c=new Conectar();
		$conexion=$c->conexion();

		$sql="DELETE from tbl_muestraOrdenTrabajo
				where consecutivo='$id'";

		return mysqli_query($conexion,$sql);
	}

}

?>
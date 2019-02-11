<?php 


		class Movimiento{

			public function IngresarMovimiento($datos){

				$c=new conectar();
				$conexion=$c->conexion();

				$sql="INSERT INTO tblmovimiento values (null, '$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]')";

				$result=mysqli_query($conexion,$sql);

				return $result;

				$c->Desconectar();

			}

			public function ModificarMovimiento($datos){

			$c=new conectar();
			$conexion=$c->conexion();	

			$sql="UPDATE tblmovimiento SET fecha_entrada='$datos[1]', fecha_salida='$datos[2]',equipo='$datos[3]',Observaciones='$datos[4]',Empleado='$datos[5]',Estado='$datos[6]',consecutivo_ot='$datos[7]',Tipo_dagno='$datos[8]' where Consecutivo='$datos[0]' ";

			$result=mysqli_query($conexion,$sql);

			return $result;

			$c->Desconectar();
			}

			public function EliminarMovimiento($codigo){

			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from tblmovimiento where consecutivo ='$codigo'";

			$result=mysqli_query($conexion,$sql);


			return $result;

			$c->Desconectar();

			}
		}






 ?>
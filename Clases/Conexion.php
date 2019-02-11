<?php 

	class conectar{
		private $servidor="localhost";
		private $usuario="root";
		private $pass="12345";
		private $bd="vibeard";

		public function conexion(){

			$conexion=mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->bd);

			return $conexion;
		}
		public function Desconectar(){

			mysqli_close(self::conexion());
		}
	}











 ?>
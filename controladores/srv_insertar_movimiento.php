<?php 
require_once('../conexion.php');
$fechaentrada=$_POST['fechaentrada'];
$fechasalida=$_POST['fechasalida'];
$tipodagno=$_POST['tipodagno'];
$empleado=$_POST['empleado'];
$estado=$_POST['estado'];
$equipo=$_POST['equipo'];
$ot=$_POST['ot'];
$observaciones=$_POST['observaciones'];
$sql="INSERT INTO tblmovimiento values (NULL, '$fechaentrada', '$fechasalida', '$equipo', '$observaciones', '$empleado', '$estado', '$ot', '$tipodagno')";

if (mysqli_query ($conexion, $sql)){
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>PROCESO EXITOSO</h1></div>";
}else{
	echo "error" .$sql. mysqli_error($conexion);
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div align='center' style='color:white;vertical-align:middle;'><h1>ERROR".$sql. mysqli_error($conexion)."</h1></div>";

}
mysqli_close($conexion);

?>
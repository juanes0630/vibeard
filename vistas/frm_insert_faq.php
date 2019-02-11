
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="shortcut icon" href="../img/favicon.png" />
	<link rel= "stylesheet" type ="text/css" href="../Librerias/css/bootstrap.css">
	<link rel= "stylesheet" type ="text/css" href="../Librerias/css/css_vistas.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width device-width initial scale =1">
	<meta charset="utf-8">
	<?php 
	require_once '../clases/Conexion.php';
	$c=new conectar();
	$conexion=$c->conexion();

	?>
</head>
<body background="../img/fondo.png" background-size: 100% 1500%;
	background-repeat:no-repeat;>
	<div class="container">
		<form action="../controladores/RecibeDatos.php" method="POST">
			<div class="form-group">
				<div class="form-row">
					
					<div class="form-group col-sm-12" align="center" style="margin-left: 2vw;">
						<label style="font-size: 4vw; color: #D0D3D4;"> INGRESO DE PREGUNTAS</label>

					</div>			
				</div>
				<div class="form-row">
					<div class=" form-group col-sm-7" style="margin-top: 5vw; margin-left: 20vw;">

						<input type="text" name="codigo" class="form-control"  placeholder="CODIGO:" style="box-shadow: 0 0 8px #10C5CB;border-color:black;background-color: transparent; border-radius:5px 5px 5px 5px;" >					

					</div>			
				</div>
				<div class="form-row">
					<div class=" form-group col-sm-7" style="margin-top: 5vw; margin-left: 20vw;">

						<input type="text" name="nombre" class="form-control"  placeholder="PREGUNTA:" style="box-shadow: 0 0 8px #10C5CB;border-color:black;background-color: transparent; border-radius:5px 5px 5px 5px;" >					

					</div>			
				</div>
				<div class="form-row">
					<div class=" form-group col-sm-7" style="margin-top: 5vw; margin-left: 20vw;">

						<input type="text" name="descripcion" class="form-control"  placeholder="RESPUESTA:" style="box-shadow: 0 0 8px #10C5CB;border-color:black;background-color: transparent; border-radius:5px 5px 5px 5px;" >					<br>

							<button type="Submit" class="btn btn-primary">ACEPTAR</button>
							<button type="Submit" class="btn btn-danger">CANCELAR</button>
						

					</div>			
				</div>

			</div>


		</form>
	</div>
</body>
</html>



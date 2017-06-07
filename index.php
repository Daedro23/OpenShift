<!DOCTYPE html>
<html>
<head>
	<title>OpenS</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<strong><center><h1>Productos</h1></center></strong>

<div class="container">
<table class="table" >
	<thead>
			
		<tr>
			<td>Identificador</td>
			<td>Producto</td>
			<td>Cantidad</td>
			<td>Descripción</td>
				
		</tr>
		</thead>
		<tbody>
			
	<?php	
		
		$bd_host="localhost";
		$bd_nombre="open";
		$bd_usuario="root";
		$bd_contra="";
		
		$conexion=mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre);
	if(mysqli_connect_errno()) {
		
		echo "Fallo al conectar con la Base de Datos";
		exit();
	}	
	
	mysqli_set_charset($conexion, "utf8");	
		
	$consulta="SELECT * FROM practica";
	$resultados=mysqli_query($conexion, $consulta);
		
	while ($row = $resultados->fetch_assoc()) {
	?>		
			
	
		<tr>
			<td><?php echo $row['id_practica'];?></td>
			<td><?php echo $row['producto'];?></td>
			<td><?php echo $row['cantidad'];?></td>
			<td><?php echo $row['descripcion'];?></td>
	
		</tr>
		
		<?php
		}
	?>
	
	
	</tbody>
		
	</table>	
				
	</div>
	</div>
		
		
	</body>
</html>
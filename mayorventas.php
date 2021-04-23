<?php 

	$conexion=mysqli_connect('localhost','root','','academ');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="tabla.css">
</head>
<script type="text/javascript">


</script>
<body>

<br>

	<table border="1" >
		<tr>
			
			<td>Nombre </td>
			<td>importe</td>
				

		</tr>

		<?php 
		$sql="SELECT nombre, MAX(importe) from poliza p JOIN cliente c WHERE p.codCliente=c.codCliente";
		var_dump($sql)
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
		
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['importe'] ?></td>


		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
<?php 
	$seccion = "Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Canal!</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
	<header>
		<div class="container">
			<?php include "wd_nav.php" ?>
			<br><br>
		</div>		
	</header>

	<div class="container">
		<h1>Listado de videos</h1>
	</div>
		<?php 
			// Paso 1 conectamos con el servidor de BBDD
		$link = mysqli_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
			// Paso 2 seleccionamos la base de datos
		mysqli_select_db($link, "canal") or die('No se pudo seleccionar la base de datos');
			// Paso 3 establecer el charset para la comunicación con BBDD
		mysqli_set_charset($link, "utf8");
			
			//Paso 4 creamos una consulta
		$intbusqueda = 5;
		$strbusqueda = "55jtyAkaevI";
		$query = "SELECT * FROM videos ORDER BY ID DESC"; // SELECT - Única consulta de SQL que genera datos. Los otros solo te devuelven True o False.
		//$query = "SELECT * FROM videos ORDER BY ID DESC LIMIT 2"; //Limita la consulta a los dos últimos registros
		//$query = "SELECT * FROM videos WHERE ID = 5";
		//$query = "SELECT * FROM videos WHERE ID = $intbusqueda"; Busqueda con una varible
		//$query = "SELECT * FROM videos WHERE ARCHIVO = '55jtyAkaevI'";
		//$query = "SELECT * FROM videos WHERE ARCHIVO = '$strbusqueda'"; // Poner comillas simples cuando la variable contiene un string.
		//$query = "SELECT TITULO, DESCRIPCION, FECHA FROM videos WHERE ARCHIVO = '$strbusqueda'";
		//$query = "SELECT * FROM videos WHERE ARCHIVO = '$strbusqueda' AND ID = $intbusqueda";

			//Paso 5 ejecutamos la consulta
		$result = mysqli_query($link , $query) or die('Consulta fallida: ' . mysql_error());
			//Paso 6 mostrar resultados
		
		?>
		<section>
			<div class="container">
				<?php 
					if (isset($_GET["msg"])) {
				if ($_GET["msg"] == 1) {
					echo "<br>Error. No se ha podido borrar el video. <br> Por favor, vuelve a intentarlo. <br>";
				}
				if ($_GET["msg"] == 0) {
					echo "<br>El video se ha borrado correctamente. <br><br>";
				}
			}

				 ?>


				<table class='table table-striped table-bordered'>
					<tr>
						<th>ID</th>
						<th>ARCHIVO</th>
						<th>TITULO</th>
						<th>DESCRIPCION</th>
						<th>FECHA</th>
						<th>VER</th>
						<th>BORRAR</th>
						<th>EDITAR</th>
					</tr>
					<?php 
						while ($fila = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?=$fila["ID"]?></td>
							<td><?=$fila["ARCHIVO"]?></td>
							<td><?=$fila["TITULO"]?></td>
							<td><?=substr(strip_tags($fila["DESCRIPCION"]), 0, 70)?></td>
							<td><?php 
									$fecha = explode(" ", $fila["FECHA"]);
									echo $fecha[1];
								?>
							<td><a href="ver.php?id=<?=$fila["ID"]?>">Ver</a></td>
							<td><a href="borravideo.php?id=<?=$fila["ID"]?>">Borrar</a></td>
							<td><a href="editar.php?id=<?=$fila["ID"]?>">Editar</a></td>
						</tr>
					<?php 
						}
			 ?>
				</table>
			</div>
		</section>
		


	


</body>
</html>
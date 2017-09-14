<?php 
	if (isset($_GET["id"])) {
		$id = $_GET["id"];

		$link = mysqli_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
		mysqli_select_db($link, "canal") or die('No se pudo seleccionar la base de datos');
		mysqli_set_charset($link, "utf8");
		$query = "SELECT * FROM videos WHERE ID = $id";
		$result = mysqli_query($link , $query) or die('Consulta fallida: ' . mysql_error());
		//PASO 6 Mostrar resultados

		$fila = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Canal!</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
		<h1 class= "text-center"><?=$fila["TITULO"]?></h1>

		<section>
			<div class="container">
				<iframe width="1100" height="619" src="https://www.youtube.com/embed/<?=$fila["ARCHIVO"]?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="container">
				<p class="lead">
					<?=$fila["DESCRIPCION"]?>
				</p>
			</div>
		</section>
		

</body>
</html>


<?php
	} else {
		header("Location:index.php");
	}

?>





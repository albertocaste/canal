<?php 
	$seccion = "Editar";

	if (isset($_GET["id"])) {
		$id = $_GET["id"];

		$link = mysqli_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
		mysqli_select_db($link, "canal") or die(' No se pudo seleccionar la base de datos');
		mysqli_set_charset($link, "utf8");

		$queryeditar = "SELECT * FROM videos WHERE ID = $id";
		$resulteditar = mysqli_query($link, $queryeditar);

		$roweditar = mysqli_fetch_array($resulteditar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar videos</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="//cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<?php include "wd_nav.php" ?>
		<br><br>
		</div>		
	</header>

	<div class="container">
		<?php 
			if (isset($_GET["msg"])) {
				if ($_GET["msg"] == 0) {
					echo "<br>El video se ha editado correctamente. <br><br>";
				} else{
					echo "<br>ERROR!. El video no se ha editado correctamente. <br><br>";
				}					
				}

		?>
	</div>

	<section class="container">
		<form action="editarvideo.php" method="post">
			
			<input type="text" name="titulo" placeholder ="Título del video" class="form-control" value="<?=$roweditar["TITULO"]?>"> <br>
			<input type="text" name="archivo" id="archivo" placeholder="Código de video" class="form-control" value="<?=$roweditar["ARCHIVO"]?>"> <br>
			<textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción"> <?=$roweditar["DESCRIPCION"] ?></textarea><br>
			<script>
			CKEDITOR.replace('descripcion');
			</script>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="hidden" name="fecha" value="<?=$roweditar["FECHA"]?>">
			<input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
		</form>
	</section>
	
</body>
</html>

<?php 
	}

?>


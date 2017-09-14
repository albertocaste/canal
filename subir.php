<?php 
	$seccion = "Subir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir videos</title>
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
	<section class="container">
		
		<?php 
			if (isset($_GET["msg"])) {
				if ($_GET["msg"] == 1) {
					echo "<br>Se ha producido un error de subida. <br> Por favor, vuelve a intentarlo. <br>";
				}
				if ($_GET["msg"] == 0) {
					echo "<br>El video se ha correctamente. <br><br>";
				}
			}

		?>


		<form action="subevideo.php" method="post">
			<input type="text" name="fecha" class="form-control" value="<?=date("H:i:s d/m/Y") ?>"> <br>
		<input type="text" name="titulo" placeholder ="Título del video" class="form-control"> <br>
			<input type="text" name="archivo" id="archivo" placeholder="Código de video" class="form-control"> <br>
			<textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción"> </textarea><br>
			<script>
			CKEDITOR.replace('descripcion');
			</script>

			<!-- CKEDITOR.COM Copiar el CDN, paquete standard y pegarlo en el HEAD -->
			<input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
	</form>

	</section>
	
	
</body>
</html>
<?php 
	if (isset($_POST["enviar"])) {
		$titulo = $_POST["titulo"];
		$archivo = $_POST["archivo"];
		$descripcion = $_POST["descripcion"];
		$fecha = $_POST["fecha"];

		$link = mysqli_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
		mysqli_select_db($link, "canal") or die(' No se pudo seleccionar la base de datos');
		mysqli_set_charset($link, "utf8");

		$query = "INSERT INTO videos (ARCHIVO, TITULO, DESCRIPCION, FECHA) VALUES ('$archivo', '$titulo', '$descripcion', '$fecha')";
		
		//Se ejecuta la consulta
		$result = mysqli_query($link, $query);

		if ($result) {
			header("Location: subir.php?msg=0");
		} else{
			header("Location: subir.php?msg=1");
		}

	}
?>
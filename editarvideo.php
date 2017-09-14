<?php 
	if (isset($_POST["enviar"])) {
		$id = $_POST["id"];
		$fecha = $_POST["fecha"];
		$titulo = $_POST["titulo"];
		$archivo = $_POST["archivo"];
		$descripcion = $_POST["descripcion"];

		$link = mysqli_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
		mysqli_select_db($link, "canal") or die(' No se pudo seleccionar la base de datos');
		mysqli_set_charset($link, "utf8");

		$queryeditar = "UPDATE videos SET FECHA = '$fecha', ARCHIVO = '$archivo', TITULO = '$titulo', DESCRIPCION = '$descripcion' WHERE ID = $id";

		$resulteditar = mysqli_query($link, $queryeditar);

		if ($resulteditar) {
			header("Location: editar.php?id=$id&msg=0");
		} else {
			header("Location: editar.php?id=$id&mdg=1");
		}
	} else{
		header("Location: index.php");
	}

?>
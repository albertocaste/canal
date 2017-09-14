<?php 
	if (isset($_GET["id"])) {
		$id = $_GET["id"];

		$link = mysqli_connect('localhost', 'root', 'root') or die('No se pudo conectar: ' . mysql_error());
		mysqli_select_db($link, "canal") or die(' No se pudo seleccionar la base de datos');
		mysqli_set_charset($link, "utf8");

		$querydelete = "DELETE FROM videos WHERE ID = $id";

		$resultdelete = mysqli_query($link, $querydelete);

		if ($resultdelete) {
			header("Location: index.php?msg=0");
		} else{
			header("Location: index.php?msg=1");
		}

	} else{
		header("Location: index.php");
	}

?>
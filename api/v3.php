<?php
	// Content Type JSON
	header("Content-type: application/json");
	// Database connection
	$pdo= new PDO('mysql:host=localhost;dbname=todoCrocheting','root','');
    $pdo->exec("set names utf8");

	// Read data from database
	$action = 'read';

	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}

	if ($action == 'read') {
		$tabla = $pdo->prepare('SELECT * FROM producto');
    	$tabla->execute();
    	$productos = $tabla->fetchAll(PDO::FETCH_ASSOC);
			$res['productos'] = $productos;
	}

	// Insert data into database
	if ($action == 'create') {
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$categoria = $_POST['categoria'];
		$descripcion = $_POST['descripcion'];
		$tabla = $pdo->prepare('');
    $tabla->execute();
		$result = $tabla->fetchAll(PDO::FETCH_ASSOC);
		if ($result) {
			$res['message'] = "Producto añadido satisfactoriamente";
		} else {
			$res['error']   = true;
			$res['message'] = "Error al insertar el producto";
		}
	}

	// Parte de las Categorias
	if ($action == 'readCat') {
		$tabla = $pdo->prepare('SELECT * FROM categoria');
    	$tabla->execute();
    	$categorias = $tabla->fetchAll(PDO::FETCH_ASSOC);
			$res['categorias'] = $categorias;
	}

	// Print json encoded data
	echo json_encode($res);
	die();
?>

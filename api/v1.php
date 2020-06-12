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

	// Parte de las Categorias
	if ($action == 'read') {
		$tabla = $pdo->prepare('SELECT * FROM producto');
    	$tabla->execute();
    	$producto = $tabla->fetchAll(PDO::FETCH_ASSOC);
			$res['producto'] = $producto;
	}

	// Print json encoded data
	echo json_encode($res);
	die();
	
?>

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
		$tabla = $pdo->prepare('SELECT * FROM categoria');
    	$tabla->execute();
    	$categorias = $tabla->fetchAll(PDO::FETCH_ASSOC);
			$res['categorias'] = $categorias;
	}

	// Print json encoded data
	echo json_encode($res);
	die();
	
?>

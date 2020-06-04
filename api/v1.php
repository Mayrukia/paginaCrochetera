<?php
	// Content Type JSON
	header("Content-type: application/json");
<<<<<<< HEAD
	 $connect= new PDO('mysql:host=localhost;dbname=todoCrocheting','root','');
    $sql = 'SELECT * FROM producto';
    $tabla = $connect->query($sql);
    $productos= $tabla->fetchAll(PDO::FETCH_OBJ);
=======
	// Database connection
	$pdo= new PDO('mysql:host=localhost;dbname=todoCrocheting','root','');
    $pdo->exec("set names utf8");
    
	// Read data from database
>>>>>>> develop
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


	$connect = null;
	// Print json encoded data
	echo json_encode($res);
	die();
?>

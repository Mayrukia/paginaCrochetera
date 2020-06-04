<?php
<<<<<<< HEAD
<<<<<<< HEAD
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


	$connect = null;
	// Print json encoded data
	echo json_encode($res);
	die();
?>
=======
   
    // $conect->close();
    $connect = null;
    var_dump($productos);
    return $productos;

?>
>>>>>>> mariano
=======
    header("Content-type: application/json");
    $pdo= new PDO('mysql:host=localhost;dbname=todoCrocheting','root','');

    $pdo->exec("set names utf8");
    $statement=$pdo->prepare('SELECT * FROM producto');
    $statement->execute();
    if (!$statement){
        echo 'Error al ejecutar la consulta';
    }else{
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);
    }
?>
>>>>>>> develop

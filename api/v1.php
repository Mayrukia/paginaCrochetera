<?php
	// Content Type JSON
	header("Content-type: application/json");
	// Database connection
	$conn = new mysqli("localhost", "root", "", "todocrocheting");
	if ($conn->connect_error) {
		die("No se pudo conectar con la base de datos");
	}
	$res = array('error' => false);


	// Read data from database
	$action = 'read';

	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}


	if ($action == 'read') {
		$result = $conn->query("SELECT * FROM producto");
		$productos = array();

		while ($row = $result->fetch_assoc()) {
			array_push($productos, $row);
		}
		$res['productos'] = $productos;
	}




	// Close database connection
	$conn->close();

	// Print json encoded data
	echo json_encode($res);
	die();
?>

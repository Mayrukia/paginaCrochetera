<?php
	// Content Type JSON
	header("Content-type: application/json");
	 $connect= new PDO('mysql:host=localhost;dbname=todoCrocheting','root','');
    $sql = 'SELECT * FROM producto';
    $tabla = $connect->query($sql);
    $productos= $tabla->fetchAll(PDO::FETCH_OBJ);
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

	// Insert data into database
	if ($action == 'create') {
		$nombre = $_POST['nombre'];
		$precio = $_POST['precioUnitario'];
		$categoria = $_POST['idCategoria'];
		$descripcion = $_POST['descripcion'];

		$result = $conn->query("INSERT INTO `productos` (`nombre`, `precio`, `categoria`, `descripcion`) VALUES('$nombre', '$precio', '$categoria', '$descripcion')");

		if ($result) {
			$res['message'] = "Producto añadido satisfactoriamente";
		} else {
			$res['error']   = true;
			$res['message'] = "Error al insertar el producto";
		}
	}

	// Update data
	if ($action == 'update') {
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$categoria = $_POST['categoria'];
		$descripcion = $_POST['descripcion'];

		$result = $conn->query("UPDATE `productos` SET `nombre`='$nombre', `precio`='$precio', `categoria`='$categoria', `descripcion`='$descripcion' WHERE `id`='$id'");

		if ($result) {
			$res['message'] = "Producto actualizado satisfactoriamente";
		} else {
			$res['error']   = true;
			$res['message'] = "Error al actualizar el producto";
 		}
	}

	// Delete data
	if ($action == 'delete') {
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$descripcion = $_POST['descripcion'];

		$result = $conn->query("DELETE FROM `productos` WHERE `id`='$id'");

		if ($result) {
			$res['message'] = "Producto eliminado con éxito";
		} else {
			$res['error'] = true;
			$res['message'] = "Error al eliminar el producto";
		}
	}

	// CATEGORIAS


	if ($action == 'readcat') {
		$result = $conn->query("SELECT * FROM categorias");
		$categorias = array();

		while ($row = $result->fetch_assoc()) {
			array_push($categorias, $row);
		}
		$res['categorias'] = $categorias;
	}

	// if ($action == 'readxcat') {
	// 	$categoria = 0;
	// 	if (isset($_GET['cat'])) {
	// 		$categoria = $_GET['cat'];
	// 	}

	// 	$result = $conn->query("SELECT * FROM productos WHERE categoria='$categoria'");
	// 	$productos = array();

	// 	while ($row = $result->fetch_assoc()) {
	// 		array_push($productos, $row);
	// 	}
	// 	$res['productos'] = $productos;

	// }

	// Close database connection
	$conn->close();

	// Print json encoded data
	echo json_encode($res);
	die();
?>

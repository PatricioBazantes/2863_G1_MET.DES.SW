<?php
//incluye la clase Libro y CrudLibro
require_once('crud_producto.php');
require_once('producto.php');
 
$crud= new CrudProducto();
$producto= new Producto();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
        $producto->setIdtipo($_POST['codigot']);
        $producto->setIdprovincia($_POST['codigop']);
		$producto->setId($_POST['id']);
        $producto->setNombre($_POST['nombre']);
		$producto->setTiempo($_POST['tiempo']);
        $producto->setNombrec($_POST['nombrec']);
		$producto->setDescripcion($_POST['descripcion']);
		//llama a la función insertar definida en el crud
		$crud->insertar($producto);
		header('Location: ../../Administrador/productos.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$producto->setId($_POST['id']);
		$producto->setNombre($_POST['nombre']);
        $producto->setNombrec($_POST['nombrec']);
		$producto->setDescripcion($_POST['descripcion']);
		$crud->actualizar($producto);
		header('Location: ../../Administrador/productos.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ../../Administrador/productos.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: ../../Administrador/actualizar_prod.php');
	}
?>
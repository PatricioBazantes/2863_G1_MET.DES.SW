<?php
//incluye la clase Libro y CrudLibro
require_once('crud_tipo.php');
require_once('tipo.php');
 
$crud= new CrudTipo();
$tipo= new Tipo();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$tipo->setId($_POST['codigo']);
        $tipo->setNombre($_POST['nombre']);
		$tipo->setDescripcion($_POST['descripcion']);
		//llama a la función insertar definida en el crud
		$crud->insertar($tipo);
		header('Location: ../../Administrador/tipos.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$tipo->setId($_POST['id']);
		$tipo->setNombre($_POST['nombre']);
		$tipo->setDescripcion($_POST['descripcion']);
		$crud->actualizar($tipo);
		header('Location: ../../Administrador/tipos.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ../../Administrador/tipos.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: ../../Administrador/actualizar_tipo.php');
	}
?>
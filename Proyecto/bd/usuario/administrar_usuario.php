<?php
//incluye la clase Libro y CrudLibro
require_once('crud_usuario.php');
require_once('usuario.php');
 
$crud= new CrudUsuario();
$usuario= new Usuario();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
        $usuario->setId($_POST['id']);
        $usuario->setUsuario($_POST['usuario']);
		$usuario->setNombre($_POST['nombre']);
        $usuario->setApellido($_POST['apellido']);
        $usuario->setCorreo($_POST['correo']);
		$usuario->setClave($_POST['clave']);
        $usuario->setTipo($_POST['tipo']);
        $usuario->setDireccion($_POST['direccion']);
		//llama a la función insertar definida en el crud
		$crud->insertar($usuario);
		header('Location: ../../Administrador/usuarios.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$usuario->setId($_POST['id']);
        $usuario->setUsuario($_POST['usuario']);
		$usuario->setNombre($_POST['nombre']);
        $usuario->setApellido($_POST['apellido']);
        $usuario->setCorreo($_POST['correo']);
		$usuario->setClave($_POST['clave']);
        $usuario->setTipo($_POST['tipo']);
        $usuario->setDireccion($_POST['direccion']);
		$crud->actualizar($usuario);
		header('Location: ../../Administrador/usuarios.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ../../Administrador/usuarios.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: ../../Administrador/actualizar_usuario.php');
	}
?>
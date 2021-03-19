<?php
//incluye la clase Libro y CrudLibro
require_once('crud_recom.php');
require_once('recom.php');
 
$crud= new CrudRecom();
$recom= new Recom();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
        $id=$_POST['idprod'];
        $idt=$crud->obteneridt($id);
        $idprov=$crud->obteneridprov($id);
        
        $recom->setIdprod($id);
        $recom->setIdt($idt);
        $recom->setIdprov($idprov);
        $recom->setId($_POST['id']);
        $recom->setNombre($_POST['nombre']);
        $recom->setDescripcion($_POST['descripcion']);
        $recom->setTipo($_POST['tipo']);
        
		//llama a la función insertar definida en el crud
		$crud->insertar($recom);
		header('Location: ../../Administrador/recoms.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$recom->setIdt($_POST['idt']);
        $recom->setIdprov($_POST['idprov']);
        $recom->setIdprod($_POST['idprod']);
        $recom->setId($_POST['id']);
        $recom->setNombre($_POST['nombre']);
        $recom->setDescripcion($_POST['descripcion']);
        $recom->setTipo($_POST['tipo']);
		$crud->actualizar($recom);
		header('Location: ../../Administrador/recoms.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: ../../Administrador/recoms.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: ../../Administrador/actualizar_recom.php');
	}
?>
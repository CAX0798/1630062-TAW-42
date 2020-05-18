<?php
	//Se llama al archivo controlador_principal.php que contiene la clase controladorPrincipal
    require_once "controlador/controlador.php";//Manda a llamar al archivo que está dentro de la carpeta del controlador
    $controlador = new ControladorPrincipal(); //Crea una instancia de la clase ControladorPrincipal, esta clase se ubica en el archivo del controlador de la primera linea
    $controlador -> Vista_Principal(); //Manda a llamar a la función de la clase ControladorPrincipal, esta devuelve la vista principal
	//$controlador -> accionesAlumnos();
	$controlador -> accionesProfesores(); //Manda a llamar a la función de la clase ControladorPrincipal, esta devuelve las acciones que realizará el módulo Profesores
	//$controlador -> accionesCarreras();
	//$controlador -> accionesCarreraProfesor();
?>
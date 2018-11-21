<?php
/*
	<------------------------------------------------------------------------------------->
    |
    |   
	|  ||_____||  ||----->         //_\\          //___\\  ||      ||  //___\\ ||------->
	|  ||     ||  || ---||        //   \\         ||   ||  ||      ||  ||   || ||///////
	|  ||         ||   ||        //     \\        ||  ||   ||      ||  ||  ||  ||
	|  ||_____||  ||  ||        //       \\       || ||    ||______||  || ||   ||________
	|  ||     ||  || ||        //_________\\      ||||     ||______||  ||||    ||////////
	|  ||         || =        //___________\\     ||       ||      ||  ||      ||
	|  ||         || \\      //             \\    ||       ||      ||  ||      ||
	|  ||         ||  \\    //               \\   ||       ||      ||  ||      ||_______
	|  __         ||   \\  //                 \\  ||       ||      ||  ||      ||///////
	|
	<------------------------------------------------------------------------------------>
	
	POR: Rubén Gallegos Hernández.

	Librerías creadas por Rubén Gallegos Hernández.

	Mini framework php para aplicaciones web ligeras.

	Desde el documento index.php se instancian los documentos esenciales para que
	funciones la aplicacion web.
*/

	//Instancia el archivo conexion desde la carpeta models.
	require_once("model/conexion.php");

	//Clase para validación de rutas.
	require_once("libs/validations/val.php");

	//Clase para ayudar a obtener respuestas de forms.
	require_once("libs/forms/inputs.php");

	//helper class for render views and show views.
	require_once("libs/views/views.php");

	//Clase ayudante para minimizar consultas.
	require_once("libs/mysql/pdocrud.php");

	//Clase ayudante para redireccionar.
	//require_once("libs/redirects/redirect.php");

	//Clase de ayuda para mostrar mensajes de error o de exito.
	//helper class for show errors to error or successfully.
	
	require_once("libs/messages/message.php");

	// Instancia del archivo rutas desde la carpeta controllers.
	require("libs/routes/routes.php");

	//Instancia el archivo donde se van a registrar las rutas de la página web
	require_once('webRoutes.php');
	
	
	


	

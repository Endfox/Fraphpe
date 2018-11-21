<?php
		
	//Valida si la sesion esta disponible en el controlador instanciada en su constructor.
	class Authentication{
		/*
			Función estatica validateSession.
			Parametro 1 = el nombre de la sesión que validará.
			Parametro 2 = el nombre de la clase que va a acceder.
			Parametro 3 = el método donde se encuentra el formulario de login
			Parametro 4 = el método donde se encuentra el dashboard principal.
			Parametro 5 = el método donde se encuentra la validación de inicio de sesión.
		*/
	
		static function validateSession($nameSession, $clas, $refLogin, $dashboard, $login){
			session_start();
			//  Si no hay una sesión iniciada.
			if(empty($_SESSION[$nameSession]) && !isset($_SESSION[$nameSession])){
					//Además esta vacio el met en la variable global get
				if(empty($_GET['met'])){
					//Es porque se va a acceder al login y no hace nada.
				}
				elseif ($_GET['con'] == $clas && $_GET['met'] == $login) {
					//pass
				}
				else{
					Redirect::redirectTo($clas);
				}
			}
			else{
				//Si la sesión ya esta iniciada
				if($_GET['met'] == $refLogin || empty($_GET['met']) ){
					/*
						Y se quiere acceder al login de la clase se le redireccionará al
						dashboard de la clase.
					*/
					Redirect::redirectTo($clas,$dashboard);
				}
				else{
					//Sino entonces se le dejará acceder normalmente a las demás rutas.
				}
			}
		}

		static function validatePostRequest($con, $met){
			if(!isset($_POST) && empty($_POST)){
				Redirect::redirectTo($con,$met);
			}
			else{
				//Pass
			}
		}

	}
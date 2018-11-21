<?php

class View{
	
	static function renderViews($header,$body,$footer,$datas=null){
		//Show views.
		if(!file_exists('views/'.$header.'.php')){
			echo "no se encuentra el archivo cabecera";
		}
		elseif (!file_exists('views/'.$body.'.php')) {
			echo "no se encuentra el archivo del cuerpo de página";
		}
		elseif(!file_exists('views/'.$footer.'.php')){
			echo 'No se encuentra el archivo del pie de página';
		}
		else{
			require_once('views/'.$header.'.php');
			require_once('views/'.$body.'.php');
			require_once('views/'.$footer.'.php');
		}
	}

	static function show404(){
		if(file_exists('views/helpers/view404.php')){
			require_once('views/helpers/view404.php');
		}
		else{
			echo 'Crea un archivo llamado view404.php en la carpeta views/helpers \n';
			echo 'No hay ninguno creado';
		}
	}
}
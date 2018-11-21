<?php
/*
	La clase Rutas.
*/
	class Route{

		public $param1;

		public $param2;

		public $ruta;

		public $controlador;

		public $metodo;

		public $rutagrafica;

		public $verificar=false;

		public $archivo;

		/**
		 * [Get]
		 * Verifica 
		 * @param [type] $ruta          [description]
		 * @param [type] $controlMetodo [description]
		 */
		 static function Get($ruta, $controlMetodo){
		 	//se crea una nueva instancia de esta misma clase
		 	$self = new self;
		 	if(!empty($_GET['1']) && !empty($_GET['2'])){
				$self->param1=$_GET['1'];
				$self->param2=$_GET['2'];
				$self->rutagrafica="/".$self->param1."/".$self->param2;
			}
			elseif(!empty($_GET['1']) && empty($_GET['2']) ){
				$self->param1=$_GET['1'];
				$self->param2="index";
				$self->rutagrafica="/".$self->param1;
			}
			else{
				$self->rutagrafica="/";
			}

		 	if($self->rutagrafica==$ruta){

		 		$conmetod=explode('->',$controlMetodo);

				$self->controlador = $conmetod[0]."Controller";

				$self->metodo = $conmetod[1];
				$self->verificar=true;
				$self->archivo = "controllers/".$self->controlador.".php";
				return $self;
		 	}
		 	else{
		 		return $self;
		 	}
		}

		public function callController(){
			if($this->verificar==true){
				require($this->archivo);
				$con =$this->controlador;

				$app = new $con();
				$metodo = $this->metodo;
				if(method_exists($app,$metodo)){
					$app->$metodo();
				}
				else{
					echo "No existe el metodo en el controlador, es necesario crearlo";
				}
			}
		}

		public function __destruct(){
			unset($this->param1);
			unset($this->param2);
			unset($this->ruta);
			unset($this->controlador);
			unset($this->metodo);
			unset($this->rutagrafica);
			unset($this->verificar);
			unset($this->archivo);

		}
	}
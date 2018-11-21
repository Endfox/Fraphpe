<?php
	class Input{

		
		/**
		 * function getPostInput
		 * @param  [type] el nombre de la variable por post a recoger.
		 * @return [type] si existe mandará el contenido enviado por post, sino enviará un false.
		 */
		static function getPostInput($name){
			$input = isset($_POST[$name]) ? $_POST[$name] : false;
			return $input;
		}
		
		/**
		 * @param  [type]
		 * @return [type]
		 */
		static function getPostInputInt($name){
			$input = isset($_POST[$name]) ? $_POST[$name] : false;
			if(is_numeric($input)){
				$input = (int)$input;
				return $input;
			}
			else{
				return false;
			}
		}

		/*
			Obtiene el parametro por metodo post siendo una cadena de texto
			y retorna el contenido convertido a un decimal (double),
			si no contiene nada, retorna false.
		*/
		static function getPostInputDouble($name){
			$input = isset($_POST[$name]) ? $_POST[$name] : false;
			$input = (double)$input;
			return $input;

		}

		static function getGetInput($name){
			$data = isset($_GET[$name]) ? $_GET[$name] : false;
			return $data;
		}

		static function getPostInputEmail($name){
			$email = isset($_POST[$name]) ? $_POST[$name] : false;
			if(filter_var($name,FILTER_VALIDATE_EMAIL) || $email ){
				return $email;
			}
			else{
				return false;
			}
		}
		static function getPostInputOnlyString($name){
			$input = isset($_POST[$name]) ? $_POST[$name] : false;
			if(!is_numeric($input) && !preg_match("/[0-9]/",$input) || $input ){
				return $input;
			}
			else{
				return false;
			}
		}

		static function getPostInputEncryptPsw($data){
			$input = isset($_POST[$data]) ? $_POST[$data] :false;
			if($input){
				$passwordEncrypt = password_hash($input,PASSWORD_BCRYPT,['cost'=>4]);
				return $passwordEncrypt;
			}
			else{
				return false;
			}
		}

	}

<?php 
	class Message{

		static function saveSuccessMessage($arrayParams){
			try{
				session_start();
				self::nullMessage();
				$objeto = (object) $arrayParams;
				$_SESSION['success'] = $objeto;
			}
			catch(Exception $e){
			}
		}

		static function saveManyErrorMessages($arrayParams){
			try{
				session_start();
				self::nullMessage();
				$objeto = (object) $arrayParams;
				$_SESSION['errors'] = $objeto;
			}
			catch(Exception $e){

			}
		}

		static function nullMessage(){
			try{
				session_start();
				$_SESSION['errors']=null;
				$_SESSION['success']=null;
			}
			catch(Exception $e){
				
			}
		}

	}
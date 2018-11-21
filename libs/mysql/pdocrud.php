<?php 
	//NOmbre de la clase PDO Mejorado("PDOM").
	class PDOCRUD{
		
		static function insertDatasWithParameters($sql, $arrayParams){
			try{
				$conexion = Conexion::returnConnection();
				$statement = $conexion->prepare($sql);
				foreach($arrayParams as $key => $value){
					$statement->bindValue($key,$value);
				}
				$statement->execute();
				$conexion = null;
			}
			catch(Exception $e){

			}
		}

		static function queryReturnManyObjects($sql){
			try{
				$conexion = Conexion::returnConnection();
				$productos = $conexion->query($sql);
				$datos=[];
				while($producto = $productos->fetchObject()){
					$datos[]=$producto;
				}
				$conexion = null;
				return $datos;
			}
			catch(Exception $e){

			}
		}

		static function queryOneRowReturnObject($sql, $arrayParams){
			try{
				$conexion = Conexion::returnConnection();

				$statement = $conexion->prepare($sql);

				foreach ($arrayParams as $key => $value) {
					$statement->bindValue($key,$value);
				}
				$statement->execute();
				$object = $statement->fetchObject();
				
				$conexion = null;
				return $object;
			}
			catch(Exception $e){

			}
		}

		static function modifyRegisters($sql,$arrayParams){
			try{
				$conexion = Conexion::returnConnection();
				$statement = $conexion->prepare($sql);

				foreach ($arrayParams as $key => $value) {
					$statement->bindValue($key,$value);
				}
				$statement->execute();
				$data = $statement->rowCount();
				if($data> 0){
					return true;
				}
				else{
					return false;
				}
			}
			catch(Exception $e){
				return false;
			}
		}

		static function deleteRegisters($sql,$arrayParams){
			try {
				$conexion = Conexion::returnConnection();
				$statement = $conexion->prepare($sql);
				foreach ($arrayParams as $key => $value) {
					$statement->bindValue($key,$value);
				}
				$statement->execute();
				$data = $statement->rowCount();
				if($data> 0){
					return true;
				}
				else{
					return false;
				}

			} 
			catch (Exception $e) {
				
			}
		}
	}
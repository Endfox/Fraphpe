<?php 
	class Conexion{

		static function returnConnection(){
			$nameDB ='';
			$host ='';
			$charset = 'UTF8';
			$dsn = "mysql:dbname=$nameDB;host=$host;charset=$charset";
			$user = '';
			$psw = '';
			try{
				$pdo=new PDO($dsn,$user,$psw,array(PDO::MYSQL_ATTR_FOUND_ROWS => true));
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $pdo;
			}
			catch(PDOException $e){
				echo 'Failed the connection: ' . $e->getMessage();
			}
		}


	}
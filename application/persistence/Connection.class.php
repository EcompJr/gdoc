<?php 

	/**
	* 
	*/
	class Connection {
		
		private static $instance;
		private $host = "localhost";
		private $dbname = "sgdoc_db";
		private $usernameDB = "root";
		private	$passwordDB = "root";
		
		private function __construct(){
			
		}
		
		public static function getInstance(){
			
			if(!isset(self::$instance)){
				try{
					self::$instance = new PDO("mysql:host=localhost;dbname=sgdoc_db", "root", "root");
					self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}catch (Exception $e){
					var_dump($e);
				}
				
			}
			return self::$instance;
		}
	}
?>
<?php 
class DB{
	public static $cn;
	private $serverName="localhost";
	private $dbName="projets2023";
	private $userName="admin";
	private $password="admin";
	private function __construct(){
		
	}
	public static function getInstance(){
		if(self::$cn == null){
			self::$cn = new mysqli("localhost","admin","admin","projets2023");
			 if(mysqli_connect_errno()){
			echo mysqli_connect_error();
			}
			return self::$cn;
		
		}else{
			return self::$cn;
		}
	}
}
?>
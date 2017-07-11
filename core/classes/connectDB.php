<?php
/**
* Connect with databse
*/
class connectDB{

	private static $hostname = "localhost";
	private static $username = "root";
	private static $password = "root";
	private static $db = "keeper";

	public static function getInstance(){

		$conn = new mysqli(self::$hostname, self::$username, self::$password, self::$db);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 	
		return $conn;
		/*try{
		 $conn = new PDO("mysql:host=".self::$hostname.";dbname=".self::$db."", self::$username, self::$password);
		 // set the PDO error mode to exception
		 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		 
		 return $conn;
		}
		catch(PDOException $e)
		{
		 echo "Connection failed: " . $e->getMessage();
		}*/
	}	

	/*public function getInstace(){
		return $conn=(Config::get('mysql/host'),$this->user,$this->pass,$this->db);

	}*/
}

?>
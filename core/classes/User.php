<?php
/**
* 
*/
class User
{
	
	private $email, $password, $conn; 

	public function __construct(){
		$this->conn=connectDB::getInstance();
	}

	public function login($email,$password){
		 $this->email = $email;
  		 $this->password = $password;
  		 $sql="SELECT * FROM keep_user WHERE email='".$this->email."' AND passcode='".$this->password."' ";  		 
  		 $result = $this->conn->query($sql); 		   		 
  		 $row=$result->fetch_object();  		
  		 /*print_r($row);*/
	}
}

?>
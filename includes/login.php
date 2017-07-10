<?php
  require_once('../config/db.php');
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sqlLogin = "SELECT * from keep_user WHERE email ='".$email."' AND passcode ='".$password."'";  
  $sqlLoginObj = mysqli_query($conn,$sqlLogin);
  $sqlLoginResult = mysqli_fetch_assoc($sqlLoginObj);

  #Check if record is not empty 
  $loginVar = ( !empty($sqlLoginResult) ) ? '1' : '0';
  echo $loginVar; die;
  if( $loginVar === '1' ){
  	 if($sqlLoginResult['is_admin'] === '1'){  	 	
  	 	$_SESSION['admin'] = $sqlLoginResult['id'];  	 	
  	 	echo $loginVar;
  	 }else{
  		#redirect user to dashboard
  	 }  	 
  }else{

  	 echo $loginVar;	
  } 
  
?>
<?php
require_once('../init.php');

if(isset($_POST)){ 
	
  $flag  = (!empty($_POST['flag']))?$_POST['flag']:'';
  $email = (!empty($_POST['email']))?$_POST['email']:'';
  $pass  = (!empty($_POST['password']))?$_POST['password']:'';
  
  /* This works only for login*/
 /* if($flag == 'login')
  { */ 	
  	$user = new User();
  	//print_r($user); die;
  	$response = $user->login($email,$pass);
  	print_r($response);
  	
  	if($response){
  	}else{
  		echo "no response";
  	}	
  /*}*/

  //print_r($_POST);
}

print_r($_POST);

?>


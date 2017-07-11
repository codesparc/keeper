<?php
require_once('../init.php');

if(isset($_POST)){ 
	
  $flag  = (!empty($_POST['flag']))?$_POST['flag']:'';
  $email = (!empty($_POST['email']))?$_POST['email']:'';
  $pass  = (!empty($_POST['password']))?$_POST['password']:'';
  
 /* Login to user */
 if($flag == 'login')
  { 
  	$user = new User();  
  	$response = $user->login($email,$pass);  	
    
    if(!empty($response)){//check is database record is not empty
       if($response->is_admin == '1'){
          $_SESSION['admin'] = $response->is_admin;
          echo 1;
       }else{
         echo 'redirecting to user dashboard';
       }         
  	}else{
  		echo "No such user exist in database";
  	}	
  }


}



?>


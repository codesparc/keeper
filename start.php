<?php
 require_once __DIR__.'/core/init.php';	

 //print_r(connectDB::getInstance());
 $user = new User();
 print_r($user->login('admin@gmail.com','12345678'));
?>

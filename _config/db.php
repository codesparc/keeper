<?php
/**
 Database Connection	
*/
 $host = 'localhost';
 $user =  'root';
 $pass =  'root';
 $db   =  'keeper';

 $conn = mysqli_connect($host,$user,$pass,$db);

 if(!$conn){
 	mysqli_close($conn);
 	die('Could not connect with mysql: '.mysqli_connect_error($conn));
 }

?>
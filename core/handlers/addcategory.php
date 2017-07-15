<?php
include_once '../init.php';
include_once Url::basepath().'core/functions/commons.php';


if(isset($_POST['category'])){
  	$catName  =  (!empty($_POST['category']))?$_POST['category']:'';  
  	$parentID =  (!empty($_POST['parentID']))?$_POST['parentID']:0;
  	$status   =  (!empty($_POST['isActive']))?$_POST['isActive']:0;  	
    $conn     =  connectDB::getInstance();

   	$res = isCategory($catName,$conn);
   	//$res = insertCategory($catName,$parentID,$status,$conn);  
   	echo $res;
 }

?>
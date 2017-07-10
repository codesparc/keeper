<?php
 include_once '../includes/header.php'; 
 include_once '../functions/commons.php';
/* include_once helperURL::includeFunc().'commons.php';*/
 // include_once helperURL::configURL().'db.php';


if(isset($_POST['category'])){
  	$catName = !empty($_POST['category'])?$_POST['category']:'';  
  	$parentID = !empty($_POST['parentID'])?$_POST['parentID']:'';
  	$status = !empty($_POST['isActive'])?$_POST['isActive']:'';
    
   	$res = insertCategory($catName,$parentID,$status);
   	//echo $res;
 }
?>
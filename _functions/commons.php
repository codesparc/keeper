<?php
 include_once '../includes/header.php';
 include_once helperURL::configURL().'db.php';

//function to add category into database
function insertCategory($catName,$parentID,$status){
	$sql = "INSERT INTO keep_categories COLUMN(categoryName,parentID,status) VALUES($catName,$parentID,$status)";
	$response = mysqli_query($conn,$sql);
	if($response){
        echo 'Category added';
	}else{
		mysqli_connect_error($conn);
	}

	return 'I am working';
}  

?>
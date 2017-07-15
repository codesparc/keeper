 <?php

//Add category
function insertCategory($catName,$parentID,$status,$conn){
	$sql = "INSERT INTO category(categoryName,parentID,status) VALUES('".$catName."',$parentID,$status)";

	$response = $conn->query($sql);
	
	if($response){
        return 1;
	}else{
		mysqli_connect_error($conn);
	}

}

//Check if category alredy exist
function isCategory($category,$conn){
	$sql = "SELECT categoryName from category WHERE categoryName LIKE'".$category."%'";
    $response = $conn->query($sql);
    $result = $conn->fetch_assoc($response);
    //echo $result['categoryName'];	
}

?>
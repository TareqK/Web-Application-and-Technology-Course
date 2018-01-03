<?php
$authorization_file="./utils/authorization.php";
require($authorization_file);
$database_file= "./config/database.php";
include_once($database_file);


$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){
 
 if(authorize_process(1)){
	 
 $postBody = file_get_contents("php://input");
 $postBody = json_decode($postBody);
 if(empty($_FILES['image']['tmp_name'])||!isset($postBody->image)||!isset($postBody->caption)||!isset($postBody->locationId)){
 echo("Something is missing!");
 http_response_code(400);
 }else{
	 
 $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
 $caption =  $postBody->caption;
 $location_id = $postBody->locationId;
 $sql = "INSERT INTO `images`(`image_id`, `caption`, `image`,`location_id`) VALUES (NULL, '".$caption."', '".$image."',".$location_id.")";
 $db->conn->query($sql) or die($db->conn->error);
 $db->conn->commit();
 $db->conn->close();
}
}else{
	http_response_code(403);
}
}else if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(isset($_GET['location_id'])){
  $location_id = $_GET['location_id'];
  $sql = "SELECT `image_id` FROM `images` WHERE `location_id` = ".(int)$location_id.""; 
  $res =  $db->conn->query($sql) or die($db->conn->error);
  $set = array();
  while($row = $res->fetch_assoc()) {
	array_push($set,$row);
	}
  echo(json_encode($set));	
  $db->conn->close();
  }else if(isset($_GET['image_id'])){
	$image_id=$_GET['image_id'];
	$sql = "SELECT * FROM `images` WHERE `image_id` = ".(int)$image_id.""; 
    $res =  $db->conn->query($sql) or die($db->conn->error);
    if($res){
		$row = $res->fetch_assoc();
		echo('<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>');
	}
	else{
		http_response_code(400);
		echo("image not found");
	}
	  
  }
  
 
}else if($_SERVER['REQUEST_METHOD'] == "DELETE"){
  $postBody = file_get_contents("php://input");
  $postBody = json_decode($postBody);
  $image_id = $postBody->imageId;
  $sql = "DELETE * FROM `images` WHERE `image_id` = ".(int)$image_id.""; 
  $res =  $db->conn->query($sql) or die($db->conn->error);
  $db->conn->commit();
  $db->conn->close();
}

?>

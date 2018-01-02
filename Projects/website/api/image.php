<?php
$authorization_file="/var/www/html/api/utils/authorization.php";
require($authorization_file);


$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){
 
 if(authorize_process(1)){
	 
 $postBody = file_get_contents("php://input");
 $postBody = json_decode($postBody);
 if(!isset($postBody->image)||!isset($postBody->caption)||!isset($postBody->locationId)){
 echo("Something is missing!");
 http_response_code(400);
 }else{
 $image = $postBody->image;
 $caption =  $postBody->caption;
 $location_id = $postBody->locationId;
 $sql = "INSERT INTO `images`(`image_id`, `caption`, `image`,`location_id`) VALUES (NULL, '".$caption."', '".$image."',"$location_id")";
 $db->conn->query($sql) or die($db->conn->error);
 $db->conn->commit();
 $db->conn->close();
}
}else{
	http_response_code(403);
}
}else if($_SERVER['REQUEST_METHOD'] == "GET"){
	
  $location = $_GET['location'];
  $sql = "SELECT `image` FROM `images` WHERE `location_id` = "(int).$location.""; 
  $res =  $db->conn->query($sql) or die($db->conn->error);
  $set = array();
  while($row = $res->fetch_assoc()) {
	array_push($set,$row);
	}
  echo(json_encode($set));	
  $db->conn->close();
 
}else if($_SERVER['REQUEST_METHOD'] == "DELETE"){
  $postBody = file_get_contents("php://input");
  $postBody = json_decode($postBody);
  $image_id = $postBody->imageId;
  $sql = "DELETE * FROM `images` WHERE `image_id` = "(int).$image_id.""; 
  $res =  $db->conn->query($sql) or die($db->conn->error);
  $db->conn->commit();
  $db->conn->close();
}

?>

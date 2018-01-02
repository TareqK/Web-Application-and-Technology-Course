<?php
$authorization_file="/var/www/html/api/utils/authorization.php";
require($authorization_file);


$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(authorize_process(1)){
	 
 $postBody = file_get_contents("php://input");
 $postBody = json_decode($postBody);
 if(!isset($postBody->locationName)||!isset($postBody->locationDescription)){
 echo("Something is missing!");
 http_response_code(400);
 }else{
 $location_name = $postBody->locationName;
 $location_description =  $postBody->locationDescription;
 $sql = "INSERT INTO `locations`(`location_id`, `location_name`, `location_description`) VALUES (NULL, '".$location_name."', '".$location_description.")";
 $db->conn->query($sql) or die($db->conn->error);
 $db->conn->commit();
 $db->conn->close();
}
}else{
	http_response_code(403);
}
}else if($_SERVER['REQUEST_METHOD'] == "GET"){
	
  $location = $_GET['location'];
  $sql = "SELECT * FROM `locations` WHERE `location_id` = "(int).$location.""; 
  $db->conn->query($sql) or die($db->conn->error);
  $db->conn->close();
 
}
 
?>

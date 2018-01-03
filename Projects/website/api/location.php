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

  if(!isset($_GET['location_id'])){
  $sql = "SELECT * FROM `locations`"; 
  $set = array();
  $res = $db->conn->query($sql) or die($db->conn->error);
  $db->conn->close();
  $set=array();
  while($row = $res->fetch_assoc()) {
     array_push($set,$row);
  }
  echo(json_encode($set));
}else{
	$location_id = $_GET['location_id'];
	$sql = "SELECT * FROM `locations` WHERE `location_id` = ".$location_id.""; 
	$res = $db->conn->query($sql) or die($db->conn->error);
    $db->conn->close();
    if($res){
	  $row = $res->fetch_assoc();
	  echo(json_encode($row));
	}
	else{
	 http_response_code(400);	
	 echo("location not found");
	}
}
 
}
 
?>

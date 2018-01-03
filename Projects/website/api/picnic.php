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
 if(!isset($postBody->picnicDate)||!isset($postBody->departureTime)||!isset($postBody->arrivalTime)||!isset($postBody->returnTime)||!isset($postBody->description)||!isset($postBody->activities)||!isset($postBody->foodOffered)||!isset($postBody->locationId)){
 echo("Something is missing!");
 http_response_code(400);
 }else{	 
 $picnic_date = $postBody->pinicDate;
 $departure_time = $postBody->departureTime;
 $arrival_time = $postBody->arrivalTime;
 $return_time = $postBody->returnTime;
 $description = $postBody->description;
 $activities = $postBody->activities;
 $food_offered = $postBody->foodOffered;
 $location_id = $postBody->locationId;
 $sql = "INSERT INTO `picnics` (`picnic_id`, `date`, `departure_time`, `arrival_time`, `return_time`, `description`, `activities`, `food_offered`, `location_id`) VALUES (NULL, '', '', '', '', '', '', '', '')";
 $db->conn->query($sql) or die($db->conn->error);
 $db->conn->commit();
 $db->conn->close();
}
}else{
	http_response_code(403);
}
}else if($_SERVER['REQUEST_METHOD'] == "GET"){

  if(isset($_GET['picnic_id'])){
	$picnic_id = $_GET['picnic_id'];
	$sql = "SELECT * FROM `pinics` WHERE `picnic_id` = ".$picnic_id.""; 
	$res = $db->conn->query($sql) or die($db->conn->error);
    $db->conn->close();
    if($res){
	  $row = $res->fetch_assoc();
	  echo(json_encode($row));
	}
	else{
	 http_response_code(400);	
	 echo("picnic not found");
	}
}else if(isset($_GET['date'])){
	$date = $_GET['date'];
	$sql = "SELECT * FROM `picnics` WHERE `date` = '".$date."'"; 
	$res = $db->conn->query($sql) or die($db->conn->error);
    $db->conn->close();
    $set=array();
	while($row = $res->fetch_assoc()) {
     array_push($set,$row);
	}
	echo(json_encode($set));
}else if(isset($_GET['location_id'])){
	$location_id = $_GET['location_id'];
	$sql = "SELECT * FROM `picnics` WHERE `location_id` = ".$location_id.""; 
	$res = $db->conn->query($sql) or die($db->conn->error);
    $db->conn->close();
    $set=array();
	while($row = $res->fetch_assoc()) {
     array_push($set,$row);
	}
	echo(json_encode($set));
}

 
}
 

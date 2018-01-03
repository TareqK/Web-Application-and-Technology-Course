<?php
$authorization_file="./utils/authorization.php";
require($authorization_file);
$database_file= "./config/database.php";
include_once($database_file);


$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $postBody = file_get_contents("php://input");
  $postBody = json_decode($postBody);
  if(authorize_process(0)){
	  if(!isset($postBody->picnicId)||!isset($postBody->numberOfPeople)){
		echo("Something is missing!");
		http_response_code(400);
	  }else{
		
		  
		  $picnic_id = $postBody->picnicId;
		  $number_of_people = $postBody->numberOfPeople;
		  $special_notes = "";
		  if($postBody->specialNotes){
			  $special_notes = $postBody->specialNotes;
		  }
		  $token= $_COOKIE['session_token'];
		  $sql1 = "SELECT UUID FROM `users` WHERE `token` = '".$token."'";
		  $res = $db->conn->query($sql1) or die($db->conn->error);
		  $db->conn->commit();
		  $db->conn->close();
		  if(!res){
			  http_response_code(403);
			  die("Please log in to reserve");
		  }
		  $row = $res->fetch_row();
		  $UUID = $row[0];
		  
		  $sql2 = "INSERT INTO `reservations` (`reservation_id`, `picnic_id`, `user_id`, `number_of_attendees`, `special_notes`) VALUES (NULL, '".$picnic_id."', '".$UUID."', '".$number_of_people."', '".$special_notes."')";
		  $db2 = new Database();
		  $res = $db2->conn->query($sql2) or die($db2->conn->error);
		  $db2->conn->commit();
		  $db2->conn->close();
		
	  }
	  
  }
  else{
	  http_response_code(403);
	  echo("Hello There General Kenobi");
  }
	 
}	 
?>

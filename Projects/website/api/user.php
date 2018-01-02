 <?php
 
$authorization_file="/var/www/html/api/utils/authorization.php";
require($authorization_file);


$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){
 $postBody = file_get_contents("php://input");
 $postBody = json_decode($postBody);

 
 if(!isset($postBody->username)||!isset($postBody->password)||!isset($postBody->email)||!isset($postBody->accountType)||!isset($postBody->phoneNumber)){
 echo("Something is missing!");
 http_response_code(400);
 }else{
 $username = $postBody->username;
 $password = $postBody->password;
 $email = $postBody->email;
 $phone_number = $postBody->phoneNumber;
 $account_type = $postBody->accountType;
 
 if($account_type===0){
 $sql="INSERT INTO `users`(`UUID`, `username`, `password`,`token`, `account_type`, `email`, `phone_number`) VALUES (NULL, '".$username."', '".$password."', NULL, ".$account_type.", '".$email."', '".$phone_number."')";
 if($db->conn->query($sql)==True){
 $db->conn->commit();
 }else{
 echo($db->conn->error);
 }
 
 }
 
 else if($account_type>=1){
 
 if(authorize_process($account_type)===True){
 $sql="INSERT INTO `users`(`UUID`, `username`, `password`,`token`, `account_type`, `email`, `phone_number`) VALUES (NULL, '".$username."', '".$password."', NULL, ".$account_type.", '".$email."', '".$phone_number."')";
  if($db->conn->query($sql)){
  $db->conn->commit();
  }
  else{
  echo($db->conn->error);
  }
 
 }
 else{
    http_response_code(403);
 }
 
 }else{

    http_response_code(400);
    
 }

}
    $db->conn->close();
}
else if($_SERVER['REQUEST_METHOD'] == "GET"){

if(authorize_process(1)){
$sql="SELECT * FROM users";
$res = $db->conn->query($sql) or die($db->conn->error);
$set = array();
while($row = $res->fetch_assoc()) {
array_push($set,$row);
}
echo(json_encode($set));
}
else{
echo("Hello there General Kenobi");
}
$db->conn->close();

}


?>

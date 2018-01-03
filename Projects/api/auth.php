 <?php
$authorization_file="./utils/authorization.php";
require($authorization_file);
$database_file= "./config/database.php";
include_once($database_file);


$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){
 
 $postBody = file_get_contents("php://input");
 $postBody = json_decode($postBody);
 $username = $postBody->username;
 $password = $postBody->password;
 

 $sql= "SELECT UUID, password FROM `users` WHERE username = '".$username."'";
 $res = $db->conn->query($sql) or die($db->conn->error);
 if ($res && mysqli_num_rows($res) === 0) { 
    http_response_code(403);
 }else{

    $row = $res->fetch_row();

    if(strcmp($password,$row[1])==0){
        $UUID = $row[0];
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $sql="UPDATE `users` SET `token` = '".$token."' WHERE UUID = '".$UUID."'";
        $db->conn->query($sql) or die($db->conn->error);
        $db->conn->commit();
        
        setcookie("session_token",$token);
        http_response_code(200);
        }else{
        http_response_code(403);
        }
        

    }
    $db->conn->close();
}

else if($_SERVER['REQUEST_METHOD'] == "GET"){
echo("Hello there General Kenobi");
}
 
?>

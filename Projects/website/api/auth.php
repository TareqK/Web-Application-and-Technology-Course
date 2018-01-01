 <?php

$authorization_file="/var/www/html/api/utils/authorization.php";
require($authorization_file);


$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){
 // Get data
 $postBody = file_get_contents("php://input");
 $postBody = json_decode($postBody);
 $username = $postBody->username;
 $password = $postBody->password;
 

 $sql="SELECT UUID, password FROM 'users' WHERE 'username' = '".$username."'";
 $res = $db->conn->query($sql);
 if (mysqli_num_rows($res) === 0) { 
    http_response_code(403);
 }else{

    $row = $res->fetch_row();
 // Insert data into data base
    if(strcmp($password,$row[1])==0){
        $UUID = $row[0];
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $sql="UPDATE 'users' SET 'token' = ".$token." WHERE UUID = ".$UUID."";
        $db->conn->query($sql);
        $db->conn->commit();
        setcookie("session_token",$token);
        http_response_code(200);
        }else{
        http_response_code(403);
        }

    }
}

else if($_SERVER['REQUEST_METHOD'] == "GET"){
echo("Hello world");
}
 
?>

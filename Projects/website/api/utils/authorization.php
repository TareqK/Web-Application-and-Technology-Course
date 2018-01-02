<?php 

ini_set("error_reporting", E_ALL);
$database_file= "/var/www/html/api/config/database.php";
include_once($database_file);

function authorize_process($level){
if(!isset($_COOKIE['session_token'])){
 http_response_code(401);
}
 $token= $_COOKIE['session_token'];
 $db = new Database();
 $sql="SELECT `UUID`, `account_type` FROM users WHERE token = '".$token."'";
 $res = $db->conn->query($sql);

 if (mysqli_num_rows($res) ===0) { 
    http_response_code(401);
 }else{
    $row = $res->fetch_row();
    if((int)$row[1]>=$level){
        return True;
    }else{
        return False;
        }
    }

}

?>

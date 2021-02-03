<?php 
include_once 'user.php';    
include_once 'dbConnect.php';    
$con = new DBConnect();    
$pdo = $con->connect();

if($_POST['rp']){
$email = $_POST['Uemail'];
}
//create object for user and call changePassword function

?>

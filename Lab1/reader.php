<?php  
include_once 'user.php';    
include_once 'dbConnect.php';    
$con = new DBConnect();    
$pdo = $con->connect();   

 

if($_POST['register']){              
	$fName = $_POST['fName'];        
	$email = $_POST['Email'];        
	$password = $_POST['passW']; 
	$cor = $_POST['cor'];      
	$prof = $_FILES['prof']['name'];

	$user = new User($fName,$email,$cor,$password,$prof);        
	$user->setFullName($fName); 
	$user->setEmail($email);
	$user->setCityOfResidence($cor);
	$user->setProfilePic($prof);
	echo $user->register($pdo); 

}
if ($_POST['login']) 
{             
 	$username = $_POST['Email'];        
 	$password = $_POST['passW'];       
  	$user = new User($username, $password);       
  	 echo $user->login($pdo);    }

?>

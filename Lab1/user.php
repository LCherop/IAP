<?php  
interface Account{
	public function register($pdo);
	public function login($pdo);
	public function changePassword($pdo);
	public function logout($pdo);
}
class User implements Account
{
	protected $email;
	protected $passW;
	protected $fName;
	protected $cor;
	protected $prof;
	
	function __construct($email,$pass)
	{
		
		$this->email = $email;
		$this->passW = $pass;
	
	}

	

	public function setFullName($Name){
		$this->fName= $Name;
	}
	 public function getFullName (){ 
	        	return $this->fName;      
	} 

	public function setCityOfResidence($res){
		$this->cor= $res;
	}

	 public function getCityOfResidence (){ 
	        	return $this->cor;      
	}

	public function setProfilePic($pp){
		$this->prof= $pp;
	} 

	 public function getProfilePic (){ 
	        	return $this->prof;      
	} 



	public function register($pdo){

		$passwordHash = password_hash($this->passW,PASSWORD_DEFAULT);


		try {        
			$stmt=$pdo->prepare("INSERT INTO `users`(`userId`, `fullName`, `email`, `cor`, `password`, `profilePhoto`) VALUES (NULL,?,?,?,?,?)");        
			
			$stmt->execute([
				$this->getFullName(),
				$this->email,
				$this->getCityOfResidence(),
				$passwordHash,
				$this->getProfilePic()]);    

			

			return "User has joined successfully";  
			header("Location: landingPage.php");
		} catch (PDOException $e) {    	
			return $e->getMessage();    }}

	
	public function login($pdo){

		try {        
			$stmt=$pdo->prepare("SELECT `password` FROM `users` WHERE `email` =?");        
			$stmt->execute([$this->email]);       
			
			$row = $stmt->fetch();               
			 if($row == null){                	
			 	return "This account does not exist";}                
			 	if (password_verify($this->passW,$row['password'])){                	
			 		return "Login successfull"; 
					header("Location: landingPage.php");
			 	}    

		       return "Incorrect credentials";    
		   } catch (PDOException $e) {    	return $e->getMessage();    }}

	
	public function changePassword($pdo){

	}
	public function logout($pdo){

	}
}

?>

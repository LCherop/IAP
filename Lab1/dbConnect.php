<?php 

include_once './utilss.php';

class DBConnect
{
	
	

	protected $pdo;

	function __construct()
	{

		$dsn="mysql:host=".Util::$SERVER_NAME.";dbname=" .Util::$DB_NAME .""; 


		try {
  		$this->pdo=new PDO($dsn,Util::$DB_USER,Util::$DB_USER_PASS);
		
	  	echo "Connected successfully";
		} catch(PDOException $e) {
 		echo "Connection failed: " . $e->getMessage();
		}
	}

	public function connect(){
		return $this->pdo;
	}

	public function closeDB(){
		$this->pdo = null;
	}
}


?>
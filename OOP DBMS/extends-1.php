<?php 

	class Database{

		private $host="localhost";
		private $user="root";
		private $pass="";
		private $dbname="telebe";

		public function __construct(){
			if(mysqli_connect($this->host,$this->user,$this->pass,$this->dbname)){
				echo "Connected";
			}else{
				echo "Not Connected";
			}
		}
		

	}

  $newDb=new Database;

 


 ?>
<?php 

class Database{
	public $hostname;
	public $username;
	public $password;
	public $dbname;
	public $conn;



	public function __construct($host,$user,$pass,$db){
		$this->hostname=$host;
		$this->username=$user;
		$this->password=$pass;
		$this->dbname=$db;

		$this->conn=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
		if(!$this->conn){
			echo "Error";
		}
	}

	public function select($tname){
		$sql="SELECT * FROM $tname";
		$query=mysqli_query($this->conn,$sql);
		return $query;
	} 

	public function insert($tname,$ad,$soyad){
		$sql="INSERT INTO $tname(name,surname) VALUES('$ad','$soyad')";
		$query=mysqli_query($this->conn,$sql);
		return $query;
	} 

	public function update($tname, $ad, $soyad) {
		$sql = "UPDATE $tname SET surname='$soyad' WHERE name='$ad'";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

	public function delete($tname, $ad) {
		$sql = "DELETE FROM $tname WHERE name='$ad'";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}
}




 ?>
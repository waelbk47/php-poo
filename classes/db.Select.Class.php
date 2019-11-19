<?php

require 'db.connect.class.php';

class Client {
	
	private $cnx;
	 
	public function __construct()
	{
		$db = new DataBase;
		$this->cnx= $db->connectDB();
	}
	public function readAllClients()
	{
		
		try {
			$req = 'SELECT * FROM client';
			$result = $this->cnx->prepare($req);
			$result->execute();	
			return $result;
		
		}catch(PDOException $e)
		{
		 echo $e->getMessage();
		}	
	}
	
	public function createClient($nom,$prenom,$adr,$tel)
	{
		try{
			$req2 = "INSERT INTO client(Id,First_Name,Last_Name,Phone_Number,Email)
			          VALUES(NULL,:clt_nom,:clt_prenom,:clt_adr,:clt_tel)";
			$result = $this->cnx->prepare($req2);
			$result->bindparam(":clt_nom",$nom);
			$result->bindparam(":clt_prenom",$prenom);
			$result->bindparam(":clt_adr",$adr);
			$result->bindparam(":clt_tel",$tel);
			$result->execute();
		}catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
	
	public function DeleteClient($id)
	{
		try{
			$req3= "DELETE FROM `client`  WHERE `Id`= :clt_id";
		$result = $this->cnx->prepare($req3);
		$result->bindparam(":clt_id",$id);
		$result->execute();
	}catch(PDOException $ex){
			echo $ex->getMessage();
		}
}
}
?>
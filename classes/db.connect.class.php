<?php

class DataBase
{
	private $host ='localhost';
	private $dbname='repertoir';
	private $user ='root';
	private $pwd =''; 
	
	public $pdo= null ;
	
	public function connectDB()
	{
	 try{
		 $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,
							 $this->user,
							 $this->pwd); 
	return $this->pdo; 
	 }catch(PDOException $e){
		 echo $e->getMessage();
	 }
		
	}}

?>
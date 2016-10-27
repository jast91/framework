<?php
class classPDO 
{
	public $connection;
	private $dsn;
	private $drive;
	private $host;
	private $database;
	private $username;
	private $password;
	public $result;
	public $lastInsertId;
	public $numberRows;

	public function __construct(
		$drive = "mysql",
		$host = "localhost",
		$database = "test",
		$username = "root",
		$password = ""
	){
	$this->drive = $drive;
	$this->host = $host;
	$this->database = $database;
	$this->username = $username;
	$this->password = $password;
	$this->connection();
	} 

	private function connection(){
		$this->dsn = $this->drive.":host=".$this->host.";dbname=".$this->database;

		try {
			$this->connection = new PDO(
				$this->dsn,
				$this->username,
				$this->password);
			
			$this->connection->setAttribute(
				PDO::ATTR_ERRMODE,
				PDO::ERRMODE_EXCEPTION
			);
		} catch (Exception $e) {
			echo "ERROR: ".$e->getMessage();
			die();
		}
	}

	public function find(){

	}

	public function save($table, $data = array()){
		$sql = "SELECT * FROM $table";
		$result = $this->connection->query($sql);

		for ($i=0; $i < $result->columnCount(); $i++) { 
			$meta = $result->getColumnMeta($i);
			$fields[$meta["name"]] = NULL;
		}

		$fieldsToSave = "id";
		$valuesToSave = "NULL";

		foreach ($data as $key => $value) {
			if (array_key_exists($key, $fields)) {
				$fieldsToSave .= ", ".$key;
				$valuesToSave .= ", "."\"$value\"";
			}
			
		}
		$sql = "INSERT INTO $table ($fieldsToSave) 
		VALUES ($valuesToSave);";
		$this->result = $this->connection->query($sql);

		return $this->result;
	}

	public function update(){

	}

	public function delete(){

	}

	public function __destruct(){

	}
}

/*
class classPDO
{


	
	public $connection;
	private $dsn;
	private $drive;
	private $host;
	private $database;
	private $username;
	private $password;
	public 	$result;
	public 	$lastInserId;
	public  $numberRows;

	public function __construct(
			$drive = "mysql",
			$host = "localhost",
			$database ="test",
			$username ="root",
			$password =""
		){
	
	$this->drive =$drive;
	$this->host = $host;
	$this->database = $database;
	$this->username = $username;
	$this->password = $password;
	$this->connection();
	}

	private function connection(){
		$this->dsn =$this->drive.":host".$this->host.";dbname=".$this->database;

		try{
		$this->connection = new PDO(
			$this->dsn,
			$this->username,
			$this->password);

		$this->connection->setAttribute(
			PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e ){
		echo "ERROR:".$e->getMessage();
		die();
	}
}



	public function  find(){

	}
	public function save($table,$data= array()){
		$sql= "SELECT * FROM $table";
		$result = $this->connection->query($sql);

		for ($i=0; $i < $result->columnCount(); $i++) {
		$meta =$result->getColumnMeta($i);
		$fields[$meta["name"]] =NULL;

			# code...
		}
		$fieldsToSave ="id";
		$valuesToSave ="NULL";

	foreach ($data as $key => $value) {
		if (array_key_exists($key,$fields)) {
			$fieldsToSave .= ",".$key;
			$valuesToSave .= ",."."\"$value\"";
		

		}
	}

	$sql= " INSERT INTO $table ($fieldsToSave) VALUES ($valuesToSave);";
	$this->result =$this->connection->query($sql);

	return $this->result;

	}

	public function update(){

	}

	public function delete (){

	}

	public function __destruct(){

	}
}*/
?>
<?php 

class MechanicModel {

	private $table = 'mechanics';
	private $conection;

	public function __construct() {
		
	}

	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	public function getMechanics(){
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table;
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	public function getMechanicById($id){
		if(is_null($id)) return false;
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table. " WHERE id = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$id]);

		return $stmt->fetch();
	}

	public function save($param){
		$this->getConection();

		$firstname = $lastname = "";

		if(isset($param["firstname"])) $firstname = $param["firstname"];
		if(isset($param["lastname"])) $lastname = $param["lastname"];

			$sql = "INSERT INTO ".$this->table. " (firstname, lastname) values(?, ?)";
			$stmt = $this->conection->prepare($sql);
			$stmt->execute([$firstname, $lastname]);
			$id = $this->conection->lastInsertId();

		return $id;	

	}

	public function deleteMechanicById($id){
		$this->getConection();
		$sql = "DELETE FROM ".$this->table. " WHERE id = ?";
		$stmt = $this->conection->prepare($sql);
		return $stmt->execute([$id]);
	}

}

?>
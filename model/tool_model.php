<?php

class ToolModel
{

	private $table = 'tools';
	private $conection;

	public function __construct()
	{
	}

	public function getConection()
	{
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	public function getTools()
	{
		$this->getConection();
		$sql = "SELECT * FROM " . $this->table;
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	public function getToolById($id)
	{
		if (is_null($id)) return false;
		$this->getConection();
		$sql = "SELECT * FROM " . $this->table . " WHERE id = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$id]);

		return $stmt->fetch();
	}

	public function save($param)
	{
		$this->getConection();

		$nametool = $descriptiontool = "";

		if (isset($param["nametool"])) $nametool = $param["nametool"];
		if (isset($param["descriptiontool"])) $descriptiontool = $param["descriptiontool"];

		$sql = "INSERT INTO " . $this->table . " (nametool, descriptiontool) values(?, ?)";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$nametool, $descriptiontool]);
		$id = $this->conection->lastInsertId();

		return $id;
	}

	public function deleteToolById($id)
	{
		$this->getConection();
		$sql = "DELETE FROM " . $this->table . " WHERE id = ?";
		$stmt = $this->conection->prepare($sql);
		return $stmt->execute([$id]);
	}
}

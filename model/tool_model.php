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

	public function getFreeTools()
	{
		$this->getConection();
		$sql = "SELECT * FROM view_free_tools";
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

		$name = $description = "";

		if (isset($param["name"])) $name = $param["name"];
		if (isset($param["description"])) $description = $param["description"];

		$sql = "INSERT INTO " . $this->table . " (name, description) values(?, ?)";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$name, $description]);
		$id = $this->conection->lastInsertId();

		return $id;
	}

	public function saveMechanicTools($param)
	{
		$this->getConection();

		$mechanic_id = $tool_id = "";

		if (isset($param["mechanic_id"])) $mechanic_id = $param["mechanic_id"];
		if (isset($param["tool_id"])) $tool_id = $param["tool_id"];

		$sql = "UPDATE tools SET state='ocupada' WHERE id=?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$tool_id]);

		$sql = "INSERT INTO mechanics_tools (mechanic_id, tool_id) values(?, ?)";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$mechanic_id, $tool_id]);
		$id = $this->conection->lastInsertId();

		return $id;
	}

	public function getMechanicHaveToolByToolId($id)
	{
		if (is_null($id)) return false;
		$this->getConection();
		$sql = "SELECT * FROM view_mechanics_tools WHERE tool_id = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$id]);

		return $stmt->fetch();
	}

	public function deleteToolById($id)
	{
		$this->getConection();
		$sql = "DELETE FROM " . $this->table . " WHERE id = ?";
		$stmt = $this->conection->prepare($sql);
		return $stmt->execute([$id]);
	}
}

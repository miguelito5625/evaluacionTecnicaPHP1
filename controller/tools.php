<?php

require_once 'model/tool_model.php';
require_once 'model/mechanic_model.php';

class toolsController
{
	public $page_title;
	public $view;
	public $module;

	public function __construct()
	{
		$this->view = 'main_tools';
		$this->module = 'tools';
		$this->page_title = '';
		$this->toolObj = new ToolModel();
		$this->mechanicObj = new MechanicModel();
	}

	public function assignTooltoMechanic()
	{
		$this->page_title = 'Asignar herramientas a mecanicos';
		$this->view = 'assign_tool_to_mechanic';
		$obj = array(
			"mechanics" => $this->mechanicObj->getMechanics(),
			"tools" => $this->toolObj->getFreeTools(),
		);
		return $obj;
		// return $this->toolObj->getTools();
	}

	public function listPage()
	{
		$this->page_title = 'Listado de herramientas';
		$this->view = 'list_tools';
		return $this->toolObj->getTools();
	}

	public function main()
	{
		$this->page_title = 'Control de Herramientas';
	}

	public function registerToolsForm()
	{
		$this->page_title = 'Control de Herramientas';
		$this->view = 'register_tools_form';
	}

	public function save()
	{
		$this->view = 'register_tools_form';
		$this->page_title = 'Registrar Herramienta';
		$id = $this->toolObj->save($_POST);
		$result = $this->toolObj->getToolById($id);
		$_GET["savedTool"] = true;
		return $result;
	}

	public function saveMechanicTools()
	{
		$this->view = 'assign_tool_to_mechanic';
		$this->page_title = 'Asignar herramientas a mecanicos';
		$id = $this->toolObj->saveMechanicTools($_POST);
		$result = $this->toolObj->getToolById($id);
		$_GET["assignedTooltoMechanic"] = true;
		return $result;
	}


	public function showMechanicHaveTool()
	{
		$this->page_title = 'Que mecanico tiene la herramienta';
		$this->view = 'show_mechanic_have_tool';
		$toolid = $_GET['toolid'];
		return $this->toolObj->getMechanicHaveToolByToolId($toolid);
	}

	public function pageEditTool()
	{
		$this->page_title = 'Editar herramienta';
		$this->view = 'edit_tool';
		$toolid = $_GET['toolid'];
		return $this->toolObj->getToolById($toolid);
	}

	public function updateTool()
	{
		$this->view = 'edit_tool';
		$this->page_title = 'Editar Herramienta';
		$id = $this->toolObj->updateTool($_POST);
		$result = $this->toolObj->getToolById($id);
		$_GET["updatedTool"] = true;
		return $result;
	}
}

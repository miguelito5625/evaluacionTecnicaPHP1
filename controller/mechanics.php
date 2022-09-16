<?php 

require_once 'model/mechanic_model.php';

class mechanicsController{
	public $page_title;
	public $view;
	public $module;

	public function __construct() {
		$this->view = 'main_mechanics';
		$this->module = 'mechanics';
		$this->page_title = '';
		$this->mechanicObj = new MechanicModel();
	}

	/* List all notes */
	public function listPage(){
		$this->page_title = 'Listado de mecanicos';
		$this->view = 'list_mechanics';
		return $this->mechanicObj->getMechanics();
	}

	public function main(){
		$this->page_title = 'Control de Mecanicos';
	}

	public function registerMechanicsForm() {
		$this->page_title = 'Control de Mecanicos';
		$this->view = 'register_mechanics_form';
	}

	/* Create or update note */
	public function save(){
		$this->view = 'register_mechanics_form';
		$this->page_title = 'Registrar Mecanico';
		$id = $this->mechanicObj->save($_POST);
		$result = $this->mechanicObj->getNoteById($id);
		$_GET["savedMechanic"] = true;
		return $result;
	}

}

?>
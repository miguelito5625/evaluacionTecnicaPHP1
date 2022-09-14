<?php 

require_once 'model/note.php';

class toolsController{
	public $page_title;
	public $view;
	public $module;

	public function __construct() {
		$this->view = 'main_tools';
		$this->module = 'tools';
		$this->page_title = '';
		$this->toolsObj = new Note();
	}

	/* List all toolss */
	public function list(){
		$this->page_title = 'Herramientas';
		return $this->toolsObj->getNotes();
	}

	/* Load tools for edit */
	public function registerToolsForm(){
		$this->page_title = 'Registrar herrmienta';
		$this->view = 'register_tools_form';
	}

	/* Load tools for edit */
	public function edit($id = null){
		$this->page_title = 'Editar nota';
		$this->view = 'edit_tools';
		/* Id can from get param or method param */
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->toolsObj->getNoteById($id);
	}

	/* Create or update tools */
	public function save(){
		$this->view = 'edit_tools';
		$this->page_title = 'Editar nota';
		$id = $this->toolsObj->save($_POST);
		$result = $this->toolsObj->getNoteById($id);
		$_GET["response"] = true;
		return $result;
	}

	/* Confirm to delete */
	public function confirmDelete(){
		$this->page_title = 'Eliminar nota';
		$this->view = 'confirm_delete_tools';
		return $this->toolsObj->getNoteById($_GET["id"]);
	}

	/* Delete */
	public function delete(){
		$this->page_title = 'Listado de notas';
		$this->view = 'delete_tools';
		return $this->toolsObj->deleteNoteById($_POST["id"]);
	}

}

?>
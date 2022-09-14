<?php 

require_once 'model/note.php';

class mainController{
	public $page_title;
	public $view;
	public $module;

	public function __construct() {
		$this->view = 'main_page';
		$this->module = 'main';
		$this->page_title = '';
		$this->noteObj = new Note();
	}

	public function main(){
		$this->page_title = 'Pagina principal';
		return $this->noteObj->getNotes();
	}

	/* Load note for edit */
	public function edit($id = null){
		$this->page_title = 'Editar nota';
		$this->view = 'edit_note';
		/* Id can from get param or method param */
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->noteObj->getNoteById($id);
	}

	

}

?>
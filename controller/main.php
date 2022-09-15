<?php 


class mainController{
	public $page_title;
	public $view;
	public $module;

	public function __construct() {
		$this->view = 'main_page';
		$this->module = 'main';
		$this->page_title = 'Pagina principal';
	}

	public function main(){
		$this->page_title = 'Pagina principal';
	}

}

?>
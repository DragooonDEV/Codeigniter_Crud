<?php
/**
* 
*/
class Cexcel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Usuario');
		$this->load->library('export_excel');
	}

	public function dExcel(){
		$result = $this->Model_Usuario->getUsuario();
		$this->export_excel->to_excel($result, 'lista_de_personas');
	}
}
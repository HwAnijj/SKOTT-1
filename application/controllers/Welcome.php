<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// public function _remap($method) {

	// 	$this->load->view('assets/css/main.css');
	// 	$this->{$method};
	// 	$this->load->view('assets/js/jquery-1.11.1.min.js');

	// }

	public function index()
	{
		$this->load->view('test');
	}

	public function csstest()
	{
		$this->load->view('csstest.php');
	}

	public function loadSearch()
	{
		$this->load->view('loadSearch.php');
	}

	public function headertest()
	{
		// $this->load->view('headertest.php');

		$t = $this->mymodel->dbtest();	

		$idx = array();
		$name = array();

		for ($i=0; $i<count($t); $i++) {

			$idx[] = $t[$i]->idx;
			$name[] = $t[$i]->name;

		}

		$this->load->view('headertest', 
			array(
				'idx' => $idx,
				'name' => $name,
				)
		);	
	}

	public function web_map()
	{
		$this->load->view('web_map.php');
	}

	public function web_test()
	{
		$this->load->view('web_test.php');
	}

	public function ajax_test() {

		$result = "dd";


		return $result;
	}



}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {

	function __construct() {
		parent::__construct ();
	}

	function index(){

		$this->load->view('test');

	}

	function main($id){
		$this->load->view('head');
		$this->load->view('footer');

		$data = array('id'=>$id);
		$this->load->view('main',$data);
	}
}
?>



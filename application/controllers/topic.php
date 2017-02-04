<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {

	function __construct() {
		parent::__construct ();
	}

	function index(){

		$this->load->model('mymodel');
			
		$t = $this->mymodel->test();	

		$lat = array();
		$lng = array();
		$name = array();

		for ($i=0; $i<count($t); $i++) {

			$lat[] = $t[$i]->lat;
			$lng[] = $t[$i]->lng;
			$name[] = $t[$i]->name;

		}



		$this->load->view('test', 
			array(
				'lat' => $lat,
				'lng' => $lng,
				'name' => $name,



				)
		);

	}

	function main($id){
		$this->load->view('head');
		$this->load->view('footer');

		$data = array('id'=>$id);
		$this->load->view('main',$data);
	}

}
?>



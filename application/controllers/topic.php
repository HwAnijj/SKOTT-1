<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {

	function __construct() {
		parent::__construct ();
	}

	function index(){
			
		$t = $this->mymodel->test();	

		$lat = array();
		$lng = array();
		$idx = array();

		for ($i=0; $i<count($t); $i++) {

			$lat[] = $t[$i]->lat;
			$lng[] = $t[$i]->lng;
			$idx[] = $t[$i]->idx;

		}

		$this->load->view('test', 
			array(
				'lat' => $lat,
				'lng' => $lng,
				'idx' => $idx,
				)
		);

	}

	function detail($url) {

		$result = $this->mymodel->detail($url);

		print_r($result);




	}

}
?>



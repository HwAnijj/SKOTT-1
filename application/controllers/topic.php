<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {

	function __construct() {
		parent::__construct ();
	}

	function index(){
			
		$t = $this->mymodel->test();

		$re = $this->mymodel->recommand_spot();	

		$lat = array();
		$lng = array();
		$idx = array();
		$name = array(); 
		$text = array(); 
		$image = array(); //배열 지정

		$reco_idx = array();
		$reco_name = array();
		$reco_address = array();
		$reco_text = array();
		$reco_star = array();

		for ($i=0; $i<count($t); $i++) {
			$lat[] = $t[$i]->lat;
			$lng[] = $t[$i]->lng;
			$idx[] = $t[$i]->idx;
			$name[$i]= $t[$i]->name;
			$text[$i]= $t[$i]->text;
			$image[$i]= $t[$i]->image;
		}							//디비 값 넣기

		// for ($i=0; $i<count($re); $i++) {
		// 	$reco_idx[] = $re[$i]->reco_idx;
		// 	$reco_name[] = $re[$i]->reco_name;
		// 	$reco_address[] = $re[$i]->reco_address;
		// 	$reco_text[]= $re[$i]->reco_text;
		// 	$reco_star[]= $re[$i]->reco_star;
		// }							//디비 값 넣기


		//print_r($name);
		//var_dump($name);
		//echo json_encode($name);

		// echo md5('hello');
		$this->load->view('test', 
			array(
				'lat' => $lat,
				'lng' => $lng,
				'idx' => $idx,
				'name' => $name,
				'text' => $text,
				'image' => $image,
				'reco_idx' => $reco_idx,
				'reco_name' => $reco_name,
				'reco_text' => $reco_text,
				'reco_address' => $reco_address,
				'reco_star' => $reco_star,
				'recommand_spot'=>$re
				)					//변수 이름으로
		);


	}

	function detail($url) {

		$detail_result = $this->mymodel->detail($url);

		$location_result = $this->mymodel->location_infos();

		$idx = $detail_result->idx;
		$spot_idx = $detail_result->spot_idx;
		$text = $detail_result->text;

		$idx = array();	
		$lat = array();
		$lng = array();
		$driving_idx = array();
		$date = array();

		//print_r($location_result);
		//var_dump($name);
		//echo json_encode($name);

		// echo md5('hello');
		
		$this->load->view('detail', 
			array(
				'idx' => $idx,
				'spot_idx' => $spot_idx,
				'text' => $text,
				'location_result' => $location_result
				)					//변수 이름으로
		);


	}



	function location_infos() {

		$idx = array();	
		$lat = array();
		$lng = array();
		$driving_idx = array();
		$date = array();

		for ($i=0; $i<count($result); $i++) {
			$idx[] = $result[$i]->idx;
			$lat[] = $result[$i]->lat;
			$lng[] = $result[$i]->lng;
			$driving_idx[$i]= $result[$i]->driving_idx;
			$date[$i]= $result[$i]->date;
		}							//디비 값 넣기

		//print_r($name);
		//var_dump($name);
		//echo json_encode($name);

		// echo md5('hello');

		$this->load->view('test', 
			array(
				'idx' => $idx,
				'lat' => $lat,
				'lng' => $lng,
				'driving_idx' => $driving_idx,
				'date' => $date,
				)					//변수 이름으로
		);

	}

}
?>



<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {

	// public function _remap($method) {
	// 	if($method =='song')
	// 	{
	// 		$this->$method();
	// 	}
	// 	else
	// 	{
	// 		$this->default_method();
	// 	}
	// }

	// public function _output($output)
	// {
	//     echo $output;
	// }

    function index(){
    	$this->load->view('head');
    	$this->load->view('footer');
        $this->load->view('topic');
    }

    function main($id){
    	$this->load->view('head');
    	$this->load->view('footer');

    	$data = array('id'=>$id);
        $this->load->view('main',$data);
    }
}
?>



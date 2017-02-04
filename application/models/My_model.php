<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 계정 데이터 관리
 */
class My_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}


	function test() {

		$this->db->select('*');
		$this->db->from('song');


		return $this->db->get()->result();

	}




}
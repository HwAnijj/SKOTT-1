<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 계정 데이터 관리
 */
class Mymodel extends CI_Model
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

	function detail($idx) {

		$this->db->select('*');
		$this->db->from('detail');

		$this->db->where('idx', $idx);

		return $this->db->get()->row();
	}






}
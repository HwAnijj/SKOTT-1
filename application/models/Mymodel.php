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


	function test() 
	{
		$this->db->select('*');
		$this->db->from('spot');

		return $this->db->get()->result();
	}

	function recommand_spot() 
	{
		$this->db->select('*');
		$this->db->from('recommand_spot');

		return $this->db->get()->result();
	}


	function dbtest() {

		$this->db->select('*');
		$this->db->from('test');

		return $this->db->get()->result(); //전체 출력
	}


	function detail($idx) {

		$this->db->select('*');
		$this->db->from('detail');

		$this->db->where('idx', $idx);

		return $this->db->get()->row(); //한줄 출력
	}

	function location_infos() {

		$this->db->select('*');
		$this->db->from('location_infos');

		return $this->db->get()->result();
}


}
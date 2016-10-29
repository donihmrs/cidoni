<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function simpan($table,$data)
	{
		$this->db->insert($table,$data);
	}

	public function view()
	{
		$query = $this->db->query("SELECT * FROM task");
		return $query->result_array();
	}
}
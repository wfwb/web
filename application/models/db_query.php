<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_Query extends CI_Model {

	public function join_us_query() {
		$query = $this->db->query('SELECT * FROM join_us');
		return $query->result_array();
	}

}
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Db_Query extends CI_Model {

	public function get_join_us_db() {
		$query = $this->db->query('SELECT * FROM join_us');
		return $query->result_array();
	}

}
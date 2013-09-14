<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join_us extends CI_Model {
	
	public function add_join_us() {

		$data = array(
			'thumbnail_img' => $this->input->post('thumbnail_img'),
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order')
		);

		return $this->db->insert('join_us', $data);

	}

	public function edit_join_us() {

		$data = array(
			'thumbnail_img' => $this->input->post('thumbnail_img'),
			'heading' => $this->input->post('heading'),
			'detail' => $this->input->post('detail'),
			'order' => $this->input->post('order')
		);

		$where = "id = " . $this->input->post('id');

		$str = $this->db->update_string('join_us', $data, $where);

		return $this->db->query($str);
	}

	public function delete_join_us() {

		$query = "DELETE FROM wfwb.join_us WHERE id=".$this->input->post('id');
		return $this->db->query($query);
			
	}

}
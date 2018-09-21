<?php
class Gallery_model extends CI_Model {

	function getSlider(){
		$this->db->select("*"); 
		$this->db->from('tbl_gallery');
		// $this->db->limit(1);
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>
<?php
class Gallery extends CI_Model {

	function getSlider(){
		$query = $this->db->get('tbl_gallery');
		return $query->result_array();
	}
}
?>
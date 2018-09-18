<?php
class Gallery extends CI_Model {

	function getSlider(){
		$query = $this->db->get('gallery');
		return $query->result_array();
	}
}
?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	function checkDownTime($kod,$ownerId)
	{
		$this->db->select('*');
		$this->db->from('tbl_websetting');
		$this->db->where('functionCode', $kod);
		$this->db->where('workgroupId', $ownerId);

		$query = $this->db->get();

		if($query->num_rows()==0){
			return FALSE;
		} else {
			return $query->result();
		}
	}
	
}
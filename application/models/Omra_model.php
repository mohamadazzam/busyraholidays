<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Omra_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	function getPackageCategory($ownerId)
	{
		$this->db->select("*"); 
		$this->db->from('tbl_category');
		$this->db->where('workgroup',$ownerId);
		$query = $this->db->get();
		return $query->result_array();
	}

	function getPromotion($ownerId)
	{
		$this->db->select("*"); 
		$this->db->from('tbl_package_omra');
		$this->db->where('workgroup',$ownerId);
		$query = $this->db->get();
		return $query->result_array();
	}
	
}
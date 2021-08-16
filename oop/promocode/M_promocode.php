<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_promocode extends CI_Model {
	 
	function __construct() {
		
        parent::__construct();
		
		$this->load->database();
    }
	
	function addPromocode($data)
	{
		// print_r($data);die('model');
		$this->db->insert('tbl_promo_offer', $data);
		
		$insert_id = $this->db->insert_id();

		return  $insert_id;
	}
	
	function updateUser($data,$user_id)
	{
		$this->db->where('user_id', $user_id);
		
		$this->db->update('tbl_promo_offer', $data);

		return true;
	}
	
	function getPromocode($id ='')
	{
		if($id != ''){	
			$this->db->select('*');
			$this->db->from('tbl_promo_offer');
			$this->db->where('id',$id);

			$query = $this->db->get();
			return  $query->row();
		}
		
		$this->db->select('*');
		$this->db->from('tbl_promo_offer');
/*		$this->db->where('isActive',1);
*/
		$query = $this->db->get();

		return  $query->result();
	}
	     
}

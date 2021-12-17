<?php

class barang_model extends CI_Model {

	public function get_barang()
	{
        $query =$this->db->query("Select * from cat_avian");
        return $query->result_array;
	}
	
	
}
<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Website_model extends CI_Model{

	public function __construct(){
		parent:: __construct();
		date_default_timezone_set("Asia/Kolkata");
	}
	
	// use this model to get data from database and show in website.

	public function get_core_products(){
		$sql = "SELECT * FROM add_products WHERE product_type = 'core' AND inactive = '0' AND is_delete = '0' ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function get_api_products(){
		$sql = "SELECT * FROM add_products WHERE product_type = 'api' AND inactive = '0' AND is_delete = '0' ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function get_custom_synt_products(){
		$sql = "SELECT * FROM add_products WHERE product_type = 'cust_synthesis' AND inactive = '0' AND is_delete = '0' ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function get_enzymes_products(){
		$sql = "SELECT * FROM add_products WHERE product_type = 'enzymes' AND inactive = '0' AND is_delete = '0' ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function get_excipients_products(){
		$sql = "SELECT * FROM add_products WHERE product_type = 'excipients' AND inactive = '0' AND is_delete = '0' ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	public function get_intermediates_products(){
		$sql = "SELECT * FROM add_products WHERE product_type = 'intermediates' AND inactive = '0' AND is_delete = '0' ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}
}

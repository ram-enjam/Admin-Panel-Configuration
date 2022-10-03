<?php
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Login_model extends CI_Model{
	public function __construct(){
		parent :: __construct();
	}
	public function validate_login(){
		// $this->db->select("username,password");
		// $this->db->where(array(
		// 	'username' => $this->input->post("username"),
		// 	'password' => $this->input->post("password"),
		// 	'inActive' => 0
		// ));
		// $query = $this->db->get('users');
		 $select = "SELECT * FROM users where username='".$this->input->post('username')."' AND password='".$this->input->post('password')."' AND inActive='0'"; 
         $query = $this->db->query($select)->row();
         if($query){
         	return true;
         } else{
         	return false;
         }
	}

	public function getMyModule($user_id){
		 $select = "SELECT A.*,B.module FROM users as A LEFT JOIN user_roles as B ON B.role_id = A.user_role WHERE A.user_id='".$user_id."'";
		$query = $this->db->query($select)->row();
	}

		public function getUserLoggedIn1($username){
		$select = "SELECT A.*,B.emp_name,C.role_name FROM users as A LEFT JOIN employee as B ON A.user_empid = B.emp_id LEFT JOIN user_roles as C ON A.user_role = C.role_id";
		$query= $this->db->query($select)->row();
		return $query->row();
	}

}

?>
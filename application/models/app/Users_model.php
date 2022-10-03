<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Users_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function getEmp(){
		 $select = "SELECT * FROM employee where inActive='0' ORDER BY emp_name ASC"; 
		   return $query = $this->db->query($select)->result();
		return $query;

	}
	public function getRole(){
		$select = "SELECT * FROM user_roles WHERE inActive='0' ";
		return $query=$this->db->query($select)->result();

	}
	public function user_save(){
	//echo "<pre>"; print_r ($_POST);die;
		date_default_timezone_set("Asia/Kolkata");
		$date = date("Y-m-d H:i:s a"); 
		$createdBy = $this->session->userdata('login');
		$createdBy = $createdBy['user_id'];
		$adate=	$this->input->post('date');
		$username = ltrim($this->input->post('username'));
		$this->data = array(
			
			'insert_date'	=>	$this->input->post('date'),
			'user_role'		=>	$this->input->post('userrole'),
			'user_empid'	=>	$this->input->post('employee'),
			'username'		=>	$username,
			'password'		=>	$this->input->post('password'),
			'createdDate'	=> $adate,
			'createdBy'     => $createdBy
			
		
		);	
		$this->db->insert('users',$this->data);
	}

	public function get_users(){
		$select= "SELECT A.*,B.emp_name,C.role_name FROM users as A 
				left join employee as B on A.user_empid = B.emp_id
				left join user_roles as C on A.user_role = C.role_id ORDER BY A.user_id DESC"; 
			$query = $this->db->query($select)->result();
			return $query;
				
	}
	public function get_single_user($user_id){
     $select = "SELECT * FROM users where user_id='$user_id'";
     $query = $this->db->query($select)->row();
     return $query;
	}

	public function update($user_id){
  date_default_timezone_set("Asia/Kolkata");
		$date = date("Y-m-d H:i:s a");
		$adate=	$this->input->post('date');
		$username = ltrim($this->input->post('username'));
		$insert_date	=	$this->input->post('date');
		$user_role		=	$this->input->post('userrole');
		$user_empid	=	$this->input->post('employee');
		$username		=	$username;
		$password	=	$this->input->post('password');
		$modifiedDate	= $adate;
		$user_id = $this->input->post('user_id');
		
		$update = "UPDATE users SET insert_date='".$adate."',user_empid='".$user_empid."',user_role='".$user_role."',username='".$username."',password='".$password."',modifiedDate='".$date."' WHERE user_id='".$user_id."'";

		$query= $this->db->query($update);
	

	}
	public function delete($user_id){
		$delete = "DELETE FROM users WHERE user_id='".$user_id."'";
		$query= $this->db->query($delete);
	}
	public function active($user_id){
  $update = "UPDATE users set inActive='1' WHERE user_id='".$user_id."'";
   $query = $this->db->query($update);
}
public function deactive($user_id){
    $update = "UPDATE users set inActive='0' WHERE user_id='".$user_id."'"; 
     $query = $this->db->query($update);
}
} 

 ?>
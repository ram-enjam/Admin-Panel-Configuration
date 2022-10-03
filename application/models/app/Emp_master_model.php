<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emp_master_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		}


		public function save(){
		//echo "<pre>";print_r($_POST);die;
		//$i = 2;
			///echo $this->input->post('pf')[$i];
			///echo $this->input->post('it')[$i];
			///echo $this->input->post('esi')[$i];
			
		date_default_timezone_set("Asia/Kolkata");
		$date = date("Y-m-d H:i:s a"); 
		// $user_data = $this->session->userdata('login');
		// $createdBy =  $user_data['user_id'];

		$emp_name = $this->input->post('emp_name');
	

		$this->save_emp = array( 
		
			'emp_name'			=>	$emp_name,
			'phone'				=>	$this->input->post('emp_phone'),
		    'department_id'		=>	$this->input->post('department'),
		    'createdDate' 		=>	$date
			
		);
		 // print_r($this->save_emp); die;

		$this->db->insert('employee', $this->save_emp);
		return true;
	  //  if($this->db->affected_rows() == 1){
			// return true;
		 // }else{
			// return false;
		 // }
			
	 }

	public function getEmp(){
	
	$select = "SELECT A.*,B.department_name from employee as A LEFT JOIN department as B ON A.department_id=B.department_id";
	$query= $this->db->query($select)->result();
	return $query;
   }

   public function edit_emp($emp_id){
   	$select = "SELECT * FROM employee WHERE emp_id='".$emp_id."'";
   	$query=$this->db->query($select)->row();
   	return $query;
   }
   public function update(){
   	date_default_timezone_set("Asia/Kolkata");
		$date = date("Y-m-d H:i:s a"); 
   	$emp_name= $this->input->post('emp_name');
   	$phone = $this->input->post('phone');
   	$emp_id = $this->input->post('emp_id');
   	$department_id = $this->input->post('department');
   	$update = "UPDATE employee SET emp_name='".$emp_name."', department_id='".$department_id."', phone='".$phone."', modiby='".$date."' WHERE emp_id='".$emp_id."'";
   	$query = $this->db->query($update);
   }

   public function delete($emp_id){
    $delete = "DELETE FROM employee WHERE emp_id ='".$emp_id."'"; 
   	$query = $this->db->query($delete);
   }

public function active($emp_id){
  $update = "UPDATE employee set inActive='1' WHERE emp_id='".$emp_id."'";
   $query = $this->db->query($update);
}
public function deactive($emp_id){
    $update = "UPDATE employee set inActive='0' WHERE emp_id='".$emp_id."'"; 
     $query = $this->db->query($update);
}

	}

?>
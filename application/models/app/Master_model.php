<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Master_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
	}
	public function jobtitle_save(){
		$date = date("Y-m-d H:i:s a"); 
		$title_name = $this->input->post('title_name');
		$this->data = array(
			'title_name'	=>	$title_name,
			'createdon'		=>	$date,
		);	
		$this->db->insert('job_title',$this->data);
	}

	public function get_jobtitles(){
		$select= "SELECT * FROM job_title"; 
			$query = $this->db->query($select)->result();
			return $query;			
	}
	public function get_jobtitle($id){
		$select= "SELECT * FROM job_title WHERE id='".$id."' "; 
			$query = $this->db->query($select)->row();
			return $query;			
	}

	public function jobtitle_update(){
		$date = date("Y-m-d H:i:s a");
		$title_name = $this->input->post('title_name');
		$id = $this->input->post('id');
		$update = "UPDATE job_title SET title_name='".$title_name."' WHERE id='".$id."'";
		$query= $this->db->query($update);
	}

	public function jobtitle_delete($id){
		$delete = "DELETE FROM job_title WHERE id='".$id."'";
		$query= $this->db->query($delete);
	}

	public function jobtitle_active($id){
		$update = "UPDATE job_title set inactive='1' WHERE id='".$id."'";
		$query = $this->db->query($update);
	}
	public function jobtitle_deactive($id){
    	$update = "UPDATE job_title set inactive='0' WHERE id='".$id."'"; 
     	$query = $this->db->query($update);
	}

	public function branch_specialization_save(){
		$date = date("Y-m-d H:i:s a"); 
		$name = $this->input->post('name');
		$this->data = array(
			'name'	=>	$name,
			'createdon'		=>	$date,
		);	
		$this->db->insert('branch_specialization',$this->data);
	}

	public function get_branch_specializations(){
		$select= "SELECT * FROM branch_specialization"; 
			$query = $this->db->query($select)->result();
			return $query;			
	}
	public function get_branch_specialization($id){
		$select= "SELECT * FROM branch_specialization WHERE id='".$id."' "; 
			$query = $this->db->query($select)->row();
			return $query;			
	}

	public function branch_specialization_update(){
		$date = date("Y-m-d H:i:s a");
		$name = $this->input->post('name');
		$id = $this->input->post('id');
		$update = "UPDATE branch_specialization SET name='".$name."' WHERE id='".$id."'";
		$query= $this->db->query($update);
	}

	public function branch_specialization_delete($id){
		$delete = "DELETE FROM branch_specialization WHERE id='".$id."'";
		$query= $this->db->query($delete);
	}

	public function branch_specialization_active($id){
		$update = "UPDATE branch_specialization set inactive='1' WHERE id='".$id."'";
		$query = $this->db->query($update);
	}
	public function branch_specialization_deactive($id){
    	$update = "UPDATE branch_specialization set inactive='0' WHERE id='".$id."'"; 
     	$query = $this->db->query($update);
	}

	public function ac_designation_save(){
		$date = date("Y-m-d H:i:s a"); 
		$name = $this->input->post('name');
		$this->data = array(
			'name'	=>	$name,
			'createdon'		=>	$date,
		);	
		$this->db->insert('ac_designation',$this->data);
	}

	public function get_ac_designations(){
		$select= "SELECT * FROM ac_designation"; 
			$query = $this->db->query($select)->result();
			return $query;			
	}
	public function get_ac_designation($id){
		$select= "SELECT * FROM ac_designation WHERE id='".$id."' "; 
			$query = $this->db->query($select)->row();
			return $query;			
	}

	public function ac_designation_update(){
		$date = date("Y-m-d H:i:s a");
		$name = $this->input->post('name');
		$id = $this->input->post('id');
		$update = "UPDATE ac_designation SET name='".$name."' WHERE id='".$id."'";
		$query= $this->db->query($update);
	}

	public function ac_designation_delete($id){
		$delete = "DELETE FROM ac_designation WHERE id='".$id."'";
		$query= $this->db->query($delete);
	}

	public function ac_designation_active($id){
		$update = "UPDATE ac_designation set inactive='1' WHERE id='".$id."'";
		$query = $this->db->query($update);
	}
	public function ac_designation_deactive($id){
    	$update = "UPDATE ac_designation set inactive='0' WHERE id='".$id."'"; 
     	$query = $this->db->query($update);
	}

	// department master - lab name

	public function get_lab_names(){
		$userdata = $this->session->userdata('login');
    	$dep_id = $userdata['department_id'];

		$select= "SELECT * FROM lab_name WHERE dep_id = '$dep_id'"; 
			$query = $this->db->query($select)->result();
			return $query;			
	}

	public function lab_name_save(){
		$userdata = $this->session->userdata('login');
    	$dep_id = $userdata['department_id'];

		$date = date("Y-m-d H:i:s a"); 
		$name = $this->input->post('name');
		$this->data = array(
			'dep_id' => $dep_id,
			'name'	=>	$name,
			'createdon' =>	$date,
		);	
		$this->db->insert('lab_name',$this->data);
	}

	public function get_lab_name($id){
		$select= "SELECT * FROM lab_name WHERE id='".$id."' "; 
		$query = $this->db->query($select)->row();
		return $query;			
	}

	public function lab_name_update(){
		$userdata = $this->session->userdata('login');
    	$dep_id = $userdata['department_id'];

		$name = $this->input->post('name');
		$id = $this->input->post('id');

		$data = array(
			'dep_id' => $dep_id,
			'name'	=>	$name,
		);	

		$query = $this->db->update('lab_name', $data, array('id' => $id));

		return $query;
	}
	public function lab_name_delete($id){
		$delete = "DELETE FROM lab_name WHERE id='".$id."'";
		$query= $this->db->query($delete);
	}
	public function lab_name_active($id){
		$update = "UPDATE lab_name set inactive='1' WHERE id='".$id."'";
		$query = $this->db->query($update);
	}
	public function lab_name_deactive($id){
    	$update = "UPDATE lab_name set inactive='0' WHERE id='".$id."'"; 
     	$query = $this->db->query($update);
	}

	// department master - E Content Subject

	public function get_subjects(){
		$userdata = $this->session->userdata('login');
    	$dep_id = $userdata['department_id'];

		$select= "SELECT * FROM e_subject WHERE dep_id = '$dep_id'"; 
			$query = $this->db->query($select)->result();
			return $query;			
	}

	public function subject_save(){
		$userdata = $this->session->userdata('login');
    	$dep_id = $userdata['department_id'];

		$date = date("Y-m-d H:i:s a"); 
		$name = $this->input->post('name');
		$this->data = array(
			'dep_id' => $dep_id,
			'name'	=>	$name,
			'createdon' =>	$date,
		);	
		$this->db->insert('e_subject',$this->data);
	}

	public function get_subject($id){
		$select= "SELECT * FROM e_subject WHERE id='".$id."' "; 
		$query = $this->db->query($select)->row();
		return $query;			
	}

	public function subject_update(){
		$userdata = $this->session->userdata('login');
    	$dep_id = $userdata['department_id'];

		$name = $this->input->post('name');
		$id = $this->input->post('id');

		$data = array(
			'dep_id' => $dep_id,
			'name'	=>	$name,
		);	

		$query = $this->db->update('e_subject', $data, array('id' => $id));

		return $query;
	}
	public function subject_delete($id){
		$delete = "DELETE FROM e_subject WHERE id='".$id."'";
		$query= $this->db->query($delete);
	}
	public function subject_active($id){
		$update = "UPDATE e_subject set inactive='1' WHERE id='".$id."'";
		$query = $this->db->query($update);
	}
	public function subject_deactive($id){
    	$update = "UPDATE e_subject set inactive='0' WHERE id='".$id."'"; 
     	$query = $this->db->query($update);
	}

	// Gallery Album

	public function get_gallery_albums(){
		$select= "SELECT * FROM gallery_album"; 
			$query = $this->db->query($select)->result();
			return $query;			
	}

	public function gallery_album_save(){
		$date = date("Y-m-d H:i:s a"); 
		$album_type = $this->input->post('album_type');
		$album_name = $this->input->post('album_name');
		$this->data = array(
			'album_type' => $album_type,
			'album_name'	=>	$album_name,
			'createdon' =>	$date,
		);	
		$query = $this->db->insert('gallery_album',$this->data);
		return $query;
	}

	public function get_gallery_album($id){
		$select= "SELECT * FROM gallery_album WHERE id='".$id."' "; 
		$query = $this->db->query($select)->row();
		return $query;			
	}

	public function gallery_album_update(){
		$album_type = $this->input->post('album_type');
		$album_name = $this->input->post('album_name');
		$id = $this->input->post('id');

		$data = array(
			'album_type' => $album_type,
			'album_name'	=>	$album_name,
		);	

		$query = $this->db->update('gallery_album', $data, array('id' => $id));

		return $query;
	}
	public function gallery_album_delete($id){
		$delete = "DELETE FROM gallery_album WHERE id='".$id."'";
		$query= $this->db->query($delete);
	}
	public function gallery_album_active($id){
		$update = "UPDATE gallery_album set inactive='1' WHERE id='".$id."'";
		$query = $this->db->query($update);
	}
	public function gallery_album_deactive($id){
    	$update = "UPDATE gallery_album set inactive='0' WHERE id='".$id."'"; 
     	$query = $this->db->query($update);
	}

}

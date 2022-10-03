<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class General_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
	}

	public function getUserroles_info()
	{
		$this->db->select("*");
		$query = $this->db->get("user_roles");
		return $query->result();
	}

	public function getPageID()
	{
		$this->db->select('page_id');
		$this->db->where("page_link", $this->session->userdata('page_name'));
		$query = $this->db->get('pages');
		return $query->row();
	}

	public function getUserLoggedIn($username = null)
	{
		
		$select = "SELECT A.*,B.emp_name,C.role_name,D.department_name,D.department_id FROM users as A 
		 LEFT JOIN employee as B ON A.user_empid = B.emp_id 
		 LEFT JOIN user_roles as C ON A.user_role = C.role_id
		 LEFT JOIN department as D ON B.department_id = D.department_id WHERE A.username='" . $username . "'";
		$query = $this->db->query($select)->row();
		// print_r($query);die;
		return $query;
	}

	public function get_user_details($user_id)
	{
		$sql = "SELECT A.*,B.emp_name from users as A 
		INNER JOIN employee as B on B.emp_id = A.user_empid 
		WHERE user_id='" . $user_id . "' ";
		$query = $this->db->query($sql);
		//echo "<pre>"; print_r($query->row());die;
		return $query->row();
	}

	public function get_contact_form_count()
	{
		$sql = "SELECT count(id) AS total_count FROM form_contact";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function get_admission_form_count()
	{
		$sql = "SELECT count(id) AS total_count FROM form_admission";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function get_alumni_form_count()
	{
		$sql = "SELECT count(id) AS total_count FROM form_alumni";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function get_enquiry_form_count()
	{
		$sql = "SELECT count(id) AS total_count FROM form_enquiry";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function get_career_form_count()
	{
		$sql = "SELECT count(id) AS total_count FROM form_career";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function get_staff_grievance_count()
	{
		$sql = "SELECT count(id) AS total_count FROM form_staff_grievance";
		$query = $this->db->query($sql);
		return $query->row();
	}
	public function get_student_grievance_count()
	{
		$sql = "SELECT count(id) AS total_count FROM form_student_grievance";
		$query = $this->db->query($sql);
		return $query->row();
	}
}

<?php
class Form_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
	}


	// user details
	public function get_user_details($user_id)
	{
		$sql = "SELECT * from users WHERE user_id='" . $user_id . "' ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function get_user_profile()
	{
		$userdata = $this->session->userdata('login');
		$user_id = $userdata['user_id'];

		$sql = "SELECT a.*,b.*,c.*,d.* FROM users as a
      INNER JOIN user_roles as b ON a.user_role = b.role_id
      INNER JOIN employee as c ON a.user_empid = c.emp_id
      INNER JOIN department as d ON c.department_id = d.department_id
      WHERE a.user_id = '$user_id' ORDER BY a.user_id DESC";
		$query = $this->db->query($sql);

		return $query->row();
	}

	public function update_profile()
	{

		// echo "<pre>"; print_r($_POST);die;
		$emp_name = $this->input->post('emp_name');
		$phone = $this->input->post('phone');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user_id = $this->input->post('user_id');
		$emp_id = $this->input->post('emp_id');
		$modify_date = date('Y-m-d H:i:s');
		$modify_by = $this->session->userdata('login')['user_id'];

		$sql = "UPDATE employee SET emp_name = '$emp_name', phone = '$phone', modiDate = '$modify_date', modiBy = '$modify_by' WHERE emp_id = '$emp_id'";
		$this->db->query($sql);

		$sql = "UPDATE users SET username = '$username', password = '$password', modifiedDate = '$modify_date', modifiedBy = '$modify_by' WHERE user_id = '$user_id'";
		$this->db->query($sql);

		return true;
	}

	public function get_contact_details()
	{
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$date_filter = "";
		if (!empty($from_date)) {
			$date_filter = "WHERE DATE(created_date) BETWEEN '" . $from_date . "' AND '" . $to_date . "'";
		}
		$select = "SELECT * FROM form_contact " . $date_filter . " ORDER BY id desc";
		$query = $this->db->query($select)->result();
		return $query;
	}
	public function post_contact_read_check()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$sql = "UPDATE form_contact SET read_status = '" . $status . "' WHERE id = '" . $id . "'";
		$query =  $this->db->query($sql);
		return $query;
	}
	
	public function get_enquiry_details()
	{
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$date_filter = "";
		if (!empty($from_date)) {
			$date_filter = "WHERE DATE(created_date) BETWEEN '" . $from_date . "' AND '" . $to_date . "'";
		}
		$select = "SELECT * FROM form_enquiry " . $date_filter . " ORDER BY id desc";
		$query = $this->db->query($select)->result();
		return $query;
	}
	public function post_enquiry_read_check()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$sql = "UPDATE form_enquiry SET read_status = '" . $status . "' WHERE id = '" . $id . "'";
		$query =  $this->db->query($sql);
		return $query;
	}

	public function exist_department()
	{
		$department = $this->input->post('department');
		$this->db->where('department_name', $department);
		$this->db->from('department');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function savedepartment()
	{
		date_default_timezone_set("Asia/Kolkata");
		$date       =     date('Y-m-d H:i:s');
		$department = $this->input->post('department');

		$insert = "INSERT INTO department (department_name,createdon) VALUES ('" . $department . "','" . $date . "')";
		$query = $this->db->query($insert);
		return $query;
	}

	public function get_department()
	{
		$select = "SELECT * FROM department ORDER BY department_id desc";
		$query = $this->db->query($select)->result();
		// print_r($query); die;
		return $query;
	}
	public function edit_get_department($department_id)
	{
		$select = "SELECT * FROM department where department_id='" . $department_id . "'";
		$query = $this->db->query($select)->row();
		return $query;
	}
	public function save_edit_department()
	{
		$department_name = $this->input->post('department');
		$id =    $this->input->post('department_id');
		$update = "UPDATE department SET department_name='" . $department_name . "' WHERE department_id='" . $id . "'";
		return $query = $this->db->query($update);
	}
	public function department_active($department_id)
	{
		$update = "UPDATE department set inactive='1' WHERE department_id='" . $department_id . "'";
		return $query = $this->db->query($update);
	}
	public function department_deactive($department_id)
	{
		$update = "UPDATE department set inactive='0' WHERE department_id='" . $department_id . "'";
		return $query = $this->db->query($update);
	}

	public function delete_department($department_id)
	{
		$delete = "DELETE FROM department WHERE department_id='" . $department_id . "'";
		return $query = $this->db->query($delete);
	}

	// form data status updates
	public function contactform_status()
	{
		$userdata = $this->session->userdata('login');
		$username = $userdata['username'];

		// print_r($userdata);die;
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$sql = "UPDATE form_contact SET a_status = '" . $status . "', read_status = '1' WHERE id = '" . $id . "'";

		$data = array(
			'lead_id' => $id,
			'status' => $status,
			'status_date' => $date,
			'updated_by' => $username
		);
		$this->db->insert('form_contact_log', $data);
		$this->db->query($sql);
		echo $status;
	}

	public function enquiryform_status()
	{
		$userdata = $this->session->userdata('login');
		$username = $userdata['username'];

		// print_r($userdata);die;
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$sql = "UPDATE form_enquiry SET a_status = '" . $status . "', read_status = '1' WHERE id = '" . $id . "'";

		$data = array(
			'lead_id' => $id,
			'status' => $status,
			'status_date' => $date,
			'updated_by' => $username
		);
		$this->db->insert('form_enquiry_log', $data);
		$this->db->query($sql);
		echo $status;
	}

	public function careerform_status()
	{
		$userdata = $this->session->userdata('login');
		$username = $userdata['username'];

		// print_r($userdata);die;
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$sql = "UPDATE form_career SET a_status = '" . $status . "', read_status = '1' WHERE id = '" . $id . "'";

		$data = array(
			'lead_id' => $id,
			'status' => $status,
			'status_date' => $date,
			'updated_by' => $username
		);
		$this->db->insert('form_career_log', $data);
		$this->db->query($sql);
		echo $status;
	}
}
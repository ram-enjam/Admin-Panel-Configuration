<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller
{

function __construct()
{
	parent:: __construct();
	date_default_timezone_set("Asia/Kolkata");
		$this->load->model('general_model');

		function nocache()
		{
			$this->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
			$this->set_header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
			$this->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
			$this->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
			$this->set_header('Pragma: no-cache');
		}
}

	public function logfile($module, $event, $value)
	{
		$userdata = $this->session->userdata('login');
		// print_r($userdata);die;
		$this->data = array(
			'user_id'		=>		$userdata['user_id'],
			'module'		=>		$module,
			'event'			=>		$event,
			'value'			=>		$value,
			'ipaddress'		=>		$this->input->ip_address(),
			'date_time'		=>		date("Y-m-d h:i:s a")
		);
		// print_r($this->data); die;
		$this->db->insert('logfile', $this->data);
	}

	public function has_rights_to_access($page_id, $role_id)
	{
		// echo 	$role_id;

		// exit;
		$this->db->select('*');
		$this->db->from('user_roles_pages');
		$this->db->where('role_id', $role_id);
		$this->db->where('page_id', $page_id);
		$query = $this->db->get();

		// echo $query->num_rows();exit;
		if ($query->num_rows() == 1) {
			// echo $query->num_rows(); 
			return true;
		} else {
			return false;
		}
	}

public function variable(){
 if($this->is_logged_in()==false){

 }else{
 	$userdata = $this->session->userdata('login');
 	$user = $userdata['username'];
  $userRole = $this->general_model->getUserLoggedIn($user);
  $this->data['userInfo'] = $this->general_model->getUserLoggedIn($user);
 }
    
}

public function is_logged_in(){
$userdata = $this->session->userdata('login');
if(!empty($userdata['is_logged_in']) && $userdata['is_logged_in']){
	return true;
}else{
	return false;
}
}
}

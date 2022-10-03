<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'controllers/General.php';

class Users extends General
{
	private $limit = 10;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("app/users_model");
		if (General::is_logged_in() == FALSE) {
			redirect(base_url() . 'login');
		}
		General::variable();

		$this->session->set_userdata(array(
			'tab'			=>		'Users',
			'module'		=>		'Create Users',
			'subtab'		=>		'',
			'submodule'	=>		'access_to_user'
		));
	}

	public function add()
	{
		// user restriction function
		$this->session->set_userdata('page_name', 'add_users');
		// $page_id = $this->general_model->getPageID();
		$this->data['emp_data'] = $this->users_model->getEmp();
		$this->data['get_role'] = $this->users_model->getRole();
		$this->data['get_users'] = $this->users_model->get_users();

		$this->load->view('app/users/add', $this->data);
	}

	public function index()
	{
		// user restriction function
		$this->session->set_userdata('page_name', 'access_user');
		// $page_id = $this->general_model->getPageID();
		$userdata = $this->session->userdata('login');
		$userRole = $this->general_model->getUserLoggedIn($userdata['username']);
		//print_r ($page_id);exit;
		// if (General::has_rights_to_access($page_id->page_id, $userRole->user_role) == FALSE) {
		// 	redirect(base_url() . 'access-denied');
		// 	// }
		// 	// end of user restriction function

		// 	//$this->session->set_userdata(array('tab'=>'admin', 'module'=>'designation'));


		// 	$this->users();
		// }
	}
	public function user_save()
	{
		$this->form_validation->set_rules("employee", "employee", "trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>", "</div>");
		if ($this->form_validation->run()) {

			$this->users_model->user_save();

			/*$value = $this->input->post('join_dt');
			General::logfile('amaron_user','INSERT',$value);*/

			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Users Details successfully Added!</div>");

			redirect(base_url() . 'app/users/add/', $this->data);
		} else {
			redirect(base_url() . 'app/users/add/');
		}
	}
	public function edit($user_id)
	{
		$this->data['emp_data'] = $this->users_model->getEmp();
		$this->data['get_role'] = $this->users_model->getRole();
		$this->data['get_user'] = $this->users_model->get_single_user($user_id);
		$this->load->view('app/users/edit', $this->data);
	}

	public function update($user_id)
	{

		$this->users_model->update($user_id);

		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>user Details successfully Updated!</div>");
		redirect(base_url() . 'app/users/add', $this->data);
		// $this->load->view('app/swipe/add',$this->data);

	}

	public function delete($user_id)
	{

		$userdata = $this->session->userdata('login');
		// echo $userdata['user_role'];die;
		if ($user_id == $userdata['user_id'] || $userdata['user_role'] != 1) {
			redirect(base_url() . 'access-denied');
		} else {
			$userRole = $this->general_model->getUserLoggedIn($userdata['username']);
			// if (General::has_rights_to_access($page_id->page_id, $userRole->user_role) == FALSE) {
			// 	redirect(base_url() . 'access-denied');
			// }
			// end of user restriction function

			$this->users_model->delete($user_id);

			// $value = $id;
			// General::logfile('bunk_user Name','DELETE',$value);

			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>user Results successfully Deleted!</div>");

			redirect(base_url() . "app/users/add", $this->data);
		}
	}
	public function active($user_id)
	{
		$this->users_model->active($user_id);
		redirect(base_url() . 'app/users/add');
	}
	public function deactive($user_id)
	{
		$this->users_model->deactive($user_id);
		redirect(base_url() . 'app/users/add');
	}
}

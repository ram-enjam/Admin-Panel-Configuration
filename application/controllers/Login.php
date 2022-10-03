<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'controllers/General.php';

class Login extends General
{
	function __construct()
	{

		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('general_model');
		General::variable();
	}
	public function index()
	{

		$user_log = $this->session->userdata('login');
		// print_r($user_log);
		// die;
		if (!empty($user_log)) {
			redirect('dashboard');
		} else {
			$this->login();
		}
	}

	public function login()
	{
		$this->session->unset_userdata(array(
			'username'          =>      '',
			'is_logged_in'      =>      false,
			'user_id'			=>		''
		));
		$this->session->sess_destroy();

		// $this->data['companyInfo'] = $this->general_model->getcompany_info();
		$this->load->view("admin/login");
	}

	public function loginNow($username, $password)
	{
		$this->data['usernamelogin'] = $username;
		$this->data['passwordlogin'] = $password;
		$this->load->view("login", $this->data);
	}

	public function validate_credentials()
	{
		if ($this->login_model->validate_login()) {
			return true;
		} else {
			$this->form_validation->set_message("validate_credentials", "Invalid Login Credentials");
			return false;
		}
	}

	public function validate_login()
	{
		$this->form_validation->set_rules("username", "username", "trim|xss_clean|required|callback_validate_credentials");
		$this->form_validation->set_rules("password", "password", "trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i>", "</div>");

		if ($this->form_validation->run()) {

			$user_info = $this->general_model->getUserLoggedIn($this->input->post('username'));
			$login = array(
				'username'     =>   $this->input->post('username'),
				'user'         =>   $user_info->emp_name,
				'department'   =>   $user_info->department_name,
				'department_id'   =>   $user_info->department_id,
				'user_role'    =>   $user_info->user_role,
				'is_logged_in' =>   true,
				'user_id'      =>   $user_info->user_id
			);

			$this->session->set_userdata('login', $login);
			$userdata = $this->session->userdata('login');
			//print_r($userdata); die;

			$userModule = $this->login_model->getMyModule($userdata['user_id']);

			// $this->session->set_flashdata('sub_alert', $this->general_model->run_sub_alert());
			redirect(base_url() . 'dashboard');
			// if($user_info->user_role == '2') {
			//  redirect(base_url().'dashboard');
			//  }

		} else {
			$this->login();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata(array(
			'username'          =>      '',
			'is_logged_in'      =>      false,
			'user_id'			=>		''
		));
		$this->session->sess_destroy();
		// redirect(base_url().'login');
		redirect(base_url() . 'login');
	}
}

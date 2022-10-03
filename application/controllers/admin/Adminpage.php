<?php defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'controllers/General.php';

class Adminpage extends General
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('form_model');
		if (General::is_logged_in() == FALSE) {
			redirect(base_url() . 'login');
		}


		General::variable();
	}

	public function dashboard()
	{
		$this->session->set_userdata(array(
			'tab'			=>		'Admin Page',
			'module'		=>		'dashboard',
			'subtab'		=>		'',
			'submodule'	=>		'dashboard'
		));

		$this->load->view('admin/index', $this->data);
	}

	public function user_profile()
	{
		$this->data['user_profile'] = $this->form_model->get_user_profile();
		// echo "<pre>"; print_r($this->data['user_profile']);die;
		$this->load->view('admin/profile', $this->data);
	}

	public function update_profile()
	{
		if (!empty($_POST)) {
			if ($_POST['password'] != $_POST['confirm_password']) {
				$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'  id='msg'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Password and confirm password not match!</div>");
				redirect(base_url() . 'admin/profile');
			} else {
				$this->form_model->update_profile();
				$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Profile updated successfully</div>");
				redirect(base_url() . 'admin/profile');
			}
		} else {
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>There was an error in saving the data. Please try again or contact your system administrator.</div>");
			redirect(base_url() . 'admin/profile');
		}
	}

	public function contact_details()
	{
		$this->data['from_date'] = $this->input->post('from_date');
		$this->data['to_date'] = $this->input->post('to_date');
		$this->data['result'] = $this->form_model->get_contact_details();
		$this->load->view('admin/forms/contact', $this->data);
	}
	public function contact_read_check()
	{
		$this->form_model->post_contact_read_check();
	}

	public function enquiry_details()
	{
		$this->data['from_date'] = $this->input->post('from_date');
		$this->data['to_date'] = $this->input->post('to_date');
		$this->data['result'] = $this->form_model->get_enquiry_details();
		$this->load->view('admin/forms/enquiry', $this->data);
	}
	public function enquiry_read_check()
	{
		$this->form_model->post_enquiry_read_check();
	}
	public function career_details()
	{
		$this->data['from_date'] = $this->input->post('from_date');
		$this->data['to_date'] = $this->input->post('to_date');
		$this->data['result'] = $this->form_model->get_career_details();
		$this->load->view('admin/forms/career', $this->data);
	}
	public function career_read_check()
	{
		$this->form_model->post_career_read_check();
	}

	public function department()
	{
		$this->session->set_userdata(array(
			'tab'			=>		'Admin Page',
			'module'		=>		'Department',
			'subtab'		=>		'',
			'submodule'	=>		'access_department'
		));
		$this->data['department'] = $this->form_model->get_department();
		$this->load->view('app/department/add', $this->data);
	}

	public function check_duplicate_department()
	{
		if ($this->form_model->exist_department()) {
			$this->form_validation->set_message("check_duplicate_department", "Department already exist!!!");
			return false;
		} else {

			return true;
		}
	}

	public function savedepartment()
	{
		$this->form_validation->set_rules("department", "Department", "trim|xss_clean|required|callback_check_duplicate_department");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>", "</div>");

		if ($this->form_validation->run()) {

			if ($this->form_model->savedepartment()) {
				$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data saved successfully!</div>");
			} else {
				$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>There was an error in saving the data. Please try again or contact your system administrator.</div>");
			}
			redirect(base_url() . 'admin/department', $this->data);
		} else {
			$this->department();
		}
	}

	public function edit_department($department_id)
	{
		$this->data['get_department'] = $this->form_model->edit_get_department($department_id);
		$this->load->view('app/department/edit', $this->data);
	}
	public function save_edit_department()
	{
		if ($this->form_model->save_edit_department()) {
			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data updated successfully!</div>");
		} else {
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>There was an error in saving the data. Please try again or contact your system administrator.</div>");
		}
		redirect(base_url() . 'admin/department', $this->data);
	}
	public function department_active($department_id)
	{
		$this->form_model->department_active($department_id);
		redirect(base_url() . 'admin/department');
	}
	public function department_deactive($department_id)
	{
		$this->form_model->department_deactive($department_id);
		redirect(base_url() . 'admin/department');
	}

	public function delete_department($department_id)
	{
		if ($this->form_model->delete_department($department_id)) {

			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data deleted successfully!</div>");
		} else {
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>There was an error in saving the data. Please try again or contact your system administrator.</div>");
		}
		redirect(base_url() . 'admin/department');
	}

	//admin panel form data status
	public function contactform_status()
	{
		$this->form_model->contactform_status();
	}

	public function contactform_history()
	{
		$id = $this->input->post('id');
		$history = "No Previous History";
		$commq = "SELECT * FROM form_contact_log WHERE lead_id='" . $id . "' ORDER BY status_date DESC ";
		$reccomm = $this->db->query($commq)->result();
		if (!empty($reccomm)) {
			$history = "<table style='width:100%;margin-bottom:10px'>
                    <tr style='background: #666ee8;color: #f9f9f9;'>
                      <th style='width:250px;'>User</th>
                      <th style='width:250px;'>Status</th>
                      <th style='width:170px;'>Status Date</th>
                    </tr>";
			foreach ($reccomm as $fhiscomm) {
				$history .= "<tr>
							<td>$fhiscomm->updated_by</td>
							<td>$fhiscomm->status</td>
							<td>" . date('d M Y , h:i A', strtotime($fhiscomm->status_date)) . "</td>
						</tr>";
			}
		}
		$history .= "</table>";
		echo $history;
	}

	public function enquiryform_status()
	{
		$this->form_model->enquiryform_status();
	}

	public function enquiryform_history()
	{
		$id = $this->input->post('id');
		$history = "No Previous History";
		$commq = "SELECT * FROM form_enquiry_log WHERE lead_id='" . $id . "' ORDER BY status_date DESC ";
		$reccomm = $this->db->query($commq)->result();
		if (!empty($reccomm)) {
			$history = "<table style='width:100%;margin-bottom:10px'>
                    <tr style='background: #666ee8;color: #f9f9f9;'>
                      <th style='width:250px;'>User</th>
                      <th style='width:250px;'>Status</th>
                      <th style='width:170px;'>Status Date</th>
                    </tr>";
			foreach ($reccomm as $fhiscomm) {
				$history .= "<tr>
							<td>$fhiscomm->updated_by</td>
							<td>$fhiscomm->status</td>
							<td>" . date('d M Y , h:i A', strtotime($fhiscomm->status_date)) . "</td>
						</tr>";
			}
		}
		$history .= "</table>";
		echo $history;
	}

	public function careerform_status()
	{
		$this->form_model->careerform_status();
	}

	public function careerform_history()
	{
		$id = $this->input->post('id');
		$history = "No Previous History";
		$commq = "SELECT * FROM form_career_log WHERE lead_id='" . $id . "' ORDER BY status_date DESC ";
		$reccomm = $this->db->query($commq)->result();
		if (!empty($reccomm)) {
			$history = "<table style='width:100%;margin-bottom:10px'>
                    <tr style='background: #666ee8;color: #f9f9f9;'>
                      <th style='width:250px;'>User</th>
                      <th style='width:250px;'>Status</th>
                      <th style='width:170px;'>Status Date</th>
                    </tr>";
			foreach ($reccomm as $fhiscomm) {
				$history .= "<tr>
							<td>$fhiscomm->updated_by</td>
							<td>$fhiscomm->status</td>
							<td>" . date('d M Y , h:i A', strtotime($fhiscomm->status_date)) . "</td>
						</tr>";
			}
		}
		$history .= "</table>";
		echo $history;
	}

	public function add_products()
	{
		$this->data['add_ptoduct'] = $this->form_model->get_products();
		$this->load->view("admin/add_products/add_product", $this->data);
	}

	public function save_products()
	{
		$chemical_name = $this->input->post('chemi_name');
		$chemical_number  = $this->input->post('chemi_num');

		if (!empty($chemical_name && $chemical_number)) {
			if (!empty($_POST)) {
				if ($this->form_model->save_products()) {
					$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data saved successfully!</div>");
				} else {
					$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>There was an error in saving the data. Please try again or contact your system administrator.</div>");
				}
				redirect(base_url() . 'add-products', $this->data);
			} else {
				$this->add_products();
			}
		} else {
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Input Fields Should Not Be Empty.</div>");
			redirect(base_url() . 'add-products', $this->data);
		}
	}
	public function edit_product($id)
	{
		$this->data['get_product'] = $this->form_model->edit_get_product($id);
		$this->load->view('admin/add_products/edit_product', $this->data);
	}
	public function save_edit_product()
	{
		$chemical_name = $this->input->post('chemi_name');
		$chemical_number  = $this->input->post('chemi_num');

		if (!empty($chemical_name && $chemical_number)) {
			if ($this->form_model->save_edit_product()) {
				$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data updated successfully!</div>");
			} else {
				$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>There was an error in saving the data. Please try again or contact your system administrator.</div>");
			}
			redirect(base_url() . 'add-products', $this->data);
		} else {
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Input Fields Should Not Be Empty.</div>");
			redirect(base_url() . 'add-products');
		}
	}
	public function product_active($id)
	{
		$this->form_model->product_active($id);
		redirect(base_url() . 'add-products');
	}
	public function product_deactive($id)
	{
		$this->form_model->product_deactive($id);
		redirect(base_url() . 'add-products');
	}

	public function delete_product($id)
	{
		if ($this->form_model->delete_product($id)) {

			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data deleted successfully!</div>");
		} else {
			$this->session->set_flashdata('message', "<div class='alert alert-warning alert-dismissable'><i class='fa fa-exclamation'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>There was an error in saving the data. Please try again or contact your system administrator.</div>");
		}
		redirect(base_url() . 'add-products');
	}
}

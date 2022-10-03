<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . 'controllers/General.php';

class Master extends General
{
	private $limit = 10;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("app/master_model");
		if (General::is_logged_in() == FALSE) {
			redirect(base_url() . 'login');
		}
		General::variable();
	}

	public function jobtitle_add()
	{
		$this->data['jobtitle_data'] = $this->master_model->get_jobtitles();
		$this->load->view('app/jobtitle/add', $this->data);
	}

	public function jobtitle_save()
	{
		$this->form_validation->set_rules("title_name", "title_name", "trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>", "</div>");
		if ($this->form_validation->run()) {
			$this->master_model->jobtitle_save();
			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Job title successfully Added!</div>");
			redirect(base_url() . 'app/master/jobtitle_add', $this->data);
		} else {
			redirect(base_url() . 'app/master/jobtitle_add');
		}
	}
	public function jobtitle_edit($id)
	{
		$this->data['jobtitle_data'] = $this->master_model->get_jobtitle($id);
		$this->load->view('app/jobtitle/edit', $this->data);
	}

	public function jobtitle_update()
	{
		$this->master_model->jobtitle_update();

		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Job title successfully Updated!</div>");
		redirect(base_url() . 'app/master/jobtitle_add', $this->data);
	
	}

	public function jobtitle_delete($id)
	{
		$this->master_model->jobtitle_delete($id);
		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Job title successfully Deleted!</div>");
		redirect(base_url() . "app/master/jobtitle_add", $this->data);
		
	}
	public function jobtitle_active($id)
	{
		$this->master_model->jobtitle_active($id);
		redirect(base_url() . 'app/master/jobtitle_add');
	}
	public function jobtitle_deactive($id)
	{
		$this->master_model->jobtitle_deactive($id);
		redirect(base_url() . 'app/master/jobtitle_add');
	}

	public function add_branch_specialization()
	{
		$this->data['data'] = $this->master_model->get_branch_specializations();
		$this->load->view('app/branch_specialization/add', $this->data);
	}

	public function branch_specialization_save()
	{
		$this->form_validation->set_rules("name", "Name", "trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>", "</div>");
		if ($this->form_validation->run()) {
			$this->master_model->branch_specialization_save();
			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Added!</div>");
			redirect(base_url() . 'add-branch-specialization', $this->data);
		} else {
			redirect(base_url() . 'add-branch-specialization');
		}
	}
	public function branch_specialization_edit($id)
	{
		$this->data['data'] = $this->master_model->get_branch_specialization($id);
		$this->load->view('app/branch_specialization/edit', $this->data);
	}

	public function branch_specialization_update()
	{
		$this->master_model->branch_specialization_update();

		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Updated!</div>");
		redirect(base_url() . 'add-branch-specialization', $this->data);
	
	}

	public function branch_specialization_delete($id)
	{
		$this->master_model->branch_specialization_delete($id);
		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Deleted!</div>");
		redirect(base_url() . "add-branch-specialization", $this->data);
		
	}
	public function branch_specialization_active($id)
	{
		$this->master_model->branch_specialization_active($id);
		redirect(base_url() . 'add-branch-specialization');
	}
	public function branch_specialization_deactive($id)
	{
		$this->master_model->branch_specialization_deactive($id);
		redirect(base_url() . 'add-branch-specialization');
	}
	
	public function ac_designation()
	{
		$this->data['data'] = $this->master_model->get_ac_designations();
		$this->load->view('app/ac_designation/add', $this->data);
	}

	public function ac_designation_save()
	{
		$this->form_validation->set_rules("name", "Name", "trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>", "</div>");
		if ($this->form_validation->run()) {
			$this->master_model->ac_designation_save();
			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Added!</div>");
			redirect(base_url() . 'Adddesignation', $this->data);
		} else {
			redirect(base_url() . 'Adddesignation');
		}
	}
	public function ac_designation_edit($id)
	{
		$this->data['data'] = $this->master_model->get_ac_designation($id);
		$this->load->view('app/ac_designation/edit', $this->data);
	}

	public function ac_designation_update()
	{
		$this->master_model->ac_designation_update();

		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Updated!</div>");
		redirect(base_url() . 'Adddesignation', $this->data);
	
	}

	public function ac_designation_delete($id)
	{
		$this->master_model->ac_designation_delete($id);
		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Deleted!</div>");
		redirect(base_url() . "Adddesignation", $this->data);
		
	}
	public function ac_designation_active($id)
	{
		$this->master_model->ac_designation_active($id);
		redirect(base_url() . 'Adddesignation');
	}
	public function ac_designation_deactive($id)
	{
		$this->master_model->ac_designation_deactive($id);
		redirect(base_url() . 'Adddesignation');
	}
	
	// Department Master - Lab Name

	public function lab_name()
	{
		$this->data['data'] = $this->master_model->get_lab_names();
		$this->load->view('app/lab_name/add', $this->data);
	}

	public function lab_name_save()
	{
		$this->form_validation->set_rules("name", "Name", "trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>", "</div>");
		if ($this->form_validation->run()) {
			$this->master_model->lab_name_save();
			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Added!</div>");
			redirect(base_url() . 'AddLabName', $this->data);
		} else {
			redirect(base_url() . 'AddLabName');
		}
	}
	public function lab_name_edit($id)
	{
		$this->data['data'] = $this->master_model->get_lab_name($id);
		$this->load->view('app/lab_name/edit', $this->data);
	}

	public function lab_name_update()
	{
		$this->master_model->lab_name_update();

		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Updated!</div>");
		redirect(base_url() . 'AddLabName', $this->data);
	
	}

	public function lab_name_delete($id)
	{
		$this->master_model->lab_name_delete($id);
		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Deleted!</div>");
		redirect(base_url() . "AddLabName", $this->data);
		
	}
	public function lab_name_active($id)
	{
		$this->master_model->lab_name_active($id);
		redirect(base_url() . 'AddLabName');
	}
	public function lab_name_deactive($id)
	{
		$this->master_model->lab_name_deactive($id);
		redirect(base_url() . 'AddLabName');
	}


	// Department Master - E Content Subject

	public function subject()
	{
		$this->data['data'] = $this->master_model->get_subjects();
		$this->load->view('app/subject/add', $this->data);
	}

	public function subject_save()
	{
		$this->form_validation->set_rules("name", "Name", "trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>", "</div>");
		if ($this->form_validation->run()) {
			$this->master_model->subject_save();
			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Added!</div>");
			redirect(base_url() . 'AddSubject', $this->data);
		} else {
			redirect(base_url() . 'AddSubject');
		}
	}
	public function subject_edit($id)
	{
		$this->data['data'] = $this->master_model->get_subject($id);
		$this->load->view('app/subject/edit', $this->data);
	}

	public function subject_update()
	{
		$this->master_model->subject_update();

		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Updated!</div>");
		redirect(base_url() . 'AddSubject', $this->data);
	
	}

	public function subject_delete($id)
	{
		$this->master_model->subject_delete($id);
		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Deleted!</div>");
		redirect(base_url() . "AddSubject", $this->data);
		
	}
	public function subject_active($id)
	{
		$this->master_model->subject_active($id);
		redirect(base_url() . 'AddSubject');
	}
	public function subject_deactive($id)
	{
		$this->master_model->subject_deactive($id);
		redirect(base_url() . 'AddSubject');
	}


	// Album Name Master

	public function gallery_album()
	{
		$this->data['data'] = $this->master_model->get_gallery_albums();
		$this->load->view('app/gallery_album/add', $this->data);
	}

	public function gallery_album_save()
	{
		if (!empty($_POST)) {
			$this->master_model->gallery_album_save();
			$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Added!</div>");
			redirect(base_url() . 'AddGalleryTitle', $this->data);
		} else {
			redirect(base_url() . 'AddGalleryTitle');
		}
	}
	public function gallery_album_edit($id)
	{
		$this->data['data'] = $this->master_model->get_gallery_album($id);
		$this->load->view('app/gallery_album/edit', $this->data);
	}

	public function gallery_album_update()
	{
		$this->master_model->gallery_album_update();

		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Updated!</div>");
		redirect(base_url() . 'AddGalleryTitle', $this->data);
	
	}

	public function gallery_album_delete($id)
	{
		$this->master_model->gallery_album_delete($id);
		$this->session->set_flashdata('message', "<div class='alert alert-success alert-dismissable' id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Data Successfully Deleted!</div>");
		redirect(base_url() . "AddGalleryTitle", $this->data);
		
	}
	public function gallery_album_active($id)
	{
		$this->master_model->gallery_album_active($id);
		redirect(base_url() . 'AddGalleryTitle');
	}
	public function gallery_album_deactive($id)
	{
		$this->master_model->gallery_album_deactive($id);
		redirect(base_url() . 'AddGalleryTitle');
	}
}

<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'controllers/General.php'; 

class Emp_master extends General{

	private $limit = 10;

	public function __construct(){
		parent::__construct();
		$this->load->model("app/emp_master_model");
		$this->load->model("form_model");
		if(General::is_logged_in() == FALSE){
            redirect(base_url().'login');    
        }
		General::variable();	

		$this->session->set_userdata(array(
				 'tab'			=>		'Employee master',
				 'module'		=>		'Employee master',
				 'subtab'		=>		'',
				 'submodule'	=>		'emp_master'));	
	}

	public function add(){
		$this->data['emp'] = $this->emp_master_model->getEmp();	
		$this->load->view('app/emp_master/add',$this->data);		
	}

		public function save(){ //echo "<pre />"; print_r($_POST); die;
		$this->form_validation->set_rules("emp_name[]","Emp Name","trim|xss_clean|required");
		$this->form_validation->set_rules("emp_phone","Phone Number","required|regex_match[/^[0-9]{10}$/]");
		
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>","</div>");
	    
		if($this->form_validation->run()){
			//save the data
			  $this->emp_master_model->save(); 
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Employee successfully Added!</div>");
			
			redirect(base_url().'app/emp_master/add',$this->data);
			//redirect(base_url().'app/emp_master/ipAdmitPrint/'.$umr_no.'/'.$admit_no.'/'.$id);
			
		}else{
			$this->add();	
		}
	
	}

	public function edit($emp_id){
		
		$this->data['res'] = $this->emp_master_model->edit_emp($emp_id);
		$this->load->view('app/emp_master/edit',$this->data);
	}

	public function update(){ //echo "<pre />"; print_r($_POST); die;
		$this->form_validation->set_rules("emp_name[]","Emp Name","trim|xss_clean|required");
		$this->form_validation->set_error_delimiters("<div class='alert alert-warning alert-dismissable'><i class='fa fa-warning'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>","</div>");
	    
		if($this->form_validation->run()){
			//save the data
			  $this->emp_master_model->update(); 
			$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Employee successfully Updated!</div>");
			
			redirect(base_url().'app/emp_master/add',$this->data);
			//redirect(base_url().'app/emp_master/ipAdmitPrint/'.$umr_no.'/'.$admit_no.'/'.$id);
			
		}else{
			$this->add();	
		}
	
	}

	public function delete($emp_id){
		$delete = $this->emp_master_model->delete($emp_id);
		if($delete) {
           $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Failed to Delete the employee status</div>");
			redirect(base_url().'app/emp_master/add',$this->data);
		}
		
		else{
		$this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissable'  id='msg'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Successfully  Deleted the employee status</div>");
			redirect(base_url().'app/emp_master/add',$this->data);
		}
		
	}
	public function active($emp_id){
	 $this->emp_master_model->active($emp_id); 
		redirect(base_url().'app/emp_master/add');
	}
	public function deactive($emp_id){
		 $this->emp_master_model->deactive($emp_id);
		redirect(base_url().'app/emp_master/add');
	}



}
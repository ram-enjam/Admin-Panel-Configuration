<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_form extends CI_Controller {
	function __construct(){
		parent :: __construct();
		$this->load->model('website_form_model');
	}

	public function save_contact()
	{
		if(!empty($_POST)){
			$data = $this->website_form_model->save_contact();
			if($data == true){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Thank you!', 'We have recieved you data', 'success');});</script>");
				redirect(base_url() . 'contact');
			}else{
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Oops!','Something went wrong!!', 'warning');});</script>");
			}
		}
	}
	
	public function save_admission()
	{
		if(!empty($_POST)){
			$data = $this->website_form_model->save_admission();
			if($data === 'mobile_duplicate'){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Student Mobile Number is Already Registered!!', 'warning');});</script>");
				redirect(base_url() . 'admissions');
			}
			if($data === 'email_duplicate'){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Email is Already Registered!!', 'warning');});</script>");
				redirect(base_url() . 'admissions');
			}
			if($data === 'aadhaar_duplicate'){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Aadhaar is Already Registered!!', 'warning');});</script>");
				redirect(base_url() . 'admissions');
			}
			if($data === 'true'){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Thank you!', 'We have recieved you data', 'success');});</script>");
				redirect(base_url() . 'admissions');
			}else{
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Oops!','Something went wrong!!', 'warning');});</script>");
			}
		}
	}
	
	public function save_enquiry()
	{
		if(!empty($_POST)){
			$data = $this->website_form_model->save_enquiry();
			if($data == true){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Thank you!', 'We have recieved you data', 'success');});</script>");
				redirect(base_url());
			}else{
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Oops!','Something went wrong!!', 'warning');});</script>");
			}
		}
	}

	public function save_career()
	{
		if(!empty($_POST)){
			$data = $this->website_form_model->save_career();
			if($data === "file_error"){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Please upload in docx or pdf format!!', 'warning');});</script>");
				redirect(base_url() . 'career');
			}
			if($data == true){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Thank you!', 'We have recieved you data', 'success');});</script>");
				redirect(base_url() . 'career');
			}else{
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Something went wrong!!', 'warning');});</script>");
			}
		}
	}

	public function alumni_registration()
	{
		if(!empty($_POST)){
			$data = $this->website_form_model->save_alumni();
			if($data === "file_error"){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Please upload an image!!', 'warning');});</script>");
				redirect(base_url() . 'alumni');
			}
			if($data == true){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Thank you!', 'We have recieved you data', 'success');});</script>");
				redirect(base_url() . 'alumni');
			}else{
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Something went wrong!!', 'warning');});</script>");
			}
		}
	}

	public function save_staff_grievance()
	{
		if(!empty($_POST)){
			$data = $this->website_form_model->save_staff_grievance();
			if($data === "file_error"){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Please upload in docx or pdf or jpg or png format!!', 'warning');});</script>");
				redirect(base_url() . 'grievance-cell');
			}
			if($data == true){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Thank you!', 'We have recieved you data', 'success');});</script>");
				redirect(base_url() . 'grievance-cell');
			}else{
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Something went wrong!!', 'warning');});</script>");
			}
		}
	}

	public function save_student_grievance()
	{
		if(!empty($_POST)){
			$data = $this->website_form_model->save_student_grievance();
			if($data === "file_error"){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Please upload in docx or pdf or jpg or png format!!', 'warning');});</script>");
				redirect(base_url() . 'grievance-cell');
			}
			if($data == true){
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Thank you!', 'We have recieved you data', 'success');});</script>");
				redirect(base_url() . 'grievance-cell');
			}else{
				$this->session->set_flashdata('data', " <script>$( document ).ready(function() {swal('Sorry!','Something went wrong!!', 'warning');});</script>");
			}
		}
	}
	
}

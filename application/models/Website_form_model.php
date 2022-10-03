<?php
class Website_form_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Kolkata");
  }
  public function save_contact()
  {
    $date = date('Y-m-d H:i:s');
    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $email = $this->input->post('email');
    $mobile = $this->input->post('mobile');
    $message = $this->input->post('message');
    $data = array(
      'firstname' => $firstname,
      'lastname' => $lastname,
      'email' => $email,
      'mobile' => $mobile,
      'message' => $message,
      'created_date' => $date,
    );
    $query = $this->db->insert('form_contact', $data);
    if ($query) {
      return true;
    } else {
      return false;
    }
  }

  public function save_admission()
  {
    // echo "<pre>";print_r($_POST);die;
    $date = date('Y-m-d H:i:s');
    $studentname = $this->input->post('studentname');
    $fathername = $this->input->post('fathername');
    $mothername = $this->input->post('mothername');
    $studentmobile = $this->input->post('studentmobile');
    $parentmobile = $this->input->post('parentmobile');
    $guardianmobile = $this->input->post('guardianmobile');
    $email = $this->input->post('email');
    $course = $this->input->post('course');
    $yoa = $this->input->post('yoa');
    $yoa = $this->input->post('yoa');
    $address = $this->input->post('address');
    $state_id = $this->input->post('state');
    $city = $this->input->post('city');
    $pincode = $this->input->post('pincode');
    $message = $this->input->post('message');
    $get_state = $this->db->query("SELECT name from states where id='" . $state_id . "'")->row();
    $state = $get_state->name;
    $aadhaar = $this->input->post('aadhaar');
    $caste = $this->input->post('caste');
    $subcaste = $this->input->post('subcaste');
    
    if(!empty($studentmobile)){
        $validate = "SELECT * FROM form_admission WHERE studentmobile = '$studentmobile'";
        $query = $this->db->query($validate)->result();
        if(!empty($query)){
          return "mobile_duplicate";
        }
    }
    
    if(!empty($email)){
        $validate = "SELECT * FROM form_admission WHERE email = '$email'";
        $query = $this->db->query($validate)->result();
        if(!empty($query)){
          return "email_duplicate";
        }
    }
    
    if(!empty($aadhaar)){
        $validate = "SELECT * FROM form_admission WHERE aadhaar = '$aadhaar'";
        $query = $this->db->query($validate)->result();
        if(!empty($query)){
          return "aadhaar_duplicate";
        }
    }

    $data = array(
      'studentname' => $studentname,
      'fathername' => $fathername,
      'mothername' => $mothername,
      'studentmobile' => $studentmobile,
      'parentmobile' => $parentmobile,
      'guardianmobile' => !empty($guardianmobile) ? $guardianmobile : "",
      'email' => $email,
      'course' => $course,
      'yoa' => $yoa,
      'aadhaar' => $aadhaar,
      'caste' => $caste,
      'subcaste' => !empty($subcaste) ? $subcaste : "",
      'address' => $address,
      'state' => $state,
      'city' => $city,
      'pincode' => $pincode,
      'message' => $message,
      'created_date' => $date,
    );

    // echo "let go front";die;
    $query = $this->db->insert('form_admission', $data);
    if ($query) {
      return "true";
    } else {
      return "false";
    }
  }

  public function save_enquiry()
  {
    $date = date('Y-m-d H:i:s');
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $mobile = $this->input->post('mobile');
    $message = $this->input->post('req_message_box');
    $data = array(
      'name' => $name,
      'email' => $email,
      'mobile' => $mobile,
      'message' => $message,
      'created_date' => $date,
    );
    $query = $this->db->insert('form_enquiry', $data);
    if ($query) {
      return true;
    } else {
      return false;
    }
  }

  public function save_career()
  {
    // print_r($_POST);die;
    $date = date('Y-m-d H:i:s');
    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $email = $this->input->post('email');
    $mobile = $this->input->post('mobile');
    $gender = $this->input->post('gender');
    $job_title = $this->input->post('job_title');
    $department = $this->input->post('department');
    $work_exp = $this->input->post('work_exp');
    $highest_qualification = $this->input->post('highest_qualification');
    $age = $this->input->post('age');
    $current_job = $this->input->post('current_job');
    $current_org = $this->input->post('current_org');
    $current_loc = $this->input->post('current_loc');
    $language = $this->input->post('language');
    $ug_college = $this->input->post('ug_college');
    $pg_college = $this->input->post('pg_college');
    $phd_college = $this->input->post('phd_college');

    $file = rand(1000, 100000) . "-" . $_FILES['resume']['name'];
    $file_loc = $_FILES['resume']['tmp_name'];
    $file_size = $_FILES['resume']['size'];
    $file_type = $_FILES['resume']['type'];
    $allowed = array('docx', 'pdf');
    $folder = FCPATH . "uploads/resume/";
    chmod($folder, 0755);
    $new_file_name = strtolower($file);
    $file_ext = pathinfo($new_file_name, PATHINFO_EXTENSION);
    if (!in_array($file_ext, $allowed)) {
      return "file_error";
    }else {
      $res = round(microtime(true)) . '.' . $file_ext;
      move_uploaded_file($file_loc, $folder . $res);
      // chmod($folder, 0555);

      $data = array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'mobile' => $mobile,
        'gender' => $gender,
        'job_title' => $job_title,
        'department' => $department,
        'work_exp' => $work_exp,
        'highest_qualification' => $highest_qualification,
        'age' => $age,
        'current_job' => $current_job,
        'current_org' => $current_org,
        'current_loc' => $current_loc,
        'language' => $language,
        'ug_college' => $ug_college,
        'pg_college' => $pg_college,
        'phd_college' => $phd_college,
        'resume' => $res,
        'created_date' => $date,
      );
      $query = $this->db->insert('form_career', $data);
      if ($query) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function save_alumni()
  {
    // print_r($_POST);die;
    $date = date('Y-m-d H:i:s');
    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $DOB = $this->input->post('dateofbirth');
    $gender = $this->input->post('gender');
    $degree = $this->input->post('degree');
    $course = $this->input->post('course');
    $yearofjoining = $this->input->post('yearofjoining');
    $yearofpassing = $this->input->post('yearofpassing');
    $address = $this->input->post('address');
    $state = $this->input->post('state');
    $city = $this->input->post('city');
    $country = $this->input->post('country');
    $postalcode = $this->input->post('postalcode');
    $mobile = $this->input->post('mobile');
    $alt_mobile = $this->input->post('alt_mobile');
    $email = $this->input->post('email');
    $present_status = $this->input->post('present_status');
    $company_name = $this->input->post('company_name');
    $designation = $this->input->post('designation');
    $place_work = $this->input->post('po_work');
    $reside_city = $this->input->post('re_city');
    $own_company_name = $this->input->post('own_company_name');
    $company_description = $this->input->post('company_description');
    $others_description = $this->input->post('others_description');
    $message = $this->input->post('message');
  

    $file = rand(1000, 100000) . "-" . $_FILES['photo']['name'];
    $file_loc = $_FILES['photo']['tmp_name'];
    $file_size = $_FILES['photo']['size'];
    $file_type = $_FILES['photo']['type'];
    $allowed = array('jpeg', 'png', 'webp', 'jpg', 'svg');
    $folder = FCPATH . "uploads/alumni_form/";
    chmod($folder, 0755);
    $new_file_name = strtolower($file);
    $file_ext = pathinfo($new_file_name, PATHINFO_EXTENSION);
    if (!in_array($file_ext, $allowed)) {
      return "file_error";
    }else {
      $res = round(microtime(true)) . '.' . $file_ext;
      move_uploaded_file($file_loc, $folder . $res);
      // chmod($folder, 0555);

      
      $data = array(
        'photo' => $res,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'DOB' => $DOB,
        'gender' => $gender,
        'degree' => $degree,
        'course' => $course,
        'yearofjoining' => $yearofjoining,
        'yearofpassing' => $yearofpassing,
        'address' => $address,
        'state' => $state,
        'city' => $city,
        'country' => $country,
        'postalcode' => $postalcode,
        'mobile' => $mobile,
        'alt_mobile' => $alt_mobile,
        'email' => $email,
        'present_status' => $present_status,
        'company_name' => !empty($company_name)? $company_name : "",
        'designation' => !empty($designation)? $designation : "",
        'place_work' => !empty($place_work)? $place_work : "",
        'reside_city' => !empty($reside_city)? $reside_city : "",
        'own_company_name' => !empty($own_company_name)? $own_company_name : "",
        'company_description' => !empty($company_description)? $company_description : "",
        'others_description' => !empty($others_description)? $others_description : "",
        'message' => $message,
        'created_date' => $date,
      );
      $query = $this->db->insert('form_alumni', $data);
      if ($query) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function save_staff_grievance()
  {
    // echo "<pre>";print_r($_POST);die;
    $date = date('Y-m-d H:i:s');
    $staffname = $this->input->post('staffname');
    $staffemail = $this->input->post('staffemail');
    $staffmobile = $this->input->post('staffmobile');
    $deptname = $this->input->post('deptname');
    $witness_staffemail = $this->input->post('witness_staffemail');
    $witness_staffmobile = $this->input->post('witness_staffmobile');
    $who_involved = $this->input->post('who_involved');
    $occur_date = $this->input->post('occur_date');
    $where_occured = $this->input->post('where_occured');
    $what_happened = $this->input->post('what_happened');
    $why_grievance = $this->input->post('why_grievance');
    $solution = $this->input->post('solution');

    $file = rand(1000, 100000) . "-" . $_FILES['attachment']['name'];
    $file_loc = $_FILES['attachment']['tmp_name'];
    $allowed = array('docx', 'pdf', 'PNG', 'png', 'JPEG', 'JPG', 'jpg');
    $folder = FCPATH . "uploads/staff_grievance/";
    chmod($folder, 0755);
    $new_file_name = strtolower($file);
    $file_ext = pathinfo($new_file_name, PATHINFO_EXTENSION);
    if (!in_array($file_ext, $allowed)) {
      return "file_error";
    }else {
      $res = round(microtime(true)) . '.' . $file_ext;
      move_uploaded_file($file_loc, $folder . $res);
      // chmod($folder, 0555);

      $data = array(
        'staffname' => $staffname,
        'staffemail' => $staffemail,
        'staffmobile' => $staffmobile,
        'deptname' => $deptname,
        'witness_staffemail' => $witness_staffemail,
        'witness_staffmobile' => $witness_staffmobile,
        'who_involved' => $who_involved,
        'occur_date' => $occur_date,
        'where_occured' => $where_occured,
        'what_happened' => $what_happened,
        'why_grievance' => $why_grievance,
        'solution' => $solution,
        'attachment' => $res,
        'created_date' => $date,
      );
      $query = $this->db->insert('form_staff_grievance', $data);
      if ($query) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function save_student_grievance()
  {
    // echo "<pre>";print_r($_POST);die;
    $date = date('Y-m-d H:i:s');
    $studentname = $this->input->post('studentname');
    $studentid = $this->input->post('studentid');
    $studentmobile = $this->input->post('studentmobile');
    $studentemail = $this->input->post('studentemail');
    $deptname = $this->input->post('deptname');
    $witness_studentmobile = $this->input->post('witness_studentmobile');
    $who_involved = $this->input->post('who_involved');
    $occur_date = $this->input->post('occur_date');
    $where_occured = $this->input->post('where_occured');
    $what_happened = $this->input->post('what_happened');
    $why_grievance = $this->input->post('why_grievance');
    $solution = $this->input->post('solution');

    $file = rand(1000, 100000) . "-" . $_FILES['attachment']['name'];
    $file_loc = $_FILES['attachment']['tmp_name'];
    $allowed = array('docx', 'pdf', 'PNG', 'png', 'JPEG', 'JPG', 'jpg');
    $folder = FCPATH . "uploads/student_grievance/";
    chmod($folder, 0755);
    $new_file_name = strtolower($file);
    $file_ext = pathinfo($new_file_name, PATHINFO_EXTENSION);
    if (!in_array($file_ext, $allowed)) {
      return "file_error";
    }else {
      $res = round(microtime(true)) . '.' . $file_ext;
      move_uploaded_file($file_loc, $folder . $res);
      // chmod($folder, 0555);

      $data = array(
        'studentname' => $studentname,
        'studentid' => $studentid,
        'studentemail' => $studentemail,
        'studentmobile' => $studentmobile,
        'deptname' => $deptname,
        'witness_studentmobile' => $witness_studentmobile,
        'who_involved' => $who_involved,
        'occur_date' => $occur_date,
        'where_occured' => $where_occured,
        'what_happened' => $what_happened,
        'why_grievance' => $why_grievance,
        'solution' => $solution,
        'attachment' => $res,
        'created_date' => $date,
      );
      $query = $this->db->insert('form_student_grievance', $data);
      if ($query) {
        return true;
      } else {
        return false;
      }
    }
  }
}

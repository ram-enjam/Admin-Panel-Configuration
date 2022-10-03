<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Website_model extends CI_Model{

	public function __construct(){
		parent:: __construct();
		date_default_timezone_set("Asia/Kolkata");
	}
	  
	// use this model to get data from database and show in website.
}

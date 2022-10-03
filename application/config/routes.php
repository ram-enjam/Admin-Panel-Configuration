<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'welcome/index';
$route['about-us'] = 'welcome/about';
$route['contact-us'] = 'welcome/contact';
$route['all-products'] = 'welcome/all_products';
$route['core-products'] = 'welcome/core_products';
$route['api'] = 'welcome/api';
$route['Custom-Synthesis'] = 'welcome/Custom_Synthesis';
$route['Enzymes'] = 'welcome/Enzymes';
$route['Excipients'] = 'welcome/Excipients';
$route['Intermediates'] = 'welcome/Intermediates';

// admin panel routes

$route['admin/login'] = 'login'; 

// user profile
$route['admin/profile'] = 'admin/adminpage/user_profile';

$route['dashboard'] = 'admin/adminpage/dashboard';

$route['AddEmp']  =  'app/emp_master/add';
$route['CreateUsers'] = 'app/users/add';
$route['AddJobtitle'] = 'app/master/jobtitle_add';
$route['AddGalleryTitle'] = 'app/master/gallery_album';
$route['access-denied'] = 'admin/adminpage/access_denied';

//Products
$route['add-products'] = "admin/adminpage/add_products";
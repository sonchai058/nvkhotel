<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
/*
$route['download.html']="main/download";
$route['company_info.html']="main/company_info";
$route['product_all.html']="main/product";
$route['question.html']="main/question";
$route['cr_table.html']="main/cr_table";
$route['howto.html']="main/howto";
$route['member.html']="member";

$route['activity(:num)/(:any)']="article/activity/$1";

$route['news(:num)/(:any)']="article/topic/$1";
$route['hotnews(:num)/(:any)']="article/topic/$1";
$route['promotions(:num)/(:any)']="article/topic/$1";
$route['article(:num)/(:any)']="article/topic/$1";

$route['product(:num)/(:any)']="main/product/$1";
*/
$route['default_controller'] = "member_access";

$route['login']="member_access";
$route['logout']="member_access/logout";

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
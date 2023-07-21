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
|	http://codeigniter.com/user_guide/general/routing.html
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

//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;
//$route['api'] = 'api';
//$route['connect'] = 'api';
//$route['about'] = 'about';
//$route['terms'] = 'terms';
//$route['how-it-works'] = 'howitworks';
//$route['faq'] = 'faq';
//$route['docs'] = 'docs';
//$route['business'] = 'business';
//$route['redeem'] = 'pimpcode';
//$route['web-summit-2015'] = 'websummit';
////$route['map'] = 'map';
//$route['api/send_email'] = 'api/send_email';
$route['map/user_data_submit'] = 'map/user_data_submit';
$route['map/user_search'] = 'map/user_search';
$route['map/send_share_email'] = 'map/send_share_email';
$route['map/get_business_eddresses'] = 'map/get_business_eddresses';
$route['order/pin_user_location'] = 'order/pin_user_location';
$route['order/send_feedback'] = 'order/send_feedback';
$route['order/get_worker_location'] = 'order/get_worker_location';
$route['order/trackorderAjax'] = 'order/trackorderAjax';
$route['o/trackorderAjax'] = 'order/trackorderAjax';
$route['order/get_eta_timezone'] = 'order/get_eta_timezone';
$route['order/(:any)'] = 'order/trackorder/$1';
$route['default_controller'] = 'map';
$route['m/(:any)'] = 'map/loadeddress/$1';


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//home
$route['home'] = 'C_Home/index';


//product
$route['product'] = 'C_Product/index';
$route['product_by_catalog/(:any)/(:any)']   = 'C_Product/Catalog/$1/$2';
$route['product_detail/(:any)'] = 'C_Product/Detail/$1';
$route['search'] = 'C_Product/Search';

//contact
$route['contact'] = 'C_Contact/index';
$route['message'] = 'C_Contact/Message';

//admin
$route['admin'] = 'C_Admin/index';
$route['removemsg'] = 'C_Admin/removeMessage';
$route['login'] = 'C_Admin/adminLogin';
$route['logout'] = 'C_Admin/adminLogout';
$route['logincheck'] = 'C_Admin/loginCheck';

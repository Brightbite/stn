<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//home
$route['home'] = 'C_Home/index';


//products
$route['product'] = 'C_Product/index';
$route['product_by_catalog/(:any)/(:any)']   = 'C_Product/Catalog/$1/$2';

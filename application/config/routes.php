<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "product";
$route['404_override'] = '';
$route['show_ind/(:any)/(:any)'] = 'product/show_ind/$1/$2';
$route['addtocart/(:any)/(:any)/(:any)'] = 'product/addtocart/$1/$2/$3';
$route['show_cart'] = 'product/show_cart';
$route['shipping'] = 'product/shipping';
$route['billing'] = 'product/shipping';


//end of routes.php
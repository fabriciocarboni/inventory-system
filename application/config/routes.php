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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/validate-login'] = 'admin/validate_login_details';

// routes for admin menus
$route['admin/dashboard'] = 'admin/dashboard_view';
$route['admin/categories'] = 'category/list_categories';
$route['admin/brands'] = 'brand/list_brands';
$route['admin/products'] = 'product/list_products';
$route['admin/orders'] = 'order/list_orders';
$route['admin/reports'] = 'report/report_dashboard';
$route['admin/profile-settings'] = 'settings/profile_settings';
$route['admin/currency-settings'] = 'settings/currency_settings';
$route['admin/product_image_settings'] = 'settings/product_image_settings';
$route['admin/footer-settings'] = 'settings/footer_settings';

//handle ajax requests
$route['inventory-ajax'] = 'ajax/handle_ajax_requests';

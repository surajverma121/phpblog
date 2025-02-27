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


//$route['default_controller'] = 'welcome'; // Set login as the default page



//$$route['default_controller'] = 'auth/login';
$route['auth/register'] = 'auth/register';
$route['auth/login'] = 'auth/login';
$route['dashboard/admin'] = 'dashboard/admin';
$route['dashboard/user'] = 'dashboard/user';
$route['default_controller'] = 'blog/view_all'; // Default route to show all blogs
$route['auth/logout'] = 'auth/logout';
$route['allblogs'] = 'blog/index';
$route['blog/create'] = 'blog/create';  // Create blog page
$route['blog/store'] = 'blog/store';
$route['blog/edit/(:num)'] = 'blog/edit/$1';
$route['blog/update/(:num)'] = 'blog/update/$1';
$route['blog/delete/(:num)'] = 'blog/delete/$1';
$route['blogs'] = 'blog/view_all'; // Public route for all users

$route ['auth/allusers'] = 'auth/view_all_users';
$route['auth/deleteUser/(:num)']= 'auth/deleteUser/$1';
$route['auth/toggleRole/(:num)'] = 'auth/toggleRole/$1';
$route['blog/blog_details/(:num)']='blog/blog_details/$1';  
$route['blog/details/(:num)'] = 'blog/blog_details/$1';

$route ['api/contact'] ='contact/submit';
$route['contact/all_query']='contact/all_contact_query';
$route['contact/contact_delete/(:num)'] = 'contact/delete_contact_query/$1';

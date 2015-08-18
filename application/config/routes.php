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
$route['default_controller'] = "authentication";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = "authentication/register";
$route['logout'] = "authentication/logout";
$route['forgot'] = "authentication/forgot";
$route['new_password/(:any)'] = "authentication/new_password/$1";


$route['finance'] =                                            "Finance";

/* CRUD ITEM */
$route['finance/type/(:any)'] =                                "Finance/type/$1";
$route['finance/create'] =                                     "Finance/create";
$route['finance/update/(:num)'] =                              "Finance/update/$1";
$route['finance/type/(:any)/update/(:num)'] =                  "Finance/type/$1/update/$2";
$route['finance/type/(:any)/delete/(:num)'] =                  "Finance/delete/$1";

/* CRUD TYPE */
$route['finance/create_type'] =                                "Finance/createType";
$route['finance/type/(:any)/update_type'] =                    "Finance/updateType";
$route['finance/type/(:any)/delete_type/(:num)'] =             "Finance/deleteType/$1";

//$route['finance/type/(:any)/search/(:any)'] =                "Finance/type/$1/search/$2";
//$route['finance/type/(:any)/search/(:any)/(:num)'] =         "Finance/type/$1/search/$2/$3";


$route['legal'] =                                              "Legal";

/* CRUD ITEM */
$route['legal/items'] =                                        "Legal/index";
$route['legal/items/(:num)'] =                                 "Legal/index/$1";

$route['legal/items/type/(:any)'] =                             "Legal/type/$1";
$route['legal/items/type/(:any)/(:num)'] =                      "Legal/type/$1/$2";


$route['legal/items/search/'] =                                "Legal/search/";
$route['legal/items/search/(:num)'] =                          "Legal/search/$1";
$route['legal/create'] =                                       "Legal/create";
$route['legal/update/(:num)'] =                                "Legal/update/$1";
$route['legal/delete/(:num)'] =                                "Legal/delete/$1";


/* CRUD TYPE */
$route['legal/create_type'] =                                  "Legal/createType";
$route['legal/type/(:any)/update/(:num)'] =                    "Legal/type/update/$1/$2";
$route['legal/type/(:any)/delete/(:num)'] =                    "Legal/delete/$1";
//$route['legal/type/(:any)'] =                                  "Legal/type/$1";
//$route['legal/type/(:any)/update_type'] =                      "Legal/updateType";
//$route['legal/type/(:any)/delete_type/(:num)'] =               "Legal/deleteType/$1";


//$route['legal/type/(:any)/search/(:any)'] =                  "Legal/type/$1/search/$2";
//$route['legal/type/(:any)/search/(:any)/(:num)'] =           "Legal/type/$1/search/$2/$3";

// admin users
//$route['manage/users'] = "admin/users";
//$route['manage/users/(:num)'] = "admin/users/index/$1";
//$route['manage/users/search'] = "admin/users/search";
//$route['manage/users/search/(:any)'] = "admin/users/search/$1";
//$route['manage/users/add'] = "admin/users/add";
//$route['manage/users/edit/(:num)'] = "admin/users/edit/$1";
//$route['manage/users/remove/(:num)'] = "admin/users/remove/$1";







$route['organisation'] =                                         "Organisation";

/* CRUD ITEM */
$route['organisation/type/(:any)'] =                             "Organisation/type/$1";
$route['organisation/create'] =                                  "Organisation/create";
$route['organisation/update/(:num)'] =                           "Organisation/update/$1";
$route['organisation/type/(:any)/update/(:num)'] =               "Organisation/type/$1/update/$2";
$route['organisation/type/(:any)/delete/(:num)'] =               "Organisation/delete/$1";

/* CRUD TYPE */
$route['organisation/create_type'] =                             "Organisation/createType";
$route['organisation/type/(:any)/update_type'] =                 "Organisation/updateType";
$route['organisation/type/(:any)/delete_type/(:num)'] =          "Organisation/deleteType/$1";

//$route['organisation/type/(:any)/search/(:any)'] =             "Organisation/type/$1/search/$2";
//$route['organisation/type/(:any)/search/(:any)/(:num)'] =      "Organisation/type/$1/search/$2/$3";

$route['organisation/create_user'] =                             "Organisation/createUser";
$route['organisation/list_users'] =                             "Organisation/listUsers";


$route['planner'] = "Planner";

/* CRUD ITEM */
$route['planner/type/(:any)'] =                             "planner/type/$1";
$route['planner/create'] =                                  "planner/create";
$route['planner/update/(:num)'] =                           "planner/update/$1";
$route['planner/type/(:any)/update/(:num)'] =               "planner/type/$1/update/$2";
$route['planner/type/(:any)/delete/(:num)'] =               "planner/delete/$1";

/* CRUD TYPE */
$route['planner/create_type'] =                             "planner/createType";
$route['planner/type/(:any)/update_type'] =                 "planner/updateType";
$route['planner/type/(:any)/delete_type/(:num)'] =          "planner/deleteType/$1";

//$route['planner/type/(:any)/search/(:any)'] =             "planner/type/$1/search/$2";
//$route['planner/type/(:any)/search/(:any)/(:num)'] =      "planner/type/$1/search/$2/$3";


$route['projects'] = "Projects";

/* CRUD ITEM */
$route['projects/type/(:any)'] =                             "projects/type/$1";
$route['projects/create'] =                                  "projects/create";
$route['projects/update/(:num)'] =                           "projects/update/$1";
$route['projects/type/(:any)/update/(:num)'] =               "projects/type/$1/update/$2";
$route['projects/type/(:any)/delete/(:num)'] =               "projects/delete/$1";

/* CRUD TYPE */
$route['projects/create_type'] =                             "projects/createType";
$route['projects/type/(:any)/update_type'] =                 "projects/updateType";
$route['projects/type/(:any)/delete_type/(:num)'] =          "projects/deleteType/$1";

//$route['projects/type/(:any)/search/(:any)'] =             "projects/type/$1/search/$2";
//$route['projects/type/(:any)/search/(:any)/(:num)'] =      "projects/type/$1/search/$2/$3";


$route['suppliers'] = "Suppliers";

/* CRUD ITEM */
$route['suppliers/type/(:any)'] =                             "suppliers/type/$1";
$route['suppliers/create'] =                                  "suppliers/create";
$route['suppliers/update/(:num)'] =                           "suppliers/update/$1";
$route['suppliers/type/(:any)/update/(:num)'] =               "suppliers/type/$1/update/$2";
$route['suppliers/type/(:any)/delete/(:num)'] =               "suppliers/delete/$1";

/* CRUD TYPE */
$route['suppliers/create_type'] =                             "suppliers/createType";
$route['suppliers/type/(:any)/update_type'] =                 "suppliers/updateType";
$route['suppliers/type/(:any)/delete_type/(:num)'] =          "suppliers/deleteType/$1";

//$route['suppliers/type/(:any)/search/(:any)'] =             "suppliers/type/$1/search/$2";
//$route['suppliers/type/(:any)/search/(:any)/(:num)'] =      "suppliers/type/$1/search/$2/$3";


$route['people'] = "People";

/* CRUD ITEM */
$route['people/type/(:any)'] =                             "people/type/$1";
$route['people/create'] =                                  "people/create";
$route['people/update/(:num)'] =                           "people/update/$1";
$route['people/type/(:any)/update/(:num)'] =               "people/type/$1/update/$2";
$route['people/type/(:any)/delete/(:num)'] =               "people/delete/$1";

/* CRUD TYPE */
$route['people/create_type'] =                             "people/createType";
$route['people/type/(:any)/update_type'] =                 "people/updateType";
$route['people/type/(:any)/delete_type/(:num)'] =          "people/deleteType/$1";

//$route['people/type/(:any)/search/(:any)'] =             "people/type/$1/search/$2";
//$route['people/type/(:any)/search/(:any)/(:num)'] =      "people/type/$1/search/$2/$3";


$route['sales'] = "Sales";

/* CRUD ITEM */
$route['sales/type/(:any)'] =                             "sales/type/$1";
$route['sales/create'] =                                  "sales/create";
$route['sales/update/(:num)'] =                           "sales/update/$1";
$route['sales/type/(:any)/update/(:num)'] =               "sales/type/$1/update/$2";
$route['sales/type/(:any)/delete/(:num)'] =               "sales/delete/$1";

/* CRUD TYPE */
$route['sales/create_type'] =                             "sales/createType";
$route['sales/type/(:any)/update_type'] =                 "sales/updateType";
$route['sales/type/(:any)/delete_type/(:num)'] =          "sales/deleteType/$1";

//$route['sales/type/(:any)/search/(:any)'] =             "sales/type/$1/search/$2";
//$route['sales/type/(:any)/search/(:any)/(:num)'] =      "sales/type/$1/search/$2/$3";

$route['profile'] = "Profile";
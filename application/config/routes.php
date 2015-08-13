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
$route['default_controller'] = 'Finance';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['finance'] =                                            "Finance";

/* CRUD ITEM */
$route['finance/type/(:any)'] =                                "Finance/type/$1";
$route['finance/create'] =                                     "Finance/create";
$route['finance/type/(:any)/update/(:num)'] =                  "Finance/type/$1/update/$2";
$route['finance/type/(:any)/delete/(:num)'] =                  "Finance/delete/$1";

/* CRUD TYPE */
$route['finance/type_create'] =                                "Finance/typeCreate";
$route['finance/type/(:any)/type_update'] =                    "Finance/typeUpdate";
$route['finance/type/(:any)/type_delete/(:num)'] =             "Finance/typeDelete/$1";

//$route['finance/type/(:any)/search/(:any)'] =                "Finance/type/$1/search/$2";
//$route['finance/type/(:any)/search/(:any)/(:num)'] =         "Finance/type/$1/search/$2/$3";


$route['legal'] =                                              "Legal";

/* CRUD ITEM */
$route['legal/type/(:any)'] =                                  "Legal/type/$1";
$route['legal/create'] =                                       "Legal/create";
$route['legal/type/(:any)/update/(:num)'] =                    "Legal/type/$1/update/$2";
$route['legal/type/(:any)/delete/(:num)'] =                    "Legal/delete/$1";

/* CRUD TYPE */
$route['legal/type_create'] =                                  "Legal/typeCreate";
$route['legal/type/(:any)/type_update'] =                      "Legal/typeUpdate";
$route['legal/type/(:any)/type_delete/(:num)'] =               "Legal/typeDelete/$1";

//$route['legal/type/(:any)/search/(:any)'] =                  "Legal/type/$1/search/$2";
//$route['legal/type/(:any)/search/(:any)/(:num)'] =           "Legal/type/$1/search/$2/$3";



$route['org-and-hr'] =                                         "OrgAndHr";

/* CRUD ITEM */
$route['org-and-hr/type/(:any)'] =                             "OrgAndHr/type/$1";
$route['org-and-hr/create'] =                                  "OrgAndHr/create";
$route['org-and-hr/type/(:any)/update/(:num)'] =               "OrgAndHr/type/$1/update/$2";
$route['org-and-hr/type/(:any)/delete/(:num)'] =               "OrgAndHr/delete/$1";

/* CRUD TYPE */
$route['org-and-hr/type_create'] =                             "OrgAndHr/typeCreate";
$route['org-and-hr/type/(:any)/type_update'] =                 "OrgAndHr/typeUpdate";
$route['org-and-hr/type/(:any)/type_delete/(:num)'] =          "OrgAndHr/typeDelete/$1";

//$route['org-and-hr/type/(:any)/search/(:any)'] =             "OrgAndHr/type/$1/search/$2";
//$route['org-and-hr/type/(:any)/search/(:any)/(:num)'] =      "OrgAndHr/type/$1/search/$2/$3";


$route['planner'] = "Planner";

/* CRUD ITEM */
$route['planner/type/(:any)'] =                             "planner/type/$1";
$route['planner/create'] =                                  "planner/create";
$route['planner/type/(:any)/update/(:num)'] =               "planner/type/$1/update/$2";
$route['planner/type/(:any)/delete/(:num)'] =               "planner/delete/$1";

/* CRUD TYPE */
$route['planner/type_create'] =                             "planner/typeCreate";
$route['planner/type/(:any)/type_update'] =                 "planner/typeUpdate";
$route['planner/type/(:any)/type_delete/(:num)'] =          "planner/typeDelete/$1";

//$route['planner/type/(:any)/search/(:any)'] =             "planner/type/$1/search/$2";
//$route['planner/type/(:any)/search/(:any)/(:num)'] =      "planner/type/$1/search/$2/$3";




$route['projects'] = "Projects";

$route['people'] = "People";
$route['suppliers'] = "Suppliers";
$route['sales'] = "Sales";


$route['profile'] = "Profile";






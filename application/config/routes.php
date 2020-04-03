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
$route['default_controller'] = 'indexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['indexroute'] = 'indexRoutingController';
$route['indexroute/login'] = 'indexRoutingController/login';
$route['indexroute/loginaction'] = 'indexRoutingController/loginaction';
$route['indexroute/logout'] = 'indexRoutingController/logout';
$route['indexroute/register'] = 'indexRoutingController/register';
$route['indexroute/registeraction'] = 'indexRoutingController/registeraction';
$route['indexroute/get_designation'] = 'indexRoutingController/get_designation';
$route['indexroute/get_unit'] = 'indexRoutingController/get_unit';
$route['indexroute/get_user'] = 'indexRoutingController/get_user';
$route['indexroute/home'] = 'indexRoutingController/home';

$route['login'] = 'loginController';

//user controller
$route['user/datatablegetuserdata'] = 'userController/datatablegetuserdata';
$route['user/add_designation'] = 'userController/add_designation';
$route['user/add_status'] = 'userController/add_status';
$route['user/add_role'] = 'userController/add_role';



$route['user/datatablegetuserroledata'] = 'userController/datatablegetuserroledata';
$route['user/getuserroledata']='userController/getuserroledata';
$route['user/role_update']='userController/role_update';
$route['user/assign_role']='userController/assign_role';

$route['user/tasklist_update']='userController/tasklist_update';
$route['user/tasklistupdatadata']='userController/tasklistupdatadata';

$route['user/role_delete']='userController/role_delete';

$route['user/getuserdata']='userController/getuserdata';
$route['user/user_update']='userController/user_update';
$route['user/user_delete']='userController/user_delete';


//task controller
$route['task/get_taskcategory'] = 'taskController/get_taskcategory';
$route['task/get_taskmode'] = 'taskController/get_taskmode';
$route['task/get_taskdata'] = 'taskController/get_taskdata';
$route['task/create_task'] = 'taskController/create_task';
$route['task/task_update']='taskController/task_update';
$route['task/task_delete']='taskController/task_delete';

$route['task_list/taskpage'] = 'taskController/taskpage';
$route['task/datatablegettaskdata'] = 'taskController/datatablegettaskdata';
$route['task/datatablegetalltaskdata'] = 'taskController/datatablegetalltaskdata';


$route['task/assignedtask_count']= 'taskController/assignedtask_count';
$route['task/assignedtask']= 'taskController/assignedtask';
$route['task/assignedtask_data']= 'taskController/assignedtask_data';
$route['task/assignedtask_data']= 'taskController/assignedtask_data';
//menuController
$route['task/createtask_page'] = 'menuController/createtask_page';
$route['task_list/task_list'] = 'menuController/task_list';
$route['task_list/task_listbyme'] = 'menuController/task_listbyme';
$route['task_list/task_listtome'] = 'menuController/task_listtome';
$route['user_list/user_list'] = 'menuController/user_list';
$route['designation_list/designation_list'] = 'menuController/designation_list';
$route['designation/get_designationname'] = 'menuController/get_designationname';
$route['designation/update_designationname'] = 'menuController/update_designationname';



$route['status_list/status_list'] = 'menuController/status_list';
$route['status/get_statusname'] = 'menuController/get_statusname';
$route['status/update_statusname'] = 'menuController/update_statusname';

$route['role/role'] = 'menuController/role';
$route['role/get_roletype'] = 'menuController/get_roletype';
$route['role/update_roletype'] = 'menuController/update_roletype';
$route['role_assigned/role_assigned'] = 'menuController/role_assigned';



$route['menu/sidemenu'] = 'menuController/sidemenu';
$route['menu/datahome'] = 'indexRoutingController/datahome';
$route['menu/menu'] = 'menuController/menu';
$route['menu/add_menu'] = 'menuController/add_menu';
$route['menu/assignrolemenu'] = 'menuController/assignrolemenu';
$route['menu/assign_rolemenu'] = 'menuController/assign_rolemenu';


$route['menu/get_rolemenu'] = 'menuController/get_rolemenu';
$route['menu/get_menulist'] = 'menuController/get_menulist';
$route['menu/get_menu'] = 'menuController/get_menu';
$route['menu/update_menu'] = 'menuController/update_menu';


$route['datacollection/getconnectivitydata'] = 'dataController/getconnectivitydata';
$route['datacollection/deleteselecteddata'] = 'dataController/deleteselecteddata';
$route['datacollection/updateconnectivitydata'] = 'dataController/updateconnectivitydata';
$route['datacollection/addconnectivitydata'] = 'dataController/addconnectivitydata';


$route['reports/monthlyreporttabledata'] = 'reportController/monthlyreporttabledata';
$route['reports/viewreports'] = 'menuController/viewreports';
$route['reports/get_reportdata'] = 'reportController/get_reportdata';
$route['reports/report_delete'] = 'reportController/report_delete';
$route['reports/report_update'] = 'reportController/report_update';
$route['reports/viewimportdata'] = 'reportController/viewimportdata';


$route['reports/inteligencereporttabledata'] = 'inteligenceController/inteligencereporttabledata';
$route['reports/inteli_report'] = 'menuController/inteli_report';

$route['reports/prisonreporttabledata'] = 'prisonController/prisonreporttabledata';
$route['reports/prison_data'] = 'menuController/prison_data';

$route['reports/attackreporttabledata'] = 'attackController/attackreporttabledata';
$route['reports/attack_data'] = 'menuController/attack_data';

$route['reports/incidentreporttabledata'] = 'incidentController/incidentreporttabledata';
$route['reports/incident_data'] = 'menuController/incident_data';







$route['Pagination_View/Pagination_View'] = 'Pagination_Controller/Pagination_View';
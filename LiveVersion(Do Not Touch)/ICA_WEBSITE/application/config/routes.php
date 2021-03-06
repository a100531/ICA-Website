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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/* Using Home controller */
$route['login'] = 'home/login';
$route['login/submit'] = 'home/login_submit';

$route['logout'] = 'home/logout';

$route['academicResource'] = 'home/academicResource';

$route['addAcademicResource'] = 'home/addAcademicResource';
$route['addAcademicResourceSubmit/submit'] = 'admin/addAcademicResourceSubmit';
$route['adminAcademicResource'] = 'admin/adminAcademicResource';
$route['resourceDelete'] = 'admin/resourceDelete';


$route['addAccount'] = 'home/addAccount';
$route['addAccount/submit'] = 'home/register_submit';

$route['addVacancy'] = 'home/addVacancy';
$route['addVacancy/submit'] = 'home/addVacancy_Submit';

$route['contactUs'] = 'home/contactUs';

/* Using Portfolio controller */

$route['portfolio'] = 'portfolio/portfolio';

$route['portfolioUser'] = 'portfolio/portfolioUser';

$route['editPortfolioUser'] = 'portfolio/editPortfolioUser';
$route['editPortfolioUser/submit'] = 'portfolio/editPortfolioUser_submit';
$route['uploadProfileImage/submit'] = 'portfolio/uploadProfileImage';
$route['uploadProfileInfo/submit'] = 'portfolio/uploadProfileInfo';

$route['editTimetable'] = 'admin/editTimetable';

$route['sickLeave'] = 'home/sickLeave';
$route['sickLeave/submit'] = 'home/sickLeave_submit';

$route['studentList'] = 'home/studentList';

$route['timetable'] = 'home/timetable';

$route['vacancies'] = 'home/vacancies';

$route['adminVacancyList'] = 'admin/adminVacancyList';
$route['editVacancyForm'] = 'admin/editVacancyForm';
$route['editVacancySubmit/submit'] = 'admin/editVacancySubmit';

$route['admin'] = 'admin/admin';
$route['userDelete'] = 'admin/accountDelete';
$route['submitTimetable'] = 'admin/submitTimetable';




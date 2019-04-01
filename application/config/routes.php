<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['login/(:num)'] = 'login/index/$1';
$route['logout'] = 'login/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



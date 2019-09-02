<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard';

//custom routes
$route['dashboard/login'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

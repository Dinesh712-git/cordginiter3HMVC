<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['simple-message'] = 'message/show_message';
$route['show-message'] = 'message/simpleMessage';

// $route['login'] = 'login/index';

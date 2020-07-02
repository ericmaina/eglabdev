<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['reviews'] = 'publications/reviews';
$route['research'] = 'publications/research';
$route['editorials'] = 'publications/editorials';
$route['books'] = 'publications/books';
$route['procedings'] = 'publications/procedings';

//$route['antibodies_admin'] = 'admin/antibodies_admin';

//$route['create'] = 'admin/antibodies_admin/create';

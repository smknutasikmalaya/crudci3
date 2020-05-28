<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Datasiswa';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// home
$route['beranda'] = "Datasiswa/index";
$route['tentang'] = "Datasiswa/tentang";

// data siswa
$route['data-siswa'] = "Datasiswa/data_siswa";
$route['tambah-data-siswa'] = "Datasiswa/tambah_data_siswa";
$route['hapus-data-siswa/(:any)'] = "Datasiswa/hapus_data/$1";
$route['edit-data-siswa/(:any)'] = "Datasiswa/edit_data/$1";
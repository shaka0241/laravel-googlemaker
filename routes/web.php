<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$config['center'] = 'Apiux, Providencia';
	$config['zoom'] = '14';
	$config['map_height'] = '500px';
	// $config['map_width'] = "Apiux";
	$config['scrollwheel'] = false;

	GMaps::initialize($config);

	$marker['position'] = 'Apix, Providencia';
	$marker['infowindow_content'] = 'Apix'

	$map = GMaps::create_map();

    return view('welcome')->with('map', $map);
});

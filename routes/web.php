<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'laravel, emang keren.';
});
 Route::get('/about/one', function(){
	 return '<h1>HORRAY</h1>'
	 .'<h2>INI HALAMAN ABOUT 1</h2><br>'
	 .'laravel, emang keren.';
 });
 Route::get('/about/dinasri', function(){
	 return '<h1>HORRAY SEMUA</h1>'
	 .'<h2>INI HALAMAN ABOUT 2</h2><br>'
	 .'laravel, emang keren.';
 });
 Route::get('/about/dinsri', function(){
	 return '<h1>HORRAY hai hai</h1>'
	 .'<h2>INI HALAMAN ABOUT 3</h2><br>'
	 .'laravel, emang keren.';
 });
 Route::get('/about/good job', function(){
 	return '<h1>Hallo everybody</h1>'
	 .'<h2>INI HALAMAN ABOUT 4</h2><br>'
	 .'laravel, emang keren.';
 });
 Route::get('/about/five', function(){
	 return '<h1>Hello good people</h1>'
	 .'<h2>INI HALAMAN ABOUT 5</h2><br>'
	 .'laravel, emang keren.';
 });
//ROUTE BASIC

Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/profil', function () {
    return view('user/profil');
});
// ROUTE PARAMETER
Route::get('/about/{page}' , function($a){
	return ' haloo ini halaman about  <b>'.$a.'</b>';
});
Route::get('/kantin/{makan}/{minum}/{cemilan}' , function($a,$b,$c){
	 return '<b> saya pesan <b>'.$a.'<br> minum <b> '.$b.' <br> cemilan <b>'.$c.'</b>';
});
 //route optional parameter
 Route::get('user/{name?}' , function ($name = 'john') {
 	return 'nama saya '.$name;
 });
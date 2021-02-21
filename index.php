<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';

Route::run('/', 'login@index');
Route::run('/index', 'login@index');

Route::run('/login', 'login@index');
Route::run('/login', 'login@system_login','post');

Route::run('/denemeview', 'deneme@denemeview');

Route::run('/kayit', 'register@index');
Route::run('/kaydet', 'register@save','post');

Route::run('/sifreyenile', 'pass_reset_c@index');
Route::run('/reset_request', 'pass_reset_c@pass_reset',"post");
Route::run('/yenisifreolustur', 'pass_reset_c@new_pass');
Route::run('/yenisifrekayit', 'pass_reset_c@new_pass_save',"post");

Route::run('/abstract_index', 'abstracter@index');
Route::run('/abstract_save', 'abstracter@save',"post");

Route::run('/cikis', 'cikis@index');
////////   1. değer gidilecek dosya ve dizini, 2. değer controller , class ve  fonksiyon için./////////
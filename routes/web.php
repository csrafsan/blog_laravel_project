<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@HomeClass');
Route::get('/portfolio','HomeController@PortfolioClass');
Route::get('/service','HomeController@ServiceClass');
Route::get('/about','HomeController@AboutClass');

<?php

use Illuminate\Support\Facades\Route;


Route::get('/Name/{firstname}/{middlename}/{lastname}', 'DemoController@MyName');

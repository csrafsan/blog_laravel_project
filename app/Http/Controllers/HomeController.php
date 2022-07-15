<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

   
    function HomeClass(){

        $Data=array();

        return view('Home',['DataKey'=>$Data]);
    }
}

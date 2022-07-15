<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

   
    function HomeClass(){

        $Data=array("Bangladesh","India","Canada");

        return view('Home',['DataKey'=>$Data]);
    }
}

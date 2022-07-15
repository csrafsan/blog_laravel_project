<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

   
    function HomeClass(){

        $Data=array("Bangladesh","India","Canada");
        $LogInStatus =true;

        return view('Home',['DataKey'=>$Data,'LogInStatusKey'=>$LogInStatus]);
    }
}

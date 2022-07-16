<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

   
    function HomeClass(){

        $Data=array("Bangladesh","India","Canada");
        $LogInStatus =true;

        return view('home',['DataKey'=>$Data,'LogInStatusKey'=>$LogInStatus]);
    }

    function PortfolioClass(){

        return view('portfolio');
    }
    function ServiceClass(){

        return view('service');
    }
    function AboutClass(){

        return view('about');
    }
}

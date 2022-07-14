<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function ShowHome(){

            $NewHeadLine="<h1>Bangladesh won by 100 rune</h1>";
            return view('Home',['NewHeadLineKey'=>$NewHeadLine]);
    }
    function HomeClass(){

        return view('Home');
    }
}

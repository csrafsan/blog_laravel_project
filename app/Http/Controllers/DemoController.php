<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function ShowHome($firstname,$middlename,$lastname){
        return view('DemoView',['firstkey'=>$firstname, 'middlekey'=>$middlename,'lastkey'=>$lastname]);
    }
}
  
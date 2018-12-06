<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Main(){
        return view("main")->with(array("title" => "The"));
    }

    public function Callback(){
        return request()->code;
    }
}

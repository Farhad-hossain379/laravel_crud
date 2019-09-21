<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class Youtube extends Controller
{
    public function index(){
        if (view::exists('use')){
            return view('user',['name'=> "peter"]);
        }else{
            return view('error');
        }

        //echo "index of youtube controller";
    }
}

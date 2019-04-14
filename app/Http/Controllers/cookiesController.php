<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cookies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class cookiesController extends Controller
{
    public function displayRecord(){
        $cookies=cookies::first();
        return view('cookies.cookies',['cookies'=>$cookies]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\termsAndConditions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class termsAndConditionsController extends Controller
{
    public function displayRecord(){
        $terms_and_conditions=termsAndConditions::first();
        return view('terms.termsAndConditions',['terms_and_conditions'=>$terms_and_conditions]);
    }
}
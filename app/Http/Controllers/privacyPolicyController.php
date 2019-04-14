<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrivacyPolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class privacyPolicyController extends Controller
{
    public function displayRecord(){
        $privacy_policy=PrivacyPolicy::first();
        return view('privacy.privacyPolicy',['privacy_policy'=>$privacy_policy]);
    }
}
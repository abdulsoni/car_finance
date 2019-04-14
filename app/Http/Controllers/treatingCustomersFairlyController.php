<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\treatingCustomersFairly;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class treatingCustomersFairlyController extends Controller
{
    public function displayRecord(){
        $treating_customers_fairly=treatingCustomersFairly::first();
        return view('treatingCustomersFairly.treatingCustomersFairly',['treating_customers_fairly'=>$treating_customers_fairly]);
    }
}
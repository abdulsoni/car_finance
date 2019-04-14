<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
use App\Calculator;
use App\RepresentativeExample;
use App\Features;
use App\YourOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class yourOptionsController extends Controller
{
    public function displayRecord(){
        $home_page = HomePage::first();
        $calculator = Calculator::first();
        $representative_example = RepresentativeExample::first();
        $your_options = YourOptions::first();
        $features = Features::first();
        return view('yourOptions.yourOptions', ['home_page' =>$home_page, 'calculator'=>$calculator, 
        	'representative_example'=>$representative_example, 'features'=>$features, 'your_options'=>$your_options ]);
    }
}
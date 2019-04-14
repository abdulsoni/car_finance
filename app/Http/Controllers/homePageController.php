<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
use App\Calculator;
use App\RepresentativeExample;
use App\Features;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class homePageController extends Controller
{
    public function displayRecord(){
        $home_page = HomePage::first();
        $calculator = Calculator::first();
        $representative_example = RepresentativeExample::first();
        $features = Features::first();
        return view('index', ['home_page' =>$home_page, 'calculator'=>$calculator,
        	'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewBike(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('landingPages.landingBike', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewVan(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('landingPages.landingVan', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewCaravan(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('landingPages.landingCaravan', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewMotor(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('landingPages.landingMotor', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewPoorCredit(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('new-content-pages.poor-credit', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewNoDeposit(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('new-content-pages.no-deposit', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewBadCredit(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('new-content-pages.bad-credit', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function ViewCompareCarLoans(){
      $home_page = HomePage::first();
      $calculator = Calculator::first();
      $representative_example = RepresentativeExample::first();
      $features = Features::first();
      return view('new-content-pages.compare-finance', ['home_page' =>$home_page, 'calculator'=>$calculator,
        'representative_example'=>$representative_example, 'features'=>$features]);
    }
    public function testpage()
    {
       
        $home_page = HomePage::first();
        $calculator = Calculator::first();
        $representative_example = RepresentativeExample::first();
        $features = Features::first();
        return view('testing', ['home_page' =>$home_page, 'calculator'=>$calculator,
            'representative_example'=>$representative_example, 'features'=>$features]);
//        return view('test_new');
    }
}

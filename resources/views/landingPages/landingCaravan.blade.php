@extends('layouts.master')
@section('seo-content')
<title>Caravan Finance Loans UK | Caravan Bad Credit UK - Quick Car finance UK</title>
<meta name="description" content="Quickcarfinance.co.uk apply online to buy caravan finance loans calculator & caravan Loan  0% low interest rates bad credit deals in Dorset Bournemouth UK. New static/touring caravan poor/bad credit, no deposit."/>
<meta name="keywords" content="Caravan Loan uk, Caravan Loan calculator uk, Caravan Loan rates uk, Caravan Loan bad credit uk, Caravan Loan uk, Caravan Loan interest rates uk, 0% caravan finance, caravan loans deals uk."/>
 <link rel="canonical"href="https://www.quickcarfinance.co.uk/caravan-finance-calculator-loans-bad-credit-uk"/>
 <meta name="robots" content="Index, Follow"/>
 <meta name="author" content="Quickcarfinance"/>
 <meta name="copyright" content="Quick Car Finance"/>
 <meta name="publisher" content=" Quickcarfinance"/>
 <meta property="og:title" content="Caravan Finance Loans UK | Caravan Bad Credit UK - Quick Car finance UK"/>
 <meta property="og:description" content="Quickcarfinance.co.uk apply online to buy caravan finance loans calculator & caravan Loan  0% low interest rates bad credit deals in Dorset Bournemouth UK. New static/touring caravan poor/bad credit, no deposit."/>
 <meta property="og:type" content="website"/>
 <meta property="og:url" content="https://www.quickcarfinance.co.uk/caravan-finance-calculator-loans-bad-credit-uk"/>
 <meta property="og:site_name" content="Quickcarfinance.co.uk"/>
 <meta itemprop="url" content="https://www.quickcarfinance.co.uk/caravan-finance-calculator-loans-bad-credit-uk"/>
 <meta itemprop="name" content="Quickcarfinance"/>
 <meta itemprop="description" content="Quickcarfinance.co.uk apply online to buy caravan finance loans calculator & caravan Loan  0% low interest rates bad credit deals in Dorset Bournemouth UK. New static/touring caravan poor/bad credit, no deposit"/>
 <meta name="twitter:card" content="summary" />
 <meta name="twitter:url" content="https://www.quickcarfinance.co.uk/caravan-finance-calculator-loans-bad-credit-uk"/>
 <meta name="twitter:title" content="Caravan Finance Loans UK | Caravan Bad Credit UK - Quick Car finance UK"/>
 <meta name="twitter:description" content= "Quickcarfinance.co.uk apply online to buy caravan finance loans calculator & caravan Loan  0% low interest rates bad credit deals in Dorset Bournemouth UK. New static/touring caravan poor/bad credit, no deposit."/>
 <meta name="twitter:creator" content="@Quickcarfinance.co.uk"/>
 <meta name="channel" content="cars" />
 <meta property="og:locale" content="en_GB"/>
@endsection
@section('content')

<style>
    hr{
        border: 1px solid #efefef;
        height: 0px;
        margin: 0px;
    }
    .input-group-btn>.btn:active, .input-group-btn>.btn:focus, .input-group-btn>.btn:hover {
        outline:none;
    }
</style>
<section class="banner landing-caravan">
    <div class="container-fluid no-padding bannerDiv indexBanner">
        <!--<img src="{{asset('public/images/landing/banner.png')}}" alt="">-->
        <div class="col-sm-12 budgetCalDiv">
            <div class="col-sm-6 col-sm-offset-1 btnApplyDiv no-padding ">
                <h1>CARAVAN FINANCE</h1>
                <h2>BUY FROM ANY REPUTABLE DEALER.</h2>
                <div class="row check-slider">
                    <div class="col-sm-5 landing-checkbox check-left">
                        <img src="{{asset('public/images/landing/check-home-slider-green.png')}}" alt="">
                        <span>No deposit options</span>
                    </div>
                    <div class="col-sm-7 landing-checkbox">
                        <img src="{{asset('public/images/landing/check-home-slider-green.png')}}" alt="">
                        <span>No arrangement fees</span>
                    </div>
                    <div class="col-sm-5 landing-checkbox check-left">
                        <img src="{{asset('public/images/landing/check-home-slider-green.png')}}" alt="">
                        <span>No obligation quote</span>
                    </div>
                    <div class="col-sm-7 landing-checkbox">
                        <img src="{{asset('public/images/landing/check-home-slider-green.png')}}" alt="">
                        <span>All credit history’s welcome <!-- <span class="historyco">history</span> <span class="acceptedco">accepted.</span></span> -->
                    </div>
                </div>
                <div class="col-sm-12 no-padding">
                    <div class="col-sm-5 col-xs-12 col-sm-offset-0 no-padding">
                        <a href="{{url('apply-now')}}">
                            <button type="button" class="btn mobile-view btn-homepage-slider">APPLY NOW</button>
                        </a>
                    </div>

                </div>
            </div>
            <!--<div class="pull-right calc-banner" style="text-align: center">
                <div class="col-sm-12 no-padding desktopDiv notShrink iPadClass">
                    <form action="" class="tabDiv">
                        <img src="{{asset('public/images/landing/setBudget.png')}}" alt="logo">
                        <div class="calc-banner-inner">
                            <h3 style="text-align: left;">Amount to borrow</h3>
                            <div class="input-group form-group btnInInput">
                          <span class="input-group-btn">
                              <button type="button" onclick="decreaseAmount()" class="btn btn-primary btn-number btn-plus" data-type="minus" data-field="quant[2]" style="background: #db0a5b !important;">
                                  <span class="glyphicon glyphicon-minus"></span>

                              </button>

                          </span>
                                <div class="inputAmt">

                                    <input type="text" class="form-control input-number borrowText" value="£" disabled>

                                    <input type="text" max="75000" name="InputBorrow" onkeyup="changeValues(this.value)" class="form-control input-number borrowAmt hpnew" value="2,500" min="500" max="75000">

                                </div>

                          <span class="input-group-btn">

                             <button type="button" onclick="increaseAmount()" class="btn btn-primary btn-number btn-minus" data-type="plus" data-field="quant[2]" style="background: #db0a5b !important;">
                                 <span class="glyphicon glyphicon-plus"></span>
                             </button>
                          </span>
                            </div>
                            <div class="form-group rangeInput">
                                <input class="range-example-7"  id="borrowAmount" type="hidden" min="500" max="75000" value="2500" name="loanValue" step="250" />
                            </div>
                            <h3>To Pay Back Over</h3>
                            <div class="input-group form-group btnInInput">
                          <span class="input-group-btn">
                              <button onclick="decreaseYears()" type="button" class="btn btn-primary btn-number btn-plusYears" data-type="minus" data-field="quant[2]">

                                  <span class="glyphicon glyphicon-minus"></span>
                              </button>
                          </span>
                                <div class="inputYear">
                                    <input type="text" readonly name="borrowYears" id="borrowYears" class="borrowYear borrowYears form-control input-number" value="4" min="1" max="5">
                                    <input type="text" class="form-control input-number borrowYearText" value="Years" disabled>
                                </div>
                                <!-- <input type="text" readonly name="borrowYears" id="borrowYears" class="borrowYears form-control input-number" value="4" min="1" max="5">
                                <h3 class="yearsText">Years</h3> -->
            <!--<span class="input-group-btn">
               <button onclick="increaseYears()" type="button" class="btn btn-primary btn-number btn-minusYears" data-type="plus" data-field="quant[2]" >
                   <span class="glyphicon glyphicon-plus"></span>
               </button>
           </span>
             </div>
             <div class="btn-group">

                 <button onclick="gotoLoanCalci()" style="padding: 0px; background: #28cedc !important;" type="button" class="pageButtonCalc">Calculate your loan</button>
             </div>
         </div>
     </form>
 </div>
</div>-->
        </div>
    </div>
</section>
@include('calculatorArea.calculatorArea')

<div class="trusted-partner-section">
    <div class="row d-flex-center">
        <div class="col-xs-12">
            <p class="text-center partner-heading">
                We only work with trusted partners
            </p>
        </div>
        <div class="col-xs-12 text-center partner-icon-main" >
            <img src="public/images/landing/partner-1.png" class="partner-icon" alt=""/>
            <img src="public/images/landing/partner-2.png" class="partner-icon" alt=""/>
            <img src="public/images/landing/partner-3.png" class="partner-icon" alt=""/>
            <img src="public/images/landing/partner-4.png" class="partner-icon" alt=""/>
            <img src="public/images/landing/partner-5.png" class="partner-icon" alt=""/>
        </div>
    </div>
</div>


<div class="container-fluid no-padding features-area">
    <div class="container">
        <div class="col-sm-12 featuresDiv">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon1 !!}" alt="">
                    <h4>{!! $features->feature_title1 !!}</h4>
                    <p>{!! $features->feature_description1 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon2 !!}" alt="">
                    <h4>{!! $features->feature_title2 !!}</h4>
                    <p>{!! $features->feature_description2 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon3 !!}" alt="">
                    <h4>{!! $features->feature_title3 !!}</h4>
                    <p>{!! $features->feature_description3 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon4 !!}" alt="">
                    <h4>{!! $features->feature_title4 !!}</h4>
                    <p>{!! $features->feature_description4 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv" >
                <div class="col-sm-12">
                    <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon5 !!}" alt="">
                    <h4>{!! $features->feature_title5 !!}</h4>
                    <p>{!! $features->feature_description5 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon6 !!}" alt="">
                    <h4>{!! $features->feature_title6 !!}</h4>
                    <p>{!! $features->feature_description6 !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container customer-says" >
    <div class="row d-flex-center">
        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <center><h2 style="font-weight: 600;">{!! $home_page->customer_review_heading !!}</h2></center><br>
                <div class="col-sm-4 customer-homepage-box">
                    <div class="col-sm-12"><center><i class="fa fa-quote-left" style="font-size: 18px; color: white; border-radius: 50%; background: #db0a5b; padding: 8px;"></i></center></div>
                    <div class="">
                        <center>
                            <div class="review-stars text-center"><img src="{{asset('public/images/landing/review-stars.png')}}" class="img-responsive" alt=""/></div>
                            <p class="customer-review">{!! $home_page->customer_feedback1 !!}</p>
                            <p class="customer-name">{!! $home_page->customer_name1 !!}</p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4 customer-homepage-box">
                    <div class="col-sm-12"><center><i class="fa fa-quote-left" style="font-size: 18px; color: white; border-radius: 50%; background: #db0a5b; padding: 8px;"></i></center></div>
                    <div class="">
                        <center>
                            <div class="review-stars text-center"><img src="{{asset('public/images/landing/review-stars.png')}}" class="img-responsive" alt=""/></div>
                            <p class="customer-review">{!! $home_page->customer_feedback2 !!}</p>
                            <p class="customer-name">{!! $home_page->customer_name2 !!}</p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4 customer-homepage-box">

                    <div class="col-sm-12"><center><i class="fa fa-quote-left" style="font-size: 18px; color: white; border-radius: 50%; background: #db0a5b; padding: 8px;"></i></center></div>
                    <div class="">
                        <center>
                            <div class="review-stars text-center"><img src="{{asset('public/images/landing/review-stars.png')}}" class="img-responsive" alt=""/></div>
                            <p class="customer-review">{!! $home_page->customer_feedback3 !!}</p>
                            <p class="customer-name"> {!! $home_page->customer_name3 !!}</p>
                        </center>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
<script type="text/javascript" src="{{asset('public/js/custom-select.js')}}"></script>

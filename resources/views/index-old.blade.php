@extends('layouts.masterNew')
@section('seo-content')
<title>Car Finance UK | Car Loans | Car Finance Calculator - Quick Car finance UK</title>
<meta name="description" content="Quickcarfinance.co.uk best online buying No. #1 leading car finance near me car loans in Dorset Bournemouth UK. We deal bad credit cars finance calculator broker Poole Low Prices quick apply for car loans used 2019."/>
<meta name="keywords" content="car finance uk, car loan uk, car finance calculator, car finance calculator broker, car finance deals, car finance near me, buying, used cars on finance, car credit, bad car finance, car deals on finance, car finance dorset bournemouth, car loan, Dorset Bournemouth"/>
    <link rel="canonical" href="https://quickcarfinance.co.uk/"/>
    <meta name="robots" content="Index, Follow"/>
    <meta name="googlebots" content="noodp"/>
    <meta name="author" content="Quickcarfinance"/>
    <meta name="copyright" content="Quick Car Finance"/>
    <meta name="publisher" content="Quickcarfinance"/>
    <meta property="og:title" content="Car Finance UK | Car Loans | Car Finance Calculator - Quick Car finance UK"/>
    <meta property="og:description" content="Quickcarfinance.co.uk best online buying No. #1 leading car finance near me car loans in Dorset Bournemouth UK. We deals bad credit cars finance calculator broker Poole Low Prices quick apply for car loans used 2019."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://Quickcarfinance.co.uk"/>
    <meta property="og:site_name" content="Quickcarfinance.co.uk"/>
    <meta itemprop="url" content="https://Quickcarfinance.co.uk"/>
    <meta itemprop="name" content="Quickcarfinance"/>
    <meta itemprop="description" content="Quickcarfinance.co.uk best online buying No. #1 leading car finance near me car loans in Dorset Bournemouth UK. We deals bad credit cars finance calculator broker Poole Low Prices quick apply for car loans used 2019."/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="https://Quickcarfinance.co.uk"/>
    <meta name="twitter:title" content="Car Finance UK | Car Loans | Car Finance Calculator - Quick Car finance UK"/>
    <meta name="twitter:description" content= "Quickcarfinance.co.uk best online buying No. #1 leading car finance   near me car loans in Dorset Bournemouth UK. We deals bad credit cars finance calculator broker Poole Low Prices quick apply for car loans used 2019."/>
    <meta name="twitter:creator" content="@Quickcarfinance.co.uk"/>
    <meta name="rating" content="general"/>
    <meta name="channel" content="cars" />
    <meta property="og:locale" content="en_GB"/>
    <!-- TrustBox script --> <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->
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
<section class="banner">
        <br/>
        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="5c61ab488fdd0a0001f69c1c" data-style-height="24px" data-style-width="100%" data-theme="light">
            <a href="https://uk.trustpilot.com/review/quickcarfinance.co.uk" target="_blank">Trustpilot</a>
        </div>
        <br/>
    <div class="container-fluid no-padding bannerDiv indexBanner">

        {{--<img src="{{ asset('public/images/landing/banner.png')}}" alt="">--}}
        <div class="col-sm-12 budgetCalDiv">
            <div class="col-sm-6 col-sm-offset-1 btnApplyDiv no-padding homepage-main-heading ">
                <h1>{!! $home_page->banner_heading1 !!}</h1>
                <h2>{!! $home_page->banner_heading2 !!}</h2>
                <!--h2 class="headLineTop">Buy from any reputable dealer. No deposit</h2>
                <h2>options and all credit history's welcome.</h2-->
                <div class="row check-slider">
                    <div class="col-sm-5 landing-checkbox check-left">
                        <img src="{{ asset('public/images/landing/check-home-slider.png')}}" alt="">
                        <span>{!! $home_page->check1 !!}</span>
                    </div>
                    <div class="col-sm-7 landing-checkbox">
                        <img src="{{ asset('public/images/landing/check-home-slider.png')}}" alt="">
                        <span>{!! $home_page->check2 !!}</span>
                    </div>
                    <div class="col-sm-5 landing-checkbox check-left">
                        <img src="{{ asset('public/images/landing/check-home-slider.png')}}" alt="">
                        <span>{!! $home_page->check3 !!}</span>
                    </div>
                    <div class="col-sm-7 landing-checkbox">
                        <img src="{{asset('public/images/landing/check-home-slider.png')}}" alt="">
                        <span>{!! $home_page->check4 !!} <!-- <span class="historyco">history</span> <span class="acceptedco">accepted.</span></span> -->
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
            <div class="pull-right calc-banner" style="text-align: center">

                <div class="col-sm-12 no-padding desktopDiv notShrink iPadClass">
                    <form action="" class="tabDiv">
                        <img src="{{asset('public/images/landing/setBudget.svg')}}" alt="logo">
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

                                    <input type="text" max="75000" name="InputBorrow" onkeyup="changeValues(this.value)" class="form-control input-number borrowAmt hpnew" value="{!! $calculator->default_amount !!}" min="{!! $calculator->min_amount !!}" max="{!! $calculator->max_amount !!}">

                                </div>

                          <span class="input-group-btn">

                             <button type="button" onclick="increaseAmount()" class="btn btn-primary btn-number btn-minus" data-type="plus" data-field="quant[2]" style="background: #db0a5b !important;">
                                 <span class="glyphicon glyphicon-plus"></span>
                             </button>
                          </span>
                            </div>
                            <div class="form-group rangeInput">
                                <input class="range-example-7"  id="borrowAmount" type="hidden" min="500" max="75000" min="{{ $calculator->min_amount }}" max="{{ $calculator->max_amount }}" value="{{ $calculator->default_amount }}" step="250" />
                            </div>
                            <h3>To Pay Back Over</h3>
                            <div class="input-group form-group btnInInput">
                          <span class="input-group-btn">
                              <button onclick="decreaseYears()" type="button" class="btn btn-primary btn-number btn-plusYears" data-type="minus" data-field="quant[2]">

                                  <span class="glyphicon glyphicon-minus"></span>
                              </button>
                          </span>
                                <div class="inputYear">
                                    <input type="text" readonly name="borrowYears" id="borrowYears" class="borrowYear borrowYears form-control input-number" value="{{ $calculator->default_year }}" max="{{ $calculator->max_years }}" min="{{ $calculator->min_years }}">
                                    <input type="text" class="form-control input-number borrowYearText" value="Years" disabled>
                                </div>
                                <!-- <input type="text" readonly name="borrowYears" id="borrowYears" class="borrowYears form-control input-number" value="4" min="1" max="5">
                                <h3 class="yearsText">Years</h3> -->
                           <span class="input-group-btn">
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
            </div>
        </div>
    </div>
</section>

@include('calculatorArea.calculatorArea')

<!-- <div class="trusted-partner-section">
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
</div> -->


<div class="container-fluid no-padding features-area">
    <div class="container">
        <div class="col-sm-12 featuresDiv">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    {{-- <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon1 !!}" alt=""> --}}
                     <img class="lazy" data-src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon1 !!}" alt="" />
                    <h4>{!! $features->feature_title1 !!}</h4>
                    <p>{!! $features->feature_description1 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    {{-- <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon2 !!}" alt=""> --}}
                     <img class="lazy" data-src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon2 !!}" alt="" />
                    <h4>{!! $features->feature_title2 !!}</h4>
                    <p>{!! $features->feature_description2 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    {{-- <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon3 !!}" alt=""> --}}
                     <img class="lazy" data-src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon3 !!}" alt="" />
                    <h4>{!! $features->feature_title3 !!}</h4>
                    <p>{!! $features->feature_description3 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    {{-- <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon4 !!}" alt=""> --}}
                     <img class="lazy" data-src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon4 !!}" alt="" />
                    <h4>{!! $features->feature_title4 !!}</h4>
                    <p>{!! $features->feature_description4 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv" >
                <div class="col-sm-12">
                    {{-- <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon5 !!}" alt=""> --}}
                     <img class="lazy" data-src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon5 !!}" alt="" />
                    <h4>{!! $features->feature_title5 !!}</h4>
                    <p>{!! $features->feature_description5 !!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 hv">
                <div class="col-sm-12">
                    {{-- <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon6 !!}" alt=""> --}}
                     <img class="lazy" data-src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $features->feature_icon6 !!}" alt="" />
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
                            <div class="review-stars text-center">
                                {{-- <img src="{{asset('public/images/landing/review-stars.png')}}" class="img-responsive" alt=""/> --}}
                                 <img class="lazy img-responsive" data-src="{{asset('public/images/landing/review-stars.png')}}" alt=""  />
                            </div>
                            <p class="customer-review">{!! $home_page->customer_feedback1 !!}</p>
                            <p class="customer-name">{!! $home_page->customer_name1 !!}</p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4 customer-homepage-box">
                    <div class="col-sm-12"><center><i class="fa fa-quote-left" style="font-size: 18px; color: white; border-radius: 50%; background: #db0a5b; padding: 8px;"></i></center></div>
                    <div class="">
                        <center>
                            <div class="review-stars text-center">
                                {{-- <img src="{{asset('public/images/landing/review-stars.png')}}" class="img-responsive" alt=""/> --}}
                             <img class="lazy img-responsive" data-src="{{asset('public/images/landing/review-stars.png')}}" alt="" />
                         </div>
                            <p class="customer-review">{!! $home_page->customer_feedback2 !!}</p>
                            <p class="customer-name">{!! $home_page->customer_name2 !!}</p>
                        </center>
                    </div>
                </div>
                <div class="col-sm-4 customer-homepage-box">

                    <div class="col-sm-12"><center><i class="fa fa-quote-left" style="font-size: 18px; color: white; border-radius: 50%; background: #db0a5b; padding: 8px;"></i></center></div>
                    <div class="">
                        <center>
                            <div class="review-stars text-center">
                                {{-- <img src="{{asset('public/images/landing/review-stars.png')}}" class="img-responsive" alt=""/> --}}
                                 <img class="lazy img-responsive" data-src="{{asset('public/images/landing/review-stars.png')}}" alt="" />
                            </div>
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

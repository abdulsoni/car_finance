@extends('layouts.master')
@section('title')
{!! $home_page->page_title !!}
@endsection
@section('meta-description')
{!! $home_page->page_meta_description !!}
@stop
@section('meta-keywords')
{!! $home_page->page_meta_keywords !!}
@stop
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





<section class="banner bad-credit-banner no-deposit-banner">
    <div class="container-fluid no-padding bannerDiv indexBanner">
        <!--<img src="{{asset('public/images/landing/banner.png')}}" alt="">-->
        <div class="col-sm-12 budgetCalDiv">
            <div class="col-sm-6 col-sm-offset-1 btnApplyDiv no-padding ">
                <h2 class="new-content-banner">No Deposit<br>
                    <span>Car Finance.</span></h2>
                <div class="row check-slider">
                    <div class="col-sm-5 landing-checkbox check-left">
                        <img src="{{asset('public/images/landing/check-home-slider-white.png')}}" alt="">
                        <span>No deposit options</span>
                    </div>
                    <div class="col-sm-7 landing-checkbox">
                        <img src="{{asset('public/images/landing/check-home-slider-white.png')}}" alt="">
                        <span>No arrangement fees</span>
                    </div>
                    <div class="col-sm-5 landing-checkbox check-left">
                        <img src="{{asset('public/images/landing/check-home-slider-white.png')}}" alt="">
                        <span>No obligation quote</span>
                    </div>
                    <div class="col-sm-7 landing-checkbox">
                        <img src="{{asset('public/images/landing/check-home-slider-white.png')}}" alt="">
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
        </div>
    </div>
</section>




@include('calculatorArea.calculatorArea')



<!--Bad Credit Content Section Starts-->
<div class="bad-credit-content-section">
    <div class="container">
        <div class="row d-flex-center">

            <div class="col-sm-12 col-xs-11 no-padding">

                <div class="row d-flex-center">

                    <div class="col-lg-8 col-md-8 col-sm-11 col-xs-11">
                        <div class="bad-credit-left-section no-deposit-left-section">
                            <h2>No deposit car finance</h2>
                            <p>If you’re looking for great deals on no deposit car finance for your next car then you’ve come to the right place. At Stoneacre, we recognise that it’s not always possible to get a deposit together for your new car. That’s why we work with a number of specialist lenders who can offer 0 deposit car finance across our whole range of cars.</p>
                            <p>
                                This means you no longer need to save up a hefty lump sum to buy your new wheels! Instead, with our no deposit car deals you can simply spread the entire cost of the vehicle into affordable monthly payments.
                            </p>

                            <h2>Applying for car finance with <br>no deposit</h2>

                            <p>Applying for no deposit car finance at Quick Car Finance is quick and easy!</p>

                            <div class="no-deposit-box-outer">
                                <div class="no-deposit-box no-deposit-box-1">
                                    <p><a href="#">Submit</a> your online application</p>
                                </div>
                                <div class="no-deposit-box no-deposit-box-2">
                                    <p>We will <a href="#">credit check</a> to see eligibility</p>
                                </div>
                                <div class="no-deposit-box no-deposit-box-3">
                                    <p>We ensure that your car finance is <a href="#">affordable</a></p>
                                </div>
                                <div class="no-deposit-box no-deposit-box-4">
                                    <p>We search <a href="#">No deposit car finance</a> for you</p>
                                </div>
                            </div>

                            <ul>
                                <li>Applying for no deposit car finance at Stoneacre is quick and easy. Simply fill out our
                                    <a href="#">online application form</a> with a few basic details and our dedicated in-house finance team will process your application.</li>
                                <li>We will then carry out a <a href="#">‘soft search’</a> credit check to see if you’re
                                    <a href="#">eligible</a>. This ‘soft search’ stage will not negatively affect your credit score as it is only a first stage check.
                                    <br/>
                                    <br/>
                                    <span class="disable">Don’t worry if you have a less than perfect credit score. At Stoneacre, we pride ourselves on working with our customers to find a solution that suits your individual circumstances.</span>
                                </li>
                                <li>Even if you have bad credit, have no credit history or if you’ve had CCJs in the past, we can accommodate you. Our specialist lenders focus more on ensuring that your car finance is
                                    <a href="#">affordable</a> and you can meet the monthly payments. This means we are able to offer 0 deposit car finance to a much wider-range of people.</li>
                                <li>What’s more, we have an experienced and friendly team who will always put you first. They work tirelessly to find the
                                    <a href="#">best no deposit car finance deals</a> to suit your requirements and budget.</li>
                            </ul>

                            <div class="btn-eligibility-outer">
                                <a href="#">Check Eligibility</a>
                            </div>



                            <h2>No deposit car deals</h2>
                            <p>Our no deposit car finance deals are available through a variety of different
                                options including <a href="#">Hire Purchase</a> and <a href="#">Personal Contract Hire</a>. Both packages make getting a new car more affordable and mean that the car you’ve always dreamed of owning, may be in reach.</p>

                            <p>If you feel you need a no deposit deal because you have no cash to put towards a new car, don't forget that your current car can be used as a deposit.</p>

                            <p>Also, to make things easier, we offer a free, no-obligation <a href="#">valuation tool</a>, helping you to get an idea of what deposit you might actually be able to put down.</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-11">
                        <div class="bad-credit-right-section">
                            <div class="get-car-finance-box">
                                <div class="get-car-finance-title"><p>Get your car finance</p></div>
                                <div class="get-car-finance-desc">
                                    <p>Apply to compare 100+ car loan offers from UK’s top lenders and we will find the best car finance deal to suit your budget.</p>
                                </div>
                                <div class="btn-bad-credit-outer">
                                    <a href="#" class="btn-bad-apply">Apply Now</a>
                                </div>
                            </div>


                            <ul class="right-side-list">
                                <li><a href="#">How it works</a></li>
                                <li><a href="#">Eligibility</a></li>
                            </ul>

                            <ul class="right-side-list">
                                <li><a href="#">Bad credit car finance</a></li>
                                <li><a href="#">No credit car finance</a></li>
                                <li class="active"><a href="#">No deposit ca finance</a></li>
                                <li><a href="#">Refused car finance</a></li>
                                <li><a href="#">Self-employed car finance</a></li>
                                <li><a href="#">Gurantor car finance</a></li>
                            </ul>

                            <ul class="right-side-list">
                                <li><a href="#">Personal loan for bad credit</a></li>
                                <li><a href="#">Hire purchase agreement</a></li>
                                <li><a href="#">Personal contract purchase</a></li>
                                <li><a href="#">Van finance</a></li>
                                <li><a href="#">CCj car finance</a></li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<!--Bad Credit Content Section Ends-->




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

<script type="text/javascript" src="{{asset('public/js/custom-select.js')}}"></script>

@endsection

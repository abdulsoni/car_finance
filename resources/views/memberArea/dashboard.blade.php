@extends('layouts.master')
@section('seo-content')
<title>Dashboard for Car Finance UK | Dashboard - Quickcarfinance.co.uk</title>
@endsection
@section('content')
<!--member-area-updated-->

<!--Dashboard Page Starts-->
<div class="dashboard-page">

<!--Dashboard Top Starts-->
<div class="dashboard-top">
    <div class="container">
        <div class="row no-margin d-flex-center">
            <div class="col-sm-12 col-xs-12 no-padding">
                <div class="dashboard-inner">
                    <ul class="d-flex-center">
                        <li class="li-excellent">Excellent <img src="{{asset('public/images/icon-stars-green-big-top.png')}}" alt=""/></li>
                        <li class="li-trustpilot"><img src="{{asset('public/images/icon-star-green-single.png')}}" alt=""/> Trustpilot</li>
                        <div class="float"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard Top Ends-->

<!--Dashboard Safe Starts-->
<div class="dashboard-safe">
    <div class="container">
        <div class="row no-margin d-flex-center">
            <div class="col-sm-12 col-xs-11 no-padding">

                <div class="dashboard-safe-title">
                    <p>You’re in Safe Hands with Quick Car Finance</p>
                </div>

                <div class="dashboard-safe-desc">
                    <p>Don’t just take our word for it!</p>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Dashboard Safe Ends-->

<!--Dashboard Find Car Starts-->
<div class="dashboard-findcar">
    <div class="container">
        <div class="row no-margin d-flex-center">
            <div class="col-sm-12 col-xs-11 no-padding text-center">

                <div class="dashboard-findcar-inner">
                    <div class="dashboard-findcar-title">
                        <p>Now it’s time to find a car...</p>
                    </div>
                    <div class="dashboard-findcar-img">
                        <img src="{{asset('public/images/dashboard-find-car.png')}}" class="img-responsive dashboard-find-car-desktop" alt=""/>
                        <img src="{{asset('public/images/dashboard-find-car-mobile.png')}}" class="img-responsive dashboard-find-car-mobile" alt=""/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Dashboard Find Car Ends-->

<!--Dashboard Happy Quote Starts-->
<div class="dashboard-happy-quote">
    <div class="container">
        <div class="row no-margin d-flex-center">
            <div class="col-sm-12 col-xs-11 no-padding text-center">
                <div class="dashboard-happy-quote-inner d-flex-center">
                    <img src="{{asset('public/images/icon-tick-cloud.png')}}" class="img-responsive" alt=""/>
                    <p>
                        We can schedule a test drive for you and get you into your new vehicle in as little as 24 hours, subject to approval.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Dashboard Happy Quote Ends-->

<!--Dashboard Questions Starts-->
<div class="dashboard-questions">
    <div class="container">
        <div class="row no-margin d-flex-center">
            <div class="col-sm-12 col-xs-11 no-padding text-center">
                <div class="dashboard-question-title">
                    <p>Questions?</p>
                </div>
                <div class="dashboard-question-desc-top">
                    <p><span>Call us 01202 286 500</span> or text us on the same number.</p>
                </div>
                <div class="dashboard-question-desc-bottom">
                    <p>Pro Tip: Cars should have under 120,000 miles on the clock at the start of the agreement and be less than 12 years old at the end of the agreement.</p>
                </div>
                <!-- <div class="dashboard-question-desc-link">
                    <a href="#">Note: Review #1 at bottom of page, correct “pleasent” to “pleasant”</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!--Dashboard Questions Ends-->

<!--Dashboard Review Starts-->
<div class="dashboard-review">
    <div class="container">
        <div class="row no-margin d-flex-center">
            <div class="col-sm-12 col-xs-11 no-padding text-center">

                <div class="dashboard-review-title">
                    <p>Reviews from people just like you:</p>
                </div>

                <div class="dashboard-review-box-main">
                    <div class="row no-margin d-flex-center">
                        <div class="col-sm-12 col-xs-11 no-padding">

                            <div class="dashboard-review-box-inner">
                                <div class="row no-margin d-flex-center">

                                    <div class="col-md-3 col-sm-6 col-xs-12 no-padding">
                                        <div class="dashboard-review-box-outer dashboard-review-box-outer-1">
                                            <div class="dashboard-review-box dashboard-review-box-1 d-flex-center">
                                                <div class="review-box-excellent">
                                                    <p>Excellent</p>
                                                </div>
                                                <div class="icon-stars-green-big">
                                                    <img src="{{asset('public/images/icon-stars-green-big.png')}}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="icon-trustpilot">
                                                    <img src="{{asset('public/images/icon-trustpilot.png')}}" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="float"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-12 no-padding">
                                        <div class="dashboard-review-box-outer">
                                            <div class="dashboard-review-box dashboard-review-box-2">
                                                <img src="{{asset('public/images/icon-stars-green-small.png')}}" class="img-responsive review-box-star-desktop" alt=""/>
                                                <div class="dashboard-review-box-title">
                                                    <p>A* service!!</p>
                                                </div>
                                                <div class="dashboard-review-box-desc">
                                                    <p>Using quick car finance has been so easy and straight forward, Ian has been so...</p>
                                                </div>
                                                <img src="{{asset('public/images/icon-stars-green-small.png')}}" class="img-responsive review-box-star-mobile" alt=""/>
                                                <div class="dashboard-review-box-name">
                                                    <p>Kleran Harrison</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-12 no-padding">
                                        <div class="dashboard-review-box-outer">
                                            <div class="dashboard-review-box dashboard-review-box-3">
                                                <img src="{{asset('public/images/icon-stars-green-small.png')}}" class="img-responsive review-box-star-desktop" alt=""/>
                                                <div class="dashboard-review-box-title">
                                                    <p>85% was through SMS...</p>
                                                </div>
                                                <div class="dashboard-review-box-desc">
                                                    <p>85% was through SMS! Such an easy process Thanks so much for your help...</p>
                                                </div>
                                                <img src="{{asset('public/images/icon-stars-green-small.png')}}" class="img-responsive review-box-star-mobile" alt=""/>
                                                <div class="dashboard-review-box-name">
                                                    <p>Steven White</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-12 no-padding">
                                        <div class="dashboard-review-box-outer">
                                            <div class="dashboard-review-box dashboard-review-box-4">
                                                <img src="{{asset('public/images/icon-stars-green-small.png')}}" class="img-responsive review-box-star-desktop" alt=""/>
                                                <div class="dashboard-review-box-title">
                                                    <p>I didn't think I would be...</p>
                                                </div>
                                                <div class="dashboard-review-box-desc">
                                                    <p>I didn't think I would be accepted for finance given my credit past but they...</p>
                                                </div>
                                                <img src="{{asset('public/images/icon-stars-green-small.png')}}" class="img-responsive review-box-star-mobile" alt=""/>
                                                <div class="dashboard-review-box-name">
                                                    <p>Paul Williams</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Dashboard Review Ends-->
</div>
<!--Dashboard Page Ends-->

@if(Request::query('r_url'))
    <script> window.location.href = "{{ Request::query('r_url') }}" </script>
@endif
@endsection

@extends('layouts.applyNow')
@section('seo-content')
     <title>Thank You | Quickcarfinance</title>
@endsection
@section('content')
<!--Thankyou Page Starts-->
<div class="thankyou-page">
    <div class="container">
        <div class="row d-flex-center">
            <div class="col-md-11 col-xs-12 no-padding">

                <div class="thankyou-inner">
                    <div class="row d-flex-center">
                        <div class="col-md-12 no-padding">
                            <div class="thankyou-top">
                                <div class="thank-success">
                                    <p>Success! Your application update below...</p>
                                </div>

                                <div class="thank-name">
                                    <p class="text-center">
                                      <?php
                                      if(Session::get('UserName')!=''){
                                        echo ucwords(Session::get('UserName'));
                                      }else{
                                        // echo "Iain Williamsss";
                                      }
                                      ?>
                                      <br>
                                        <span>{{$Source->contentText}}</span></p>
                                </div>
                                <div class="row">
                                <div class="col-xs-12">
                                <div class="what-credit-logo text-center">
                                    <img src="{{$Source->logo}}" class="img-fluid img-responsive" alt="Source"/>
                                </div>
                              </div>
                              </div>
                                <div class="thank-what-happen">
                                    <p class="text-center">What happens now?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-11 no-padding">
                            <div class="thankyou-bottom">
                                <div class="row d-flex-center">

                                    <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <div class="thankyou-box-outer">
                                            <div class="thankyou-box thankyou-box-1">
                                                <div class="thankyou-box-icon text-center">
                                                    <img src="{{asset('public/images/membersarea/icon-thankyou-1.png')}}" class="img-fluid" alt="Source-Logo"/>
                                                </div>
                                                <div class="thankyou-box-title">
                                                    <p class="text-center">Step one</p>
                                                </div>
                                                <div class="thankyou-box-desc">
                                                    <p class="text-center">{{ucwords($Source->source)}} will be sending you an email regarding your application. Please check your emails for updates. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <div class="thankyou-box-outer">
                                            <div class="thankyou-box thankyou-box-2">
                                                <div class="thankyou-box-icon text-center">
                                                    <img src="{{asset('public/images/membersarea/icon-thankyou-2.png')}}" class="img-fluid" alt="Source-logo1"/>
                                                </div>
                                                <div class="thankyou-box-title">
                                                    <p class="text-center">Step two</p>
                                                </div>
                                                <div class="thankyou-box-desc">
                                                    <p class="text-center">If you're happy with your quote then it's time to start the car hunting!  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                                        <div class="thankyou-box-outer">
                                            <div class="thankyou-box thankyou-box-3">
                                                <div class="thankyou-box-icon text-center">
                                                    <img src="{{asset('public/images/membersarea/icon-thankyou-3.png')}}" class="img-fluid" alt="Source-logo2"/>
                                                </div>
                                                <div class="thankyou-box-title">
                                                    <p class="text-center">Step three</p>
                                                </div>
                                                <div class="thankyou-box-desc">
                                                    <p class="text-center">Once your quote and car have been agreed {{ucwords($Source->source)}} will arrange for your car to be paid for and you are free to get on the open road in your new motor.  </p>
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
<!--Thankyou Page Ends-->


@endsection

@extends('layouts.master')
@section('seo-content')
<title>Car Finance Calculator UK | Car Loan Calculator UK - Quick Car finance UK</title>
    <meta name="description" content="Quickcarfinance.co.uk best free buy car finance calculator & car loans in Dorset Bournemouth UK. We deals car loan calculator broker with bad credit deposit apply online payment eligibility same day 2019."/>
    <meta name="keywords" content="car finance calculator uk, car finance calculator uk bad credit, car finance calculator uk with deposit, car loan calculator uk, uk car finance, car finance eligibility calculator, car finance calculator online, buying a car in uk, free loan calculator, car loan payment calculator."/>
    <link rel="canonical"href="https://www.quickcarfinance.co.uk/car-finance-calculator-car-loan-uk"/>
    <meta name="robots" content="Index, Follow"/>
    <meta name="author" content="Quickcarfinance"/>
    <meta name="copyright" content="Quick Car Finance"/>
    <meta name="publisher" content=" Quickcarfinance"/>
    <meta property="og:title" content="Car Finance Calculator UK | Car Loan Calculator UK - Quick Car finance UK"/>
    <meta property="og:description" content="Quickcarfinance.co.uk best free buy car finance calculator & car loans in Dorset Bournemouth UK. We deals car loan calculator broker with bad credit deposit apply online payment eligibility same day 2019."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.quickcarfinance.co.uk/car-finance-calculator-car-loan-uk"/>
    <meta property="og:site_name" content="Quickcarfinance.co.uk"/>
    <meta itemprop="url" content="https://www.quickcarfinance.co.uk/car-finance-calculator-car-loan-uk"/>
    <meta itemprop="name" content="Quickcarfinance"/>
    <meta itemprop="description" content="Quickcarfinance.co.uk best free buy car finance calculator & car loans in Dorset Bournemouth UK. We deals car loan calculator broker with bad credit deposit apply online payment eligibility same day 2019."/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="https://www.quickcarfinance.co.uk/car-finance-calculator-car-loan-uk"/>
    <meta name="twitter:title" content="Car Finance Calculator UK | Car Loan Calculator UK - Quick Car finance UK"/>
    <meta name="twitter:description" content= "Quickcarfinance.co.uk best free buy car finance calculator & car loans in Dorset Bournemouth UK. We deals car loan calculator broker with bad credit deposit apply online payment eligibility same day 2019."/>
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
@include('calculatorArea.calculatorArea')
<div class="container-fluid no-padding features-area">
    <div class="container">
    <div class="col-sm-12 featuresDiv">
        <div class="col-sm-4 hv">
            <div class="col-sm-12" style="color: #29cedd">
                <img src="{{asset('public/images/vehicle/badCredit.png')}}" alt="">
                <h4>{!! $features->feature_title1 !!}</h4>
                <p>{!! $features->feature_description1 !!}</p>
            </div>
        </div>
        <div class="col-sm-4 hv">
            <div class="col-sm-12">
                <img src="{{asset('public/images/vehicle/secureLock.png')}}" alt="">
                <h4>{!! $features->feature_title2 !!}</h4>
                <p>{!! $features->feature_description2 !!}</p>
           </div>
        </div>
        <div class="col-sm-4 hv">
            <div class="col-sm-12">
                <img src="{{asset('public/images/vehicle/creditScore.png')}}" alt="">
                <h4>{!! $features->feature_title3 !!}</h4>
                <p>{!! $features->feature_description3 !!}</p>
            </div>
        </div>
        <div class="col-sm-4 hv">
            <div class="col-sm-12">
                <img src="{{asset('public/images/vehicle/fees.png')}}" alt="">
                <h4>{!! $features->feature_title4 !!}</h4>
                <p>{!! $features->feature_description4 !!}</p>
            </div>
        </div>
        <div class="col-sm-4 hv" >
            <div class="col-sm-12">
                <img src="{{asset('public/images/vehicle/fastDecisions.png')}}" alt="">
                <h4>{!! $features->feature_title5 !!}</h4>
                <p>{!! $features->feature_description5 !!}</p>
            </div>
        </div>
        <div class="col-sm-4 hv">
            <div class="col-sm-12">
                <img src="{{asset('public/images/vehicle/dataSales.png')}}" alt="">
                <h4>{!! $features->feature_title5 !!}</h4>
                <p>{!! $features->feature_description5 !!}</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@extends('layouts.master')
@section('seo-content')
<title>Privacy Policy | Car Finance Calculator UK | Car Loan - Quick Car finance UK</title>
  <meta name="description" content="Quickcarfinance.co.uk privacy policy process to protect your personal information only for the following car finance & car loan, Bad Credit Car loan, Van bike finance, bike Finance, caravan loan finance, motorhome finance, Motorhome Loan UK."/>
  <link rel="canonical" href="https://quickcarfinance.co.uk/privacy-policy"/>
  <meta name="robots" content="Index, Follow"/>
  <meta name="robots" content="noodp"/>
  <meta name="googlebots" content="noodp"/>
  <meta name="author" content="Quickcarfinance"/>
  <meta name="copyright" content="Quick Car Finance"/>
  <meta name="publisher" content=" Quickcarfinance"/>
  <meta property="og:title" content="Privacy Policy | Car Finance Calculator UK | Car Loan - Quick Car finance UK"/>
  <meta property="og:description" content="Quickcarfinance.co.uk privacy policy process to protect your personal information only for the following car finance & car loan, Bad Credit Car loan, Van bike finance, bike Finance, caravan loan finance, motorhome finance, Motorhome Loan UK."/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://quickcarfinance.co.uk/privacy-policy"/>
  <meta property="og:site_name" content="Quickcarfinance.co.uk"/>
  <meta itemprop="url" content="https://quickcarfinance.co.uk/privacy-policy"/>
  <meta itemprop="name" content="Quickcarfinance"/>
  <meta itemprop="description" content="Quickcarfinance.co.uk privacy policy process to protect your personal information only for the following car finance & car loan, Bad Credit Car loan, Van bike finance, bike Finance, caravan loan finance, motorhome finance, Motorhome Loan UK."/>
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:url" content="https://quickcarfinance.co.uk/privacy-policy"/>
  <meta name="twitter:title" content="Privacy Policy | Car Finance Calculator UK | Car Loan - Quick Car finance UK"/>
  <meta name="twitter:description" content= "Quickcarfinance.co.uk privacy policy process to protect your personal information only for the following car finance & car loan, Bad Credit Car loan, Van bike finance, bike Finance, caravan loan finance, motorhome finance, Motorhome Loan UK"/>
  <meta name="twitter:creator" content="@Quickcarfinance.co.uk"/>
  <meta name="rating" content="general"/>
  <meta name="channel" content="cars" />
  <meta property="og:locale" content="en_GB"/>
@endsection
@section('content')
<style type="text/css">
  .privacyDiv ul>li {
    font-size: 16px;
    color: #5d5d5d;
    margin: 26px 0px;
    font-family: 'Roboto Regular', sans-serif;
}
</style>
<section class="banner">
    <div class="container-fluid no-padding bannerDiv">
        <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $privacy_policy->featured_image !!}" alt="">
    </div>
</section>
<div class="container privacyDiv">
    {!! $privacy_policy->page_content !!}
</div>
@endsection

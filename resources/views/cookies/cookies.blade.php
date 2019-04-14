@extends('layouts.master')
@section('seo-content')
<title>Cookies - Online Car Finance Calculator UK - Car Loan - Quick Car finance UK</title>
  <meta name="description" content="We accept cookies at Quickcarfinance.co.uk of online car finance car loan calculator UK to store info in our server but we promise your information will not be shared with any third party car finance providers."/>
  <link rel="canonical" href="https://quickcarfinance.co.uk/cookie-policy"/>
  <meta name="robots" content="Index, Follow"/>
  <meta name="googlebots" content="noodp"/>
  <meta name="author" content="Quickcarfinance"/>
  <meta name="copyright" content="Quick Car Finance"/>
  <meta name="publisher" content=" Quickcarfinance"/>
  <meta property="og:title" content="Cookies - Online Car Finance Calculator UK - Car Loan - Quick Car finance UK"/>
  <meta property="og:description" content="We accept cookies at Quickcarfinance.co.uk of online car finance car loan calculator UK to store info in our server but we promise your information will not be shared with any third party car finance providers."/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://quickcarfinance.co.uk/cookie-policy"/>
  <meta property="og:site_name" content="Quickcarfinance.co.uk"/>
  <meta itemprop="url" content="https://quickcarfinance.co.uk/cookie-policy"/>
  <meta itemprop="name" content="Quickcarfinance"/>
  <meta itemprop="description" content="We accept cookies at Quickcarfinance.co.uk of online car finance car loan calculator UK to store info in our server but we promise your information will not be shared with any third party car finance providers."/>
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:url" content="https://quickcarfinance.co.uk/cookie-policy"/>
  <meta name="twitter:title" content="Cookies - Online Car Finance Calculator UK - Car Loan - Quick Car finance UK"/>
  <meta name="twitter:description" content= "We accept cookies at Quickcarfinance.co.uk of online car finance car loan calculator UK to store info in our server but we promise your information will not be shared with any third party car finance providers."/>
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
            <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $cookies->featured_image !!}" alt="">
        </div>
    </section>
    <div class="container privacyDiv">
        {!! $cookies->page_content !!}
    </div>
@endsection

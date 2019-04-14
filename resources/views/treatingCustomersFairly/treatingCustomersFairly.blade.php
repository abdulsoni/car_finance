@extends('layouts.master')
@section('title')
   {!! $treating_customers_fairly->page_title !!}
@endsection
@section('meta-description')
    {!! $treating_customers_fairly->page_meta_description !!}
@stop
@section('meta-keywords')
    {!! $treating_customers_fairly->page_meta_keywords !!}
@stop
@section('content')
<section class="banner">
    <div class="container-fluid no-padding bannerDiv">
        <img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $treating_customers_fairly->featured_image !!}" alt="">
    </div>
</section>
<div class="container fairlyDiv">

    {!! $treating_customers_fairly->page_content !!}
    <!-- <p>At Automotive Online Ltd we are committed to giving you excellent customer service and treating you fairly. We are fully committed to providing the highest standards of client service and advice and we never forget that you have a choice of supplier and are grateful that you’ve chosen us.</p>

    <p>Treating Customers Fairly (TCF) is one of the key principles set by the Financial Conduct Authority to ensure fair treatment of customers, by improving standards across the financial industry.</p>

    <p>As a part of this, Automotive Online Ltd follows the relevant aspects of the Financial Conduct Authority’s six guiding principles on how to engage with our customers. These are known as the ‘Treating Customers Fairly’ principles and govern how we communicate with customers, the level of service we provide and the fairness of our products and procedures.</p>

    <p>The six principles for treating customers fairly</p>

    <p>Outcome 1: Consumers can be confident that they are dealing with firms where the fair treatment of customers is central to the corporate culture.</p>

    <p>Outcome 2: Products and services marketed and sold in the retail market are designed to meet the needs of identified consumer groups and are targeted accordingly.</p>

    <p>Outcome 3: Consumers are provided with clear information and are kept appropriately informed before, during and after the point of sale.</p>

    <p>Outcome 4: Where consumers receive advice, the advice is suitable and takes account of their circumstances.</p>

    <p>Outcome 5: Consumers are provided with products that perform as firms have led them to expect, and the associated service is of an acceptable standard and as they have been led to expect.</p>

    <p>Outcome 6: Consumers do not face unreasonable post-sale barriers imposed by firms to change product, switch provider, submit a claim or make a complaint.</p>

    <p>Ways we meet these requirements in the day to day running of our business</p>

    <p>We continually aim to understand the needs of our clients</p>

    <p>We ensure that the marketing of our products is appropriately targeted, clear, not misleading and highlights the risks/conditions as well as the key features/benefits of a product.</p>

    <p>We make certain our clients understand the risks associated with our services at the outset of an instruction.</p>

    <p>We keep our clients fully informed in a clear and fair manner that is unambiguous and not misleading.</p>

    <p>We ensure our services are delivered with clarity and transparency and do not contain hidden conditions or rely on complex technical definitions.</p>

    <p>Any advice provided will be appropriate and take into account the customer’s individual needs and circumstances.</p>

    <p>We take our clients’ privacy seriously and ensure that our staff are aware of and follow rules in relation to data protection to ensure that clients’ details are kept secure and confidential.</p>

    <p>We take any complaint seriously and will deal with any complaints promptly and make improvements to our operations where required.</p>

    <p>If you have a complaint<br>Please visit our complaint procedure page.</p> -->

    
</div>
@endsection




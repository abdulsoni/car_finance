<!DOCTYPE html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('public/css/index.css')}}">

    <link rel="stylesheet" href="{{asset('public/fonts/fonts.css')}}">

    <script src="{{asset('public/js/bootPag.js')}}" type="text/javascript"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('public/css/mobile-menu.css')}}">

    <link id="favicon" rel="shortcut icon"  href="{{asset('public/images/favicon.jpg')}}" />
    <!-- <script src="js/jquery.min.js"></script> -->

<!--    <script src="js/jquery"></script>-->

    <!--    <link rel="stylesheet" type="text/css" href="http://api.addressnow.co.uk/css/addressnow-2.20.min.css?key=hh65-bz39-rj24-yg94" />-->

    <!--    <script type="text/javascript" src="http://api.addressnow.co.uk/js/addressnow-2.20.min.js?key=hh65-bz39-rj24-yg94"></script>-->

    <link rel="stylesheet" type="text/css" href="https://api.addressnow.co.uk/css/addressnow-2.20.min.css?key=ef12-jc99-pc46-ax34" /><script type="text/javascript" src="https://api.addressnow.co.uk/js/addressnow-2.20.min.js?key=ef12-jc99-pc46-ax34"></script>

    <link rel="stylesheet" href="{{asset('public/css/prism.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/main.css')}}">

    <link rel="stylesheet" href="{{asset('public/css/asRange.css')}}">

    <script src="{{asset('public/js/jquery.toc.js')}}"></script>

    <script src="{{asset('public/js/prism.js')}}"></script>

    <script src="{{asset('public/js/jquery-asRange.js')}}"></script>

    <script src="{{asset('public/js/jquery.number.js')}}"></script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js" type="text/javascript"></script> -->

    <!-- <script src="https://wchat.freshchat.com/js/widget.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127067641-1"></script>

<!-- Chat feature start -->

<script>
  window.intercomSettings = {
    app_id: "hx219k9m"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/hx219k9m';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

<!-- Chat feature end -->


<script>

window.dataLayer = window.dataLayer || [];

function gtag(){dataLayer.push(arguments);}

gtag('js', new Date());



gtag('config', 'UA-127067641-1');

</script>

      <!-- Facebook Pixel Code -->

          <script>

          !function(f,b,e,v,n,t,s)

          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

          n.callMethod.apply(n,arguments):n.queue.push(arguments)};

          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

          n.queue=[];t=b.createElement(e);t.async=!0;

          t.src=v;s=b.getElementsByTagName(e)[0];

          s.parentNode.insertBefore(t,s)}(window,document,'script',

          'https://connect.facebook.net/en_US/fbevents.js');

           fbq('init', '2079810208717336');

          fbq('track', 'PageView');

          </script>

          <noscript>

           <img height="1" width="1"

          src="https://www.facebook.com/tr?id=2079810208717336&ev=PageView

          &noscript=1"/>

          </noscript>

          <!-- End Facebook Pixel Code -->
          <!--Start No Scrolling mobile menu-->
          <script>
      function lockScroll() {
            if ($('body').hasClass('lock-scroll')) {
                $('body').removeClass('lock-scroll');
            }
            else {
                $('body').addClass('lock-scroll');
            }
      }
          </script>
<!--End No Scrolling mobile menu-->
    </head>

<body>


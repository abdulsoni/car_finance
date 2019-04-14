<div class="container applyFooterText">
  <p class="text-footer-top">
    Quick Car Finance is a trading name of Automotive Online Limited, a credit broker.
  </p>
  <p class="text-footer" style="margin-bottom:5px">Automotive Online is authorised and regulated by the Financial Conduct Authority under reference number: 764855. Registered office: Unit 1, The Sidings, Victoria Avenue Industrial Estate, Swanage, England, BH19 1AU. Registered in England. Company registration no. 07968386.. Data Protection Registration Number ZA458903.</p>
  <p class="text-footer">
    All finance is subject to status and income. Written quotations on request. Automotive Online can introduce you to a limited number of finance providers, based upon your credit rating and will receive commission for such introductions.
  </p>
  <p class="text-footer">
    † We do not charge a fee for arranging the finance, however some of our lenders may charge a fee.
  </p>
  <p class="text-footer">
    This site uses cookies so that we can provide you with the best user experience. By continuing to use the site you are consenting for cookies to be used. Further information on cookies and how you can disable them is available on our cookie policy.
  </p>
</div>
<div class="container-fluid" style="padding:0px;">
  <p class="copyrightText">
    &copy; Quick Car Finance. All Rights Reserved.
  </p>
</div>
<!-- <script src="{{ asset('public/js/jquery.min.js') }}"></script> -->

<script src="{{ asset('public/js/bootstrap.min.js') }}" async></script>
<script src="{{asset('public/js/jquery.toc.js')}}" async></script>
<script src="{{asset('public/js/jscookie.js')}}" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
  var UrlParams = window.location.href;
  var params = {};
  var params = [];

    if (UrlParams.indexOf('?') > -1)
    {
      var splitted = UrlParams.split('?');
      var prmarr = splitted[1].split("&");
      for ( var i = 0; i < prmarr.length; i++) {
          var tmparr = prmarr[i].split("=");
          params[tmparr[0]] = tmparr[1];
          if(tmparr[0].toLowerCase()=="source"){
            tmparr[0]="utm_source";
          }
          localStorage.setItem(tmparr[0].toLowerCase(),tmparr[1].toLowerCase());
          if(tmparr[0].toLowerCase()=='vid'){
            $('#VID').val(tmparr[1]);
          }
      }
    }
    /* Load CSS and Script Files Start*/
    if(document.createStyleSheet) {
      document.createStyleSheet("{{asset('public/css/bootstrap.min.css')}}");
      document.createStyleSheet("{{asset('public/css/index.css')}}");
      document.createStyleSheet("{{asset('public/css/main.css')}}");
      document.createStyleSheet("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    }
    else {
      var bootstrapStyle="@import url({{asset('public/css/bootstrap.min.css')}});",bootstrap=document.createElement("link");bootstrap.rel="stylesheet",bootstrap.href="data:text/css,"+escape(bootstrapStyle),document.getElementsByTagName("head")[0].appendChild(bootstrap);var indexStyle="@import url({{asset('public/css/index.css')}});",index=document.createElement("link");index.rel="stylesheet",index.href="data:text/css,"+escape(indexStyle),document.getElementsByTagName("head")[0].appendChild(index);var mainStyle="@import url({{asset('public/css/main.css')}});",main=document.createElement("link");main.rel="stylesheet",main.href="data:text/css,"+escape(mainStyle),document.getElementsByTagName("head")[0].appendChild(main);var faStyle="@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');",fa=document.createElement("link");fa.rel="stylesheet",fa.href="data:text/css,"+escape(faStyle),document.getElementsByTagName("head")[0].appendChild(fa);var jQueryUiStyle="@import url('https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css');",jQueryUi=document.createElement("link");jQueryUi.rel="stylesheet",jQueryUi.href="data:text/css,"+escape(jQueryUiStyle),document.getElementsByTagName("head")[0].appendChild(jQueryUi);var fontStyle="@import url({{asset('public/fonts/fonts.css')}});",fonts=document.createElement("link");fonts.rel="stylesheet",fonts.href="data:text/css,"+escape(fontStyle),document.getElementsByTagName("head")[0].appendChild(fonts);var mobileMenuStyle="@import url({{asset('public/css/mobile-menu.css')}});",mobileMenu=document.createElement("link");mobileMenu.rel="stylesheet",mobileMenu.href="data:text/css,"+escape(mobileMenuStyle),document.getElementsByTagName("head")[0].appendChild(mobileMenu);var s=document.createElement("script");s.setAttribute("src","https://cdn.cookielaw.org/consent/950c2dad-c12f-4054-88c2-5e6d25c05e8b.js"),s.setAttribute("type","text/javascript"),s.setAttribute("charset","UTF-8"),document.head.appendChild(s);var styleCss="@import url({{asset('public/css/style.css')}});",styleCSS=document.createElement("link");styleCSS.rel="stylesheet",styleCSS.href="data:text/css,"+escape(styleCss),document.getElementsByTagName("head")[0].appendChild(styleCSS);var vehicleCss="@import url({{asset('public/css/style-vehicle.css')}});",vehicleCSS=document.createElement("link");vehicleCSS.rel="stylesheet",vehicleCSS.href="data:text/css,"+escape(vehicleCss),document.getElementsByTagName("head")[0].appendChild(vehicleCSS);var addressL="@import url({{asset('public/css/style-vehicle.css')}});",addressLook=document.createElement("link");vehicleCSS.rel="stylesheet",vehicleCSS.href="data:text/css,"+escape(vehicleCss),document.getElementsByTagName("head")[0].appendChild(vehicleCSS);
    }
    /* Load CSS and Script Files End */
});
/* Preloader hide */
  window.onload = function(e){
    $('.loader').fadeOut();
  }
/* Preloader hide */
</script>

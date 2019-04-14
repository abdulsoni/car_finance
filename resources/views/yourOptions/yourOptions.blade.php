@extends('layouts.master')
@section('title')
    {!! $your_options->page_title !!}
@endsection
@section('meta-description')
    {!! $your_options->page_meta_description !!}
@stop
@section('meta-keywords')
    {!! $your_options->page_meta_keywords !!}
@stop
@section('content')
<style>
    hr{
       border: 1px solid #efefef;
        height: 0px;
       margin: 0px;
   }
</style>
<div class="container-fluid no-padding findFinanceBanner">
  <div class="container">
    <div class="col-sm-12 carFinanceContent">
      <h1>{!! $your_options->banner_heading !!}<b>.</b> </h1>
      {!! $your_options->banner_content !!}
      
       <!-- <p>To understand which car finance product is right for you depends on how long you’re likely to keep the
        car, your current credit score and how much you can afford to repay over a monthly basis.</p>
       <p class="colorfulParagraph">Find out more about each type of car finance that we offer<br>below:</p> -->
    </div>
  </div>
</div>
<div class="container carFinanceBottom">
  <div class="col-sm-12 carFinanceMainDivide">
      <h3>{!! $your_options->main_heading !!}<b>?</b> </h3>
      <h4>{!! $your_options->secondary_heading1 !!}</h4>
    <hr>
    <div class="col-sm-6 firstDivide">
      <h4>{!! $your_options->image_heading1 !!}</h4>
      <img class="img-responsive" src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $your_options->featured_image1  !!}" alt="">
    </div>
    <div class="col-sm-6 right-side">
      {!! $your_options->page_content1 !!}
      <!-- <h4>Benefits of Hire Purchase:</h4>
      <p class="no-bottomMargin"><i class="fa fa-arrow-right"></i> Fixed monthly repayments over an agreed period.</p>
      <p><i class="fa fa-arrow-right"></i> Fixed monthly repayments over an agreed period.</p>
      <p class="bottomMargins">At the title suggests, you hire the car from the finance company, taking responsibility for it and making monthly payments until you have paid the total amount owed. You are the registered keeper of the vehicle throughout the payment plan and then at the end of the repayment period, you have the option to take ownership of the car.
      </p>
      <p class="bottomMargins">
        As you've paid off the cost of the car by this point, all you pay is a small admin fee. This could be anything from £1 - £299+.</p>
      <h4 class="headingBlue">HP is good if:</h4>
      <p class="no-bottomMargin"><i class="fa fa-arrow-right"></i> You want fixed monthly repayments.</p>
      <p><i class="fa fa-arrow-right"></i> You might like to own the vehicle long term.</p> -->
      <button type="button" class="applyNowIndex buttonstylehm set-your-budget-btn" name="button">Calculate Finance </button>
    </div>
  </div>
  <div class="col-sm-12 carFinanceMainDivide">
      <h4>{!! $your_options->secondary_heading2 !!}</h4>
    <hr style="border-top: 1px solid #dedede;">
    <div class="col-sm-6 firstDivide">
      <h4>{!! $your_options->image_heading2 !!}</h4>
      <img class="img-responsive" src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $your_options->featured_image2  !!}" alt="">
   </div>
    
    <div class="col-sm-6">
      {!! $your_options->page_content2 !!}
      <!--
     <h4>Benefits of Personal Contract Plan:</h4>
      <p class="no-bottomMargin"><i class="fa fa-arrow-right"></i> No need to worry about depreciation.</p>
      <p><i class="fa fa-arrow-right"></i>  Lower monthly instalments for a better car.</p>
      <p class="bottomMargins">With PCP you are only paying for part of the total amount due and have the choice to
        return the car at the end of your repayment period. You still pay monthly instalments to the finance company
        as with other forms of credit, but at the end of the repayment period, you can pay a lump sum, (commonly
        known as a balloon payment) which will be higher than the monthly repayments you have been making return your
        car.
      </p>
      <p class="bottomMargins">
      PCP enables you to pay less each month for a car of the same value than you would with a traditional HP plan.
      </p>
      <h4 class="headingBlue">PCP is good if:</h4>
      <p class="no-bottomMargin"><i class="fa fa-arrow-right"></i> You like to change your car frequently.</p>
      <p><i class="fa fa-arrow-right"></i> Are not bothered about owning a car outright.</p> -->
      <button type="button" class="applyNowIndex buttonstylehm set-your-budget-btn" name="button">Calculate Finance </button>
    </div>
  </div>
</div>
<div class="set-your-budget">
<div class="container mainDivCalc desktopDiv">
    <div id="loanCalci">
    <div class="col-sm-10 set-budget-heading">
        <div class="col-sm-7 calculatorDiv desktopD no-padding" style="width:100%">
            <div class="col-sm-12  no-padding" style="display: flex">
                <div class="col-sm-2 col-xs-2 col-xs-offset-2 no-padding">
                    <img src="{{asset('public/images/landing/car_ear.png')}}" alt="">
                </div>
                <div class="col-sm-8 col-xs-9 no-padding headerFinance" style="width:100%">
                    <h1>Set Your Budget</h1>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-sm-12 deskTP">
      <div class="col-sm-8 budget-box">
        <div class="arrow_box">
          <div class="col-sm-12 budget-padding">
              <div class="col-sm-12 no-padding calcInnerSection ">

                  <!--<div class="set-credit-score">

                      <div class="select-label">
                          <label for="#">Your Credit Score is:</label>
                      </div>
                      <div class="select-1">
                          <div data-select-box>

                              <select name="select-1" id="select-11">
                                  <option value="">Excellent</option>
                                  <option value="">Good</option>
                              </select>
                          </div>
                      </div>

                      <div class="float"></div>

                  </div>-->

                  <h3>My Credit Score is:</h3>
                   <!--div class="btn-group btn-group-justified"-->
                    <div class="btn-group">
                      <button  id="bad" onclick="setRate({!! $calculator->bad !!},{!! $calculator->apr_bad !!},'bad')" class="btn bad">Bad</button>
                      <button  id="fair" onclick="setRate({!! $calculator->average !!},{!! $calculator->apr_average !!},'fair')" class="btn fair">Average</button>
                      <button  id="good" onclick="setRate({!! $calculator->good !!},{!! $calculator->apr_good !!},'good')" class="btn good">Good</button>
                      <button  id="excellent" onclick="setRate({!! $calculator->excellent !!},{!! $calculator->apr_excellent !!},'excellent')" class="btn excellent">Excellent</button>
                    </div>
                  <!--div class="col-sm-3 col-xs-6"><button id="bad" onclick="setRate(19.1,'bad')" class="btn">Bad</button></div>
                  <div class="col-sm-3 col-xs-6"><button id="fair" onclick="setRate(13.2,'fair')" class="btn">Fair</button></div>
                  <div class="col-sm-3 col-xs-6"><button id="good" onclick="setRate(9.2,'good')" class="btn">Good</button></div>
                  <div class="col-sm-3 col-xs-6"><button id="excellent" onclick="setRate(6.9,'excellent')" class="btn">Excellent</button></div-->
                <!--/div-->
              </div>
              <div class="col-sm-12 no-padding calcInnerSection rangeSliderSection">
                  <form method="post">
                      <div class="col-sm-12 no-padding calc-textboxes">
                          <div class="col-sm-6">
                          <h3>Amount to Borrow</h3>
                              <div class="input-group form-group btnInInput">
                                  <span class="input-group-btn">
                                      <button type="button" onclick="decreaseAmount()" class="btn btn-primary btn-number btn-plus" data-type="minus" data-field="quant[2]" style="background: #db0a5b !important;" >
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                  <div class="inputAmt1">
                                    <input type="text" class="form-control input-number borrowText" value="£" disabled>
                                    <input type="text" max="75000" name="InputBorrow" onkeyup="changeValues(this.value)" class="form-control input-number borrowAmt" value="2,500" min="500">
                                  </div>
                                      <!-- <input type="text" max="75000" name="InputBorrow" onkeyup="changeValues(this.value)" class="form-control input-number borrowAmt" value="2,500" min="500" max="75000"> -->
                                  <span class="input-group-btn">
                                      <button type="button" onclick="increaseAmount()" class="btn btn-primary btn-number btn-minus" data-type="plus" data-field="quant[2]" style="background: #db0a5b !important;">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                              </div>
                          </div>
                      <div class="col-sm-6">
                      <h3>To pay back over</h3>
                          <div class="input-group form-group btnInInput">
                              <span class="input-group-btn">
                                  <button style="left:0px; " onclick="decreaseYears()" type="button" class="btn btn-primary btn-number btn-plusYears" data-type="minus" data-field="quant[2]">
                                      <span class="glyphicon glyphicon-minus"></span>
                                  </button>
                              </span>
                              <div class="inputYear1">
                                <input type="text" readonly name="borrowYears" id="borrowYears1" class="form-control input-number borrowYears borrowYear" value="4" min="1" max="5">
                                <input type="text" class="form-control input-number borrowYearText" value="Years" disabled>
                              </div>
                              <span class="input-group-btn">
                                  <button onclick="increaseYears()" type="button" class="btn btn-primary btn-number btn-minusYears" data-type="plus" data-field="quant[2]">
                                      <span class="glyphicon glyphicon-plus"></span>
                                  </button>
                              </span>
                          </div>
                      </div>
                      </div>
                         <div class="col-sm-12">
                              <div class="example bottomSlider">
                                  <input class="range-example-5" id="borrowAmount" type="hidden" min="{{ $calculator->min_amount }}" max="{{ $calculator->max_amount }}" value="2500" name="loanValue" step="250" />
                                  <div class="col-sm-12 no-padding sliderLabel">
                                      <div class="col-sm-6 col-xs-6 no-padding leftLabel">
                                          <h3>£500</h3>
                                      </div>
                                      <div class="col-sm-6 col-xs-6 no-padding rightLabel">
                                          <h3>£75,000</h3>
                                      </div>
                                  </div>
                              </div>
                         </div>
                      <input type="hidden" class="totalAmount" value="3075">
                      <input type="hidden" class="interestRate" value="4.75">
                      <input type="hidden" class="costOfCredit" value="575">
                      <input type="hidden" class="installments" value="64.06">
                  </form>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4" style="padding-left:0px;padding-right:0px;">
        <div class="DataDiv grey-row-home">
          <h3 class="showData sDataLeft">Best available APR</h3><h3 class="showData sDataRight"><span class="interestRate">{{$calculator->apr_excellent}}%</span></h3>
        </div>
        <div class="DataDiv">
          <h3 class="showData sDataLeft">Total repayment</h3><h3 class="showData sDataRight"><span class="totalAmount">£3,075</span></h3>
        </div>
        <div class="DataDiv grey-row-home">
          <h3 class="showData sDataLeft">Total cost of credit</h3><h3 class="showData sDataRight"><span class="costOfCredit"> £575</span></h3>
        </div>
        <div class="arrow_box1">
        <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
            <div class="blueDiv">
              <h3 class="homepage-budget-h3"><b class="totalMonths">48</b> monthly Payments</h3>
              <h2 class="homepage-budget-h2"><b class="installments">£64.06</b></h2>
           </div>
            <div class="greenDiv btn-apply-now-homepage text-center">
              <a href="{{url('apply-now')}}">
                  APPLY NOW
                  <!--<img src="{{asset('public/images/landing/calcGreen.png')}}" alt="">-->
              </a>
            </div>
        </div>
      </div>
      </div>
    </div>
</div>

<div class="container-fluid respDiv" style="margin-top:10px;margin-bottom:10px">
    <div class="row">
        <div class="col-sm-12" >
            <div class="col-sm-7 full-width-calc">
                <div class="arrow_boxMobile">
                    <div class="col-sm-12 no-padding">
                        <div class="col-sm-12 no-padding calcInnerSection ">

                            <!--<div class="set-credit-score">

                                <div class="select-label">
                                    <label for="#">Your Credit Score is:</label>
                                </div>
                                <div class="select-1">
                                    <div data-select-box>

                                        <select name="select-1" id="select-11">
                                            <option value="">Excellent</option>
                                            <option value="">Good</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="float"></div>

                            </div>-->


                            <h3>My Credit Score is:</h3>
                            <div class="col-sm-12  no-padding calcInnerSection">
                                <div class="btn-group">
                                    <button id="bad" onclick="setRate({!! $calculator->bad !!},{!! $calculator->apr_bad !!},'bad')" class="btn bad">Bad</button>
                                    <button id="fair" onclick="setRate({!! $calculator->average !!},{!! $calculator->apr_average !!},'fair')" class="btn fair">Average</button>
                                    <button id="good" onclick="setRate({!! $calculator->good !!},{!! $calculator->apr_good !!},'good')" class="btn good">Good</button>
                                    <button id="excellent" onclick="setRate({!! $calculator->excellent !!},{!! $calculator->apr_excellent !!},'excellent')" class="btn excellent">Excellent</button>
                                </div>
                                <!--div class="col-sm-3 col-xs-3">
                                  <button id="bad" onclick="setRate(19.1,'bad')" class="btn rateButtons">Bad</button>
                                </div>
                                <div class="col-sm-3 col-xs-3"><button id="fair" onclick="setRate(13.2,'fair')" class="btn rateButtons">Fair</button></div>
                                <div class="col-sm-3 col-xs-3"><button id="good" onclick="setRate(9.2,'good')" class="btn rateButtons">Good</button></div>
                                <div class="col-sm-3 col-xs-3"><button  id="excellent" onclick="setRate(6.9,'excellent')" class="btn rateButtons">Excellent</button>
                                </div-->
                            </div>
                        </div>
                        <div class="col-sm-12 no-padding calcInnerSection rangeSliderSection">
                            <form method="post">
                                <div class="col-sm-12 no-padding">
                                    <div class="col-sm-7">
                                        <h3>Amount to Borrow</h3>
                                        <div class="input-group form-group btnInInput">
                                  <span class="input-group-btn">
                                      <button type="button" onclick="decreaseAmount()" class="btn btn-primary bgcolor btn-number btn-plus" data-type="minus" data-field="quant[2]">
                                          <span class="glyphicon glyphicon-minus"></span>

                                      </button>
                                  </span>
                                            <div class="inputAmtMob">
                                                <input type="text" class=" input-number borrowText" value="£" disabled>
                                                <input type="text" max="75000" name="InputBorrow" onkeyup="changeValues(this.value)" class="input-number borrowAmt" value="2,500" min="500" max="75000">
                                            </div>
                                            <!-- <input type="text" max="75000" name="InputBorrow" onkeyup="changeValues(this.value)" class="form-control input-number borrowAmt" value="2,500" min="500" max="75000"> -->
                                  <span class="input-group-btn">
                                      <button type="button" onclick="increaseAmount()" class="btn btn-primary bgcolor btn-number btn-minus">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 slider-calc-mob">
                                        <div class="example bottomSlider">
                                            <input class="range-example-5" id="borrowAmount" type="hidden" min="500" max="75000" value="2500" name="loanValue" step="250" />
                                            <div class="col-sm-12 no-padding sliderLabel">
                                                <div class="col-sm-6 col-xs-6 no-padding leftLabel">
                                                    <h3>£500</h3>
                                                </div>
                                                <div class="col-sm-6 col-xs-6 no-padding rightLabel">
                                                    <h3>£75,000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <h3>To pay back over</h3>
                                        <div class="input-group form-group btnInInput">
                              <span class="input-group-btn">
                                  <button style="left:0px" onclick="decreaseYears()" type="button" class="btn btn-primary btn-number btn-plusYears">
                                      <span class="glyphicon glyphicon-minus"></span>
                                  </button>
                              </span>
                                            <div class="inputYearMob">
                                                <input type="text" readonly name="borrowYears" id="borrowYears1" class="form-control input-number borrowYears borrowYear" value="4" min="1" max="5">
                                                <input type="text" class="form-control input-number borrowYearText" value="Years" disabled>
                                            </div>
                              <span class="input-group-btn">
                                  <button onclick="increaseYears()" type="button" class="btn btn-primary btn-number btn-minusYears" data-type="plus" data-field="quant[2]">
                                      <span class="glyphicon glyphicon-plus"></span>
                                  </button>
                              </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 slider-calc-tab">
                                        <div class="example bottomSlider">
                                            <input class="range-example-5" id="borrowAmount" type="hidden" min="500" max="75000" value="2500" name="loanValue" step="250" />
                                            <div class="col-sm-12 no-padding sliderLabel">
                                                <div class="col-sm-6 col-xs-6 no-padding leftLabel">
                                                    <h3>£500</h3>
                                                </div>
                                                <div class="col-sm-6 col-xs-6 no-padding rightLabel">
                                                    <h3>£75,000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="totalAmount" value="3075">
                                <input type="hidden" class="interestRate" value="4.75">
                                <input type="hidden" class="costOfCredit" value="575">
                                <input type="hidden" class="installments" value="64.06">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 no-padding full-width-calc2">
                <div class="arrow_boxMobileMobileMobile">
                    <div class="col-sm-12">
                        <div class="arrow_boxMobile1">
                            <div class="blueDivMobile">
                                <div class="">
                                    <h6><b class="totalMonths">48</b> monthly Payments</h6>
                                </div>
                                <h2 class="installments">£64.06</h2>
                            </div>
                        </div>
                        <div class="greenDivMob btn-apply-now-homepage text-center">
                            <a href="{{url('apply-now')}}">
                                APPLY NOW
                                <!--<img src="{{asset('public/images/landing/calcGreen.png')}}" alt="">-->
                            </a>
                        </div>
                        <div class="DataDiv grey-row-home">
                            <h3 class="showData sDataLeft">Best available APR</h3><h3 class="showData sDataRight"><b class="interestRate">{{$calculator->apr_excellent}}%</b></h3>
                        </div>
                        <div class="DataDiv">
                            <h3 class="showData sDataLeft">Total repayment</h3><h3 class="showData sDataRight"><b class="totalAmount">£3,075</b></h3>
                        </div>
                        <div class="DataDiv grey-row-home">
                            <h3 class="showData sDataLeft">Total cost of credit</h3><h3 class="showData sDataRight"><b class="costOfCredit"> £172.50</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row d-flex-center">
    <div class="col-lg-12">
        <div class="container no-padding aboutSectionOuter">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aboutSection" >
                        <center>
                            <h1>{!! $representative_example->representative_example_heading !!}</h1>
                        </center>
                        <div class="about-section-desc">
                            {!! $representative_example->representative_example_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".set-your-budget-btn").click(function () {
        $('html, body').animate({
            scrollTop: $(".set-your-budget").offset().top
        }, 1000);
    });
</script>
@endsection
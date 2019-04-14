
<div class="container mainDivCalc desktopDiv" id="set-your-budget">
    <div id="loanCalci">
    <div class="col-sm-10 set-budget-heading">
        <div class="col-sm-7 calculatorDiv desktopD no-padding" style="width:100%">
            <div class="col-sm-12  no-padding" style="display: flex">
                <div class="col-sm-2 col-xs-2 col-xs-offset-2 no-padding">
                    <img src="{{asset('public/images/landing/car_ear.png')}}" alt="">
                </div>
                <div class="col-sm-8 col-xs-9 no-padding headerFinance" style="width:100%">
                    <h2>Set Your Budget</h2>
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
                                    <input type="text" max="75000" name="InputBorrow" onkeyup="changeValues(this.value)" class="form-control input-number borrowAmt" value="{{$calculator->default_amount}}" min="{{$calculator->min_amount}}">
                                  </div>
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
                                <input type="text" readonly name="borrowYears" id="borrowYears1" class="form-control input-number borrowYears borrowYear" value="{{ $calculator->default_year }}" max="{{ $calculator->max_years }}" min="{{ $calculator->min_years }}">
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
                                  <input class="range-example-5" id="borrowAmount" type="hidden" min="{{ $calculator->min_amount }}" max="{{ $calculator->max_amount }}" value="{{ $calculator->default_amount }}" name="loanValue" step="250" />
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
                      <input type="hidden" id="hiddenAmt" class="totalAmount">
                      <input type="hidden" id="hiddenRate" class="interestRate" value="{!! $calculator->excellent !!}">
                      <input type="hidden" id="hiddenCost" class="costOfCredit" value="172.5">
                      <input type="hidden" id="hiddenInstallments" class="installments" value="55.68">
                  </form>
              </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4" style="padding-left:0px;padding-right:0px;">
        <div class="DataDiv grey-row-home">
          <h3 class="showData sDataLeft">Best available rate</h3><h3 class="showData sDataRight"><span class="interestRate">{!! $calculator->apr_excellent !!}%</span></h3>
        </div>
        <div class="DataDiv">
          <h3 class="showData sDataLeft">Total repayment</h3><h3 class="showData sDataRight"><span class="totalAmount" id="showRepayment"> £00.00</span></h3>
        </div>
        <div class="DataDiv grey-row-home">
          <h3 class="showData sDataLeft">Total cost of credit</h3><h3 class="showData sDataRight"><span class="costOfCredit" id="showCostOfCredit"> £00.00</span></h3>
        </div>
        <div class="arrow_box1">
        <div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
            <div class="blueDiv">
              <h3 class="homepage-budget-h3"><b class="totalMonths" id="showMonths">48</b> monthly Payments</h3>
              <h2 class="homepage-budget-h2"><b class="installments" id="showPerMonth">£00.00</b></h2>
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

                            <h3>My Credit Score is:</h3>
                            <div class="col-sm-12  no-padding calcInnerSection">
                                <div class="btn-group">
                                    <button id="bad" onclick="setRate({!! $calculator->bad !!},{!! $calculator->apr_bad !!},'bad')" class="btn bad">Bad</button>
                                    <button id="fair" onclick="setRate({!! $calculator->average !!},{!! $calculator->apr_average !!},'fair')" class="btn fair">Average</button>
                                    <button id="good" onclick="setRate({!! $calculator->good !!},{!! $calculator->apr_good !!},'good')" class="btn good">Good</button>
                                    <button id="excellent" onclick="setRate({!! $calculator->excellent !!},{!! $calculator->apr_excellent !!},'excellent')" class="btn excellent">Excellent</button>
                                </div>
                                
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
                                                <input type="text" name="InputBorrow" onkeyup="changeValues(this.value)" class="input-number borrowAmt" value="{!! $calculator->default_amount !!}" min="{!! $calculator->min_amount !!}" max="{!! $calculator->max_amount !!}">
                                            </div>
                                  <span class="input-group-btn">
                                      <button type="button" onclick="increaseAmount()" class="btn btn-primary bgcolor btn-number btn-minus">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 slider-calc-mob">
                                        <div class="example bottomSlider">
                                            <input class="range-example-5" id="borrowAmount" type="hidden" value="{!! $calculator->default_amount !!}" min="{!! $calculator->min_amount !!}" max="{!! $calculator->max_amount !!}" step="250" />
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
                                                <input type="text" readonly name="borrowYears" id="borrowYears1" class="form-control input-number borrowYears borrowYear" value="{{ $calculator->default_year }}" max="{{ $calculator->max_years }}" min="{{ $calculator->min_years }}">
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
                                            <input class="range-example-5" id="borrowAmount" type="hidden" value="{!! $calculator->default_amount !!}" min="{!! $calculator->min_amount !!}" max="{!! $calculator->max_amount !!}" step="250" />
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
                                <input type="hidden" class="totalAmount" value="2672.5">
                                <input type="hidden" class="interestRate" value="6.9">
                                <input type="hidden" class="costOfCredit" value="172.5">
                                <input type="hidden" class="installments" value="55.68">
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
                                <h2 class="installments">£00.00</h2>
                            </div>
                        </div>
                        <div class="greenDivMob btn-apply-now-homepage text-center">
                            <a href="{{url('apply-now')}}">
                                APPLY NOW
                                <!--<img src="{{asset('public/images/landing/calcGreen.png')}}" alt="">-->
                            </a>
                        </div>
                        <div class="DataDiv grey-row-home">
                            <h3 class="showData sDataLeft">Best available rate</h3><h3 class="showData sDataRight"><b class="interestRate">{!! $calculator->apr_excellent !!}%</b></h3>
                        </div>
                        <div class="DataDiv">
                            <h3 class="showData sDataLeft">Total repayment</h3><h3 class="showData sDataRight"><b class="totalAmount">£00.00</b></h3>
                        </div>
                        <div class="DataDiv grey-row-home">
                            <h3 class="showData sDataLeft">Total cost of credit</h3><h3 class="showData sDataRight"><b class="costOfCredit"> £00.00</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row no-margin d-flex-center">
    <div class="col-lg-12">
        <div class="container no-padding aboutSectionOuter">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aboutSection" >
                        <center>
                            <h2>{!! $representative_example->representative_example_heading !!}</h2>
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



<div class="container-fluid landing-images" style="background: #f6f6f6;">
    <center class="d-flex-center">
        <div class="col-xs-12 d-flex-center">
            <div class="col-xs-4 col-md-2 col-sm-3"><img src="https://partners.quickcarfinance.co.uk/public/images/pages_uploads/{!! $home_page->logo1 !!}" class="img-responsive img-above-set-budget google-logo"></div>
            <div class="col-xs-4 col-md-2 col-sm-3"><img src="https://partners.quickcarfinance.co.uk/public/images/pages_uploads/{!! $home_page->logo2 !!}" class="img-above-set-budget img-responsive ssl-logo"></div>
            <!--<div class="col-xs-3 col-md-3 col-sm-3"><img src="https://findfunddeliver.co.uk/public/images/pages_uploads/{!! $home_page->logo3 !!}" class="img-above-set-budget img-responsive star-logo"></div>-->
            <div class="col-xs-4 col-md-2 col-sm-3"><img src="https://partners.quickcarfinance.co.uk/public/images/pages_uploads/{!! $home_page->logo4 !!}" class="img-above-set-budget img-responsive saf-logo"></div>
        </div>
    </center>
</div>

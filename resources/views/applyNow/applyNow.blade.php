@extends('layouts.applyNow')
@section('content')
<div class="container contentDiv">
    <!-- multistep form -->
    <form id="msform" method="post" enctype="multipart/form-data">

		<input type="hidden" id="VID" name="vid" value="{{ Request::query('vid') }}" />
		<input type="hidden" name="istest" value="{{ Request::query('istest') }}" />
		<input type="hidden" name="utmMedium" value="{{ Request::query('utm_medium') }}" />
		<input type="hidden" name="utmSource" value="{{ Request::query('utm_source') }}" />
		<input type="hidden" name="utmCampaign" value="{{ Request::query('utm_campaign') }}" />
		<input type="hidden" name="utmContent" value="{{ Request::query('utm_content') }}" />
		<input type="hidden" name="utmTerm" value="{{ Request::query('utm_term') }}" />
		<input type="hidden" name="utmType" value="{{ Request::query('utm_type') }}" />
		<input type="hidden" name="gclid" value="{{ Request::query('gclid') }}" />

        <!-- progressbar -->
        <div class="progress-container form-progress" data-step="1">
            <div class="progress-step-container">
                <div class="progress-line-container">
                    <div class="progress-line"></div>
                </div>
                <div class="progress-bullet-container progress-bullet-1" style="left:0;">
                    <div class="progress-bullet active"></div>
                </div>
                <div class="progress-bullet-container progress-bullet-2" style="left:33.333%;">
                    <div class="progress-bullet progress-bullet2"></div>
                </div>
                <div class="progress-bullet-container progress-bullet-3" style="left:66.333%;">
                    <div class="progress-bullet progress-bullet3"></div>
                </div>
                <div class="progress-bullet-container progress-bullet-4" style="left:100%;">
                    <div class="progress-bullet progress-bullet4"></div>
                </div>
            </div>
        </div>
        <br/>
        <!-- <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="5c61ab488fdd0a0001f69c1c" data-style-height="24px" data-style-width="100%" data-theme="light">
            <a href="https://uk.trustpilot.com/review/quickcarfinance.co.uk" target="_blank">Trustpilot</a>
        </div> -->
        <br/>
<!--    Select Car-->
        <fieldset class="firstForm">
            <div class="col-sm-12 formDiv">
           <!-- <h1 class="apply-now-top">What Vehicle Would You Like?</h1>-->
                <p id="firstFormError" class="formErrors">Error! Please select One Car *</p>
                <div class="row d-flex-center">

                    <div class="col-xs-12">
                        <div class="row d-flex-center">
                            <div class="col-lg-10 col-md-10">

                                <div class="car-apply-title">
                                    <h1 class="text-center">Lets Get Started</h1>
                                </div>
                                <div class="car-apply-desc">
                                    <p class="text-center">How much would you like to borrow?</p>
                                </div>

                                <div class="car-apply-bottom">
                                    <div class="row d-flex-center">
                                        <div class="col-lg-10">

                                            <div class="apply-car-info-section">
                                                <!--<button type="button" id="borrowIncrease" class="btn-apply-now-plus"><i>+</i></button>-->
                                                <button type="button" id="borrowDecrease" class="btn-apply-now-minus"><i>-</i></button>

                                               <div class="apply-now-text-main">
                                                  <div class="apply-now-text-outer">
                                                      <div class="apply-now-symbol">
                                                          <p>£</p>
                                                      </div>
                                                      <div class="apply-now-text-box-inner">
                                                          <input id="borrowAmount" name="borrowAmount" type="text" class="apply-now-text" value="7,500"/>
                                                      </div>
                                                      <div class="float"></div>
                                                  </div>
                                               </div>
                                                <!--<button type="button" id="borrowDecrease" class="btn-apply-now-minus"><i>-</i></button>-->
                                                <button type="button" id="borrowIncrease" class="btn-apply-now-plus"><i>+</i></button>
                                                <div class="float"></div>

                                                <div class="apply-now-price-slider">
                                                    <div class="form-group rangeInput">
                                                        <input class="borrowAmountSlider"  id="borrowAmount" type="hidden" min="500" max="75000" value="7500" name="loanValue" step="250" />
                                                    </div>
                                                </div>

                                                <div class="car-apply-desc-bottom">
                                                    <p class="text-center">To finance a:</p>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb1" value="Car"/>
                    <label class="hatchback" for="cb1"><img src="{{asset('public/images/a-car-1.png')}}" class="full-width" /></label>
                </div>
                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb2" value="Van" />
                    <label class="saloon" for="cb2"><img src="{{asset('public/images/a-car-2.png')}}" class="full-width" />
                    </label>
                </div>
                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb3" value="Motorbike" />
                    <label class="coupe" for="cb3"><img src="{{asset('public/images/a-car-3.png')}}" class="full-width" /></label>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb4" value="Motorhome" />
                    <label class="estate" for="cb4"><img src="{{asset('public/images/a-car-4.png')}}" class="full-width" /></label>
                </div>
                <div class="col-xs-4 label-padding ">
                    <input type="radio" name="cars" id="cb5" value="Caravan" />
                    <label class="suv" for="cb5"><img src="{{asset('public/images/a-car-5.png')}}" class="full-width" /></label>
                </div>
                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb6" value="Static Caravan" />
                    <label class="mpv" for="cb6"><img src="{{asset('public/images/a-car-6.png')}}" class="full-width" /></label>
                </div>
              </div>
                <!--<div class="row">
                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb7" value="convertable" />
                    <label class="convertable" for="cb7"><img src="{{asset('public/images/convertable.png')}}" class="full-width" /></label>
                </div>
                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb8" value="pickup" />
                    <label class="pickup" for="cb8"><img src="{{asset('public/images/pickup.png')}}" class="full-width" /></label>
                </div>
                <div class="col-xs-4 label-padding">
                    <input type="radio" name="cars" id="cb9" value="notsure" />
                    <label class="notsure" for="cb9"><img src="{{asset('public/images/not_sure.png')}}" class="full-width" /></label>
                </div></div>-->
            </div>
                <button onclick="topFunction()" id="firstForm" type="button" name="next" class=" next action-button" >
                	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
                </button>
                </a>
        </fieldset>

<!--Select Budget-->
        <fieldset class="secondForm">
            <div class="col-sm-12 formDiv">
                <h1>Monthly Budget</h1>
                <h3>What would you like to spend</h3>
                <p id="secondFormError" class="formErrors">Error! Please select One value *</p>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="budget" value="1"/>
                        <div>
                            <h3>Under £150 / month</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="budget" value="2"/>
                        <div>
                            <h3>£150 - £250 / month</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="budget" value="3"/>
                        <div>
                            <h3>£251 - £350 / month</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="budget" value="4"/>
                        <div>
                            <h3>£351 - £450 / month</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="budget" value="5"/>
                        <div>
                            <h3>£451 - £550 / month</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="budget" value="6"/>
                        <div>
                            <h3>Over £550 / month</h3>
                        </div>
                    </label>
                </div>
             </div>
            <button id="secondForm" type="button" name="next" class=" next 	action-button" ><img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--        select Driving Licence-->
        <fieldset class="thirdForm">
            <div class="col-sm-12 formDiv radio-group">
                <h1>Driving Licence</h1>
                <h3>What kind do you have?</h3>
                <p id="thirdFormError" class="formErrors">Error! Please select One value *</p>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="licence" value="Full UK"/>
                        <div>
                            <h3>Full Uk</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="licence" value="Provisional UK"/>
                        <div>
                            <h3>Provisional Uk</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="licence" value="European"/>
                        <div>
                            <h3>European</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="licence" value="International"/>
                        <div>
                            <h3>International</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="licence" value="None"/>
                        <div>
                            <h3>No Licence</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mobileNone">
                    <label style="height: 100px">
                        <input type="radio" name="licence" value="no licence"/>
                        <div>
                            <h3>&nbsp;</h3>
                        </div>
                    </label>
                </div>
             </div>
            <button id="thirdForm" type="button" name="next" class=" next action-button"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--        Select Marital Status-->
        <fieldset class="fourthForm">
            <div class="col-sm-12 formDiv radio-group">
                <h1>Marital Status</h1>
                <h3>Are you...</h3>
                <p id="fourthFormError" class="formErrors">Error! Please select One value *</p>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Single"/>
                        <div>
                            <h3>Single</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Married"/>
                        <div>
                            <h3>Married</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Cohabiting"/>
                        <div>
                            <h3>Cohabiting</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Divorced"/>
                        <div>
                            <h3>Divorced</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Separated"/>
                        <div>
                            <h3>Separated</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Widowed"/>
                        <div>
                            <h3>Widowed</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Civil Partnership"/>
                        <div>
                            <h3 class="zero-padding">Civil Partnership</h3>
                        </div>
                    </label>
                </div>
                <!-- <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="marital" value="Dissolved Civil
Partnership"/>
                        <div>
                            <h3>Dissolved Civil
Partnership</h3>
                        </div>
                    </label>
                </div> -->

            </div>
            <button id="fourthForm" type="button" name="next" class=" next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>


<!--        Select passport Info-->
        <fieldset class="fifthForm">
            <div class="col-sm-12 formDiv">
                <h1>Passport</h1>
                <h3>Do you have a valid passport?</h3>
                <p id="fifthFormError" class="formErrors">Error! Please select One value *</p>
                <div class="row d-flex-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <label class="lablCar">
                            <input type="radio" name="qcf_passport" value="yes"/>
                            <div>
                                <h3>Yes</h3>
                            </div>
                        </label>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <label class="lablCar">
                            <input type="radio" name="qcf_passport" value="no"/>
                            <div>
                                <h3>No</h3>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <button id="fifthForm" type="button" name="next" class=" next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--enter date of birth-->
        <fieldset class="sixthForm">
            <div class="col-sm-12 formDiv">
                <h1>Are you eligible?</h1>
                <h3>What is your date of birth?</h3>
                <div class="col-sm-offset-4 col-sm-4">
                    <input type="text" placeholder="DD/MM/YYYY" class="form-control" name="qcf_dob" id="qcf_dob" style="padding-left: 0px;text-align: center">
                </div>
            </div>
            <p id="sixthFormError" class="formErrors">Error! invalid date, you must be in between 18-99 to be eligible *</p>
            <button onclick="sixthForm()" id="sixForm" type="button" name="next" class=" next action-button">
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
            <p></p>
        </fieldset>

<!--Select Employment-->
        <fieldset class="seventhForm">
            <div class="col-sm-12 formDiv radio-group">
                <h1>Employment</h1>
                <h3>What is your employment status?</h3>
                <p id="seventhFormError" class="formErrors">Error! Please select One value *</p>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Full-Time Employment"/>
                        <div>
                            <h3 class="zero-padding">Full-Time Employment</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Part-Time Employment"/>
                        <div>
                            <h3 class="zero-padding">Part-Time Employment</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Self-Employment"/>
                        <div>
                            <h3>Self-Employment</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Temporary/Contract"/>
                        <div>
                            <h3>Temporary/Contract</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Retired"/>
                        <div>
                            <h3>Retired</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Homemaker/Carer"/>
                        <div>
                            <h3>Homemaker/Carer</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Education"/>
                        <div>
                            <h3>Education</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Benefits"/>
                        <div>
                            <h3>Benefits</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_employment" value="Armed Forces"/>
                        <div>
                            <h3>Armed Forces</h3>
                        </div>
                    </label>
                </div>
            </div>

            <button id="seventhForm" type="button" name="next" class=" next action-button"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>


<!--Employment form one-->
        <fieldset class="seventhOneForm">
            <div class="col-sm-12 formDiv">
                <h1>Employment</h1>
                <h3>Who is your employer? We never contact your employer</h3>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                <!--<div class="col-sm-offset-3 col-sm-6">-->
                    <label class="inputLabel">Employer</label>
                    <input type="text" placeholder="Company name here" class="form-control empInput emp1" name="qcf_companyName" id="qcf_companyName"/>
                    <p id="seventhOneFormError1" class="formErrors">Error! Please enter company name *</p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                    <label class="inputLabel">Job Title</label>
                    <input type="text" placeholder="Job title here" class="form-control empInput emp2" name="jobTitle" id="jobTitle"/>
                    <p id="seventhOneFormError2" class="formErrors">Error! Please enter job title *</p>
                </div>
            </div>

            <button id="seventhOneForm" type="button" name="next" class=" next action-button empButton"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--Employment form one 1-->
        <fieldset class="seventhOneForm1">
            <div class="col-sm-12 formDiv">
                <h1>Employment</h1>
                <h3>Who is your employer? We never contact your employer</h3>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                    <label class="inputLabel">Employer</label>
                    <input type="text" placeholder="Company name here" class="form-control empInput emp1" name="qcf_companyName1" id="qcf_companyName1"/>
                    <p id="seventhOneFormError11" class="formErrors">Error! Please enter company name *</p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                    <label class="inputLabel">Job Title</label>
                    <input type="text" placeholder="Job title here" class="form-control empInput emp2" name="jobTitle1" id="jobTitle1"/>
                    <p id="seventhOneFormError21" class="formErrors">Error! Please enter job title *</p>
                </div>
            </div>

            <button id="seventhOneForm1" type="button" name="next" class=" next action-button empButton"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--Employment form one 1-->
          <fieldset class="seventhOneForm2">
            <div class="col-sm-12 formDiv">
                <h1>Employment</h1>
                <h3>Who is your employer? We never contact your employer</h3>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                    <label class="inputLabel">Employer</label>
                    <input type="text" placeholder="Company name here" class="form-control empInput emp1" name="qcf_companyName2" id="qcf_companyName2"/>
                    <p id="seventhOneFormError12" class="formErrors">Error! Please enter company name *</p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                    <label class="inputLabel">Job Title</label>
                    <input type="text" placeholder="Job title here" class="form-control empInput emp2" name="jobTitle2" id="jobTitle2"/>
                    <p id="seventhOneFormError22" class="formErrors">Error! Please enter job title *</p>
                </div>
            </div>

            <button id="seventhOneForm2" type="button" name="next" class=" next action-button empButton"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

        <!--Employment form Two-->
        <fieldset class="seventhTwoForm">
            <div class="col-sm-12 formDiv">
                <h1>Employment</h1>
                <h3>How long have you worked there?</h3>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput empY" name="employmentYears" id="employmentYears"/>
                        <p id="seventhTwoFormError" class="formErrors">Error! Please enter years of employment *</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel empLabelY" for="employmentYears">Years</label>
                    </div>
                </div>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput empM" name="employmentMonths" id="employmentMonths"/>
                        <p id="seventhTwoFormError" class="formErrors">Error! Please enter months of employment *</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel empLabelM" for="employmentMonths1">Months</label>
                    </div>
                </div>
            </div>
            <button id="seventhTwoForm" type="button" name="next" class=" next action-button"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

        <!--Employment form Two 1-->
        <fieldset class="seventhTwoForm1">
            <div class="col-sm-12 formDiv">
                <h1>Employment</h1>
                <h3>How long have you worked there?</h3>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput empY" name="employmentYears1" id="employmentYears1"/>
                        <p id="seventhTwoFormError1" class="formErrors">Error! Please enter years of employment *</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel empLabelY" for="employmentYears">Years</label>
                    </div>
                </div>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput empM" name="employmentMonths1" id="employmentMonths1"/>
                        <p id="seventhTwoFormError1" class="formErrors">Error! Please enter months of employment *</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel empLabelM" for="employmentMonths1">Months</label>
                    </div>
                </div>
            </div>
            <button id="seventhTwoForm1" type="button" name="next" class=" next action-button"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

    <!--Employment form Two 2-->
        <fieldset class="seventhTwoForm2">
            <div class="col-sm-12 formDiv">
                <h1>Employment</h1>
                <h3>How long have you worked there?</h3>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput empY" name="employmentYears2" id="employmentYears2"/>
                        <p id="seventhTwoFormError2" class="formErrors">Error! Please enter years of employment *</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel empLabelY" for="employmentYears2">Years</label>
                    </div>
                </div>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput empM" name="employmentMonths2" id="employmentMonths2"/>
                        <p id="seventhTwoFormError2" class="formErrors">Error! Please enter months of employment *</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel empLabelM" for="employmentMonths2">Months</label>
                    </div>
                </div>
            </div>
            <button id="seventhTwoForm2" type="button" name="next" class=" next action-button">
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

        <!--Monthly Income-->
        <fieldset class="eightthForm">
            <div class="col-sm-12 formDiv">
                <h1>Monthly Income</h1>
                <h3>What is your total <strong style="color:#db0a5b;">monthly </strong>income?</h3>
                <div class="col-sm-offset-3 col-sm-6">
                    <input type="number" placeholder="Monthly Income" class="form-control monthlyIncome" name="monthlyIncome" id="monthlyIncome" style="padding-left: 75px;">
                    <div class="pound-icon white-pound">£</div>
                    <p id="eightthFormError" class="formErrors">Error! Please enter your total monthly income *</p>
                </div>
            </div>
            <button id="eightthForm" type="button" name="next" class=" next action-button">
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

        <!-- <fieldset class="borrowAmount">
            <div class="col-sm-12 formDiv">
                <h1>Amount to borrow</h1>
                <h3>How much amount do you want to <strong style="color:#db0a5b;">borrow ?</strong></h3>
                <div class="col-sm-offset-3 col-sm-6">
                    <input type="number" placeholder="Amount to borrow" class="form-control monthlyIncome" name="borrowAmount" id="borrowAmount" style="padding-left: 75px;">
                    <div class="pound-icon white-pound">£</div>
                </div>
            </div>
            <button id="borrowAmounts" type="button" name="next" class=" next action-button">
              <img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset> -->

         <!--Monthly Income-->
         <fieldset class="eightthForm1">
            <div class="col-sm-12 formDiv">
                <h1>Monthly Income</h1>
                <h3>What is your total <strong style="color:#db0a5b;">monthly </strong>income?</h3>
                <div class="col-sm-offset-3 col-sm-6">
                    <input type="number" placeholder="Monthly Income" class="form-control monthlyIncome" name="monthlyIncome1" id="monthlyIncome1" style="padding-left: 75px;">
                    <div class="pound-icon white-pound">£</div>
                    <p id="eightthFormError1" class="formErrors">Error! Please enter your total monthly income *</p>
                </div>
            </div>
            <button id="eightthForm1" type="button" name="next" class=" next action-button">
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

            <!--Monthly Income-->
            <fieldset class="eightthForm2">
            <div class="col-sm-12 formDiv">
                <h1>Monthly Income</h1>
                <h3>What is your total <strong style="color:#db0a5b;">monthly </strong>income?</h3>
                <div class="col-sm-offset-3 col-sm-6">
                    <input type="number" placeholder="Monthly Income" class="form-control monthlyIncome" name="monthlyIncome2" id="monthlyIncome2" style="padding-left: 75px;">
                    <div class="pound-icon white-pound">£</div>
                    <p id="eightthFormError2" class="formErrors">Error! Please enter your total monthly income *</p>
                </div>
            </div>
            <button id="eightthForm2" type="button" name="next" class=" next action-button">
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>


<!--        Address Details-->
        <fieldset class="ninethForm" style="display:none">
            <div class="col-sm-12 formDiv">
                <h1>Address Details</h1>
                <h3>What is your postcode?</h3>
                <div class="col-sm-offset-2 col-sm-8">
                    <input onclick="checkFirstAddress('1')" onkeydown="return validateNumberAndForwardSlash(event);" onfocus="showLinkDiv()" type="text" name="AddressNow" id="AddressNow" value="" class="form-control" placeholder="Type postcode or address here" style="margin-bottom:0px;"/>
                    <div class="clickableDiv">
                        <a onclick="showTextFields()">I don't see my address. Let me type it in.</a>
                    </div>
                    <div class="fa fa-check-circle checkedCircle"></div>
                    <p id="addressNowError" class="formErrors1">Error! Please fill address fields *</p>
                    <div class="addressDown">
                        <span class="upArrowAddress"></span>
                        <small>
                            The Address you have selected is:
                        </small>
                        <h4 class="addressText">
                        </h4>
                    </div>
                    <p id="ninethFormError" class="formErrors">Error! Please enter a valid UK postcode *</p>
                </div>

                <div id="addressFields" class="row d-flex-center">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Building Name</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="buildingName" name="buildingName"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Building Number</label>
                            <input style="font-size: 16px"  type="text" class="form-control" id="buildingNumber" name="buildingNumber"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Street Address</label>
                            <input type="text" class="form-control" id="street" name="txtLine">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Street Address1</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="secondStreet" name="secondStreet"/>
                        </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Town</label>
                            <input type="text" class="form-control" id="town" name="txtTown"/>
                        </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">County</label>
                            <input type="text" class="form-control" id="county" name="county"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="PostCodeDiv">
                            <label class="formLabel">Postcode</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="postcode" name="txtPostcode"/>
                        </div>
                </div>
            </div>
            <button id="ninethForms" type="button" name="next" class="next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
            <button id="AddressLookup1" type="button" name="next" class="next action-button" style="display:none">
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>



        <!--Address Details-->
        <fieldset class="ninethForm1" >
            <div class="col-sm-12 formDiv">
                <h1>Previous Address</h1>
                <h3>What is your postcode?</h3>
                <div class="col-sm-offset-2 col-sm-8">
                    <input onclick="checkFirstAddress('2')" onkeydown="return validateNumberAndForwardSlash(event);" type="text" name="AddressNow1" id="AddressNow1" value="" class="form-control" placeholder="Type postcode or address here" style="margin-bottom:0px;"/>
                    <div class="clickableDiv1">
                        <a id="showTextFields1">I don't see my address. Let me type it in.</a>
                    </div>
                    <div class="fa fa-check-circle checkedCircle1"></div>
                    <p id="addressNowError" class="formErrors1">Error! Please fill address fields *</p>
                    <div class="addressDown1">
                        <span class="upArrowAddress"></span>
                        <small>
                            The Address you have selected is:
                        </small>
                        <h4 class="addressText">
                        </h4>
                    </div>
                    <p id="ninethFormError" class="formErrors">Error! Please enter a valid UK postcode *</p>
                </div>

                <div id="addressFields1" class="d-flex-center">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Building Name</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="buildingName1" name="buildingName1"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Building Number</label>
                            <input style="font-size: 16px"  type="text" class="form-control" id="buildingNumber1" name="buildingNumber1"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Street Address</label>
                            <input type="text" class="form-control" id="street1" name="txtLine1"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Street Address1</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="secondStreet1" name="secondStreet1"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Town</label>
                            <input type="text" class="form-control" id="town1" name="txtTown1"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">County</label>
                            <input type="text" class="form-control" id="county1" name="county1"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="PostCodeDiv1">
                            <label class="formLabel">Postcode</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="postcode1" name="txtPostcode1"/>
                        </div>
                </div>
            </div>
            <button id="ninethForms1" type="button" name="next" class="next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
            <button id="AddressLookup2" type="button" name="next" class="next action-button" style="display:none">
              <img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>


        <!--        Address Details-->
        <fieldset class="ninethForm2">
            <div class="col-sm-12 formDiv">
                <h1>Previous Address</h1>
                <h3>What is your postcode?</h3>
                <div class="col-sm-offset-2 col-sm-8">
                    <input onclick="checkFirstAddress('3')" onkeydown="return validateNumberAndForwardSlash(event);" type="text" name="AddressNow2" id="AddressNow2" value="" class="form-control" placeholder="Type postcode or address here" style="margin-bottom:0px;"/>
                    <div class="clickableDiv2">
                        <a id="showTextFields2">I don't see my address. Let me type it in.</a>
                    </div>
                    <div class="fa fa-check-circle checkedCircle2"></div>
                    <p id="addressNowError" class="formErrors1">Error! Please fill address fields *</p>
                    <div class="addressDown2">
                        <span class="upArrowAddress"></span>
                        <small>
                            The Address you have selected is:
                        </small>
                        <h4 class="addressText">
                        </h4>
                    </div>
                    <p id="ninethFormError" class="formErrors">Error! Please enter a valid UK postcode *</p>
                </div>

                <div id="addressFields2" class="d-flex-center">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Building Name</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="buildingName2" name="buildingName2"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Building Number</label>
                            <input style="font-size: 16px"  type="text" class="form-control" id="buildingNumber2" name="buildingNumber2"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Street Address</label>
                            <input type="text" class="form-control" id="street2" name="txtLine2"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Street Address1</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="secondStreet2" name="secondStreet2"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">Town</label>
                            <input type="text" class="form-control" id="town2" name="txtTown2"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <label class="formLabel">County</label>
                            <input type="text" class="form-control" id="county2" name="county2"/>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="PostCodeDiv2">
                            <label class="formLabel">Postcode</label>
                            <input style="font-size: 16px " type="text" class="form-control" id="postcode2" name="txtPostcode2"/>
                        </div>
                </div>
            </div>
            <button id="ninethForms2" type="button" name="next" class="next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
            <button id="AddressLookup3" type="button" name="next" class="next action-button" style="display:none">
              <img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--Address Details-->
        <fieldset class="tenthForm">
            <div class="col-sm-12 formDiv radio-group">
                <h1>Address Details</h1>
                <h3>What is your residential status?</h3>
                <p id="tenthFormError" class="formErrors">Error! Please select One value *</p>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Homeowner"/>
                        <div>
                            <h3>Homeowner</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Tenant-Private"/>
                        <div>
                            <h3>Tenant-Private</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Tenant-Housing"/>
                        <div>
                            <h3>Tenant-Housing</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Tenant-Council"/>
                        <div>
                            <h3>Tenant-Council</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                      <input type="radio" name="qcf_vehicleResidential" value="Living With Family"/>
                        <div>
                            <h3>Living with family</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Military Accommodation"/>
                        <div>
                            <h3 class="zero-padding" >Military Accommodation</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Work Accommodation"/>
                        <div>
                            <h3>Work Accommodation</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Student Accommodation"/>
                        <div>
                            <h3 class="zero-padding">Student Accommodation</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <label class="lablCar">
                        <input type="radio" name="qcf_vehicleResidential" value="Other"/>
                        <div>
                            <h3>Other</h3>
                        </div>
                    </label>
                </div>
            </div>
            <button id="tenthForm" type="button" name="next" class=" next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>



<!--Address detail years n months-->
        <fieldset class="eleventhForm">
            <div class="col-sm-12 formDiv">
                <h1>Address Details</h1>
                <h3>How long have you lived there? (3 years required)</h3>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput addressY" name="qcf_currentAddressYears" id="addressYears"/>
                        <p id="addressYearsError" class="formErrors">Error! Please enter a number of years *</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel addressLabelY" for="employmentYears">Years</label>
                    </div>
                </div>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput addressM" name="qcf_currentAddressMonths" id="addressMonths"/>
                        <p id="addressMonthsError" class="formErrors">Error! Please enter a number of months *</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel addressLabelM" for="employmentMonths">Months</label>
                    </div>
                </div>
            </div>
            <button id="eleventhForm" type="button" name="next" class=" next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>


        <fieldset class="eleventhForm1">
            <div class="col-sm-12 formDiv">
                <h1>Address Details</h1>
                <h3>How long have you lived there? (3 years required)</h3>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput addressY" name="qcf_currentAddressYears1" id="addressYears1"/>
                        <p id="addressYearsError" class="formErrors">Error! Please enter a number of years *</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel addressLabelY" for="employmentYears">Years</label>
                    </div>
                </div>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput addressM" name="qcf_currentAddressMonths1" id="addressMonths1"/>
                        <p id="addressMonthsError" class="formErrors">Error! Please enter a number of months *</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel addressLabelM" for="employmentMonths">Months</label>
                    </div>
                </div>
            </div>
            <button id="eleventhForm1" type="button" name="next" class=" next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

        <fieldset class="eleventhForm2">
            <div class="col-sm-12 formDiv">
                <h1>Address Details</h1>
                <h3>How long have you lived there? (3 years required)</h3>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput addressY" name="qcf_currentAddressYears2" id="addressYears2"/>
                        <p id="addressYearsError" class="formErrors">Error! Please enter a number of years *</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel addressLabelY" for="employmentYears">Years</label>
                    </div>
                </div>
                <div class="row d-flex-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <input type="number" placeholder="0" class="form-control empInput addressM" name="qcf_currentAddressMonths2" id="addressMonths2"/>
                        <p id="qcf_currentAddressMonths2" class="formErrors">Error! Please enter a number of months *</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 no-padding">
                        <label class="empLabel addressLabelM" for="employmentMonths">Months</label>
                    </div>
                </div>
            </div>
            <button id="eleventhForm2" type="button" name="next" class=" next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--Personal Information-->
        <fieldset class="twelvethForm">
            <div class="col-sm-12 formDiv radio-group">
                <h1>Almost done</h1>
                <h3>Let us know who you are</h3>
                <p id="twelvethRadioError" class="formErrors">Error! Please select One value *</p>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <label class="lablCar">
                        <input type="radio" name="prefixTitle" value="Mr"/>
                        <div>
                            <h3>Mr</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <label class="lablCar">
                        <input type="radio" name="prefixTitle" value="Mrs"/>
                        <div>
                            <h3>Mrs</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <label class="lablCar">
                        <input type="radio" name="prefixTitle" value="Miss"/>
                        <div>
                            <h3>Miss</h3>
                        </div>
                    </label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <label class="lablCar">
                        <input type="radio" name="prefixTitle" value="Ms"/>
                        <div>
                            <h3>Ms</h3>
                        </div>
                    </label>
                </div>
            </div>
            <button id="twelvethForm" type="button" name="next" class=" next action-button" >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>

<!--getting name-->
        <fieldset class="gettingName">
            <div class="col-sm-12 formDiv">
                <h1>Almost done</h1>
                <h3>Let us know who you are</h3>
                <div class="col-sm-6 personalInfo">
                    <label>First name</label>
                    <input type="text" placeholder="First name here" class="form-control" name="firstName" id="firstName" style="padding-left: 0px;text-align: center">
                    <p id="fnameError" class="formErrors">Error! Please enter first name*</p>
                </div>
                <div class="col-sm-6 personalInfo">
                    <label>Surname</label>
                    <input type="text" placeholder="Surname here" class="form-control" name="surName" id="surName" style="padding-left: 0px;text-align: center">
                    <p id="snameError" class="formErrors">Error! Please enter surname*</p>
                </div>
            </div>
            <button id="gettingName" type="button" name="next" class=" next action-button"  >
            	<img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>
<!--        Final Step-->

<!--Bank Information-->
        <fieldset class="BankVerification">
            <div class="col-sm-12 formDiv">
                <h1>Bank Verification</h1>
                <h3>We can only offer loans to customers with a valid UK current account.</h3>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                <!--<div class="col-sm-offset-3 col-sm-6">-->
                    <label class="inputLabel">Bank Account Number</label>
                    <input type="text" id="accountNumber" placeholder="Valid Account Number" class="form-control empInput emp1" name="BankAccount"/>
                </div>
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-12">
                    <label class="inputLabel">Bank Sort Code</label>
                    <input type="text" id="sortCode" placeholder="Valid Sort Code" class="form-control empInput emp2" name="BankSortCode"/>
                </div>
            </div>

            <button id="verifyBank" type="button" name="next" class=" next action-button empButton"  >
              <img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive">
            </button>
        </fieldset>
<!--        Bank Information-->

        <fieldset class="thirteenthForm">
            <div class="col-sm-12 formDiv radio-group">
                <h1>Final Step</h1>
                <div class="col-sm-6 personalInfo">
                    <label>Mobile Number</label>
                    <input type="number" placeholder="Mobile number here" class="form-control apply-last-text" name="mobileNumber" id="mobileNumber" style="padding-left: 0px;text-align: center; height:100px;font-size: 24px;font-family: 'Lato',sans-serif;">
                    <p id="mobileError" class="formErrors">Error! Please enter valid Mobile Number*</p>
                </div>
                <div class="col-sm-6 personalInfo">
                    <label>Email Address</label>
                    <input type="text" placeholder="Email address here" class="form-control apply-last-text" name="emailAddress" id="emailAddress" style="padding-left: 0px;text-align: center">
                    <p id="emailError" class="formErrors">Error! Please enter valid email address*</p>
                </div>
           <!-- </div>-->
<!--            <input  id="firstForm" type="button" name="next" class=" next action-button" value="Next Step" />-->

                <div class="float"></div>

                <div class="apply-last-p">
                    <p><b>Terms & Conditions</b></p>
                  <input class="final-step-check" id="checkbox3" name="marketingOptions" value='Yes' type="checkbox" style="margin-left: 4px">
                  <label for="checkbox3" class="final-step-check-label">
                      I have read and agree to Automotive Online Ltd  <a href="{{route('termsAndConditions')}}" target="_blank">Terms & Conditions</a> and use of your personal information.
                      <a href="#">What we will do when you apply for finance</a>
                      <br/>
                      <br/>
                  </label>
                  <div class="float"></div>
                    <p><b>Contact Preferences</b></p>
                    <p>Please ensure your contact details are correct as we'll keep you up to date with the progress of your application by phone, email and SMS.</p>
                </div>
            <!--
            Email and SMS option
             <div class="col-sm-12 no-padding chkboxDiv">
                <div class="final-step-checks">
                        <input class="final-step-check" value='Yes' id="checkbox1" name="email" type="checkbox">
                        <label for="checkbox1" class="final-step-check-label" style="margin-right:15px">
                            Email
                        </label>

                        <input class="final-step-check" value='Yes' id="checkbox2" name="sms" type="checkbox">
                        <label for="checkbox2" class="final-step-check-label">
                            SMS
                        </label>
                </div>
                <div class="col-sm-10">&nbsp;</div>
            </div>
            Email and SMS option
          -->
            <br>
            <hr color="#eaeaea">
          <!-- <div class="apply-last-p">
                  <input class="final-step-check" id="checkbox3" name="marketingOptions" value='Yes' type="checkbox" style="margin-left: 4px">
                  <label for="checkbox3" class="final-step-check-label" style="margin-left: 0">
                    By ticking this box and submitting your application you confirm that:
                  </label>
              <div class="float"></div>

          </div>

                <div class="apply-last-p">
                    <p><i>You can opt out of any marketing at any time. For details, please refer to our <a href="/privacy-policy/" target="_blank">privacy policy</a>.</i></p>
                </div> -->

            </div>
                <div class="col-sm-12">
                <div class="col-sm-4 col-sm-offset-4">
                    <button type="submit" id="submitButton" name="submitForm" class="btn next action-button" style="width: 100%; padding: 0px;">
                        <!--i class="fa fa-check"></i-->
                        <img src="{{asset('public/images/apply_now_btn.png')}}" class="img-responsive" style="margin: auto">
                    </button>
                </div>
            </div>
        </fieldset>

    </form>

</div>

<!-------------------------REdirecting Section----------------------->

<div class="container-fluid redirectingBanner afterSubmitting">
    <div class="col-xs-12 mainContent">
      <div class="col-xs-12">
        <img src="{{asset('public/images/landing/redirecting_icon.png')}}" alt="Icon">

        <h2>We're taking you to our member's area where you can:</h2>
          <img src="{{asset('public/images/vehicle/checking.gif')}}" alt="loading">
        <div class="container">
         <div class="row">
             <div class="col-sm-12 no-padding ">
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                         <img src="{{asset('public/images/landing/redirectFind.png')}}" alt="Find Car">
                         <h3 class="text-center">Search for your new car</h3>
                         <h4>Search from over 100,000 cars to find the one for you.</h4>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                         <img src="{{asset('public/images/landing/redirectCheck.png')}}" alt="Check progress">
                         <h3 class="text-center">Check your progress</h3>
                         <h4>Get updates on your application and upload your supporting documents.</h4>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                         <img src="{{asset('public/images/landing/redirectChat.png')}}" alt="Find Car">
                         <h3 class="text-center">Chat with your adviser</h3>
                         <h4>Your personal adviser will be on hand to help with any questions.</h4>
                     </div>
                 </div>
             </div>
         </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid afterSubmittingEmail" style="display:none">
    <div class="col-sm-12">
      <div class="col-sm-8 col-sm-offset-2">
        <h3>Check your email to quickly verify your account</h3>
        <h4>From your details, we think you may have applied with us before. Simply Click on the email we have just
          sent you to verify your account. We will be in touch shortly to talk you through the next steps.
        </h4>
      </div>
    </div>
  </div>

<div class="container">
    <div class="info-apply-now-section">
        <div class="row">
            <div class="col-xs-12">
                <div class="row d-flex-center">
                    <div class="col-lg-6 col-md-8 col-xs-11">
                        <img src="{{asset('public/images/icon-info-apply-now.png')}}" class="icon-info-apply-now" alt="">
                        <p>
                           <strong>
                               Don’t worry, you can change your mind about the kind
                               <br/>
                               of vehicle you want at any time.
                           </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <input id="LID" type="hidden">






<!------------- Modal code -------------->

<div class="modal checkingModal" id="myModal" role="dialog"  data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-body">
                  <img class="beforeCheck" src="{{asset('public/images/vehicle/checking.gif')}}" alt="">
                  <img class="afterCheck afterImg" src="{{asset('public/images/vehicle/available.png')}}" alt="">
                  <p class="beforeCheck">Searching for loan programs in: </p>
                  <h3 class="afterCheck">Congratulations!</h3>
                  <p class="afterCheck">Loan programs are available in: </p>
                  <h2 id="cityName"></h2>
              </div>
          </div>

      </div>
  </div>

  <div class="modal checkingModal" id="lastModal" role="dialog"  data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header">
                        {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                        <h4 class="modal-title">Submitting Application</h4>
                </div>
              <div class="modal-body">
                  <h5>Application is currently being submitted. You will be redirected to our Members Area shortly.</h5>
                  <div class="progressLoad">
                    <div class="progress-bars progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                      {{-- <b>Submitting Application</b> --}}
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
	 $('#qcf_dob').mask("99/99/9999");
     $('#qcf_dob').keypress(function(){
    if($(this).val().substring(0,2) > 31 || $(this).val().substring(0,2) == "00") {
     // alert("Iregular Month Format");
     $('#sixForm').attr('disable','true');
     swal('Error','Invalid day','warning');
     return false;
    }
    else{
      $('#sixForm').attr('disable','false');
    }
     if($(this).val().substring(3,5) > 12 || $(this).val().substring(0,2) == "00") {
     // alert("Iregular Date Format");
     swal('Error','Invalid month','warning');
     $('#sixForm').attr('disable','true');
     return false;
   }else{
     $('#sixForm').attr('disable','false');
   }

      });
/* Mobile Number Verification*/
	$(document).ready(function(){
		$("#mobileNumber").keyup(function(){
			$(".feedback-phone").css("height", "40px");
			$(".feedback-phone").css("width", "40px");
			$(".feedback-phone").css("background-size", "25px");
			$(".feedback-phone").css("top", "29px");
		});
	});
/* Mobile Number Verification*/
</script>
@include('applyNow.applyNowJs')
@endsection

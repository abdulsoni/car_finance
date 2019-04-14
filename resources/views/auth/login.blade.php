@extends('layouts.master')
@section('title')
    Quickcarfinance.co.uk | Login
@endsection
@section('meta-description')

    Car Loan Application Online | Quick Car Finance
@stop
@section('meta-keywords')
    {{-- best beauty academy, skin care, hair style, hair cutting, spa, makeup specialists, nail art, best nail art --}}
@stop
@section('content')
<style>
    hr{
        border: 1px solid #efefef;
        height: 0px;
        margin: 0px;
    }
    .col-sm-5.signInLeft {
    background: #fafafa;
    }
</style>
<div class="container-fluid signInDiv">
    <div class="row d-flex-center">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 signInLeft">
            <div class="row d-flex-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                <div class="col-xs-12 login-heading">
                    <h1 class="welcome">Welcome</h1>
                    <h1 class="signin-lets">Lets get you signed in.</h1>
                </div>
                <div class="col-xs-12">
                    <div class="col-sm-2 col-xs-2 no-padding">
                        <div class="imgDiv">
                        <img src="{{asset('public/images/landing/track.png')}}" alt="Icons">
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-10 no-padding">
                        <div class="textDiv">
                        <p>Easily track your finance<br> application</p>
                        </div>
                    </div>
                    <!-- <div class="col-sm-2"></div> -->
                </div>


                <div class="col-xs-12">
                    <div class="col-sm-2 col-xs-2 no-padding">
                        <div class="imgDiv">
                            <img src="{{asset('public/images/landing/search.png')}}" alt="Icons">
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-10 no-padding">
                        <div class="textDiv">
                            <p>Search over 1,30,000 cars<br> from approved dealers.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="col-sm-2 col-xs-2 no-padding">
                        <div class="imgDiv">
                            <img src="{{asset('public/images/landing/chat.png')}}" alt="Icons">
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-10 no-padding">
                        <div class="textDiv">
                            <p>Chat with your own<br> personal adviser.</p>
                        </div>
                    </div>
                </div>

                </div>
                </div>

            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 signInRight">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

               <div class="col-sm-12">
                   <div class="col-sm-6 col-xs-6 no-padding">
                        <a onclick="showSignIn()">
                            <img id="signin" src="{{asset('public/images/landing/signin.png')}}" alt="">
                            <img id="signin1" src="{{asset('public/images/landing/signin1.png')}}" alt="">
                            Sign-In
                        </a>
                   </div>
                   <div class="col-sm-6 col-xs-6 no-padding">
                       <a onclick="showSignUp()">
                           <img id="register" src="{{asset('public/images/landing/register.png')}}" alt="">
                           <img id="register1" src="{{asset('public/images/landing/register1.png')}}" alt="">
                           Register
                       </a>
                   </div>
               </div>
                <div class="progLine col-sm-12"></div>
                <div class="progLine1 col-sm-12 no-padding">
                    <div class="progLineLeft col-sm-6 col-xs-6 no-padding"></div>
                    <div class="progLineRight col-sm-6 col-xs-6 no-padding"></div>
                </div>

                <div class="col-sm-12 no-padding" id="signinForm">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter your password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label class="checkboxLabel">Keep me Signed in
                                    <input type="checkbox" style="display:none;" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <a href={{ route('password.request') }}>Forgot password?</a>
                        </div>
                        <button type="submit" name="login" class="pageButton">SIGN IN</button>
                    </form>
                </div>

                <div class="col-sm-12 no-padding" id="signupForm">
                    <form method="post">
                        <div class="form-group">
                            <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Email address" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Application Ref. Number" class="form-control" name="password" required>
                        </div>
                        <button type="submit" name="register" class="pageButton">Register</button>
                    </form>
                </div>

                <div class="col-xs-12 signFooter">
                  <div class="row d-flex-center">
                      <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5">
                          <div class="secureIcon1">
                              <img src="{{asset('public/images/landing/ssl.png')}}" alt="" style="width: 100%;">
                              <!-- <div class="">
                                <h3>SECURE</h3>
                                <p>SSL ENCRYPTION</p>
                              </div> -->
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5">
                          <img src="{{asset('public/images/landing/google_review.png')}}" alt="" style="width: 100%;">
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('title')
    Car Loan Application Online | Find Fund Deliver
@endsection
@section('meta-description')
    Car Loan Application Online | Find Fund Deliver
@stop
@section('meta-keywords')
    {{-- best beauty academy, skin care, hair style, hair cutting, spa, makeup specialists, nail art, best nail art --}}
@stop

@section('content')<div class="container-fluid signInDiv">
    <div class="row">
        <div class="col-sm-5 signInLeft">
            <div class="row">
                <h1 class="welcome">Reset password.</h1>
                <h1>Choose a Password</h1>
                <div class="col-sm-12">
                    <div class="col-sm-3 col-xs-3 imgDiv">
                        <img src="{{asset('public/images/landing/track.png')}}" alt="Icons">
                    </div>

                    <div class="col-sm-9 col-xs-9 textDiv">
                        <p>Easily track your finance application</p>
                    </div>
                    <!-- <div class="col-sm-2"></div> -->
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3 col-xs-3 imgDiv">
                        <img src="{{asset('public/images/landing/search.png')}}" alt="Icons">
                    </div>
                    <div class="col-sm-9 col-xs-9 textDiv">
                        <p>Search over 1,30,000 cars from approved dealers.</p>
                    </div>
                    <!-- <div class="col-sm-2"></div> -->
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3 col-xs-3 imgDiv">
                        <img src="{{asset('public/images/landing/chat.png')}}" alt="Icons" style="width: 52px;">
                    </div>
                    <div class="col-sm-9 col-xs-9 textDiv">
                        <p>Chat with your own personal adviser.</p>
                    </div>
                    <!-- <div class="col-sm-2"></div> -->
                </div>
            </div>
        </div>
        <div class="col-sm-7 signInRight">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="col-sm-12 no-padding" id="signinForm">

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input type="email" value="{{ old('email') }}" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>
                        @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" placeholder="Current Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                    </div>
                    <button type="submit" name="reset" class="pageButton">{{ __('Reset Password') }}</button>
                </form>
                </div>

                <div class="col-sm-12 signFooter">
                    <div class="col-sm-12 col-xs-12">
                      <div class="secureIcon">
                         <img src="{{asset('public/images/landing/lockPng.png')}}" alt="">
                           <div class="">
                             <h3>SECURE</h3>
                             <p>SSL ENCRYPTION</p>
                           </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

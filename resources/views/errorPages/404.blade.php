@extends('layouts.masterNew')
@section('content')
<style>
    hr{
        border: 1px solid #efefef;
        height: 0px;
        margin: 0px;
    }
    .input-group-btn>.btn:active, .input-group-btn>.btn:focus, .input-group-btn>.btn:hover {
        outline:none;
    }
</style>



<!--Error Page Starts-->
<div class="error-page">

    <div class="container">
        <div class="row no-margin d-flex-center">

            <div class="col-xs-12 no-padding">

                <div class="error-page-inner">

                    <div class="row d-flex-center no-margin">

                        <div class="col-xs-12 no-padding">
                            <div class="error-page-title">
                                <h1 class="text-center">404</h1>
                            </div>
                            <div class="error-page-desc">
                                <p class="text-center">OOPS! FILE OR DIRECTORY NOT FOUND</p>
                            </div>
                            <div class="error-page-img text-center">
                                <img src="{{asset('public/images/error-img.png')}}" class="img-responsive" alt=""/>
                            </div>
                            <div class="error-page-bottom-desc">
                                <p class="text-center">
                                    It looks like the page you're looking for might have been removed, had it's name changed, or is temporarily unavailable.
                                    <br>
                                    <br>
                                    <span>We apologise for the inconvenience. Please find a list of helpful links below:</span>
                                </p>
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-9 col-xs-11 no-padding">
                            <div class="btn-error-apply-outer">
                                <div class="btn-error-apply text-center">
                                    <a href="#" class="text-center">APPLY NOW</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</div>
<!--Error Page Ends-->






<script type="text/javascript" src="{{asset('public/js/custom-select.js')}}"></script>

@endsection

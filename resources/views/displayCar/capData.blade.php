@extends('layouts.master')
@section('title')
    Quickcarfinance.co.uk | Display Car
@endsection
@section('meta-description')
    Car Loan Application Online | Quick Car Finance
@stop
@section('meta-keywords')
    {{-- best beauty academy, skin care, hair style, hair cutting, spa, makeup specialists, nail art, best nail art --}}
@stop

@section('content')
<style media="screen">
#Content{	border: 2px solid #17232E;	background-color: #17232E;	padding: 10px;}#HeaderLbl{ color: #17232E;}
#conditiona a
{
	font-weight: bold;
	font-size: 14px;
	color: #4a2f82;
}
#Options
{
	float: right;
}
#Options a
{
	font-weight: bold;
	font-size: 14px;
	color: #4a2f82;
}
#Options ul
{
	list-style-type: none;
}
#Options ul li
{
	float: left;
}
#Options ul li.last
{
	margin-left: 4px;
}
#Options ul li.last a
{
	padding-left: 4px;
	border-left: 1px solid #4A2F82;
}
#Logo
{
	float: left;
}
#Header
{
	clear: both;
	width: 100%;
	text-align: right;
	padding: 6px 0 2px 0;
}
#Header span
{
	font-weight: bold;
	font-size: 15px;
}
#Content ol
{
	margin-top: 0;
	font-size: 14px;
}
#Content ol li
{
	margin-top: 1px;
}
#Content ol li a
{
	color: #204288;
	font-weight: bold;
}
#Content ol li a:hover
{
	text-decoration: none;
}
#Content p
{
	margin-top: 0;
	font-size: 14px;
}
#Content table
{
	clear: both;
	margin-top: 10px;
	width: 100%;
	_width: 95%;
	border-bottom: 2px solid #b7b7b7;
}
#Content table th
{
	font-weight: bold;
	color: #FFFFFF;
	font-size: 0.8em;
	background: url(img/table_header_tile.gif) repeat-x;
	height: 26px;
	border-bottom: 1px solid #e6ead9;
}
#Content table th.col1
{
	text-align: left;
	padding-left: 4px;
	width: 60%;
}
#Content table th.col2
{
	width: 40%;
}
#Content table tr td
{
	background-color: #fff;
	font-size: 14px;
	padding: 3px;
}
#Content table tr td.col1
{
	border-left: 2px solid #b7b7b7;
}
#Content table tr td.col2
{
	border-right: 2px solid #b7b7b7;
	text-align: center;
	font-weight: bold;
}
#Content table tr.first td
{
	border-top: 2px solid #b7b7b7;
}
#Content table tr.alternate td
{
	background-color: #eee;
}
#Content p.top
{
	margin: 4px 0 0 6px;
}
#Content p.top a
{
	font-weight: bold;
	color: #a1c0ff;
	font-size: 0.9em;
}
#Content p.top a:hover
{
	text-decoration: none;
}

#Content #Head
{
	background-color: #fff;
	min-height: 170px;
	float:left;
	width:100%;
}
#Content #Head #Bookmarks
{
	float: left;
	margin-top: 10px;
}
#Content #Head #Photo
{
	float: right;
	margin: 10px 10px 0 0;
}
#Content #Head #Photo #Info
{
	font-size: 10px;
	text-align: center;
}

#Footer
{
	margin-top: 10px;
  color: cornsilk;
  font-size: 12px;
}
#Footer a, #Footer p
{
	font-size: 12px;
	color: cornsilk;
}


</style>
<div class="container">
    <div class="row">
      <div class="col-sm-12 no-padding1" id="capInfo">
      </div>
    </div>
</div>

<script type="text/javascript">
var urlDAta = window.location.href;
var capId = urlDAta.split('/')[4];
if( capId.indexOf('#') >= 0){
  capId = capId.split('#');
  capId = capId[0];
}

var proxy ="https://cors-anywhere.herokuapp.com/";
var capUrl = "http://www.capnetwork.co.uk/motability/lookup1.aspx";
var data = {
  "_xsrftoken":"XvPhaRGf",
  "Post_SubID":"77905",
  "Post_BorderCol":"17232E",
  "Post_FillCol":"17232E",
  "Post_Password":"Mota77905",
  "Post_Database":"CAR",
  "Post_iD":capId,
  "Post_LookupDate":"21/12/2018"
}
$.ajax({
  type: "POST",
  url:proxy+""+capUrl,
  data:data,
  beforeSend: function(request) {
    request.setRequestHeader("Accept", 'application/json');
  },
  success: function(response) {
    $('#capInfo').append(response);
    var imgsrc = $('#CarImage').attr('src');
    imgsrc = "http://www.capnetwork.co.uk/motability/"+imgsrc
     $('#CarImage').attr('src',imgsrc);
     $('#info>img').attr('src','{{asset('public/images/CAP.gif')}}');
    console.log(imgsrc);
    // console.log(response);
  }
});
</script>
@endsection

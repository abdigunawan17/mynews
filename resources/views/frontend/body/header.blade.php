<!DOCTYPE html>
 
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Simply News | Online New Portal </title>
 
<link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.gif') }}" type="image/x-icon">
 
  
<meta name="keywords" content="online newspaper, bangla news, news, bangla, newsportal">
<meta name="description" content="Popular News Paper of Bangladesh">

 <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}" />
 <link rel="stylesheet" href="{{ asset('frontend/assets/css/headstyle.css') }}" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css') }}" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 


 
<style>
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="wp-block-library-css" href="{{ asset('frontend/assets/css/style.min.css') }}" media="all"> 
<link rel="stylesheet" id="contact-form-7-css" href="{{ asset('frontend/assets/css/styles.css') }}" media="all">
<link rel="stylesheet" id="newsflash-style-css" href="{{ asset('frontend/assets/css/style.css') }}" media="all">
<link rel="stylesheet" id="common-themesbazar-css" href="{{ asset('frontend/assets/css/common-themesbazar.css') }}" media="all">
<link rel="stylesheet" id="newsflash-lineawesome-css" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}" media="all">
<link rel="stylesheet" id="newsflash-stellarnav-css" href="{{ asset('frontend/assets/css/stellarnav.css') }}" media="all">
<link rel="stylesheet" id="newsflash-jquery-css" href="{{ asset('frontend/assets/css/jquery-ui.css') }}" media="all">
<link rel="stylesheet" id="newsflash-magnific-css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" media="all">
<link rel="stylesheet" id="newsflash-carousel-css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" media="all">
<link rel="stylesheet" id="newsflash-responsive-css" href="{{ asset('frontend/assets/css/responsive.css') }}" media="all">
<link rel="stylesheet" id="newsflash-bootstrap-css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" media="all">
 
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<script charset="utf-8" src="{{ asset('frontend/assets/js/horizon_timeline.08c300ab95020b1109a05214ccb84dea.js') }}"></script></head>
<body class="home blog" oncontextmenu="return true" data-new-gr-c-s-check-loaded="14.1078.0" data-gr-ext-installed="">
 
<div class="main_website">

@php
	$cdate = new DateTime();
@endphp

<header class="themesbazar_header">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="date">
<i class="lar la-calendar"></i>
  {{ $cdate->format('l d-m-Y') }}
</div>
</div>
<div class="col-lg-4 col-md-4">
<form class="header-search" action=" " method="post">
<input type="text" alue="" name="s" placeholder=" Search Here " required="">
<button type="submit" value="Search"> <i class="las la-search"></i> </button>
</form>
</div>
<div class="col-lg-4 col-md-4">
	<div class="header-social">
		<ul>
			<li> <a href="https://www.facebook.com/" target="_blank" title="facebook"><i class="lab la-facebook-f"></i> </a> </li>
			<li><a href="https://twitter.com/" target="_blank" title="twitter"><i class="lab la-twitter"> </i> </a></li>  
			<li><a href="{{ route('login') }}"><b> Login </b></a> </li>
			<li> <a href="{{ route('register') }}"> <b>Register</b> </a> </li>
		</ul>
	</div>
</div>
</div>
</div>

<section class="logo-banner">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="logo">
<a href=" " title="NewsFlash">
<img src="{{ asset('frontend/assets/images/logo.png') }}" alt="NewsFlash" title="NewsFlash">
</a>
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="banner">
<a href=" " target="_blank">
 
</a>
</div>
</div>
</div>
</div>
</section>

</header>
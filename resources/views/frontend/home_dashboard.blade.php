
@include('frontend.body.header')

<div class="menu_section sticky" id="myHeader">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="mobileLogo">
 <a href=" " title="NewsFlash">
<img src="{{ asset('frontend/assets/images/footer_logo.gif') }}" alt="Logo" title="Logo">
</a>
</div>
<div class="stellarnav dark desktop"><a href="https://newssitedesign.com/newsflash/#" class="menu-toggle full"><span class="bars"><span></span><span></span><span></span></span> </a><ul id="menu-main-menu" class="menu"><li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89"><a href="https://newssitedesign.com/newsflash" aria-current="page"> <i class="fa-solid fa-house-user"></i>  Home</a></li>
<li id="menu-item-277" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-277"><a href=" ">International</a></li>
<li id="menu-item-291" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-291 has-sub"><a href=" ">Sports</a>
<ul class="sub-menu">
<li id="menu-item-294" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294"><a href=" ">Sub Sports</a></li>
<li id="menu-item-292" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-292"><a href=" ">Sub Sports</a></li>
<li id="menu-item-293" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-293"><a href=" ">Sub Sports</a></li>
<li id="menu-item-295" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-295"><a href=" ">Sub Sports</a></li>
 
</ul>
<a class="dd-toggle" href=" "><span class="icon-plus"></span></a></li>
<li id="menu-item-270" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-270"><a href=" ">Opinion</a></li>
<li id="menu-item-287" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-287"><a href=" ">Business</a></li>
<li id="menu-item-267" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-267"><a href=" ">Youth</a></li>
<li id="menu-item-274" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-274"><a href=" ">Entertainment</a></li>
<li id="menu-item-284" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-284"><a href=" ">Lifestyle</a></li>
<li id="menu-item-278" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-278"><a href=" ">EDUCATION  </a></li>
 
<li id="menu-item-301" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-301 has-sub"><a href=" ">SCI-TECH</a>
<ul class="sub-menu">
<li id="menu-item-269" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-269"><a href=" ">SCI-TECH</a></li>
<li id="menu-item-273" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-273"><a href=" ">SCI-TECH</a></li>
<li id="menu-item-275" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-275"><a href=" ">SCI-TECH</a></li>
 
 
 
</ul>
<a class="dd-toggle" href=" "><span class="icon-plus"></span></a></li>
</ul></div> </div>
</div>
</div>
</div>

<div class="top-scroll-section5">
<div class="container">
<div class="alert" role="alert">
<div class="scroll-section5">
<div class="row">
<div class="col-md-12 top_scroll2">
<div class="scroll5-left">
<div id="scroll5-left">
    
@include('frontend.body.breaking')
<div class="main-section" style="overflow: hidden;">
    @yield('main')
</div>

@include('frontend.body.footer')

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
                <div class="stellarnav dark desktop">
                    <a href="https://newssitedesign.com/newsflash/#" class="menu-toggle full">
                        <span class="bars"><span></span><span></span><span></span></span> 
                    </a>
                        <ul id="menu-main-menu" class="menu">
                            <li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89">
                                <a href="{{ url('/') }}" aria-current="page"> <i class="fa-solid fa-house-user"></i>  Home</a>
                            </li>
                            @php
                                $categories = App\Models\Category::orderBy('category_name', 'ASC')->limit(7)->get();
                            @endphp

                            

                            @foreach ($categories as $category)
                            <li id="menu-item-291" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-291 has-sub">
                                <a href="{{ url('news/category/'.category->id.'/'.$category->category_slug) }}">{{ $category->category_name }}</a>
                                @php
                                    $subcategories = App\Models\Subcategory::where('category_id', $category->id)->orderBy('subcategory_name', 'ASC')->get();
                                @endphp
                                <ul class="sub-menu">
                                    @foreach ($subcategories as $subcategory)
                                        <li id="menu-item-294" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294">
                                            <a href=" ">{{ $subcategory->subcategory_name }}</a>
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            @endforeach
                            
                            <li id="menu-item-277" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-277"><a href=" ">International</a></li>
                        </ul>

                    </ul>
                </div> 
            </div>
        </div>
    </div>
</div>


@include('frontend.body.breaking_news')
<div class="main-section" style="overflow: hidden;">
    @yield('main')
</div>

@include('frontend.body.footer')
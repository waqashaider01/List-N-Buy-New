@extends('frontend.layouts.main')
@section('main-container')



<div class="container-fluid mt-2 mb-2">
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid header_logo ">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{url('frontend/img/old-logo-blue 2.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse navbar_setting" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">

{{-- selcet box --}}

        <li class="me-2  mt-3 mt-lg-0">
              <select class="form-select form-select-lg select_option mb-3 mb-lg-0 " aria-label=".form-select-lg example">
                <option selected>All Categories</option>
                <option value="1">Automobiles</option>
                <option value="2">Motor Bike</option>
                <option value="3">Auto Parts</option>
                <option value="4">Junk Vehicles</option>
                <option value="5">Real Estate</option>
                <option value="6">Gen Mart</option>
                <option value="7">Jobs</option>
                <option value="8">Handy Man</option>
            </select>
        </li>




{{-- search box --}}


        <li>
            <div class="form-outline me-2 mb-3 mb-lg-0 search_section_div">
                <input type="search" id="form1" class="form-control search_section" placeholder="What ?" aria-label="Search-lg" />
            </div>
        </li>
        <li>
            <div class="form-outline me-2 mb-3 mb-lg-0 search_section_div">
                <input type="search" id="form2" class="form-control search_section" placeholder="Where ?" aria-label="Search-lg" />
            </div>
        </li>
       
        <li class="me-2">
            <button class="btn btn-block btn-primary nav_btn2 mb-3 mb-lg-0">
				<i class="fa fa-search"></i> Find
			</button>
        </li>
        <li class="nav-item d-flex me-2 mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#">
            <a href="#" class="btn nav_btn1 ">Post ad</a>
        </li>
        <li class="nav-item">
            <a href="/login" class="btn nav_btn2">Sign In</a>
        </li>
        
      </ul>


      {{-- lenguage dropdown --}}

        <div class="dropdown">
          <a class="btn dropdown-toggle leng_drop_down_btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-globe"></i>
          </a>

            <ul class="dropdown-menu leng_drop_down shadow" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item " href="#" title="English">
                <img class="flag_img" src="{{url('frontend\img\flag\1.png')}}" alt=""> English
              </a></li>
              <li><a class="dropdown-item" href="#" title="French">
                  <img class="flag_img" src="{{url('frontend\img\flag\2.png')}}" alt=""> Français
              </a></li>
              <li><a class="dropdown-item" href="#" title="Spanish">
                  <img class="flag_img" src="{{url('frontend\img\flag\3.png')}}" alt=""> Español
              </a></li>
              <li><a class="dropdown-item" href="#" title="Arabic">  
                  <img class="flag_img" src="{{url('frontend\img\flag\4.png')}}" alt=""> 
                العربية
              </a></li>
              <li><a class="dropdown-item" href="#" title="Portuguese">
                  <img class="flag_img" src="{{url('frontend\img\flag\5.png')}}" alt=""> Português
              </a></li>
              <li><a class="dropdown-item" href="#" title="German">
                  <img class="flag_img" src="{{url('frontend\img\flag\6.png')}}" alt=""> Deutsch
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Italian">
                  <img class="flag_img" src="{{url('frontend\img\flag\7.png')}}" alt=""> Italiano
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Turkish">
                  <img class="flag_img" src="{{url('frontend\img\flag\8.png')}}" alt=""> Türkçe
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Russian">
                  <img class="flag_img" src="{{url('frontend\img\flag\9.png')}}" alt=""> Русский
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Hindi">
                  <img class="flag_img" src="{{url('frontend\img\flag\10.png')}}" alt=""> हिन्दी
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Bengali">
                  <img class="flag_img" src="{{url('frontend\img\flag\11.png')}}" alt=""> বাংলা
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Simplified Chinese">
                  <img class="flag_img" src="{{url('frontend\img\flag\12.png')}}" alt=""> 简体中文
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Japanese">
                  <img class="flag_img" src="{{url('frontend\img\flag\13.png')}}" alt=""> 日本語
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Thai">
                  <img class="flag_img" src="{{url('frontend\img\flag\14.png')}}" alt=""> ไทย
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Romanian">
                  <img class="flag_img" src="{{url('frontend\img\flag\15.png')}}" alt=""> Română
                  </a></li>
              <li><a class="dropdown-item" href="#" title="Georgian">
                  <img class="flag_img" src="{{url('frontend\img\flag\16.png')}}" alt=""> ქართული
                  </a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
</div>





<div class="container-fluid mb-2">
    <div class="row">
        <div class="category_img_banner text-center">
            <h1 class="banner_heading mt-3 mb-4">Finding  Your Vehicles - With Ease!  </h1>
            <span class="banber_title"> #1 Choice For Car Buyers</span>
        </div>
        
    </div>
</div>



<div class="container-fluid">
    <div class="row flex-nowrap justify-content-center" style="background-color: #fefefe;">
        <div class="col-sm-2 d-none d-md-flex" style="white-space: nowrap;">
            <a href="" class="text_d_none">
                {{-- <i class="fa-solid fa-house-chimney-user"></i> --}}
                  <i class="fa-solid fa-house-chimney-user" style="color: #336699"></i>
            </a>
            <a href="" class="text_d_none">
                <span class="url_link_onpage"> / Automobiles</span>
            </a>
        </div>

        <div class="col-8 d-flex justify-content-center">
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
            <i class="fa-solid fa-car category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Automobiles</p>
            </div>
            </a>
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
             <i class="fa-solid fa-motorcycle category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Motor Bike</p>
            </div>
            </a>
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
           <i class="cat-icon fas fa-cogs category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Auto Parts</p>
            </div>
            </a>
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
           <i class="cat-icon fas fa-car-crash category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Junk Vehicles</p>
            </div>
            </a>
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
           <i class="cat-icon fas fa-home category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Real Estate</p>
            </div>
            </a>
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
           <i class="cat-icon fas fa-cart-plus category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Gen Mart</p>
            </div>
            </a>
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
           <i class="cat-icon fas fa-briefcase category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Jobs</p>
            </div>
            </a>
            <a href="" class="text_d_none category_icon_parent">
            <div class="category_icon_span">
           <i class="cat-icon fas fa-clipboard-list category_icon"></i>
            </div>
            <div>
                <p class="category_icon_name">Handy Man</p>
            </div>
            </a>
        </div>


        <div class="col-sm-2 d-none d-md-flex">

        </div>
    </div>



</div>


    <div class="container-fluid shadow">
        <div class="row p-2" style="border-bottom:1px solid rgb(220, 220, 220)">
    <div class="col">
        <div class="heading_bg_div">
            <h2 class="page-main-heading position-absolute">Premium Plus</h2>
        </div>
        
    </div>
    <div class="col-2">
        <select class="form-select form-select" aria-label=".form-select-sm example">
  <option selected>Sort by</option>
  <option value="1">Price : Low to High</option>
  <option value="2">Price : High to Low</option>
  <option value="3">Date</option>
  <option value="3">Rating</option>
</select>
    </div>
    </div>
        <div class="row mt-2">

        <div class="col-4 col-md-2 " style="background: #F8F8F8">
            <h5 class="mx-2 my-4 category1_heading">CATEGORIES</h5>
            <div class="side_navbar">

                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Vehicle  <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>
                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Property  <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>
                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Mobile Phones and Tablet  <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>
                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Motobikes <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>
                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Electronics  <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>
                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Vehicle Parts  <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>
                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Health and Beauty  <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>
                <div class="dropdown">
                <ul class="dropbtn d-flex align-items-center justify-content-between">Fashions  <i class="fa-solid fa-chevron-right side_nav_arrow"></i></ul>
                <li class="dropdown-content">
                    <a class="sub_menu" href="#">Cars</a>
                    <a class="sub_menu" href="#">Buses and Microbuses</a>
                    <a class="sub_menu" href="#">Trucks and Trailers</a>
                    <a class="sub_menu" href="#">Motorcycles</a>
                    <a class="sub_menu" href="#">Vehicle parts & Accessories</a>
                    <a class="sub_menu" href="#">Heavy Equipment</a>
                </li>
                </div>

              

            </div>
        </div>

            <div class="col-8 col-md-10 ">
                <div class="row">

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 c_width">
                        <div class="div item_list">
                            <div class="cornerRibbons bg-org d-flex">
				                <span class="ribbon-text" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear Title">Clear Title</span>
			                </div>
                            <div class="row">
                                <a href="">
                                <div class="col">
                                    <div class="add_image">
                                        <img class="category_images img-fluid" src="{{url('frontend\img\Automobile-premium-plus\1.jpg')}}" alt="">
                                        <span class="photo-count">
                                            <i class="fa fa-camera"></i> 12
                                        </span>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="row p-1">
                                <div class="col-12">
                                    <h5 class="add-title py-1 px-0">
                                        <a href="" class="text_d_none" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="2018 Mercedes Sprinter" >2018 Mercedes Sprinter</a>
                                    </h5>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <span class="product_price">
                                        $32,000
                                    </span>
                                <div class="ms-auto my-auto">
									<a class="btn btn-default btn-sm mb-0 make_favorite" id="1275">
										<i class="fas fa-bookmark"></i> <span>Save</span>
									</a>
								</div>
                                </div>
                                <div class="col-12">
                                    <div class="item-details d-flex justify-content-between">
                                        <div class="info-row reviews-widget ratings">
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                            <span class="far fa-star"></span>
                                        </div>
                                        <div class="div">
                                            <span class="rating-label">0 review</span>
                                        </div>
                                    </div>
			                    </div>
                             
                                    <div class="col">
                                        <div class=" c-bottom-details pt-2 px-0 d-flex">
                                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" title="Washington D.C." class="item-location" data-bs-original-title="Washington D.C.">
                                        <i class="bi bi-geo-alt"></i>
                                        Washington D.C.
                                    </div>
                                    <div class="ms-auto date">
                                        <i class="far fa-clock"></i> 19-Nov-2022
                                    </div>
                                </div>
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
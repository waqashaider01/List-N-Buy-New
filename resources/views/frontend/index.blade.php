@extends('frontend.layouts.main')
@section('main-container')
    

<div class="container">
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid header_logo mt-5">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{url('frontend/img/old-logo-blue 2.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar_setting" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        {{-- <li class="nav-item">
          <a class="nav-link nav_item" aria-current="page" href="#">ABOUT US</a>
        </li> --}}
        <li class="nav-item d-flex me-4 mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#">
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


<div class="container">
  <div class="row mt-5">
    <div class="col-md-4 col-xs-12 col-sm-6">
      <a href="" style="text-decoration: none">
        <div class="d-flex flex-column img_card_parent">
			    <div class="img_card">
						<img src="{{url('frontend\img\home\home1.jpg')}}" class="lazyload img-fluid" alt="Vehicles">
					</div>
					<h4 class="text-center py-4 m-0">
						Vehicles
					</h4>
				</div>
      </a>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-6 mb-5">
      <a href="{{url('/home_screen')}}" style="text-decoration: none">
        <div class="d-flex flex-column img_card_parent">
			    <div class="img_card">
						<img src="{{url('frontend\img\home\home2.png')}}" class="lazyload img-fluid" alt="Vehicles">
					</div>
					<h4 class="text-center py-4 m-0">
				  	Motobikes
					</h4>
				</div>
      </a>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-6 mb-5">
      <a href="" style="text-decoration: none">
        <div class="d-flex flex-column img_card_parent">
			    <div class="img_card">
						<img src="{{url('frontend\img\home\home3.png')}}" class="lazyload img-fluid" alt="Vehicles">
					</div>
					<h4 class="text-center py-4 m-0">
						Autoparts
					</h4>
				</div>
      </a>
    </div>
  
    <div class="col-md-4 col-xs-12 col-sm-6 mb-5">
      <a href="" style="text-decoration: none">
        <div class="d-flex flex-column img_card_parent">
			    <div class="img_card">
						<img src="{{url('frontend\img\home\home4.jpg')}}" class="lazyload img-fluid" alt="Vehicles">
					</div>
					<h4 class="text-center py-4 m-0">
						Junk Vehicles
					</h4>
				</div>
      </a>
    </div>
  
    <div class="col-md-4 col-xs-12 col-sm-6 mb-5">
      <a href="" style="text-decoration: none">
        <div class="d-flex flex-column img_card_parent">
			    <div class="img_card">
						<img src="{{url('frontend\img\home\home5.jpg')}}" class="lazyload img-fluid" alt="Vehicles">
					</div>
					<h4 class="text-center py-4 m-0">
						General Market
					</h4>
				</div>
      </a>
    </div>
  
    <div class="col-md-4 col-xs-12 col-sm-6 mb-5">
      <a href="" style="text-decoration: none">
        <div class="d-flex flex-column img_card_parent">
			    <div class="img_card">
						<img src="{{url('frontend\img\home\home6.1.png')}}" class="lazyload img-fluid" alt="Vehicles">
					</div>
					<h4 class="text-center py-4 m-0">
						Handyman
					</h4>
				</div>
      </a>
    </div>
  
  </div>
</div>


@endsection



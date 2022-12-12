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
    <div class="collapse navbar-collapse navbar_setting" id="navbarSupportedContent" style="position:relative">
      <ul class="navbar-nav mb-2 mb-lg-0">
       <li class="nav-item">
          <a class="nav-link nav_item" aria-current="page" href="#">ABOUT US</a>
        </li> 
        <li class="nav-item d-flex me-4 mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#">
            <a href="#" class="btn nav_btn1 ">Post ad</a>
        </li>
        <li class="nav-item">
            <a href="/login" class="btn nav_btn2">Sign In</a>
        </li>
        
      </ul>


      <!-- {{-- lenguage dropdown --}}

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
        </div> -->
      </div>
    </nav>
</div>


<div class="banner-container">

<div class="banner">
  
    <div class="contantabout mt-5">
    <h3>Simply put, <br> "Simplicity" is <br>
            our keyword</h3>
    </div>
    <div class="carimg">
        <img src="{{url('frontend\img\about\aboutbanner2.png')}}" alt="">
    </div>
</div>
</div>

 <div class="container-fluid aboutsecondbanner">
  <div class="row">
    <div class="col-md-6  col-lg-6" style="position: relative;">
    <img src="{{url('frontend\img\about\aboutimg.png')}}" alt=""  class="abouttextimg">
      
    <!-- <img src="{{url('frontend\img\about\aboutimg1.png')}}" alt=""  class="abouttextimg"> -->
    <!-- <img src="{{url('frontend\img\about\aboutdotted.png')}}" alt=""  class="abouttextimg1"> -->
    </div>
    <div class="col-md-6 mt-5 col-lg-6 ">
      <p class="abouttext">ABOUT US</p>
      <h3 class="abouthead">WHAT WE DO</h3>
<br>
    <p class="aboutparagraph">Listnbuy.com was born out of the desire to bring that smooth interaction of a well designed and communicative user's interface that transcends excellence in the transactions between the buyer and the sellers trading on our platform.   </p>
    <br>

    <p class="aboutparagraph">  Simply put, "Simplicity" is our keyword. Listnbuy™ provides the orderly entry and display of our consumers based merchandise or services, by providing the seller a simplified platform that makes it extremely easy to post their listings and publishing that same listing in a well characterized and displayed order that affords the buyers a true experience of web shopping. <br>
    </p>
    <br>
    <p class="aboutparagraph">
Unlike other web sites, Listnbuy.com prioritizes the values of its customers based experiences, by striving hard to interact with its customers via a feedback mechanism that is put in place to seriously address any and all true viable needs and concern that affects our web and application users.</p>

    </div>

  </div>
  <div class="row mt-5">
    <div class="col-md-12">
      <p class="aboutparagraph">In brainstorming our ideas to forester a true and satisfactory experience, Listnbuy.com has embarked on integrating a 10 to 15 seconds video capture of the sellers cinematographic representation of the listed merchandise, that allows the buyer to experience a first hand glimpse of a true and realistic view of the product prior to any contact or commitment with the seller</p>
      <p class="aboutparagraph">Our desired goal at Lisnbuy™ is to capture excellence and distribute that excellence around the globe, so that our customer base will populate that experienced joy of an international partnership in the Listnbuy™ brotherhood of acquiring and distribution.
      </p>
<p class="aboutparagraph"> Our team at Listnbuy™. is made up of truly minded international individuals that have invested their total and absolute commitments, expertise and dedication in making sure that we produce this web platform that will always be second to none. </p>
 <p class="aboutparagraph"> 
From our team at Listnbuy™., we say "Welcome" to a great experience of the E-commerce world of buying and selling. We are truly convinced that you will experience the true reality "About Us."</p>
    </div>
  </div>
 </div>


 




 
@endsection
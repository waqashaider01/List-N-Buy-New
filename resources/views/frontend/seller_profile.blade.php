@extends('frontend.layouts.main')
@section('main-container')

<div class="container mb-5">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid header_logo mt-5">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-md-5">
          <a class="" href="{{url('/')}}">
        <img src="{{url('frontend/img/old-logo-blue 2.png')}}" alt="">
         </a> 
          </div>
          <!-- <div class="col-md-5 ps-3 ms-5 aboutexternal">
          <a class="nav-link nav_item  " aria-current="page" href="#" style="float: left;">ABOUT US</a>
          </div> -->
        </div>
      </div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar_setting" id="navbarSupportedContent" style="position:relative">
    <ul class="navbar-nav mb-2 mb-lg-0 ">
    <li>
    <div class="row aboutintenal">
      <!-- <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
          <a class="nav-link nav_item  " aria-current="page" href="#" style="float: left;">ABOUT US</a>
          </div>
        </div>
      </div> -->
    </div>
    </li>
        <li class="nav-item d-flex   mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#">
        <div class="col-md-12 d-flex   mt-2 aboutheadicon">
            <a href="" class="icon pinterest">
            <span>Mail</span>
            <div class="category_icon_span">
           <i class="fa-regular fa-envelope category_icon"></i>
            </div>
            </a>
            <a href="" class="icon pinterest">
            <span>Announcement</span>
            <div class="category_icon_span">
            <img src="{{url('frontend\img\about\about_sound.png')}}" alt="" class="mt-2" style="width: 25px;">
            </div>
            </a>
            <a href="" class="icon pinterest">
            <span>Notification</span>
            <div class="category_icon_span">
            <i class="fa-regular fa-bell category_icon"></i>
            </div>
            </a>
            <a href="" class="icon pinterest">
            <span>User</span>
            <div class="category_icon_span">
            <i class="fa-regular fa-circle-user category_icon"></i>
            </div>
            </a>
        </div>
        </li>
        <li class="nav-item">
            <a href="/login" class="btn nav_btn2">SELL</a>
        </li>
      </ul>
      </div>
    </nav>
</div>



<div class="text-center">

 
<div>
<div class="profile-pic-div">
<img src="http://127.0.0.1:8000/frontend\img\buy_product\buy_profile.png" id="photo" class="rounded mx-auto d-block">
</div>

<p class="Profile-Name">William Mark</p>
<p class="icontext_buy">Joined 15 September 2021</p>
<p class="buysecondhead">Avg. Seller Rating</p>
<span>
<img src="{{url('frontend\img\buy_product\buy_star.png')}}" alt="" style="width:   15px;">
<img src="{{url('frontend\img\buy_product\buy_star.png')}}" alt="" style="width:   15px;">
<img src="{{url('frontend\img\buy_product\buy_star.png')}}" alt="" style="width:   15px;">
<img src="{{url('frontend\img\seller_profile\seller_profile_rating.png')}}" alt="" style="width:   15px;">
 
</span>

<p class="profile_seller_pragrapgh">Seller ratings are gotten from buyers who rate this seller directly</p>




</div>
</div>



<div class="container pt-5 pb-2 heading-bg position-relative my-1 ps-1 mb-3 d-flex border-b-n pb-2">
		<h2 class="page-main-heading position-absolute">Seller Ads</h2>
		<img class=" " src="{{url('frontend\img\buy_product\text_back_img_buy.png')}}" alt="" srcset="" style="width:110px;">

				  
        </div>
<div class="container buysection_card pt-5 pb-5">
 <div class="row position-relative">
 <div class="col-lg-4 col-md-4 ">
 <a href=""><img src="{{url('frontend\img\buy_product\car_buy_1.png')}}"   class="card_buy_img"  alt=""></a>
 </div>
 <div class="col-lg-4 col-md-4 mt-3">
 <p class="buysecondhead">Mercedes-Benz</p>
 <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>
 <div class="buy_btn_location">
  <div>
    <button class="card_buy_btn">Foreign Used</button>
  </div>
  <div>
    <button class="card_buy_btn card_buy_btnup">AutoEvolution</button>
  </div>
 </div>
</div>
<div class="col-lg-4 col-md-4 mt-3  post_buy_card">
<div>
<p class="card_buy_price">$43,847.00</p>
<br><br><br>
  </div>
</div>
 </div>
 <div class="row">
  <div class="col-md-4 col-sm-0 col-xs-0"></div>
  <div class="col-md-4 col-sm-6 col-xs-6">
  <div class="post_buy_card2">
  <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png" style="width: 20px;" alt=""></a>
  <span class="icontext_buy p-1">Washington,DC</span>
  </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-6">
  <div class="post_buy_card">
  <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png" style="width: 20px;" alt=""></a>
<span class="icontext_buy p-1">Posted 14 Jan</span>
</div>
  </div>
 </div>
</div>
<br>
<div class="container buysection_card pt-5 pb-5">
 <div class="row position-relative">
 <div class="col-lg-4 col-md-4 ">
 <a href=""><img src="{{url('frontend\img\buy_product\car_buy_2.png')}}"   class="card_buy_img"  alt=""></a>
 </div>
 <div class="col-lg-4 col-md-4 mt-3">
 <p class="buysecondhead">BMW X4</p>
 <p class="card_p_buy"> BMW X4 Pickup Truck Is the M2's Redneck Cousin </p>
 <div class="buy_btn_location">
  <div>
    <button class="card_buy_btn">New</button>
  </div>
  <div>
    <button class="card_buy_btn card_buy_btnup">AutoEvolution</button>
  </div>
 </div>


</div>
<div class="col-lg-4 col-md-4 mt-3  post_buy_card">
<div>
<p class="card_buy_price">$43,847.00</p>
<br><br><br>


  </div>


  
</div>




 </div>

 <div class="row">
  <div class="col-md-4 col-sm-0 col-xs-0"></div>
  <div class="col-md-4 col-sm-6 col-xs-6">
  <div class="post_buy_card2">
  <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png" style="width: 20px;" alt=""></a>

  <span class="icontext_buy p-1">Lagos, Ipaja</span>
 
  </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-6">
  <div class="post_buy_card">
  <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png" style="width: 20px;" alt=""></a>
<span class="icontext_buy p-1">Posted 12 July</span>
</div>
 
  </div>
 </div>
</div>
<br>



<div class="container buysection_card pt-5 pb-5">
 <div class="row position-relative">
 <div class="col-lg-4 col-md-4 ">
 <a href=""><img src="{{url('frontend\img\buy_product\car_buy_3.png')}}"   class="card_buy_img"  alt=""></a>

 </div>
 <div class="col-lg-4 col-md-4 mt-3">
 <p class="buysecondhead">Toyota Lineup</p>
 <p class="card_p_buy">Toyota Lineup - Latest Models & Discontinued Models</p>
 <div class="buy_btn_location">
  <div>
    <button class="card_buy_btn">Foreign Used</button>
  </div>
  <div>
    <button class="card_buy_btn card_buy_btnup">AutoEvolution</button>
  </div>
 </div>
</div>
<div class="col-lg-4 col-md-4 mt-3  post_buy_card">
<div>
<p class="card_buy_price">$20,025</p>
<br><br><br>
  </div>
</div>
 </div>

 <div class="row">
  <div class="col-md-4 col-sm-0 col-xs-0"></div>
  <div class="col-md-4 col-sm-6 col-xs-6">
  <div class="post_buy_card2">
  <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png" style="width: 20px;" alt=""></a>

  <span class="icontext_buy p-1">Lagos, Ikeja</span>
 
  </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-6">
  <div class="post_buy_card">
  <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png" style="width: 20px;" alt=""></a>
<span class="icontext_buy p-1">Posted 12 July</span>
</div>
 
  </div>
 </div>
</div>
<!-- Second Card end  -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<!-- Third Card End  -->


@endsection















<!-- Slideshow container -->

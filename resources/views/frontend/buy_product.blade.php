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
<!-- ###############Search And Logo Section Start ############ -->
<!-- <div class="container-fluid buy_header">
    <div class="container">

    <div class="row pt-5 pb-5">
    
    <div class="col-md-6">

    <a class="" href="{{url('/')}}">
  <img src="{{url('frontend/img/old-logo-blue 2.png')}}" alt="" style="width: 150px;">
</a> 
    </div>
    <div class="col-md-6">
    <form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit">Search</button>
</form>
    </div>
  </div>
    </div>
</div> -->
<!-- ###############Search And Logo Section  End  ############ -->



 
<div class="container buysection2">
 <div class="row pt-5">
  <div class="col-md-6 col-lg-4  col-sm-12">
   <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 ">
 <a href="" class="buylink"><p>All</p></a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
    <a href="" class="buylink"><p>Exterior</p></a>
      
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
   
    <a href="" class="buylink"><p>Interior</p></a>
     
      
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
      <a href="" class="buylink"><p>Videos</p></a>
  
      
      </div>
   </div>
  </div>
  <div class="col-d-8">

  </div>
 </div>
<div class="row">

    <div class="col-md-6" >

    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides">
      <div class="counter">1/4</div>
      <img src="{{url('frontend\img\buy_product\buy_slider3.png')}}" id="main" >
       
    </div>
  
    <div class="mySlides">
      <div class="counter">2/4</div>
      <img  src="{{url('frontend\img\buy_product\buy_slider1.png')}}"  id="main">
     
    </div>
  
    <div class="mySlides">
      <div class="counter">3/4</div>
      <img   src="{{url('frontend\img\buy_product\buy_slider.png')}}" id="main">
    </div>
    <div class="mySlides">
      <div  class="counter">4/4</div>
      <img   src="{{url('frontend\img\buy_product\buy_slider2.png')}}" id="main">
    </div>
  
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div   class="row pb-3">
    <div class="col-lg-3 col-md-6 col-sm-3 " >
    <div class="dot" onclick="currentSlide(1)"><img  src="{{url('frontend\img\buy_product\buy_slider3.png')}}" class="sliderimg"></div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-3 col-xs-3">

    <div class="dot" onclick="currentSlide(2)"><img src="{{url('frontend\img\buy_product\buy_slider1.png')}}" class="sliderimg"></div>
   
    </div>
    <div class="col-lg-3 col-md-6 col-sm-3">

     
    <div class="dot" onclick="currentSlide(3)"><img  src="{{url('frontend\img\buy_product\buy_slider.png')}}" class="sliderimg"></div>
   
    </div>
    <div class="col-lg-3 col-md-6 col-sm-3 ">

    
    <div class="dot" onclick="currentSlide(4)"><img  src="{{url('frontend\img\buy_product\buy_slider2.png')}}" class="sliderimg"></div>
    </div>
    
  
    
  




  </div>

<script>
    let slideIndex = 1;
showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}
// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
 
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>



<div class="pt-4 d-flex justify-content-between">
  <div>
<p class="buysecondhead">  2020 Toyota Highlander</p>
  </div>
  <div>
  <a href="" ><img src="{{url('frontend\img\buy_product\download_buy.png')}}" style="width: 40px;" alt=""></a>
     
  </div>

</div>
<div class="pt-4 d-flex justify-content-between">
  <div>


<a href="" ><img src="{{url('frontend\img\buy_product\location_buy.png')}}" style="width: 20px;" alt=""></a>
<span class="icontext_buy p-sm-1">Washington,DC</span>
<span class="ps-5">
<a href="" ><img src="{{url('frontend\img\buy_product\time_buy.png')}}" style="width: 20px;" alt=""></a>
<span class="icontext_buy p-sm-1">Posted 2 hrs ago</span>
 

</span> 
</div>
  <div>
  <a href="" ><img src="{{url('frontend\img\buy_product\eye_buy.png')}}" style="width: 20px;" alt=""></a>
<span class="icontext_buy p-sm-1">04 Veiws</span>
 
  </div>
  
  

</div>


    </div>
    <div class="col-md-6 pt-3">
      <div class=" d-flex justify-content-center">

     
<div>
  
<p class="buysecondhead pt-2">2020 Toyota Highlander</p>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-6 pb-2">
                                 <div class=" d-flex justify-content-left buy_product_widget">
                                     <div >
                                  
                                        <img src="{{url('frontend\img\buy_product\buy_star.png')}}" alt="" style="width:   15px;"> 
                                        <img src="{{url('frontend\img\buy_product\buy_star.png')}}" alt="" style="width:   15px;"> 
                                        <img src="{{url('frontend\img\buy_product\buy_star.png')}}" alt="" style="width:   15px;"> 
                                        <img src="{{url('frontend\img\buy_product\buy_star.png')}}" alt="" style="width:   15px;"> 
                                        
                                       </div>
                                     <div class="div">
                                         <span class="rating-label-buy  ps-3">04 review(s)</span>
                                     </div>
                                 </div>
                       </div>
</div>
<p class="buy_doller">$27345</p>
 <p class="buysecondhead">Current Location: Washington, DC</p>


 <button type="button" class="btn btn-primary btn-lg   buy_product_btn">Make In Offer</button>
 <br> <br>
 <button type="button" class="btn  btn-lg   buy_product_btn_review">Post a Review</button>

<!-- Navabar Tab  start -->
<ul class="nav nav-tabs itemsDetailsTabs" id="itemsDetailsTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="item-description-tab" data-bs-toggle="tab" data-bs-target="#item-description" role="tab" aria-controls="item-description" aria-selected="true">
                                    <h4>Description</h4>
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="item-details-tab" data-bs-toggle="tab" data-bs-target="#item-details" role="tab" aria-controls="item-details" aria-selected="true">
                                    <h4>Features</h4>
                                </button>
                            </li>
                                                            
                                                    </ul>
<!-- Navbar Tab End  -->


<div>

</div>


</div>
</div>

<hr>
<div class="row">
<div class="col-md-12 pt1">
      <div class=" d-flex justify-content-center">

     
<div>
  
<p class="buy_profile_text">Sold By</p>
 
<div class="profile-pic-div">
  <img src="{{url('frontend\img\buy_product\buy_profile.png')}}" id="photo"  class="rounded mx-auto d-block">
</div>

 <p class="Profile-Name">William Mark</p>
 
 

 <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">View Profile</button>
  
 <div class="pt-3 pb-3 px-5">
 <span class="buysecondhead">SHARE</span>
  <a href="" ><img src="{{url('frontend\img\buy_product\twitter_buy.png')}}" style="width: 30px;" alt=""></a>
  <a href="" ><img src="{{url('frontend\img\buy_product\facebook_buy.png')}}" style="width: 30px;" alt=""></a>
  <a href="" ><img src="{{url('frontend\img\buy_product\whatsapp_buy.png')}}" style="width: 30px;" alt=""></a>

 </div>
 <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">XXXXXXXXXX</button>
 <br>  <br>
 <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Start Chat</button>
 <br>  <br>
 <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Contact Seller</button>
 <br>  <br>
 <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Review Post</button>
 <br>  <br>
 <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Repost</button>
 <br>  <br>
 <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Ban the user</button>
 <br>  <br>
 
 

<div>

</div>


</div>
</div>

</div>

</div>
</div>
</div>
</div>


<div class="container">
  
 <h5 class="pt-5 pb-5 Similar_ads_buy" style="z-index: 1000;"><span> <img src="{{url('frontend\img\buy_product\text_back_img_buy.png')}}" alt="" style="width: 90px; position:relative;left:7%"></span> Similar Ads </h4>

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


@endsection















<!-- Slideshow container -->

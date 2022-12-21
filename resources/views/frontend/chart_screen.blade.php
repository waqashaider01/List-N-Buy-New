<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listnbuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('frontend/css/about.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/buyproduct.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/chartscreen.css')}}">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

 
  </head>
  <body>
  



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

<div class="container pb-5">
 <div class="container_chart">
 <div class="chat_name px-4">
  
   <div>
   <div class="d-flex" >
     <div>
     <img src="{{url('frontend\img\chart_screen\profile_chart.png')}}" alt="" style="width:50px">

     </div>
     <div>
    <p  class="chart_profile_name pt-3 px-3">Erilich Bachman</p>
     </div>
    </div>
   </div>
    <div>
   <a href="">  <img src="{{url('frontend\img\chart_screen\chart_close.png')}}" alt="" style="width:50px">
</a>
    <!-- <p  class="chart_profile_name pt-3 px-3">Erilich Bachman</p> -->
    </div>
 
  

  

 </div>
 <div class="row">
  <div class="col-md-12 mt-5 pt-5"></div>
 </div>
 <div class="row px-4 pt-5 mt-5 pb-5" style="position: relative;" >
  <div class="col-md-12">
<div class="chart_message">
  <p class="p-3 chart_profile_name">Lorem ipsum dolor sit amet, <br>  consectetur adipiscing elit. Tellus.</p>

</div>
  <img src="{{url('frontend\img\chart_screen\profile_chart.png')}}" alt="" style="width:50px">
  <p class="chart_profile_name">07:01</p>
  </div>
       
 

    </div>
 <div class="row " style="position: relative;">
  <div class="col-md-6">

  </div>
  <div class="col-md-6  px-4 pt-5 pb-5 d-flex justify-content-end">
  <div>
  <div class="chart_message_second">
  <p class="p-3 chart_profile_name">Lorem ipsum dolor sit <br> amet, consectetur </p>

</div>
  <img src="{{url('frontend\img\chart_screen\second_person_profile.png')}}" alt="" style="width:50px">
  <p class="chart_profile_name">07:01</p>
  </div>
  </div>
 </div>


 <div class="row px-4   mt-5 pb-5" style="position: relative;" >
  <div class="col-md-12">
<div class="chart_message">
  <p class="p-3 chart_profile_name">Lorem ipsum</p>

</div>
  <img src="{{url('frontend\img\chart_screen\profile_chart.png')}}" alt="" style="width:50px">
  <p class="chart_profile_name">07:01</p>
  </div>
       
 

    </div>
 
       
 

    </div>


    <div class="profile_chat_part">

<div class="d-flex pt-3 pb-3 chat_btn justify-content-between justify-content-sm-center">
  <button type="button" class="btn btn-outline-primary    ">Call Me</button>
  <button type="button" class="btn btn-outline-primary   mx-3">Last Price</button>
  <button type="button" class="btn btn-outline-primary d-none   d-md-block mx-3">Is it Available</button>
  <button type="button" class="btn btn-outline-primary  d-none    d-md-block mx-3">Hello Erilich How can i get this</button>
  <button type="button" class="btn btn-outline-primary d-none d-sm-block mx-3">Is it Available</button>

  


</div>

   <div class="chat_left_right ">
   <div class="d-flex justify-content-between">
    <div>
  <div class="d-flex pt-3 pb-3 ">
    <div>
    <img src="{{url('frontend\img\chart_screen\profile_chart.png')}}" alt="" style="width:50px">

    </div>
    <div>
    <input type="text" placeholder="Type your message here..." class="input_chat">
    </div>
  </div>
    </div>
    <div class="pt-3 pb-3">
   <div class="d-flex chat_icons">
    <div class="img_send_chart pt-2">
    <a href=""><img src="{{url('frontend\img\chart_screen\chart_mic.png')}}" alt="" style="width:40px">
    </a>
  </div>
    <div class="image_send_mic">
    <a href="#"><img src="{{url('frontend\img\chart_screen\chart_send.png')}}" alt="" style="width:50px">
</a>
    </div>

   </div>

    </div>

   </div>

   </div>
    </div>


 </div>

 

</div>


 
  
</body>
</html>

 

 












<!-- Slideshow container -->

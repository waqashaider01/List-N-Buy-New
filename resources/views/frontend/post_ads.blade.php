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
 

<!--########### Navbar End ######### -->

 
<div class="container pb-5">
 <div class="container_chart px-4">
 
 <div class="d-flex justify-content-between pt-3">
 <div>
    <a href="" class="back_post_ads"><span> <i class="bi bi-arrow-left px-2"></i>Back</span></a>
 </div>
 <div>
 <p class="post_ads_title">POST AD</p>
 </div>
 <div>
    <a href="" class="clear_btn_ads">clear</a>
 </div>
 </div>
 <div class="d-flex justify-content-between pt-3 ads_btn">
 <div>
 <button type="button" class="btn btn-outline-primary btn-lg">Step1: About Ad  </button>
 </div>
 <div>
 <button type="button" class="btn btn-primary btn-lg setp_btn_ads">Step 2: Ad Details</button>
 </div>
 </div>


 

 <form action="" class="pt-5">

   <!-- Two text Fiedls  start-->

    <div class="row d-flex justify-content-between">
        <div class="col-md-4 ">
            <label for="" class="ads_lable">
            Make
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected>Category</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

        </div>
        <div class="col-md-4 ">
        <label for="" class="ads_lable">
            Make
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected  >Model</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
        </div>
    </div>

    <!-- Two Text Fields End  -->
      <!-- Two text Fiedls  start-->

      <div class="row d-flex justify-content-between">
        <div class="col-md-4 ">
            <label for="" class="ads_lable">
            Year of Manufacture
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected>year</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

        </div>
        <div class="col-md-4 ">
        <label for="" class="ads_lable">
           Color
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected  >color</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
        </div>
    </div>

    <!-- Two Text Fields End  -->
          <!-- Two text Fiedls  start-->

          <div class="row d-flex justify-content-between">
        <div class="col-md-4 ">
            <label for="" class="ads_lable">
            Condition
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected>Condition</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

        </div>
        <div class="col-md-4 ">
        <label for="" class="ads_lable">
        Title Status
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected  >Status</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
        </div>
    </div>

    <!-- Two Text Fields End  -->
              <!-- Two text Fiedls  start-->

              <div class="row d-flex justify-content-between">
        <div class="col-md-4 ">
            <label for="" class="ads_lable">
            Body Type
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected>Body Type</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

        </div>
        <div class="col-md-4 ">
        <label for="" class="ads_lable">
        Seats   
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected  >Seats</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
        </div>
    </div>

    <!-- Two Text Fields End  -->
                  <!-- Two text Fiedls  start-->

                  <div class="row d-flex justify-content-between">
        <div class="col-md-4 ">
            <label for="" class="ads_lable">
            Fuel
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected>Fuel</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

        </div>
        <div class="col-md-4 ">
        <label for="" class="ads_lable">
        Engine Size     
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected  >Engine Size</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
        </div>
    </div>

    <!-- Two Text Fields End  -->

                      <!-- Two text Fiedls  start-->

                      <div class="row d-flex justify-content-between">
        <div class="col-md-4 ">
            <label for="" class="ads_lable">
            Drivetrain
            </label>
            <select class="form-select select_bx_ads" aria-label="Default select example">
  <option selected>Drivetrain</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

        </div>
        <div class="col-md-4 ">
        <label for="" class="ads_lable">
        Registered Car    
            </label>
            <br>
            <input type="checkbox"> <span class="ps-2">Yes</span>
            <br>
            <input type="checkbox"> <span class="ps-2">No</span>
        </div>
    </div>

    <!-- Two Text Fields End  -->
    
                      <!-- Two text Fiedls  start-->

                      <div class="row d-flex justify-content-between">
        <div class="col-md-8 ">
            <label for="" class="ads_lable">
            Description
            </label>
            <br>
            
          <textarea name="" id="" cols="115" rows="30" class="select_bx_ads" placeholder="  Description"></textarea>

        </div>
       
    </div>

    <!-- Two Text Fields End  -->

                  <!-- Two text Fiedls  start-->

                  <div class="row d-flex justify-content-between">
        <div class="col-md-4 ">
            <label for="" class="ads_lable">
        Name
            </label>   
            <br> 
         <input type="text" placeholder="Name">

        </div>
        <div class="col-md-4 ">
        <label for="" class="ads_lable">
        Phone Number   
            </label>
            <br>
           
            
            <input type="number" placeholder=" Phone Number ">

        </div>
    </div>

    <!-- Two Text Fields End  -->
                      <!-- Two text Fiedls  start-->

                      <div class="row r">
        <div class="col-md-12 d-flex justify-content-center  pt-5 pb-5">
        <button type="button" class="btn btn-primary btn-lg btn-block" style="width: 300px;">Continue</button>
        </div>
       
    </div>

    <!-- Two Text Fields End  -->


 </form>

 
 
 
 
       
 

    </div>
 </div>

 

</div>



 

@endsection















<!-- Slideshow container -->

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
         <button type="button" class="btn btn-outline-primary btn-lg bt_sz">Step1: About Ad  </button>
         </div>
         <div>
         <button type="button" class="btn btn-primary btn-lg setp_btn_ads bt_sz">Step 2: Ad Details</button>
         </div>
         </div>
        
        
         
        
         <form action="" class="pt-5">
        
           <!-- Two text Fiedls  start-->
        
            <div class="row d-flex justify-content-between">
                <div class="col-md-4 ">
                    <label for="" class="ads_lable">
                    Make
                    </label>
                    <div class="custom-select post_select_option"  >
                        <select>
                          <option value="0">Category</option>
                          <option value="1">Honda</option>
                          <option value="2">Lexus</option>
                          <option value="3">Mercedes Benz</option>
                          <option value="4">Toyota</option>
                          <option value="5">Acura</option>
                          <option value="6">Alfa Romeo</option>
                          <option value="7">Ford</option>
                          <option value="8">Audi</option>
                          <option value="9">Bentley</option>
                          
                        </select>
                      </div>
                
                </div>
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                    Model
                    </label>
                    <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Model</option>
                          <option value="1">80</option>
                          <option value="2">A4</option>
                          <option value="3">A5</option>
                          <option value="4">100</option>
                          <option value="5">200</option>
                          <option value="6">Q5</option>
                          <option value="7">Ford</option>
                          <option value="8">Q7</option>
                          <option value="9">4000</option>
                          
                        </select>
                      </div>
                </div>
            </div>
        
            <!-- Two Text Fields End  -->
              <!-- Two text Fiedls  start-->
        
              <div class="row d-flex justify-content-between">
                <div class="col-md-4 ">
                    <label for="" class="ads_lable">
                    Year of Manufacture
                    </label>
                    <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Year</option>
                          <option value="1">2021</option>
                          <option value="2">2020</option>
                          <option value="3">2019</option>
                          <option value="4">2022</option>
                          <option value="5">2001</option>
                          <option value="6">2013</option>
                          <option value="7">1991</option>
                          <option value="8">2012</option>
                          <option value="9">2018</option>
                          
                        </select>
                      </div>
        
                </div>
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                   Color
                    </label>
                    <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Color</option>
                          <option value="1">Black</option>
                          <option value="2">Red</option>
                          <option value="3">Silver</option>
                          <option value="4">Gray</option>
                          <option value="5">White</option>
                          <option value="6">Blue</option>
                          <option value="7">Brown</option>
                          <option value="8">Burgandy</option>
                          <option value="9">Green</option>
                          
                        </select>
                      </div>
                </div>
            </div>
        
            <!-- Two Text Fields End  -->
                  <!-- Two text Fiedls  start-->
        
                  <div class="row d-flex justify-content-between">
                <div class="col-md-4 ">
                    <label for="" class="ads_lable">
                    Condition
                    </label>
                    <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Condition</option>
                          <option value="1">Brand New</option>
                          <option value="3">Foreign Used</option>
                          <option value="2">Nigeria Used</option>
                          
                        </select>
                      </div>
        
                </div>
                
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                    Mileage(km)
                
                    </label>
                    <div >
                        <input  class="post_select_option_input" type="text"  placeholder="Mileage" >
                      </div>
                </div>
            </div>
        
            <!-- Two Text Fields End  -->
             <!-- Two text Fiedls  start-->
        
             <div class="row d-flex justify-content-between">
                <div class="col-md-4 ">
                    <label for="" class="ads_lable">
                    Transmission
                    </label>
                    <div class="custom-select post_select_option" >
                        <select>
                            <option value="0">Transmission</option >
                            <option value="1">TMT</option>
                            <option value="2">Automatic</option>
                            <option value="3">Manual</option>
                            <option value="4">CVT</option>
                        </select>
                      </div>
        
                </div>
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                Title Status   
                    </label>
                     <div class="custom-select post_select_option">
                        <select>
                            <option value="0">Status</option>
                            <option value="1">Clean</option>
                            <option value="2">Salvage</option>
                            <option value="3">Rebuilt</option>
                            <option value="4">Missing</option>
                            
                          </select>
                      </div>
                </div>
            </div>
        
            <!-- Two Text Fields End  -->
                      <!-- Two text Fiedls  start-->
        
                      <div class="row d-flex justify-content-between">
                <div class="col-md-4 ">
                    <label for="" class="ads_lable">
                    Body Type
                    </label>
                    <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Body Type</option>
                          <option value="1">Convertible</option>
                            <option value="2">Coupe</option>
                         <option value="3">Hatchback</option>
                            <option value="4">Sedan</option>
                       <option value="5">SUV</option>
                            <option value="6">SUV2020</option>
                            <option value="7">Truck</option>
                        <option value="8">Wagon</option>
                        <option value="9">Van/Minivan</option>
                        </select>
                      </div>
        
                </div>
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                Seats   
                    </label>
                     <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Select car</option>
                          <option value="1">Audi</option>
                          <option value="2">BMW</option>
                          <option value="3">Citroen</option>
                          <option value="4">Ford</option>
                          <option value="5">Honda</option>
                          <option value="6">Jaguar</option>
                          <option value="7">Land Rover</option>
                          <option value="8">Mercedes</option>
                          <option value="9">Mini</option>
                          <option value="10">Nissan</option>
                          <option value="11">Toyota</option>
                          <option value="12">Volvo</option>
                        </select>
                      </div>
                </div>
            </div>
        
            <!-- Two Text Fields End  -->
                          <!-- Two text Fiedls  start-->
        
                          <div class="row d-flex justify-content-between">
                <div class="col-md-4 ">
                    <label for="" class="ads_lable">
                    Fuel
                    </label>
                    <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Fuel</option>
                          <option value="1">Petrol</option>
                          <option value="2">Hybrid</option>
<option value="3">Electr</option>
<option value="4">Diesel</option>
<option value="5">CNG</option>
                        </select>
                      </div>
        
                </div>
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                Engine Size     
                    </label>
                    <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Engine Size</option>
                          <option value="1">8400 cc</option>
<option value="2">6600 cc</option>
<option value="3">7800 cc</option>
<option value="4">6300 cc</option>
<option value="5">6200 cc</option>
<option value="6">6100 cc</option>
<option value="7">6800 cc</option>
<option value="8">5300 cc</option>
<option value="9">6700 cc</option>

                        </select>
                      </div>
                </div>
            </div>
        
            <!-- Two Text Fields End  -->
        
                              <!-- Two text Fiedls  start-->
        
                              <div class="row d-flex justify-content-between">
                <div class="col-md-4 ">
                    <label for="" class="ads_lable">
                    Drivetrain
                    </label>
                     <div class="custom-select post_select_option">
                        <select>
                          <option value="0">Drivetrain</option>
                          <option value="1">FWD</option>
                          <option value="2">RWD</option>
                          <option value="3">4WD</option>
                          <option value="4">2WD</option>
                        </select>
                      </div>
        
                </div>
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                Registered Car    
                    </label>
                    <br>
                    <input type="checkbox"  class="check_box_size"> <span class="ps-2 yes_no">Yes</span>
                     <br>
                    <input type="checkbox"  class="check_box_size mt-3"> <span class="ps-2 yes_no">No</span>
                </div>
            </div>
        
            <!-- Two Text Fields End  -->
            
                              <!-- Two text Fiedls  start-->
        
                              <div class="row d-flex justify-content-between">
                <div class="col-md-12 ">
                   <div class="d-flex justify-content-between">
                    <div>
                      <label for="" class="ads_lable" style="color: #3A456E;">
                        Description
                        </label>
                    </div>
                    <div>
                      <p style="color: #838EA1;">0/1000</p>
                    </div>
                   </div>
                 
                    
                  <textarea name="" id="" class="text_area_play_ads"  cols="10" rows="10" placeholder="Description"></textarea>
        
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
                 <input type="text" placeholder="Name" class="post_select_option_input">
        
                </div>
                <div class="col-md-4 ">
                <label for="" class="ads_lable">
                Phone Number   
                    </label>
                    <br>
                   
                    
                    <input type="number" placeholder="Phone Number " class="post_select_option_input">
        
                </div>
            </div>
            <div  class="row d-flex justify-content-between">
              <div class="col-md-4 ">
                <label for="" class="ads_lable">
            Price
                </label>   
                <br> 
             <input type="text" placeholder="Price" class="post_select_option_input">
    
            </div>
            
            </div>
            <div class="row d-flex justify-content-between mt-3 ">
              <div class="col-md-4  ">
                <input type="checkbox" class="check_box_size"> <span class="ps-2">Negotiable</span>
              </div>
            </div>
        
            <!-- Two Text Fields End  -->
                              <!-- Two text Fiedls  start-->
        
                              <div class="row r">
                <div class="col-md-12 d-flex justify-content-center  pt-5 pb-5">
                <button type="button" class="btn btn-primary btn-lg btn-block" style="width: 400px;">Continue</button>
                </div>
               
            </div>
            
        
            <!-- Two Text Fields End  -->
        
        
         </form>
        
         
         
         
         
               
         
        
            </div>
         </div>
        
         
        
        </div>

      <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
      </script>
 

@endsection















<!-- Slideshow container -->

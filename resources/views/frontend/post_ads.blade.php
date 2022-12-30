@extends('frontend.layout_with_nav.main2')
@section('main-container')
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
            <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active s_about_ad mb-3" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Step1: About
                        Ad</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link  s_about_ad2 mb-3" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Step 2: Ad
                        Details</button>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade  " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <form action="" class="pt-5">

                        <!-- Two text Fiedls  start-->

                        <div class="row d-flex justify-content-between">
                            <div class="col-md-4 ">
                                <label for="" class="ads_lable">
                                    Make
                                </label>
                                <div class="custom-select post_select_option">
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
                                <div>
                                    <input class="post_select_option_input" type="text" placeholder="Mileage">
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
                                <div class="custom-select post_select_option">
                                    <select>
                                        <option value="0">Transmission</option>
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
                                <input type="checkbox" class="check_box_size"> <span class="ps-2 yes_no">Yes</span>
                                <br>
                                <input type="checkbox" class="check_box_size mt-3"> <span class="ps-2 yes_no">No</span>
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


                                <textarea name="" id="" class="text_area_play_ads" cols="10" rows="10"
                                    placeholder="Description"></textarea>

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
                        <div class="row d-flex justify-content-between">
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
                                <button type="button" class="btn btn-primary btn-lg btn-block"
                                    style="width: 400px;">Continue</button>
                            </div>

                        </div>


                        <!-- Two Text Fields End  -->


                    </form>
                </div>
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab" tabindex="0">

                    <div class="container">
                        <div class="row d-flex justify-content-between g-5">
                            <div class="col-md-6 ">
                                <label for="" class="ads_lable">
                                    Make
                                </label>
                                {{-- <div class="custom-select post_select_option">
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
                                </div> --}}
                                <div>
                                    <div class="dropdownas">
                                        <button class="dropbtn" id='dp'>Catagories</button>
                                        <i class="bi bi-caret-down-fill" id="iconstab"
                                            style="position: absolute    ; right: 10px; top: 20px; color: #2A84F2;"></i>


                                        <div class="dropdownas-content" id="dropcont">
                                            <ul class="navbar-nav">


                                                <div class="dropdownas1">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="#">Vehicles <i class="bi bi-caret-right-fill"
                                                                    style="float: right;"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="dropdownas-content1">
                                                        <ul class="navbar-nav">
                                                            <li>
                                                                <a href="#" onclick="callme('i9')"
                                                                    id="i9">Cars</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callme('i10')"
                                                                    id="i10">Busses and MicroBuses</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callme('i11')"
                                                                    id="i11">Trucks and Trallers</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callme('i12')"
                                                                    id="i12">Motorcycles</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callme('i13')"
                                                                    id="i13">Vehicles Parts abd Accessories</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callme('i14')"
                                                                    id="i14">Heavy Equipments</a>
                                                            </li>
                                                        </ul>


                                                    </div>
                                                </div>

                                                <li>
                                                    <a href="#" onclick="callme('i2')"
                                                        id="i2">Properties</a>
                                                </li>
                                                <li class="">
                                                    <a href="#" onclick="callme('i3')" id="i3">Mobile phones
                                                        And tablets</a>
                                                </li>
                                                <li class="">
                                                    <a href="#" onclick="callme('i4')"
                                                        id="i4">MotorBikes</a>
                                                </li>
                                                <li class="">
                                                    <a href="#" onclick="callme('i5')"
                                                        id="i5">Electronics</a>
                                                </li>
                                                <li class="">
                                                    <a href="#" onclick="callme('i6')" id="i6">Vehicles
                                                        Parts</a>
                                                </li>
                                                <li class="">
                                                    <a href="#" onclick="callme('i7')" id="i7">Health and
                                                        Beauty</a>
                                                </li>
                                                <li class="">
                                                    <a href="#" onclick="callme('i8')" id="i8">Fashions</a>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 ">
                                <label for="" class="ads_lable">
                                    Location
                                </label>
                                <div>
                                    <div class="dropdownas">
                                        <button class="dropbtn" id='lo'>Locations</button>
                                        <i class="bi bi-caret-down-fill" id="iconstab"
                                            style="position: absolute    ; right: 10px; top: 20px; color: #2A84F2;"></i>


                                        <div class="dropdownas-content" id="dropcont">
                                            <ul class="navbar-nav">



                                                <div class="dropdownas1">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="#">Lagos State <i
                                                                    class="bi bi-caret-right-fill"
                                                                    style="float: right;"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="dropdownas-content1">
                                                        <ul class="navbar-nav">
                                                            <li>
                                                                <a href="#" onclick="callmel('b9')"
                                                                    id="b9">Ajah</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callmel('ii10')"
                                                                    id="ii10">Surulere</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callmel('b11')"
                                                                    id="b11">lkeja</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callmel('b124')"
                                                                    id="b124">Ojo</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callmel('b135')"
                                                                    id="b135">Ebule Egba</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="callmel('b145')"
                                                                    id="b145">Agego</a>
                                                            </li>
                                                        </ul>


                                                    </div>
                                                </div>
                                                <div class="dropdownas1">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="#">Abuja (FCT) State <i
                                                                    class="bi bi-caret-right-fill"
                                                                    style="float: right;"></i></a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="dropdownas1">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="#">Ogun State <i class="bi bi-caret-right-fill"
                                                                    style="float: right;"></i></a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="dropdownas1">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="#">Oyo State <i class="bi bi-caret-right-fill"
                                                                    style="float: right;"></i></a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="dropdownas1">
                                                    <ul class="navbar-nav">
                                                        <li>
                                                            <a href="#">River State <i
                                                                    class="bi bi-caret-right-fill"
                                                                    style="float: right;"></i></a>
                                                        </li>
                                                    </ul>

                                                </div>



                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">

                            <div class="col-lg-5">
                                <div class="p-0 mt-4">

                                    <div class="first_select_A" style="display: none;">
                                        <ul class="p-0 m-0">
                                            <li class="first_select_items_A">one</li>
                                            <li class="first_select_items_A">two</li>
                                            <li class="first_select_items_A">three</li>
                                            <li class="first_select_items_A">Four</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row mt-4">
                            <div class="col-12 d-flex mb-5">
                                <form class="form-group" style="width: 100%">
                                    <label for="image" class="form-label">Add Photo</label>

                                    <div>
                                        <label for="picture" class="btn border-0" style="width: 100%">
                                            <div class="Input-Image-A mt-2 row" id="pictureplace">
                                                <i class="fa-solid fa-image Image-Icon-A"></i><br>
                                                <label for="image">
                                                    <p class="text-center Image-text-A" id="pictureText">Add at least 5
                                                        photo for this gallery</p>
                                                </label>

                                            </div>
                                        </label>
                                        <input id="picture" style="visibility:visible; margin-top:20px;"type="file"
                                            accept="image/jpg, image/gif ,image/png" multiple>
                                    </div>

                                    <div class="mt-3">
                                        <p class="Image-text-A ">Each picture must not exceed 5mb </p>
                                        <p class="Image-text-A"> Supported fromates are *jpg , *gif and *png</p>
                                </form>
                            </div>

                        </div>
                        <div class="form col-12">
                            <label class="form-label">Add Video</label>
                            <div>
                                <label for="files" class="btn border-0" style="width: 100%">

                                    <div class="col-12 mt-2  fade-in" id="cardPicture_${i}">
                                        <div class="Input-Vedio-A mt-2 " id="videoCard">
                                            <div class="card mt-3 mb-3" style="width: 18rem; display: none;"
                                                id="vCard">
                                                <video src="video.mp4" id="player" controls></video>
                                                <div class="card-body">
                                                    <p id="vanme" minlength="8"> </p>
                                                    <button class="btn btn-danger" id="videoDeleteBtn"
                                                        onclick="videoDelte()"><i class="fa-solid fa-trash"
                                                            style="font-size:15px"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                </label>
                                <input type="file" style="float: left; margin-top:20px; margin-bottom:50px"
                                    id="recorder" style="visibility:visible;" accept="video/*">

                            </div>


                            </label>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-center  pt-5 pb-5">
                                    <button type="button" class="btn btn-primary btn-lg btn-block"
                                        style="width: 400px;">Continue</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- temp -->

                <!-- temp -->

            </div>

        </div>

    </div>


    {{-- <div class="d-flex justify-content-between pt-3 ads_btn">
                <div>
                    <button type="button" class="btn btn-outline-primary btn-lg bt_sz">Step1: About Ad </button>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg setp_btn_ads bt_sz">Step 2: Ad Details</button>
                </div>
            </div> --}}












    </div>
    </div>



    </div>
    <!-- <script src="index.js"></script> -->
    <script>
        // Show hide popover
        $(".dropdownas").click(function() {
            $(this).find(".dropdownas-content").slideToggle("fast");

        });


        function callme(selected) {
            var item = document.getElementById(selected).innerText;
            let toog = document.getElementById(selected);
            console.log(item)
            toog.classList.toggle("al");
            let i = document.getElementById('dp')
            i.innerText = item




        }

        function callmel(selected) {
            var item = document.getElementById(selected).innerText;
            let toog = document.getElementById(selected);
            console.log(item)
            toog.classList.toggle("al");
            let i = document.getElementById('lo')
            i.innerText = item




        }
    </script>


    <script>
        $(document).ready(function() {

            $('ul.navbar-nav > li')
                .click(function(e) {
                    $('ul.navbar-nav > li')
                        .removeClass('active');
                    $(this).addClass('active');
                });
        });
    </script>
    <script>
        let vCard = document.getElementById('vCard')
        let vanme = document.getElementById('vanme')
        let videoName;
        var recorder = document.getElementById('recorder');
        var player = document.getElementById('player');
        recorder.addEventListener('change', function(e) {
            var file = e.target.files[0];
            vCard.style.display = "block"
            videoName = recorder.value
            vanme.innerText = videoName
            player.src = URL.createObjectURL(file);
        });

        function videoDelte() {
            vCard.style.display = 'none'
            recorder.value = ""
        }
        let pictureText = document.getElementById("pictureText")
        document.querySelector("#picture").addEventListener("change", (e) => {
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                const files = e.target.files;
                const output = document.querySelector("#pictureplace");

                for (let i = 0; i < files.length; i++) {
                    pictureText.style.display = "none"

                    if (!files[i].type.match("image")) continue;
                    const imgReader = new FileReader();
                    imgReader.addEventListener("load", function(event) {
                        const imgFile = event.target;
                        const img = document.createElement("img");
                        img.className = "thumbnail"
                        img.src = imgFile.result
                        let im = img.src
                        let a = `<div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-2  fade-in" id="cardPicture">
            <div class="card cardP " style="">
                 <div class="img_res_div gallery mt-1 d-flex text-center mx-auto d-block">
                    <img src="${im}" class="card-img-top image_card" alt="..." id="pic">
                    </div>

        <div class="card-body">
       <div class="imageSize text-center "></div>
        <div class="d-flex justify-content-between">
      <button class="btn btn-danger" id=btn_${i}  ><i class="fa-solid fa-trash" style="font-size:15px"></i>


 </div>
     </div>
   </div></div>`

                        output.insertAdjacentHTML("afterbegin", a)
                        let ad = document.getElementById(`btn_${i}`)
                        ad.onclick = (e) => {
                            e.preventDefault()
                            deleteBox(e)
                        }
                    });
                    imgReader.readAsDataURL(files[i]);
                }
            } else {
                alert("Your browser does not support File API");
            }
        });

        function deleteBox(e) {
            e.target.parentNode.parentNode.parentNode.parentNode.remove()
            // e.target.parent.remove()


        }
        //   picturebox: [
        //               { name: `<div class="col-3 mt-2" id="cardPicture">
    //             <div class="card" style="">
    //                 <div class="img_res_div">
    //                     <img src="${pictureValue}" class="card-img-top image_card" alt="..." id="pic">
    //                     </div>

    //         <div class="card-body">
    //         <div class="imageSize text-center">(34 kb)</div>
    //         <div class="d-flex justify-content-between">
    //       <button class="btn btn-danger" id=btnd ><i class="fa fa-trash-o" style="font-size:15px"></i>
    //      <button class="btn btn-warning"  id="btni">    <i class="fa fa-search-plus" style="font-size:15px"></i>
    //   </button>
    // </div>
    //     </div>
    //   </div></div>` },


        //       ]

        ;
    </script>
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


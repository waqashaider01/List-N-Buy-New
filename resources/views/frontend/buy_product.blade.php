@extends('frontend.layout_with_nav.main2')
@section('main-container')
    <!-- End Tab  -->
    <div class="container buysection2">
        <div class="row pt-5">
            <div class="col-md-6 col-lg-4  col-sm-12">
                <div class="row">



                </div>
            </div>
            <div class="col-d-8">

            </div>
        </div>

        <article id="tabs" class="tabs">
            <ul role="tablistt" aria-label="Free HTML Tabs" class="toptab_ul">
                <li role="tabt" aria-selected="true" aria-controls="panel-home" id="tab-home" tabindex="0"
                    class="buylink">
                    Image
                </li>
                <li role="tabt" aria-selected="false" aria-controls="panel-developers" id="tab-developers" tabindex="-1"
                    class="buylink">
                    Videos
                </li>
            </ul>


            <div class="container">
                <div class="pt-4 row">
                    <div class="col-12 col-lg-6 d-flex flex-sm-row flex-column justify-content-around">
                        <div class="mb-2">


                            <a href=""><img src="{{ url('frontend\img\buy_product\location_buy.png') }}"
                                    style="width: 20px;" alt=""></a>
                            <span class="icontext_buy p-sm-1">Washington,DC</span>

                        </div>
                        <div class="short_buy mb-2">
                            <span>
                                <a href=""><img src="{{ url('frontend\img\buy_product\time_buy.png') }}"
                                        style="width: 20px;" alt=""></a>
                                <span class="icontext_buy p-sm-1">Posted 2 hrs ago</span>

                            </span>
                        </div>
                        <div class="short_buy mb-2">
                            <a href=""><img src="{{ url('frontend\img\buy_product\eye_buy.png') }}"
                                    style="width: 20px;" alt=""></a>
                            <span class="icontext_buy p-sm-1">04 Veiws</span>

                        </div>



                    </div>
                </div>
            </div>

            <section id="panel-home" role="tabpanel" tabindex="0" aria-labelledby="tab-home">
                <div class="row">

                    <div class="col-md-6 col-lg-8">

                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides">
                                <div class="counter">1/4</div>
                                <img src="{{ url('frontend\img\buy_product\buy_slider3.png') }}" id="main">

                            </div>

                            <div class="mySlides">
                                <div class="counter">2/4</div>
                                <img src="{{ url('frontend\img\buy_product\buy_slider1.png') }}" id="main">

                            </div>

                            <div class="mySlides">
                                <div class="counter">3/4</div>
                                <img src="{{ url('frontend\img\buy_product\buy_slider.png') }}" id="main">
                            </div>
                            <div class="mySlides">
                                <div class="counter">4/4</div>
                                <img src="{{ url('frontend\img\buy_product\buy_slider2.png') }}" id="main">
                            </div>


                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>



                        <div class="pb-3 slider_buy">
                            <div>
                                <div class="dot" onclick="currentSlide(1)"><img
                                        src="{{ url('frontend\img\buy_product\buy_slider3.png') }}" class="sliderimg">
                                </div>
                            </div>
                            <div>

                                <div class="dot" onclick="currentSlide(2)"><img
                                        src="{{ url('frontend\img\buy_product\buy_slider1.png') }}" class="sliderimg">
                                </div>

                            </div>
                            <div>


                                <div class="dot" onclick="currentSlide(3)"><img
                                        src="{{ url('frontend\img\buy_product\buy_slider.png') }}" class="sliderimg">
                                </div>

                            </div>
                            <div>


                                <div class="dot" onclick="currentSlide(4)"><img
                                        src="{{ url('frontend\img\buy_product\buy_slider2.png') }}" class="sliderimg">
                                </div>
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
                                if (n > slides.length) {
                                    slideIndex = 1
                                }
                                if (n < 1) {
                                    slideIndex = slides.length
                                }
                                for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";

                                }
                                for (i = 0; i < dots.length; i++) {
                                    dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active";
                            }
                        </script>



                        <div class="pt-4 d-flex justify-content-between">
                            <div>
                                <p class="buysecondhead"> 2020 Toyota Highlander</p>
                            </div>
                            <div>
                                <a href=""><img src="{{ url('frontend\img\buy_product\download_buy.png') }}"
                                        style="width: 40px;" alt=""></a>

                            </div>

                        </div>



                        <div class="pt-4">
                            <div>
                                <article id="tabs_buy">
                                    <ul role="tablist" aria-label="Free HTML Tabs" class="tabbactive ul_buy">
                                        <li role="tab" aria-selected="true" aria-controls="panel-home" id="tab-home"
                                            tabindex="0">
                                            Vehicle Description
                                        </li>
                                        <li role="tab" aria-selected="false" aria-controls="panel-developers"
                                            id="tab-developers" tabindex="-1">
                                            Vehicle Details
                                        </li>
                                        <li role="tab" aria-selected="false" aria-controls="panel-information"
                                            id="tab-information" tabindex="-1">
                                            Reviews
                                        </li>
                                    </ul>
                                    <section id="panel-home" role="tabpanel" tabindex="0" aria-labelledby="tab-home">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="d-block">
                                                    <div class="buysecondhead">MILAGE</div>
                                                    <div class="icontext_buy ">13645700</div>

                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">ENGINE SIZE</div>
                                                    <div class="icontext_buy">2700 cc</div>
                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">YEAR OF MANUFACTURE</div>
                                                    <div class="icontext_buy">2022</div>
                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">FUEL TYPE</div>
                                                    <div class="icontext_buy">PETEROL </div>
                                                </div>






                                            </div>
                                            <div>
                                                <div class="d-block">
                                                    <div class="buysecondhead">BODY STYLE</div>
                                                    <div class="icontext_buy ">JEEP</div>


                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">COLOR</div>
                                                    <div class="icontext_buy">WHITE</div>
                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">SEATS</div>
                                                    <div class="icontext_buy">6</div>
                                                </div>

                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">MAKE</div>
                                                    <div class="icontext_buy">TOYOTA</div>
                                                </div>





                                            </div>
                                            <div>

                                                <!-- Thirs Data Show Here   -->
                                            </div>

                                        </div>

                                    </section>

                                </article>

                                <script>
                                    window.addEventListener("DOMContentLoaded", () => {

                                        const tabs = document.querySelectorAll('[role="tab"]');
                                        const tabList = document.querySelector('[role="tablist"]');

                                        // Add a click event handler to each tab
                                        tabs.forEach((tab) => {
                                            tab.addEventListener("click", changeTabs);
                                        });

                                        // Enable arrow navigation between tabs in the tab list
                                        let tabFocus = 0;

                                        tabList.addEventListener("keydown", (e) => {

                                            // Move right
                                            if (e.keyCode === 39 || e.keyCode === 37) {
                                                tabs[tabFocus].setAttribute("tabindex", -1);

                                                if (e.keyCode === 39) {
                                                    tabFocus++;

                                                    // If we're at the end, go to the start
                                                    if (tabFocus >= tabs.length) {
                                                        tabFocus = 0;
                                                    }
                                                    // Move left
                                                } else if (e.keyCode === 37) {
                                                    tabFocus--;

                                                    // If we're at the start, move to the end
                                                    if (tabFocus < 0) {
                                                        tabFocus = tabs.length - 1;
                                                    }
                                                }

                                                tabs[tabFocus].setAttribute("tabindex", 0);
                                                tabs[tabFocus].focus();
                                            }
                                        });
                                    });

                                    function changeTabs(event) {
                                        const target = event.target;
                                        const parent = target.parentNode;
                                        const grandparent = parent.parentNode;

                                        // Remove all current selected tabs
                                        parent.querySelectorAll('[aria-selected="true"]').forEach((node) => node.setAttribute("aria-selected", false));

                                        // Set this tab as selected
                                        target.setAttribute("aria-selected", true);

                                        // Hide all tab panels
                                        grandparent.querySelectorAll('[role="tabpanel"]').forEach((node) => node.setAttribute("hidden", true));

                                        // Show the selected panel
                                        grandparent.parentNode.querySelector(`#${target.getAttribute("aria-controls")}`).removeAttribute("hidden");
                                    }
                                </script>
                            </div>

                        </div>




                    </div>
                    <div class="col-md-6 col-lg-4 pt-3">

                        <div class=" d-flex justify-content-center">


                            <div>

                                <p class="buysecondhead pt-2">2020 Toyota Highlander</p>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-6 pb-2">
                                        <div class=" d-flex justify-content-left buy_product_widget">
                                            <div class="info-row reviews-widget ratings">
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="div">
                                                <span class="rating-label-buy  ps-3">0 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="buy_doller">$27345</p>
                                <p class="buysecondhead">Current Location: Washington, DC</p>


                                <button type="button" class="btn btn-lg btn-lg   prifile_detail_btn_buy"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Make In Offer</button>
                                <br> <br>
                                <button type="button" class="btn  btn-lg    prifile_detail_btn_buy">Post a
                                    Review</button>


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
                                            <img src="{{ url('frontend\img\buy_product\buy_profile.png') }}"
                                                id="photo" class="rounded mx-auto d-block">
                                        </div>

                                        <p class="Profile-Name">William Mark</p>



                                        <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">View
                                            Profile</button>

                                        <div class="pt-3 pb-3 px-3">
                                            <span class="buysecondhead">SHARE</span>
                                            <a href=""><img
                                                    src="{{ url('frontend\img\buy_product\twitter_buy.png') }}"
                                                    style="width:   45px;" class="ps-3" alt=""></a>
                                            <a href=""><img
                                                    src="{{ url('frontend\img\buy_product\facebook_buy.png') }}"
                                                    style="width:  45px;" class="ps-3" alt=""></a>
                                            <a href=""><img
                                                    src="{{ url('frontend\img\buy_product\whatsapp_buy.png') }}"
                                                    style="width:  45px;" class="ps-3" alt=""></a>

                                        </div>
                                        <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Contact
                                            Seller</button>
                                        <br> <br>
                                        <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Start
                                            Chat</button>
                                        <br> <br>
                                        <div>

                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section id="panel-developers" role="tabpanel" tabindex="0" aria-labelledby="tab-developers" hidden>
                <div class="row">

                    <div class="col-md-6 col-lg-8">


                        <video src="{{ url('frontend\img\buy_product\slider_buy_video.mp4') }}" controls
                            id="main"></video>
                        <!-- <img src="{{ url('frontend\img\buy_product\buy_slider3.png') }}" id="main" > -->

                        <div class="pt-4 d-flex justify-content-between">
                            <div>
                                <p class="buysecondhead"> 2020 Toyota Highlander</p>
                            </div>
                            <div>
                                <a href=""><img src="{{ url('frontend\img\buy_product\download_buy.png') }}"
                                        style="width: 40px;" alt=""></a>

                            </div>

                        </div>



                        <div class="pt-4">
                            <div>
                                <article id="tabs_buy">
                                    <ul role="tablist" aria-label="Free HTML Tabs" class="tabbactive ul_buy">
                                        <li role="tab" aria-selected="true" aria-controls="panel-home"
                                            id="tab-home" tabindex="0">
                                            Vehicle Description
                                        </li>
                                        <li role="tab" aria-selected="false" class="tablist_col"
                                            aria-controls="panel-developers" id="tab-developers" tabindex="-1">
                                            Vehicle Details
                                        </li>
                                        <li role="tab" aria-selected="false" class="tablist_col"
                                            aria-controls="panel-information" id="tab-information" tabindex="-1">
                                            Reviews
                                        </li>
                                    </ul>
                                    <section id="panel-home" role="tabpanel" class="tablist_col" tabindex="0"
                                        aria-labelledby="tab-home">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <div class="d-block">
                                                    <div class="buysecondhead">MILAGE</div>
                                                    <div class="icontext_buy ">13645700</div>

                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">ENGINE SIZE</div>
                                                    <div class="icontext_buy">2700 cc</div>
                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">YEAR OF MANUFACTURE</div>
                                                    <div class="icontext_buy">2022</div>
                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">FUEL TYPE</div>
                                                    <div class="icontext_buy">PETEROL </div>
                                                </div>






                                            </div>
                                            <div>
                                                <div class="d-block">
                                                    <div class="buysecondhead">BODY STYLE</div>
                                                    <div class="icontext_buy ">JEEP</div>


                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">COLOR</div>
                                                    <div class="icontext_buy">WHITE</div>
                                                </div>
                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">SEATS</div>
                                                    <div class="icontext_buy">6</div>
                                                </div>

                                                <div class="d-block pt-2">
                                                    <div class="buysecondhead">MAKE</div>
                                                    <div class="icontext_buy">TOYOTA</div>
                                                </div>





                                            </div>
                                            <div>

                                                <!-- Thirs Data Show Here   -->
                                            </div>

                                        </div>

                                    </section>

                                </article>

                                <script>
                                    window.addEventListener("DOMContentLoaded", () => {

                                        const tabs = document.querySelectorAll('[role="tab"]');
                                        const tabList = document.querySelector('[role="tablist"]');

                                        // Add a click event handler to each tab
                                        tabs.forEach((tab) => {
                                            tab.addEventListener("click", changeTabs);
                                        });

                                        // Enable arrow navigation between tabs in the tab list
                                        let tabFocus = 0;

                                        tabList.addEventListener("keydown", (e) => {

                                            // Move right
                                            if (e.keyCode === 39 || e.keyCode === 37) {
                                                tabs[tabFocus].setAttribute("tabindex", -1);

                                                if (e.keyCode === 39) {
                                                    tabFocus++;

                                                    // If we're at the end, go to the start
                                                    if (tabFocus >= tabs.length) {
                                                        tabFocus = 0;
                                                    }
                                                    // Move left
                                                } else if (e.keyCode === 37) {
                                                    tabFocus--;

                                                    // If we're at the start, move to the end
                                                    if (tabFocus < 0) {
                                                        tabFocus = tabs.length - 1;
                                                    }
                                                }

                                                tabs[tabFocus].setAttribute("tabindex", 0);
                                                tabs[tabFocus].focus();
                                            }
                                        });
                                    });

                                    function changeTabs(event) {
                                        const target = event.target;
                                        const parent = target.parentNode;
                                        const grandparent = parent.parentNode;

                                        // Remove all current selected tabs
                                        parent.querySelectorAll('[aria-selected="true"]').forEach((node) => node.setAttribute("aria-selected", false));

                                        // Set this tab as selected
                                        target.setAttribute("aria-selected", true);

                                        // Hide all tab panels
                                        grandparent.querySelectorAll('[role="tabpanel"]').forEach((node) => node.setAttribute("hidden", true));

                                        // Show the selected panel
                                        grandparent.parentNode.querySelector(`#${target.getAttribute("aria-controls")}`).removeAttribute("hidden");
                                    }
                                </script>
                            </div>

                        </div>




                    </div>
                    <div class="col-md-6 col-lg-4 pt-3">
                        <div class=" d-flex justify-content-center">


                            <div>

                                <p class="buysecondhead pt-2">2020 Toyota Highlander</p>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-6 pb-2">
                                        <div class=" d-flex justify-content-left buy_product_widget">
                                            <div class="info-row reviews-widget ratings">
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                                <span class="far fa-star"></span>
                                            </div>
                                            <div class="div">
                                                <span class="rating-label-buy  ps-3">0 review(s)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="buy_doller">$27345</p>
                                <p class="buysecondhead">Current Location: Washington, DC</p>


                                <button type="button" class="btn btn-lg btn-lg   prifile_detail_btn_buy"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">Make In Offer</button>
                                <br> <br>
                                <button type="button" class="btn  btn-lg    prifile_detail_btn_buy">Post a
                                    Review</button>


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
                                            <img src="{{ url('frontend\img\buy_product\buy_profile.png') }}"
                                                id="photo" class="rounded mx-auto d-block">
                                        </div>

                                        <p class="Profile-Name">William Mark</p>



                                        <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">View
                                            Profile</button>

                                        <div class="pt-3 pb-3 px-3">
                                            <span class="buysecondhead">SHARE</span>
                                            <a href=""><img
                                                    src="{{ url('frontend\img\buy_product\twitter_buy.png') }}"
                                                    style="width:   45px;" class="ps-3" alt=""></a>
                                            <a href=""><img
                                                    src="{{ url('frontend\img\buy_product\facebook_buy.png') }}"
                                                    style="width:  45px;" class="ps-3" alt=""></a>
                                            <a href=""><img
                                                    src="{{ url('frontend\img\buy_product\whatsapp_buy.png') }}"
                                                    style="width:  45px;" class="ps-3" alt=""></a>

                                        </div>
                                        <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Contact
                                            Seller</button>
                                        <br> <br>
                                        <button type="button" class="btn  btn-lg   prifile_detail_btn_buy">Start
                                            Chat</button>
                                        <br> <br>
                                        <div>

                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </article>

        <script>
            window.addEventListener("DOMContentLoaded", () => {

                const tabs = document.querySelectorAll('[role="tabt"]');
                const tablistt = document.querySelector('[role="tablistt"]');

                // Add a click event handler to each tab
                tabs.forEach((tab) => {
                    tab.addEventListener("click", changeTabs);
                });

                // Enable arrow navigation between tabs in the tab list
                let tabFocus = 0;

                tablistt.addEventListener("keydown", (e) => {

                    // Move right
                    if (e.keyCode === 39 || e.keyCode === 37) {
                        tabs[tabFocus].setAttribute("tabindex", -1);

                        if (e.keyCode === 39) {
                            tabFocus++;

                            // If we're at the end, go to the start
                            if (tabFocus >= tabs.length) {
                                tabFocus = 0;
                            }
                            // Move left
                        } else if (e.keyCode === 37) {
                            tabFocus--;

                            // If we're at the start, move to the end
                            if (tabFocus < 0) {
                                tabFocus = tabs.length - 1;
                            }
                        }

                        tabs[tabFocus].setAttribute("tabindex", 0);
                        tabs[tabFocus].focus();
                    }
                });
            });

            function changeTabs(event) {
                const target = event.target;
                const parent = target.parentNode;
                const grandparent = parent.parentNode;

                // Remove all current selected tabs
                parent.querySelectorAll('[aria-selected="true"]').forEach((node) => node.setAttribute("aria-selected", false));

                // Set this tab as selected
                target.setAttribute("aria-selected", true);

                // Hide all tab panels
                grandparent.querySelectorAll('[role="tabpanel"]').forEach((node) => node.setAttribute("hidden", true));

                // Show the selected panel
                grandparent.parentNode.querySelector(`#${target.getAttribute("aria-controls")}`).removeAttribute("hidden");
            }
        </script>




    </div>
    <div class="container pt-5 pb-2 heading-bg position-relative my-1 ps-1 mb-3 d-flex border-b-n pb-2">
        <h2 class="page-main-heading position-absolute">Similar Ads</h2>
        <img class=" " src="{{ url('frontend\img\buy_product\text_back_img_buy.png') }}" alt=""
            srcset="" style="width:110px;">


    </div>
    <div class="container buysection_card pt-5 pb-5">
        <div class="row position-relative">
            <div class="col-lg-4 col-md-4 ">
                <a href=""><img src="{{ url('frontend\img\buy_product\car_buy_1.png') }}" class="card_buy_img"
                        alt=""></a>
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
                    <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                            style="width: 20px;" alt=""></a>
                    <span class="icontext_buy p-1">Washington,DC</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="post_buy_card">
                    <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png"
                            style="width: 20px;" alt=""></a>
                    <span class="icontext_buy p-1">Posted 14 Jan</span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container buysection_card pt-5 pb-5">
        <div class="row position-relative">
            <div class="col-lg-4 col-md-4 ">
                <a href=""><img src="{{ url('frontend\img\buy_product\car_buy_2.png') }}" class="card_buy_img"
                        alt=""></a>
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
                    <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                            style="width: 20px;" alt=""></a>

                    <span class="icontext_buy p-1">Lagos, Ipaja</span>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="post_buy_card">
                    <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png"
                            style="width: 20px;" alt=""></a>
                    <span class="icontext_buy p-1">Posted 12 July</span>
                </div>

            </div>
        </div>
    </div>
    <br>



    <div class="container buysection_card pt-5 pb-5">
        <div class="row position-relative">
            <div class="col-lg-4 col-md-4 ">
                <a href=""><img src="{{ url('frontend\img\buy_product\car_buy_3.png') }}" class="card_buy_img"
                        alt=""></a>

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
                    <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                            style="width: 20px;" alt=""></a>

                    <span class="icontext_buy p-1">Lagos, Ikeja</span>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="post_buy_card">
                    <a href=""><img src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png"
                            style="width: 20px;" alt=""></a>
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



    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex justify-content-end px-2 pt-2 pb-5">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="d-flex justify-content-center">
                    <h5 class="modal-title pt-4 buy_doller">Make an offer</h5>


                </div>
                <div class="modal-body pt-4 d-flex justify-content-center">
                    <input class="form-control form-control-lg" type="number" placeholder="Enter Your Price"
                        style="width: 70%;">

                </div>
                <div class="pb-5 px-3 pt-3 d-flex justify-content-center">

                    <button type="button" class="btn btn-primary btn-lg " style="width: 70%;">Block level
                        button</button>
                </div>
            </div>
        </div>
    </div>
@endsection















<!-- Slideshow container -->

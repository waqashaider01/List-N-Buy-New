@extends('frontend.layout_with_nav.main2')
@section('main-container')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 p-4">
                <div class="tab shadow">
                    <div class="user_pro_img_div mt-5 mb-4">
                        <img src="{{ url('frontend\img\user-profile\1.png') }}" alt="" class="user_profile_img">
                        <h3 class="user_name mt-3">Goshling Daivid</h3>
                    </div>

                    <div class="ms-3">
                        <a class="tablinks text_d_none d-flex align-items-center border_none mb-3"
                            onclick="openCity(event, 'London')" id="defaultOpen">
                            <div class="user_icon_span">
                                <i class="fa-solid fa-gear user_icon"></i>
                            </div>
                            <span class="user_pro_cat ms-2">Account Settings</span>
                        </a>
                        <a class="tablinks text_d_none d-flex align-items-center border_none mb-3"
                            onclick="openCity(event, 'Adverts')">
                            <div class="user_icon_span">
                                <i class="fa-solid fa-volume-low user_icon"></i>
                            </div>
                            <span class="user_pro_cat ms-2">My Adverts</span>
                        </a>
                        <a class="tablinks text_d_none d-flex align-items-center border_none mb-3"
                            onclick="openCity(event, 'Notification')">
                            <div class="user_icon_span">
                                <i class="fa-regular fa-bell user_icon"></i>
                            </div>
                            <span class="user_pro_cat ms-2">Notification</span>
                        </a>
                        <a class="tablinks text_d_none d-flex align-items-center border_none mb-3"
                            onclick="openCity(event, 'Save')">
                            <div class="user_icon_span">
                                <i class="fa-solid  fa-bookmark user_icon"></i>
                            </div>
                            <span class="user_pro_cat ms-2">My Save</span>
                        </a>
                        <a class="tablinks text_d_none d-flex align-items-center border_none mb-3"
                            onclick="openCity(event, 'Message')">
                            <div class="user_icon_span">
                                <i class="fa-regular fa-envelope user_icon"></i>
                            </div>
                            <span class="user_pro_cat ms-2">Message</span>
                        </a>

                        <a href="" class="text_d_none">
                            <div style="margin-top: 50px; margin-bottom:30px">
                                <img src="{{ url('frontend\img\user-profile\3.png') }}" alt="" width="30px">
                                <span class="sign_out_span ms-3">Sign Out</span>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-9 p-4 ">
                <div id="London" class="tabcontent shadow">
                    <div class="row p-3">
                        <div class="col-12 mb-5">
                            <div class="cat_content_heading">
                                <h3 class="">Account Settings</h3>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label1" id="label-form">First Name</label>
                            <div class="sectionblock1 space long-value-input-container">
                                <input type="text" required class="long-value-input" value=""
                                    placeholder="First Name" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label1" id="label-form">Last Name</label>
                            <div class="sectionblock1 space long-value-input-container">
                                <input type="text" required class="long-value-input" value=""
                                    placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label1" id="label-form">Email</label>
                            <div class="sectionblock1 space long-value-input-container">
                                <input type="email" required class="long-value-input" value=""
                                    placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label class="form-label1" id="label-form">Phone Number</label>
                            <div class="sectionblock1 space long-value-input-container">
                                <input type="Number" required class="long-value-input" value=""
                                    placeholder="Phone Number" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label class="form-label1">Password</label>
                            <div class="sectionblock1 space long-value-input-container">
                                <input id="pswrd" type="password" placeholder="Password" class="long-value-input">
                                <span style="position: absolute; right:-10px;">
                                    <i class="bi bi-lock showclose" onclick="show()" style="font-size: 20px;"></i>
                                    <i class="bi bi-unlock showopen" style="display: none; font-size: 20px;"
                                        onclick="showopen()"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label class="form-label1">Confirm Password</label>
                            <div class="sectionblock1 space long-value-input-container">
                                <input id="pswrd" type="password" placeholder="Confirm Password"
                                    class="long-value-input">
                                <span style="position: absolute; right:-10px;">
                                    <i class="bi bi-lock showclose" onclick="show()" style="font-size: 20px;"></i>
                                    <i class="bi bi-unlock showopen" style="display: none; font-size: 20px;"
                                        onclick="showopen()"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="  mb-4">
                                <button class="btn adds_btn " style="width: 168px; height: 60px;"
                                    type="button">Save</button>

                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="  mb-4">
                                <button class="btn adds_btn2" style="width: 168px; height: 60px;"
                                    type="button">Cancel</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="Adverts" class="tabcontent shadow">
                    <div class="row p-3">
                        <div class="col-12 mb-2">
                            <div class="cat_content_heading">
                                <h3 class="">My Adverts</h3>
                            </div>
                        </div>
                        <div class="container">


                            <article id="tabs" class="tabs">
                                <ul role="tablistt" aria-label="Free HTML Tabs"
                                    class="toptab_ul flex-sm-row flex-column">
                                    <li role="tabt" aria-selected="true" aria-controls="panel-home" id="tab-home"
                                        tabindex="0" class="buylink">
                                        ACTIVE (2)
                                    </li>
                                    <li role="tabt" aria-selected="false" aria-controls="panel-developers"
                                        id="tab-developers" tabindex="-1" class="buylink">
                                        REVIEWING (2)
                                    </li>
                                    <li role="tabt" aria-selected="false" aria-controls="panel-decline"
                                        id="tab-decline" tabindex="-1" class="buylink">
                                        DECLINE (0)
                                    </li>
                                    <li role="tabt" aria-selected="false" aria-controls="panel-closed"
                                        id="tab-closed" tabindex="-1" class="buylink">
                                        CLOSED (3)
                                    </li>
                                </ul>
                                <section id="panel-home" role="tabpanel" tabindex="0" aria-labelledby="tab-home">

                                    <div class="container buysection_card pt-5 pb-5 mb-5">
                                        <div class="row position-relative">
                                            <div class="col-lg-3 col-md-4 ">
                                                <div class="_img_div">
                                                    <a href=""><img
                                                            src="{{ url('frontend\img\user-profile\100.png') }}"
                                                            alt="" class="card_buy_img" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-8 mt-3">
                                                <span class="buysecondhead">Mercedes-Benz</span>
                                                <span style="float: right; cursor: pointer;"><i
                                                        class="fa-solid fa-xmark mb-3"></i></span>
                                                <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                                <div>
                                                    <p class="card_buy_price">$43,847.00</p>
                                                </div>


                                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                    <div class="mb-2">
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Washington,DC</span>
                                                    </div>
                                                    <div class="mb-2">
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Min Bid $20,025</span>
                                                    </div>

                                                    <div class="mb-2">
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Max Bid $20,025</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container buysection_card pt-5 pb-5 mb-5">
                                        <div class="row position-relative">
                                            <div class="col-lg-3 col-md-4 ">
                                                <div class="_img_div">
                                                    <a href=""><img
                                                            src="{{ url('frontend\img\user-profile\101.png') }}"
                                                            class="card_buy_img" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-8 mt-3">
                                                <span class="buysecondhead">Mercedes-Benz</span>
                                                <span style="float: right; cursor: pointer;"><i
                                                        class="fa-solid fa-xmark mb-3"></i></span>
                                                <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                                <div>
                                                    <p class="card_buy_price">$43,847.00</p>
                                                </div>


                                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                    <div class="mb-2">
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Washington,DC</span>
                                                    </div>
                                                    <div class="mb-2">
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Min Bid $20,025</span>
                                                    </div>

                                                    <div class="mb-2">
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Max Bid $20,025</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </section>
                                <section id="panel-developers" role="tabpanel" tabindex="0"
                                    aria-labelledby="tab-developers" hidden>

                                    <div class="container buysection_card pt-5 pb-5 mb-4">
                                        <div class="row position-relative">
                                            <div class="col-lg-4 col-md-4 ">
                                                <div class="_img_div">
                                                    <a href=""><img
                                                            src="http://127.0.0.1:8000/frontend\img\buy_product\car_buy_1.png"
                                                            class="card_buy_img" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 mt-3">
                                                <span class="buysecondhead">Mercedes-Benz</span>
                                                <span style="float: right; cursor: pointer;"><i
                                                        class="fa-solid fa-xmark mb-3"></i></span>
                                                <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                                <div>
                                                    <p class="card_buy_price">$43,847.00</p>
                                                </div>



                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Washington,DC</span>
                                                    </div>
                                                    <div>
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Posted 14 Jan</span>
                                                    </div>
                                                </div>
                                            </div>






                                        </div>

                                    </div>

                                    <div class="container buysection_card pt-5 pb-5">
                                        <div class="row position-relative">
                                            <div class="col-lg-4 col-md-4 ">
                                                <div class="_img_div">
                                                    <a href=""><img
                                                            src="http://127.0.0.1:8000/frontend\img\buy_product\car_buy_1.png"
                                                            class="card_buy_img" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 mt-3">
                                                <span class="buysecondhead">Mercedes-Benz</span>
                                                <span style="float: right; cursor: pointer;"><i
                                                        class="fa-solid fa-xmark mb-3"></i></span>
                                                <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                                <div>
                                                    <p class="card_buy_price">$43,847.00</p>
                                                </div>



                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Washington,DC</span>
                                                    </div>
                                                    <div>
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Posted 14 Jan</span>
                                                    </div>
                                                </div>
                                            </div>






                                        </div>

                                    </div>

                                </section>
                                <section id="panel-decline" role="tabpanel" tabindex="0" aria-labelledby="tab-decline"
                                    hidden>



                                </section>
                                <section id="panel-closed" role="tabpanel" tabindex="0" aria-labelledby="tab-closed"
                                    hidden>
                                    <div class="container buysection_card pt-5 pb-5 mb-5">
                                        <div class="row position-relative">
                                            <div class="col-lg-3 col-md-4 ">
                                                <div class="_img_div">
                                                    <a href=""><img
                                                            src="{{ url('frontend\img\user-profile\100.png') }}"
                                                            alt="" class="card_buy_img" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-8 mt-3">
                                                <span class="buysecondhead">Mercedes-Benz</span>
                                                <span style="float: right; cursor: pointer;"><i
                                                        class="fa-solid fa-xmark mb-3"></i></span>
                                                <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                                <div>
                                                    <p class="card_buy_price">$43,847.00</p>
                                                </div>


                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Washington,DC</span>
                                                    </div>
                                                    <div>
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Min Bid $20,025</span>
                                                    </div>

                                                    <div>
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Max Bid $20,025</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container buysection_card pt-5 pb-5 mb-5">
                                        <div class="row position-relative">
                                            <div class="col-lg-3 col-md-4 ">
                                                <div class="_img_div">
                                                    <a href=""><img
                                                            src="{{ url('frontend\img\user-profile\101.png') }}"
                                                            class="card_buy_img" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-8 mt-3">
                                                <span class="buysecondhead">Mercedes-Benz</span>
                                                <span style="float: right; cursor: pointer;"><i
                                                        class="fa-solid fa-xmark mb-3"></i></span>
                                                <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                                <div>
                                                    <p class="card_buy_price">$43,847.00</p>
                                                </div>


                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <a href=""><img
                                                                src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Washington,DC</span>
                                                    </div>
                                                    <div>
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Min Bid $20,025</span>
                                                    </div>

                                                    <div>
                                                        <a href=""><img
                                                                src="{{ url('frontend\img\user-profile\2.png') }}"
                                                                style="width: 20px;" alt=""></a>
                                                        <span class="icontext_buy p-1">Max Bid $20,025</span>
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

                    </div>
                </div>

                <div id="Notification" class="tabcontent shadow">
                    <div class="row p-3">
                        <div class="col-12 mb-5 d-flex justify-content-between align-items-center b_border">
                            <div class="cat_content_heading1">
                                <h3 class="">Notifications</h3>
                            </div>
                            <div>
                                <a href="" class="text_d_none" style="color: red">Clear All</a>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="container buysection_card pt-5 pb-5 mb-5">
                                <div class="row position-relative">
                                    <div class="col-lg-3 col-md-4 ">
                                        <div class="cart_img_box">
                                            <img src="{{ url('frontend\img\user-profile\102.png') }}" alt=""
                                                class="ellipse" alt="">
                                            <a href="">
                                                <div class="row g-1">
                                                    <div class="col-6" style="z-index: 100">
                                                        <img src="{{ url('frontend\img\user-profile\107.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="{{ url('frontend\img\user-profile\108.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="{{ url('frontend\img\user-profile\109.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                    <div class="col-6" style="z-index: 100">
                                                        <img src="{{ url('frontend\img\user-profile\110.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-8 mt-3">
                                        <span style="float: right; cursor: pointer;"><i
                                                class="fa-solid fa-xmark mb-3"></i></span>
                                        <span class="buysecondhead">Check ads similar to your favourite</span>

                                        <p class="card_p_buy mt-4">21/03/2021</p>






                                    </div>
                                </div>
                            </div>

                            <div class="container buysection_card pt-5 pb-5 mb-5">
                                <div class="row position-relative">
                                    <div class="col-lg-3 col-md-4 ">
                                        <div class="cart_img_box">
                                            <img src="{{ url('frontend\img\user-profile\102.png') }}" alt=""
                                                class="ellipse" alt="">
                                            <a href="">
                                                <div class="row g-1">
                                                    <div class="col-6" style="z-index: 100">
                                                        <img src="{{ url('frontend\img\user-profile\103.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="{{ url('frontend\img\user-profile\104.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                    <div class="col-6">
                                                        <img src="{{ url('frontend\img\user-profile\105.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                    <div class="col-6" style="z-index: 100">
                                                        <img src="{{ url('frontend\img\user-profile\106.png') }}"
                                                            alt="" class="card_buy_img" alt="">
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-8 mt-3">
                                        <span style="float: right; cursor: pointer;"><i
                                                class="fa-solid fa-xmark mb-3"></i></span>
                                        <span class="buysecondhead">Check ads similar to your favourite</span>

                                        <p class="card_p_buy mt-4">21/03/2021</p>






                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="Save" class="tabcontent shadow">

                    <div class="row p-3">
                        <div class="col-12 mb-5 d-flex justify-content-between align-items-center b_border">
                            <div class="cat_content_heading1">
                                <h3 class="">My Save</h3>
                            </div>
                            <div>
                                <a href="" class="text_d_none" style="color: red">Clear All</a>
                            </div>
                        </div>

                        <div class="col-12 mb-5">
                            <div class="container buysection_card pt-5 pb-5">
                                <div class="row position-relative">
                                    <div class="col-lg-4 col-md-4 ">
                                        <div class="_img_div">
                                            <a href=""><img
                                                    src="http://127.0.0.1:8000/frontend\img\buy_product\car_buy_1.png"
                                                    class="card_buy_img" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 mt-3">
                                        <span class="buysecondhead">Mercedes-Benz</span>
                                        <span style="float: right; cursor: pointer;"><i
                                                class="fa-solid fa-xmark mb-3"></i></span>
                                        <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                        <div>
                                            <p class="card_buy_price">$43,847.00</p>
                                        </div>



                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <a href=""><img
                                                        src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                        style="width: 20px;" alt=""></a>
                                                <span class="icontext_buy p-1">Washington,DC</span>
                                            </div>
                                            <div>
                                                <a href=""><img
                                                        src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png"
                                                        style="width: 20px;" alt=""></a>
                                                <span class="icontext_buy p-1">Posted 14 Jan</span>
                                            </div>
                                        </div>
                                    </div>






                                </div>

                            </div>

                        </div>
                        <div class="col-12 mb-5">
                            <div class="container buysection_card pt-3 pb-5">
                                <div class="row">
                                    <div class="col-12">

                                        <span style="float: right; cursor: pointer;"><i
                                                class="fa-solid fa-xmark mb-3"></i></span>
                                    </div>
                                </div>

                                <div class="row position-relative">
                                    <div class="col-lg-4 col-md-4 ">
                                        <div class="_img_div">
                                            <a href=""><img
                                                    src="http://127.0.0.1:8000/frontend\img\buy_product\car_buy_1.png"
                                                    class="card_buy_img" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 mt-3">
                                        <p class="buysecondhead">Mercedes-Benz</p>
                                        <p class="card_p_buy">Mercedes-Benz to Release Pickup Truck by 2020</p>


                                        <div>
                                            <p class="card_buy_price">$43,847.00</p>
                                        </div>



                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <a href=""><img
                                                        src="http://127.0.0.1:8000/frontend\img\buy_product\location_buy.png"
                                                        style="width: 20px;" alt=""></a>
                                                <span class="icontext_buy p-1">Washington,DC</span>
                                            </div>
                                            <div>
                                                <a href=""><img
                                                        src="http://127.0.0.1:8000/frontend\img\buy_product\time_buy.png"
                                                        style="width: 20px;" alt=""></a>
                                                <span class="icontext_buy p-1">Posted 14 Jan</span>
                                            </div>
                                        </div>
                                    </div>






                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div id="Message" class="tabcontent">
                    <h3>Message</h3>

                </div>


            </div>

        </div>
    </div>
    </div>
    <script>
        function show() {
            var pswrd = document.getElementById('pswrd');
            var icon = document.querySelector('.showclose');
            var iconopen = document.querySelector('.showopen');

            if (pswrd.type === "password") {
                pswrd.type = "text";
                //
                icon.style.display = 'none';
                iconopen.style.display = 'block';


            } else {
                pswrd.type = "password";
                icon.style.color = "grey";
            }
        }

        function showopen() {
            var pswrd = document.getElementById('pswrd');
            var icon = document.querySelector('.showclose');
            var iconopen = document.querySelector('.showopen');

            if (pswrd.type === "text") {
                pswrd.type = "password";
                //
                icon.style.display = 'flex';
                icon.style.marginTop = '15px';
                iconopen.style.display = 'none';


            } else {
                pswrd.type = "password";
                icon.style.color = "grey";
            }
        }
    </script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection

@extends('frontend.layout_with_nav.main2')
@section('main-container')
    <div class="container">
        <div class="row">
            <div class="col-3 p-4">
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
                            onclick="openCity(event, 'Paris')">
                            <div class="user_icon_span">
                                <i class="fa-solid fa-volume-low user_icon"></i>
                            </div>
                            <span class="user_pro_cat ms-2">My Adverts</span>
                        </a>
                        <a class="tablinks text_d_none d-flex align-items-center border_none mb-3"
                            onclick="openCity(event, 'Tokyo')">
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
                    </div>
                    {{-- <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> --}}
                </div>
            </div>
            <div class="col-9 p-4 ">
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
                        <div class="col-md-6">
                            <label class="form-label1">Password</label>
                            <div class="sectionblock1 space long-value-input-container">
                                <input id="pswrd" type="password" placeholder="Password" class="long-value-input">
                                <span style="position: absolute; right:-10px;">
                                    <i class="bi bi-lock showclose" onclick="show()" style="font-size: 20px;"></i>
                                    <i class="bi bi-unlock showopen" style="display: none; font-size: 20px;"
                                        onclick="showopen()"></i>
                                </span>
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
                        </div>

                    </div>
                </div>




                <div id="Paris" class="tabcontent">
                    <h3>Paris</h3>
                    <p>Paris is the capital of France.</p>
                </div>
                <div id="Tokyo" class="tabcontent">
                    <h3>Tokyo</h3>
                    <p>Tokyo is the capital of iTLY .</p>
                </div>
                <div id="Save" class="tabcontent">
                    <h3>save</h3>

                </div>
                <div id="Message" class="tabcontent">
                    <h3>Message</h3>

                </div>
            </div>
        </div>
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

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
                    <div class="cat_content_heading">
                        <h3 class="">Account Settings</h3>
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

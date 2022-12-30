@extends('frontend.layout_with_nav.main2')
@section('main-container')
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-5 col-lg-4 col-sm-6" style="background-color: #2A84F2;">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between py-3">
                        <div>
                            <p class="message_head_A">My Messages</p>
                        </div>
                        <div>

                            <!-- three dot menu -->
                            <div class="dropdown_mess">
                                <!-- three dots -->
                                <ul class="dropbtn_mess icons_dotted btn-right_mess  showLeft_mess" onclick="showDropdown()">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <!-- menu -->
                                <div id="myDropdown" class="dropdown-content_mess">
                                    <a href="#home">Archived chats</a>
                                    <a href="#about">Spam chats</a>
                                    <a href="#contact">Add to archive</a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-center pb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text search_mess">
                                    <i class="bi bi-search "></i>
                                </div>
                            </div>
                            <input type="text" class="form-control input_mess" placeholder="Search here"
                                aria-label="Text input with checkbox">
                        </div>
                    </div>

                    <!-- ============ -->

                    <!-- =============== -->

                    <div class="">
                        <div id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <div class=" button-A " id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                <div class="col-md-12 d-block pt-1 bg-color-c">
                                    <div class="d-flex justify-content-between    bg-color-c">
                                        <div class="d-flex justify-content-between">
                                            <div class="position-relative">
                                                <img class="image-A"
                                                    src="{{ url('frontend\img\messageChat\man_mess.png') }}">
                                                <span
                                                    class="translate-middle  bg-danger   border-light rounded-circle empty-badge-A">
                                                </span>
                                            </div>
                                            <div class="ms-3 mt-2">
                                                <span class=" text-heading-A">Richard Eric</span>
                                                <div class="text-box" data-maxlength="10">
                                                    <p class=" message-A">Xup man how much last? d kavdhkavddv</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 me-2">
                                            <p class="time-text-A"> 12/2/2022</p>
                                            <span class="translate-middle badge rounded-pill bg-warning ms-3">
                                                9
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="col-md-12 d-block pt-1 bg-color-c">
                                    <div class="d-flex justify-content-between    bg-color-c">
                                        <div class="d-flex justify-content-between">
                                            <div class="position-relative">
                                                <img class="image-A" src="{{ url('frontend\img\messageChat\image1.jpg') }}"
                                                    src="./Images/image1.jpg">
                                                <span
                                                    class="translate-middle  bg-danger   border-light rounded-circle empty-badge-A">
                                                </span>
                                            </div>
                                            <div class="ms-3 mt-2">
                                                <span class=" text-heading-A">Richard Eric</span>
                                                <div class="text-box" data-maxlength="10">
                                                    <p class=" message-A">Xup man how much last? d kavdhkavddv</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 me-2">
                                            <p class="time-text-A"> 12/2/2022</p>
                                            <span class="translate-middle badge rounded-pill bg-warning ms-3">
                                                3
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="col-md-12 d-block pt-1 bg-color-c">
                                    <div class="d-flex justify-content-between    bg-color-c">
                                        <div class="d-flex justify-content-between">
                                            <div class="position-relative">

                                                <img class="image-A"
                                                    src="{{ url('frontend\img\messageChat\man_mess1.png') }}">
                                                <span
                                                    class="translate-middle  bg-danger   border-light rounded-circle empty-badge-A">
                                                </span>
                                            </div>
                                            <div class="ms-3 mt-2">
                                                <span class=" text-heading-A">Richard Eric</span>
                                                <div class="text-box" data-maxlength="10">
                                                    <p class=" message-A">Xup man how much last? d kavdhkavddv</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 me-2">
                                            <p class="time-text-A"> 12/2/2022</p>
                                            <span class="translate-middle badge rounded-pill bg-warning ms-3">
                                                1
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="col-md-12 d-block pt-1 bg-color-c">
                                    <div class="d-flex justify-content-between    bg-color-c">
                                        <div class="d-flex justify-content-between">
                                            <div class="position-relative">
                                                <img class="image-A"
                                                    src="{{ url('frontend\img\messageChat\man_mess2.png') }}">
                                                <span
                                                    class="translate-middle  bg-danger   border-light rounded-circle empty-badge-A">
                                                </span>
                                            </div>
                                            <div class="ms-3 mt-2">
                                                <span class=" text-heading-A">Richard Eric</span>
                                                <div class="text-box" data-maxlength="10">
                                                    <p class=" message-A">Xup man how much last? d kavdhkavddv</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 me-2">
                                            <p class="time-text-A"> 12/2/2022</p>
                                            <span class="translate-middle badge rounded-pill bg-warning ms-3">
                                                9
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="col-md-12 d-block pt-1 bg-color-c">
                                    <div class="d-flex justify-content-between    bg-color-c">
                                        <div class="d-flex justify-content-between">
                                            <div class="position-relative">
                                                <img class="image-A"
                                                    src="{{ url('frontend\img\messageChat\man_mess3.png') }}">
                                                <span
                                                    class="translate-middle  bg-danger   border-light rounded-circle empty-badge-A">
                                                </span>
                                            </div>
                                            <div class="ms-3 mt-2">
                                                <span class=" text-heading-A">Richard Eric</span>
                                                <div class="text-box" data-maxlength="10">
                                                    <p class=" message-A">Xup man how much last? d kavdhkavddv</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 me-2">
                                            <p class="time-text-A"> 12/2/2022</p>
                                            <span class="translate-middle badge rounded-pill bg-warning ms-3">
                                                9
                                                <span class="visually-hidden">unread messages</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class=" col-lg-8 col-md-7 col-sm-6 p-0 g-0 ">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active bg-info hello3" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">


                        <div class="container_chart">
                            <div class="chat_name px-4">

                                <div>
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ url('frontend\img\chart_screen\profile_chart.png') }}"
                                                alt="" style="width:50px">

                                        </div>
                                        <div>
                                            <p class="chart_profile_name pt-3 px-3">Erilich Bachman</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-primary" href="#" role="button"><i
                                            class="bi bi-telephone px-2"></i> Show contact</a>
                                    </a>
                                    <!-- <p  class="chart_profile_name pt-3 px-3">Erilich Bachman</p> -->
                                </div>





                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-5 pt-5"></div>
                            </div>
                            <div class="row px-4 pt-5 mt-5 pb-5" style="position: relative;">
                                <div class="col-md-12">
                                    <div class="chart_message">
                                        <p class="p-3 chart_profile_name">Lorem ipsum dolor sit amet, <br> consectetur
                                            adipiscing elit. Tellus.</p>

                                    </div>
                                    <img src="{{ url('frontend\img\chart_screen\profile_chart.png') }}" alt=""
                                        style="width:50px">
                                    <p class="chart_profile_name">07:01</p>
                                </div>



                            </div>
                            <div class="row " style="position: relative;">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6  px-4 pt-5 pb-5 d-flex justify-content-end">
                                    <div>
                                        <div class="chart_message_second">
                                            <p class="p-3 chart_profile_name">Lorem ipsum dolor sit <br> amet, consectetur
                                            </p>

                                        </div>
                                        <img src="{{ url('frontend\img\chart_screen\second_person_profile.png') }}"
                                            alt="" style="width:50px">
                                        <p class="chart_profile_name">07:01</p>
                                    </div>
                                </div>
                            </div>


                            <div class="row px-4   mt-5 pb-5" style="position: relative;">
                                <div class="col-md-12">
                                    <div class="chart_message">
                                        <p class="p-3 chart_profile_name">Lorem ipsum</p>

                                    </div>
                                    <img src="{{ url('frontend\img\chart_screen\profile_chart.png') }}" alt=""
                                        style="width:50px">
                                    <p class="chart_profile_name">07:01</p>
                                </div>



                            </div>




                        </div>


                        <div class="profile_chat_part">

                            <div class="d-flex pt-3 pb-3 chat_btn justify-content-between justify-content-sm-center">


                                <button type="button" class="btn btn-outline-primary d-none   d-md-block mx-3">Is it
                                    Available</button>
                                <button type="button" class="btn btn-outline-primary  d-none    d-md-block mx-3">Hello
                                    Erilich How can i get this</button>
                                <button type="button" class="btn btn-outline-primary   d-none    d-sm-block  mx-3">Last
                                    Price</button>




                            </div>

                            <div class="chat_left_right ">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="d-flex pt-3 pb-3 ">
                                            <div>
                                                <img src="{{ url('frontend\img\chart_screen\profile_chart.png') }}"
                                                    alt="" style="width:50px">

                                            </div>
                                            <div>
                                                <input type="text" placeholder="Type your message here..."
                                                    class="input_chat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-3 pb-3">
                                        <div class="d-flex chat_icons">
                                            <div class="img_send_chart pt-2">
                                                <a href=""><img
                                                        src="{{ url('frontend\img\chart_screen\chart_mic.png') }}"
                                                        alt="" style="width:40px">
                                                </a>
                                            </div>
                                            <div class="image_send_mic">
                                                <a href="#"><img
                                                        src="{{ url('frontend\img\chart_screen\chart_send.png') }}"
                                                        alt="" style="width:50px">
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>







                    </div>
                    <div class="tab-pane fade bg-warning" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae architecto
                        nesciunt quod? Saepe excepturi autem reiciendis reprehenderit aliquam ex officia optio
                        pariatur sunt aliquid aperiam dolores quae error, dolorem minus, consequatur sequi ab
                        aspernatur, iure soluta voluptate! Eaque magni iusto nisi expedita perferendis dolorem
                        harum non voluptas suscipit possimus.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur recusandae architecto
                        nesciunt quod? Saepe excepturi autem reiciendis reprehenderit aliquam ex officia optio
                        pariatur sunt aliquid aperiam dolores quae error, dolorem minus, consequatur sequi ab
                        aspernatur, iure soluta voluptate! Eaque magni iusto nisi expedita perferendis dolorem
                        harum non voluptas suscipit possimus.
                    </div>

                </div>
            </div>
        </div>





    </div>
    <script>
        $(document).ready(function() {

            $(".text-box p").text(function(index, currentText) {
                var maxLength = $(this).parent().attr('data-maxlength');
                if (currentText.length >= maxLength) {
                    return currentText.substr(0, maxLength) + "...";
                } else {
                    return currentText
                }
            });

        });
    </script>






    <script>
        function changeLanguage(language) {
            var element = document.getElementById("url");
            element.value = language;
            element.innerHTML = language;
        }

        function showDropdown() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn_mess')) {
                var dropdowns = document.getElementsByClassName("dropdown-content_mess");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
@endsection

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listnbuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('frontend/css/about.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/buyproduct.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/chartscreen.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/post_ads.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/messagescreen.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- post Image select Css  start -->



    <!-- post Image select Css  start -->



</head>

<body>



    <div class="container-fluid p-2 shadow_nav mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid header_logo">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-5">
                                    <a class="" href="{{ url('/') }}">
                                        <img src="{{ url('frontend/img/old-logo-blue 2.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="col-md-5 ps-3 ms-5 aboutexternal">

                                    <a class="nav-link nav_item  " aria-current="page" href="#"
                                        style="float: left;">ABOUT US</a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar_setting" id="navbarSupportedContent"
                        style="position:relative">

                        <ul class="navbar-nav mb-2 mb-lg-0 ">

                            <li>
                                <div class="row aboutintenal">
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-md-12">

                                                <a class="nav-link nav_item  " aria-current="page" href="#"
                                                    style="float: left;">ABOUT US</a>


                                            </div>
                                        </div>
                                    </div>
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
                                            <img src="{{ url('frontend\img\about\about_sound.png') }}" alt=""
                                                class="mt-2" style="width: 25px;">
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
    </div>

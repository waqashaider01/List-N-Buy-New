<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listnbuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    <div class="hero">
        <section class="ftco-section">
            <div class="container-fluid">


                <div class="row logsignmain">

                    <div class="col-md-6 ">
                        <img src="./images/login_logo.png" alt="" class="p-4 loglogo">

                        <div class="sigin-bg-color">



                            <form class="row d-flex justify-content-center logform">
                                <div class="col-md-7 ">
                                    <h2 class="head-text-form">Create an account</h2>
                                </div>
                                <div class="col-md-7 pt-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" id="label-form" required placeholder="First Name">First Name</label>
                                            <div class="sectionblock space long-value-input-container">
                                                <input type="text" required class="long-value-input" value=""  placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" id="label-form">Last Name</label>
                                            <div class="sectionblock space long-value-input-container">
                                                <input type="text" required class="long-value-input" value=""  placeholder="Last Name"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 pt-4">
                                    <label class="form-label" id="label-form">Email</label>
                                    <div class="sectionblock space long-value-input-container">
                                        <input type="email" required placeholder="Enter your email"
                                            class="long-value-input" value="" />
                                    </div>
                                </div>
                                <div class="col-md-7 pt-4">
                                    <label class="form-label">Password</label>
                                    <div class="sectionblock space long-value-input-container">
                                        <input id="pswrd" type="password" placeholder="Password"  class="long-value-input"  class="pass">
                                        <span     style="position: absolute; right: -12px;">
                                            <!-- <i class="fas fa-lock showclose"   onclick="show()"></i> 
                                            <i class="fas fa-lock-open showopen mt-3" style="display: none;" onclick="showopen()"></i> 
                                           -->
                                           <i class="bi bi-lock showclose"  onclick="show()" style="font-size: 20px;"></i>
                                           <i class="bi bi-unlock showopen" style="display: none; font-size: 20px;" onclick="showopen()"   ></i>
                                          
                                        </span>
                                    </div>
                                  
                                    <script>
                                        function show(){
                                         var pswrd = document.getElementById('pswrd');
                                         var icon = document.querySelector('.showclose');
                                         var iconopen = document.querySelector('.showopen');

                                         if (pswrd.type === "password") {
                                          pswrd.type = "text";
                                        //  
                                          icon.style.display='none';
                                          iconopen.style.display='block';


                                         }else{
                                          pswrd.type = "password";
                                          icon.style.color = "grey";
                                         }
                                        }

                                        function showopen(){
                                         var pswrd = document.getElementById('pswrd');
                                         var icon = document.querySelector('.showclose');
                                         var iconopen = document.querySelector('.showopen');

                                         if (pswrd.type === "text") {
                                          pswrd.type = "password";
                                        //  
                                          icon.style.display='flex';
                                          icon.style.marginTop='15px';
                                          iconopen.style.display='none';


                                         }else{
                                          pswrd.type = "password";
                                          icon.style.color = "grey";
                                         }
                                        }
                                     </script>
                                </div>
                                <div class="col-md-7 mt-5">
                                  
 <button href="checkemail.html" class="btn btn-enter  form-control1"> Create your account </button> 
                                </div>
                                <div class="col-md-7 d-flex signupbtn">
                                    <div style="position: relative; top: 10px;">
                                        <span class="account mt-5">Already a member?
                                        </span>
                                        <a href="/login" class="sign_up_link">Sign in</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <div class="col-md-6  d-none d-md-flex  bg-primary" style="position: relative;">
                        <div class="row">
                          <div class="col-12">
                            <div class="row d-flex">
                                
                                    <div class="col-5 mt-3" style="position: relative; right: 60px;">
                                        <img  src="{{url('frontend\img\Group 631.png')}}"  alt="" style="width: 185px;">
                                    </div>
                                    <div class="col-5 mt-3">
                                        <img src="{{url('frontend\img\Group 620.png')}}"alt="" style="width: 185px; float: right;">
                                    </div>
                                    <div class="col-2">
                                        <img src="{{url('frontend\img\Vector 7.png')}}" alt="" style="width: 50px; float: right;">
                                    </div>
                                
                            </div>  
                            <p class="loginpragraph">Find Amazing Deals on  <br> ListnBuy Everyday!</p>
                          </div>
                          <div class="col-12">
                            <div class="row d-flex">
                                
                                    <div class="col-3" style="position: relative; right: 60px;">
                                        <img src="{{url('frontend\img\Group 630.png')}}" alt="" style="width: 170px;">
                                    </div>
                                    <div class="col-6"  >
                                        <img src="{{url('frontend\img\Group 621.png')}}" alt="" style="width:190px; position: absolute; bottom:0;">
                                    </div>
                                    <div class="col-2">
                                        <img src="{{url('frontend\img\Vector 8.png')}}" alt="" style="width: 100px; float: right; position: relative; top: 110px; left: 40px;">
                                    </div>
                                
                            </div>  
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>


 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 
  </body>
</html>

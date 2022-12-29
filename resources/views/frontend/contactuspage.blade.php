@extends('frontend.layout_with_nav.main2')
@section('main-container')

<div class=" secttiona  ">
            <div class=" containera container">
                <div class="contactInfo"> 
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="{{url('frontend\img\contact_us\location.png')}}"></span>
                                <span>2853 Brentwood Rd NE,<br>
                                    Washington, DC<br>
                                    20018, USA</span>
                                </span>
                            </li>
                            <li>
                                <span><img  src="{{url('frontend\img\contact_us\mail.png')}}"></span>
                               
                                <span><a href = "#">listnbuyinfo@gmail.com</a></span>
                            </li>
                            

                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="https://www.facebook.com"><img src="{{url('frontend\img\contact_us\1.png')}}"></a></li>
                        <li><a href="https://www.instagram.com"><img src="{{url('frontend\img\contact_us\3.png')}}"></a></li>
                        <li><a href="https://twitter.com"><img src="{{url('frontend\img\contact_us\2.png')}}"></a></li>
                        <li><a href="https://www.linkedin.com"><img src="{{url('frontend\img\contact_us\5.png')}}"></a></li>
                        
                    </ul>
                </div>
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="btn btn-lg btn-primary sendBtn">
                            send
                        </div>
                    </div>
                </div>
                    
                    
             
            </div>
            <div class="container-fluid mt-5 ">
                <div class=" ">
                    <iframe class="map w-full"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3103.6212649244544!2d-76.96727048528889!3d38.9326332524727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c79d9219ac05%3A0x36fdc48ed40334ff!2s2853%20Brentwood%20Rd%20NE%2C%20Washington%2C%20DC%2020018%2C%20USA!5e0!3m2!1sen!2s!4v1672146075229!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
               
            </div>
            </div>



@endsection


@extends('frontend.layout_with_nav.main2')
@section('main-container')
    <div class="banner-container">

        <div class="banner">

            <div class="contantabout mt-5">
                <h3>Simply put, <br> "Simplicity" is <br>
                    our keyword</h3>
            </div>
            <div class="carimg">
                <img src="{{ url('frontend\img\about\aboutbanner2.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid container-xxl aboutsecondbanner">
        <div class="row">
            <div class="col-md-6  col-lg-6" style="position: relative;">
                <img src="{{ url('frontend\img\about\aboutimg.png') }}" alt="" class="abouttextimg">

                <!-- <img src="{{ url('frontend\img\about\aboutimg1.png') }}" alt=""  class="abouttextimg"> -->
                <!-- <img src="{{ url('frontend\img\about\aboutdotted.png') }}" alt=""  class="abouttextimg1"> -->
            </div>
            <div class="col-md-6 mt-5 col-lg-6 ">
                <p class="abouttext">ABOUT US</p>

                <h3 class="abouthead">WHAT WE DO</h3>
                <div class="aboutline"></div>
                <br>
                <p class="aboutparagraph">Listnbuy.com was born out of the desire to bring that smooth interaction of a well
                    designed and communicative user's interface that transcends excellence in the transactions between the
                    buyer and the sellers trading on our platform. </p>
                <br>

                <p class="aboutparagraph"> Simply put, "Simplicity" is our keyword. Listnbuy™ provides the orderly entry and
                    display of our consumers based merchandise or services, by providing the seller a simplified platform
                    that makes it extremely easy to post their listings and publishing that same listing in a well
                    characterized and displayed order that affords the buyers a true experience of web shopping. <br>
                </p>
                <br>
                <p class="aboutparagraph">
                    Unlike other web sites, Listnbuy.com prioritizes the values of its customers based experiences, by
                    striving hard to interact with its customers via a feedback mechanism that is put in place to seriously
                    address any and all true viable needs and concern that affects our web and application users.</p>

            </div>

        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <p class="aboutparagraph">In brainstorming our ideas to forester a true and satisfactory experience,
                    Listnbuy.com has embarked on integrating a 10 to 15 seconds video capture of the sellers cinematographic
                    representation of the listed merchandise, that allows the buyer to experience a first hand glimpse of a
                    true and realistic view of the product prior to any contact or commitment with the seller</p>
                <p class="aboutparagraph">Our desired goal at Lisnbuy™ is to capture excellence and distribute that
                    excellence around the globe, so that our customer base will populate that experienced joy of an
                    international partnership in the Listnbuy™ brotherhood of acquiring and distribution.
                </p>
                <p class="aboutparagraph"> Our team at Listnbuy™. is made up of truly minded international individuals that
                    have invested their total and absolute commitments, expertise and dedication in making sure that we
                    produce this web platform that will always be second to none. </p>
                <p class="aboutparagraph">
                    From our team at Listnbuy™., we say "Welcome" to a great experience of the E-commerce world of buying
                    and selling. We are truly convinced that you will experience the true reality "About Us."</p>
                <br>
                <br>
                <br><br><br><br>
                <br><br><br><br>
            </div>
        </div>
    </div>
@endsection

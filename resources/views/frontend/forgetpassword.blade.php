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
</head>

<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-2 text-center">
                <img src="{{ url('frontend\img\login_logo.png') }}" alt="">
            </div>
            <div class="col-md-12 mt-4 text-center">
                <img src="{{ url('frontend\img\forgetkey.png') }}" alt="" class="imgsize">
            </div>
            <div class="col-md-12 mt-3 text-center">
                <h2 class="head-text-form">Forget Password?</h2>
                <p class="check_your_email">No worries, we”ll send you reset instructions. </p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 ">
                    <label class="form-label" id="label-form">Email</label>
                    <div class="sectionblock space long-value-input-container">
                        <input type="text" required class="long-value-input" value=""
                            placeholder="Enter your email" />
                    </div>
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-5">
                    <a href="/check-email">
                        <button class="btn  btn-enter  form-control1"> Reset Password </button>
                    </a>
                </div>

            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-3 backlog">
                    <a href="/login"><img src="{{ url('frontend\img\backtisign.png') }}" alt=""
                            class="pb-1 forward_back_icon">

                        <span class="check_your_email ps-3"> Back to Sign in
                        </span>
                    </a>



                </div>

            </div>




        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</body>

</html>

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

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 mt-2 text-center">
                <img src="{{ url('frontend\img\login_logo.png') }}" class="loglogo" alt="" />
            </div>
            <div class="col-md-12 mt-4 text-center">
                <img src="{{ url('frontend\img\forgetkey.png') }}" alt="" class="imgsize" />
            </div>
            <div class="col-md-12 mt-2 text-center">
                <h2 class="head-text-form ">Set a new password</h2>
                <p class="check_your_email">
                    Your new password must be different <br />
                    from the previously used password
                </p>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt3">
                    <label class="form-label">Password</label>
                    <div class="sectionblock space long-value-input-container">
                        <input id="pswrd" type="password" placeholder="Create Password" class="long-value-input"
                            class="pass" />
                        <span style="position: absolute; right: -10px">
                            <!-- <i class="fas fa-lock showclose" onclick="show()"></i>
                <i
                  class="fas fa-lock-open showopen mt-3"
                  style="display: none"
                  onclick="showopen()"
                ></i> -->
                            <i class="bi bi-lock showclose" onclick="show()" style="font-size: 20px;"></i>
                            <i class="bi bi-unlock showopen" style="display: none; font-size: 20px;"
                                onclick="showopen()"></i>

                        </span>
                    </div>

                    <script>
                        function show() {
                            var pswrd = document.getElementById("pswrd");
                            var icon = document.querySelector(".showclose");
                            var iconopen = document.querySelector(".showopen");

                            if (pswrd.type === "password") {
                                pswrd.type = "text";
                                //
                                icon.style.display = "none";
                                iconopen.style.display = "block";
                            } else {
                                pswrd.type = "password";
                                icon.style.color = "grey";
                            }
                        }

                        function showopen() {
                            var pswrd = document.getElementById("pswrd");
                            var icon = document.querySelector(".showclose");
                            var iconopen = document.querySelector(".showopen");

                            if (pswrd.type === "text") {
                                pswrd.type = "password";
                                //
                                icon.style.display = "flex";
                                icon.style.marginTop = "15px";
                                iconopen.style.display = "none";
                            } else {
                                pswrd.type = "password";
                                icon.style.color = "grey";
                            }
                        }
                    </script>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-4">
                    <label class="form-label">Confirm Password</label>
                    <div class="sectionblock space long-value-input-container">
                        <input id="pswrdsecond" type="password" placeholder="Create Password" class="long-value-input"
                            class="pass" />
                        <span style="position: absolute; right: -10px">
                            <!-- <i
                  class="fas fa-lock showclosesec"
                  onclick="showclosesecond()"
                ></i>
                <i
                  class="fas fa-lock-open showopensec mt-3"
                  style="display: none"
                  onclick="showopensecond()"
                ></i> -->
                            <i class="bi bi-lock  showclosesec" onclick=" showclosesecond()"
                                style="font-size: 20px;"></i>
                            <i class="bi bi-unlock  showopensec" style="display: none; font-size: 20px;"
                                onclick=" showopensecond()"></i>
                        </span>
                    </div>

                    <script>
                        function showclosesecond() {
                            var pswrd = document.getElementById("pswrdsecond");
                            var icon = document.querySelector(".showclosesec");
                            var iconopen = document.querySelector(".showopensec");

                            if (pswrd.type === "password") {
                                pswrd.type = "text";
                                //
                                icon.style.display = "none";
                                iconopen.style.display = "block";
                            } else {
                                pswrd.type = "password";
                                icon.style.color = "grey";
                            }
                        }

                        function showopensecond() {
                            var pswrd = document.getElementById("pswrdsecond");
                            var icon = document.querySelector(".showclosesec");
                            var iconopen = document.querySelector(".showopensec");

                            if (pswrd.type === "text") {
                                pswrd.type = "password";
                                //
                                icon.style.display = "flex";
                                icon.style.marginTop = "15px";
                                iconopen.style.display = "none";
                            } else {
                                pswrd.type = "password";
                                icon.style.color = "grey";
                            }
                        }
                    </script>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-4">
                    <a href="/password-reset">
                        <button class="btn btn-enter form-control1">Reset Password</button>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-3 backlog">
                    <a href="/login"><img src="{{ url('frontend\img\backtisign.png') }}" alt=""
                            class="pb-1 forward_back_icon" />

                        <span class="check_your_email ps-3"> Back to Sign in </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</body>

</html>

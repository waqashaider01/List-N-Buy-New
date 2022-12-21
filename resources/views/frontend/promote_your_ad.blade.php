@extends('frontend.layout_with_nav.main2')
@section('main-container')
    <div class="container shadow">
        <div class="row">
            {{-- <div class="col-2">
                <a href="" class="text_d_none">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span class="ms-3">Back</span>
                </a>
            </div> --}}
            <div class="col-12  text-center">
                <h6 class="promote_add_heading mt-5">Promote Your Ads</h6>
                <p class="pro_text">To post your ad please choose one of the option</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="d-grid gap-4 col-md-5 col-lg-3 col-sm-5 col-7  mx-auto mb-4">
                    <button class="btn adds_btn py-3" type="button">Premium Plus Ad</button>
                    <button class="btn adds_btn2 py-3" type="button">Premium Ad </button>
                    <button class="btn adds_btn2 py-3" type="button">Basic Plus Ads</button>
                    <button class="btn adds_btn2 py-3" type="button">Basic Ads</button>
                </div>
                <div class="d-grid gap-2 col-7 mx-auto mb-5">
                    <button class="btn adds_btn py-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Post Ad</button>

                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered justify-content-center">
                        <div class="modal-content" style="width: 70%">

                            <div class="container">
                                <div class="row mb-5 mb-5">
                                    <div class="col-12 p-4 text-center">
                                        <img src="{{ url('frontend\img\donepassword.png') }}" alt=""
                                            class="imgsize">
                                    </div>
                                    <div class="col-12 text-center">
                                        <h2 class="adds_model">Success</h2>
                                        <p class="adds_model_text">Thank you!</p>
                                        <p class="adds_model_text">You have been enrolled for</p>
                                        <p class="adds_model_text">Premium PLuse Ad</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

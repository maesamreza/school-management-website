@extends('layouts.master')
@section('content')
    <style>
        .banner {
            background-image: url("{{ asset('assets/img/pricing/pricing-bg.jpeg') }}");
            width: 100%;
            height: 68vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            object-fit: cover;
            display: flex;
            align-items: center;

        }

        .banner::before {
            content: "";
            display: block;
            width: 100%;
            height: 68vh;
            background-color: #e40c5b;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.9;
            mix-blend-mode: multiply;

        }

        .banner>* {
            z-index: 10;
            position: relative;
        }

        .plan-heading {
            font-size: 3.75rem;
            font-weight: 800;
        }

        .price-tag-text {
            font-size: .875rem;
        }

        .theme_btn_purple {
            background-color: #4c2d8c !important;
            padding: 0.7rem !important;
            font-size: .875rem !important;
        }

        .theme_btn_pink {
            background-color: #f32470 !important;
            padding: 0.7rem !important;
            font-size: .875rem !important;
        }

        .card {
            padding: 0px !important;
        }

        .fa-check {
            color: #4bd07c;
        }

        .font-medium {
            font-weight: 500;
        }

        .looking-for-feature {
            background-color: #FAFAFA;
            min-height: 150px;

        }
    </style>


    <section>

        <div class="banner">
            <div class="w-100 ms-md-5 pt-5">
                <h1 class="text-white plan-heading text-center text-md-start">Pricing Plan</h1>
                <p class="h5 text-white text-center text-md-start mt-3">Price comparison of InstiKit Variants</p>
            </div>
            <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
        </div>

    </section>

    <section>

        <div class="w-100 ms-md-5 pt-5">
            <h1 class=" text-center">InstiKit is Affordable!</h1>
            <p class="h5 text-center mt-3 px-1 px-lg-0">We are on a mission to offer best possible School ERP solution at a
                affordable cost. Check out our pricing.</p>
        </div>
        <div class="row justify-content-evenly mt-md-5">
            <div class="col-lg-3 col-md-6 my-2 card rounded-3" style="width: 18rem;">
                <div class="price-tag  p-3">
                    <p class="h5 text-black my-2">InstiKit Lite</p>
                    <p class="price-tag-text my-2">Limited Feature School ERP, Suitable for School < 100 Students</p>
                            <h1 class="my-4">$0</h1>
                            <div class="d-flex justify-content-around">

                                <button class="btn theme_btn theme_btn_pink">Live Demo</button>
                                <button class="btn theme_btn theme_btn_purple">Download</button>
                            </div>
                </div>
                <hr>

                <p class="ms-2 text-black my-2 font-medium">WHAT'S INCLUDED
                </p>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Self Hosted License</p>
                </div>
                <p class="ms-2 text-black mt-4 mb-2 font-medium">OPTIONAL
                </p>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> 12 Month of Support @ $149</p>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 my-2 card rounded-3" style="width: 18rem;">
                <div class="price-tag p-3">
                    <p class="h5 text-black my-2">InstiKit Lite</p>
                    <p class="price-tag-text my-2">Standard Feature School ERP, Suitable for School < 500 Students</p>
                            <h1 class="my-4">$19</h1>
                            <div class="d-flex justify-content-around">

                                <button class="btn theme_btn theme_btn_pink">Live Demo</button>
                                <button class="btn theme_btn theme_btn_purple">Download</button>
                            </div>
                </div>
                <hr>

                <p class="ms-2 text-black my-2 font-medium">WHAT'S INCLUDED
                </p>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Self Hosted License</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Single Instance</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> White Label Solution</p>
                </div>
                <p class="ms-2 text-black mt-4 mb-2 font-medium">OPTIONAL
                </p>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Free Installation (Extended License)</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> 12 Month of Support @ $149</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2 card rounded-3" style="width: 18rem;">
                <div class="price-tag p-3">
                    <p class="h5 text-black my-2">InstiKit Lite</p>
                    <p class="price-tag-text my-2">Premium Feature School ERP, Suitable for School > 500 Students</p>
                    <h1 class="my-4">$49</h1>
                    <div class="d-flex justify-content-around">

                        <button class="btn theme_btn theme_btn_pink">Live Demo</button>
                        <button class="btn theme_btn theme_btn_purple">Download</button>
                    </div>
                </div>
                <hr>

                <p class="ms-2 text-black my-2 font-medium">WHAT'S INCLUDED
                </p>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Self Hosted License</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Single Instance</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> White Label Solution</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Free Installation</p>
                </div>
                <p class="ms-2 text-black mt-4 mb-2 font-medium">OPTIONAL
                </p>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Server Pre-requisite Setup (Developer License)</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Pre-populated Demo Data (Developer License)</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> 12 Month of Support @ $149</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Developer License (Unlimited Instances) @ $1499</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2 card rounded-3" style="width: 18rem;">
                <div class="price-tag p-3">
                    <p class="h5 text-black my-2">InstiKit Lite</p>
                    <p class="price-tag-text my-2">Multi School ERP SaaS based Solution, Suitable for Resellers</p>
                    <h1 class="my-4">$299</h1>
                    <div class="d-flex justify-content-around">

                        <button class="btn theme_btn theme_btn_pink">Live Demo</button>
                        <button class="btn theme_btn theme_btn_purple">Download</button>
                    </div>
                </div>
                <hr>


                <p class="ms-2 text-black my-2 font-medium">WHAT'S INCLUDED
                </p>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Self Hosted License</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Single Instance</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> White Label Solution</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Free Installation</p>
                </div>

                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Server Pre-requisite Setup</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text">Pre-populated Demo Data</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Admin Interface</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> Accept Online Payment</p>
                </div>
                <p class="ms-2 text-black mt-4 mb-2 font-medium">OPTIONAL
                </p>


                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text"> 12 Month of Support @ $699</p>
                </div>
                <div class="d-flex my-2 align-items-center ms-3">
                    <i class="fa-solid fa-check"></i>
                    <p class="ms-3 price-tag-text">Developer License (Unlimited Instances) @ $2999</p>
                </div>

            </div>

        </div>
    </section>

    <div class="looking-for-feature row justify-content-around align-items-center mt-5 py-5">

        <div class="col-lg-8">
            <h1 class="text-center text-lg-start ms-lg-5">Looking for Feature Comparison?</h1>
        </div>
        <div class="col-2">
            <button class="btn theme_btn  mt-4 mt-lg-0">Check Here</button>
        </div>

    </div>
@endsection

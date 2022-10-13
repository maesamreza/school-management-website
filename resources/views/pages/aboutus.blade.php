@extends('layouts.master')
@section('content')
    <style>
        @font-face {
            font-family: "interregular";
            src: url(../font/static/Inter-Regular.ttf);
        }

        @font-face {
            font-family: "interregular-bold";
            src: url(../font/static/Inter-ExtraBold.ttf);
        }

        @font-face {
            font-family: "interregular-light";
            src: url(../font/static/Inter-Light.ttf);
        }

        .font_text {
            font-family: "interregular" !important;
        }

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
            background-color: #0951CC;
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

        .reseller_heading {
            font-size: 60px;
            line-height: 60px;
            letter-spacing: -1.5px;
            font-family: "interregular-bold";
            font-weight: bolder;
        }

        .faq_heading {
            font-size: 40px;
            line-height: 60px;
            letter-spacing: -1.5px;
            font-family: "interregular-bold";
            font-weight: bolder;
            margin-top: 25px;
        }

        .accordion-item {
            border: 1px solid silver !important;
            font-family: "interregular" !important;
        }

        .faqs {
            margin-top: 40px !important;
        }
        .p_text {
            font-family: "interregular" !important;
        }
        .theme_btn_pink {
            background-color: #0951CC !important;
            padding: 10px 15px !important;
            font-size: .875rem !important;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
    </style>



    <section>

        <section>
            <div class="banner">
                <div class="w-100 ms-md-5 pt-5 padding-left">
                    <h1 class="text-white plan-heading text-md-start reseller_heading">About US</h1>
                    <p class="h5 text-white text-md-start mt-3">To seek truth requires one to ask the right questions.</p>
                </div>
                <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
            </div>
        </section>




        <div class="faq_main">

            <div class="container">
                <div class="row">

                    <div class="container">
                        <div class="row my-5">
                            <div class="col-md-6">
                                <div>
                                    <h2 class="faq_heading">
                                        About US
                                    </h2>
                                    <h4 class="mt-2 p_text">
                                        A Message from Editute's Principle
                                    </h4>
                                    <p class="p_text mt-3">
                                        Thank you for your interest in learning more about how The Editute delivers an
                                        extraordinary educational experience.

                                        Located in the heart of Cincinnati, The Editute serves children starting at 18 months
                                        and continues through high school. We are co-educational, Catholic, private,
                                        independent and college-preparatory.
                                        <br><br>
                                        We provide a warm and inclusive culture where each child is known, their God-given
                                        talents are valued and relationships flourish.

                                    </p>

                                    <button class="theme_btn_pink mt-4">Contact US</button>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img class="img-fluid" src="{{asset('assets/img/about/about.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>




    </section>
@endsection

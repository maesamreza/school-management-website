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

        .plan-heading {
            font-size: 3.75rem;
            font-weight: 800;
        }


        @media(max-width: 768px) {

            .plan-heading {
                font-size: 2rem;
            }
            .plan-heading {
            font-size: 2rem !important;
            text-align: start !important;
        }
            .plan-para {
            text-align: start !important;
        }
        }


        /* convinced_section start */

        .convinced_section {
            background-color: #312E81;
            margin-top: 70px;
        }

        .convinced_heading {
            color: #fff;
            font-family: "interregular";
            font-size: 36px;
            ;
            line-height: 40px;
        }

        .convinced_para {
            color: #C7D2FE;
            font-family: "interregular";
            font-size: 18px;
            ;
            line-height: 24px;
        }

        .convinced_btn {
            padding: 12px 24px;
            border-radius: 6px;
            font-family: "interregular";
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            display: block;
            color: #0951CC;
            border: 1px solid #0951CC;
            background-color: #fff;
        }

        .convinced_btn:hover {
            padding: 12px 24px;
            border-radius: 6px;
            font-family: "interregular";
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            display: block;
            color: #fff;
            border: 1px solid #fff;
            background-color: #0951CC;
        }

        /* convinced_section start */
    </style>

    <section>

        <div class="banner">
            <div class="w-100 ms-md-5 pt-5 padding-left">
                <h1 class="text-white plan-heading text-center text-md-start">
                    Looking for Support?</h1>
                <p class="plan-para h5 text-white text-center text-md-start mt-3">Support is available for buyers having valid license
                    & support period.</p>
            </div>
            <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
        </div>

    </section>

    <div class="container">
        <div class="pt-5">
            <h1 class=" text-center">We are available for support!</h1>
            <p class="h6 text-center mt-3 px-1 px-lg-5">Please make sure your purchase includes support package! In case
                support not purchased or expired, kindly buy/renew your support.</p>

        </div>
        <div class="row my-5">
            <div class="col-lg-6 my-4 d-flex align-items-start">
                <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                <div class="ms-2">
                    <h5 class="mb-2">Read Documentation</h5>
                    <p>Read the documentation carefully, Search for the terms you would like to get result.</p>

                </div>
            </div>
            <div class="col-lg-6 my-4 d-flex align-items-start">
                <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                <div class="ms-2">
                    <h5 class="mb-2">Send us an Email</h5>
                    <p>Didn't find any documentation, Send us an email to hello@scriptmint.com.</p>

                </div>
            </div>


            <div class="col-lg-6 my-4 d-flex align-items-start">
                <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                <div class="ms-2">
                    <h5 class="mb-2">Send Skype Message</h5>
                    <p>We are available on Skype. Our Skype Id is @ScriptMint or use our email hello@scriptmint.com</p>

                </div>
            </div>

            <div class="col-lg-6 my-4 d-flex align-items-start">
                <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                <div class="ms-2">
                    <h5 class="mb-2">Send WhatsApp Message</h5>
                    <p>For any Sales or Support related query, you can WhatsApp us at +91 8-3055-7055-8</p>

                </div>
            </div>
        </div>
    </div>




    {{-- Convinced section start --}}


    <section class="convinced_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="py-5">
                        <h1 class="text-center convinced_heading">
                            Convinced? Let's proceed to buy. <br>
                            Start using Editute today!
                        </h1>
                        <p class="text-center convinced_para mt-4">
                            We’d love to hear from you. Call 8-3055-7055-8 to get in touch or send <br> us email to
                            hello@scriptmint.com
                        </p>
                        <a href="{{('/comparison')}}">
                        <button class="convinced_btn mb-3 mt-5">
                            Buy Now!
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Convinced section end --}}
@endsection

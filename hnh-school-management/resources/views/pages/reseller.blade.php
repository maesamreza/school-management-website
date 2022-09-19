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

        .reseller_heading {
            font-size: 60px;
            line-height: 60px;
            letter-spacing: -1.5px;
            font-family: "interregular-bold";
            font-weight: bolder;
        }

        .reseller_tagline {
            font-size: 20px;
            line-height: 28px;
            color: #E0E7FF;
        }

        .join_heading {
            font-size: 30px;
            line-height: 36px;
            color: #181818;
            font-family: "interregular-bold";
        }

        .join_para {
            font-size: 18px;
            line-height: 28px;
            color: #71717A;
        }

        .fa-check {
            color: #4bd07c;
        }

        .join_card_heading {
            font-size: 18px;
            line-height: 24px;
            color: #181818;
            font-family: "interregular";
        }

        .join_card_para {
            font-size: 16px;
            line-height: 24px;
            color: #71717A;
            font-family: "interregular";
        }

        .form-control:focus {
            outline: none;
            border: none;
            box-shadow: 0 0 0 2.5px #e40c5b;

        }

        #lets_heading1 {
            font-size: 36px;
            line-height: 40px;  
            letter-spacing: -0.9px;
            color: #000;
            font-family: "interregular-bold";
        }
        .lets_para {
            font-size: 18px;
            line-height: 28px;  
            color: #71717A;
            font-family: "interregular";
        }
    </style>


    <section>
        <div class="banner">
            <div class="w-100 ms-md-5 pt-5">
                <h1 class="text-white plan-heading text-md-start reseller_heading">Reseller Program</h1>
                <p class="h5 text-white text-md-start mt-3">All about Reseller Program and its benefit!</p>
            </div>
            <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
        </div>
    </section>


    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="join_heading text-center">
                        Join Authorised Reseller Club
                    </h1>
                    <p class="join_para text-center mt-2">
                        If you are an Individual or a Company looking to resell School ERP Solution, then here is <br> why
                        you should join InstiKit Reseller Program.
                    </p>
                </div>
            </div>


    </section>


    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4 my-4 d-flex align-items-start">
                <i class="fa-solid fa-check"></i>
                <div class="ms-2">
                    <h5 class="join_card_heading">100% White Label Solution</h5>
                    <p class="mt-2 join_card_para">
                        InstiKit offers you to resell School ERP Solution with your own brand name & assets.
                    </p>
                </div>
            </div>


            <div class="col-md-4 my-4 d-flex align-items-start">
                <i class="fa-solid fa-check"></i>
                <div class="ms-2">
                    <h5 class="join_card_heading">Demo with Sample Data</h5>
                    <p class="mt-2 join_card_para">
                        Your first purchase comes with a Lifetime Free Demo Account with Sample Data in it.
                    </p>
                </div>
            </div>


            <div class="col-md-4 my-4 d-flex align-items-start">
                <i class="fa-solid fa-check"></i>
                <div class="ms-2">
                    <h5 class="join_card_heading">Free Updates</h5>
                    <p class="mt-2 join_card_para">
                        Resellers are entitled to get FREE updates for their valid support period.
                    </p>
                </div>
            </div>




        </div>

        <div class="row mt-1">
            <div class="col-md-4 my-4 d-flex align-items-start">
                <i class="fa-solid fa-check"></i>
                <div class="ms-2">
                    <h5 class="join_card_heading">50% Off on Customization</h5>
                    <p class="mt-2 join_card_para">
                        Resellers get up-to 50% Off on their new Feature Request & Customization.
                    </p>
                </div>
            </div>


            <div class="col-md-4 my-4 d-flex align-items-start">
                <i class="fa-solid fa-check"></i>
                <div class="ms-2">
                    <h5 class="join_card_heading">Priority Support</h5>
                    <p class="mt-2 join_card_para">
                        As a Reseller, you get Priority Support on your queries & issues over email.
                    </p>
                </div>
            </div>


            <div class="col-md-4 my-4 d-flex align-items-start">
                <i class="fa-solid fa-check"></i>
                <div class="ms-2">
                    <h5 class="join_card_heading">Discount on Bulk Purchase</h5>
                    <p class="mt-2 join_card_para">
                        Resellers can get additional benefit, You can now save up-to 40% on Bulk Purchase
                    </p>
                </div>
            </div>

        </div>

    </div>


    {{-- form section --}}



    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="form_container mx-auto">
                    <div class="pt-5">
                        <h1 id="lets_heading1">Let's work together!</h1>
                        <p class="mt-3 px-1 px-lg-0 lets_para">There is no full time commitment, You can become
                            our Authorised Reseller and setup your own School ERP Solution powered by ScriptMint.</p>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6 my-2">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 my-2">
                            <label for="last name" class="form-label">Last Name</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="col my-2">
                        <label for="last name" class="form-label">Company Name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col my-2">
                        <label for="last name" class="form-label">Email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col my-2">
                        <label for="last name" class="form-label">Phone</label>
                        <input type="number" class="form-control">

                    </div>

                    <div class="col my-2">
                        <label for="last name" class="form-label">Message</label>
                        <textarea type="text" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="col">
                        <button class="w-100 btn theme_btn">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-fluid">
                    <img class="img-fluid" src="{{ asset('assets/img/reseller/reseller.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

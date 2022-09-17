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
        opacity: 0.7;
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
    </style>

<section>

<div class="banner">
    <div class="w-100 ms-md-5 pt-5">
        <h1 class="text-white plan-heading text-center text-md-start">
Looking for Support?</h1>
        <p class="h5 text-white text-center text-md-start mt-3">Support is available for buyers having valid license & support period.</p>
    </div>
    <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
</div>

</section>

<div class="container">
<div class="pt-5">
        <h1 class=" text-center">We are available for support!</h1>
        <p class="h6 text-center mt-3 px-1 px-lg-5">Please make sure your purchase includes support package! In case support not purchased or expired, kindly buy/renew your support.</p>

    </div>
    <div class="row my-5">
        <div class="col-lg-6 my-4 d-flex align-items-center">
            <img src="{{asset('assets/img/chose/01.png')}}" alt="">
            <div class="ms-2">
                <h5 class="mb-2">Read Documentation</h5>
                <p>Read the documentation carefully, Search for the terms you would like to get result.</p>

            </div>
        </div>
        <div class="col-lg-6 my-4 d-flex align-items-center">
            <img src="{{asset('assets/img/chose/02.png')}}" alt="">
            <div class="ms-2">
                <h5 class="mb-2">Send us an Email</h5>
                <p>Didn't find any documentation, Send us an email to hello@scriptmint.com.</p>

            </div>
        </div>


        <div class="col-lg-6 my-4 d-flex align-items-center">
            <img src="{{asset('assets/img/chose/03.png')}}" alt="">
            <div class="ms-2">
                <h5 class="mb-2">Send Skype Message</h5>
                <p>We are available on Skype. Our Skype Id is @ScriptMint or use our email hello@scriptmint.com</p>

            </div>
        </div>

        <div class="col-lg-6 my-4 d-flex align-items-center">
            <img src="{{asset('assets/img/chose/04.png')}}" alt="">
            <div class="ms-2">
                <h5 class="mb-2">Send WhatsApp Message</h5>
                <p>For any Sales or Support related query, you can WhatsApp us at +91 8-3055-7055-8</p>

            </div>
        </div>
    </div>
</div>


@endsection

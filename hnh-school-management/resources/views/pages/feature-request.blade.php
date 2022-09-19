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
            font-family: "interregular-bold";
        }

        .we-text {
            font-size: 18px;
            line-height: 24px;
            font-family: "interregular";
            color: #71717B;
        }

        .Reach_text {
            font-size: 36px;
            line-height: 40px;
            letter-spacing: -0.9px;
            font-family: "interregular-bold";
            color: #18181B;
        }

        .form-control:focus {
            outline: none;
            border: none;
            box-shadow: 0 0 0 2.5px #e40c5b;

        }   

        .form_container {
            width: 600px;
        }

        @media(max-width:768px) {
            .form_container {
                width: 96%;
            }
        }
    </style>

    <section>

        <div class="banner">
            <div class="w-100 ms-md-5 pt-5">
                <h1 class="text-white plan-heading text-center text-md-start">Feature Request</h1>
                <p class="h5 text-white text-center text-md-start mt-3">Didn't find something you are looking for? Request
                    for new features!</p>
            </div>
            <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
        </div>

    </section>


    <section>
        <div class="form_container mx-auto">

            <div class="pt-5">
                <h1 class=" text-center Reach_text">Reach us for New Features</h1>
                <p class="h5 text-center mt-3 px-1 px-lg-0 we-text">We would like to hear from you. Share your ideas/features
                    you would like to have in InstiKit!</p>
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
        </div>
    </section>
@endsection

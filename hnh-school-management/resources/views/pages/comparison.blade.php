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

    .main-div {
        margin-top: 100px;
    }

    .text-sm {
        font-size: .875rem;
        /* line-height: 1.25rem; */
    }

    .card hr {
        /* margin: 12px 0 !important; */
    }

    hr {
        margin: 0px 0 !important;
    }

    body {
        background-color: #F8F9FA;
    }

    .fa-check {
        color: #0951CC;

    }

    .

    .text-pink {
        color: #0951CC !important;

    }

    .pink-border {
        border: 2px solid #0951CC;
    }

    .card {
        padding: 10px 0;
        border-radius: 10px !important;
        width: 16rem !important;
        margin: auto;
    }

    .uper_card{
        padding: 0px 0 !important;
    }

    @media (min-width:768px) {
        .card {

            width: 12rem !important;
        }
        
    }
  

    .col-black-border {
        border-top: 2px solid black;
        padding-top: 50px;
        margin-top: -0.079rem !important;
    }

    .col-pink-border {
        border-top: 2px solid #0951CC;
        padding-top: 50px;
        margin-top: -0.079rem !important;
    }

    .row-black-border {
        border-top: 1px solid silver;

    }

    @media (min-width:992px) {
        .side-bar {
            padding-top: 9.8rem;
        }



    }
    @media (max-width:800px) {
            .col-black-border {
                border-top: none !important;

            }

            .row-black-border {
                border-top: none !important;

            }

            .col-pink-border {
                border-top: none !important;

            }
        }

        .plan-column p{
            margin: 10px 0 !important;
        }

        .plan-column1 p{
            margin: 0.615rem 0 !important;
        }
        .variants{
            font-size: 3.75rem;
            font-weight: 800;
            font-family: "interregular-bold";
        }
        .variants-tag-line{
            font-size: 20px;
            line-height: 28px;
            color: #E0E7FF;
            font-family: "interregular";
        }
        @media (max-width:768px) {
        .variants{
            font-size: 2rem !important;
        }
    }
</style>

<section>

    <div class="banner">
        <div class="w-100 ms-md-5 pt-5 padding-left">
            <h1 class="variants text-white text-center text-md-start">
                InstiKit Variants
            </h1>
            <p class="h6 text-white text-center variants-tag-line text-md-start mt-3">Detailed comparison between InstiKit Variants</p>
        </div>
        <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
    </div>

</section>
<div class="container-fluid main-div bg-light">
    <div class="row justify-content-lg-around row-black-border">
        <div class="col-lg-3 plan-column1 side-bar ps-lg-5">
            <p class="h6 text-black">Technical Comparison</p>

            <p class="text-sm">Free Installation & Setup
            </p>
            <hr>
            <p class="text-sm">Server Requirements
            </p>
            <hr>
            <p class="text-sm">Pre-populated Demo Data
            </p>
            <hr>
            <p class="text-sm">Support
            </p>
            <hr>
            <p class="text-sm">Commercial Usage
            </p>



        </div>
        <div class="col-lg-2  col-black-border">
            <p class="h6 text-black">InstiKit Lite <span class="h4 fw-bold">$0</span></p>
            <p class="text-sm">Limited Feature School ERP, Suitable for School < 100 Students </p>
                    <div class="card uper_card plan-column mt-4 rounded border border-2 shadow text-center">
                        <p><i class="fa-solid fa-x"></i></p>
                        <hr>
                        <p class="text-sm text-black">Shared Server</p>
                        <hr>
                        <p><i class="fa-solid fa-x"></i></p>
                        <hr>
                        <p class="text-sm text-black">No Support</p>
                        <hr>
                        <p><i class="fa-solid fa-x"></i></p>
                    </div>





        </div>
        <div class="col-lg-2 col-black-border">
            <p class="h6 text-black">InstiKit Regular <span class="h4 fw-bold">$19</span></p>
            <p class="text-sm">Limited Feature School ERP, Suitable for School < 100 Students </p>
                    <div class="card uper_card plan-column mt-4 rounded shadow text-center">
                       <p> <i class="fa-solid fa-x"></i></p>
                        <hr>
                        <p class="text-sm text-black">Shared Server</p>
                        <hr>
                        <p> <i class="fa-solid fa-x"></i></p>
                        <hr>
                        <p class="text-sm text-black">No Support</p>
                        <hr>
                        <p> <i class="fa-solid fa-x"></i></p>
                    </div>



        </div>



        <div class="col-lg-2  col-pink-border">
            <p class="h6 text-pink">InstiKit Plus <span class="h4 text-black fw-bold">$49</span></p>
            <p class="text-sm">Premium Feature School ERP, Suitable for School > 500 Students
            </p>
            <div class="card uper_card mt-4 plan-column pink-border rounded shadow text-center">
            <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-pink">VPS or Dedicated</p>
                <hr>
                <p> <i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-pink">Installation Support</p>
                <hr>
                <p>  <i class="fa-solid fa-check"></i></p>
            </div>



        </div>
        <div class="col-lg-2 col-black-border">
            <p class="h6 text-black">InstiKit SaaS <span class="h4 fw-bold">$299</span></p>
            <p class="text-sm">Limited Feature School ERP, Suitable for School < 100 Students </p>
                    <div class="card uper_card plan-column mt-4 rounded shadow text-center">
                    <p><i class="fa-solid fa-check"></i></p>
                        <hr>
                        <p class="text-sm text-black">VPS or Dedicated or Cloud</p>
                        <hr>
                        <p><i class="fa-solid fa-check"></i></p>
                        <hr>
                        <p class="text-sm text-black">Installation Support</p>
                        <hr>
                        <p><i class="fa-solid fa-check"></i></p>
                    </div>



        </div>
    </div>


    <div class="row justify-content-lg-around">
        <div class="col-lg-3 plan-column1 mt-4 ps-lg-5">
            <p class="h6 text-black pb-2 ">Feature Comparision</p>

            <p class="text-sm">Dashboard
            </p>
            <hr>
            <p class="text-sm">Live Class
            </p>
            <hr>
            <p class="text-sm">Integration with Connect
            </p>
            <hr>
            <p class="text-sm">Reception Module
            </p>
            <hr>

            <p class="text-sm">Institute Documents
            </p>
            <hr>
            <p class="text-sm">Online Registration
            </p>
            <hr>
            <p class="text-sm">Academic Module
            </p>
            <hr>
            <p class="text-sm">Class Timing & Timetable
            </p>
            <hr>


            <p class="text-sm">Student Module
            </p>
            <hr>
            <p class="text-sm">Employee Module
            </p>
            <hr>
            <p class="text-sm">Exam Module
            </p>
            <hr>
            <p class="text-sm">Online Exam Module
            </p>
            <hr>

            <p class="text-sm">Custom Exam Report
            </p>
            <hr>
            <p class="text-sm">Finance Module
            </p>
            <hr>
            <p class="text-sm">Calendar Module
            </p>
            <hr>
            <p class="text-sm">Post Module
            </p>
            <hr>

            <p class="text-sm">Resource Module
            </p>
            <hr>
            <p class="text-sm">Library Module
            </p>
            <hr>
            <p class="text-sm">Transport Module
            </p>
            <hr>
            <p class="text-sm">Inventory Module
            </p>
            <hr>
            <p class="text-sm">Frontend Website
            </p>
        </div>
        <div class="col-lg-2">
            <div class="card mt-5 plan-column rounded shadow text-center">
                <p class="text-sm text-black">Basic</p>
                <hr>
                <p>
                <i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p class="text-sm text-black">Basic</p>
                <hr>
                <p class="text-sm text-black">Basic</p>
                <hr>

                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p class="text-sm text-black">Basic</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>

                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>



            </div>
        </div>
        <div class="col-lg-2">
            <div class="card mt-5 plan-column rounded shadow text-center">
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p class="text-sm text-black">Basic</p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-black">Basic</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>

                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>


                <p class="text-sm text-black">Basic</p>

            </div>
        </div>
        <div class="col-lg-2">
            <div class="card mt-5 plan-column pink-border rounded shadow text-center">
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p class="text-sm text-pink">Basic</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p class="text-sm text-pink">On Demand</p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-pink">Advanced</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>

                <p class="text-sm text-pink">Advanced</p>

            </div>
        </div>
        <div class="col-lg-2">
            <div class="card mt-5 plan-column rounded shadow text-center">
                <p class="text-sm text-black">Advanced</p>
                <hr>
                <p class="text-sm text-black">Basic</p>
                <hr>
                <p class="text-sm text-black">On Demand</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-black">Advanced</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p class="text-sm text-black">Advanced</p>
                <hr>
                <p class="text-sm text-black">Advanced</p>
                <hr>
                <p class="text-sm text-black">Advanced</p>
                <hr>
                <p class="text-sm text-black">Advanced</p>
                <hr>
                <p><i class="fa-solid fa-x"></i></p>
                <hr>
                <p class="text-sm text-black">Standard</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-black">Advanced</p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p><i class="fa-solid fa-check"></i></p>
                <hr>
                <p class="text-sm text-black">Advanced</p>

            </div>
        </div>
    </div>
</div>

@endsection

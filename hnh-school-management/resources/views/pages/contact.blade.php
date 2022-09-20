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

        .form-div {
            margin-top: 100px;
        }

        .bg-pink {
            background-color: #e40c5b;
        }

        .f-icon {
            font-size: 25px;
        }

        .form-control:focus {
            outline: none;
            border: none;
            box-shadow: 0 0 0 2.5px #e40c5b;

        }

        label {
            margin-bottom: -10px !important;
        }

        .max-width {
            max-width: 1240px;
        }

        .input {
            height: 48px;
        }

        .get_heading {
            font-size: 18px;
            line-height: 28px;
            color: #fff;
             font-family: "interregular";
        }

        .get_para {
            font-size: 16px;
            line-height: 24px;
            color: #fff;
             font-family: "interregular";
        }
        .number {
            color: #fff;
             font-family: "interregular";
        }
        .email {
            color: #fff;
             font-family: "interregular";
        }
        .send {
            color: #000;
             font-family: "interregular";
        }
        @media(max-width: 768px){
            .bg-pink{
                padding-bottom: 15px;
            }
        }
    </style>


    <div class="container-fluid bg-light">
        <div class="container max-width p-5">
            <div class="row form-div">
                <div class="col-lg-4 bg-pink ps-md-5">
                    <p class="h5 text-white mt-5 get_heading">Get in touch</p>
                    <p class="text-white mt-4 get_para">If you have any query/message or feedback, then please submit below
                        form. We
                        will get back to you within 24 business hours.</p>
                    <div class="d-flex align-items-center mt-4">
                        <i class="fa fa-phone text-white f-icon" aria-hidden="true"></i>
                        <p class="text-white ms-3 number">+91 8-3055-7055-8</p>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-solid fa-envelope text-white f-icon"></i>
                        <p class="text-white ms-3 email">hello@scriptmint.com</p>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <i class="fa-brands fa-github text-white f-icon"></i>
                        <i class="fa-brands fa-twitter text-white f-icon ms-3 my-3"></i>
                    </div>
                </div>
                <div class="col-lg-8 bg-white shadow-lg ps-md-5">
                    <p class="h5 text-black mt-5 send">Send us a message</p>
                    <div class="row">
                        <div class="col-lg-6 my-2">
                            <label for="1st name" class="form-label text-dark">First Name</label>
                            <input type="text" class="form-control input">

                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="last name" class="form-label text-dark">Last Name</label>
                            <input type="text" class="form-control input">

                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="last name" class="form-label text-dark">Email</label>
                            <input type="email" class="form-control input">

                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="last name" class="form-label text-dark">Phone</label>
                            <input type="number" class="form-control input">

                        </div>
                        <div class="col-12 my-2">
                            <label for="subject" class="form-label text-dark">Subject</label>
                            <input type="text" class="form-control input">

                        </div>
                        <div class="col-12 my-2">
                            <label for="mesasge" class="form-label text-dark">Message</label>

                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="col mx-auto  my-3">
                            <button class="btn theme_btn my-3">Submit</button>
                        </div>

                    </div>

                </div>
            </div>







        </div>
    </div>
@endsection

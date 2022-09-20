    @extends('layouts.master')
    @section('content')
        <!--first-section start-->

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
            
            .whatsnew {
                color: #e40c5b;
                font-family: "interregular";
                font-size: 14px;
                line-height: 20px;
            }
            .whatsnew:hover {
                color: #e40c5b;
            }
            .whatbg{
                color: #e40c5b;
                background-color: #FFF1F2;
                font-size: 12px;
                line-height: 16px;
                letter-spacing: 0.3px;
                font-weight: 800;
                padding: 2px;
            }
        </style>
        <section>
            <div class="container first-section-container" style="border: 1px solid transparent;">
                <div class="row" id="home_first_section">
                    <div class="col-md-6">
                        <div>
                            <a href="{{('comparison')}}" class="whatsnew mb-2">
                               <span class="whatbg"> WHAT'S NEW </span> &nbsp;&nbsp; <span>Upgraded to PHP 8 & Laravel 9 ></span>
                            </a>
                            <h1 class="home_first_section_heading">
                                Most Comprehensive <br />
                                School ERP Solution
                            </h1>
                            <div class="d-flex mt-4">
                                <a href="#">
                                    <button class="buy_btn border-0">Buy Now</button>
                                </a>
                                <a href="#">
                                    <button class="live_btn ml-5 border-0">Live Demo</button>
                                </a>
                            </div>
                            <p class="home_first_section_text mt-4">
                                InstiKit is a Self Hosted ERP Solution which offers tons of
                                features to manage your school operation. It reduces the time
                                needed to put on administrative tasks, thus allowing schools
                                to focus more on the students & academics and improve overall
                                performance of the school.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home_img_main">
                            <img class="img-fluid" src="./assets/img/home/20944385.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--first-section end-->

        <!-- second section start -->



        {{-- video start --}}

        <h1 class="text-center my-5">
            Video Section
        </h1>


        {{-- video End --}}





        {{-- POWERFUL YET SIMPLE start --}}


        <section class="power-sec-start">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h4 class="powerful_heading text-center">
                                POWERFUL YET SIMPLE
                            </h4>
                            <h1 class="better_heading text-center">
                                A better way to manage School Operation
                            </h1>
                            <p class="powerful_para text-center mt-3">
                                InstiKit has curated list of modules, easy to understand & operate, <br> scalable and well
                                planned future development roadmap.
                            </p>




                            {{-- cards --}}



                            {{-- <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                            <img src="{{asset('assets/img/chose/02.png')}}" alt="">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <h6 class="every_card_heading">
                                            Everything You Need
                                        </h6>
                                        <p class="mt-1 every_card_para">
                                            InstiKit covers each & every aspect of school operation. You can manage everything from reception to students & staff to accounting.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div>
                                            <img src="{{asset('assets/img/chose/02.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <h6 class="every_card_heading">
                                            Accessible for Every Role
                                        </h6>
                                        <p class="mt-1 every_card_para">
                                            InstiKit is designed for different users of the school. Admin, Staff, Accountant, Student, Parent every one can access ERP.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                            <img src="{{asset('assets/img/chose/02.png')}}" alt="">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <h6 class="every_card_heading">
                                            Easy to Use
                                        </h6>
                                        <p class="mt-1 every_card_para">
                                            InstiKit can be set up in few minutes. The super simple & easy interface helps users to quickly understand & used-to with the ERP.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div>
                                            <img src="{{asset('assets/img/chose/02.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <h6 class="every_card_heading">
                                            Reliable & Secure
                                        </h6>
                                        <p class="mt-1 every_card_para">
                                            Schools are using InstiKit real-time to manage their operations for multiple years. It is built with Latest Technology, always up-to-date.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                            <img src="{{asset('assets/img/chose/02.png')}}" alt="">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <h6 class="every_card_heading">
                                            White-label & Managed
                                        </h6>
                                        <p class="mt-1 every_card_para">
                                            InstiKit is complete white-label ERP Solution & Managed. Let us take care of technical things while you take care of school operation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div>
                                            <img src="{{asset('assets/img/chose/02.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <h6 class="every_card_heading">
                                            Affordable
                                        </h6>
                                        <p class="mt-1 every_card_para">
                                            InstiKit offers tons of functionality at very affordable cost. All the versions are available for Lifetime validity on one time purchase.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}





                            <div class="row my-5">
                                <div class="col-lg-6 my-4 d-flex align-items-start">
                                    <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                                    <div class="ms-2">
                                        <h5 class="mb-2 every_card_heading">Everything You Need</h5>
                                        <p class="every_card_para">InstiKit covers each & every aspect of school operation.
                                            You can manage everything from reception to students & staff to accounting.</p>

                                    </div>
                                </div>
                                <div class="col-lg-6 my-4 d-flex align-items-start">
                                    <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                                    <div class="ms-2">
                                        <h5 class="mb-2 every_card_heading">Accessible for Every Role</h5>
                                        <p class="every_card_para">InstiKit is designed for different users of the school.
                                            Admin, Staff, Accountant, Student, Parent every one can access ERP.</p>

                                    </div>
                                </div>


                                <div class="col-lg-6 my-4 d-flex align-items-start">
                                    <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                                    <div class="ms-2">
                                        <h5 class="mb-2 every_card_heading">Easy to Use</h5>
                                        <p class="every_card_para">InstiKit can be set up in few minutes. The super simple &
                                            easy interface helps users to quickly understand & used-to with the ERP.</p>

                                    </div>
                                </div>

                                <div class="col-lg-6 my-4 d-flex align-items-start">
                                    <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                                    <div class="ms-2">
                                        <h5 class="mb-2 every_card_heading">Reliable & Secure</h5>
                                        <p class="every_card_para">Schools are using InstiKit real-time to manage their
                                            operations for multiple years. It is built with Latest Technology, always
                                            up-to-date.</p>

                                    </div>
                                </div>


                                <div class="col-lg-6 my-4 d-flex align-items-start">
                                    <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                                    <div class="ms-2">
                                        <h5 class="mb-2 every_card_heading">White-label & Managed</h5>
                                        <p class="every_card_para">InstiKit is complete white-label ERP Solution & Managed.
                                            Let us take care of technical things while you take care of school operation.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-lg-6 my-4 d-flex align-items-start">
                                    <img src="{{ asset('assets/img/chose/03.png') }}" alt="">
                                    <div class="ms-2">
                                        <h5 class="mb-2 every_card_heading">Affordable</h5>
                                        <p class="every_card_para">InstiKit offers tons of functionality at very affordable
                                            cost. All the versions are available for Lifetime validity on one time purchase.
                                        </p>

                                    </div>
                                </div>
                            </div>



                            {{-- card section end --}}


                            {{-- ready section start --}}


                            <section>
                                <div class="ready_section mt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1 class="ready_text text-center">
                                                    Ready to dive in?
                                                </h1>
                                                <h4 class="check_text text-center">
                                                    Check all the features in detail!
                                                </h4>
                                                <div class="my-5">
                                                    <button class="feature_btn text-center">
                                                        Feature Comparison
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            {{-- ready section end --}}



                            {{-- Amazing section start --}}


                            <section class="amazing mt-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <img class="img-fluid instikit-logo"
                                                    src="{{ asset('assets/img/logo/logo1.png') }}" alt="">
                                            </div>
                                            <p class="amazing_para text-center mt-3">
                                                “Amazing product. Best code quality so far I have seen. It covers <br> most
                                                of the aspects of any educational institution and more over <br> ScriptMint
                                                keeps developing it to add more features.”
                                            </p>
                                            <p class="text-center mt-3">
                                                <span class="saifullah">Samar Turabi </span> <span class="slash">/</span>
                                                <span class="trainer"> Trainer & Motivational Speaker</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>





                            {{-- Amazing section end --}}














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
                                    Start using InstiKit today!
                                </h1>
                                <p class="text-center convinced_para mt-4">
                                    We’d love to hear from you. Call 8-3055-7055-8 to get in touch or send <br> us email to
                                    hello@scriptmint.com
                                </p>
                                <button class="convinced_btn mb-3 mt-5">
                                    Buy Now!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            {{-- Convinced section end --}}





        </section>





        {{-- POWERFUL YET SIMPLE end --}}
    @endsection

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
                color: #0951CC;
                font-family: "interregular";
                font-size: 14px;
                line-height: 20px;
            }

            .whatsnew:hover {
                color: #0951CC;
            }

            .whatbg {
                color: #0951CC;
                background-color: #FFF1F2;
                font-size: 12px;
                line-height: 16px;
                letter-spacing: 0.3px;
                font-weight: 800;
                padding: 2px;
            }



            /* Slider */



            .carousel{
                height: 100vh !important;
            }
            

            .carousel-control-prev-icon, .carousel-control-next-icon{
                font-size: 20px;
                color: #000;
                background-color: #000;
            }

            



        </style>
        <section>
            <div class="container first-section-container" style="border: 1px solid transparent;">
                <div class="row" id="home_first_section">
                    <div class="col-md-6">
                        <div>
                            <a href="{{ 'comparison' }}" class="whatsnew mb-2">
                                <span class="whatbg"> WHAT'S NEW </span> &nbsp;&nbsp; <span>Upgraded to PHP 8 & Laravel 9
                                    ></span>
                            </a>
                            <h1 class="home_first_section_heading">
                                Most Comprehensive <br />
                                School ERP Solution
                            </h1>
                            <div class="d-flex flex-wrap mt-4">
                                <a href="{{ '/pricing' }}">
                                    <button class="buy_btn border-0 mt-2">Buy Now</button>
                                </a>
                                <a href="#">
                                    <button class="live_btn ml-5 border-0 mt-2">Live Demo</button>
                                </a>
                                <a href="#">
                                    <button class="ss_btn ml-5 border-0 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#slider">Screenshot</button>
                                </a>
                                <a href="#">
                                    <button class="cre_btn ml-5 border-0 mt-2" data-bs-toggle="modal"
                                        data-bs-target="#credential">Credentials</button>
                                </a>
                                <a href="#">
                                    <button class="vid_btn ml-5 border-0 mt-2">Video</button>
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
                                                    <a href="{{ '/comparison' }}">
                                                        <button class="feature_btn text-center">
                                                            Feature Comparison
                                                        </button>
                                                    </a>
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
                                            <div class="text-center img-fluid">
                                                <img class="instikit-logo img-fluid"
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



        {{-- credentials modal --}}


        <div class="modal fade" id="credential" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Credentials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p class="h5">
                                Demo Link
                            </p>
                            <a target="_blank" href="https://in.instikit.com">
                                https://in.instikit.com
                            </a>
                        </div>

                        <hr>

                        <div class="mt-2">
                            <p class="h5">
                                Login Informations
                            </p>
                            <p>
                                To login as <span class="fw-bold">Admin</span>
                            </p>
                            <p>
                                Email: admin@admin.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>


                        <hr>

                        <div class="mt-2">
                            <p>
                                To login as <span class="fw-bold">Manager</span>
                            </p>
                            <p>
                                Email: manager@manager.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>



                        <hr>

                        <div class="mt-2">
                            <p>
                                To login as <span class="fw-bold">Principle</span>
                            </p>
                            <p>
                                Email: principal@principal.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>



                        <hr>

                        <div class="mt-2">
                            <p>
                                To login as <span class="fw-bold">Staff</span>
                            </p>
                            <p>
                                Email: staff@staff.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>



                        <hr>

                        <div class="mt-2">
                            <p>
                                To login as <span class="fw-bold">Accountant</span>
                            </p>
                            <p>
                                Email: accountant@accountant.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>



                        <hr>

                        <div class="mt-2">
                            <p>
                                To login as <span class="fw-bold">Librarian</span>
                            </p>
                            <p>
                                Email: librarian@librarian.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>



                        <hr>

                        <div class="mt-2">
                            <p>
                                To login as <span class="fw-bold">Student</span>
                            </p>
                            <p>
                                Email: student@student.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>



                        <hr>

                        <div class="mt-2">
                            <p>
                                To login as <span class="fw-bold">Parent</span>
                            </p>
                            <p>
                                Email: parent@parent.com
                            </p>
                            <p>
                                Password: password
                            </p>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        {{-- credentials modal ENd --}}



        {{-- slider modal ENd --}}





        <div class="modal" id="slider">
            <div class="modal-dialog modal-fullscreen">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('assets/img/home-page-slider/Admission List.png')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('assets/img/home-page-slider/Dashboard.png')}}"  class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('assets/img/home-page-slider/Fee Allocation.png')}}"  class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('assets/img/home-page-slider/Student Attendance.png')}}"  class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('assets/img/home-page-slider/Timetable.png')}}"  class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
          
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
          
              </div>
            </div>
          </div>






        {{-- POWERFUL YET SIMPLE end --}}
    @endsection

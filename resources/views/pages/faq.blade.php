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
            font-size: 50px;
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
    </style>



    <section>

        <section>
            <div class="banner">
                <div class="w-100 ms-md-5 pt-5 padding-left">
                    <h1 class="text-white plan-heading text-md-start reseller_heading">FAQs</h1>
                    <p class="h5 text-white text-md-start mt-3">To seek truth requires one to ask the right questions.</p>
                </div>
                <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
            </div>
        </section>




        <div class="faq_main">

            <div class="container">
                <div class="row">

                    <h1 class="faq_heading">
                        FAQs
                    </h1>

                    <div class="accordion faqs" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button font_text" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I locate a program that's right for me?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body font_text">
                                    Search by degree level: Undergraduate Programs, Master's Degree Programs, Doctorate
                                    Degree Programs, Teacher Certification Programs, Other Certificate Programs, and Online
                                    Programs
                                    Search by department
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button font_text collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How can I become a teacher in PA?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body font_text">
                                    Our school offers several graduate programs leading to teacher certification. You can
                                    read about these programs in greater detail online, and you can also attend a weekly
                                    information
                                    session to learn more about the application process.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button font_text collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">


                                    How do I learn more about the School of Education's variety of program offerings?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body font_text">
                                    While our website provides useful information about each program, you are encouraged to
                                    contact the
                                    Office of Admissions and Enrollment Services for more detailed information. We are here
                                    to help you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button font_text collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    I am an undergraduate student at Pitt. How do I enter the School of Education?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body font_text">
                                   If you are interested in either the Combined Accelerated Studies in Education (CASE) program, the Applied Developmental Psychology bachelor’s degree, or the Exercise Science/Wellness bachelor’s degrees, you will need to apply to the School of Education by February of your sophomore year. You can review the admission procedures and download the application form on the Undergraduate Admissions page. If you are interested in teacher certification, which is only offered in post-baccalaureate “fifth year” programs here at Pitt-Oakland, then you should complete the prerequisite courses required for admission during your undergraduate program and apply to the School of Education no later than January 15 of your senior year. For more information, we highly recommend attending one of our teacher education information sessions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>




    </section>
@endsection

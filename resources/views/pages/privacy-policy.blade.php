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
        }

        .faqs {
            margin-top: 40px !important;
        }

        .p_text {
            font-family: "interregular" !important;
        }
    </style>



    <section>

        <section>
            <div class="banner">
                <div class="w-100 ms-md-5 pt-5 padding-left">
                    <h1 class="text-white plan-heading text-md-start reseller_heading">Privacy policy</h1>
                    <p class="h5 text-white text-md-start mt-3">To seek truth requires one to ask the right questions.</p>
                </div>
                <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
            </div>
        </section>




        <div class="faq_main">

            <div class="container">
                <div class="row">

                    <h1 class="faq_heading">
                        Privacy policy
                    </h1>

                    <P class="p_text mt-2">
                        Synergy Multi-Academy Trust is committed to protecting and respecting your privacy.

                        This policy sets out the basis on which any personal data we collect from you, or that you provide
                        to us, will be processed by us. Please read the following carefully to understand our views and
                        practices regarding your personal data and how we will treat it. By visiting [Website] you are
                        accepting and consenting to the practices described in this policy.

                        For the purpose of the EU General Data Protection Regulation (GDPR), the data controller is Synergy
                        Multi-Academy Trust

                        Whitwell Road, Reepham,
                        Norwich, Norfolk,
                        England, NR10 4JT
                    </P>

                    <h1 class="faq_heading">
                        Information we collect from you
                    </h1>

                    <p class="p_text mt-2">
                        We will collect and process the following data about you:
                        Information you give us. This is information about you that you give us by filling in forms on our
                        website or by corresponding with us by phone, e-mail or otherwise. It includes information you
                        provide when you register to use our site, request our newsletter and when you report a problem with
                        our site. The information you give us may include your name, address, e-mail address and phone
                        number.

                        Information we collect about you. With regard to each of your visits to our site we will
                        automatically collect the following information:

                        technical information, including the Internet protocol (IP) address, browser type and version, time
                        zone, browser plug-in types and versions, operating system and platform, information about your
                        visit, including the pages and other content you view, website interaction information (such as
                        scrolling, clicks, and mouse-overs), load times and errors.

                        Information we receive from other sources. This is information we receive about you if you use any
                        of the other websites we operate, service we provide and also includes information we receive from
                        third parties. In this case we will have informed you when we collected that data if we intend to
                        share those data internally and combine it with data collected on this site.
                    </p>


                    <h1 class="faq_heading">
                        Disclosure of your information
                    </h1>

                    <p class="p_text mt-2">
                        Synergy Multi-Academy Trust will not sell or transfer the personal information transmitted to us by others outside the company, and will not use submitted information for purposes other than those set out when contacting us.
                    </p>





                </div>
            </div>



        </div>




    </section>
@endsection

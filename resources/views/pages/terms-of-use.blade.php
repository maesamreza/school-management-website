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
        .p_text{
            font-family: "interregular" !important;
        }
    </style>



    <section>

        <section>
            <div class="banner">
                <div class="w-100 ms-md-5 pt-5 padding-left">
                    <h1 class="text-white plan-heading text-md-start reseller_heading">Terms of Use</h1>
                    <p class="h5 text-white text-md-start mt-3">To seek truth requires one to ask the right questions.</p>
                </div>
                <div class="absolute inset-0 bg-primary mix-blend-multiply" aria-hidden="true"></div>
            </div>
        </section>




        <div class="faq_main">

            <div class="container">
                <div class="row">

                    <h1 class="faq_heading">
                        Terms of Use
                    </h1>

                    <p class="p_text mt-2">
                        This Privacy Policy describes the School’s agreement with you regarding how we will handle certain
                        information on the Website. This Privacy Policy does not address information obtained from other
                        sources such as submissions by mail, phone or other devices or from personal contact. By accessing
                        the Website and/or providing information to the School on the Website, you consent to the
                        collection, use and disclosure of certain information in accordance with this Privacy Policy.
                    </p>


                    <h1 class="faq_heading">
                        Information Collected on Our Website:
                    </h1>

                    <p class="p_text mt-2">
                        If you merely download material or browse through the Website, our servers may automatically collect
                        certain information from you which may include: (a) the name of the domain and host from which you
                        access the Internet; (b) the browser software you use and your operating system; and (c) the
                        Internet address of the website from which you linked to the Website. The information we
                        automatically collect may be used to improve the Website to make it as useful as possible for our
                        visitors; however, such information will not be tied to the personal information you choose to
                        provide to us.

                        We do collect and keep personally identifiable information when you choose to voluntarily submit
                        such information. For example, if you choose to fill out a form on the Website we retain the
                        information submitted by you. You should not submit any information that you do not want to be
                        retained. After we have taken the appropriate action in response to your submittal, we retain the
                        information you submit for our records and to contact you from time to time. Please note that if we
                        decide to change the manner in which we use or retain personal information, we may update this
                        Privacy Policy, at our sole discretion.
                    </p>

                </div>
            </div>



        </div>




    </section>
@endsection

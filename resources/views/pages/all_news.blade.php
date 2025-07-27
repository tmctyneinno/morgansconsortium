<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body class="landing-style-1 sidebar-main">
    <!-- loader Start -->
    @include('partials.loader')
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        @include('partials.sidebar')

        @include('partials.topnav')

        <div class="content-page" style="padding:0px;">
            <!-- Banner -->
            <div id="iq-home" class="iq-banner-software" style="height:75vh">
                <!-- <div class="google-map-wrap">
                    @if($position->countryName == 'Nigeria')
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4079673977717!2d3.342494315339153!3d6.596112124143522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b922431bb3a15%3A0xf9fd93e3911f8272!2s1%20Adeola%20Adeoye%20St%2C%20Opebi%20101233%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1646049447368!5m2!1sen!2sng"  
                    style="border:0;height:100%;width:100%;filter: brightness( 70% ) contrast( 100% ) saturate( 100% ) blur( 0px ) hue-rotate( 0deg );" allowfullscreen="" loading="lazy"></iframe>
                    @else
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4965.128498772497!2d0.02277225040369267!3d51.52120990841268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a7d95d6a1491%3A0x6b0a90e4c7b64fdb!2sInternational%20House%2C%2024%20Holborn%20Rd%2C%20London%20EC1A%202BN%2C%20UK!5e0!3m2!1sen!2sng!4v1646053920175!5m2!1sen!2sng" 
                        style="border:0;height:100%;width:100%;filter: brightness( 70% ) contrast( 100% ) saturate( 100% ) blur( 0px ) hue-rotate( 0deg );" allowfullscreen="" loading="lazy"></iframe>
                    @endif
                </div>     -->
            </div>
            <!-- Banner End -->
            <div class="wrapper">
                <!-- Main Content -->
                <div class="main-content">
                    <!-- About Us -->
                    <section class="iq-section-space position-relative overflow-hidden">
                        <div id="iq-contact" class="pt-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="title-box wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: F;">
                                            <h2>Contact Us</h2>
                                            <p>We are very much happy to receive you at our physical addresses or you can send us a message.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="mb-4">Get in Touch</h4>
                                        <form>
                                            <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: F;">
                                                <div class="col-lg-6"> <input type="text" class="form-control" id="inputName" placeholder="Your Name"> </div>
                                                <div class="col-lg-6"> <input type="email" class="form-control" id="inputEmail" placeholder="Your Email"></div>
                                                <div class="col-lg-12"> <input type="text" class="form-control" id="inputSubject" placeholder="Your Subject"></div>
                                                <div class="col-lg-12">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Your Message" spellcheck="false"></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <a class="landing-button btn-purple" href="">Send Message</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: F;">
                                        <div class="contact-box d-flex">
                                            <div class="service-detail">
                                                <h4 class="mb-2 ">Nigeria</h4>
                                                <ul class="iq-list column-1">
                                                    <li>
                                                        <i class="las la-map-marker" aria-hidden="true" style="font-size: 20px;"></i>
                                                        2nd Floor, 1 Adeola Adeoye Street, Toyin Street, Ikeja, Lagos, Nigeria.
                                                    </li>
                                                    <li>
                                                        <i class="las la-envelope" aria-hidden="true" style="font-size: 20px;"></i>
                                                        enquiries@morgansconsortium.com
                                                    </li>
                                                    <li>
                                                        <i class="las la-phone" aria-hidden="true" style="font-size: 20px;"></i>
                                                        +234 (1) 700-1770, +234 (0) 915-341-4314
                                                    </li>

                                                </ul>
                                            </div>

                                        </div>
                                        <div class="contact-box d-flex">
                                            <div class="service-detail">
                                                <h4 class="mb-2 ">United Kingdom</h4>
                                                <ul class="iq-list column-1">
                                                    <li>
                                                        <i class="las la-map-marker" aria-hidden="true" style="font-size: 20px;"></i>
                                                        International House, 24 Holborn Viaduct, London, EC1A 2BN, United Kingdom
                                                    </li>
                                                    <li>
                                                        <i class="las la-envelope" aria-hidden="true" style="font-size: 20px;"></i>
                                                        enquiries@morgansconsortium.com
                                                    </li>
                                                    <!-- <li>
                                                        <i class="las la-phone" aria-hidden="true" style="font-size: 20px;"></i>
                                                        +234 (1) 700-1770, +234 (0) 915-341-4314
                                                    </li> -->

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>

                    @include('partials.prefooter')
                </div>
                <!-- Main Content END -->
            </div>
            <!-- Footer -->
            @include('partials.footer')
            <!-- Footer End-->
        </div>
    </div>
    <!-- Wrapper End-->

    @include('partials.scripts')
</body>

</html>
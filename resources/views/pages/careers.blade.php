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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/careers.jpg);background-color: transparent; background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">Come Build Something Great with us</h1>
                                    <h3 class="pt-3" style="color:#ffffff">Join THE MORGANS team and help transform Businesses in Nigeria and the United Kingdom.</h3>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner End -->
            <div class="wrapper">
                <!-- Main Content -->
                <div class="main-content">
                    <!-- About Us -->
                    <section id="iq-testimonial" class="iq-section-space position-relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box text-center">
                                        <!-- <span class="title-design">join us</span> -->
                                        <h3 style="color:#A32928">Why THE MORGANS?</h3>
                                        <p class="text-left">THE MORGANS is always interested in hearing from experienced individuals whose industry background will complement our existing team. If you share our vision and values and are keen to demonstrate the positive contribution you can make to the firm and its development, We would like to hear from you. Our structure enables us to provide a challenging and varied work environment where individuals are encouraged to contribute at all levels to the development and success of the company.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel testimonial-style owl-loaded owl-drag" data-dots="true" data-nav="false" data-autoplay="true" data-loop="true" data-items="2" data-items-laptop="2" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                                        <div class="item text-center">
                                            <div class="iq-testimonial join" style="background:#004281">
                                                <div class="testimonial-info">
                                                    <div class="testimonial-name">
                                                        <h3 style="color:#ffffff">Innovation</h3>
                                                    </div>
                                                </div>
                                                <p style="color:#ffffff">We work to create and deliver seamless solutions to our clients and as such we welcome ideas from members of our team. </p>
                                            </div>
                                        </div>
                                        <div class="item text-center">
                                            <div class="iq-testimonial join" style="background:#004281">
                                                <div class="testimonial-info">
                                                    <div class="testimonial-name">
                                                        <h3 style="color:#ffffff">Result-oriented</h3>
                                                    </div>
                                                </div>
                                                <p style="color:#ffffff">We are result-focused and solution-driven. We work individually and collectively as a team to achieve set goals.</p>
                                            </div>
                                        </div>
                                        <div class="item text-center">
                                            <div class="iq-testimonial join" style="background:#004281">
                                                <div class="testimonial-info">
                                                    <div class="testimonial-name">
                                                        <h3 style="color:#ffffff">Family</h3>
                                                    </div>
                                                </div>
                                                <p style="color:#ffffff">At THE MORGANS, we share every moment together. from our highs to our lows, we encourage a balanced interpersonal relationship amongst our team members.</p>
                                            </div>
                                        </div>
                                        <div class="item text-center">
                                            <div class="iq-testimonial join" style="background:#004281">
                                                <div class="testimonial-info">
                                                    <div class="testimonial-name">
                                                        <h3 style="color:#ffffff">Client Satisfaction first</h3>
                                                    </div>
                                                </div>
                                                <p style="color:#ffffff">In all we do at THE MORGANS, our clients are at the center of every action, decision and path we take in our business activities.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" text-center w-50 mt-5 mb-3 mr-auto ml-auto"><a class="landing-button btn-primary btn-block" target="_blank" href="https://portrec.co.uk/uploadresume"><span class="btn-effect">Apply Here</span></a></div>
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
    @include('partials.livechat')
</body>

</html>
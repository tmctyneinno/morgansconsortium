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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/subsidiaries/advisory_services.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize"  style="color: #ffffff;">
                                        Advisory Services</h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                    THE MORGANS Consulting (Europe & Africa)</h3>
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
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <section class="iq-section-space pb-0 position-relative overflow-hidden">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <h3 style="margin-bottom:15px; color:#A32928">THE MORGANS Consulting (Europe & Africa)</h3>
                                                <p style="margin-bottom: 1rem;">THE MORGANS Consulting core mission statement includes the attainment of clients’ desires in whatever industry they operate. We pride ourselves on being much closer to our clients than any of our peers rendering one-on-one business consultancy that embraces all sectors without any discriminations. </p>
                                                <p style="margin-bottom: 1rem;">At THE MORGANS Consulting, one thing is guaranteed. And that is strict adherring to principles that promote professionalism as our vastly increasing success rate, largely depends on our discipline and wealth of expertise in services rendered to our clients. That said, we consider our clients as partners whose partnering is vital to our organisational vision and mission and growth.  So, we go above and under to ensure that any and all of their business needs are satisfiably met.</p>

                                                <p>Some of our professional tactics include predicting clients’ feedback with the view of applying strategies and corrective measurements that eliminate potential conflicts with our clients boosting our clients' satisfaction rate, which is incomparable to none.</p>
                                        
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space position-relative iq-gradient-bg" style="padding-top: 85px;padding-bottom:85px;background:#004281;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-lg-left iq-title-box text-sm-center">
                                                    <h3 class="iq-title text-uppercase text-white">Want to see what we do here?</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="btn-container text-lg-right text-sm-center">
                                                    <a class="iq-button-white" href="https://morgansconsulting.ng" target="_blank">
                                                        <span>Take a Look</span>
                                                        <em></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space pt-5 position-relative overflow-hidden">
                                    <div class="row">
                                        <div class="fadeInUp col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <p style="margin-bottom: 1rem;">We proudly adhere to a legitimacy culture concerning our roles to clients and constitutional authorities such as to the Federal Board of Inland Revenue/ State Inland Revenue Board. We update our clients concerning changes from statutory authorities affecting their businesses and guide them on how to comply with the Federal Board of Inland Revenue/ State Inland Revenue Board and Companies regulations. TMC provides its employees with the best incentives demonstrating love and care. We do not demonstrate favouritism and discrimination to any member of our staff. We encourage diversity and appreciate the core uniqueness inherent in each staff member. At TMC, we recognize our social responsibilities as a consultancy firm. We strongly support a healthy environment for humans and other species.</p>
                                                <p>
                                                Lastly, as a responsible corporate citizen, recognize the economic importance of our environment. We do not employ the use of machines or equipment that are harmful to our environment.
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                @include('partials.sidebar3')
                            </div>
                        </div>
                    </div>
                    <!-- About Us  End-->
                    @include('partials.prefooter')
                </div>
                <!-- Main Content END -->
            </div>

            <!-- Footer -->
            @include('partials.footer')
            <!-- Footer End-->

            <!-- </div> -->
        </div>
    </div>
    <!-- Wrapper End-->

    @include('partials.scripts')
    @include('partials.livechat')
</body>

</html>
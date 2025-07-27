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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/banner_temp.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Mission Statement </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        Our core mission statement is focused on attaining our clients' desire in whatever industry they operate.</h3>
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
                                                <h3 style="margin-bottom:15px;color: #A32928">THE MORGANS Mission Statement</h3>
                                                <p style="margin-bottom: 1rem;">THE MORGANS core mission statement includes the attainment of clients’ desires in whatever industry they operate. We are closer to our clients than any of our peers rendering one-on-one business consultancy that embraces all sectors without any discriminations. THE MORGANS adheres to principles that promote professionalism and knowing our expertise, depends on services to our customers.</p>
                                                <p style="margin-bottom: 1rem;">THE MORGANS considers our clients as partners whose partnering is vital to our organisational vision and mission. Our professional tactics include predicting clients’ feedback with the view of applying strategies and corrective measurements that eliminate potential conflicts with our clients boosting our clients' satisfaction rate, which is incomparable to none.</p>
                                                <p>At THE MORGANS, we adhere to a legitimacy culture concerning our roles to clients and constitutional authorities such as to the Federal Board of Inland Revenue/ State Inland Revenue Board. We update our clients concerning changes from statutory authorities affecting their businesses and guide them on how to comply with the Federal Board of Inland Revenue/ State Inland Revenue Board and Companies regulations.</p>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                @include('partials.reachout')

                                <section class="iq-section-space pt-5 position-relative overflow-hidden">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <h4 style="margin-bottom:15px;"></h4>
                                                <p style="margin-bottom: 1rem;">THE MORGANS provides its employees with the best incentives demonstrating love and care. We do not demonstrate favouritism and discrimination to any member of our staff. We encourage diversity and appreciate the core uniqueness inherent in each staff member.</p>
                                                <p style="margin-bottom: 1rem;">At THE MORGANS, we recognize our social responsibilities as a consultancy firm. We strongly support a healthy environment for humans and other species.</p>
                                                <p>Lastly, as a responsible corporate citizen, recognizing the economic importance of our environment. We do not employ the use of machines or equipment that are harmful to our environment.</p>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                @include('partials.sidebar2')
                            </div>
                        </div>
                    </div>
                    <!-- About Us  End-->
                </div>
                <!-- Main Content END -->
            </div>
            @include('partials.prefooter')
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
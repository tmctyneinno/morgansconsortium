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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/services2.jpg);background-color: transparent; background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Our Subsidiaries </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        We have Experts in our various subsidiaries ready to help transform your business.
                                    </h3>
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
                    <section id="iq-about" class="iq-section-space iq-section-pb-55">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 pr-3">
                                    <div class="title-box mb-0 text-center text-lg-left border-right">
                                        <span class="title-design">Where we can help</span>
                                        <h3>Our Subsidiaries</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <p class="">Through our expert and unmatched management consulting services,
                                        THE MORGANS Company helps you manage and upgrade your business operations
                                        efficiently and cost-effectively,
                                        so you can focus on the quality of your services and clients.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    @include('partials.subsidiaries2')
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
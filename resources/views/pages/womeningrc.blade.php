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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/subsidiaries/grc_awards.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 20%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                       Women in Governance, Risk, Compliance, Financial Crime, and Fraud Prevention </h1>
                                    <h3 class="pt-3" style="color:#ffffff">is a pioneering initiative founded by Dr. Foluso Amusa, PhD, dedicated to empowering women professionals in these critical fields.</h3>
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
                                                <h4 style="margin-bottom:15px; color:#A32928">Women in Governance, Risk, Compliance & Financial Crime Prevention</h4>
                                                <p style="margin-bottom: 1rem;">
                                                    Our mission is to foster leadership, inspire innovation, and create a collaborative platform for women to thrive, lead, and make a lasting impact across industries.</p>

                                                    <p style="margin-bottom: 1rem;"> We believe in the power of diversity and inclusion to drive ethical practices,
                                                    enhance professional excellence, and tackle the complex challenges of today's global landscape. </p>
                                                    <p style="margin-bottom: 1rem;"> Our community is committed to shaping the future of Governance, Risk, Compliance (GRC), and Financial Crime Prevention by supporting women at all career stages, from emerging leaders to seasoned professionals.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space position-relative iq-gradient-bg" style="padding-top: 85px;padding-bottom:85px;background-color:#004281">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-lg-left iq-title-box text-sm-center">
                                                    <h3 class="iq-title text-uppercase text-white">Learn More about Women in GRC </h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="btn-container text-lg-right text-sm-center">
                                                    <a class="iq-button-white" href="https://wgrcfp.org/" target="_blank">
                                                        <span>visit here</span>
                                                        <em></em>
                                                    </a>
                                                </div>
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
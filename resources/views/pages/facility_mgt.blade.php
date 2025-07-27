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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/subsidiaries/facility_management_services.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Facility management (PORTSERV) </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                    All Solutions Under One Roof</h3>
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
                                        <div class="fadeInUp col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <h3 style="margin-bottom:15px;color:#A32928;">PORTSERV Offers Tailored Facility Management Services for a Range of Businesses!</h3>
                                                <p style="margin-bottom: 1rem;">A well-thought-out business improves employees’ wellbeing and increases productivity, so it is high time to invest in your business portfolio.</p>
                                                <p style="margin-bottom: 1rem;">Talking about the workplace strategy, often the best solution isn’t always clear. From procuring the services to workplace overall design, understanding the best approach often necessitates an expert touch.</p>
                                                <p>With a wealth of impressive experience in operational and strategic facilities management, our expert consultants have got all the knowledge and understanding that your business would need to redefine and realize its needs.</p>
                                        
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space position-relative iq-gradient-bg" style="padding-top:85px;padding-bottom:85px;background:#004281">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-lg-left iq-title-box text-sm-center">
                                                    <h3 class="iq-title text-uppercase text-white">Want to see what we do here?</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="btn-container text-lg-right text-sm-center">
                                                    <a class="iq-button-white" href="https://portservs.co.uk/" target="_blank">
                                                        <span>Take a look</span>
                                                        <em></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space pt-5 position-relative overflow-hidden">
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <p style="margin-bottom: 1rem;">Being a specialized facility management consultancy, we apply our exclusive experience when it comes to facility management in terms of designing a new building or maintaining an existing one. Our experts make great recommendations for cost, layout, risks, and best practices. We also provide advice to select the best suppliers and reliable manufacturers to assist with the work, develop an optimal strategy, arrange equipment, and monitor the process.</p>
                                                <p>
                                                We facilitate you to develop and deploy a maintenance strategy and provide all support with condition surveys, energy management, and life cycle cost models.
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
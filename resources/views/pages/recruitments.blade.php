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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/subsidiaries/recruitment_services.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Recruiting & Outsourcing (PORTREC) </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        To bridge the talent gap in nigeria.</h3>
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
                                                <h3 style="margin-bottom:15px;color:#A32928">PORTREC Resourcing – Takes a Full Charge of your Technical & Non-Technical Recruitment</h3>
                                                <p style="margin-bottom: 1rem;">Portrec Resourcing recruits’ talents across all sectors that cover talent resourcing and executive, umbrella company, and payroll services. Our services cut across Talent Resourcing, Advisory roles and full on Human Resource roles for our clients.</p>
                                                <p style="margin-bottom: 1rem">Let our qualified and expert recruitment & outsourcing consulting team help you make better hires. Whether you are looking for your next CTO, Senior executive, or any other open requisitions for your business, our team is ready to get you there with the best state-of-the-art recruitment and outsourcing strategy.</p>
                                                <p>At PORTREC Resourcing, our in-house expert consultants help you source the most suitable talent for your industry, keeping in mind your budget and cost-saving initiatives. They also track and trace every stage of the recruitment process allowing for real-time reporting and detailed insights needed for prompt decision making. Which makes it a lot easier for future audits of recruitment activity. </p>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space position-relative iq-gradient-bg" style="background:#004281;padding-top:85px;padding-bottom:85px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-lg-left iq-title-box text-sm-center">
                                                    <h3 class="iq-title text-uppercase text-white">Want to see what we do here?</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="btn-container text-lg-right text-sm-center">
                                                    <a class="iq-button-white" href="https://portrec.co.uk" target="_blank">
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
                                        <div class="col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <p style="margin-bottom: 1rem;">PORTREC Resourcing effectively handles the three (3) types of Recruitment Process Outsourcing. So whether or not you need the services of an on-demand RPO, End-to-End RPO or a Project-RPO, we enjoin you to look no further than PORTREC.</p>
                                                <p style="margin-bottom: 1rem;">
                                                    This is because our recruitment and outsourcing solutions are developed to help businesses address their hiring challenges by integrating a scalable recruiting capacity into clients firms. By blending machine intelligence, human insight, and an unparalleled talent supply chain, we convey custom-built recruitment solutions connecting you with the direct employees your business would need.
                                                </p>
                                                <p>
                                                    Whether you want our consulting team to manage all or a part of your hiring and recruitment process, we are there to help. Delivering personalized recruitment and outsourcing services that let you get the best talent in the market at a budget-friendly cost is the outcome PORTREC Resourcing is known for.
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
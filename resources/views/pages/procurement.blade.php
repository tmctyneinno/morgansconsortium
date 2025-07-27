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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/subsidiaries/procurement_services.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Procurement Services (PROSERVS) </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        Procurement Services that Make a Difference.</h3>
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
                                                <h3 style="margin-bottom:15px;color: #A32928">PROCSERV Helps Businesses Develop Sourcing Strategies for A Growth-Oriented & Sustainable Future.</h3>
                                                <p style="margin-bottom: 1rem;">Being a leading Group of varying Independent Companies, we are a specialized one-stop-shop service provider for a range of businesses and industries, with Procurement being one of our core competencies. </p>
                                                <p style="margin-bottom: 1rem;">We are superiorly skilled in the various areas of purchasing and contracting with clients to locate and secure various types of resources that are desired by the client, management of internal processes such as adding new suppliers and ensuring they are compliant, policy management, sustainability and ethics, merchandising, operations and logistics and supplier relations to mention a few.</p>
                                                <p style="margin-bottom: 1rem;">The best procurement organizations can decrease the business's purchasing cost by an average of 8%–12%, delivering an additional yearly savings of 2%–3%. Our expert procurement team works closely with your businesses to recognize and determine savings across all your spend categories as well as procurement levers, thereby developing the organizational capabilities needed to sustain the gains earned, for a long time.</p>
                                                <p>Our Strategic Procurement consulting service helps you develop an effective path to your savings based on comprehensive cross-functional placement and a firm focus on overall organizational strategy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space position-relative iq-gradient-bg" style="padding-top: 85px;padding-bottom:85px; background:#004281">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-lg-left iq-title-box text-sm-center">
                                                    <h3 class="iq-title text-uppercase text-white">Want to see what we do here?</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="btn-container text-lg-right text-sm-center">
                                                    <a class="iq-button-white" href="#" target="_blank">
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
                                                <h3 style="margin-bottom:15px;">Where do we start?</h3>
                                                <p style="margin-bottom: 1rem;">Our out-of-the-box approach starts with budget allocation and target-setting, where we help businesses develop their quarterly and annual budgets, yearly procurement saving targets, and frequently update their quarterly budgets when required.
                                                </p>
                                                <p style="margin-bottom: 1rem;">
                                                    However, it is important to note that as a function with its hands around the purse strings, our procurement consultants possess the required business acumen needed to successfully understand and interpret the main goals and objectives of your organisation, and how best to create a structure and roadmap that suits your peculiar needs and objectives.
                                                </p>
                                                <p>
                                                    Our specialized and experienced procurement consultants work with our clients to ensure that corporate finance, strategic sourcing, and program management remain cohesive and function together on a structured program till the desired end state. And we produce the right dashboards and metrics that let businesses easily monitor their strategy at a high level while we simultaneously adjust the same needs to discover action items and the major areas of each metric.
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
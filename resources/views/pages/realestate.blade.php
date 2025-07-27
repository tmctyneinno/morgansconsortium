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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/subsidiaries/real_estate_services.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Real Estate & Property Development (Tyne Homes) </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        Real Estate & Property Development Made Easier & Smarter </h3>
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
                                                <h3 style="margin-bottom:15px;color: #A32928">Excels in World-in-Class Real Estate & Property Development Consulting!</h3>
                                                <p style="margin-bottom: 1rem;">We believe that real estate & property development is a booming market across the world and we help associated entities reap maximum benefits through our real estate consulting services.</p>
                                                <p style="margin-bottom: 1rem;">Being a specialized management consultancy firm, we pride ourselves in our exclusive real estate team consisting of certified and professional real estate and property development advisors, who bring a host of expertise and experience for all kinds of projects; from pre-acquisition to marketing to sales and capital structuring.</p>
                                                <p>Equipped with a proficient team of real estate development consultants, we offer the specialized knowledge, experience, and capacity to help owners/investors successfully manage every phase of the development process as we have experience with predevelopment, financing, design, construction, and operation.</p>

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

                                                <p style="margin-bottom: 1rem;">We cautiously and consistently strive to provide reliable consultancy services to occupier clients at each step of the process, from counselling on substitute land or construction options through the development or purchase of facilities.</p>
                                                <p style="margin-bottom: 1rem;">For investing clients, our team projects reliable risk-adjusted returns on property development and acquisition projects, typically in a joint venture or incentive fee-based deal structures that can maximize our clients’ financial success.</p>
                                                <p>We start off with an analysis of the pricing, supply, and demand of the property type or location. Followed by an immediate evaluation of the marketability of the property to determine profits under current market conditions as well as other sound economic analyses all to ensure the investment is a sound financial decision for the buyer.</p>
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
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
                                        Training & Development (TMC Institute) </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        For Continued Excellence</h3>
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
                                                <h3 style="margin-bottom:15px;">TMC Institute Lets Your Employees Shine with Exclusive & Tailored Training!</h3>
                                                <p style="margin-bottom: 1rem;">At TMC Institute / Academy our globally-recognized training and development division is known for providing world-class specialized employee training plans for different roles and functions. These bespoke plans are carefully designed to address specialized learning goals and are delivered by top trainers. As the leading and specialist provider of specialized corporate training, our courses include but are not restricted to, Governance, Risk & Compliance, Financial Crime Prevention, Leadership training and others focused on cultivating the right attitude and skills in your teams.</p>
                                                <p style="margin-bottom: 1rem;">TMC INSTITUTE has successfully conveyed the training courses throughout the region with clients that continue to grow every year, capitalizing on our in-depth knowledge of the needs of organizations and financial institutions. </p>
                                                <p>Our training & development consultancy team consists of the industry's best corporate trainers and experts who help employees of the businesses broaden knowledge and change their mindsets for the better.</p>

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
                                                    <a class="iq-button-white" href="https://tmcinstitute.com" target="_blank">
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
                                                <p style="margin-bottom: 1rem;">Our talented and committed team, train your workforce with specialized processes that deliver high-end learning material characterized by high impact, creativity, and interactivity. Our service addresses your business's employees' specific learning needs. Through our training consultancy services, your employees can be encouraged to participate in an in-depth discussion of topics that help them enhance their performance and productivity.</p>
                                                <p>
                                                    Our training & development team analyses your workforce in terms of all factors and evaluates them on strict criteria to prescribe the best training plans. Using creative and out-of-the-box approaches, contemporary training principles, empirical tools, and custom-developed content, our corporate trainers offer high-impact training programs that ignite interest, transfer knowledge as well as broaden thinking.
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
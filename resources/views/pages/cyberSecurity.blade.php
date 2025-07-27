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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../../assets/images/subsidiaries/cyber_services.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Cyber Security & Enterprise Architecture Services</h1>
                                    <h3 class="pt-3" style="color:#ffffff">TYNEIT Company Lets You Optimize Technology to Increase Agility.</h3>
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
                                                <h3 style="margin-bottom:15px;color:#A32928">TYNEIT Company Lets You Optimize Technology to Increase Agility.</h3>
                                                <p style="margin-bottom: 1rem;">Our specialized and certified Enterprise Architects help businesses successfully navigate the chaos of automating and optimizing their technology while enhancing the company’s performance and helping them achieve their goals. Our expert consultants provide reliable advice on how business teams and processes can reduce the complexities of the enterprise architecture, achieve agility across the system levels, optimize technology and improve overall performance.</p>
                                                <p style="margin-bottom: 1rem;">Today’s demands undoubtedly necessitate an architecture that turns out to be highly scalable, flexible, agile, and cloud-ready. So whether or not your business needs to capitalize on certain expertise to fine-tune your existing architecture, or it requires assistance with a comprehensive overhaul, TYNEIT’s expert team is there to help as we’re skilled in the act of swiftly assessing threats from malicious third-party sources, calculating risks based on asset value, and of course, coming up with control objectives that are implemented.</p>
                                                <p style="margin-bottom: 1rem;">Our team collaborates with expert stakeholders to understand the business strategy. Leveraging knowledge in both IT, business and management, our team collaborates with all stakeholders across the business—ranging from C-Suite executives to departmental managers, to IT personnel and to employees—to acquire the deep know-how about your business strategy, goals, and visions.</p>
                                                <p>We create process effectiveness by developing linkages among all process stakeholders and teams. With our expert consultation, know the way to effectively blend your business Enterprise Architecture and Integration expertise, along with assuming a practical approach to your Business Architecture, Application Architecture, Information Architecture, and Infrastructure Architecture.</p>

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
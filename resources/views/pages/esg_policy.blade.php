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
            <div id="iq-home" class="iq-banner-software" style="background-color: #eff1fe !important;">
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-md-6 offset-3 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize">Environmental, Social and Governance (ESG) Policy</h1>
                                    <p class="pt-3" style="color:#303030">Created on - 25th May, 2015</p>
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
                    <section class="iq-section-space pb-0 position-relative overflow-hidden">

                        <div class="container">
                            <div class="row">

                                <div class="col-md-8 offset-2 align-items-center">
                                    <div class="title-box text-left">
                                        <!-- <span class="title-design">About THE MORGANS </span> -->
                                        <h3 style="line-height: 1.2; font-size:1.5rem">Purpose</h3>
                                        <p style="margin-bottom: 1rem; line-height:35px; text-align:justify">The Environmental, Social and Governance (“ESG”) Policy reflects THE MORGANS’ commitment to excellence in corporate responsibility and sustainability. This Policy applies to all employees, management, partners and the advisory board of THE MORGANS (“TMC”).</p>
                                    </div>
                                    <div class="title-box text-left">
                                        <h3 style="line-height: 1.2; font-size:1.5rem">Statement</h3>
                                        <p style="margin-bottom: 1rem; line-height:35px; text-align:justify">THE MORGANS’ services help businesses and communities thrive by providing implementable solutions. TMC is committed to operating with integrity, contributing to our surrounding communities, promoting diversity and inclusion, empowering our employees, and preserving our natural resources. TMC is also committed to data security, protecting the privacy of our clients, and promoting a global financial system that is accessible and inclusive. The Corporate Governance and Advisory Board provides oversight to TMC’s ESG strategy and program. In order to align all TMC’s personnel with a common set of ESG-related aspirational goals, no employee, line of business or corporate function may publicly disclose or publish aspirational goals, commitments or other material ESG information without the prior written approval of the ESG Committee or its designee.</p>
                                    </div>
                                    <div class="title-box text-left">
                                        <h3 style="line-height: 1.2; font-size:1.5rem">Environmental</h3>
                                        <p style="margin-bottom: 1rem; line-height:35px; text-align:justify">TMC recognizes that our planet needs to be a sustainable home for current and future generations. A commitment to environmental stewardship is part of TMC’s Code of Business Conduct and Ethics.</p>
                                    </div>
                                    <div class="title-box text-left">
                                        <h3 style="line-height: 1.2; font-size:1.5rem">Environmental</h3>
                                        <p style="margin-bottom: 1rem; line-height:35px; text-align:justify">TMC recognizes that our planet needs to be a sustainable home for current and future generations. A commitment to environmental stewardship is part of TMC’s Code of Business Conduct and Ethics.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    <!-- About Us  End-->
                                        
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
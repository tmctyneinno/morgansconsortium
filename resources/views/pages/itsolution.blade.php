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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/subsidiaries/it_solution_services.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        IT Solutions (Tyne IT) </h1>
                                    <h3 class="pt-3" style="color:#ffffff">IT Solution Delivery with 100% Efficient Deployment</h3>
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
                                                <h3 style="margin-bottom:15px;color:#A32928">TYNEIT Company Brings You the Best IT Minds for Reliable Consultation!</h3>
                                                <p style="margin-bottom: 1rem;">Work with us and capitalize on the expertise, tech background, and years of rich experience of our agile IT solution team. Known for developing a comprehensive and effective IT strategy, our solutions-oriented team digitally and technologically transforms your businesses in line with your business objectives.</p>
                                                <p style="margin-bottom: 1rem;">Proudly boasting of two IT subsidiaries namely; The IT Consultancy arm and the Media Arm. All of which work synergistically to help analyse, evaluate and subsequently fulfil a clients business objectives in any and all IT and media ramifications.</p>
                                                <p>At TYNEIT CONSULT, our premium strategic IT consultation services comprise analysts in the proud business of evaluating a company's IT systems to help them meet their business objectives. Our primary duties include analyzing and diagnosing a company's IT infrastructure, understanding a client's business needs, and designing and implementing a technology solution.</p>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space position-relative iq-gradient-bg" style="padding-top: 85px;padding-bottom:85px;background-color:#004281">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-lg-left iq-title-box text-sm-center">
                                                    <h3 class="iq-title text-uppercase text-white">Want to see what we do here?</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="btn-container text-lg-right text-sm-center">
                                                    <a class="iq-button-white" href="https://tynesideinnovation.com" target="_blank">
                                                        <span>Take a look</span>
                                                        <em></em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space pt-5 pb-0 position-relative overflow-hidden">
                                    <div class="row">
                                        <div class="fadeInUp col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <p style="margin-bottom: 1rem;">We take pride in helping businesses automate and digitalize their operations, improve software portfolios, and deploy the latest technologies. Our IT consulting services have helped hundreds of businesses across various industries to upgrade their software architecture, develop a tech-driven digital strategy, and enhance their operations by optimizing their software portfolio. Our consulting team consists of specialized IT professionals and software engineer’s working hand in hand with you for your digital transformation journey with careful planning and execution of the devised IT strategy.</p>
                                                <p style="margin-bottom: 1rem;">For more than a decade now, TYNEIT has been facilitating businesses of different scales and structures to upgrade and modernize their overall IT strategies. Our IT consultants develop an effective approach to IT consulting that lets us deliver supreme benefit to our clients in the shortest time frame.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space pt-5 pb-0 position-relative overflow-hidden">
                                    <div class="row">
                                        <div class="fadeInUp col-sm-12 col-lg-12 align-items-center">
                                            <div class="title-box text-left">
                                                <h3 style="margin-bottom:15px; color:#A32928">Tyne IT Divisions</h3>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="iq-section-space pt-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-12">
                                                <div class="item mb-5">
                                                    <div class="iq-masonry-item ">
                                                        <div class="iq-portfolio">
                                                            <a href="{{route('itSolution.cyber')}}" class="portfolio-img">
                                                                <img class="img-fluid w-100" src="{{asset('assets/images/subsidiaries/cyber_services.jpg')}}" alt="Cyber Security & Enterprise Architecture Services">
                                                                <div style="width:100%;height:100%; position: absolute; background-color:#000000; opacity: 0.54;z-index:1;top:0;"></div>
                                                                <div style="width:100%;height:100%; position: absolute;z-index:3;top:50%;text-align:center;">
                                                                    <h4 style="color:#ffffff">Cyber Security & Enterprise Architecture Services</h4>
                                                                </div>
                                                            </a>
                                                            <div class="iq-portfolio-content text-left">
                                                                <div class="details-box clearfix">
                                                                    <div class="consult-details">
                                                                        <a href="{{route('itSolution.cyber')}}">
                                                                            <!-- <h5 class="text-hover">Dignissimos wisi cillum</h5> -->
                                                                            <p class="mb-4">Our specialized and certified enterprise architects help business successfully navigate the chaos of automating and optimizing their technologies</p>
                                                                        </a>
                                                                        <a class="link-btn" href="{{route('itSolution.cyber')}}">
                                                                            <span class="btn-effect">
                                                                                Read more
                                                                                <i class="las la-angle-right"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-xs-12">
                                                <div class="item mb-5">
                                                    <div class="iq-masonry-item ">
                                                        <div class="iq-portfolio">
                                                            <a href="{{route('itSolution.media')}}" class="portfolio-img">
                                                                <img class="img-fluid w-100" src="{{asset('assets/images/subsidiaries/media_services.png')}}" alt="Media Solutions">
                                                                <div style="width:100%;height:100%; position: absolute; background-color:#000000; opacity: 0.54;z-index:1;top:0;"></div>
                                                                <div style="width:100%;height:100%; position: absolute;z-index:3;top:50%;text-align:center;">
                                                                    <h4 style="color:#ffffff">Media Solutions</h4>
                                                                </div>
                                                            </a>
                                                            <div class="iq-portfolio-content text-left">
                                                                <div class="details-box clearfix">
                                                                    <div class="consult-details">
                                                                        <a href="{{route('itSolution.media')}}">
                                                                            <!-- <h5 class="text-hover">Dignissimos wisi cillum</h5> -->
                                                                            <p class="mb-4">Our team to media experts help our customers solve their Digital branding and digital marketing needs.</p>
                                                                        </a>
                                                                        <a class="link-btn" href="{{route('itSolution.media')}}">
                                                                            <span class="btn-effect">
                                                                                Read more
                                                                                <i class="las la-angle-right"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
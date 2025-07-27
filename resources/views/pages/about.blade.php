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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/about.jpg);background-color: transparent; background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize "  style="color: #ffffff;">
                                        About THE MORGANS </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        Over the years, THE MORGANS has proven to deliver excellent, simplified process and
                                        optimum services to its clients. THE MORGANS operates in the UK & Nigeria</h3>
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

                                <div class="col-lg-7 align-items-center">
                                    <div class="title-box text-left">
                                        <!-- <span class="title-design">About THE MORGANS </span> -->
                                        <!-- <h3 style="line-height: 1.2;color:#A32928">THE MORGANS Helps You Discover the Pivot Points to Achieve Accelerated Business Performance, Growth & Profitability.</h3> -->
                                        <h3 style="line-height: 1.2;color:#A32928">About THE MORGANS</h3>
                                        <p style="margin-bottom: 1rem;">THE MORGANS Consortium is a conglomerate of firms that specialises in proferring a diverse range of bespoke services to our clients.</p>
                                        <p style="margin-bottom: 1rem;">Being a leading group of varying independent companies, we are a specialized one-stop-shop service provider for a range of businesses and industries, with management consulting as one of our core competencies.</p>
                                        <p style="margin-bottom: 1rem;">As a business entity, we thrive on helping business leaders tackle their most complex and critical issues with a highly disciplined and customized approach to business transformation, which enables us effectively drive business outcomes a lot faster than our competitors as well as improve business performance, create value and maximize growth.</p>
                                        <p style="margin-bottom: 1rem;">Our expert business consultants, having years of experience in different sectors, work hand in hand with our clients to build data-driven strategies and align business teams to not just research, analyze, compare and significantly boost your processes and performance metrics to best practices within the industry, but to also steer change, carry out disruption, capitalize upon opportunities, and discover the pivot points for accelerated business performance, growth, and profitability.</p>
                                        <p>This is because, for more than a decade, we have been helping hundreds of businesses address critical issues and drive transformation across all business aspects including technology change, leadership, talent, product development strategy, marketing, logistics, and finance and supply chain strategy execution by rendering advisory and/or implementation services to the (senior) management of organisations to improve the effectiveness of their business strategy, organisational performance and operational processes.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('assets/images/building-about.jpg')}}" class="about-right-box-img" alt="building-about" style="box-shadow:5px 5px 10px 0px rgb(0 0 0 / 8%);">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- About Us  End-->
                    @include('partials.partners')
                    <!-- word from our president -->
                    <section class="iq-section-space position-relative overflow-hidden" style="background-color: #ffffff;">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-lg-7 align-items-center">
                                    <div class="title-box text-left">
                                        <!-- <span class="title-design">About THE MORGANS</span> -->
                                        <h3 style="line-height: 1.2; color:#A32928">A Statement From The Group President/Founder</h3>
                                        <p>We are THE MORGANS; we represent the future; limitless, free, borderless and undaunting, the ideal future built for businesses to thrive.<br/><br/>
                                        We are the light bearers of 360degree multidisciplinary business and industry excellence, committed to contributing to a sustainable and prosperous business.<br/><br/>
                                        We remain a solid conglomerate of firms fully invested in helping businesses thrive by solving critical issues and driving transformation across all spheres of business through our unbeatable and unmatched specialized consulting services.<br/><br/>
                                        Welcome, as we take you on a journey through the heart and soul of finely optimized consulting and customer management at its finest. As a team of intellectually astute and experienced professionals rendering services geared towards providing advisory services, we are excited at the prospect of making you our acquaintance and we cannot wait to conduct business with you.<br/><br/>
                                        We remain firmly grounded in our collaborative culture and principle of innovative thinking, diverse insights, expertise and professionalism as we see our clients as not merely clients but partners that built the foundation of our successes. <br/><br/>
                                        On that note, we once again welcome you to the home of insightful business innovation and firmly iterate that we’re open and ready to serve you to the highest recognisable standard.
                                        </p>
                                    </div>

                                </div>
                                <div class="col-sm-12 col-lg-5 mb-3 mb-lg-0 text-center">
                                    <img alt="" class="single_image-img img-fluid attachment-full" width="390px" src="{{asset('assets/images/bod_mt/fa.jpeg')}}" style="box-shadow:5px 5px 10px 0px rgb(0 0 0 / 8%);">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Word from our president End-->

                    <section class="iq-section-space position-relative overflow-hidden">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 mb-3 mb-lg-0 text-center">
                                    <img alt="" class="single_image-img img-fluid attachment-full" width="600" src="{{asset('assets/images/Strategic_alliance.jpg')}}" style="box-shadow:5px 5px 10px 0px rgb(0 0 0 / 8%);">
                                </div>
                                <div class="col-sm-12 col-lg-6 align-items-center">
                                    <div class="title-box text-left">
                                        <!-- <span class="title-design">About THE MORGANS</span> -->
                                        <h2>We are your strategic partner</h2>
                                        <p>With us, you transform the way your business works!</p>
                                        <p>
                                            Let's help you make a change for the better and positively influence your bottom line and finances.
                                            With us, your business strategy and objectives would line up with people, technology, processes, and data, and you’d gain the ability to optimize and improvise the way you operate, and being your strategic change partner, our expert management consultancy team will be there with you every step of the way.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="iq-section-space pt-0 pb-0">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="item mb-5">
                                        <div class="iq-masonry-item ">
                                            <div class="iq-portfolio">
                                                <a href="{{route('landing.missionStatement')}}" class="portfolio-img">
                                                    <img class="img-fluid w-100" src="{{asset('assets/images/awards.jpg')}}" alt="img">
                                                    <div style="width:100%;height:100%; position: absolute; background-color:#000000; opacity: 0.54;z-index:1;top:0;"></div>
                                                    <div style="width:100%;height:100%; position: absolute;z-index:3;top:50%;text-align:center;">
                                                        <h4 style="color:#ffffff">Mission Statement</h4>
                                                    </div>
                                                </a>
                                                <div class="iq-portfolio-content text-left">
                                                    <div class="details-box clearfix">
                                                        <div class="consult-details">
                                                            <a href="{{route('landing.missionStatement')}}">
                                                                <p class="mb-4">Our core mission statement is focused on attaining our clients' desire in whatever industry they operate.</p>
                                                            </a>
                                                            <a class="link-btn" href="{{route('landing.missionStatement')}}">
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
                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="item mb-5">
                                        <div class="iq-masonry-item ">
                                            <div class="iq-portfolio">
                                                <a href="{{route('landing.ourBusinessApproach')}}" class="portfolio-img">
                                                    <img class="img-fluid w-100" src="{{asset('assets/images/business_approach.jpg')}}" alt="img">
                                                    <div style="width:100%;height:100%; position: absolute; background-color:#000000; opacity: 0.54;z-index:1;top:0;"></div>
                                                    <div style="width:100%;height:100%; position: absolute;z-index:3;top:50%;text-align:center;">
                                                        <h4 style="color:#ffffff">Our Business Approach</h4>
                                                    </div>
                                                </a>
                                                <div class="iq-portfolio-content text-left">
                                                    <div class="details-box clearfix">
                                                        <div class="consult-details">
                                                            <a href="{{route('landing.ourBusinessApproach')}}">

                                                                <p class="mb-4">Our business approach is built on becoming the most preferred consultants in the UK, Nigeria and Africa at large.</p>
                                                            </a>
                                                            <a class="link-btn" href="{{route('landing.ourBusinessApproach')}}">
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

                                <div class="col-lg-4 col-md-6 col-xs-12">
                                    <div class="item mb-5">
                                        <div class="iq-masonry-item ">
                                            <div class="iq-portfolio">
                                                <a href="{{route('landing.strength')}}" class="portfolio-img">
                                                    <img class="img-fluid w-100" src="{{asset('assets/images/strength.jpg')}}" alt="img">
                                                    <div style="width:100%;height:100%; position: absolute; background-color:#000000; opacity: 0.54;z-index:1;top:0;"></div>
                                                    <div style="width:100%;height:100%; position: absolute;z-index:3;top:50%;text-align:center;">
                                                        <h4 style="color:#ffffff">Strength & Values</h4>
                                                    </div>
                                                </a>
                                                <div class="iq-portfolio-content text-left">
                                                    <div class="details-box clearfix">
                                                        <div class="consult-details">
                                                            <a href="{{route('landing.strength')}}">
                                                                <!-- <h5 class="text-hover">Dignissimos wisi cillum</h5> -->
                                                                <p class="mb-4">We've flourished over the years due to our innovative, value-based & results-oriented business culture.</p>
                                                            </a>
                                                            <a class="link-btn" href="{{route('landing.strength')}}">
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
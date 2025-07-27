<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="iq-salon1-saidbar  landing-style-1 sidebar-main" style="transition: all 0.7s ease-out;">
    <!-- loader Start -->
    @include('partials.loader')
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        @include('partials.sidebar')

        <div class="iq-top-navbar" style="width:64px;left:0;right:auto;background-color:#A32928;">
            <div class="iq-navbar-custom">
                <div class=" d-flex align-items-center justify-content-start">
                    <i class="ri-menu-line wrapper-menu"></i>
                </div>
            </div>
        </div>

        <div class="content-page" style="padding:0px;">
            <!-- Banner -->
            <div id="iq-home" class="iq-banner-06 postion-relative overflow-hidden">
                <div class="banner-video" onclick="videoPlayPause()">
                    <figure>
                        <!-- <img src="{{asset('assets/images/banner_temp.jpg')}}" alt="image description"> -->
                        <video autoplay muted preload loop id="tmc_bg_video">
                            <source src="{{asset('assets/video/tmc_bg_video.mp4')}}" type="video/mp4">
                            This browser doesn't support video tag.
                        </video>
                        <figcaption>
                            <a class="play-btn"  data-rel="prettyPhoto[iframe]" id="play-btn">
                                <i class="ri-play-fill" style="font-size: xx-large"></i>
                            </a>
                        </figcaption>
                    </figure>

                </div>
                <div class="container">
                    <div class="banner-text text-center" onclick="videoPlayPause()">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="banner-img img-fluid center-block" style="width:80% !important" loading="lazy" src="{{asset('assets/images/the_morgans_logo.png')}}" alt="">
                            </div>
                            <div class="col-md-12 mt-4">
                                <!-- <h2 class="text-white">Software SaaS Platform</h2> -->
                                <h1 class="text-white pt-2 mb-2">We Help You Discover the Pivot Points to Achieve
                                    Accelerated Business Performance, Growth & Profitability
                                </h1>
                            </div>
                            <div class="col-md-12 banner-social" style="bottom: -10vh">
                                <div class="deatils-social mt-3 mb-3">
                                    <ul class="share-social  list-inline p-0">
                                        <li class="list-inline-item">
                                            <a href="https://web.facebook.com/The-Morgans-Consulting-105137438236339/" target="_blank">
                                                <i class="lab la-facebook-f la-lg"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://www.linkedin.com/company/themorgansconsortiumconsulting/" target="_blank">
                                                <i class="lab la-linkedin-in la-lg"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://www.instagram.com/themorgansconsortium_/" target="_blank">
                                                <i class="lab la-instagram la-lg"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="banner-objects">
                    <span class="banner-objects-02 iq-fadebounce">
                        <span class="iq-round"></span>
                    </span>
                    <span class="banner-objects-03 iq-fadebounce">
                        <span class="iq-round"></span>
                    </span>
                </div> -->
            </div>
            <!-- Banner End -->
            <div class="wrapper">
                <!-- Main Content -->
                <div class="main-content">
                    <!-- About Us -->
                    <section class="iq-section-space iq-section-pb-55 position-relative overflow-hidden">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 align-items-center mb-4">
                                    <div class="title-box text-justify">
                                        <!-- <span class="title-design">About THE MORGANS </span> -->
                                        <h3 style="line-height: 1.2; color: #A32928">We Help You Discover the Pivot Points to Achieve
                                            Accelerated Business Performance, Growth & Profitability.</h3>
                                        <p style="margin-bottom: 1rem;">THE MORGANS Consortium is a conglomerate of
                                            firms that specialises in proferring a diverse range of bespoke services to
                                            our clients.
                                            Being a leading group of varying Independent Companies, we are a specialized
                                            one-stop-shop service provider for a range of businesses and industries,
                                            with Management Consulting as one of our core competencies.</p>
                                        <p>As a business entity, we thrive on helping business leaders tackle their most
                                            complex and critical issues with a highly disciplined and customized
                                            approach to business transformation,
                                            which enables us effectively drive business outcomes a lot faster than our
                                            competitors as well as improve business performance, create value and
                                            maximize growth.</p>
                                    </div>
                                    <div class=" text-left d-inline rmb-30 ">
                                        <a class="landing-button btn-primary" href="{{route('landing.about')}}">
                                            <span class="btn-effect"> Read more</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 align-items-center">
                                    <div class="row">
                                        <div class="tg-videosection">
                                            <figure>
                                                <img src="{{asset('assets/images/banner_temp.jpg')}}" loading="lazy" alt="image description">
                                               
                                                <figcaption>
                                                    <blockquote>
                                                        <span class="" style="color:#fff">
                                                            <i class="ri-double-quotes-l" style="font-size: 100px"></i>
                                                        </span>
                                                        <h2>THE MORGANS thrive on helping business leaders tackle their most complex and critical issues.</h2>
                                                    </blockquote>
                                                </figcaption>
                                            </figure>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- About Us  End-->
                    <!-- Why Choose Us -->
                    <section id="iq-about" class="iq-section-space iq-section-pb-55">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 pr-3">
                                    <div class="title-box mb-0 text-center text-lg-left border-right">
                                        <span class="title-design">Where we can help</span>
                                        <h3 style="color: #A32928">Our Subsidiaries</h3>
                                    </div>
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <p class="">Through our expert and unmatched management consulting services,
                                        THE MORGANS Consortium helps you manage and upgrade your business operations
                                        efficiently and cost-effectively,
                                        so you can focus on the quality of your services and clients.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    @include('partials.subsidiaries')
                    <!-- Partner -->
                    @include('partials.partners')
                    <!-- Partner End-->
                    <!-- TESTIMONIALS -->
                    @include('partials.testimonials')
                    <!-- TESTIMONIALS End -->
                    @include('partials.reachout')
                </div>
                <!-- Main Content END -->
            </div>
            <!-- Footer -->
            @include('partials.footer')
            <!-- Footer End-->
        </div>
    </div>
    <!-- Wrapper End-->

    @section('script')
    <script type="text/javascript">
        let video = document.getElementById('tmc_bg_video');
        let play_button = document.getElementById('play-btn');

        function videoPlayPause() {
            if (!video.paused){
                video.pause();
                play_button.style.cssText='display:block!important';
            }else{
                video.play();
                play_button.style.cssText='display:none!important';
            }
            

        }
        // video.addEventListener('ended', function() {
        //     video.load();
        // }, false);
    </script>
    @endsection
    @include('partials.scripts')

    @include('partials.livechat')
</body>

</html>
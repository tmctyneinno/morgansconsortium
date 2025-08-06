<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
    <style>
        .portfolio-img {
            display: block;
            position: relative;
            overflow: hidden;
            height: 250px; /* Adjust this value as needed */
        }

        .portfolio-img img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* This ensures images cover the area without distortion */
            transition: transform 0.3s ease; /* Optional: for hover effects */
        }

        /* Optional hover effect */
        .portfolio-img:hover img {
            transform: scale(1.05);
        }
    </style>
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
                                        Advisory Governing Council </h1>
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
                    
                    <section class="iq-section-space pt-10 pb-0">
                        <div class="container">
                            <div class="row">
                                @foreach($items as $item)
                                <div class="col-lg-3 col-md-6 col-xs-12">
                                    <div class="item mb-5">
                                        <div class="iq-masonry-item">
                                            <div class="iq-portfolio">
                                                <a href="" class="portfolio-img">
                                                    <img class="img-fluid w-100" src="{{ asset($item->image_path) }}" alt="{{ $item->title }}">
                                                </a>
                                                <div class="iq-portfolio-content text-left">
                                                    <div class="details-box clearfix">
                                                        <div class="consult-details">
                                                            
                                                                <h5 class="text-hover">{{ $item->title }}</h5>
                                                                <p class="mb-4">{{ $item->description }}</p>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
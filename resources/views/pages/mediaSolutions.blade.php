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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../../assets/images/subsidiaries/media_services.png);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">Media Solutions</h1>
                                    <h3 class="pt-3" style="color:#ffffff">Digital Branding and Digital Marketing Solutions Provider</h3>
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
                                        <div class="col-sm-12 col-lg-12  align-items-center">
                                            <div class="title-box text-left">
                                                <h3 style="margin-bottom:15px;color:#A32928">Digital Branding and Digital Marketing Solutions Provider.</h3>
                                                <p style="margin-bottom: 1rem;">Our team specialises in solving problems relating to facilitating communication between a company and its clients by helping companies create an identity, increase visibility and establish credibility among consumers who discover, relate to, and interact with a brand on digital platforms. </p>
                                                <p style="margin-bottom: 1rem;">As a media solutions agency, we reach customers online through omnichannel marketing, multichannel marketing, or single-channel marketing. With multichannel and single-channel marketing, we interact with customers in one or multiple channels such as websites, blogs, email, social media, and more. Going further than just establishing a credible online presence, our services include creating and scheduling relevant, engaging content across all relevant platforms. We begin by understanding your ‘value’ as a business, then we strife to use all necessary resources to successfully communicate those values to your website visitors and relevant target audience.</p>
                                                <p>Now, as expert consultants, we understand that succinctly communicating the values you present to your customers digitally isn’t nearly enough as there are a lot more intricacies involved in attracting your customers and staying relevant in their minds. Which we why we include other relevant features like campaigns, content marketing, affiliate marketing (etc) in our all encompassing digital strategy.</p>
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
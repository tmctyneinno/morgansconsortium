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
            <div id="iq-home" class="iq-banner-software" style="background-image: url(../assets/images/leadership.jpg);background-color: transparent;
		background-repeat: no-repeat;background-size: cover;background-position: 50% 50%;">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="iq-text">
                                    <h1 class="text-capitalize" style="color: #ffffff;">
                                        Leadership </h1>
                                    <h3 class="pt-3" style="color:#ffffff">
                                        Our business approach is built on becoming the most preferred consultants in the UK, Nigeria and Africa at large.</h3>
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
                            <div class="col-lg-9 col-sm-12">

                                <section class="iq-section-space pb-0 position-relative overflow-hidden">
                                    <h3 style="margin-bottom: 15px;color:#A32928">Our Leadership</h3>
                                    <p class="" style="margin-bottom:4rem;">Our board and management team consists of industry-recognized professionals with a broad range of expertise, and also a wealth of experience . These executives use their knowhow, experience, and governance to assist us in developing and delivering solutions that meet our clients' needs.</p>

                                    <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" style="font-weight:700;font-size:large" id="bod-tab" data-toggle="tab" href="#bod" role="tab" aria-controls="bod" aria-selected="true">Board of Directors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="font-weight:700;font-size:large" id="mt-tab" data-toggle="tab" href="#mt" role="tab" aria-controls="mt" aria-selected="false">Our Team</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent-2">
                                        <div class="tab-pane fade active show" id="bod" role="tabpanel" aria-labelledby="bod-tab">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <a href="#" data-toggle="modal" data-target=".folusaDetails">
                                                        <div class="single-team-member">
                                                            <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/fa.jpeg')}}" alt="image">
                                                            <div class="content text-center">
                                                                <h3>Dr. Foluso Amusa PhD, FICA, FIIM</h3>
                                                                <span class="liner"></span>
                                                                <span style="margin-top:10px">Founder | President - Group Chief Executive Officer</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="modal fade folusaDetails" tabindex="-1" aria-hidden="true" role="dialog">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="folusoDetailsTitle">Dr. Foluso Amusa PhD, FICA, FIIM</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-lg-5 col-sm-12">
                                                                        <img class="w-100" src="{{asset('assets/images/bod_mt/fa.jpeg')}}" alt="image">
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-7 col-sm-12">
                                                                    <p> <strong> Founder and Visionary Leader in Governance, Risk, Compliance, and Financial Crime Prevention </strong></p>
                                                                       <p> Dr. Foluso Amusa, PhD, is a globally recognized leader, entrepreneur, and innovator in Governance, Risk, Compliance (GRC), and Financial Crime Prevention.</p>
                                                                      <p> He is the founder and chairman of multiple global ventures, including <strong>  Tyneside Innovation, The Morgans, Oysterchecks, PORTREC Resourcing, and the Institute of Financial Crime and Fraud Prevention of Nigeria. </strong></p>
                                                                       <p> Dr. Amusa is also the convener of the prestigious <strong> GRC & Financial Crime Prevention Summit and Awards,</strong> fostering collaboration and best practices in combating financial crime worldwide. </p> 
                                                                       <p>A pioneer in thought leadership, he publishes and edits the <strong> GRC Financial Crime Today Magazine</strong>, distributed free since 2020.</p>
                                                                        <p>His ventures span innovative technology, IT, media, and financial services, highlighting his commitment to driving growth, security, and empowerment globally.</p>
                                                                      <p>  Additionally, Dr. Amusa serves as a Non-Executive Director at <strong>The MARIE Trust </strong>, Scotland, and <strong>Relate UK </strong>, and chairs the <strong>Advisory Board of ACFCS Nigeria Chapter.</strong></p>
                                                                      <p>His work underscores a dedication to fostering talent, advancing digital transformation, and promoting gender equity in leadership.</p>


                                                                        <!--<p>Mr. Foluso Amusa is a seasoned professional with over 25 years of multi-sector experience, he is a transformational management consultant with verified success in all facets of financial regulatory compliance, compliance oversight & monitoring, governance, risk and compliance, stakeholders management, project management, and business analysis. He also has the ability to leverage the latest best practices and technology to develop innovative business solutions.</p>-->
                                                                        <!--<p>He is passionate about conceptualizing and delivering high-level strategies to maximize the potential of leaders at all levels.</p>-->
                                                                        <!--<p>Prior to commencing THE MORGANS Consortium , he has worked in different reputable organizations in Senior Management Roles in the Governance, Risk, Compliance, and Financial Crime Prevention, Project Management, IT within the Financial Services Industry, and Public sector in the United Kingdom and Nigeria.</p>-->
                                                                        <!--<p>He holds a B.Sc. from the University of Westminster, He is a Fellow of the International Compliance Association (ICA) & Institute of Information Management (IIM), he has a certification in ICO UK (Designed Data Protection), he has MBA Management from Anglia Ruskin University, PGDiploma in Governance, Risk, Compliance from the University of Manchester, and a Ph.D. in Governance, Risk, Compliance, and Financial Crime Prevention from American International University, Hawaii.</p>-->
                                                                        <!--<p>He is also the publisher of GRC & Financial Crime Today Magazine and the founder of the GRC & FinCrime Prevention Awards. The first of its kind in Nigeria to reward excellence, create awareness while also encouraging improvement and efficiency in the GRC & Financial Crime Prevention space within Financial Institutions (“FIs”).</p>-->
                                                                   
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            
                                             
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <a href="#" data-toggle="modal" data-target=".tubosunDetails">
                                                        <div class="single-team-member">
                                                            <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/tubosun.jpg')}}" alt="image">
                                                            <div class="content text-center">
                                                                <h3>Dr. Tubosun Odusanya (PhD)</h3>
                                                                <span class="liner"></span>
                                                                <span style="margin-top:10px">Advisory Board Member</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="modal fade tubosunDetails" tabindex="-1" aria-hidden="true" role="dialog">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="tubosunDetailsTitle">Dr. Tubosun Odusanya (PhD)</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-lg-5 col-sm-12">
                                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/tubosun.jpg')}}" alt="image">
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-7 col-sm-12">
                                                                        <p>Dr. Tony Tubosun Odusanya is a seasoned professional in Research & Development, Business Development and Leadership.</p>
                                                                        <p>As a Doctor of Philosophy (PhD) focused on International Business from The University of Manchester, he is reputable for driving and promoting transnational business best practices.</p>
                                                                        <p>He was once the Principal/ Owner of Kingsland Business College.</p>
                                                                        <p>Currently, he is the Director of Studies at Gladstone Business School, Dublin, Ireland.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <a href="#" data-toggle="modal" data-target=".chinweDetails">
                                                        <div class="single-team-member">
                                                            <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/user.png')}}" alt="image">
                                                            <div class="content text-center">
                                                                <h3>Mrs. Chinwe Ndubeze (LLB, B.L, LLM)</h3>
                                                                <span class="liner"></span>
                                                                <span style="margin-top:10px">Advisory Board Member, Legal & Financial Crime Compliance</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="modal fade chinweDetails" tabindex="-1" aria-hidden="true" role="dialog">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="chinweDetailsTitle">Mrs. Chinwe Ndubeze (LLB, B.L, LLM)</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-lg-5 col-sm-12">
                                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/user.png')}}" alt="image">
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-7 col-sm-12">
                                                                        <p>Mrs. Chinwe Ndubeze ( LLB, B.L, LLM ) who is also the Assistant Director for Legal Administration Economic and Financial Crime Commission (EFCC).</p>
                                                                        <p>She is an experienced Lawyer with a demonstrated law practice history. Specialized in Financial Crime Prevention, Cyber-crime, E-commerce and Telecommunication Law, practice and research as a member panel of judges for the GRC & FinCrime Prevention Awards 2021.</p>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <a href="" data-toggle="modal" data-target=".zibiriDetails">
                                                        <div class="single-team-member">
                                                            <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/zi.jpg')}}" alt="image">
                                                            <div class="content text-center">
                                                                <h3>Mrs. Temitayo Zibiri</h3>
                                                                <span class="liner"></span>
                                                                <span style="margin-top:10px">Advisory Board Member</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="modal fade zibiriDetails" tabindex="-1" aria-hidden="true" role="dialog">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="zibiriDetailsTitle">Mrs. Temitayo Zibiri</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-lg-5 col-sm-12">
                                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/zi.jpg')}}" alt="image">
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-7 col-sm-12">
                                                                        <p>Mrs. Temitayo Zibiri is a Director at John Wood Associates Ltd, United Kingdom</p>
                                                                        <p>She is a seasoned management specialist whose expertise spans across risk management, financial analysis, strategic business planning, portfolio management and change management. She sits on several boards among which is Lout Capital Ltd.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <a href="#" data-toggle="modal" data-target=".lokeshDetails">
                                                        <div class="single-team-member">
                                                            <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/lokesh.jpg')}}" alt="image">
                                                            <div class="content text-center">
                                                                <h3>Mr. Lokesh Joshi</h3>
                                                                <span class="liner"></span>
                                                                <span style="margin-top:10px">Advisory Board Member</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="modal fade lokeshDetails" tabindex="-1" aria-hidden="true" role="dialog">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="lokeshDetailsTitle">Mr. Lokesh Joshi</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-lg-5 col-sm-12">
                                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/lokesh.jpg')}}" alt="image">
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-7 col-sm-12">
                                                                        <p>Mr. Lokesh Joshi is an innovation and creativity enthusiast and expert. With a background in mechanical engineering, he has built a renowned and recognized prowess in product development, research and innovation management, technical leadership and global vendor development.</p>
                                                                        <p>He has about 30 years hands on experience serving in diverse firms and multinationals as Project Manager, Project Planner, Program Manager etc and risen through the ranks very fast.</p>
                                                                        <p>He is the founder of Grokalp. He is certified as a PRINCE2® 2017 Practitioner.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <a href="" data-toggle="modal" data-target=".esosaDetails">
                                                        <div class="single-team-member">
                                                            <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/eb.jpg')}}" alt="image">
                                                            <div class="content text-center">
                                                                <h3>Mrs. Esosa Balogun</h3>
                                                                <span class="liner"></span>
                                                                <span style="margin-top:10px">Advisory Board Member</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="modal fade esosaDetails" tabindex="-1" aria-hidden="true" role="dialog">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="esosaDetailsTitle">Mrs. Esosa Balogun</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-lg-5 col-sm-12">
                                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/eb.jpg')}}" alt="image">
                                                                    </div>
                                                                    <div class="col-md-7 col-lg-7 col-sm-12">
                                                                        <p>She is a certified professional with extensive experience in the areas of Enterprise Risk Management, Internal Audit, Internal Control, Strategy, Finance, Compliance and Corporate Governance.</p>
                                                                        <p>She has been involved in Risk Consulting and Internal Audit services for several clients in the manufacturing, financial services, telecommunications and oil and gas sectors.</p>
                                                                        <p>With over 15 years' experience in delivering risk solutions such as Design and Implementation of Enterprise Risk Management Frameworks, Internal Audit transformation, Risk Assessments, Internal Control Assessments, Accounting Advisory, Corporate Governance and Board Advisory Services.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <a href="#" data-toggle="modal" data-target="#thomasDetails">
                                                        <div class="single-team-member">
                                                            <img class="w-100" loading="lazy" src="{{asset('assets/images/bod_mt/user.png')}}" alt="image">
                                                            <div class="content text-center">
                                                                <h3>Mr. Thomas Becker</h3>
                                                                <span class="liner"></span>
                                                                <span style="margin-top:10px">Advisory Board Member</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="mt" role="tabpanel" aria-labelledby="mt-tab">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/user.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mr. Alaba Durojaiye</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Head of IT and Operations</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/ade.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mrs. Adeyinka Adesanya</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px"> Product Lead</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="https://media.licdn.com/dms/image/D4D03AQEg4wM0YpCB6w/profile-displayphoto-shrink_400_400/0/1702835442736?e=1725494400&v=beta&t=DWh2vwPDfQ3pdV6jv0vN7O0cbeUO_a5xyho_hppLJ4w" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Michael Ozoudeh </h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Lead Software Developer</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="https://media.licdn.com/dms/image/D4D03AQEk91hR2UDndQ/profile-displayphoto-shrink_400_400/0/1718217811441?e=1725494400&v=beta&t=aeBJMkZzJzyozg9NgSArSr9teckYNKU32HexducSdVY" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Esther Akinyemi</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Product Designer | UI/UX Designer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/deji.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Oladeji Adeloye</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Customer Service/Social Media Manager</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="https://media.licdn.com/dms/image/D5603AQHDVbygIZEEGw/profile-displayphoto-shrink_400_400/0/1690562694264?e=1725494400&v=beta&t=N7DTKSKtuo47F6kjefkd6MZFpDJIGfJ_OTJGQBqSC58" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Matthew (T.) Adeosun</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Print Technologist | Print Consultant </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/dan.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Eshanokpe Daniel</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Fullstack Developer </span>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/ak.jpg')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mr. Abdulrahman Akanbi</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Partner, IT Security & Cyber Advisory</span>
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/ea.jpg')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mrs. Eny Alabi</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Financial Crime Consultant</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/oe.jpg')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mr. Ovie Egbedi</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Partner, IT Solution Architect</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/user.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mr. Jay Cross</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Technology Consultant</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/user.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mr. Yemi Akinwunmi</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Financial Consultant</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/user.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mr. Taiwo Samuel</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Partner, Financial Crime Risk Compliance Advisory</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="single-team-member">
                                                        <img class="w-100" loading="lazy" src="{{asset('assets/images/mgt_team/user.png')}}" alt="image">
                                                        <div class="content text-center">
                                                            <h3>Mr. Tayo Oyenuro</h3>
                                                            <span class="liner"></span>
                                                            <span style="margin-top:10px">Senior DevOps Consultant</span>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                @include('partials.sidebar2')
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
        </div>
    </div>
    <!-- Wrapper End-->

    <!-- Backend Bundle JavaScript -->
    @include('partials.scripts')
    @include('partials.livechat')
</body>

</html>
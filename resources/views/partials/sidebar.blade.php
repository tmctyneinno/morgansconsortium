<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <div class="iq-menu-bt-sidebar">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{request()->is('/')? 'active': ''}}">
                    <a href="{{route('landing.index')}}" class=" ">
                        <i class="las la-home iq-arrow-left"></i>
                        <span>HOME</span>
                    </a>
                </li>
                <li class="{{request()->is('about-the-morgans/*') || request()->is('about-the-morgans')? 'active': ''}}">
                        <a href="#about" class="collapsed" data-href="{{route('landing.about')}}" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-info-circle iq-arrow-left"></i>
                            <span>ABOUT</span>
                            <i class="las la-plus iq-arrow-right arrow-active"></i>
                            <i class="las la-minus iq-arrow-right arrow-hover"></i>
                        </a>
                    <ul id="about" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{request()->is('about-the-morgans') ? 'active': ''}}">
                            <a href="{{route('landing.about')}}">
                                <span>About THE MORGANS</span>
                            </a>
                        </li>
                        <li class="{{request()->is('about-the-morgans/mission-statement')? 'active': ''}}">
                            <a href="{{route('landing.missionStatement')}}">
                                <span>Mission Statement</span>
                            </a>
                        </li>
                        <li class="{{request()->is('about-the-morgans/our-business-approach')? 'active': ''}}">
                            <a href="{{route('landing.ourBusinessApproach')}}">
                                <span>Our Business Approach</span>
                            </a>
                        </li>
                       
                        <li class="{{request()->is('about-the-morgans/strength-and-values')? 'active': ''}}">
                            <a href="{{route('landing.strength')}}">
                                <span>Strength & Values</span>
                            </a>
                        </li>
                        <li class="{{request()->is('about-the-morgans/leadership')? 'active': ''}}">
                            <a href="{{route('landing.leadership')}}">
                                <span>Leadership</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{request()->is('subsidiaries/*') || request()->is('subsidiaries') ? 'active': ''}}">
                    <a href="#app" class="collapsed" data-href="{{route('landing.subsidiaries')}}" data-toggle="collapse" aria-expanded="false">
                        <i class="las la-building iq-arrow-left"></i>
                        <span>SUBSIDIARIES</span>
                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="app" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{request()->is('subsidiaries/procurements')? 'active': ''}}">
                            <a href="{{route('landing.procurements')}}">
                                <span>Procurement Services</span>
                        </li>
                        <li class="{{request()->is('subsidiaries/real-estate')? 'active': ''}}">
                            <a href="{{route('landing.realEstate')}}">
                                <span>Real Estate & Property Development</span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/prints-solution')? 'active': ''}}">
                            <a href="{{route('landing.printSolution')}}">
                                <span>Prints Solution</span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/it-solution')? 'active': ''}}">
                            <a href="{{route('landing.itSolution')}}">
                                <span>IT Solutions Delivery</span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/background-checks')? 'active': ''}}">
                            <a href="{{route('landing.backgroundChecks')}}">
                                <span>Background Vetting - KYC/AML</span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/recruitments')? 'active': ''}}">
                            <a href="{{route('landing.recruitments')}}">
                                <span>Recruitment & Outsourcing</span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/tmc-institute')? 'active': ''}}">
                            <a href="{{route('landing.tmcInstitute')}}">
                                <span>Training and Development</span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/facility-management')? 'active': ''}}">
                            <a href="{{route('landing.facilityManagement')}}">
                                <span>Facilities Management Services</span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/advisory')? 'active': ''}}">
                            <a href="{{route('landing.advisory')}}">
                                <span>Advisory Services </span>
                            </a>
                        </li>
                        <li class="{{request()->is('subsidiaries/grc-fincrime-prevention-awards')? 'active': ''}}">
                            <a href="{{route('landing.grcFinCrimeAwards')}}">
                                <span>Awards & Summits</span>
                            </a>
                        </li>
                         <li class="{{request()->is('subsidiaries/women-in-grc')? 'active': ''}}">
                            <a href="{{route('landing.womeningrc')}}">
                                <span>Women in GRC</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{request()->is('advisory/governing-council/*') || request()->is('advisory-council')? 'active': ''}}">
                    <a href="{{route('landing.advisoryCouncil')}}" class="">
                        <i class="las la-briefcase iq-arrow-left"></i>
                        <span>ADVISORY COUNCIL</span>
                    </a>
                </li>
                <li class="{{request()->is('careers')? 'active': ''}}">
                    <a href="{{route('landing.careers')}}" class="">
                        <i class="las la-briefcase iq-arrow-left"></i>
                        <span>CAREERS</span>
                    </a>
                </li>
                <!-- <li class=" ">
                    <a href="#ui" class="">
                        <i class="las la-newspaper iq-arrow-left"></i>
                        <span>NEWS & BLOG</span>
                    </a>
                </li> -->
                <li class="{{request()->is('contact-us')? 'active': ''}}">
                    <a href="{{route('landing.contactUs')}}" class="">
                        <i class="las la-address-card iq-arrow-left"></i>
                        <span>CONTACT US</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
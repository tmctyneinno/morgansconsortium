<section class="iq-section-space position-relative overflow-hidden">
    <div class="row">
        <div class="col-sm-12 col-lg-12 align-items-center">
            <div class="title-box text-left">
                <h3 style="margin-bottom:15px;color:#A32928">Subsidiaries</h3>
                <div class="custom-tab">
                    <ul class="nav nav-pills text-center flex-column mb-5 mb-md-0" id="pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/procurements')? 'active': ''}}" href="{{route('landing.procurements')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Procurement Services</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/real-estate')? 'active': ''}}" href="{{route('landing.realEstate')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Real Estate & Property <br> Development</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/prints-solution')? 'active': ''}}" href="{{route('landing.printSolution')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>    
                                <h5 class="tab-title">Prints Solution</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/it-solution')? 'active': ''}}" href="{{route('landing.itSolution')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>    
                                <h5 class="tab-title">IT Solutions Delivery</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/background-checks')? 'active': ''}}" href="{{route('landing.backgroundChecks')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Background Vetting <br/> - KYC/AML</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/recruitments')? 'active': ''}}" href="{{route('landing.recruitments')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Recruitment & Outsourcing</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/tmc-institute')? 'active': ''}}" href="{{route('landing.tmcInstitute')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Training and Development</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/facility-management')? 'active': ''}}" href="{{route('landing.facilityManagement')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Facilities Management <br> Services</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/advisory')? 'active': ''}}" href="{{route('landing.advisory')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Advisory Services</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('subsidiaries/grc-fincrime-prevention-awards')? 'active': ''}}" href="{{route('landing.grcFinCrimeAwards')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Awards & Summits</h5>
                            </a>
                        </li>
                         <li class="nav-item w-inherit">
                            <a class="nav-link w-100  {{request()->is('subsidiaries/women-in-grc')? 'active': ''}}" href="{{route('landing.womeningrc')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Women in GRC</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
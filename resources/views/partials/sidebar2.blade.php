<section class="iq-section-space position-relative overflow-hidden">
    <div class="row">
        <div class="col-sm-12 col-lg-12 align-items-center">
            <div class="title-box text-left">
                <h4 style="margin-bottom:15px;color:#A32928">About THE MORGANS</h4>
                <div class="custom-tab">
                    <ul class="nav nav-pills text-center flex-column mb-5 mb-md-0" id="pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('about-the-morgans/mission-statement')? 'active': ''}}" href="{{route('landing.missionStatement')}}" aria-selected="false">
                            <i class="ri-arrow-right-s-fill icon-side"></i>
                                <h5 class="tab-title">Mission Statement</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('about-the-morgans/our-business-approach')? 'active': ''}}" href="{{route('landing.ourBusinessApproach')}}"  aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>    
                                <h5 class="tab-title">Our Business Approach</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('about-the-morgans/strength-and-values')? 'active': ''}}" href="{{route('landing.strength')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>    
                                <h5 class="tab-title">Strength & Values</h5>
                            </a>
                        </li>
                        <li class="nav-item w-inherit">
                            <a class="nav-link w-100 {{request()->is('about-the-morgans/leadership')? 'active': ''}}" href="{{route('landing.leadership')}}" aria-selected="false">
                                <i class="ri-arrow-right-s-fill icon-side"></i>    
                                <h5 class="tab-title">Leadership</h5>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<header class="header navbar navbar-expand-lg ml-auto bg-light shadow-sm fixed-top">
    <div class="container px-3">
        <a href="{{route('web.home')}}" class="navbar-brand pe-3">
            <img src="{{asset('icon.png')}}" width="47" alt="Yada Ekidanta">
            {{-- Yada Ekidanta --}}
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a href="javascript:;" data-no-swup class="nav-link dropdown-toggle {{request()->is('services/agile-development') || request()->is('services/project-based') || request()->is('services/managed-services') || request()->is('services/design-services') || request()->is('services/technical-writer') || request()->is('services/quality-assurance') ? 'active' : ''}}" data-bs-toggle="dropdown" aria-current="page">Services</a>
                        <div class="dropdown-menu p-0">
                            <div class="d-lg-flex">
                                <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0" style="background-image: url({{asset('img/banner/explore.webp')}}); margin: -1px;"></div>
                                <div class="mega-dropdown-column pt-lg-3 pb-lg-4" style="width:500px;">
                                    <h3>Services</h3>
                                    <p class="fs-sm">Our solutions cut across various industries and our expertise covered many technologies.</p>
                                    <a href="{{route('web.services')}}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex">
                                        Learn More
                                    </a>
                                </div>
                                <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <a href="{{route('web.ad')}}" class="dropdown-item">
                                                Agile Development
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('web.pb')}}" class="dropdown-item">
                                                Project Based
                                            </a>
                                        </li>
                                        <li><a href="{{route('web.ms')}}" class="dropdown-item">Managed Services</a></li>
                                    </ul>
                                </div>
                                <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="{{route('web.ds')}}" class="dropdown-item">Design Services</a></li>
                                        <li><a href="{{route('web.tw')}}" class="dropdown-item">Technical Writter</a></li>
                                        <li><a href="{{route('web.qa')}}" class="dropdown-item">Quality Assurance</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('web.case_study')}}" class="nav-link">Case Studies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:;" data-no-swup class="nav-link dropdown-toggle {{request()->is('about') ? 'active' : ''}}" data-bs-toggle="dropdown" aria-current="page">Explore More</a>
                        <div class="dropdown-menu p-0">
                            <div class="d-lg-flex">
                                <div class="mega-dropdown-column pt-lg-3 pb-lg-4" style="width:500px;">
                                    <h3>Explore More</h3>
                                    <p class="fs-sm">Strength in diversity is something we are proud of as a pioneer in agile project management. Our dedication to creating an impact with every line of code is something we take to heart for everyone involved.</p>
                                </div>
                                <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="{{route('web.about')}}" class="dropdown-item {{request()->is('about') ? '' : ''}}">About Company</a></li>
                                        <li><a href="{{route('web.career')}}" class="dropdown-item {{request()->is('career') ? '' : ''}}">Career</a></li>
                                        <li><a href="{{route('web.insights')}}" class="dropdown-item {{request()->is('insights') ? '' : ''}}">Insights</a></li>
                                    </ul>
                                </div>
                                <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0" style="background-image: url({{asset('img/banner/explore.webp')}}); margin: -1px;"></div>
                            </div>
                        </div>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                        <ul class="dropdown-menu">
                            <li><a href="account-details.html" class="dropdown-item">Account Details</a></li>
                            <li><a href="account-security.html" class="dropdown-item">Security</a></li>
                            <li><a href="account-notifications.html" class="dropdown-item">Notifications</a></li>
                            <li><a href="account-messages.html" class="dropdown-item">Messages</a></li>
                            <li><a href="account-saved-items.html" class="dropdown-item">Saved Items</a></li>
                            <li><a href="account-collections.html" class="dropdown-item">My Collections</a></li>
                            <li><a href="account-payment.html" class="dropdown-item">Payment Details</a></li>
                            <li><a href="account-signin.html" class="dropdown-item">Sign In</a></li>
                            <li><a href="account-signup.html" class="dropdown-item">Sign Up</a></li>
                        </ul>
                    </li>
                    @endauth
                </ul>
            </div>
            <div class="offcanvas-header border-top">
            <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
                <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                &nbsp;Buy now
            </a>
            </div>      
        </div>
        <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
            <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{route('web.contact')}}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex">
            <i class='bx bx-smile'></i>
            &nbsp; LET'S CONNECT
        </a>
    </div>
</header>
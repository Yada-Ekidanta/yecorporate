<x-web-layout title="Services - Project, Agile and Managed Services" description="Project, Agile, Managed Services, ye, cv ye, yada ekidanta, cv yada ekidanta, CMMI2 compliant custom software development company, You can opt for project based / programmer outsourcing service, ye" keywords="application deliveries management services, web development, mobile app, android app, iphone app, aplikasi perusahaan, programmer outsourcing, custom software development company">
    <section class="dark-mode vh-100 bg-repeat-0 bg-position-center bg-size-cover overflow-hidden" style="background-image: url({{asset('web/img/landing/intro/hero/bg.jpg')}});">
        <div class="container vh-100">
            <div class="row flex-nowrap flex-row-reverse vh-100">
                <div class="col-lg-4 col-md-5 d-flex flex-column text-start text-md-start py-5">
                    <h1 class="display-6 mt-auto mb-4">YE Capacities</h1>
                    <p class="fs-md text-light opacity-70 mb-0">
                        Project, Agile, Managed Services
                    </p>
                    {{-- <img src="{{asset('web/img/landing/intro/hero/switcher.svg')}}" width="212" class="d-block mx-auto mx-md-0" alt="Light / Dark Mode"> --}}
                </div>
                <div class="dark-mode vh-100 bg-repeat-0 bg-position-center bg-size-cover overflow-hidden" style="background-image: url({{asset('img/banner/service.webp')}});clip-path: polygon(0 0, 60% 0, 75% 100%, 0% 100%);">
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-5">
        <div class="row pt-2 pt-md-3 justify-content-center">
            <div class="col-md-6">
                <h1 class="fs-6 pb-2 text-primary border-bottom">FUTUREPROOF 360°</h1>
                <h1 class="display-6">Our Expertise</h1>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-4 pb-xl-3">
            <div class="col border-end">
                <div class="p-3 animation-on-hover" style="float:right;">
                    <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-4-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                    <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-4-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                </div>
                <h6>01.</h6>
                <h4>AGILE DELIVERY</h4>
                <p class="fs-md mb-0">
                    DIGITAL TRANSFORMATION SOLUTION
                </p>
                <ul>
                    <li><strong>Agile Delivery</strong></li>
                    <li><strong>Manage Services</strong></li>
                    <li><strong>Consulting</strong></li>
                </ul>
            </div>
            <div class="col border-end">
                <div class="p-3 animation-on-hover" style="float:right;">
                    <lottie-player class="mx-auto" src="{{asset('img/services/cloud.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                </div>
                <h6>02.</h6>
                <h4>CLOUD INTEGRATION</h4>
                <p class="fs-md mb-0">
                    CONNECTING GLOBAL CUTTING EDGE TECHNOLOGY
                </p>
                <p>
                    We have an unrelenting commitment to making sure that our advanced solutions yield tangible business impact.
                </p>
            </div>
            <div class="col border-end">
                <div class="p-3 animation-on-hover" style="float:right;">
                    <lottie-player class="mx-auto" src="{{asset('img/services/callcenter.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                </div>
                <h6>03.</h6>
                <h4>SUPPORT 24/7</h4>
                <p class="fs-md mb-0">
                    SUPPORT FOR CRITICAL ISSUES 24/7
                </p>
                <p>
                    YE covers the application and its surrounding environments. We will set up a helpdesk and assign a PIC, who becomes the single support contact point. Our team will provide proactive maintenance during business days and on-call support for critical issues 24/7.
                </p>
            </div>
        </div>
    </section>
    <div class="bg-secondary pb-3 pt-5">
        <section class="container">
            <h5 class="">WHAT CAN WE DO</h5>
            <div class="position-relative mb-5">
                <div class="swiper mobile-app-slider" data-swiper-options='{
                    "slidesPerView": 9,
                    "spaceBetween": 50
                }'>
                    <div class="swiper-wrapper">
                        @for($i=1;$i<=9;$i++)
                        <div class="swiper-slide" data-swiper-tab="#text-{{$i}}">
                            <img src="{{asset('img/lang/'.$i.'.webp')}}" class="d-block mx-auto" style="width:100%;border-radius: 25px;" alt="Screen">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="position-relative mb-5">
                <div class="swiper mobile-app-slider" data-swiper-options='{
                    "slidesPerView": 9,
                    "spaceBetween": 50
                }'>
                    <div class="swiper-wrapper">
                        @for($i=10;$i<=18;$i++)
                        <div class="swiper-slide" data-swiper-tab="#text-{{$i}}">
                            <img src="{{asset('img/lang/'.$i.'.webp')}}" class="d-block mx-auto" style="width:100%;border-radius: 25px;" alt="Screen">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="position-relative mb-5">
                <div class="swiper mobile-app-slider" data-swiper-options='{
                    "slidesPerView": 9,
                    "spaceBetween": 50
                }'>
                    <div class="swiper-wrapper">
                        @for($i=19;$i<=27;$i++)
                        <div class="swiper-slide" data-swiper-tab="#text-{{$i}}">
                            <img src="{{asset('img/lang/'.$i.'.webp')}}" class="d-block mx-auto" style="width:100%;border-radius: 25px;" alt="Screen">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="position-relative mb-5">
                <div class="swiper mobile-app-slider" data-swiper-options='{
                    "slidesPerView": 9,
                    "spaceBetween": 50
                }'>
                    <div class="swiper-wrapper">
                        @for($i=28;$i<=36;$i++)
                        <div class="swiper-slide" data-swiper-tab="#text-{{$i}}">
                            <img src="{{asset('img/lang/'.$i.'.webp')}}" class="d-block mx-auto" style="width:100%;border-radius: 25px;" alt="Screen">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="position-relative mb-5">
                <div class="swiper mobile-app-slider" data-swiper-options='{
                    "slidesPerView": 9,
                    "spaceBetween": 50
                }'>
                    <div class="swiper-wrapper">
                        @for($i=37;$i<=41;$i++)
                        <div class="swiper-slide" data-swiper-tab="#text-{{$i}}">
                            <img src="{{asset('img/lang/'.$i.'.webp')}}" class="d-block mx-auto" style="width:100%;border-radius: 25px;" alt="Screen">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="container py-5">
        <div class="row mt-xl-2 mb-xl-3 py-md-4 py-lg-5">
            <div class="col-lg-3 mb-4 position-relative">
                <div class="sticky-top" style="top: 100px !important;">
                    <h2 class="h1 text-center text-sm-start pb-2 pb-lg-0 mb-4 mb-lg-5">Services</h2>
                    <!-- Nav tabs -->
                    <div class="nav flex-nowrap flex-lg-column nav-tabs" role="tablist" aria-orientation="vertical">
                        <a href="#all-services" class="d-none active nav-link d-block w-100 rounded-3 mb-lg-3" id="all-services-tab" data-bs-toggle="tab" role="tab" aria-controls="all-services" aria-selected="true">
                            <div class="fs-5 fw-bold">All Services</div>
                        </a>
                        <a href="#service-ad" class="nav-link d-block w-100 rounded-3 mb-lg-3" id="service-ad-tab" data-bs-toggle="tab" role="tab" aria-controls="service-ad" aria-selected="true">
                            <div class="fs-5 fw-bold">AGILE DEVELOPMENT</div>
                        </a>
                        <a href="#service-pb" class="nav-link d-block w-100 rounded-3 mb-lg-3" id="service-pb-tab" data-bs-toggle="tab" role="tab" aria-controls="service-pb" aria-selected="false">
                            <div class="fs-5 fw-bold">PROJECT BASED</div>
                        </a>
                        <a href="#service-ms" class="nav-link d-block w-100 rounded-3 mb-lg-3" id="service-ms-tab" data-bs-toggle="tab" role="tab" aria-controls="service-ms" aria-selected="false">
                            <div class="fs-5 fw-bold">MANAGED SERVICES</div>
                        </a>
                        <a href="#service-ds" class="nav-link d-block w-100 rounded-3 mb-lg-3" id="service-ds-tab" data-bs-toggle="tab" role="tab" aria-controls="service-ds" aria-selected="false">
                            <div class="fs-5 fw-bold">DESIGN SERVICES</div>
                        </a>
                        <a href="#service-tw" class="nav-link d-block w-100 rounded-3 mb-lg-3" id="service-tw-tab" data-bs-toggle="tab" role="tab" aria-controls="service-tw" aria-selected="false">
                            <div class="fs-5 fw-bold">TECHNICAL WRITER</div>
                        </a>
                        <a href="#service-qa" class="nav-link d-block w-100 rounded-3 mb-lg-3" id="service-qa-tab" data-bs-toggle="tab" role="tab" aria-controls="service-qa" aria-selected="false">
                            <div class="fs-5 fw-bold">QUALITY ASSURANCE</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Day 1 schedule -->
                    <div class="tab-pane fade show active" id="all-services" role="tabpanel" aria-labelledby="all-services-tab">
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-4-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                        <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-4-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Agile Development
                                    </div>
                                    <p class="text-muted mb-2">Software development methodologies centered round the idea of iterative development</p>
                                    <dl class="text-primary">
                                        <dt>30+ DEVELOPERS</dt>
                                        <dt>FLEXIBLE SCOPE</dt>
                                        <dt>SPRINT BASED</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">EXTENDED</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Ensured Project Continuity</strong></li>
                                                    <li class="fs-sm"><strong>Technical Support</strong></li>
                                                    <li class="fs-sm"><strong>Best-Practice Software Engineering</strong></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">FULL SQUAD</h1>
                                                <ul class="text-primary">
                                                    <li class="fs-sm"><strong>TRIBE</strong></li>
                                                    <li class="fs-sm"><strong>SQUAD</strong></li>
                                                    <li class="fs-sm"><strong>CHAPTER</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-3-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                        <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-3-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Project <br> Based
                                    </div>
                                    <p class="text-muted mb-2">Consult Your Project Development. Build all kind of custom made apps.</p>
                                    <dl class="text-primary">
                                        <dt>CUSTOM MADE APP</dt>
                                        <dt>FIXED BUDGET DELIVERY</dt>
                                        <dt>FULL SQUAD</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Ensured Project Continuity</strong></li>
                                                    <li class="fs-sm"><strong>Technical Support</strong></li>
                                                    <li class="fs-sm"><strong>Best-Practice Software Engineering</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-1-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                        <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-1-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Managed <br> Services
                                    </div>
                                    <p class="text-muted mb-2">Run Your Application with Peace of Mind. Our Developer will maintain your application professionally.</p>
                                    <dl class="text-primary">
                                        <dt>PROACTIVE SUPPORT</dt>
                                        <dt>SLA TO MEET</dt>
                                        <dt>INTERACTIVE HELPDESK</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Ensured Project Continuity</strong></li>
                                                    <li class="fs-sm"><strong>Technical Support</strong></li>
                                                    <li class="fs-sm"><strong>Best-Practice Software Engineering</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-2-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                        <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-2-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Design <br> Services
                                    </div>
                                    <p class="text-muted mb-2">Build product with a clear design process and delivers a spot-on end result.</p>
                                    <dl class="text-primary">
                                        <dt>QUALIFIED AND EXPERIENCE DESIGNER</dt>
                                        <dt>DESIGN THINKING</dt>
                                        <dt>IMPROVE USABILITY</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Qualified and Experience Designer</strong></li>
                                                    <li class="fs-sm"><strong>Creating striking and eye-catching Design</strong></li>
                                                    <li class="fs-sm"><strong>Functionality deliver improved usability</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="mx-auto" src="{{asset('img/services/tw.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Technical <br> Writter
                                    </div>
                                    <p class="text-muted mb-2">Improve your business or operation with software blueprint tailored for your company as a basis of system development.</p>
                                    <dl class="text-primary">
                                        <dt>SYSTEM BUSINESS PROVEN EXPERTISE</dt>
                                        <dt>SAVE COST</dt>
                                        <dt>BUSINESS ROADMAP GOALS</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Have insights on system / business operation with proven expertise and experienceFull Control of System Development</strong></li>
                                                    <li class="fs-sm"><strong>Creating striking and eye-catching Design</strong></li>
                                                    <li class="fs-sm"><strong>Creating Roadmap for system development based on Business Priorities and Goals</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="mx-auto" src="{{asset('img/services/qa.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Quality <br> Assurance
                                    </div>
                                    <p class="text-muted mb-2">Improve the apps quality through professional testing services.</p>
                                    <dl class="text-primary">
                                        <dt>YE STANDARD VALIDATION</dt>
                                        <dt>TRACEABILITY MATRIX</dt>
                                        <dt>CAPABLE TESTER</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Best-Practice Testing Methods and Techniques</strong></li>
                                                    <li class="fs-sm"><strong>Provide dedicated and experienced tester</strong></li>
                                                    <li class="fs-sm"><strong>Tester think out of the box to found the bug</strong></li>
                                                    <li class="fs-sm"><strong>Tester give you idea or suggestions that improve your quality software</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service-ad" role="tabpanel" aria-labelledby="service-ad-tab">
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-4-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                        <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-4-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Agile Development
                                    </div>
                                    <p class="text-muted mb-2">Software development methodologies centered round the idea of iterative development</p>
                                    <dl class="text-primary">
                                        <dt>30+ DEVELOPERS</dt>
                                        <dt>FLEXIBLE SCOPE</dt>
                                        <dt>SPRINT BASED</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">EXTENDED</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Ensured Project Continuity</strong></li>
                                                    <li class="fs-sm"><strong>Technical Support</strong></li>
                                                    <li class="fs-sm"><strong>Best-Practice Software Engineering</strong></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">FULL SQUAD</h1>
                                                <ul class="text-primary">
                                                    <li class="fs-sm"><strong>TRIBE</strong></li>
                                                    <li class="fs-sm"><strong>SQUAD</strong></li>
                                                    <li class="fs-sm"><strong>CHAPTER</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service-pb" role="tabpanel" aria-labelledby="service-pb-tab">
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-3-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                        <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-3-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Project <br> Based
                                    </div>
                                    <p class="text-muted mb-2">Consult Your Project Development. Build all kind of custom made apps.</p>
                                    <dl class="text-primary">
                                        <dt>CUSTOM MADE APP</dt>
                                        <dt>FIXED BUDGET DELIVERY</dt>
                                        <dt>FULL SQUAD</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Ensured Project Continuity</strong></li>
                                                    <li class="fs-sm"><strong>Technical Support</strong></li>
                                                    <li class="fs-sm"><strong>Best-Practice Software Engineering</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service-ms" role="tabpanel" aria-labelledby="service-ms-tab">
                        <div class="row pb-1 pb-xl-3">
                            <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                    <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-1-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-1-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                </div>
                                <div class="display-5 d-flex align-items-top mb-1">
                                    Managed <br> Services
                                </div>
                                <p class="text-muted mb-2">Run Your Application with Peace of Mind. Our Developer will maintain your application professionally.</p>
                                <dl class="text-primary">
                                    <dt>PROACTIVE SUPPORT</dt>
                                    <dt>SLA TO MEET</dt>
                                    <dt>INTERACTIVE HELPDESK</dt>
                                </dl>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="bg-secondary p-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                            <ul>
                                                <li class="fs-sm"><strong>Ensured Project Continuity</strong></li>
                                                <li class="fs-sm"><strong>Technical Support</strong></li>
                                                <li class="fs-sm"><strong>Best-Practice Software Engineering</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service-ds" role="tabpanel" aria-labelledby="service-ds-tab">
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="d-dark-mode-none mx-auto" src="{{asset('web/json/animation-feature-2-light.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                        <lottie-player class="d-none d-dark-mode-block mx-auto" src="{{asset('web/json/animation-feature-2-dark.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Design <br> Services
                                    </div>
                                    <p class="text-muted mb-2">Build product with a clear design process and delivers a spot-on end result.</p>
                                    <dl class="text-primary">
                                        <dt>QUALIFIED AND EXPERIENCE DESIGNER</dt>
                                        <dt>DESIGN THINKING</dt>
                                        <dt>IMPROVE USABILITY</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Qualified and Experience Designer</strong></li>
                                                    <li class="fs-sm"><strong>Creating striking and eye-catching Design</strong></li>
                                                    <li class="fs-sm"><strong>Functionality deliver improved usability</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service-tw" role="tabpanel" aria-labelledby="service-tw-tab">
                        <div class="border-bottom pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="mx-auto" src="{{asset('img/services/tw.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Technical <br> Writter
                                    </div>
                                    <p class="text-muted mb-2">Improve your business or operation with software blueprint tailored for your company as a basis of system development.</p>
                                    <dl class="text-primary">
                                        <dt>SYSTEM BUSINESS PROVEN EXPERTISE</dt>
                                        <dt>SAVE COST</dt>
                                        <dt>BUSINESS ROADMAP GOALS</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Have insights on system / business operation with proven expertise and experienceFull Control of System Development</strong></li>
                                                    <li class="fs-sm"><strong>Creating striking and eye-catching Design</strong></li>
                                                    <li class="fs-sm"><strong>Creating Roadmap for system development based on Business Priorities and Goals</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service-qa" role="tabpanel" aria-labelledby="service-qa-tab">
                        <div class="pb-4 mb-5">
                            <div class="row pb-1 pb-xl-3">
                                <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                    <div class="animation-on-hover" style="float:left;margin-right:5%;">
                                        <lottie-player class="mx-auto" src="{{asset('img/services/qa.json')}}" background="transparent" speed="1.25" loop style="width: 70px;"></lottie-player>
                                    </div>
                                    <div class="display-5 d-flex align-items-top mb-1">
                                        Quality <br> Assurance
                                    </div>
                                    <p class="text-muted mb-2">Improve the apps quality through professional testing services.</p>
                                    <dl class="text-primary">
                                        <dt>YE STANDARD VALIDATION</dt>
                                        <dt>TRACEABILITY MATRIX</dt>
                                        <dt>CAPABLE TESTER</dt>
                                    </dl>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="bg-secondary p-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <h1 class="fs-6 pb-2 text-primary border-bottom">ADVANTAGES</h1>
                                                <ul>
                                                    <li class="fs-sm"><strong>Best-Practice Testing Methods and Techniques</strong></li>
                                                    <li class="fs-sm"><strong>Provide dedicated and experienced tester</strong></li>
                                                    <li class="fs-sm"><strong>Tester think out of the box to found the bug</strong></li>
                                                    <li class="fs-sm"><strong>Tester give you idea or suggestions that improve your quality software</strong></li>
                                                </ul>
                                            </div>
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
    <section class="container py-5">
        <div class="get-started row align-items-center">
            <div class="col-md-6">
                <div class="jarallax bg-dark py-5" data-jarallax data-speed="0.5">
                    <span class="position-absolute top-0 start-0 w-100 bg-dark opacity-50" style="height: 90vh;margin-top:-13%;"></span>
                    <div class="jarallax-img" style="background-image: url({{asset('img/services/banner-get-started.webp')}}); height:90vh;margin-top:-13%;"></div>
                    <div class="position-relative zindex-5 py-sm-5">
                        <div class="py-lg-5 px-3">
                            <h2 class="h1 my-5 text-light align-items-top text-shadow">How to get started with the Service</h2>
                            <div class="card" style="margin-left:-10%;width:90%;">
                                <div class="card-body">
                                    <p class="card-text fs-sm">Our core competence is in web-based software and mobility. Complemented with additional expertise on A.I., Big Data, and IoT, we can help you succeed. You can engage us on a project-based or extended team manner to ensure fast innovation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info_get--started">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>01.</h6>
                            <h6 class="text-primary mb-3"><strong>Aware of your Goals</strong></h6>
                            <p class="fs-sm">We are eager to hear your story, what's keeping you up at night, your ideas and vision, and how we can help. We will dig the requirements.</p>
                        </div>
                        <div class="col-md-6">
                            <h6>02.</h6>
                            <h6 class="text-primary mb-3"><strong>Expect a Proposal from Us</strong></h6>
                            <p class="fs-sm">For development request, once the scope of work is understood by both parties, we will estimate the effort and provide you with a solution proposal with a fixed budget and deadline. Or, if you prefer, we can do agile enhancement service with more flexibility in the scope of work.</p>
                            <p class="fs-sm">If you're looking for a managed service support for your application, even if it's built by another software house we can help you too. Once we inquire further and get a clearer picture of your application, with the prerequisite preparations completed we will send the service proposal too.</p>
                        </div>
                        <div class="col-md-6">
                            <h6>03.</h6>
                            <h6 class="text-primary mb-3"><strong>Enter a formal Contract</strong></h6>
                            <p class="fs-sm">Once you conceptually agree, we sign a contract. Always know you are in good hands. We have been here for 1 years and still growing quickly, thus you can be rest assured we can support you long-term.</p>
                        </div>
                        <div class="col-md-6">
                            <h6>04.</h6>
                            <h6 class="text-primary mb-3"><strong>Implementation Starts</strong></h6>
                            <p class="fs-sm">On project-based service by default YE will perform a pre-development analysis, consistent progress demo, professional change management practice, testing based on a thorough test plan document - including security and performance tests, and guide you through UAT. Ultimately, our proven processes mitigate risks of delay and remove risks of project failure. You can get all of that too with the agile enhancement, if you request for a complete team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-5">
        <div class="row pt-2 pt-md-3 justify-content-center">
            <div class="col-md-5">
                <h1 class="fs-6 pb-2 text-primary border-bottom">&nbsp;</h1>
                <h1 class="display-6">Project, Agile and Managed Services</h1>
            </div>
            <div class="col-md-7">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="predev">Predevelopment</div>
            </div>
            <div class="col-md-8">
                <div class="dev">Development</div>
            </div>
            <div class="col-md-12 text-center">
                <img alt="project-type-agile" class="img-fluid mt-5" src="{{asset('img/services/project-type-agile.webp')}}">
            </div>
        </div>
    </section>
    <section class="container pt-5">
        <div class="row pt-2 pt-md-3 justify-content-center">
            <div class="col-md-5">
                <h1 class="fs-6 pb-2 text-primary border-bottom">&nbsp;</h1>
                <h1 class="display-6">Team Relationship Model</h1>
            </div>
            <div class="col-md-7">
                <p class="fs-6 mb-1 mt-5 mb-lg-4 text-gray-700">
                    Our capabilities are our valuable assets that you can leverage. Our unique delivery model will enable your company to achieve your business goal. Since we have built hundreds of software and apps, it's likely that we can immediately demo similar app to what you have in mind.
                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-4 pb-xl-3">
            <img alt="team-relationship-model" class="img-fluid mt-5" style="width:100%;" src="{{asset('img/services/team-relationship.png')}}">
        </div>
    </section>
    <section class="container pt-3 pb-4 pb-md-5" style="margin-top: -156px; margin-bottom: 120px; transform: translateY(156px);">
        <div class="card border-0 bg-gradient-primary">
            <div class="card-body p-md-5 p-4 bg-size-cover" style="background-image: url({{asset('web/img/landing/digital-agency/contact-bg.png')}});">
                <div class="row">
                    <div class="col-5">
                        <h3 class="h4 fw-normal text-light opacity-75">GET IN TOUCH WITH US</h3>
                        <a class="display-6 text-light">What can we do to help you?</a>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-5">
                        <p class="text-light" style="text-align: right;">Digital Transformation is essential in todays era of volatility. Are you ready to Future-Proof your business?</p>
                        <div class="" style="float:right;">
                            <a href="{{route('web.contact')}}" class="btn btn-lg btn-light custom-link">Let's Connect</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>
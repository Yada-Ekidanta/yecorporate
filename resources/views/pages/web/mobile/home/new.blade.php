<x-mobile-layout title="Home">
    <div class="header-large-title">
        <h1 class="title">Discover</h1>
        <h4 class="subtitle">Welcome to {{config('app.name')}}</h4>
    </div>
    <div class="section full mt-3 mb-3">
        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card">
                            <img src="{{asset('img/banner/agile.png')}}" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">Agile Development</h4>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <img src="{{asset('img/banner/project.png')}}" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">Project Based</h4>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <img src="{{asset('img/banner/managed.png')}}" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">Managed Services</h4>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <img src="{{asset('img/banner/design.png')}}" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">Design Services</h4>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <img src="{{asset('img/banner/technical.png')}}" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">Technical Writer</h4>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <img src="{{asset('img/banner/qa.png')}}" class="card-img-top" alt="image">
                            <div class="card-body pt-2">
                                <h4 class="mb-0">Quality Assurance</h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->
    </div>
    <div class="section full mt-2">
        <div class="section-title">
            About Us
        </div>
        <div class="wide-block pt-2 pb-1">
            <p>
                Yada Ekidanta (YE) is one of the leading Enterprise Digital Transformation Consultants in Indonesia, specializing in software solutions and application delivery and managed services.
            </p>
            <p>
                Our mission is to enable enterprises to ride the wave of digital era with tech-enabled innovation & business process automation.
            </p>
        </div>
    </div>
    <div class="section full mt-2">
        <div class="profile-stats ps-2 pe-2">
            <a href="#" class="item">
                <strong>1</strong>year
            </a>
            <a href="#" class="item">
                <strong>40</strong>Complete Projects
            </a>
            <a href="#" class="item">
                <strong>20</strong>Happy Clients
            </a>
        </div>
    </div>
    <div class="section full mt-2">
        <div class="section-title">
            Our Expertise
        </div>
        <div class="profile-stats ps-2 pe-2">
            <a href="#" class="item">
                <div class="ms-auto px-3">
                    <img alt="agile-delivery" src="{{asset('img/svg/agile-delivery.svg')}}">
                </div>
                <h5 class="text-start">
                    <small>01.</small>
                    <br>
                    AGILE DELIVERY
                </h5>
                <h6 class="text-start">
                    DIGITAL TRANSFORMATION SOLUTION
                </h6>
                <ul class="text-start">
                    <li>
                        Agile Delivery
                    </li>
                    <li>
                        Manage Services
                    </li>
                    <li>
                        Consulting
                    </li>
                </ul>
            </a>
            <a href="#" class="item">
                <div class="ms-auto px-3">
                    <img alt="cloud-integration" src="{{asset('img/svg/cloud-integration.svg')}}">
                </div>
                <h5 class="text-start">
                    <small>02.</small>
                    <br>
                    CLOUD INTEGRATION
                </h5>
                <h6 class="text-start" style="font-size:10px;">
                    CONNECTING GLOBAL CUTTING EDGE TECHNOLOGY
                </h6>
                <p class="text-start">
                    We have an unrelenting commitment to making sure that our advanced solutions yield tangible business impact.
                </p>
            </a>
            <a href="#" class="item">
                <div class="ms-auto px-3">
                    <img alt="support" src="{{asset('img/svg/support.svg')}}">
                </div>
                <h5 class="text-start">
                    <small>03.</small>
                    <br>
                    SUPPORT 24/7
                </h5>
                <h6 class="text-start">
                    CONNECTING GLOBAL CUTTING EDGE TECHNOLOGY
                </h6>
                <p class="text-start">
                    We have an unrelenting commitment to making sure that our advanced solutions yield tangible business impact.
                </p>
            </a>
        </div>
    </div>
    <div class="section full mt-2">
        <div class="section-title">
            What can we do
        </div>
        <img src="{{asset('img/expertise.svg')}}" alt="image" class="imaged square w-100">
    </div>
    <div class="section full">
        <div class="wide-block transparent p-0">
            <ul class="nav nav-tabs lined iconed" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_agile" role="tab">
                        <ion-icon name="sync-outline"></ion-icon>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_project" role="tab">
                        <ion-icon name="journal-outline"></ion-icon>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_managed" role="tab">
                        <ion-icon name="settings-outline"></ion-icon>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_design" role="tab">
                        <ion-icon name="brush-outline"></ion-icon>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_technical" role="tab">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_qa" role="tab">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="section full mb-2">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab_agile" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-4 mb-2">
                            <img src="{{asset('mobile/img/sample/photo/1.jpg')}}" alt="image" class="imaged w-100">
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.ad')}}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_project" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-4 mb-2">
                            <img src="{{asset('mobile/img/sample/photo/1.jpg')}}" alt="image" class="imaged w-100">
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.pb')}}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_managed" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-4 mb-2">
                            <img src="{{asset('mobile/img/sample/photo/1.jpg')}}" alt="image" class="imaged w-100">
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.ms')}}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_design" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-4 mb-2">
                            <img src="{{asset('mobile/img/sample/photo/1.jpg')}}" alt="image" class="imaged w-100">
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.ds')}}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_technical" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-4 mb-2">
                            <img src="{{asset('mobile/img/sample/photo/1.jpg')}}" alt="image" class="imaged w-100">
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.tw')}}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_qa" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-4 mb-2">
                            <img src="{{asset('mobile/img/sample/photo/1.jpg')}}" alt="image" class="imaged w-100">
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.qa')}}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</x-mobile-layout>
<x-mobile-layout title="Home">
    <div class="header-large-title">
        <h1 class="title">Discover</h1>
        <h4 class="subtitle">Welcome to {{config('app.name')}}</h4>
    </div>
    <div class="section full mt-3 mb-3">
        <!-- carousel multiple -->
        <div class="carousel-single splide">
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
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card">
                            <img alt="agile-delivery" style="width:10%;margin-left:4%;" src="{{asset('img/svg/agile-delivery.svg')}}">
                            <div class="card-body">
                                <h6 class="card-subtitle">01.</h6>
                                <h5 class="card-title">AGILE DELIVERY</h5>
                                <p class="card-text">
                                    DIGITAL TRANSFORMATION SOLUTION
                                </p>
                                <ul>
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
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <img alt="agile-delivery" style="width:10%;margin-left:4%;" src="{{asset('img/svg/cloud-integration.svg')}}">
                            <div class="card-body">
                                <h6 class="card-subtitle">02.</h6>
                                <h5 class="card-title">CLOUD INTEGRATION</h5>
                                <p class="card-text">
                                    We have an unrelenting commitment to making sure that our advanced solutions yield tangible business impact.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <img alt="agile-delivery" style="width:10%;margin-left:4%;" src="{{asset('img/svg/support.svg')}}">
                            <div class="card-body">
                                <h6 class="card-subtitle">03.</h6>
                                <h5 class="card-title">SUPPORT 24/7</h5>
                                <p class="card-text">
                                    Our team consists of experienced and tech-savvy developers. We can help you to maintain your application professionally.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
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
                        <div class="col-md-6">
                            <h2 class="d-flex align-items-top mb-3">
                                <img alt="ic-agile" class="me-3" src="{{asset('img/svg/ic-agile.svg')}}">
                                Agile
                                <br>
                                Development
                                <br>                
                            </h2>
                            <p>Software development methodologies centered round the idea of iterative development</p>
                            <ul class="list-unstyled">
                                <li>30+ DEVELOPERS</li>
                                <li>FLEXIBLE SCOPE</li>
                                <li>SPRINT BASED</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="right-blue">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="subtitle--blue">EXTENDED</h4>
                                        <hr>
                                        <ul class="list-dark">
                                            <li>Ensured Project Continuity</li>
                                            <li>Technical Support</li>
                                            <li>Best-Practice Software Engineering</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="subtitle--blue">FULL SQUAD</h4>
                                        <hr>
                                        <ul class="list-blue">
                                            <li>TRIBE</li>
                                            <li>SQUAD</li>
                                            <li>CHAPTER</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-4 mb-2">
                            <img src="{{asset('mobile/img/sample/photo/1.jpg')}}" alt="image" class="imaged w-100">
                        </div>
                    </div> --}}
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.ad')}}" class="btn btn-primary btn-block ye-anima-link">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_project" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title--grey d-flex align-items-top mb-3">
                                <img alt="ic-project-based" class="me-3" src="{{asset('img/svg/ic-project-based.svg')}}">
                                Project
                                <br>
                                Based
                                <br>
                            </h2>
                            <p>Consult Your Project Development. Build all kind of custom made apps.</p>
                            <ul class="list-unstyled">
                                <li>CUSTOM MADE APP</li>
                                <li>FIXED BUDGET DELIVERY</li>
                                <li>FULL SQUAD</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="right-blue">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="subtitle--blue">ADVANTAGES</h4>
                                        <hr>
                                        <ul class="list-dark">
                                            <li>Ensured Project Continuity</li>
                                            <li>Technical Support</li>
                                            <li>Best-Practice Software Engineering</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.pb')}}" class="btn btn-primary btn-block ye-anima-link">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_managed" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title--grey d-flex align-items-top mb-3">
                                <img alt="ic-manage-services" class="me-3" src="{{asset('img/svg/ic-manage-services.svg')}}">
                                Managed
                                <br>
                                Services
                                <br>
                            </h2>
                            <p>
                                Run Your Application with Peace of Mind. Our Developer will maintain your application professionally.
                            </p>
                            <ul class="list-unstyled">
                                <li>PROACTIVE SUPPORT</li>
                                <li>SLA TO MEET</li>
                                <li>INTERACTIVE HELPDESK</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="right-blue">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="subtitle--blue">ADVANTAGES</h4>
                                        <hr>
                                        <ul class="list-dark">
                                            <li>Ensured Project Continuity</li>
                                            <li>Technical Support</li>
                                            <li>Best-Practice Software Engineering</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.ms')}}" class="btn btn-primary btn-block ye-anima-link">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_design" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title--grey d-flex align-items-top mb-3">
                                <img alt="ic-design-services" class="me-3" src="{{asset('img/svg/ic-design-services.svg')}}">
                                Design
                                <br>
                                Services
                                <br>
                            </h2>
                            <p>Build product with a clear design process and delivers a spot-on end result.</p>
                            <ul class="list-unstyled">
                                <li>Qualified and Experience Designer</li>
                                <li>DESIGN THINKING</li>
                                <li>IMPROVE USABILITY</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="right-blue">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="subtitle--blue">ADVANTAGES</h4>
                                        <hr>
                                        <ul class="list-dark">
                                            <li>Qualified and Experience Designer</li>
                                            <li>Creating striking and eye-catching Design</li>
                                            <li>Functionality deliver improved usability</li>
                                            <li>Functionality deliver improved usability</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.ds')}}" class="btn btn-primary btn-block ye-anima-link">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_technical" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title--grey d-flex align-items-top mb-3">
                                <img alt="ic-technical-writter" class="me-3" src="{{asset('img/svg/ic-technical-writter.svg')}}">
                                Technical
                                <br>
                                Writter
                                <br>
                            </h2>
                            <p>
                                Improve your business or operation with software blueprint tailored for your company as a basis of
                                system development.
                            </p>
                            <ul class="list-unstyled">
                                <li>System  Business Proven Expertise</li>
                                <li>Save Cost</li>
                                <li>Business Roadmap Goals</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="right-blue">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="subtitle--blue">ADVANTAGES</h4>
                                        <hr>
                                        <ul class="list-dark">
                                            <li>Have insights on system / business operation with proven expertise and experience</li>
                                            <li>Full Control of System Development</li>
                                            <li>Creating Roadmap for system development based on Business Priorities and Goals</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.tw')}}" class="btn btn-primary btn-block ye-anima-link">Learn More</a>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_qa" role="tabpanel">
                <div class="mt-2 p-2 pt-0 pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title--grey d-flex align-items-top mb-3">
                                <img alt="ic-qa" class="me-3" src="{{asset('img/svg/ic-qa.svg')}}">
                                Quality
                                <br>
                                Assurance
                                <br>
                            </h2>
                            <p>Improve the apps quality through professional testing services.</p>
                            <ul class="list-unstyled">
                                <li>YE Standard Validation</li>
                                <li>Traceability Matrix</li>
                                <li>Capable Tester</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="right-blue">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="subtitle--blue">ADVANTAGES</h4>
                                        <hr>
                                        <ul class="list-dark">
                                            <li>Best-Practice Testing Methods and Techniques</li>
                                            <li>Provide dedicated and experienced tester</li>
                                            <li>Tester think out of the box to found the bug</li>
                                            <li>Tester give you idea or suggestions that improve your quality software</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-2 pt-0 pb-0">
                    <a href="{{route('web.qa')}}" class="btn btn-primary btn-block ye-anima-link">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section full mt-2">
        <div class="section-title">
            Our Impact
        </div>
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/no_w.jpg')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">Monica Tjen</h4>
                                            <span class="time">PT Hanjaya Mandala Sampoerna Tbk</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            Very easy to use. It fits our needs perfectly. Yada, your stuff is the bomb!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/client_avatar/reika.jpeg')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">Reika</h4>
                                            <span class="time">Kementerian Kelautan & Perikanan</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            You won't regret it. I will refer everyone I know. You guys rock! Thank you for making it pleasant and most of all hassle free!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/no_m.jpeg')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">Dikdik</h4>
                                            <span class="time">PT. Len Industri (Persero)</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            This is absolutely unbelievable! I'm really blown away. Good job, I will definitely cooperate again! I was amazed by the quality of Yada Ekidanta.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/client_avatar/yama.jpeg')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">David Yama</h4>
                                            <span class="time">Kementerian Dalam Negeri Republik Indonesia</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            The very best. We were treated like royalty. We have no regrets! Keep up the excellent work.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/client_avatar/hidayat.jpeg')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">Hidayat Nasution</h4>
                                            <span class="time">PT. Perkebunan Sumatera Utara</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            This is simply unbelievable! Yada Ekidanta was worth a fortune to my company. Nice work Yada Ekidanta.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/client_avatar/norman.png')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">Norman Joesoef</h4>
                                            <span class="time">Republic Defence</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            Yada Ekidanta is the most valuable business resource we have EVER used.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/no_w.jpg')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">Edi Sri Murni</h4>
                                            <span class="time">Kementerian PUPR</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            It's really wonderful. We've used Yada Ekidanta for the last five years.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="item">
                                    <div class="avatar">
                                        <img src="{{asset('img/no_m.jpeg')}}" alt="avatar" class="imaged w32 rounded">
                                    </div>
                                    <div class="in">
                                        <div class="comment-header">
                                            <h4 class="title">Suryanto</h4>
                                            <span class="time">Postel</span>
                                        </div>
                                        <div class="rate-block mb-1 mt-05">
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                            <ion-icon name="star" class="active"></ion-icon>
                                        </div>
                                        <div class="text">
                                            Wow what great service, I love it! Yada Ekidanta is exactly what our business has been lacking. Yada Ekidanta is great.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="carousel-multiple splide mt-5">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/src.png')}}" class="imaged w-100">
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/kkp.png')}}" class="imaged w-100">
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/len.png')}}" class="imaged w-50">
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/kemendagri.png')}}" class="imaged w-50">
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/psu.png')}}" class="imaged w-50">
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/rdi.png')}}" class="imaged w-100">
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/pu.jpg')}}" class="imaged w-50">
                    </li>
                    <li class="splide__slide">
                        <img src="{{asset('img/client_company/postel.png')}}" class="imaged w-50">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-mobile-layout>
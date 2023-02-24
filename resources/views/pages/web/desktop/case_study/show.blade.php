<x-web-layout title="Case Studies - Projects from our various amazing Clients - YE" description="Custom software outsourcing, we have built hundreds of software, android app & iphone app, it's likely we can immediately demo similar to what you have in mind." keywords="enterprise application, software multi branch, business programs, sales force automation, software data pelanggan, aplikasi supply chain management, booking systems, cloud based contact center solution, cloud erp solution, crm solution, field service app">
    <section class="d-flex align-items-center py-5">
        <div class="container text-md-start text-center">
        </div>
    </section>
    <section class="container pb-4 mb-2 mb-lg-3">
        <h1>{{$portfolio->title}}</h1>
        @php
        $tags = json_decode($portfolio->tags, true);
        @endphp
        <p class="text-muted mb-0">
            @foreach ($tags as $key => $tag)
            {{$tag}}
            @if ($key !== count($tags) - 1)
            /
            @endif
            @endforeach
        </p>
    </section>
    <section class="jarallax" data-jarallax data-speed="0.4">
        <div class="jarallax-img" style="background-image: url({{asset('web/img/portfolio/single/hero.jpg')}});"></div>
        <div class="d-none d-xxl-block" style="height: 800px;"></div>
        <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
        <div class="d-md-none" style="height: 400px;"></div>
    </section>
    <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h1 mb-4">Project Overview</h2>
                    {!!$portfolio->overview!!}
                </div>
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h5 mb-4">Project Vision</h2>
                    {!!$portfolio->vision!!}
                </div>
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h5 mb-4">Preliminary Ideation</h2>
                    {!!$portfolio->preliminary_ideation!!}
                </div>
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h5 mb-4">Early Prototype</h2>
                    {!!$portfolio->early_prototype!!}
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
                <div class="ps-lg-4 ms-lg-3">
                    <h3 class="h5 d-flex align-items-center">
                        <i class="bx bx-help-circle text-primary fs-4 me-2"></i>
                        Business Issue
                    </h3>
                    {!!$portfolio->issue!!}
                    <h3 class="h5 d-flex align-items-center">
                        <i class="bx bx-bulb text-primary fs-4 me-2"></i>
                        Business Solution
                    </h3>
                    {!!$portfolio->solution!!}
                </div>
            </div>
        </div>
    </section>
    <section class="container position-relative pt-1 pt-md-3">
        <div class="row align-items-start">
            <div class="rellax col-lg-5 col-sm-6 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="sm">
                <img src="{{asset('web/img/portfolio/single/01.jpg')}}" class="rounded-3" width="526" alt="Image">
            </div>
            <div class="rellax col-lg-7 col-sm-6 d-sm-flex justify-content-end pt-sm-4 pt-lg-5 mt-md-3 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-1.25" data-disable-parallax-down="sm">
                <div><img src="{{asset('web/img/portfolio/single/03.jpg')}}" class="rounded-3" width="416" alt="Image"></div>
            </div>
            <div class="rellax col-lg-5 col-sm-6 d-sm-flex justify-content-lg-end pt-sm-5 mt-lg-5 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-1.25" data-disable-parallax-down="sm">
                <div><img src="{{asset('web/img/portfolio/single/04.jpg')}}" class="rounded-3" width="416" alt="Image"></div>
            </div>
            <div class="rellax col-lg-7 col-sm-6 d-sm-flex justify-content-center mt-sm-n5 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-0.25" data-disable-parallax-down="sm">
                <div><img src="{{asset('web/img/portfolio/single/05.jpg')}}" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image"></div>
            </div>
        </div>
        <div class="row position-sm-absolute top-50 start-0 translate-middle-sm-y w-100 d-flex mt-md-n5">
            <div class="rellax col-lg-5 col-sm-6 offset-sm-3 offset-lg-4 mt-sm-n5" data-rellax-percentage="0.5" data-rellax-speed="1.4" data-disable-parallax-down="sm">
                <img src="{{asset('web/img/portfolio/single/02.jpg')}}" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image">
            </div>
        </div>
    </section>
    <section class="container py-5 my-2 my-md-4 my-lg-5">
        <div class="row py-md-3">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                <h2 class="h5 mb-4">Lesson Learned</h2>
                {!!$portfolio->lesson_learned!!}
            </div>
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                <h2 class="h5 mb-4">Benefits</h2>
                {!!$portfolio->benefit!!}
            </div>
        </div>
        <div class="row py-md-3">
            <div class="col-md-3 offset-lg-1">
                <h2>Results</h2>
            </div>
            <div class="col-lg-7 col-md-9">
                {!!$portfolio->final_product!!}
                <div class="row row-cols-1 row-cols-sm-3 g-4">
                    <div class="col">
                        <h3 class="h1 mb-2">30+</h3>
                        <p class="mb-0">Employees</p>
                    </div>
                    <div class="col">
                        <h3 class="h1 mb-2">1,200+</h3>
                        <p class="mb-0"><span class="fw-semibold">Requests</span> per Week</p>
                    </div>
                    <div class="col">
                        <h3 class="h1 mb-2">300+</h3>
                        <p class="mb-0"><span class="fw-semibold">New Clients</span> per Year</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container pb-2 pb-lg-3">
        {{-- <div id="list_result"></div> --}}
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
    @section('custom_js')
    <script>
        load_list();
    </script>
    @endsection
</x-web-layout>
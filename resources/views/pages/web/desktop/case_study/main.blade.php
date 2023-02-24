<x-web-layout title="Case Studies - Projects from our various amazing Clients - YE" description="Custom software outsourcing, we have built hundreds of software, android app & iphone app, it's likely we can immediately demo similar to what you have in mind." keywords="enterprise application, software multi branch, business programs, sales force automation, software data pelanggan, aplikasi supply chain management, booking systems, cloud based contact center solution, cloud erp solution, crm solution, field service app">
    <section class="d-flex align-items-center py-5">
        <div class="container my-5 text-md-start text-center">
        </div>
    </section>
    <section class="container d-sm-flex align-items-center justify-content-between pb-4 mb-2 mb-lg-3">
        <h1 class="mb-sm-0 me-sm-3">Portfolio List</h1>
        <form id="content_filter">
            <select class="form-select" name="industry" style="width: 240px;" onchange="load_list();">
                <option value="">All Industries</option>
                @foreach ($industry as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </form>
    </section>
    <section class="container pb-2 pb-lg-3">
        <div id="list_result"></div>
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
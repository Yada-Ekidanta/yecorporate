<div class="row align-items-center">
    <!-- Animation -->
    {{-- <div class="col-xl-6 col-md-7 order-md-2 ms-n5"> --}}
    <div class="col-xl-6 col-md-7 order-md-2 ms-n5">
        <lottie-player src="{{asset('json/career.json')}}" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>

    <!-- Text -->
    <div class="col-md-5 offset-xl-1 order-md-1">
        {{-- <h1 class="display-1 mb-sm-4 mt-n4 mt-sm-n5">We Apologize</h1> --}}
        <p class="mb-md-5 mb-4 mx-md-0 mx-auto pb-2 lead">We apologize, at this time we are not accepting job applications. Thank you for visiting our website and we will update information if there are any new job opportunities in the future. Thank you for your understanding..</p>
        <a href="{{route('web.home')}}" class="btn btn-lg btn-primary shadow-primary w-sm-auto w-100 custom-link">
            <i class="bx bx-home-alt me-2 ms-n1 lead"></i>
            Go to homepage
        </a>
    </div>
</div>
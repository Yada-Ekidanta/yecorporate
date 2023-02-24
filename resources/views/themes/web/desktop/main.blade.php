<!DOCTYPE html>
<html lang="en">
    @include('themes.web.desktop.head')
    <!-- Body -->
    <body id="ye_body">
        <!-- Page loading spinner -->
        <div class="page-loading active">
            <div class="page-loading-inner">
                {{-- <div class="page-spinner"></div> --}}
                <lottie-player autoplay class="mx-auto" src="{{asset('json/loader.json')}}" background="transparent" speed="1.5" loop style="width: 200px;"></lottie-player>
            </div>
        </div>
        <!-- Page wrapper for sticky footer -->
        <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
        <main class="page-wrapper">
            <!-- Navbar -->
            <!-- Remove "fixed-top" class to make navigation bar scrollable with the page -->
            @include('themes.web.desktop.header')
            <!-- Hero -->
            <!-- Main features (Slider on narrow scrreens) -->
            <div id="main_layout">
                {{$slot}}
            </div>
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="{{asset('icon.png')}}" width="47" class="rounded me-2" alt="...">
                        <strong class="me-auto">Yada Ekidanta</strong>
                        <small>Now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body" id="toast_body">
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        @include('themes.web.desktop.footer')
        <!-- Back to top button -->
        <a href="#top" class="btn-scroll-top" data-scroll>
            <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
            <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
        </a>
        <!-- Vendor Scripts -->
        @include('themes.web.desktop.js')
        @yield('custom_js')
    </body>
</html>
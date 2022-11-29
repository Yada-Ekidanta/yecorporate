<!doctype html>
<html lang="zxx">
@include('themes.web.desktop.head')
<body>
    <div class="qrt-app">
        <div class="qrt-preloader">
            <div class="qrt-preloader-content">
                <div class="qrt-logo">
                    <img src="{{asset('icon.png')}}" alt="Quarty">
                </div>
                <div id="preloader" class="qrt-preloader-load"></div>
            </div>
        </div>
        <div id="cursor" class="qrt-cursor">
            <div></div>
            <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
        </div>
        @include('themes.web.desktop.topbar')        
        @include('themes.web.desktop.leftbar')
        <div class="qrt-curtain"></div>
        <div id="qrt-dynamic-content" class="qrt-dynamic-content">
            <div class="qrt-content" id="qrt-scroll-content">
                {{$slot}}
            </div>
        </div>
    </div>
    @include('themes.web.desktop.js')
    @yield('custom_js')
</body>
</html>
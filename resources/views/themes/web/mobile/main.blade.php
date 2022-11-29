<!doctype html>
<html lang="en">
@include('themes.web.mobile.head')
<body>
    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->
    <!-- App Header -->
    @include('themes.web.mobile.header')
    <!-- * App Header -->
    <!-- App Capsule -->
    <div id="appCapsule" class="appCapsule">
        {{$slot}}
        <!-- app footer -->
        @include('themes.web.mobile.footer')
        <!-- * app footer -->
    </div>
    <!-- * App Capsule -->
    <!-- App Bottom Menu -->
    @include('themes.web.mobile.menu')
    <!-- * App Bottom Menu -->
    <!-- App Sidebar -->
    @include('themes.web.mobile.sidebar')
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    
    <!-- * welcome notification -->

    <!-- ============== Js Files ==============  -->
    @include('themes.web.mobile.js')
</body>
</html>
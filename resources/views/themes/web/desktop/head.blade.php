<head>
    <meta charset="utf-8">
    <title>
        {{config('app.name') . ': ' .$title ?? config('app.name')}}
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- SEO Meta Tags-->
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{config('app.name') . ': ' .$title ?? config('app.name')}}" />
    <meta property="og:url" content="https://yadaekidanta.com" />
    <meta property="og:site_name" content="{{config('app.name') . ': ' .$title ?? config('app.name')}}" />
    <link rel="canonical" href="https://yadaekidanta.com" />
    <meta name="robots" content="index,follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Yada Ekidanta">
    <meta name="revisit-after" content="1 days">

    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icon.png')}}">
    <link rel="manifest" href="{{asset('web/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('icon.png')}}" color="#6366f1">
    <link rel="shortcut icon" href="{{asset('icon.png')}}">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="{{asset('web/favicon/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="{{asset('web/vendor/boxicons/css/boxicons.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{asset('web/vendor/swiper/swiper-bundle.min.css')}}"/>

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('web/css/theme.min.css')}}">
    @if(request()->is('services') || request()->is('services/*'))
        <link rel="stylesheet" media="screen" href="{{asset('css/service.css')}}">
    @endif

    <!-- Page loading styles -->
    <style>
        .photos{
            width:100%;
            aspect-ratio:3/2;
            object-fit:contain;
            mix-blend-mode: color-burn;
        }
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .dark-mode .page-loading {
            background-color: #0b0f19;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }
        .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }
        .dark-mode .page-loading-inner > span {
            color: #fff;
            opacity: .6;
        }
        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        .dark-mode .page-spinner {
            border-color: rgba(255,255,255,.4);
            border-right-color: transparent;
        }
        @-webkit-keyframes spinner {
            100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            }
        }
        .truncate {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
    </style>

    <!-- Theme mode -->
    <script>
        let mode = window.localStorage.getItem('mode'),
            root = document.getElementsByTagName('html')[0];
        if (mode !== null && mode === 'dark') {
            root.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
        }
    </script>

    <!-- Page loading scripts -->
    <script>
        (function () {
            window.onload = function () {
            const preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
                preloader.remove();
            }, 1000);
            };
        })();
    </script>
</head>
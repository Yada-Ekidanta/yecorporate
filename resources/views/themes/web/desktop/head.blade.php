<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#28292C">
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{asset('icon.png')}}" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('web/css/plugins/bootstrap.min.css')}}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset('web/css/plugins/font-awesome.min.css')}}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{asset('web/css/plugins/swiper.min.css')}}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{asset('web/css/plugins/fancybox.min.css')}}">
    <!-- mapbox css -->
    <link href="{{asset('web/css/plugins/mapbox-style.css')}}" rel='stylesheet'>
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastify.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="Yada Ekidanta (YE) adalah salah satu perusahaan Konsultan Transformasi Digital Perusahaan di Indonesia, yang mengkhususkan diri dalam solusi perangkat lunak dan pengiriman aplikasi serta layanan terkelola.">
    <meta name="keywords" content="{{config('app.name')}}, konsultan, it, manajemen, agile, project, technical, writer, design, qa, quality assurance, managed, managed service, services" />
    <title>
        {{config('app.name') . ': ' .$title ?? config('app.name')}}
    </title>
    <link rel="stylesheet" href="{{asset('css/service.css')}}">
    <style>
        .selector {
            user-drag: none;
            -webkit-user-drag: none;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>
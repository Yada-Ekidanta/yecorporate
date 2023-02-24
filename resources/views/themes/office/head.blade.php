<head>
    <title>
        {{config('app.name') . ': ' .$title ?? config('app.name')}}
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8" />
    <meta name="description" content="Yada Ekidanta (YE) adalah salah satu perusahaan Konsultan Transformasi Digital Perusahaan di Indonesia, yang mengkhususkan diri dalam solusi perangkat lunak dan pengiriman aplikasi serta layanan terkelola." />
    <meta name="keywords" content="{{config('app.name')}}, konsultan, it, manajemen, agile, project, technical, writer, design, qa, quality assurance, managed, managed service, services" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{config('app.name') . ': ' .$title ?? config('app.name')}}" />
    <meta property="og:url" content="https://yadaekidanta.com" />
    <meta property="og:site_name" content="{{config('app.name') . ': ' .$title ?? config('app.name')}}" />
    <link rel="canonical" href="https://yadaekidanta.com" />
    <link rel="shortcut icon" href="{{asset('icon.png')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/transition.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/toastify.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/plugins/custom/jkanban/jkanban.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('metronic/plugins/custom/jkanban/jkanban.bundle.js') }}"></script>
    <link href="{{ asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Global Stylesheets Bundle-->
</head>

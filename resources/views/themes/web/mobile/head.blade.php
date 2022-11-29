<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>
        {{config('app.name') . ': ' .$title ?? config('app.name')}}
    </title>
    <meta name="description" content="Yada Ekidanta (YE) adalah salah satu perusahaan Konsultan Transformasi Digital Perusahaan di Indonesia, yang mengkhususkan diri dalam solusi perangkat lunak dan pengiriman aplikasi serta layanan terkelola.">
    <meta name="keywords" content="{{config('app.name')}}, konsultan, it, manajemen, agile, project, technical, writer, design, qa, quality assurance, managed, managed service, services" />
    <link rel="icon" type="image/png" href="{{asset('icon.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('icon.png')}}">
    <link rel="stylesheet" href="{{asset('mobile/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastify.css')}}">
    <link rel="manifest" href="{{asset('mobile/__manifest.json')}}">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <style>
        #map { position: fixed; top: 0; bottom: 0; width: 100%; }
        .mapboxgl-popup {
            max-width: 400px;
            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        }
        .mapboxgl-ctrl-bottom-left{
            display:none;
        }
        .mapboxgl-ctrl-bottom-right{
            display:none;
        }
    </style>
</head>
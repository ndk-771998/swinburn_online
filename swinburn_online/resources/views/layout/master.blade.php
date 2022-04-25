<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{!! getOption('website-favicon') ? getOption('website-favicon') : '/assets/logos/cropped-favicon-180x180.png' !!}">
    <link rel="stylesheet preload" as="style" type="text/css" media="screen" href="{{url('/css/app.css')}}" />
    <script rel="preload" as="script" src="{{url('js/app.js')}}" async></script>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
</head>

<body>
    @section('header')
    @include('layout.header')
    @show
    @yield('content')
    @section('footer')
    @include('layout.footer')
    @show
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/{{__('index.fb-plugin-lang')}}/sdk.js#xfbml=1&version=v12.0" nonce="5jlpJbKo"></script>
</body>

</html>
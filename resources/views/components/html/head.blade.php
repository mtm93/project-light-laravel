<head>

    <!-- Laravel -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Project Light -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Scripts -->
    <script type="text/javascript" src="//use.typekit.com/hyb5bko.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript">  document.documentElement.className += " js";</script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/full-stylesheet.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/styleguide.css') }}"/>

    {{-- Icons --}}
    <link rel="shortcut icon" href="{{ asset('icons/favicon.ico') }}" />
    <link rel="apple-touch-icon" href="{{ asset('icons/apple-touch-icon.png') }}" />

</head>
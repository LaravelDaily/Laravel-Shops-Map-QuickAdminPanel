<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>{{ config('app.name', 'Laravel Shops') }}</title>
	
    <link rel='stylesheet' href='{{ asset('assets/css/style.css') }}' type='text/css' />
    <link rel='stylesheet' href='{{ asset('assets/css/jquery.mmenu.css') }}' type='text/css' />
    <link rel='stylesheet' href='{{ asset('assets/css/responsive.css') }}' type='text/css' />
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato:400,700' type='text/css' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css?wpfas=true' type='text/css' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css?wpfas=true' type='text/css' />
    @yield('styles')
</head>

<body class="archive post-type-archive post-type-archive-gd_place geodir_custom_posts geodir-page geodir-archive geodir_advance_search gd-map-auto">
    <div id="ds-container">
        @include('partials.header')

        @includeWhen(request()->is('/'), 'partials.map')

        @yield('content')

        @include('partials.footer')
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">	
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">	
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/slick/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/MagnificPopup/magnific-popup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased animsition">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
               @yield('content') 
               @include('layouts.footer')
               @include('layouts.backToTopBtn')
            </main>
            
        </div>

        @stack('modals')

        @livewireScripts
        @include('layouts.scripts')
    </body>
    
</html>

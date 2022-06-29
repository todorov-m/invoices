<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">

</head>
<body>
<main class="container-fluid">
    @auth


            <x-navbar/>


    @endauth
    <div class="mt-2">
        <x-messages/>
    </div>

    {{ $slot }}

</main>
<x-footer/>


<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/select2.min.js') }}" defer></script>
@livewireScripts
@stack('scripts')
</body>

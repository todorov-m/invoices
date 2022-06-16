<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<main class="container-fluid">
    @auth
        @if (Request::is('newsales') AND auth()->user()->level < 90)

        @else
            <x-navbar/>
        @endif

    @endauth
    <div class="mt-2">
        <x-messages/>
    </div>

    {{ $slot }}

</main>
<x-footer/>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</body>

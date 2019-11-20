<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! config('app.name', 'Impression Admin') . (isset($page_title) ? ' | ' . $page_title : '') !!}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="256-256.png">
    <link rel="icon" type="image/png" sizes="32x32" href="32-32.png">
    <link rel="stylesheet" href="{{ asset('css/client.css') }}">
    @stack('styles')
</head>
<body class="overflow-x-hidden">
@include('partials.client.layout.icons')

<div id="app" class="flex flex-col min-h-screen">
    @includeIf('partials.client.layout.header')
    @includeIf('partials.client.layout.mesengers')
    <main class="flex-1">
        @yield('content')
    </main>
    @includeIf('partials.client.layout.footer')
</div>

<script src="{{ asset('js/client.js') }}"></script>
@stack('scripts')
</body>
</html>

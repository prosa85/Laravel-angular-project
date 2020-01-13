<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif
</div>
<app-root></app-root>
<script src="/app/runtime-es2015.js" type="module"></script><script src="/app/runtime-es5.js" nomodule defer></script><script src="/app/polyfills-es5.js" nomodule defer></script><script src="/app/polyfills-es2015.js" type="module"></script><script src="/app/styles-es2015.js" type="module"></script><script src="/app/styles-es5.js" nomodule defer></script><script src="/app/vendor-es2015.js" type="module"></script><script src="/app/vendor-es5.js" nomodule defer></script><script src="/app/main-es2015.js" type="module"></script><script src="/app/main-es5.js" nomodule defer></script></body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('master.parts.head')
</head>

<body class="relative flex w-full h-screen overflow-hidden">
    @extends('master.parts.mega-menu')
    @yield('content')
    @include('master.parts.foot')
</body>

</html>

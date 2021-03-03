<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
{{-- Head --}}
<x-html.head/>

<body>
    {{-- U.Cam Header --}}
    <x-layout.global-header/>

    {{-- Page Header --}}
    <x-core-elements.page-header/>

    {{-- Horizontal Navigation --}}
    <x-navigation.global-navigation/>

    @yield('content')

    {{-- Local Footer --}}
    <x-layout.local-footer/>  
    {{-- Global Footer --}}
    <x-layout.global-footer/>   

    {{-- Additional JavaScript --}}
    <x-html.scripts-footer/> 

</body>
</html>

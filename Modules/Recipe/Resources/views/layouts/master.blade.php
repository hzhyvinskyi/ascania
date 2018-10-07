<!doctype html>
<html lang="en">
    @include('recipe::partials.top.head')
    <body class="">
        <div class="console"></div>
        <div class="main-wrapper">
            @include('recipe::partials.top.header')
            @yield('content')
            @include('recipe::partials.bottom.footer')
        </div>
        @include('recipe::partials.bottom.popups')
        <script src="/js/main.js"></script>
    </body>
</html>

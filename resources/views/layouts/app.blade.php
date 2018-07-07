<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('frontend.partials.head')


<body>
    <div id="app">

        @include('frontend.partials.navigation')


            @yield('content')

    </div>
</body>
</html>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(isset($index))
        @if($index === 'landing')
    <meta name="description" content="Websites für kleine Unternehmen: Personalisierte Websites für kleine und mittlere Unternehmen. hochwertig, zuverlässig, preiswertes, schnell, unkompliziert.">
        @elseif($index === 'show')
    <meta name="description" content="{!! $element->subtitle !!}">
        @else($index === 'yes')
    <meta name="description" content="All {!! $page_name !!}">
        @endif
    @endif

    <meta name="author" content="Gerichtsfest"/>

    <meta name="revisit-after" content="7 days"/>
    <meta property="og:type" content="article"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- CSS Files -->
    @include('dashboard.partials.style_sheets')
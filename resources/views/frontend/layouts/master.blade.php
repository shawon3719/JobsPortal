<!DOCTYPE html>
<html>
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <meta charset="utf-8">--}}
    <title>
        @yield('title','JobsPortal')
    </title>
    <link rel="icon" href="images/favicon.jpg">
    @include('frontend.partials.styles')
</head>
<body>

<div class="wrapper">

    @include('frontend.partials.nav')
    @include('frontend.partials.messages')
    @yield('content')
    <br class="down">
    <br class="down">
    <br class="down">
    @include('frontend.partials.footer')

</div>


@include('frontend.partials.scripts')
@yield('scripts')
</body>
</html>

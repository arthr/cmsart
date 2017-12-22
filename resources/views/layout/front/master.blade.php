<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A Free Content Manager System">
        <meta name="author" content="Arthur Morais">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
        @section('headStyles')
            @include('layout.front.styles')
        @show
    </head>
    <body>
        @include('layout.front.preloader')

        @include('layout.front.pagebackground')

        @if(env('WEB_BORDER'))
        <!-- START: Page Border -->
        <div class="nk-page-border">
            <div class="nk-page-border-t"></div>
            <div class="nk-page-border-r"></div>
            <div class="nk-page-border-b"></div>
            <div class="nk-page-border-l"></div>
        </div>
        <!-- END: Page Border -->
        @endif

        <header class="nk-header {{ env('WEB_MENU_OPAQUE') === true ? 'nk-header-opaque' : null }}">

            @include('layout.front.translate')

            @include('layout.front.nav')

        </header>

        @include('layout.front.rightnav')

        <div class="nk-main">

            @include('layout.front.banner')

            @include('layout.front.slider')

            @include('layout.front.features')

            @include('layout.front.population')

            @include('layout.front.video')

            @include('layout.front.countdown')

            @include('layout.front.testimonials')

            @include('layout.front.subscribe')

            @include('layout.front.footer')

        </div>

        @include('layout.front.sharebuttons')

        @include('layout.front.sidebuttons')

        @include('layout.front.myaccount')

        @section('footerScripts')
            @include('layout.front.scripts')
        @show

    </body>
</html>

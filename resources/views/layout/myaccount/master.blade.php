@extends('layout.front.master')

@section('content')

<div class="container">
    <div class="nk-page-background op-5"
         data-bg-mp4="{{ asset('assets/video/bg-2.mp4') }}"
         data-bg-webm="{{ asset('assets/video/bg-2.webm') }}"
         data-bg-ogv="{{ asset('assets/video/bg-2.ogv') }}"
         data-bg-poster="{{ asset('assets/video/bg-2.jpg') }}">

    </div>
    <div class="nk-boxtext-white">
        @guest
        <div class="container">
            <div class="nk-gap-1"></div>
            <div class="text-xs-center">
                <h3 class="nk-title-back">My Account</h3>
                <h2 class="nk-title h1">Login</h2>
                <div class="nk-title-sep-icon">
                    <span class="icon">
                        <span class="ion-locked"></span>
                    </span>
                </div>
            </div>
        </div>
        @else
        <div class="container">
            <div class="nk-gap-1"></div>
            <div class="text-xs-left">
                <h3 class="nk-title-back">My Account</h3>
                <h2 class="nk-title h1">{{ Auth::user()->name }}</h2>
                <div class="nk-title-sep-icon">
                    <span class="icon">
                        <span class="ion-person"></span>
                    </span>
                </div>
            </div>
            <div class="nk-gap-1"></div>
        </div>
        @endguest
    </div>
</div>

@guest
    @yield('myaccount')
@else
    <div class="container">
        <div class="row equal-height">
            <div class="col-lg-3">
                <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
                -->
                <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                    <div class="nk-store-account-links">
                        <ul>
                            <li class="active"><a href="#">Dashboard</a></li>
                            <li><a href="#">Game Account</a></li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Donations History</a></li>
                            <li><a href="#">Account Security</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </aside>
                <!-- END: Sidebar -->
            </div>
            <div class="col-lg-9">
                @yield('myaccount')
            </div>
        </div>

        <div class="nk-gap-2"></div>
    </div>
@endguest

<div class="nk-gap-5"></div>
<div class="nk-gap-5"></div>

<!-- #include('myaccount.rewards') -->

@endsection
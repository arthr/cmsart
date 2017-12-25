@extends('layout.front.master')

@section('content')
<div class="nk-box text-xs-center text-white bg-dark-3">
    <div class="bg-image bg-image-parallax op-5" style="background-image: url('{{ asset('assets/images/image-2.jpg') }}');"></div>
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-md-right">
                <div class="text-xs-right">
                    <h3 class="nk-title-back nk-title-back-xs">My Account</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-1"></div>
</div>
<div class="container">

    <div class="nk-social-profile nk-social-profile-container-offset">
        <div class="row">
            <div class="col-md-5 col-lg-3">
                <div class="nk-social-profile-avatar">
                    <a href="#"><img src="{{ property_exists(Auth::user(), 'profile_pic') ? Auth::user()->profile_pic : asset('assets/images/avatar-1.jpg') }}" alt="{{ config('app.name') }}"></a>
                </div>
            </div>
            <div class="col-md-7 col-lg-9">
                <div class="nk-social-profile-info">
                    <div class="nk-gap-2"></div>
                    <div class="nk-social-profile-info-last-seen" style="float: right;">was online 2 hours ago</div>
                    <h1 class="nk-social-profile-info-name">{{ Auth::user()->name }}</h1>
                    <div class="nk-social-profile-info-username">@arthrmrs</div>
                    <div class="nk-social-profile-info-actions">
                        <a href="#" class="nk-btn link-effect-4">
                            <span>Opt 1</span>
                        </a>
                        <a href="#" class="nk-btn link-effect-4">
                            <span>Opt 2</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 nk-sidebar-sticky-parent">
            @include('layout.myaccount.sidebar')
        </div>

        <div class="col-lg-9">
            @yield('myaccount')
        </div>
    </div>

    <div class="nk-gap-4"></div>
    <div class="nk-gap-3"></div>
</div>
<!-- #include('myaccount.rewards') -->
@endsection
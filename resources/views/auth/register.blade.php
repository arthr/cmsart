@extends('layout.front.master')

@section('content')
<div class="container">
    <div class="nk-gap-1"></div>
    <div class="container">
        <div class="text-xs-center">
            <h3 class="nk-title-back">Welcome Warrior</h3>
            <h2 class="nk-title h1">Register</h2>
            <div class="nk-title-sep-icon">
                <span class="icon">
                    <span class="ion-person-add"></span>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="nk-box-3 bg-dark-1">

                <form class="nk-form nk-form-ajax nk-form-style-1" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <input type="text" class="form-control required" id="name" name="name" placeholder="Name *" value="{{ old('name') }}">
                    <div class="nk-gap-1"></div>

                    <input type="email" class="form-control required" id="email" name="email" placeholder="Email *" value="{{ old('email') }}">
                    <div class="nk-gap-1"></div>

                    <input type="password" class="form-control required" id="password" name="password" placeholder="Password *" value="{{ old('password') }}">
                    <div class="nk-gap-1"></div>

                    <input type="password" class="form-control required" id="password-confirm" name="password_confirmation" placeholder="Confirm Password *" >
                    <div class="nk-gap-1"></div>

                    <label>
                        <input type="checkbox" class="form-control required" id="terms" name="terms">
                        <small>I agree to the Terms of Use.</small>
                    </label>
                    <div class="nk-gap-1"></div>

                    @if (session('status'))
                    <div class="nk-form-response-success" style="display: block;">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="nk-form-response-error" style="display:block;">
                        @foreach($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif
                    <div class="nk-gap-1"></div>

                    <button type="submit" class="nk-btn nk-btn-lg nk-btn-block nk-btn-color-main-1 link-effect-4">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="nk-gap-3"></div>
<div class="nk-box text-xs-center text-white bg-dark-1">
    <div class="bg-image bg-image-parallax op-5" style="background-image: url('assets/images/image-2.jpg');"></div>
    <div class="nk-gap-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-md-left">
                <h2 class="nk-title">We need you to keep doing a good work.</h2>
                <h3 class="nk-sub-title mb-0 text-white op-7">Help us and receive exclusive gifts! （＾ω＾）</h3>
            </div>
            <div class="col-md-4 text-md-right">
                <div class="nk-gap-2 hidden-md-up"></div>
                <a href="#!" class="nk-btn nk-btn-lg">
                    <span>Help Us</span>
                    <span class="icon"><i class="ion-social-usd"></i></span>
                </a>
            </div>
        </div>
    </div>
    <div class="nk-gap-4"></div>
    <div class="nk-gap-3"></div>
</div>
<div class="nk-gap-2"></div>
@endsection

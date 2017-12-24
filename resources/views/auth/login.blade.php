@extends('layout.front.master')

@section('content')
<div class="container">
    <div class="nk-gap-1"></div>
    <div class="container">
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
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="nk-box-3 bg-dark-1">

                <form action="{{ route('login') }}" method="POST" class="nk-form nk-form-style-1">
                    {{ csrf_field() }}
                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                    <div class="nk-gap-1"></div>

                    <input type="password" class="form-control required" name="password" placeholder="Password *">
                    <div class="nk-gap-1"></div>

                    <div class="nk-form-response-success"></div>
                    
                    @if ($errors->any())
                    <div class="nk-form-response-error" style="display:block;">
                        @foreach($errors->all() as $error)
                        {{ $error }}<br>
                        @endforeach
                    </div>
                    @endif

                    <div class="nk-cart-btns align-center">
                        <button type="submit" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                            Login
                        </button> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('password.request') }}" class="nk-btn nk-btn-lg link-effect-4">
                            Forget Password
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
    <div class="nk-gap-5"></div>
</div>
@endsection

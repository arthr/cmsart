@extends('layout.front.master')

@section('content')
<div class="container">
    <div class="nk-gap-1"></div>
    <div class="container">
        <div class="text-xs-center">
            <h3 class="nk-title-back">Reset Password</h3>
            <h2 class="nk-title h1">Never tell your pass</h2>
            <div class="nk-title-sep-icon">
                <span class="icon">
                    <span class="ion-lock-combination"></span>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="nk-box-3 bg-dark-1">

                <form class="nk-form nk-form-style-1" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    
                    <input type="hidden" name="token" value="{{ $token }}">

                    <input type="email" class="form-control required" id="email" name="email" placeholder="Email *" value="{{ $email or old('email') }}" autofocus>
                    <div class="nk-gap-1"></div>

                    <input type="password" class="form-control required" id="password" name="password" placeholder="Password *">
                    <div class="nk-gap-1"></div>
                    
                    <input type="password" class="form-control required" id="password-confirm" name="password_confirmation" placeholder="Password *">
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

                    <button type="submit" class="nk-btn nk-btn-lg nk-btn-block nk-btn-color-main-1 link-effect-4">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
    <div class="nk-gap-5"></div>
</div>
@endsection

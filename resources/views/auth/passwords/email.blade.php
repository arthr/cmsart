@extends('layout.front.master')

@section('content')
<div class="container">
    <div class="nk-gap-1"></div>
    <div class="container">
        <div class="text-xs-center">
            <h3 class="nk-title-back">Recover Password</h3>
            <h2 class="nk-title h1">Forget my Pass</h2>
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

                <form class="nk-form nk-form-style-1" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <input type="email" class="form-control required" id="email" name="email" placeholder="Email *" value="{{ old('email') }}">
                    <div class="nk-gap-1"></div>

                    @if (session('status'))
                    <div class="nk-form-response-success" style="display: block;">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if ($errors->has('email'))
                    <div class="nk-form-response-error" style="display:block;">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                    <div class="nk-gap-1"></div>

                    <button type="submit" class="nk-btn nk-btn-lg nk-btn-block nk-btn-color-main-1 link-effect-4">Send Password Reset Link</button>
                </form>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
    <div class="nk-gap-5"></div>
</div>
@endsection

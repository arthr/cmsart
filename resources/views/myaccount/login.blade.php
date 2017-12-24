@extends('layout.myaccount.master')
@section('myaccount')
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
                    <div class="nk-form-response-error"></div>

                    <div class="nk-cart-btns">
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
</div>
@endsection
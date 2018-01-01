@extends('layout.myaccount.master')
@section('myaccount')
<div class="nk-social-menu-inline">
    <ul>
        <li class="{{ (Request::is('myaccount/game-account') ? 'active' : '') }}">
            <a href="{{ route('myaccount.game_account.index') }}">My Accounts</a>
        </li>
        <li class="{{ (Request::is('myaccount/game-account/create') ? 'active' : '') }}">
            <a href="{{ route('myaccount.game_account.create') }}">New Account</a>
        </li>
        <!--        <li>
                    <a href="#">Share Account</a>
                </li>-->
    </ul>
</div>

<div class="nk-social-container">
    <div class="nk-gap"></div>
    @if (session('status'))
        <div class="nk-info-box bg-success">
            <div class="nk-info-box-icon">
                <i class="ion-ios-checkmark"></i>
            </div>
            {!! session('status') !!}
        </div>
    @else
        <div class="nk-info-box bg-main-3">
            <div class="nk-info-box-icon">
                <i class="ion-information-circled"></i>
            </div>
            {{ trans('myaccount.game_account_create_notification') }}
        </div>
    @endif
    
    <form action="{{ route('myaccount.game_account.store') }}" method="post">
        {{ csrf_field() }}
        
        <input type="text" name="login" id="login" class="form-control required" placeholder="Login" value="{{ old('login') }}" />
        <div class="nk-gap"></div>
        
        <input type="password" name="password" id="password" class="form-control required" placeholder="Password" />
        <div class="nk-gap"></div>
        
        {!! NoCaptcha::display() !!}
        <div class="nk-gap"></div>
        @if ($errors->any())
            <div class="nk-form-response-error" style="display:block;">
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            </div>
        @endif
        <button type="submit" class="nk-btn link-effect-4 pull-right">Create Account</button>
    </form>

    <div class="nk-gap"></div>
</div>
<div class="nk-gap-5"></div>
@endsection

@section('footerScripts')
    @parent
    {!! NoCaptcha::renderJs() !!}
@endsection
@extends('layout.myaccount.master')
@section('myaccount')
<div class="nk-social-menu-inline">
    <ul>
        <li class="active"><a href="#">Public Profile</a></li>
<!--        <li><a href="#">Privacy Settings</a></li>
        <li><a href="#">Following</a></li>
        <li><a href="#">Followers</a></li>-->
        <li><a href="#">Email Settings</a></li>
    </ul>
</div>
<div class="nk-box-3 bg-dark-1">
    <div>
        <p>{{ trans('myaccount.profile_username') }}: {{ $user->name }}</p>
        <p>{{ trans('myaccount.profile_nickname') }}: <strong>{{ $user->nickname }}</strong> {!! sprintf('<a href=#>%s</a>' , trans('myaccount.profile_nickname_change')) !!}</p>
        <p>{{ trans('myaccount.profile_email') }}: <a href="#">{{ $user->email }}</a></p>
        <p>{{ trans('myaccount.profile_email_confirmation') }}: {!! $user->confirmed ? '<font color="00ff00">Yes</font>' : '<font color="ff0000">No</font>' !!}</p>
        <p>{{ trans('myaccount.profile_since') }}: {{ Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</p>
        <p>{{ trans('myaccount.profile_ingame_accounts') }}: 1/10</p>
    </div>
</div>
@endsection
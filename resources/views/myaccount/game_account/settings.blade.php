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
            {{ trans('myaccount.game_account_settings_notification') }}
        </div>
    @endif

    <form action="{{ route('myaccount.game_account.update', $account->login) }}" method="post">
        {{ csrf_field() }}

        <input type="text" name="login" id="login" disabled class="form-control required" placeholder="Login" value="{{ $account->login }}" />
        <div class="nk-gap"></div>

        <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
        <div class="nk-gap"></div>

        <div class="form-check pull-left">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="block" name="block" {{ $account->access_level < 0 ? 'checked' : null }}> Block Account
            </label>
        </div>
        <div class="nk-gap-1"></div>

        {!! NoCaptcha::display() !!}
        <div class="nk-gap"></div>
        @if ($errors->any())
            <div class="nk-form-response-error" style="display:block;">
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            </div>
        @endif
        
        <a href="#" data-toggle="modal" data-target=".bd-example-modal-sm" class="nk-btn nk-btn-color-white nk-btn-bg-danger link-effect-4 pull-left" data-login="{{ $account->login }}">Delete Account</a>
        <button type="submit" class="nk-btn nk-btn-color-white nk-btn-bg-success link-effect-4 pull-right">Update Account</button>
    </form>

    <div class="nk-gap"></div>
</div>
<div class="nk-gap-5"></div>

<!-- START: Small Modal -->
<div class="modal nk-modal fade bd-example-modal-sm" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="DeleteAccountModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
                <h4 class="modal-title nk-title" id="mySmallModalLabel">Delete Account</h4>
            </div>
            <form action="{{ route('myaccount.game_account.destroy', $account->login) }}" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <p>{{ trans('myaccount.game_account_settings_delete_confirmation') }}</p>
                    <div class="nk-gap"></div>
                    <input type="text" name="login" class="form-control required" placeholder="Login" />
                    <div class="nk-gap"></div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="nk-btn nk-btn-block nk-btn-color-white nk-btn-bg-danger link-effect-4">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Small Modal -->
@endsection

@section('footerScripts')
@parent
{!! NoCaptcha::renderJs() !!}
<script type="text/javascript">
    $(function () {
        $('form[name=deleteAccount] button').on('click', function () {
            let login = $(this).data('login');
            let prLogin = prompt('');
            if (prLogin === '{{ $account->login }}') {
                alert('delete');
            }
        });
    });
</script>
@endsection
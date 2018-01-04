@extends('layout.myaccount.master') @section('myaccount')
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
@if (session('status'))
<div class="nk-info-box bg-success">
	<div class="nk-info-box-icon">
		<i class="ion-ios-checkmark"></i>
	</div>
	<div class="nk-info-box-close nk-info-box-close-btn">
		<i class="ion-android-close"></i>
	</div>
	{!! session('status') !!}
</div>
@endif
<div class="nk-social-container">
	<!--    <form action="#" class="nk-social-sort" novalidate="novalidate">
            <label for="groups-filter-by">Order By:</label>
            <select id="groups-filter-by" class="form-control">
                <option value="last_active">Last Active</option>
                <option value="most_characters">Most Characters</option>
                <option value="newly_created">Newly Created</option>
                <option value="alphabetical">Alphabetical</option>
            </select>
        </form>-->
	<!--<div class="nk-gap"></div>-->
	<!-- START: Groups -->
	<!--<div><em>Viewing 1 - 4 of 4 accounts</em></div>-->
	<div class="nk-gap"></div>

	<ul class="nk-social-groups">
		@forelse(auth()->user()->accounts as $acc)
		<li>
			<div class="nk-social-groups-content">
				<div class="nk-social-groups-info">
					<div class="nk-social-groups-name">
						<a href="#">{{ $acc->login }}</a>
					</div>
					<div class="nk-social-groups-meta">@accountLastLogin($acc->last_login)</div>
					<div class="nk-social-groups-description">{{ trans('myaccount.game_account_status') }}:
						<font color="00ff00">{{ trans($acc->account_status) }}</font>
					</div>
				</div>
				<div class="nk-social-groups-actions">
					<a href="{{ route('myaccount.game_account.settings', $acc->login) }}" class="nk-btn nk-btn-xs link-effect-4">
						<span>Account Settings</span>
					</a>
					<div class="nk-social-groups-actions-meta">{{ $acc->characters->count() }} character(s)</div>

				</div>
			</div>
		</li>
		@empty
		<li>
			<div class="nk-social-groups-content">
				<div class="nk-social-groups-info">
					<div class="nk-social-groups-name">
						<a href="#">SEM CONTA TIO!</a>
					</div>
					<div class="nk-social-groups-meta">0 min ago</div>
					<div class="nk-social-groups-description">account status:
						<font color="ff0000">xx</font>
					</div>
				</div>
				<div class="nk-social-groups-actions">
					<a href="#" class="nk-btn nk-btn-xs link-effect-4">
						<span>Account Settings</span>
					</a>
					<div class="nk-social-groups-actions-meta">1 character(s)</div>
				</div>
			</div>
		</li>
		@endforelse
	</ul>

	<div class="nk-gap"></div>
	<!--    <div><em>Viewing 1 - 4 of 4 accounts</em></div>-->
	<!-- END: Groups -->
</div>
<div class="nk-gap-5"></div>
@endsection
@extends('layout.myaccount.master') @section('myaccount')
<div class="nk-social-menu-inline">
	<ul>
		<li class="{{ (Request::is('myaccount/characters') ? 'active' : '') }}">
			<a href="{{ route('myaccount.characters.index') }}">Characters</a>
		</li>
	</ul>
</div>
<div class="nk-social-container">
	<form action="#" class="nk-social-sort" novalidate="novalidate">
		<label for="friends-filter-by">Order By:</label>
		<select id="friends-filter-by" class="form-control">
			<option value="last_active">Last Active</option>
			<option value="char_name">Character Name</option>
			<option value="level">Character Level</option>
		</select>
	</form>
	<div class="nk-gap"></div>
	<!-- START: Friends -->
	{{--
	<div>
		<em>Viewing 1 - 4 of 4 friends</em>
	</div>
	<div class="nk-gap"></div> --}}

	<ul class="nk-social-friends nk-social-activity">
		@foreach($characters as $char)
		<li>
			<div class="nk-social-friends-avatar">
				<img src="{{ asset('assets/images/lineage/classes/' . $char->class->charTemplate->ClassId . '.png') }}" title="{{ $char->class->charTemplate->ClassName }}"
				 alt="{{ $char->class->charTemplate->ClassName }}">
			</div>
			<div class="nk-social-friends-content">
				<div class="nk-social-friends-info">
					<div class="nk-social-friends-name">
						{{ $char->char_name }} ({{ $char->level }}) @if($char->title)
						<span class="ion-quote text-info"></span>
						<span class="character-title" style="color: #{{$char->title_color}}">{{ $char->title }}</span>@endif
					</div>
					<div class="nk-social-friends-meta">
						@characterLastAccess($char->last_login)
					</div>
					<div class="nk-social-activity-content">
						<div class="nk-social-activity-meta">
							Account:
							<a href="{{ route('myaccount.game_account.settings' , $char->account->login) }}">{{ $char->account->login }}</a>
						</div>
						<div class="nk-social-activity-meta">
							<a href="#">Class</a>: {{ $char->class->charTemplate->ClassName }}
						</div>
						<div class="nk-social-activity-meta">
							<a href="#">Blood</a>: {{ $char->race_name }}
						</div>
						<div class="nk-social-activity-meta">
							<a href="#">Online Time</a>: {{ $char->total_online_time }}
						</div>
					</div>
				</div>

				<div class="nk-social-friends-actions">
					<a href="#" class="nk-btn nk-btn-xs link-effect-4">
						<span>More Informations</span>
					</a>
				</div>
			</div>

		</li>
		@endforeach
	</ul>
	{{ $characters->links('pagination.myaccount') }} {{--
	<div class="nk-gap"></div>
	<div>
		<em>Viewing 1 - 4 of 4 friends</em>
	</div> --}}
	<!-- END: Friends -->
</div>
@endsection
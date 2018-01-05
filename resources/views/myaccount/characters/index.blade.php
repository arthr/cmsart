@extends('layout.myaccount.master') @section('myaccount')
<div class="nk-social-menu-inline">
	<ul>
		<li class="{{ (Request::is('myaccount/characters') ? 'active' : '') }}">
			<a href="{{ route('myaccount.characters.index') }}">Characters</a>
		</li>
	</ul>
</div>
<div class="nk-social-container">
	@if(!$characters->isEmpty())
	<form id="charFilterForm" method="post" action={{ route( 'myaccount.characters.index') }} class="nk-social-sort" novalidate="novalidate">
		{{ csrf_field() }}
		<label for="order">Order By:</label>
		<select id="order" name="order" class="form-control">
			<option {{ Request::get( 'order')=='last_active' ? 'selected' : null }} value="lastAccess">Last Active</option>
			<option {{ Request::get( 'order')=='char_name' ? 'selected' : null }} value="char_name">Character Name</option>
			<option {{ Request::get( 'order')=='onlinetime' ? 'selected' : null }} value="onlinetime">Online Time</option>
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
				<div>
					<img src="{{ asset('assets/images/lineage/classes/' . $char->class->charTemplate->ClassId . '.png') }}" title="{{ $char->class->charTemplate->ClassName }}"
					 alt="{{ $char->class->charTemplate->ClassName }}">
				</div>
				@if($char->nobless)
				<div>
					<i class="is-nobless ra ra-feather-wing" title="Noblesse"></i>
				</div>
				@endif
				@if($char->hero)
				<div>
					<i class="is-hero ra ra-trophy" title="Hero"></i>
				</div>
				@endif
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

				{{--  <div class="nk-social-friends-actions">
					<a href="#{{ $char->obj_Id }}" class="nk-btn nk-btn-xs link-effect-4">
						<span>More Informations</span>
					</a>
				</div>  --}}
			</div>

		</li>
		@endforeach
	</ul>
	{{ $characters->links('pagination.myaccount') }}
	@else
	<div class="nk-gap"></div>
	<h2>@lang('myaccount.characters_no_characters_title') <i class="ra ra-tombstone"></i></h2>
	<div>
		<em>{{ trans('myaccount.characters_no_characters') }}</em>
	</div>
	@endif
	 {{--
	<div class="nk-gap"></div>
	<div>
		<em>Viewing 1 - 4 of 4 friends</em>
	</div> --}}
	<!-- END: Friends -->
</div>
@endsection @section('footerScripts') @parent
<script type="text/javascript">
	$(function(){
		$('#order').on('change', function(){
			$(this).parent('#charFilterForm').submit();
		});
	});

</script>
@endsection
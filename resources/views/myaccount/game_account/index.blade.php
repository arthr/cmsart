@extends('layout.myaccount.master')
@section('myaccount')
<div class="nk-gap-2 hidden-md-down"></div>
<div class="nk-social-menu-inline">
    <ul>
        <li class="active"><a href="#">Opt 1</a></li>
        <li><a href="#">Opt 2</a></li>
        <li><a href="#">Opt 3</a></li>
        <li><a href="#">Opt 4</a></li>
        <li><a href="#">Opt 5</a></li>
    </ul>
</div>

<div class="nk-social-container">
    <form action="#" class="nk-social-sort" novalidate="novalidate">
        <label for="groups-filter-by">Order By:</label>
        <select id="groups-filter-by" class="form-control">
            <option value="last_active">Last Active</option>
            <option value="most_characters">Most Characters</option>
            <option value="newly_created">Newly Created</option>
            <option value="alphabetical">Alphabetical</option>
        </select>
    </form>
    <div class="nk-gap"></div>
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
                    <div class="nk-social-groups-meta">2 min ago</div>
                    <div class="nk-social-groups-description">account status: <font color="00ff00">active</font></div>
                </div>
                <div class="nk-social-groups-actions">
                    <a href="#" class="nk-btn nk-btn-xs link-effect-4">
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
                    <div class="nk-social-groups-description">account status: <font color="ff0000">banned</font></div>
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
    <div><em>Viewing 1 - 4 of 4 accounts</em></div>
    <!-- END: Groups -->
</div>
<div class="nk-gap-5"></div>
@endsection
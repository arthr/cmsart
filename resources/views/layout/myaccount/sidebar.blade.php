<!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
-->
<aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
    <div>
        <div class="nk-gap-2"></div>

        <div class="nk-social-menu hidden-md-down">
            <ul>
                <li {{ (Request::is('myaccount') ? 'class=active' : '') }}><a href="{{ route('myaccount.profile.index') }}">Profile</a></li>
                <li {{ (Request::is('myaccount/game-account*') ? 'class=active' : '') }}><a href="{{ route('myaccount.game_account.index') }}">Game Accounts<span class="nk-badge">{{ Auth::user()->accounts->count()}}</span></a></li>
                <li {{ (Request::is('myaccount/characters') ? 'class=active' : '') }}><a href="{{ route('myaccount.characters.index') }}">Characters<span class="nk-badge">{{ Auth::user()->characters->count()}}</span></a></li>
                <li {{ (Request::is('myaccount/donations') ? 'class=active' : '') }}><a href="{{ route('myaccount.donations') }}">Donations</a></li>
                <li {{ (Request::is('myaccount/security') ? 'class=active' : '') }}><a href="{{ route('myaccount.security') }}">Account Security</a></li>
                {{--  <li><a href="#">Messages<span class="nk-badge">12</span></a></li>
                <li><a href="#">Settings</a></li>  --}}
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>

        <div class="nk-accordion hidden-lg-up" id="nk-social-menu-mobile" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="nk-social-menu-mobile-1-heading"><a data-toggle="collapse" data-parent="#nk-social-menu-mobile" href="#nk-social-menu-mobile-1" aria-expanded="true" aria-controls="nk-social-menu-mobile-1" class="collapsed">Menu</a></div>
                <div id="nk-social-menu-mobile-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="nk-social-menu-mobile-1-heading">
                    <div class="nk-social-menu">
                        <ul>
                            <li {{ (Request::is('myaccount') ? 'class=active' : '') }}><a href="{{ route('myaccount.profile.index') }}">Profile</a></li>
                            <li {{ (Request::is('myaccount/game-account*') ? 'class=active' : '') }}><a href="{{ route('myaccount.game_account.index') }}">Game Accounts</a></li>
                            <li {{ (Request::is('myaccount/characters') ? 'class=active' : '') }}><a href="{{ route('myaccount.characters.index') }}">Characters<span class="nk-badge">{{ Auth::user()->characters->count()}}</span></a></li>
                            <li {{ (Request::is('myaccount/donations') ? 'class=active' : '') }}><a href="{{ route('myaccount.donations') }}">Donations</a></li>
                            <li {{ (Request::is('myaccount/security') ? 'class=active' : '') }}><a href="{{ route('myaccount.security') }}">Account Security</a></li>
                            {{--  <li><a href="#">Messages<span class="nk-badge">12</span></a></li>
                            <li><a href="#">Settings</a></li>  --}}
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-gap-4 hidden-md-down"></div>
    </div>
</aside>
<!-- END: Sidebar -->
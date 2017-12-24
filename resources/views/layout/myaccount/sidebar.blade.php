<!--
    START: Sidebar

    Additional Classes:
        .nk-sidebar-left
        .nk-sidebar-right
        .nk-sidebar-sticky
-->
<aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
    <div class="nk-store-account-links">
        <ul>
            <li {{ (Request::is('myaccount') ? 'class=active' : '') }}><a href="{{ route('myaccount.profile') }}">Profile</a></li>
            <li ><a href="#">Game Account</a></li>
            <li><a href="#">Characters</a></li>
            <li {{ (Request::is('myaccount/donations') ? 'class=active' : '') }}><a href="{{ route('myaccount.donations') }}">Donations History</a></li>
            <li><a href="#">Account Security</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
</aside>
<!-- END: Sidebar -->
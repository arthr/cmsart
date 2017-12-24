<div class="container">

    <div class="row equal-height">
        <div class="col-lg-3">
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
                        <li class="active"><a href="#">Dashboard</a></li>
                        <li><a href="#">Game Account</a></li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Donations History</a></li>
                        <li><a href="#">Account Security</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </aside>
            <!-- END: Sidebar -->
        </div>
        <div class="col-lg-9">
            @include('myaccount.profile')
        </div>
    </div>

    <div class="nk-gap-2"></div>
</div>
<!--
            START: Navbar
    
            Additional Classes:
                .nk-navbar-sticky
                .nk-navbar-transparent
                .nk-navbar-autohide
                .nk-navbar-light
-->
<nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent">
    <div class="container">
        <div class="nk-nav-table">

            <a href="{{ route('home') }}" class="nk-nav-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" width="180">
            </a>


            <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                <li class="active  ">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class=" ">
                    <a href="#">Server Info</a>
                </li>
                <li class=" ">
                    <a href="#">Donate</a>
                </li>
                <li class=" ">
                    <a href="#">Ranking</a>
                </li>
                <li class=" ">
                    <a href="#">Forum</a>
                </li>
            </ul>

            <ul class="nk-nav nk-nav-right nk-nav-icons">

                <li class="single-icon hidden-lg-up">
                    <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                        <span class="nk-icon-burger">
                            <span class="nk-t-1"></span>
                            <span class="nk-t-2"></span>
                            <span class="nk-t-3"></span>
                        </span>
                    </a>
                </li>


                <li class=" ">
                    <a href="{{ Auth::check() ? route('myaccount.profile.index') : route('login') }}" class="link-effect-4">
                        <span class="nk-icon-toggle-front">
                            @guest
                            <span class="ion-lock-combination"></span>
                            My Account
                            @else
                            <span class="ion-person-stalker"></span>
                            {{ explode(' ', Auth::user()->name)[0] }}
                            @endguest
                        </span>
                    </a>
                </li>

                @if(Auth::check())
                <li class="single-icon hidden-xs">
                    <a href="{{ route('logout') }}" class="link-effect-4">
                        <span class="ion-log-out"></span>
                        Logout
                    </a>
                </li>
                @endif

                <li class="single-icon">
                    <a href="#" class="no-link-effect" data-nav-toggle="#nk-side">
                        <span class="nk-icon-burger">
                            <span class="nk-t-1"></span>
                            <span class="nk-t-2"></span>
                            <span class="nk-t-3"></span>
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- END: Navbar -->
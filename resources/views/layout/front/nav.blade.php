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
                    <a href="" onclick="return false;"class="nk-cart-toggle no-link-effect">
                        <span class="nk-icon-toggle" style="width: inherit;">
                            <span class="nk-icon-toggle-front">
                                @guest
                                <span class="ion-log-in"></span>
                                My Account
                                @else
                                <span class="ion-unlocked"></span>
                                {{ Auth::user()->name }}
                                @endguest
                            </span>
                            <span class="nk-icon-toggle-back">
                                <span class="ion-close"></span>
                                Close
                            </span>
                        </span>
                    </a>
                </li>

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
<!--
        START: Right Navbar
    
        Additional Classes:
            .nk-navbar-right-side
            .nk-navbar-left-side
            .nk-navbar-lg
            .nk-navbar-align-center
            .nk-navbar-align-right
            .nk-navbar-overlay-content
            .nk-navbar-light
-->

<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">

    <div class="nk-navbar-bg">
        <div class="bg-image" style="background-image: url('{{ asset('assets/images/bg-nav-side.jpg') }}')"></div>
    </div>


    <div class="nano">
        <div class="nano-content">
            <div class="nk-nav-table">

                <div class="nk-nav-row">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" width="150">
                    </a>
                </div>

                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">
                    <ul class="nk-nav">
                        <li class=" ">
                            <a href="#">Server Info</a>
                        </li>
                        <li class=" ">
                            <a href="#">Register</a>
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
                </div>
                <div class="nk-nav-row">
                    <div class="nk-nav-footer">
                        © Lineage Brasil Club All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END: Right Navbar -->

<!--
START: Navbar Mobile

Additional Classes:
    .nk-navbar-left-side
    .nk-navbar-right-side
    .nk-navbar-lg
    .nk-navbar-overlay-content
    .nk-navbar-light
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content hidden-lg-up nk-navbar-light">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" width="180">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->
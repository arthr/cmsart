<!--
        START: My Account
    
        Additional Classes:
            .nk-cart-light
-->
<div class="nk-cart">
    <div class="container">
        <div class="nk-page-background op-5"
             data-bg-mp4="{{ asset('assets/video/bg-2.mp4') }}"
             data-bg-webm="{{ asset('assets/video/bg-2.webm') }}"
             data-bg-ogv="{{ asset('assets/video/bg-2.ogv') }}"
             data-bg-poster="{{ asset('assets/video/bg-2.jpg') }}">

        </div>
        <div class="nk-boxtext-white">
            @guest
            <div class="container">
                <div class="nk-gap-1"></div>
                <div class="text-xs-center">
                    <h3 class="nk-title-back">My Account</h3>
                    <h2 class="nk-title h1">Login</h2>
                    <div class="nk-title-sep-icon">
                        <span class="icon">
                            <span class="ion-locked"></span>
                        </span>
                    </div>
                </div>
            </div>
            @else
            <div class="container">
                <div class="nk-gap-1"></div>
                <div class="text-xs-left">
                    <h3 class="nk-title-back">My Account</h3>
                    <h2 class="nk-title h1">{{ Auth::user()->name }}</h2>
                </div>
                <div class="nk-gap-1"></div>
            </div>
            @endguest
        </div>
    </div>

    @guest
    @include('layout.front.myaccount.login')
    @else
    @include('layout.front.myaccount.painel')
    @endguest

    <div class="nk-gap-5"></div>
</div>
<!-- END: My Account -->
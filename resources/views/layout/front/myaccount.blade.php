<!--
        START: My Account
    
        Additional Classes:
            .nk-cart-light
-->
<div class="nk-cart">
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="nk-page-background op-5"
             data-bg-mp4="{{ asset('assets/video/bg-2.mp4') }}"
             data-bg-webm="{{ asset('assets/video/bg-2.webm') }}"
             data-bg-ogv="{{ asset('assets/video/bg-2.ogv') }}"
             data-bg-poster="{{ asset('assets/video/bg-2.jpg') }}">
            
        </div>
        <div class="nk-boxtext-white">
            <div class="nk-gap-1"></div>
            <div class="container">
                <div class="text-xs-left">
                    <h3 class="nk-title-back">My Account</h3>
                    <h2 class="nk-title h1">My Account</h2>
                </div>
            </div>
            <div class="nk-gap-1"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="nk-box-3 bg-dark-1">
                    <h2 class="nk-title h3 text-xs-center">Login</h2>
                    <div class="nk-gap-2"></div>
                    
                    <form action="php/contact.php" class="nk-form nk-form-ajax nk-form-style-1">
                        
                        <input type="email" class="form-control required" name="email" placeholder="Email *">
                        <div class="nk-gap-1"></div>
                        
                        <input type="password" class="form-control required" name="password" placeholder="Password *">
                        <div class="nk-gap-1"></div>
                        
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        
                        <div class="nk-cart-btns">
                            <button type="submit" class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4">
                                Login
                            </button> &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#" class="nk-btn nk-btn-lg link-effect-4 nk-cart-toggle">
                                Go Back
                            </a>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="nk-gap-5"></div>
</div>
<!-- END: My Account -->
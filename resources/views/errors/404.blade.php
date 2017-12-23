@extends('layout.front.master')

@section('content')
<!-- START: Header Title -->
<!--
Additional Classes:
.nk-header-title-sm
.nk-header-title-md
.nk-header-title-lg
.nk-header-title-xl
.nk-header-title-full
.nk-header-title-parallax
.nk-header-title-parallax-opacity
.nk-header-title-boxed
-->
<div class="nk-header-title nk-header-title-full nk-header-title-parallax nk-header-title-parallax-opacity">
    <div class="bg-image">
        <div style="background-image: url('{{ asset('assets/images/image-2.jpg') }}');" class="op-8"></div>
    </div>
    <div class="nk-header-table">
        <div class="nk-header-table-cell">
            <div class="container">




                <div class="nk-header-text">

                    <div class="nk-gap-4"></div>
                    <div class="container">
                        <div class="text-xs-center">
                            <h2 class="nk-title display-4">Page Not Found</h2>
                            <div class="nk-gap-2"></div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <p class="lead">The page you are looking for no longer exists. Perhaps you can return back to the site’s homepage and see if you can find what you are looking for.</p>

                                    <div class="nk-gap-2"></div>
                                    <a href="{{ route('home') }}" class="nk-btn nk-btn-lg link-effect-4">Go to Homepage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-4"></div>

                </div>


            </div>
        </div>
    </div>

</div>
<!-- END: Header Title -->
@endsection
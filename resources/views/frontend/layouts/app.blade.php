<!DOCTYPE html>
<html lang="ge">

<!-- header -->
@include('frontend.partials.head')
<!--// header -->

<body>
    <main>
        <!-- header -->
        @include('frontend.partials.header')
        <!--// header -->
        <!-- Responsive Header -->
        <div class="res-header">
            <div class="res-header-top">
                <div class="res-top-links2">
                    <a class="theme-bg" href="#0" title="" itemprop="url"><i class="fa fa-shopping-basket"> </i> პროდუქცია</a>
                    <a class="blue-bg" href="#0" title="" itemprop="url"><i class="fa fa-sign-in theme-clr"> </i> ავტორიზაცია</a>
                </div>
            </div>
            <div class="res-logo-sec">
                <div class="logo"><a href="index.html" title="" itemprop="url"><img src="{{ asset('frontend/assets/images/logo-mobile.png') }}" alt="logo3.png" itemprop="image"></a></div>
                <span class="res-menu-btn blue-bg brd-rd5"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="res-menu">
                <span class="res-menu-close brd-rd5"><i class="fa fa-close"></i></span>
                <ul>


                    <li><a href="/" title="" itemprop="url">მთავარი</a></li>
                    <li><a href="/products" title="" itemprop="url">პროდუქცია</a></li>
                    <li><a href="/about" title="" itemprop="url">ჩვენ შესახებ</a></li>
                    <li><a href="#0" title="" itemprop="url">სიახლეები</a></li>
                    <li><a href="/contact" title="" itemprop="url">კონტაქტი</a></li>

                </ul>
            </div>
        </div>
        <!-- // Responsive Header -->


            <!-- Main Content  -->
            @yield('content')
            <!-- // Main Content  -->



        <!-- footer -->
        @include('frontend.partials.footer')
        <!--// footer -->
        <div class="bottom-bar text-center">
            <div class="container"><p itemprop="description">ALSAGI © {{ date('Y')}} | Design by <a class="theme-clr" href="https://diem.ge" title="Theme-Ink" itemprop="url" target="_blank">DMG <sup>®</sup></a></p></div>
        </div>
    </main>
    <!-- js -->
    @include('frontend.partials.js')
    <!--// js -->

</body>
</html>

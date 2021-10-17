@extends('frontend.layouts.app')

@section('title', 'კონტაქტი')

@section('content')

        <section>
            <div class="gap black-layer opc5">
                <div class="fixed-bg2" style="background-image: url(frontend/assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pag-tp">
                        <div class="pag-tp-inr">
                            <h1 itemprop="headline">საკონტაქტო ინფორმაცია</h1>
                            <p itemprop="description"></p>
                        </div>
                        <ol class="breadcrumb brd-rd30 theme-bg">
                            <li class="breadcrumb-item"><a href="/" title="" itemprop="url">მთავარი</a></li>
                            <li class="breadcrumb-item active">კონტაქტი</li>
                        </ol>
                    </div><!-- Page Top -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="cont-wrp">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="cont-desc">
                                    <h2 itemprop="headline">გაქვთ რაიმე კითხვა?</h2>
                                    <p itemprop="description">

                                    </p>
                                    <div class="cnt-inf-lst">
                                        <div class="cnt-inf-inr">
                                            <i class="fa fa-envelope-o theme-clr"></i>
                                            <strong>ელ.ფოსტა</strong>
                                            <a href="mailto:" itemprop="url">info@alsagi.ge</a>
                                        </div>
                                        <div class="cnt-inf-inr">
                                            <i class="fa fa-map-marker theme-clr"></i>
                                            <strong>მისამართი</strong>
                                            <span>საქართველო . თელავი , ერეკლე II -ის ქ.21 </span>
                                        </div>
                                        <div class="cnt-inf-inr">
                                            <i class="fa fa-phone theme-clr"></i>
                                            <strong>ტელეფონი</strong>
                                            <span>+(995) 571 62 72 62</span>
                                        </div>
                                        <div class="scl1">
                                            <a class="facebook" href="https://www.facebook.com/alsagi.ge" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a class="linkedin" href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <form class="cont-frm" action="#0">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input class="brd-rd30" type="text" placeholder="სახელი">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input class="brd-rd30" type="email" placeholder="ელ.ფოსტა">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <input class="brd-rd30" type="text" placeholder="ტელეფონი">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <textarea class="brd-rd30" placeholder="შეტყობინება"></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <button class="theme-btn theme-bg brd-rd30" type="submit">გაგზავნა</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- Contact Sec -->
                </div>
            </div>
        </section>

@endsection

@extends('frontend.layouts.app')

@section('title', ' მთავარი ')

@section('content')

        <section>
            <div class="gap no-gap">
                <div class="fea-wrp3">
                    <div class="feat-img-car owl-carousel">
                        @foreach ($sliders as $row)

                            <img src="{{ $row->image}}" alt="{{ $row->title }}" itemprop="image">

                        @endforeach

                    </div>
                    <div class="fea-cap-wrp">
                        {{-- @foreach ($sliders as $row) --}}
                        <div class="container">
                            <div class="fea-cap-inr">
                                <div class="row">

                                    {{-- <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="fea-cap-img">
                                            <img src="frontend/assets/images/resources/slide-mckp.png" alt="slide-mckp.png" itemprop="image">
                                            <div class="fea-prd-prc brd-rd50">
                                                $12<sup>.00</sup>
                                                <span class="theme-clr">Special Price</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="fea-cap-inf">
                                            <strong><span class="theme-clr">GUN</span>Rockwall Professional <br> Firefighters Association</strong>
                                            <h1 itemprop="headline">Beretta Px4 Storm</h1>
                                            <span>9x19mm Parabellum .40 S&W .45 ACP</span>
                                            <a class="theme-btn brd-rd30" href="#0" title="" itemprop="url">დათვალიერება</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="gap no-gap overlap-110">
                <div class="container">
                    <div class="fea-wrp overlap110 remove-ext3">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fea-bx-wrp">
                                    <div class="fea-bx-inr">
                                        <img src="frontend/assets/images/resources/fea-img1.jpg" alt="fea-img1.jpg" itemprop="image">
                                        <div class="fea-inf">
                                            <h6 itemprop="headline">გლუვლულიანი თოფები</h6>
                                            <a href="#" title="" itemprop="url">ვრცლად</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fea-bx-wrp">
                                    <div class="fea-bx-inr">
                                        <img src="frontend/assets/images/resources/fea-img2.jpg" alt="fea-img2.jpg" itemprop="image">
                                        <div class="fea-inf">
                                            <h3 itemprop="headline"><span>პნევმატური </span>თოფები</h3>
                                            <a href="#" title="" itemprop="url">ვრცლად</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="fea-bx-wrp">
                                    <div class="fea-bx-inr">
                                        <img src="frontend/assets/images/resources/fea-img2.jpg" alt="fea-img2.jpg" itemprop="image">
                                        <div class="fea-inf">
                                            <h4 itemprop="headline">პნევმატური პისტოლეტები</span></h4>
                                            <a href="#" title="" itemprop="url">ვრცლად</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="gap blue-layer opc8 hlf-parallax remove-bottom">
                <div class="fixed-bg" style="background-image: url(frontend/assets/images/parlx2.jpg);"></div>
                <div class="container">
                    <div class="sec-title text-center">
                        <h2 itemprop="headline"><i class="theme-clr">ჩვენი პროდუქცია</i>რას გთავაზობთ?</h2>
                    </div>
                    <div class="tbs-wrp text-center overlap-140">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tb1"><i class="theme-clr flaticon-gun-2"></i>იარაღები</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tb2"><i class="theme-clr flaticon-uzi"></i>ვაზნები</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tb3"><i class="theme-clr flaticon-gun-1"></i>დანები</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tb4"><i class="theme-clr flaticon-bullets"></i>ანკესები</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tb5"><i class="theme-clr flaticon-knife"></i>ნავები</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tb6"><i class="theme-clr flaticon-guns"></i>ტივტივები</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tb1">
                                <ul class="tbs-dta">
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img1-1.jpg" alt="tbs-img1-1.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">NOVA LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img1-2.jpg" alt="tbs-img1-2.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">APEX LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img1-3.jpg" alt="tbs-img1-3.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">ATOM LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img1-4.jpg" alt="tbs-img1-4.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">BUZZ LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img1-5.jpg" alt="tbs-img1-5.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">C LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tb2">
                                <ul class="tbs-dta">
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img2-1.jpg" alt="tbs-img2-1.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">NOVA LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img2-2.jpg" alt="tbs-img2-2.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">APEX LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img2-3.jpg" alt="tbs-img2-3.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">ATOM LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img2-4.jpg" alt="tbs-img2-4.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">BUZZ LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img2-5.jpg" alt="tbs-img2-5.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">C LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tb3">
                                <ul class="tbs-dta">
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img3-1.jpg" alt="tbs-img3-1.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">NOVA LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img3-2.jpg" alt="tbs-img3-2.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">APEX LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img3-3.jpg" alt="tbs-img3-3.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">ATOM LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img3-4.jpg" alt="tbs-img3-4.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">BUZZ LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img3-5.jpg" alt="tbs-img3-5.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">C LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tb4">
                                <ul class="tbs-dta">
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img4-1.jpg" alt="tbs-img4-1.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">NOVA LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img4-2.jpg" alt="tbs-img4-2.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">APEX LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img4-3.jpg" alt="tbs-img4-3.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">ATOM LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img4-4.jpg" alt="tbs-img4-4.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">BUZZ LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img4-5.jpg" alt="tbs-img4-5.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">C LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tb5">
                                <ul class="tbs-dta">
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img5-1.jpg" alt="tbs-img5-1.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">NOVA LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img5-2.jpg" alt="tbs-img5-2.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">APEX LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img5-3.jpg" alt="tbs-img5-3.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">ATOM LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img5-4.jpg" alt="tbs-img5-4.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">BUZZ LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img5-5.jpg" alt="tbs-img5-5.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">C LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tb6">
                                <ul class="tbs-dta">
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img6-1.jpg" alt="tbs-img6-1.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">NOVA LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img6-2.jpg" alt="tbs-img6-2.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">APEX LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img6-3.jpg" alt="tbs-img6-3.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">ATOM LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img6-4.jpg" alt="tbs-img6-4.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">BUZZ LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbs-bx">
                                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/tbs-img6-5.jpg" alt="tbs-img6-5.jpg" itemprop="image"></a>
                                            <div class="tbs-inf">
                                                <h6 itemprop="headline"><a href="#" title="" itemprop="url">C LAUNCHER</a></h6>
                                                <span class="theme-clr">20 ITEMS</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="gap gray-bg top-spac260">
                <div class="container">
                    <div class="about-video-sec">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-lg-5">
                                <div class="about-desc">
                                    <h2 itemprop="headline"><i class="theme-clr">ვინ ვართ ჩვენ ?</i>რა სახის პროდუქციას ვყიდით?</h2>
                                    <p itemprop="description">ჩვენთან არსებული , ყველას სახის პროდუქცია გათვლილია მომხმარებელფა ფართო აუდიტორისათვის, ჩვენთან შეგიძლიათ შეიძინოთ: სანადირო , სათევზაო და  ლაშქრობისათვის აუცილებელი ინვენტარი </p>
                                    <span class="theme-clr"><i class="flaticon-security-on"></i> ჩვენ ვყიდით გარანტიით</span>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-12 col-lg-1"></div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="about-video">
                                    <div class="about-video-inr">
                                        <img src="frontend/assets/images/resources/about-video-img2.jpg" alt="about-video-img2.jpg" itemprop="image">
                                        <a class="brd-rd50" data-fancybox href="https://www.youtube.com/embed/J37evpYs28M" title="" itemprop="url"><i class="fa fa-play"></i></a>
                                    </div>
                                    <img src="frontend/assets/images/resources/about-video-img1.jpg" alt="about-video-img1.jpg" itemprop="image">
                                </div>
                            </div>
                        </div>
                    </div><!-- About Video Sec -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="sec-title text-center">
                        <h2 itemprop="headline"><i class="theme-clr">ბოლოს დამატებული </i>პროდუქცია</h2>
                        <span class="theme-clr"><i class="flaticon-bullet"></i><i class="flaticon-bullet"></i><i class="flaticon-bullet"></i></span>
                    </div>
                    <div class="remove-ext3">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img1.jpg" alt="product-img1.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img1.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">Beretta Nano</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img2.jpg" alt="product-img2.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img2.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">U22 Neos</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img3.jpg" alt="product-img3.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img3.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">Pietro Beretta</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img4.jpg" alt="product-img4.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img4.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">Beretta Pico</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img5.jpg" alt="product-img5.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img5.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">LR-300</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img6.jpg" alt="product-img6.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img6.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">Multi Caliber</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img7.jpg" alt="product-img7.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img7.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">Pistol 9mm</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="product-box">
                                    <img src="frontend/assets/images/resources/product-img8.jpg" alt="product-img8.jpg" itemprop="image">
                                    <div class="product-btns">
                                        <a class="brd-rd50" href="assets/images/resources/product-img8.jpg" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                        <a class="brd-rd50" href="product-details.html" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>
                                        <a class="brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-random"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <span class="price"><ins>$85.00</ins><del>$42.00</del></span>
                                        <h5 itemprop="headline"><a href="product-details.html" title="" itemprop="url">Bullet 800cc</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-all text-center">
                        <a class="grd-lyr theme-btn brd-rd30" href="/products" title="" itemprop="url"> <h4 style="color: white;" > ყველა პროდუქტი </h4></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="gap gray-bg">
                <div class="container">
                    <div class="sec-title text-center">
                        <h2 itemprop="headline"><i class="theme-clr">ბოლოს დამატებული</i> სააქციო შეთავაზებები </h2>
                        <span class="theme-clr"><i class="flaticon-bullet"></i><i class="flaticon-bullet"></i><i class="flaticon-bullet"></i></span>
                    </div>
                    <div class="remove-ext7">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-lg-8">
                                <div class="post-box">
                                    <a href="blog-detail.html" title="" itemprop="url"><img src="frontend/assets/images/resources/blg-big-img1.jpg" alt="blg-big-img1.jpg" itemprop="image"></a>
                                    <div class="post-info">
                                        <span class="post-date theme-clr"><a href="#" title="" itemprop="url">24 JAN 2018</a></span>
                                        <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Gun store shows different options to avoid regestering</a></h5>
                                        <p itemprop="description">With ste-of-the-art indoor training facilities state-of-the-art ilities and full service.</p>
                                        <span class="post-author"><img class="brd-rd50" src="frontend/assets/images/resources/authr-img1.jpg" alt="authr-img1.jpg" itemprop="image">By <a href="#" title="" itemprop="url">John Smith</a></span>
                                        <a href="blog-detail.html" title="" itemprop="url"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="post-box">
                                    <a href="blog-detail.html" title="" itemprop="url"><img src="frontend/assets/images/resources/blg-sml-img1.jpg" alt="blg-sml-img1.jpg" itemprop="image"></a>
                                    <div class="post-info">
                                        <span class="post-date theme-clr"><a href="#" title="" itemprop="url">24 JAN 2018</a></span>
                                        <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Gun with the California Department of Justice</a></h5>
                                        <span class="post-author"><img class="brd-rd50" src="frontend/assets/images/resources/authr-img2.jpg" alt="authr-img2.jpg" itemprop="image">By <a href="#" title="" itemprop="url">John Smith</a></span>
                                        <a href="blog-detail.html" title="" itemprop="url"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="post-box">
                                    <a href="blog-detail.html" title="" itemprop="url"><img src="frontend/assets/images/resources/blg-sml-img2.jpg" alt="blg-sml-img2.jpg" itemprop="image"></a>
                                    <div class="post-info">
                                        <span class="post-date theme-clr"><a href="#" title="" itemprop="url">24 JAN 2018</a></span>
                                        <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Weapons can appreciate our Board.</a></h5>
                                        <span class="post-author"><img class="brd-rd50" src="frontend/assets/images/resources/authr-img3.jpg" alt="authr-img3.jpg" itemprop="image">By <a href="#" title="" itemprop="url">John Smith</a></span>
                                        <a href="blog-detail.html" title="" itemprop="url"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="post-box">
                                    <a href="blog-detail.html" title="" itemprop="url"><img src="frontend/assets/images/resources/blg-sml-img3.jpg" alt="blg-sml-img3.jpg" itemprop="image"></a>
                                    <div class="post-info">
                                        <span class="post-date theme-clr"><a href="#" title="" itemprop="url">24 JAN 2018</a></span>
                                        <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Services akshay handge pharetra, Eratd.</a></h5>
                                        <span class="post-author"><img class="brd-rd50" src="frontend/assets/images/resources/authr-img4.jpg" alt="authr-img4.jpg" itemprop="image">By <a href="#" title="" itemprop="url">John Smith</a></span>
                                        <a href="blog-detail.html" title="" itemprop="url"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="post-box">
                                    <a href="blog-detail.html" title="" itemprop="url"><img src="frontend/assets/images/resources/blg-sml-img4.jpg" alt="blg-sml-img4.jpg" itemprop="image"></a>
                                    <div class="post-info">
                                        <span class="post-date theme-clr"><a href="#" title="" itemprop="url">24 JAN 2018</a></span>
                                        <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Gun are best velit mauris aks egestasut Aliquam</a></h5>
                                        <span class="post-author"><img class="brd-rd50" src="frontend/assets/images/resources/authr-img5.jpg" alt="authr-img5.jpg" itemprop="image">By <a href="#" title="" itemprop="url">John Smith</a></span>
                                        <a href="blog-detail.html" title="" itemprop="url"><i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="gap theme-bg grd-lyr top-spac60 bottom-spac60">
                <div class="container">
                    <div class="spnsr-wrp text-center spnsr-car owl-carousel">
                        <div class="spnsr-itm">
                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/spnsr-img1.png" alt="spnsr-img1.png" itemprop="image"></a>
                        </div>
                        <div class="spnsr-itm">
                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/spnsr-img2.png" alt="spnsr-img2.png" itemprop="image"></a>
                        </div>
                        <div class="spnsr-itm">
                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/spnsr-img3.png" alt="spnsr-img3.png" itemprop="image"></a>
                        </div>
                        <div class="spnsr-itm">
                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/spnsr-img4.png" alt="spnsr-img4.png" itemprop="image"></a>
                        </div>
                        <div class="spnsr-itm">
                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/spnsr-img5.png" alt="spnsr-img5.png" itemprop="image"></a>
                        </div>
                        <div class="spnsr-itm">
                            <a href="#" title="" itemprop="url"><img src="frontend/assets/images/resources/spnsr-img6.png" alt="spnsr-img6.png" itemprop="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

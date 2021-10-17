
@extends('layouts.app')

@section('title', ' პროდუქცია')

@section('content')

        <section>
            <div class="gap black-layer opc5">
                <div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pag-tp">
                        <div class="pag-tp-inr">
                            <h1 itemprop="headline">Product Details</h1>
                        </div>
                        <ol class="breadcrumb brd-rd30 theme-bg">
                            <li class="breadcrumb-item"><a href="/" title="" itemprop="url">მთავარი</a></li>
                            <li class="breadcrumb-item"><a href="/products" title="" itemprop="url">პროდუქცია</a></li>
                            <li class="breadcrumb-item active">PRODUCT DETAILS</li>
                        </ol>
                    </div><!-- Page Top -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="product-detail-wrp">
                        <div class="product-detail">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-lg-5">
                                    <div class="product-detail-thumb">
                                        <img src="assets/images/resources/product-detail-img1.jpg" alt="product-detail-img1.jpg" itemprop="image">
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-lg-7">
                                    <div class="product-detail-inf">
                                        <div class="product-rating">
                                            <span class="star-rating theme-clr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                                            <a class="review-link theme-clr" href="#" title="" itemprop="url">2.4 RATING</a>
                                        </div>
                                        <h3 itemprop="headline">Beretta Nano</h3>
                                        <p itemprop="description" class="price"><ins>$85.00</ins><del>$42.00</del></p>
                                        <div class="product-detail-description">
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consect adipisici eiusmod ut labore et dolore magna labore et dolore magna aliqua.</p>
                                        </div>
                                        <form class="cart">
                                            <div class="quantity">
                                                <input type="text">
                                            </div>
                                            <button type="submit" class="theme-btn theme-bg brd-rd30"><i class="flaticon-shopping-basket-button"></i>ADD TO CART</button>
                                        </form>
                                        <a href="#" title="" itemprop="url"><i class="fa fa-random"></i>COMPARE</a>
                                        <div class="product_meta">
                                            <span class="posted_in">
                                                <span class="theme-clr">CATEGORY:</span>
                                                <a href="#" title="" itemprop="url">gun</a>,
                                                <a href="#" title="" itemprop="url">shooting</a>,
                                                <a href="#" title="" itemprop="url">products</a>,
                                                <a href="#" title="" itemprop="url">new</a>,
                                                <a href="#" title="" itemprop="url">style</a>
                                            </span>
                                            <span class="tagged_as">
                                                <span class="theme-clr">TAGS:</span>
                                                <a href="#" title="" itemprop="url">gun</a>,
                                                <a href="#" title="" itemprop="url">shooting</a>,
                                                <a href="#" title="" itemprop="url">products</a>,
                                                <a href="#" title="" itemprop="url">new</a>,
                                                <a href="#" title="" itemprop="url">style</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail-tabs">
                            <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" href="#discription" data-toggle="tab" itemprop="url">აღწერა</a></li>
                            <li class="nav-item"><a class="nav-link" href="#additional-information" data-toggle="tab" itemprop="url">სპეციფიკაციები</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="discription">
                                    <p itemprop="description">With ste-of-the-art indoor training facilities and full sece custom shop on lion, we can accomm most reests. All modern weapon enthussts can te our broad services and real-world, experienc. state-of-the-art ilities and full service With ste-of-the-art indoor training facilities and full sece custom shop on lion, we can accomm most reests.

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="additional-information">
                                    <div class="shop-table-wrap">
                                        <table class="shop_attributes">
                                            <tbody>
                                                <tr><th class="theme-clr">შესაძლებლობები:</th><td>10+1, 30+1</td></tr>
                                                <tr><th class="theme-clr">წონა:</th><td>6.5 lb, 7 lb</td></tr>
                                                <tr><th class="theme-clr">დიაპაზონი:</th><td>22M</td></tr>
                                                <tr><th class="theme-clr">ტყვია:</th><td>14</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Product Detail Wrap -->
                </div>
            </div>
        </section>
@endsection